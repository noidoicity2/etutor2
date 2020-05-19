<?php

namespace App\Http\Controllers;

use App\Http\Request\LoginRequest;
use App\Model\Document;
use App\Model\DocumentShare;
use App\Model\role;
use App\Model\User;

use http\Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Psr7\get_message_body_summary;

class UserController extends Controller
{
    //
    private $user_id;
    private $authUser;

    function __construct()
    {


        set_time_limit(0);
        ini_set('memory_limit', '-1');
    }

    function GetAllUser(Request $request)
    {
        $user = User::with(['role'])->paginate(25);
//        $user = User::all();
        return view('User.allUser', ['users' => $user , 'title'=>'All Users'] );
    }
    function AllStaff() {
        $user = User::where('role_id', 1)->with(['role'])->paginate(25);
        return view('User.allUser', ['users' => $user ,'title'=>'All Staff']);
    }

    function GetAllTutors(Request $request)
    {
        $user = User::where('role_id', 3)->with(['role'])->withCount('tutorRegistrationByTutor')->paginate(25);
        return view('User.allTutor', ['users' => $user]);
    }

    function GetNontudentTutor(Request $request)
    {

        $user = User::doesntHave('tutorRegistrationByTutor')->where('role_id', 3)->paginate(25);
        return view('User.allUser', ['users' => $user ,'title'=>'Tutor without student']);
    }

    function GetAllStudent(Request $request)
    {
        $user = User::where('role_id', 4)->get();
        return view('User.allUser', ['users' => $user , 'title'=>'All Student']);
    }

    function DoAddUser(Request $request)
    {
        $user = new User();
        $file = $request->file('image');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if (isset($request->dob)) {
            $user->dob = $request->dob;
        }
        $user->password = bcrypt($request->get('password'));
        $user->image = $file->getClientOriginalName();
        $user->role_id = $request->role_id;
        $user->save();
        return back()->with('message', 'add successfully');
    }

    function AddUser(Request $request)
    {
        $role = role::all();
        return view('User.addUser', ['roles' => $role]);
    }


    function DeleteUser(Request $request)
    {

    }

    function Login(Request $request)
    {
        if (Auth::user())
            return redirect('allusers');
        return view('Login.login');

    }

    function CheckLogin(LoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,

        ];
        if (Auth::attempt($login)) {
            return redirect('dashboard');
        } else {
            return redirect()->back()->with('status', 'Invalid Email or Password');
        }


    }

    function Logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');

    }

    function getFriendList()
    {
        $id = Auth::id();
        $user = User::where([['role_id', '=', 4], ['id', '!=', $id]])->paginate(25);
        return view('User.allUser', ['users' => $user , 'title'=>'Friend List']);

    }

    function updateLastActivity(Request $request)
    {
        $user = User::find(Auth::id());
        $date = date('Y-m-d H:i:s');

        $user->last_actitvity = $date;
        $user->save();
        return;

    }
    function  viewProFile($id = null) {

        $user = User::find($id);

        $docCount = Document::where('created_by',$id)->where('isPublic', '=', 1)->count();
        $shareCount = DocumentShare::where('user_id', $id)->count();

        return view('User.ViewProfile', [ 'user'=>$user , 'docCount'=>$docCount , 'shareCount'=>$shareCount]);

    }



}
