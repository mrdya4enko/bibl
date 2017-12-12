<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\book_item;
use App\user;
use App\checkout;
use DB;

class CheckoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkouts=checkout::all();

        return view('admin/checkouts/index')->with('checkouts',$checkouts);

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
        $checkout= checkout::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $checkout=checkout::find($id);
        return view('admin/checkouts/edit')->with('checkout',$checkout);
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
        $checkout = checkout::find($id);
        $checkout->checkouts_reader = $request->id;
        $checkout->checkouts_vozvrat=$request->vozvrat;
        $checkout->save();
        return redirect('admin/checkouts/'.$checkout->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function extradition()
    {
        $extraditions = checkout::where('checkout_fact_vozvrat', '!=', 1)->get();
        $extraditions->load('user', 'book.book');

        return view('admin.extradition.index', compact('extraditions'));
    }

    public function extraditionBook($id)
    {
        $checkout = checkout::findOrFail($id);
        $checkout->checkout_fact_vozvrat = 1;
        $checkout->checkout_worker = Auth()->user()->id;

        if ($checkout->save()) {
            return redirect()->back()->with('success', "Книга возвращена");
        }

        return redirect()->back()->with('fail', "Книга не возвращена");
    }


}
