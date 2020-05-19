<?php

namespace App\Http\Controllers;

use App\Http\Utility\Chart;
use App\Model\Meeting;
use App\Model\Message;
use App\Model\TutorRegistration;
use App\Model\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $id = Auth::id();
        $tuteeNo = $this->getNmberOfTutee($id);
        $noReq = $this->getNmberOfunreplyRequest($id);
        $noUnseenMsg = $this->getNumberofUnseenMsg($id);
        $handleReq = $this->getNmberOfHandledRequest($id);
        $noReg = $this->getNumberOfRegs($id);
        $chartData = $this->messageChart($id);
        $RegChart = $this->AllocationChart($id);
        $AvgMsg7Day = $this->AvgMsgIn7Day($id);
        $AvgALlocation = $this->AvgAllocationIn7Day($id);
        $yourAllcation = $this->yourAllocation($id);
        $todayAllocation = $this->ToDayAllocation($id);

        $totalMeeting = $this->TotalMeeting($id);
        $todayMeeting = $this->toDayMeeting($id);

        $SentRequest = $this->SentRequest($id);


        return view('DashBoard.Dashboard',
            [
                'tuteeNo' => $tuteeNo,
                'noReq' => $noReq,
                'unseenMsg' => $noUnseenMsg,
                'handleReq' => $handleReq,
                'noReg' => $noReg,
                'chartData' => $chartData,
                'RegChart' => $RegChart,
                'AvgMsg' => $AvgMsg7Day,
                'AvgRegs' => $AvgALlocation,
                'YourAllocation' => $yourAllcation,
                'toDayAllocation' => $todayAllocation,
                'totalMeeting'=>$totalMeeting,
                'todayMeeting'=>$todayMeeting,

                'sentRequest'=>$SentRequest,


            ]);

    }

    public function viewDashBoard($id)
    {
        if (Auth::user()->role_id != 1) {
            return abort(401, 'Unauthorized action.');
        } else {
            $tuteeNo = $this->getNmberOfTutee($id);
            $noReq = $this->getNmberOfunreplyRequest($id);
            $noUnseenMsg = $this->getNumberofUnseenMsg($id);
            $handleReq = $this->getNmberOfHandledRequest($id);
            $noReg = $this->getNumberOfRegs($id);
            $chartData = $this->messageChart($id);
            $RegChart = $this->AllocationChart($id);
            $AvgMsg7Day = $this->AvgMsgIn7Day($id);
            $AvgALlocation = $this->AvgAllocationIn7Day($id);
            $yourAllcation = $this->yourAllocation($id);
            $todayAllocation = $this->ToDayAllocation($id);

            $totalMeeting = $this->TotalMeeting($id);
            $todayMeeting = $this->toDayMeeting($id);

            $SentRequest = $this->SentRequest($id);
            return view('DashBoard.ViewDashBoard',
                [
                    'tuteeNo' => $tuteeNo,
                    'noReq' => $noReq,
                    'unseenMsg' => $noUnseenMsg,
                    'handleReq' => $handleReq,
                    'noReg' => $noReg,
                    'chartData' => $chartData,
                    'RegChart' => $RegChart,
                    'AvgMsg' => $AvgMsg7Day,
                    'AvgRegs' => $AvgALlocation,
                    'YourAllocation' => $yourAllcation,
                    'toDayAllocation' => $todayAllocation,

                    'totalMeeting'=>$totalMeeting,
                    'todayMeeting'=>$todayMeeting,
                    'sentRequest'=>$SentRequest,

                ]);
        }
    }

    public function messageChart($id)
    {
        $format = 'Y-m-d';
        $days = 7;
        $month = date('m');
        $day = date('d');
        $year = date('Y');
        $date_array = array();
        for ($i = -1; $i < $days - 1; $i++) {
            $date_array[] = date($format, mktime(0, 0, 0, $month, ($day - $i), $year));
        }
//         rsort($date_array);
        $date_array2 = array_reverse($date_array, true);
        $charts = [];

        foreach ($date_array2 as $date) {
            $c = Message::where('from_user', $id)->whereDate('created_at', $date)->count();
            $chart = new Chart($date, $c);
            array_push($charts, $chart);

        }


//        $msg = Message::where('from_user',Auth::id())->whereDate('created_at',$date_array)->get();
        return $charts;

    }

    function get_last_x_days($days = 7, $format = 'Y-m-d')
    {
        $month = date('m');
        $day = date('d');
        $year = date('Y');
        $date_array = array();
        for ($i = 0; $i <= $days - 1; $i++) {
            $date_array[] = date($format, mktime(0, 0, 0, $month, ($day - $i), $year));
        }
    }

    private function getNmberOfTutee($id)
    {
        $tutee = TutorRegistration::where('tutor_id', $id)->count();
        return $tutee;

    }

    private function getNmberOfunreplyRequest($id)
    {
        $req = \App\Model\Request::where([['status', '=', 'no response'], ['to_user', '=', $id]])->count();
        return $req;

    }

    private function getNmberOfHandledRequest($id)
    {
        $req = \App\Model\Request::where([['status', '=', 'replied'], ['to_user', '=', $id]])->count();
        return $req;

    }

    public function getNumberofUnseenMsg($id)
    {
//        $id = Auth::id();
        return Message::where([['to_user', '=', $id], ['status_id', '=', 4]])->count();
    }

    private function getNumberOfRegs($id)
    {
        $regs = TutorRegistration::where('created_by', $id)->count();
        return $regs;
    }

    private function getNumberOfSentMsg($id)
    {
        $msg = Message::where('from_user', Auth::id())->count();
        return $msg;

    }

    private function yourAllocation($id)
    {
        $regs = TutorRegistration::where('created_by', Auth::id())->count();
        return $regs;

    }

    private function ToDayAllocation($id)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $regs = TutorRegistration::where('created_by', Auth::id())->whereDate('created_at', $dt)->count();
        return $regs;
    }

    private function YesterdaytAllocation($id)
    {
//        $dt = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $yesterday = Carbon::yesterday()->toDateString();
        $regs = TutorRegistration::where('created_by', Auth::id())->whereDate('created_at', $yesterday)->count();

    }

    public function AllocationChart($id)
    {
        $format = 'Y-m-d';
        $days = 7;
        $month = date('m');
        $day = date('d');
        $year = date('Y');
        $date_array = array();
        for ($i = -1; $i < $days - 1; $i++) {
            $date_array[] = date($format, mktime(0, 0, 0, $month, ($day - $i), $year));
        }
//         rsort($date_array);
        $date_array2 = array_reverse($date_array, true);
        $charts = [];

        foreach ($date_array2 as $date) {
//            $c = Message::where('from_user', $id)->whereDate('created_at', $date)->count();
            $c = TutorRegistration::where('created_by', $id)->whereDate('created_at', $date)->count();
            $chart = new Chart($date, $c);
            array_push($charts, $chart);

        }


//        $msg = Message::where('from_user',Auth::id())->whereDate('created_at',$date_array)->get();
        return $charts;

    }

    public function AvgMsgIn7Day($id)
    {
        $user = User::find($id);
        $currDate = Carbon::now('Asia/Ho_Chi_Minh');
        $last7day = $currDate->subDay(7);
//        return $this->sentMessages()->count();
        return round(($user->sentMessages()->whereDate('created_at', '>=', $last7day)->count()) / 7, 2);
    }

    public function AvgAllocationIn7Day($id)
    {
        $user = User::find($id);
        $currDate = Carbon::now('Asia/Ho_Chi_Minh');
        $last7day = $currDate->subDay(7);
//        return $this->sentMessages()->count();
        return round(($user->tutorRegistrationCreated()->whereDate('created_at', '>=', $last7day)->count()) / 7, 2);
    }
    public function TotalMeeting($id) {
        $meeting = Meeting::where('tutor_id',$id)->count();
        return $meeting;

    }
    public function toDayMeeting($id) {
        $user = User::find($id);
        $currDate = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $role = $user->role_id;
        $meeting = 0;

        if($role==3) {
            $meeting = Meeting::where('tutor_id',$id)->whereDate('start_at','=',$currDate)->count();
        }
        elseif ($role==4){
            $meeting = Meeting::where('student_id',$id)->whereDate('start_at','=',$currDate)->count();

        }
        return $meeting;


    }
    public function SentRequest($id) {
        $rq = \App\Model\Request::where('from_user',$id)->count();
        return $rq;
    }

    public  function UnseenMail($id) {

    }


}
