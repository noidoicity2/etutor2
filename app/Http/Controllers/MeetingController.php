<?php

namespace App\Http\Controllers;

use App\Model\Meeting;
use App\Model\User;
use Carbon\Carbon;
use http\Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Validator; // <------

class MeetingController extends Controller
{
    public function arangeGeeting(Request $request)
    {
        $todayDate = Carbon::now('Asia/Ho_Chi_Minh');

       $validator= Validator::make($request->all() , [
            'name' => 'required|max:50',
            'place' => 'required|max:50',
            'start_at'=>'required|date|after_or_equal:'.$todayDate
        ]);
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $date = Carbon::parse($request->start_at);
        $meeting = new Meeting();
        $tutor_id = Auth::id();
        $meeting->student_id = $request->student_id;
        $meeting->name = $request->name;
        $meeting->tutor_id = $tutor_id;
        $meeting->place = $request->place;
        $meeting->start_at = $date;

        $meeting->save();
//        return $request->place;
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
