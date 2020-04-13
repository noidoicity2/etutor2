<?php

namespace App\Http\Controllers;

use App\Model\TutorRegistration;
use App\Model\User;
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

    public function AssignStudent($id)
    {
        $tutor_id  = $id;
        $tutor = User::find($id);
        $user = User::doesntHave('tutorRegistrationByStudent')->where('role_id', 4)->paginate(25);

        return view('TutorRegistration.AssignStudent' , ['users'=>$user, 'tutor'=>$tutor ]);

    }

    function getAssignTutor()
    {

        $id = Auth::id();
        $regs = TutorRegistration::where('student_id', $id)->with(['tutor'])->get();

        return view('TutorRegistration.assignTutor', ['regs' => $regs]);
    }
    function RegStudents(Request $request) {
        $id = $request->id;
        $arr = $request->arr;
        foreach ($arr as $ar) {
            $reg = new TutorRegistration();
            $reg->tutor_id = $id;
            $reg->student_id = $ar;
            $reg->created_by = Auth::id();

            $reg->save();
        }

        return json_encode(['success'=>true, 'msg'=> 'add successfully']);
    }
}
