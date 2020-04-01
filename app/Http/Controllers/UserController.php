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
    function GetAllUser(Request $request)
    {
        $user = User::all();
        return view('User.addUser', ['users' => $user]);
    }

    function GetAllTutors(Request $request)
    {

    }

    function GetAllStudent(Request $request)
    {

    }

    function DoAddUser(Request $request)
    {

        $user = new User();
        try {
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
        } catch (Exception $e) {
            return back()->with('message', $e->getMessage());
        }


    }

    function DeleteUser(Request $request)
    {

    }
}
