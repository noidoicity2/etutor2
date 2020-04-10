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

Route::get('/', 'UserController@GetAllUser')->middleware('checkAdminLogin');

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

Route::get('allRole', function () {
    $users = role::find(1)->users;
    return json_decode($users);
});

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

//Doan nay de update het password thanh 'dat' dang ma hoa
Route::get('updateAllPass', function () {
    User::query()->update(['password' => bcrypt('dat')]);
});
Route::group(['middleware' => ['checkAdminLogin']], function () {
    Route::get('/', 'UserController@GetAllUser');
    Route::get('/users', 'UserController@GetAllUser');
    Route::get('/tutors', 'UserController@GetAllTutors');
    Route::get('/adduser', function (){
        return view('User.addUser');
    });
    Route::post('add', 'UserController@DoAddUser')->name('add');
    Route::get('allusers', 'UserController@GetAllUser')->name('allusers');
    Route::get('allReg', 'TutorRegistrationController@GetAllRegistration');
//    message
    Route::get('getmessage/id/{id}', 'messageController@getChatHistory');
    Route::post('updatehistory', 'messageController@updateHistory');
    Route::post('sendmessage', 'messageController@sendMessage');
    Route::post('getunseenmsg', 'messageController@numOfUnseenMessge');
    Route::post('updatemsgstatus', 'messageController@updateMessageStatus');
    Route::get('assigntutor','TutorRegistrationController@getAssignTutor');
//   meeting
    Route::get('arangeMeeting','MeetingController@setingMeeting');
});
