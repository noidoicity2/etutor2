<?php

namespace App\Http\Controllers;

use App\Http\Utility\Chart;
use App\Model\Message;
use App\Model\TutorRegistration;
use App\Model\User;
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

        return view('DashBoard.Dashboard',
            [
                'tuteeNo' => $tuteeNo,
                'noReq' => $noReq,
                'unseenMsg' => $noUnseenMsg,
                'handleReq' => $handleReq,
                'noReg'=>$noReg

            ]);

    }
    public function  viewDashBoard($id) {
        if(Auth::user()->role_id != 1 ) {
            return 'Unauthorized';
        }
        else {
            $tuteeNo = $this->getNmberOfTutee($id);
            $noReq = $this->getNmberOfunreplyRequest($id);
            $noUnseenMsg = $this->getNumberofUnseenMsg($id);
            $handleReq = $this->getNmberOfHandledRequest($id);
            $noReg = $this->getNumberOfRegs($id);
            return view('DashBoard.Dashboard',
                [
                    'tuteeNo' => $tuteeNo,
                    'noReq' => $noReq,
                    'unseenMsg' => $noUnseenMsg,
                    'handleReq' => $handleReq,
                    'noReg'=>$noReg

                ]);
        }
    }

    public function messageChart()
    {
        $format = 'Y-m-d';
        $days = 7;
        $month = date('m');
        $day = date('d');
        $year = date('Y');
        $date_array = array();
        for ($i = 0; $i < $days - 1; $i++) {
            $date_array[] = date($format, mktime(0, 0, 0, $month, ($day - $i), $year));
        }
//         rsort($date_array);
        $date_array2 = array_reverse($date_array, true);
        $charts = [];

        foreach ($date_array2 as $date) {
            $c = Message::where('from_user', Auth::id())->whereDate('created_at', $date)->count();
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


}
