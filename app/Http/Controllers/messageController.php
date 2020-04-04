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
        $message = Message::all();
        return json_encode($message);
    }


}
