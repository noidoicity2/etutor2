<?php

use App\Events\UpdateChat;
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

    for ($i = 0; $i < 20; $i++) {
        $name = 'Leesin  ' . $i;
        $email = 'student' . $i . '@tutor.com';
        $pass = bcrypt('123456');
        $user = new User();
        $user->name = $name;
        $user->password = $pass;
        $user->email = $email;
        $user->role_id = 3;

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
        $email = 'sMRsatDatamaaila' . $i . '@gmail.com';
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
    $message->chat_message = 'message a';
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
    $message->chat_message = 'message rep';
    $message->save();
    return json_encode(['success' => true, 'dm' => true]);
});
Route::get('delMessage', function () {
    Message::where('id', '>', '100000')->delete();
});
Route::get('getmessage', 'messageController@getChatHistory');
Route::get('login', 'UserController@login')->name('login');
Route::post('postlogin', 'UserController@CheckLogin');
Route::get('logout', 'UserController@logout')->name('logout');
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

    Route::get('/users', 'UserController@GetAllUser');
    Route::get('/tutors', 'UserController@GetAllTutors');
    Route::get('/staffs', 'UserController@AllStaff');
    Route::get('/adduser', 'UserController@AddUser');
    Route::post('add', 'UserController@DoAddUser')->name('add');
    Route::get('allusers', 'UserController@GetAllUser')->name('allusers');
    Route::get('nonstudenttutor', 'UserController@GetNontudentTutor');
    Route::get('getFriendList', 'UserController@getFriendList');


//reg

    Route::get('allReg', 'TutorRegistrationController@GetAllRegistration');
    Route::get('yourAllocation', 'TutorRegistrationController@yourAllocation');

    Route::get('assignstudent/{id}', 'TutorRegistrationController@AssignStudent');
    Route::post('RegStudents', 'TutorRegistrationController@RegStudents');
    Route::get('reallocateStudent/{id}', 'TutorRegistrationController@ReallocatedTutor');
    Route::post('DoReallocate', 'TutorRegistrationController@DoReallocate');


//    message
    Route::get('getmessage/id/{id}', 'messageController@getChatHistory');
    Route::post('updatehistory', 'messageController@updateHistory');
    Route::post('sendmessage', 'messageController@sendMessage');
    Route::post('getunseenmsg', 'messageController@numOfUnseenMessge');
    Route::post('updatemsgstatus', 'messageController@updateMessageStatus');

    Route::get('assigntutor', 'TutorRegistrationController@getAssignTutor');
    Route::get('testsk', function () {
        event(new \App\Events\UpdateNotification(1, '2'));
        return 'hi';
    });
    Route::get('meeting', function () {
        return view('Meeting.settingMetiings');
    });

    Route::get('allEmail', 'EmailController@getEmail');
    Route::post('markasread', 'EmailController@markAsRead');
    Route::post('markallasread', 'EmailController@markAllAsRead');
    Route::get('unseenMail', 'EmailController@unseenMail');


//request
    Route::get('allrequests', 'RequestController@AllRequest');
    Route::get('newrequest', 'RequestController@newRequest');
    Route::post('docreaterequest', 'RequestController@doCreateRequest');
    Route::get('myrequest', 'RequestController@getMyRequest');
    Route::get('viewrequest/{id}', 'RequestController@viewRequest');
    Route::get('viewresponse/{id}', 'RequestController@viewResponse');
    Route::get('createResponse/{id}', 'RequestController@createResponse');
    Route::post('doresponse', 'RequestController@doResponse');


    Route::get('dashboard', 'DashboardController@index');


    Route::get('msgChart', 'DashboardController@messageChart');
    Route::post('postChart', 'DashboardController@messageChart');

    //doc
    Route::get('yourdocument', 'DocumentController@GetAllDocument');
    Route::get('newdocument', 'DocumentController@UploadDocument');
    Route::post('uploadfile', 'DocumentController@DoUploadFile');
    Route::get('ShareDoc/{id}', 'DocumentController@ShareDocument');
    Route::post('doShareDoc', 'DocumentController@DoShare');
    Route::get('sharedDocument', 'DocumentController@getSharedFile');
    Route::get('viewfile/{id}', 'DocumentController@Details');
    Route::post('comment', 'DocumentController@Comment');
    Route::post('doShareDoc', 'DocumentController@DoShare');
    Route::get('viewPublicDoc/{id}', 'DocumentController@getPublicDoc');
    Route::get('viewSharedDoc/{id}', 'DocumentController@getSharedDoc');

    Route::get('file/{id}', 'DocumentController@Download');


//    report

    Route::get('getNonInteractStudent', 'ReportController@getNonInteractStudent');
    Route::get('getReport/{fromdate?}/{todate?}', 'ReportController@index');
    Route::get('report/exception', 'ReportController@exceptionalReport');
    Route::get('report/statistic', 'ReportController@statisticReport');
    Route::get('report/studentWithoutInteraction', 'ReportController@studentWithoutInteraction');
    Route::get('report/studentWithoutTutor', 'ReportController@studentWithoutTutor');


//    Route::get('getReport/{fromdate?}/{todate?}', function ($fromdate=null,$todate=null) {
//        return $todate;
//    });

    Route::get('getRp', 'ReportController@getRp');

    Route::post('postReport', 'ReportController@index');


//    profile

    Route::get('profile/{id}', 'UserController@viewProFile');
    Route::get('viewProfile', function () {
        return view('User.ViewProfile');
    });


//Meeting
    Route::get('viewMeeting/student_id/{student_id}', 'MeetingController@renderViewMeetings');
    Route::get('tutorMeetings', 'MeetingController@TutorMeeting');
    Route::get('StudentMeetings', 'MeetingController@TuteeMeeting');

    Route::get('todayMeeting', 'MeetingController@getTodayMeeting');

    Route::get('editmeeting/{id}', 'MeetingController@editMeeting');
    Route::post('doEditMeeting', 'MeetingController@doUpDateMeeting');
    Route::post('arangeGeeting', 'MeetingController@arangeGeeting')->name('arangeGeeting');
    Route::get('uploadmeetingdoc/{id}', 'MeetingController@UploadMeetingDoc');
    Route::post('DoUploadMeetingDoc', 'MeetingController@DoUploadMeetingDoc');
    Route::post('CancelMeeting', 'MeetingController@CancelMeeting');


});


//default page
Route::get('/', 'DashboardController@index')->middleware('checkAdminLogin');
Route::get('viewDashboard/{id}', 'DashboardController@viewDashBoard')->middleware('checkAdminLogin');


Route::get('/testck', function () {
    return view('CKFinder.index');
});
Route::get('/testEloquent', function () {
    $Allocation_count = \App\Model\TutorRegistration::where('created_by', 100)->toSql();
    return $Allocation_count;
});
