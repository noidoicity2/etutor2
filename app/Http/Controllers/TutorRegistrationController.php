<?php

namespace App\Http\Controllers;

use App\Model\TutorRegistration;
use Illuminate\Http\Request;

class TutorRegistrationController extends Controller
{
    //
    public function GetAllRegistration() {
        $regs = TutorRegistration::with(['tutor','student'])->get();
        return  view('TutorRegistration.allregs',['regs'=>$regs]);
    }
}
