<?php

namespace App\Http\Controllers;

use App\Model\TutorRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorRegistrationController extends Controller
{
    //
    public function GetAllRegistration()
    {
        $regs = TutorRegistration::with(['tutor', 'student'])->get();
        return view('TutorRegistration.allregs', ['regs' => $regs]);
    }

    function getAssignedStudent()
    {
        $id = Auth::id();
        $regs = TutorRegistration::where('tutor_id', $id)->with(['student'])->get();

        return view('TutorRegistration.assignedstudent', ['regs' => $regs]);


    }

    function getAssignTutor()
    {

        $id = Auth::id();
        $regs = TutorRegistration::where('student_id', $id)->with(['tutor'])->get();

        return view('TutorRegistration.assignTutor', ['regs' => $regs]);
    }
}
