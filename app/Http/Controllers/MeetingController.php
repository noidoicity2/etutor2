<?php

namespace App\Http\Controllers;

use App\Http\Utility\Mailer;
use App\Model\Document;
use App\Model\DocumentShare;
use App\Model\Meeting;
use App\Model\User;
use Carbon\Carbon;
use http\Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;

// <------

class MeetingController extends Controller
{
    public function arangeGeeting(Request $request)
    {
        $todayDate = Carbon::now('Asia/Ho_Chi_Minh');

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'place' => 'required|max:50',
            'start_at' => 'required|date|after_or_equal:' . $todayDate
        ]);
        if ($validator->fails()) {
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
        Mailer::Send($meeting->student_id, 'Your Tutor has created a meeting with you ',
            'Your Tutor has arranged a meeting with you ');
        return back()->with('arangeGeeting', 'add successfully');
    }

    public function renderViewMeetings($student_id)
    {
        $user = User::find($student_id);

        return view('Meeting.settingMetiings', ['user' => $user]);
    }

    public function TutorMeeting()
    {
        if(Auth::user()->role_id !=3) return abort('404');
        $id = Auth::id();
        $meeting = Meeting::where('tutor_id', $id)->orderBy('start_at', 'desc')->paginate(25);

        return view('Meeting.allMeeting', ['meetings' => $meeting]);

    }

    public function editMeeting($id)
    {

        $meeting = Meeting::find($id);
        if ($meeting == null) return abort(404);
        return view('Meeting.editmeeting', ['meeting' => $meeting]);
    }

    public function doUpDateMeeting(Request $request)
    {

        $todayDate = Carbon::now('Asia/Ho_Chi_Minh');

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'place' => 'required|max:50',
            'start_at' => 'required|date|after_or_equal:' . $todayDate
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $date = Carbon::parse($request->start_at);
        $meeting = Meeting::find($request->meeting_id);
//        $tutor_id = Auth::id();
//        $meeting->student_id = $request->student_id;
        $meeting->name = $request->name;
//        $meeting->tutor_id = $tutor_id;
        $meeting->place = $request->place;
        $meeting->start_at = $date;
//return $request->name;
        $meeting->save();
//        return $request->place;
        return back()->with('arangeGeeting', 'Update meeting successfully');
//        return view('Meeting.settingMetiings', ['meeting' => $meeting]);
    }

    public function UploadMeetingDoc($id)
    {
        $meeting = Meeting::find($id);
        if (Auth::id() != $meeting->tutor_id) return abort(403, 'Unauthorized');

        return view('Meeting.uploadMeetingDoc', ['meeting' => $meeting]);


    }

    public function DoUploadMeetingDoc(Request $request)
    {
//        return $request;
        $meeting_id = $request->meeting_id;
        $meeting = Meeting::find($meeting_id);
        $file = $request->file('file');
        $doc = new Document();
        $doc->name = $file->getClientOriginalName();
        if ($request->link == '') {
            $doc->link = '/Uploads/' . $doc->name;
        } else {
            $doc->link = $request->link;
        }

        $doc->created_by = Auth::id();
        $doc->isPublic = $request->status;

        $doc->save();
//        echo $file->getFilename();
//        $file->move('Uploads', $file->getClientOriginalName());
//        $this->SaveDocument($file);
        $file->move('Uploads', $file->getClientOriginalName());


        $docShare = new DocumentShare();
        $docShare->document_id = $doc->id;
        $docShare->user_id = $meeting->student_id;

        $docShare->save();

        $meeting->document_id = $doc->id;
        $meeting->save();
        Mailer::Send($meeting->student_id, 'Your Tutor has uploaded meeting document',
            'Your Tutor has uploaded meeting document');
        return back()->with('status', 'Upload File Successfully');


    }

    public function getTodayMeeting()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $role = Auth::user()->role_id;
        if($role==3) {
            $meeting = Meeting::where('tutor_id', Auth::id())->whereDate('start_at', $dt)->paginate(15);
        }
        elseif ($role==4) {
            $meeting = Meeting::where('student_id', Auth::id())->whereDate('start_at', $dt)->paginate(15);
        }
        else return abort(401, 'Unathorized');


        return view('Meeting.allMeeting', ['meetings' => $meeting]);


    }

    public function CancelMeeting(Request $request)
    {
        $id = $request->meeting_id;
        $meeting = Meeting::find($id);

        Mailer::Send($meeting->student_id, 'Your Tutor has cancel a meeting with you ',
            'Your Tutor has cancel a meeting with you ');
        $meeting->delete();

        return json_encode(['success'=>true , 'msg'=> 'Cancel meeting successfully']);

    }
}
