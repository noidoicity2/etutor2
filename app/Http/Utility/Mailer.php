<?php


namespace App\Http\Utility;


use App\Model\Email;

class Mailer
{
    public static function Send($id,$title ,$msg)
    {
        $mail = new Email();
        $mail->title = $title;
        $mail->content = $msg;
        $mail->to_user = $id;

        $mail->save();

    }

}
