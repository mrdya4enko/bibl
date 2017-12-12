@extends('layouts.library')

@section('content')
<div class="wrapper">
    <nav id="search">
        <form action="#/search">
            <label for="search_input">Воспользуйтесь поиском</label>
            <input autocomplete="off" class="acInput" data-autocomplete="/services/en/autocomplete" id="search_input" name="q" placeholder="Поиск книги" required="" type="search">
            <button type="submit">Найти</button>
        </form>
    </nav>
    <nav id="categories">
        <ul>
            <li>
                <a href="">Разделы</a> <span class="toggle"></span>
                <ul>
                    @foreach($headings as $heading)
                        <li>
                            <a href="{{ url('heading', $heading->id) }}">{{ $heading->heading_name }}</a> <span class="toggle"></span>
                        </li>
                    @endforeach

                </ul>
            </li>
        </ul>
        </li>
        </ul>
    </nav>


    <section class="featured">
        <h2>{{ $oneheding->heading_name }}</h2>
        <div class="carouselViewport" style="height: 260px;">
            <div style="position: relative; overflow: hidden; height: 260px;">
                <ol class="books carousel" style="position: absolute;">
                    @if(count($oneheding->books ))
                    @foreach($oneheding->books as $book)
                        <li style="margin-left: 7px; margin-right: 7px;">
                            <a href="{{ url('book', $book->id) }}">
                                <h3>{{ $book->books_name }}</h3><img alt="" src="images/{{ $book->books_image }}"></a>
                            <form action="{{ $book->id }}">
                                <button type="submit">Download!</button>
                            </form>
                        </li>

                    @endforeach
                    @endif
                    {{--<li style="margin-left: 7px; margin-right: 7px;">--}}
                        {{--<a href="#/coaching-tools-and-techniques-for-managers-ebook">--}}
                            {{--<h3>Coaching Tools and Techniques for Managers</h3><img alt="" src="images/coaching-tools-and-techniques-for-managers.jpg"></a>--}}
                        {{--<form action="#/coaching-tools-and-techniques-for-managers-ebook">--}}
                            {{--<button type="submit">Download!</button>--}}
                        {{--</form>--}}
                    {{--</li>--}}

                </ol>
            </div>
        </div>
    </section>
</div>
@endsection


