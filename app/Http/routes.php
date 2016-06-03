<?php

use App\Blogger;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return 'welcome';
// });

Route::auth();

Route::get('create','TaskController@create');

Route::post('store','TaskController@store');

Route::get('edit/{id}','TaskController@edit');

Route::post('update','TaskController@update');

// Route::post('/','TaskController@index');


Route::get('/', function () {
      $tasks = Blogger::orderBy('created_at', 'desc')->paginate(3);

      return view('index', [
      'tasks'=>$tasks
    ]);
});

// Route::delete('delete','TaskController@delete');
Route::delete('/task/{task}', function(Blogger $task)
{
    $task->delete();

    return redirect('/');
});
