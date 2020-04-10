<?php

namespace App\Http\Controllers;

use App\Http\Request\LoginRequest;
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
    function __construct()
    {
        set_time_limit(0);
        ini_set('memory_limit', '-1');
    }

    function GetAllUser(Request $request)
    {
        $user = User::with(['role'])->paginate(25);
//        $user = User::all();
        return view('User.allUser', ['users' => $user]);
    }
    function GetAllTutors(Request $request)
    {
        $user = User::where('role_id',3)->with(['role'])->paginate(25);
        return view('User.allUser', ['users' => $user]);
    }
    function GetAllStudent(Request $request)
    {
        $user = User::where('role_id',4)->get();
        return view('User.allUser', ['users' => $user]);
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
       return view('User.addUser', ['roles'=>$role] );
    }


    function DeleteUser(Request $request)
    {

    }
    function Login(Request $request)
    {
        if(Auth::user())
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
            return redirect('allusers');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }


    }
    function Logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');

    }


}
