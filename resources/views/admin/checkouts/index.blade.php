@extends ('admin.layouts.app_admin')
@section('content')
<h1> Все выдачи</h2>
<table class="table table-bordered">
<thead>
                    <tr>
                        <th><h4>Id</h4></th>
                        <th><h4>Читатель</h4></th>
                        <th><h5>Дата выдачи</h4></th>
                        <th><h4>Книга</h4></th>
                        <th><h4>Сотрудник</h4></th>
                    </tr>
                    </thead> 
                    <tbody>  
@if(count($checkouts)>1)
@foreach($checkouts as $checkout)
                            
                            <tr>
                                <td><h4>{{$checkout->id}}</h4></td>
                                <td><h4>{{$checkout->user->name}}</h4></td>
                                <td><h4>{{$checkout->created_at}}</h4></td>
                                <td><h4>{{$checkout->book_item->id}}</h4></td>
                                <td><h4>{{$checkout->user->name}}</h4></td>
                            </tr>
                              
@endforeach 
</tbody>
                </table>    
@else
<p>No checkouts found</p>
@endif
@endsection
@endsection