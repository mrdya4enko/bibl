j@extends ('admin.layouts.app_admin')
@section('content')
<div class="container">
@if(count($book)>0)
<div class="row">
    <div class="col-sm-4">
        <img style="width:80%"src="../../public/storage/cover_images/{{$book->books_image}}">
    </div>
    <div class="col-sm-7">
        <h2>{{$book->books_name}}<h2>
        <h4>Автор:
            @foreach ($book->authors as $author)
                @if($loop->first==FALSE)
                    , 
                @endif
                <a href="{{ url('/authors/'.$author->id) }}">{{$author->author_name}} {{$author->author_surname}} {{$author->author_middlename}}</a>
            @endforeach
        <h4>
        <h4>Год издания: {{$book->books_year}}</h4>
        <h4>Направление: <a href="{{ url('/kategory/'.$book->heading->id) }}">{{$book->heading->heading_name}}</a></h4>
        <h4>Язык: {{$book->language->languages_name}}</h4>
        <h4>Издательство: {{$book->phouse->phouses_name}}</h4>
        <h4>Количество страниц: {{$book->books_pages}}</h4>
        @if(Auth::user()->hasRole('Admin'))
            <h4>Количество экземпляров: <a href="{{ url('/book_items/'.$book->id) }}">{{count($book->book_items)}}</a></h4>
        @endif
        <h4>Описание:<br><br> {{$book->books_descrip}}</h4>
    </div>
</div>
@if(Auth::user()->hasRole('Admin'))
<div class="col-sm-3">
    <div class="col-sm-6 ">
        <a class="btn btn-block btn-default" href="{{ url('/books/'.$book->id.'/edit') }}">Edit</a>
    </div>
    <div class="col-sm-6 ">
        <form method="POST" action="{{ url('/books/'.$book->id) }}"> 
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            <button class="btn btn-block btn-default">Delete</button>
        </form>
    </div>
</div>
@endif
@else
    <h1>not found</h1>   
@endif
</div>
@endsection