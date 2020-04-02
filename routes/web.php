<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Model\User;
use App\Model\role;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('model/save', function () {
    $user = new User();

    $user->email = "email";
    $user->password = "dat";
    $aa = Auth::attempt(["email" =>"email", "password"=>"dat"]);

   return response($aa);

});
Route::get('/layout', function () {
    return view('Layout.layout');
});
Route::get('/users', 'UserController@GetAllUser');
Route::get('/adduser', 'UserController@GetAllUser');
Route::post('add', 'UserController@DoAddUser')->name('add');
Route::get('allusers', 'UserController@GetAllUser')->name('allusers');
Route::get('allRole', function (){
    $users = role::find(1)->users;
    return json_decode($users);
});
Route::get('allReg', 'TutorRegistrationController@GetAllRegistration');
