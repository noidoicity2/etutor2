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
    public function getChatHistory(Request $request) {
        $from_user =(int) $request->from_user;
        $to_user = (int)$request->to_user;

        $message = Message::where([['from_user',$from_user], ['to_user',$to_user] ])
            ->orWhere([['from_user',$to_user], ['to_user',$from_user] ])
            ->orderBy('created_at', 'desc')->get();

        return view('Message.getMessge',['messages'=>$message ,'from_user' => $from_user , 'to_user' => $to_user] );
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
