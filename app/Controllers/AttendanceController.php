<?php
namespace Controllers;

use Database\DB;
use DateTime;
use DateInterval;
use DatePeriod;

class AttendanceController extends Controller {
    private $period = [[1, 15], [16, 31], [1, 31]];
    
    public function attendance ($id, $period) {
        $table = $period['month'].'-'.$period['year'];
        $begin = new DateTime ($period['year'].'-'.$period['month'].'-'.$this->period[$period['period']][0]);
        $end = new DateTime ($period['year'].'-'.$period['month'].'-'.$this->period[$period['period']][1]);
        $end = $end->modify( '+1 day');

        $interval = new DateInterval('P1D');
        $daterange = new DatePeriod($begin, $interval ,$end);
        DB::connect (['localhost', 'db_attendance', 'root', 'password']);
        $i = 0;
        foreach ($daterange as $date) {
            if (date_format($date, 'm') <= $period['month']) {
                $attendance[$i]['date'] = date_format($date, 'Y-m-d');
                $attendance[$i]['attn'] = DB::select ("SELECT * FROM `$table` WHERE emp_id = ? AND date = ?", [$id, date_format($date, 'Y-m-d')])[0];
            }
            $i++;
        }
        return $attendance;
    }
}