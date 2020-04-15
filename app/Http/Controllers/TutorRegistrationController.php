<?php

namespace App\Http\Controllers;

use App\Model\Email;
use App\Model\TutorRegistration;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorRegistrationController extends Controller
{
    //
    public function GetAllRegistration()
    {
        $regs = TutorRegistration::with(['tutor', 'student'])->paginate(25);
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
        $tutor_id = $id;
        $tutor = User::find($id);
        $tutee_count = TutorRegistration::where('tutor_id', $tutor_id)->count();
        $user = User::doesntHave('tutorRegistrationByStudent')->where('role_id', 4)->paginate(25);

        return view('TutorRegistration.AssignStudent', ['users' => $user, 'tutor' => $tutor, 'tutee_count' => $tutee_count]);

    }

    function getAssignTutor()
    {

        $id = Auth::id();
        $regs = TutorRegistration::where('student_id', $id)->with(['tutor'])->get();

        return view('TutorRegistration.assignTutor', ['regs' => $regs]);
    }

    function RegStudents(Request $request)
    {
        $id = $request->id;

        $arr = $request->arr;
        foreach ($arr as $ar) {
            $reg = new TutorRegistration();
            $reg->tutor_id = $id;
            $reg->student_id = $ar;
            $reg->created_by = Auth::id();

            $reg->save();

            $email = new Email();
            $email2 = new Email();
            //email to tutor
            $email->title = 'You have been allocated to a student  successfully';
            $email->content = 'You have been allocated to student id#' . $ar . '  success fully';
            $email->to_user = $id;
//            emai to student
            $email2->title = 'You have been allocated to a tutor  successfully';
            $email2->content = 'You have been allocated to tutor id#' . $id . '  success fully';
            $email2->to_user = $ar;

            $email->save();
            $email2->save();


        }

        return json_encode(['success' => true, 'msg' => 'allocate ' . count($arr) . '  student successfully successfully']);
    }
}
