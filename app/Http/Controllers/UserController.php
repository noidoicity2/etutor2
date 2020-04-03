<?php

namespace App\Http\Controllers;

use App\Model\User;

use http\Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

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
        $user = User::with(['role'])->paginate(50);
//        $user = User::all();
        return view('User.allUser', ['users' => $user]);
    }

    function GetAllTutors(Request $request)
    {
        $user = User::where('role_id',3)->get();
        return view('User.allUser', ['users' => $user]);
    }

    function GetAllStudent(Request $request)
    {

    }

    function DoAddUser(Request $request)
    {

        $user = new User();

            $file = $request->file('image');
//        $dt = Carbon::parse($request->dob);
//        $dt->toDateTimeString();

            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->dob = $request->dob;
            $user->password = bcrypt($request->get('password'));
            $user->image = $file->getClientOriginalName();
            $user->save();

            return back()->with('message', 'add successfully');

    }

    function DeleteUser(Request $request)
    {

    }
}
