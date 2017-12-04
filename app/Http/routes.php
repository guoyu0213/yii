<?php 

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function()
{
    return 'Hello World';
}); 
Route::get('/abount','HomeController@getAbout'); //路由
Route::post('/add','HomeController@add');
Route::get('/show','HomeController@show');
Route::get('/delete','HomeController@delete');
Route::get('/update','HomeController@update');
Route::post('/updates','HomeController@updates');




Route::get('/redislogin','RedisController@redislogin');
Route::post('/redisinsert','RedisController@redisinsert');
Route::any('/redisshow','RedisController@redisshow');
Route::any('/redisadd','RedisController@redisadd');
Route::any('/rediszhang','RedisController@rediszhang');
Route::any('/redisxiaoxi','RedisController@redisxiaoxi');












//Route::resource('user','UserController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
