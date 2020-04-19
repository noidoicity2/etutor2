<?php

namespace App\Http\Controllers;
use App\Model\Meeting;
use http\Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function settingMetiings(Request $request ){
        $meeting = new Meeting();
        $tutor_id = Auth::id();
        $meeting->name = $request->get('name');
        $meeting->tutor_id = $request->get('tutor_id');
        $meeting->student_id = $request->get('student_id');
        $meeting->link = $request->get('link');
        $meeting->start_at = $request->get('start_at');
        $meeting->created_by = $request->get('created_by');
        $meeting->created_at = $request->get('created_at');
        $meeting->status_id = $request->get('status_id');
        $meeting->save();
    }
    public function renderViewMeetings(){
        return view('Meeting.settingMetiings');
    }
}
