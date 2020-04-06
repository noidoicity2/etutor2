<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Model\User;
use App\Model\role;
use App\Model\Message;

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
    $aa = Auth::attempt(["email" => "email", "password" => "dat"]);

    return response($aa);

});
Route::get('/layout', function () {
    return view('Layout.layout');
});
Route::get('/users', 'UserController@GetAllUser');
Route::get('/tutors', 'UserController@GetAllTutors');
Route::get('/adduser', 'UserController@GetAllUser');
Route::post('add', 'UserController@DoAddUser')->name('add');
Route::get('allusers', 'UserController@GetAllUser')->name('allusers');
Route::get('allRole', function () {
    $users = role::find(1)->users;
    return json_decode($users);
});
Route::get('allReg', 'TutorRegistrationController@GetAllRegistration');

Route::get('/dummy', function () {
    $count = 0;
//    ini_set('max_execution_time', 0);
    set_time_limit(0);
    ini_set('memory_limit', '-1');


    DB::disableQueryLog();

    for ($i = 0; $i < 20000000; $i++) {
        $name = '2datdepza1aia2a ' . $i;
        $email = 'anhtdadeozaiqua' . $i.'@gmail.com';
        $pass = bcrypt('dat');
        $user = new User();
        $user->name = $name;
        $user->password = $pass;
        $user->email = $email;

        $user->save();

    }



    return 'hello';
});

Route::get('/dummy2', function () {
    $count = 0;
//    ini_set('max_execution_time', 0);
    set_time_limit(0);
    ini_set('memory_limit', '-1');


    DB::disableQueryLog();

    for ($i = 0; $i < 20000000; $i++) {
        $name = '2datdepza1aia2a ' . $i;
        $email = 'sMRsatDatamaaila' . $i.'@gmail.com';
        $pass = bcrypt('dat');
        $user = new User();
        $user->name = $name;
        $user->password = $pass;
        $user->email = $email;

        $user->save();

    }



    return 'hello';
});
Route::get('allMessages', 'messageController@getAllMessage');
Route::get('dumpMessage', function () {
    DB::disableQueryLog();
    ini_set('memory_limit', '-1');


        $message = new Message();
        $message->from_user = 21;
        $message->to_user = 17;
        $message->status_id = 1;
        $message->chat_message = 'message a' ;
        $message->save();



    return json_encode(['success' => true, 'dm' => true]);
});
Route::get('dumpMessage2', function () {
    DB::disableQueryLog();
    ini_set('memory_limit', '-1');


    $message = new Message();
    $message->from_user = 17;
    $message->to_user = 21;
    $message->status_id = 1;
    $message->chat_message = 'message rep' ;
    $message->save();



    return json_encode(['success' => true, 'dm' => true]);
});
Route::get('delMessage', function () {
    Message::where('id', '>' , '100000')->delete();
});

Route::get('getmessage', 'messageController@getChatHistory');
Route::get('login', 'UserController@login')->name('login');
Route::post('postlogin', 'UserController@CheckLogin');
Route::get('logout', 'UserController@logout');
Route::get('getAuthUser', function () {
    $user = Auth::user();
    return json_encode($user);
});
Route::get('assignedstudent', 'TutorRegistrationController@getAssignedStudent');
