<?php
use App\User;
use App\Room;
use App\Contact;
use Illuminate\Support\Facades\Input;
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


Route::get('/', function () {
    return view('indexx');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
////////////////////////////
Route::get('/users', function () {
    return view('users');
});

Route::any('/users',function(){

    $u = Input::get ( 'u' );
    $user = User::where('name','LIKE','%'.$u.'%')->orWhere('email','LIKE','%'.$u.'%')->orWhere('password','LIKE','%'.$u.'%')->get();
    if(count($user) > 0)
        return view('users')->withDetails($user)->withQuery ( $u );
    else return view ('users')->withMessage('No Details found. Try to search again !');
});



///////////////////////////
Route::get('/searchroom', function () {
    return view('searchroom');
});

Route::any('/searchroom',function(){

    $q = Input::get ( 'q' );
    $user = Room::where('capacity','LIKE','%'.$q.'%')->orWhere('roomtype','LIKE','%'.$q.'%')->orWhere('about','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('searchroom')->withDetails($user)->withQuery ( $q );
    else return view ('searchroom')->withMessage('No Details found. Try to search again !');
});
///////////////////////////

Route::get('/msg', function () {
    return view('msg');
});

Route::any('/msg',function(){

    $q = Input::get ( 'q' );
    $user = Contact::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->orWhere('subject','LIKE','%'.$q.'%')->orWhere('message','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('msg')->withDetails($user)->withQuery ( $q );
    else return view ('msg')->withMessage('No Details found. Try to search again !');
});
///////////////////////////
Route::get('/myroom', function () {
    return view('myroom.index');
});

Route::any('/myroom',function(){

    $q = Input::get ( 'q' );
    $user = Room::where('capacity','LIKE','%'.$q.'%')->orWhere('roomtype','LIKE','%'.$q.'%')->orWhere('about','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('myroom.index')->withDetails($user)->withQuery ( $q );
    else return view ('myroom.index')->withMessage('No Details found. Try to search again !');
});
///////////////////////////

///////////////////////////

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('about', 'ViewController@index')->name('about');
Route::get('contact', 'ContactController@index')->name('contact');
Route::resource('room', 'RoomController');


