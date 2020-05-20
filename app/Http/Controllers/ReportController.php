<?php

namespace App\Http\Controllers;

use App\Model\Document;
use App\Model\Meeting;
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
        if ($fromdate != null) {
            $FromDate = Carbon::parse($fromdate);
            $ToDate = Carbon::parse($todate);

            $days = $ToDate->diffInDays($fromdate);
            if ($days == 0) $days = 1;
        } else {
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
        $nonTutorStudent = User::whereDoesntHave('tutorRegistrationByStudent', function (Builder $query) use ($FromDate, $ToDate) {
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

    public function exceptionalReport(Request $request)
    {
        $day = (int)$request->input('day');

        $dt = Carbon::now('Asia/Ho_Chi_Minh')->addDays(1)->toDateString();
        $todayDate = Carbon::now('Asia/Ho_Chi_Minh');
        $NonTutorStudent = User::whereDoesntHave('tutorRegistrationByStudent')->where('role_id','=',4)->count();
        $lastDays = $todayDate->subDays($day)->toDateString();
        $noInteractSt = User::whereHas('request', function (Builder $query) use ($lastDays) {
            $query->whereDate('created_at', '>=', $lastDays);
        }, '=', 0)->whereHas('sentMessages', function (Builder $query) use ($lastDays) {
            $query->whereDate('created_at', '>=', $lastDays);
        }, '=', 0)->where('role_id', 4)->withCount('request')->count();

        $tutorWithoutTutee = User::whereDoesntHave('tutorRegistrationByTutor')->where('role_id', '=', 3)->count();
//        $studentWithoutTutor = User::whereDoesntHave('')

        return view('Report.exception',
            ['items' =>
                [
                    ['Student without tutor', $NonTutorStudent,'/report/studentWithoutTutor'],
                    ['Student without Interaction', $noInteractSt,'/report/studentWithoutInteraction'],
                    ['Tutor without Student', $tutorWithoutTutee,'/nonstudenttutor'],


                ],
                'days'=>$day,
                'today'=>$dt

            ]);

    }

    public function statisticReport(Request $request)
    {
        $day = (int)$request->input('day');
        $dt = Carbon::now('Asia/Ho_Chi_Minh')->addDays(1)->toDateString();
        $tutorSentMsgCount = Message::whereHas('sender', function (Builder $query) {
            $query->where('role_id', 3);
        })->count();
        $StudentSentMsgCount = Message::whereHas('sender', function (Builder $query) {
            $query->where('role_id', 4);
        })->count();
        $stdCount = User::where('role_id', 4)->count();
        $tutorCount = User::where('role_id', 3)->count();
        $staffCount = User::where('role_id', 1)->count();
        $meetingCount = Meeting::count();
        $requestCount = \App\Model\Request::count();


        $AvgMsgTutor = round($tutorCount / $tutorCount, 10);
        $AvgMsgStudent = round($stdCount / $stdCount, 10);

        $allocationCount = TutorRegistration::count();
        $AvgAllocation = round($allocationCount / $staffCount, 10);
        $AvgRequest = round($requestCount / $stdCount, 10);


//        $tutorWithoutTutee = User::whereDoesntHave('tutorRegistrationByTutor')->where('role_id', '=',3)->count();


        return view('Report.statistic',
            ['items' =>
                [
                    ['Student Count', $stdCount],
                    ['Tutor Count', $tutorCount],
                    ['Staff Count', $staffCount],
                    ['Meeting Count', $meetingCount],
                    ['Request Count', $requestCount],

                    ['Average message per student', $AvgMsgStudent],
                    ['Average message per tutor', $AvgMsgTutor],
                    ['Average allocation per Staff', $AvgAllocation],
                    ['Average request per student', $AvgRequest],
                ],
                'today'=>$dt
            ]);

    }
    public function studentWithoutInteraction(Request $request) {
        $day = (int)$request->input('day');

        $dt = Carbon::now('Asia/Ho_Chi_Minh')->addDays(1)->toDateString();
        $todayDate = Carbon::now('Asia/Ho_Chi_Minh');
        $lastDays = $todayDate->subDays($day)->toDateString();
//        $NonTutorStudent = User::whereDoesntHave('tutorRegistrationByStudent')->count();
        $noInteractSt = User::whereHas('request', function (Builder $query) use ($lastDays) {
            $query->whereDate('created_at', '>=', $lastDays);
        }, '=', 0)->whereHas('sentMessages', function (Builder $query) use ($lastDays) {
            $query->whereDate('created_at', '>=', $lastDays);
        }, '=', 0)->where('role_id', 4)->withCount('request')->paginate(20);
        return view('User.noInteractStudent' , ['users'=>$noInteractSt , 'days'=>$day ]);

    }
    public function studentWithoutTutor(Request $request) {
        $day = (int)$request->input('day');

        $dt = Carbon::now('Asia/Ho_Chi_Minh')->addDays(1)->toDateString();
        $todayDate = Carbon::now('Asia/Ho_Chi_Minh');
        $lastDays = $todayDate->subDays($day)->toDateString();
        $NonTutorStudent = User::doesntHave('tutorRegistrationByStudent')->where('role_id','=',4)->paginate(20);

        return view('User.StudentWithoutTutor' , ['users'=>$NonTutorStudent , 'days'=>$day ]);

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
