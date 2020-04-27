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
        $FromDate = Carbon::parse($fromdate);
        $ToDate = Carbon::parse($todate);
        $days = $ToDate->diffInDays($fromdate);
        if ($days == 0) $days = 1;
        $Tutor_count = User::where('role_id', 3)->count();
        $TutorWithoutTutee = User::whereDoesntHave('tutorRegistrationByTutor')->whereHas('tutorRegistrationByTutor', function (Builder $query) use ($FromDate, $ToDate) {
            $query->whereBetween('created_at', [$FromDate, $ToDate]);
        }, '=',0)->where('role_id', 3)->withCount('tutorRegistrationByStudent')->count();
        $TutorWithTutee = User::whereHas('tutorRegistrationByTutor', function (Builder $query) use ($FromDate, $ToDate) {
            $query->whereBetween('created_at', [$FromDate, $ToDate]);
        })->where('role_id', 3)->withCount('tutorRegistrationByStudent')->count();
        $nonTutorStudent = User::whereDoesntHave('tutorRegistrationByStudent', function (Builder $query) use ($FromDate, $ToDate) {
            $query->whereBetween('created_at', [$FromDate, $ToDate]);
        })->where('role_id', 4)->withCount('tutorRegistrationByStudent')->count();

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


        $AvgMsg = round($AllSentMsg / $Tutor_count, 10);
        return view('Report.Index', [
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
            'FromDate'=>$FromDate,
            'ToDate'=>$ToDate

        ]);


//
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
