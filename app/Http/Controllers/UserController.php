<?php

namespace App\Http\Controllers;

use App\Model\User;

use http\Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use function GuzzleHttp\Psr7\get_message_body_summary;

class UserController extends Controller
{
    function GetAllUser(Request $request)
    {
        $user = User::with(['role'])->get();
        return view('User.allUser', ['users' => $user]);
    }
    function GetAllTutors(Request $request)
    {
        $user = User::where('role_id',3)->get();
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
