<?php

namespace App\Http\Controllers;

use App\Model\Meeting;
use App\Model\User;
use http\Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MeetingController extends Controller
{
    public function arangeGeeting(Request $request)
    {
        $meeting = new Meeting();
        $tutor_id = Auth::id();
        $meeting->student_id = $request->student_id;
        $meeting->name = $request->name;
        $meeting->tutor_id = $tutor_id;

        $meeting->save();
        return back()->with('arangeGeeting', 'add successfully');
    }

    public function renderViewMeetings($student_id)
    {
        $user = User::find($student_id);

        return view('Meeting.settingMetiings', ['user' => $user]);
    }

    public function TutorMeeting()
    {
        $id = Auth::id();
        $meeting = Meeting::where('tutor_id', $id)->orderBy('start_at','desc')->paginate(25);

        return view('Meeting.allMeeting', ['meetings'=>$meeting ]);

    }
}
