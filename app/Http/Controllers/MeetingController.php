<?php

namespace App\Http\Controllers;

use App\Model\Meeting;
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
        $meeting->name = $request->get('meetingName');
        $meeting->tutor_id = $tutor_id;
        $meeting->save();
        return back()->with('arangeGeeting', 'add successfully');
    }

    public function renderViewMeetings()
    {
        return view('Meeting.settingMetiings');
    }
}
