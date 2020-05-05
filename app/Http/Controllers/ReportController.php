<?php

namespace App\Http\Controllers;

use App\Model\Document;
use App\Model\Message;
use App\Model\TutorRegistration;
use App\Model\User;
use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class ReportController extends Controller
{
    //
    public function index($fromdate = null, $todate = null)
    {
        if ($fromdate != null ) {
            $FromDate = Carbon::parse($fromdate);
            $ToDate = Carbon::parse($todate);

            $days = $ToDate->diffInDays($fromdate);
            if ($days == 0) $days = 1;
        }
        else{
            $FromDate = null;

            $ToDate = null;
        }


        $Tutor_count = User::where('role_id', 3)->count();
        $TutorWithoutTutee = User::whereDoesntHave('tutorRegistrationByTutor')->whereHas('tutorRegistrationByTutor', function (Builder $query) use ($FromDate, $ToDate) {
            $query->whereBetween('created_at', [$FromDate, $ToDate]);
        }, '=', 0)->where('role_id', 3)->withCount('tutorRegistrationByStudent')->count();
        $TutorWithTutee = User::whereHas('tutorRegistrationByTutor', function (Builder $query) use ($FromDate, $ToDate) {
            $query->whereBetween('created_at', [$FromDate, $ToDate]);
        })->where('role_id', 3)->withCount('tutorRegistrationByStudent')->count();
        $nonTutorStudent =  User::whereDoesntHave('tutorRegistrationByStudent', function (Builder $query) use ($FromDate, $ToDate) {
            $query->whereBetween('created_at', [$FromDate, $ToDate]);
        })->where('role_id', 4)->get();
//        return $nonTutorStudent;

        $noInteractSt = User::whereDoesntHave('request', function (Builder $query) use ($FromDate, $ToDate) {
            $query->whereBetween('created_at', [$FromDate, $ToDate]);
        })->whereDoesntHave('sentMessages', function (Builder $query) use ($FromDate, $ToDate) {
            $query->whereBetween('created_at', [$FromDate, $ToDate]);
        })->where('role_id', 4)->withCount('request')->count();

        $stdCount = User::where('role_id', 4)->count();
        $tutorCount = User::where('role_id', 3)->count();

        $AllSentMsg = Message::whereBetween('created_at', [$FromDate, $ToDate])->
        whereHas('sender', function (Builder $query) {
            $query->where('role_id', 3);
        })->count();
        $tutorMsgCount = Message::whereHas('sender', function (Builder $query) {
            $query->where('role_id', 3);
        })->whereBetween('created_at', [$FromDate, $ToDate])->count();
        $tuteeMsgCount = Message::whereHas('sender', function (Builder $query) {
            $query->where('role_id', 4);
        })->whereBetween('created_at', [$FromDate, $ToDate])->count();
//        $tutor = User::where('role_id', 3)->paginate(25);
        $RegCount = TutorRegistration::whereBetween('created_at', [$FromDate, $ToDate])->count();

        $fileUploadCount = Document::whereBetween('created_at', [$FromDate, $ToDate])->count();
        $AllocatedTutor = TutorRegistration::whereBetween('created_at', [$FromDate, $ToDate])->distinct('tutor_id')->count();
//        $AllocatedTutor =  TutorRegistration::whereBetween('created_at', [$FromDate, $ToDate])->select('tutor_id')->distinct()->count();
        $RequestCount = \App\Model\Request::whereBetween('created_at', [$FromDate, $ToDate])->where('to_user', '=', Auth::id())->count();
        $SentMsgCount = Message::where('from_user', Auth::id())->whereBetween('created_at', [$FromDate, $ToDate])->count();
        $AvgMsg = round($AllSentMsg / $Tutor_count, 10);
        return view('Report.Index', [
//            data for Staff
            'nonTutorStudent' => $nonTutorStudent,
            'noInteractSt' => $noInteractSt,
            'stdCount' => $stdCount,
            'tutorCount' => $tutorCount,
            'tutorMsgCount' => $tutorMsgCount,
            'tuteeMsgCount' => $tuteeMsgCount,
            'RegCount' => $RegCount,
            'fileUploadCount' => $fileUploadCount,
            'AllocatedTutor' => $AllocatedTutor,
            'TutorWithoutTutee' => $TutorWithoutTutee,
            'TutorWithTutee' => $TutorWithTutee,
            'AvgMsg' => $AvgMsg,
            'FromDate' => $FromDate,
            'ToDate' => $ToDate,

//            for tutor
            'RequestCount' => $RequestCount,
            'SentMsg' => $SentMsgCount,


        ]);


//
    }
    public  function exceptionalReport($day =7) {
        $dt = Carbon::now('Asia/Ho_Chi_Minh')->addDays(1)->toDateString();
        $todayDate = Carbon::now('Asia/Ho_Chi_Minh');
        $NonTutorStudent=  User::whereDoesntHave('tutorRegistrationByStudent')->get();
        $lastDays = $todayDate->subDays($day)->toDateString();



        $noInteractSt = User::whereHas('request', function (Builder $query) use ($lastDays) {
            $query->whereDate('created_at', '>=',$lastDays);
        },'=',0)->whereHas('sentMessages', function (Builder $query) use ($lastDays) {
            $query->whereDate('created_at', '>=',$lastDays);
        },'=',0)->where('role_id', 4)->withCount('request')->count();


        $tutorWithoutTutee = User::whereDoesntHave('tutorRegistrationByTutor')->where('role_id', '=',3)->count();
//        $tutorWithoutTutee->setPageName('nonstudent_tutor');
//        return [$lastDays,$dt, $noInteractSt , $tutorWithoutTutee];


        return view('Report.exception', ['users'=>$noInteractSt ,'tutors'=>$tutorWithoutTutee , 'days' =>$day]);

    }

    public function getRp()
    {
        return view('Report.Index');

    }

    public function getNonInteractStudent($dateFrom, $dateTo)
    {
//        $user = User::whereDoesntHave('request', function (Builder $query) use ($FromDate, $ToDate) {
//            $query->whereBetween('created_at', [$FromDate, $ToDate]);
//        })->where('role_id', 4)->withCount('tutorRegistrationByStudent')->count();
//        return $user;

    }

    private function getNonstudentTutor($dateFrom, $dateTo, $uId)
    {

        $user = User::doesntHave('tutorRegistrationByTutor')->where('role_id', 3)->get();


    }

    public function getNonTutorStudent($dateFrom, $dateTo)
    {

        $user = User::whereDoesntHave('tutorRegistrationByStudent', function (Builder $query) use ($dateFrom, $dateTo) {
            $query->whereBetween('created_at', [$dateFrom, $dateTo]);
        })->where('role_id', 4)->withCount('tutorRegistrationByStudent')->count();
        return $user;

//        return $user = User::doesntHave('tutorRegistrationByStudent')->whereBetween('created_at', [$dateFrom, $dateTo])->get();

    }

    private function getAvgMsg($dateFrom, $dateTo)
    {

    }

    private function getTotalMsg($dateFrom, $dateTo)
    {

    }

    public function getNumberOfRegs()
    {

    }

    public function getNumberOfAssignTutor()
    {

    }

    public function getNumberOfNonInteractutor()
    {

    }

}
