@extends ('admin.layouts.app_admin')
@section('content')
<h3>Читатель  ----- {{$checkout->user->name}} </h3> 

<h3>Дата выдачи книги ----- {{$checkout->created_at}}</h3>
<h3>Дата возврата книги ----- {{$checkout->checkout_vozvrat}}</h3>
<h3>Выдана книга  ----- {{$checkout->checkout_user}}</h3>
<br>
<div class="col-sm-1">
            <a class="btn btn-block btn-default" href="{{url('admin/checkout')}}">Назад</a>
        </div>
<div class="col-sm-1">
<a href="/admin/checkouts/{{$checkout->id}}/edit" class ="btn btn-default">Изменить</a>
        </div>
@endsection
