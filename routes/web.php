<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index');
Route::get('heading/{id}', 'HomeController@heading');
Route::get('/test', function () {
  return view('test');
});
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth']],function(){
    Route::get('/','DashboardController@dashboard')->name('admin.index');
    Route::get('/create','DashboardController@create');
    Route::post('/create_heading','DashboardController@store_heading');
    Route::post('/create_language','DashboardController@store_lang'); 
    Route::post('/create_phouse','DashboardController@store_phouse'); 
    Route::post('/create_author','DashboardController@store_author'); 
    Route::post('/create_book','DashboardController@store_book');
    Route::get('/create2/{id}','DashboardController@book_author');
    Route::post('/create2','DashboardController@store_authors');
    Route::post('/checkout','DashboardController@store_checkout'); 
    Route::get('/checkout','DashboardController@create_checkout'); 
    Route::get('/extradition','CheckoutsController@extradition');
    Route::get('/extradition/book/{checkout}','CheckoutsController@extraditionBook');
    Route::resource('checkouts','CheckoutsController');
});
Route::get('/book_items/{id}','BItemsController@index');
Route::get('/kategory/{id}','BooksController@kategory');
Route::get('/authors/{id}','BooksController@authors');
Route::post('/book_items','BItemsController@store');
Route::delete('/book_items/{id}','BItemsController@destroy');
Route::resource('books','BooksController');
Route::get('/books/{id}/edit2','BooksController@edit2');   
Route::put('/books/{id}/edit2','BooksController@update_book_author');
Route::delete('/books/{id1}/{id2}','BooksController@destroy_book_author');
/*Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'asc')->get();
    
      return view('tasks', [
        'tasks' => $tasks
      ]);
});

  /*
  Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
      ]);
    
      if ($validator->fails()) {
        return redirect('/')
          ->withInput()
          ->withErrors($validator);
      }
      $task = new Task;
      $task->name = $request->name;
      $task->save();
    
      return redirect('/');
  });

  
  Route::delete('/task/{task}', function (Task $task) {
    $task->delete();
    
      return redirect('/');
  });*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
