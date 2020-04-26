<?php

namespace App\Http\Controllers;

use App\Model\Message;
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

        $nonTutorStudent = User::whereDoesntHave('tutorRegistrationByStudent', function (Builder $query) use ($FromDate, $ToDate) {
            $query->whereBetween('created_at', [$FromDate, $ToDate]);
        })->where('role_id', 4)->withCount('tutorRegistrationByStudent')->count();

        $noInteractSt = User::whereDoesntHave('request', function (Builder $query) use ($FromDate, $ToDate) {
            $query->whereBetween('created_at', [$FromDate, $ToDate]);
        })->whereDoesntHave('sentMessages', function (Builder $query) use ($FromDate, $ToDate) {
            $query->whereBetween('created_at', [$FromDate, $ToDate]);
        })->where('role_id', 4)->withCount('request')->count();

        $stdCount = User::where('role_id', 4)->count();
        $tutorCount = User::where('role_id', 4)->count();

        $AllSentMsg = Message::whereBetween('created_at', [$FromDate, $ToDate])->count();
        $tutorMsgCount= Message::whereHas('sender',function (Builder $query) {
            $query->where('role_id',3);
        })->whereBetween('created_at', [$FromDate, $ToDate])->count();
        $tuteeMsgCount= Message::whereHas('sender',function (Builder $query) {
            $query->where('role_id',4);
        })->whereBetween('created_at', [$FromDate, $ToDate])->count();



        $AvgMsg = round($AllSentMsg / $days, 2);
        return $AllSentMsg;


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
