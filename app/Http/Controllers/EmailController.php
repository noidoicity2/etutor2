<?php

namespace App\Http\Controllers;

use App\Model\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    //
    public function getEmail() {
        $id =  Auth::id();
        $emails = Email::where('to_user', $id)->orderBy('created_at','asc')->paginate(25);
        return view('Email.AllEmail', ['emails'=> $emails]);


    }
    public function unseenMail() {
        $id =  Auth::id();
        $emails = Email::where('to_user', $id)->where('status','=',0)->orderBy('created_at','asc')->paginate(25);
        return view('Email.AllEmail', ['emails'=> $emails]);


    }
    function markAsRead(Request $request)
    {
        $id = $request->id;

        $arr = $request->arr;

            Email::whereIn('id', $arr)
                ->update(['status' => 1]);

        return json_encode(['success' => true, 'msg' => 'Mark as read successfully']);
    }
    function markAllAsRead(Request $request)
    {
        $id = $request->id;



        Email::where('to_user', $id)
            ->update(['status' => 1]);

        return json_encode(['success' => true, 'msg' => 'Mark as read successfully']);
    }
}
