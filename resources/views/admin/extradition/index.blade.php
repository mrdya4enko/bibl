@extends ('admin.layouts.app_admin')
@section('content')

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">x</span></button>
            <h4>Success!</h4>
            <p>{{session('success')}}</p>
        </div>
    @elseif (session('fail') or !$errors->isEmpty())
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">x</span></button>
            <h4>Error!</h4>
            <p>{{session('fail')}}</p>
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">Возврат книги</h4>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <td>Дата выдачи</td>
                    <td>Дата возвращения</td>
                    <td>Читатель</td>
                    <td>Книга</td>
                    <td>Вернуть</td>
                </tr>

            @foreach($extraditions as $extradition)
                <tr>
                    <td>{{ $extradition->created_at }}</td>
                    <td>{{ $extradition->checkout_vozvrat }}</td>
                    <td>{{ $extradition->user->name }}</td>
                    <td>{{ $extradition->book->book->books_name }}</td>
                    <td><a href="{{ url('admin/extradition/book', $extradition) }}" class="btn btn-default">Вернуть</a></td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection
