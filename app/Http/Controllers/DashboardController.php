<?php

namespace App\Http\Controllers;

use App\Http\Utility\Chart;
use App\Model\Message;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index() {

        return view('DashBoard.Dashboard');

    }
    public function messageChart() {
        $format = 'Y-m-d' ;
        $days = 7;
        $month = date('m');
        $day = date('d');
        $year = date('Y');
        $date_array = array();
        for ($i = -1; $i < $days - 1; $i++) {
            $date_array[] = date($format, mktime(0, 0, 0, $month, ($day - $i), $year));
        }
//         rsort($date_array);
        $date_array2 = array_reverse($date_array,true);
        $charts =[];

        foreach ($date_array2 as $date) {
            $c = Message::where('from_user',Auth::id())->whereDate('created_at',$date)->count();
            $chart = new Chart($date,$c);
            array_push($charts,$chart);

        }


//        $msg = Message::where('from_user',Auth::id())->whereDate('created_at',$date_array)->get();
        return $charts;

    }
    function get_last_x_days( $days = 7, $format = 'Y-m-d' )
    {
        $month = date('m');
        $day = date('d');
        $year = date('Y');
        $date_array = array();
        for ($i = 0; $i <= $days - 1; $i++) {
            $date_array[] = date($format, mktime(0, 0, 0, $month, ($day - $i), $year));
        }
    }
}
