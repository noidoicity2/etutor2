<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    //
    public  function sendRequest() {

    }
    public  function replyRequest() {

    }
    public function AllRequest() {
        $id = Auth::id();
        $requests =  \App\Model\Request::where('to_user', $id)->orderBy('created_at','desc')->paginate(20);
        return view('Request.getRequestTutee' , [ 'requests'=>$requests]);
    }

}
