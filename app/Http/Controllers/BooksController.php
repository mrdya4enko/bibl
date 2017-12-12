<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\heading;
use App\language;
use App\phouse;
use App\book;
use App\author;
use App\author_book;
use App\book_item;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('HasRole:Admin',['except'=>['index','show']]);
    }
    public function index(Request $request)
    {
        $search=$request->search;
        $books=book::where('books_name','like','%'.$search.'%')
                    ->orwhereHas('authors',function($query) use ($search)
                    {
                        $query->where('author_name','like','%'.$search.'%')
                            ->orwhere('author_surname','like','%'.$search.'%')
                            ->orwhere('author_middlename','like','%'.$search.'%');
                    })
                    ->get();                 
        $books->load('authors', 'heading','language');
        $image_source=1;
        return view('books/index')->with('books',$books)->with('src',$image_source)->with('h',$search);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book=book::find($id);
        return view('books/show')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=book::find($id);
        $headings = heading::orderBy('heading_name', 'asc')->get();
        $languages=language::orderBy('languages_name', 'asc')->get();
        $phouses=phouse::orderBy('phouses_name', 'asc')->get();
        $authors=author::orderBy('author_name', 'asc')->get();
        return view('books/edit')->with('book',$book)
                                ->with('headings',$headings)
                                ->with('lang',$languages)
                                ->with('authors',$authors)
                                ->with('phouses',$phouses);
    }
    public function edit2($id)
    {
        $book=book::find($id);
        $authors=author::orderBy('author_name', 'asc')->get();
        return view('books/edit2')->with('book',$book)
                                ->with('authors',$authors);
    }
    public function update_book_author(Request $request,$id)
    {
        $author_book=author_book::where('book_id',$id)->where('author_id',$request->author_id)->get();
        foreach($author_book as $ab)
        {
            $a=author_book::find($ab->id);
            $a->author_id = $request->author;
            $a->save();
        }
        return redirect('/books/'.$id.'');
    }
    public function destroy_book_author($id1,$id2)
    {
        $author_book=author_book::where('book_id',$id1)->where('author_id',$id2)->get();
        foreach($author_book as $ab)
        {
            $a=author_book::find($ab->id);
            $a->delete();
        }
        return back();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } 
        $book = book::find($id);
        $book->books_name = $request->name;
        $book->books_heading=$request->heading;
        $book->books_lang=$request->lang;
        $book->books_pages=$request->pages;
        $book->books_phouse=$request->phouse;
        $book->books_year=$request->year;
        $book->books_descrip=$request->descrip;
        if($request->hasFile('cover_image')){
            $book->books_image = $fileNameToStore;
        }
        $book->save();
        return redirect('books/'.$book->id.'/edit2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = book::find($id);
        $authors=author_book::where('book_id',$id)->delete();  
        $items=book_item::where('book_id',$id)->delete();
        $book->delete();
        return redirect('admin/');
    }
    public function kategory($id)
    {
        $books=book::whereHas('heading',function($query) use ($id)
                    {
                        $query->where('id',$id);
                    })
                    ->get();                 
        $books->load('authors', 'heading','language');
        $image_source=0;
        $kategory=heading::find($id);
        return view('books/index')->with('books',$books)->with('src',$image_source)->with('h',$kategory->heading_name);
    }
    public function authors($id)
    {
        $books=book::whereHas('authors',function($query) use ($id)
        {
            $query->where('authors.id',$id);
        })
        ->get();                 
        $books->load('authors', 'heading','language');
        $image_source=0;
        $author=author::find($id);
        $author_name=$author->author_name." ".$author->author_surname." ".$author->author_middlename;
        return view('books/index')->with('books',$books)->with('src',$image_source)->with('h',$author_name);;
    }
}
