<?php

namespace App\Http\Controllers;

use App\Model\Message;
use Illuminate\Http\Request;

class messageController extends Controller
{
    //
    public function __construct()
    {
    }

    public function getAllMessage() {
        $message = Message::where('to_user',21)->orderBy('created_at','desc')->limit(10)->get();
        return view('Message.allMessage',['messages' => $message]);
    }
//    public function getAllMessage() {
//        $message = Message::paginate(15);
//        return view('Message.allMessage',['messages' => $message]);
//    }


}
