<?php

namespace App\Http\Controllers;

use App\Events\UpdateChat;
use App\Events\UpdateNotification;
use App\Model\Message;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class messageController extends Controller
{
    //
    public function __construct()
    {
    }

    public function getChatHistory(Request $request, $id)
    {
        $from_user = Auth::id();
        $to_user = $id;
        $receiver = User::find($id);

        $message = Message::where([['from_user', $from_user], ['to_user', $to_user]])
            ->orWhere([['from_user', $to_user], ['to_user', $from_user]])
            ->orderBy('created_at', 'asc')->get();

        return view('Message.getMessge', ['messages' => $message, 'from_user' => $from_user, 'to_user' => $to_user ,'receiver'=>$receiver]);
    }

    public function sendMessage(Request $request)
    {

        $from_user = Auth::id();

        $to_user = $request->id;

        $this->updateMessageStatus($to_user);
        $chat_message = $request->chat_message;

        $message = new Message();
        $message->from_user = $from_user;
        $message->to_user = $to_user;
        $message->chat_message = $chat_message;
        $message->status_id = 4;

        $message->save();

        event(new UpdateChat($to_user,'hi'));
        event(new UpdateNotification($to_user,'hi'));

//        return json_encode(['success' => true]);
        return;


    }

    public function updateHistory(Request $request)
    {
        $from_user = Auth::id();
        $to_user = $request->id;

        $message = Message::where([['from_user', $from_user], ['to_user', $to_user]])
            ->orWhere([['from_user', $to_user], ['to_user', $from_user]])->with('sender')
            ->orderBy('created_at', 'desc')->limit(50)->get();

        return json_encode($message);
    }

    public function getAllMessage()
    {
        $message = Message::where('to_user', 21)->orderBy('created_at', 'desc')->limit(10)->get();
        return view('Message.allMessage', ['messages' => $message]);
    }

    public function getLastestMessage()
    {

    }

    public function numOfUnseenMessge()
    {
        $id = Auth::id();
        return Message::where([['to_user', '=', $id], ['status_id', '=', 4]])->count();
    }

    public function updateMessageStatus($sender)
    {
        $id = Auth::id();
        Message::where([['to_user', '=', $id], ['status_id', '=', 4], ['from_user', '=', $sender]])->update(['status_id' => 3]);
        return json_encode(['success' => true]);
    }

//    public function getAllMessage() {
//        $message = Message::paginate(15);
//        return view('Message.allMessage',['messages' => $message]);
//    }


}
