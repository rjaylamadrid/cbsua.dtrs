<?php
namespace Controllers;

use Database\DB;

class EmployeesController extends Controller {
    private $employees;

    public function start () {
        if (!$this->user) header ("location: login");
    }
    
    public function bday_celebrant () {
        return DB::select ("SELECT first_name, last_name, DATE_FORMAT(birthdate, '%M %d') AS BDate, (YEAR(NOW()) - YEAR(birthdate)) AS Age, DAYNAME(DATE_FORMAT(birthdate, '$this->year-%m-%d')) AS Araw, employee_picture FROM tbl_employee a, tbl_employee_status b WHERE a.employee_id = b.employee_id AND b.active_status = 1 AND b.campus_id = ? AND MONTH(a.birthdate) = ? AND DAY(birthdate) BETWEEN 1 AND 31 ORDER BY BDate", [$this->user['campus_id'], date('m')]);
    }

    public function employees () {
        $this->employees = DB::select ("SELECT * FROM tbl_employee WHERE employee_id IN (SELECT employee_id FROM tbl_employee_status WHERE active_status = 0 AND campus_id = ? AND employee_id NOT IN (SELECT employee_id FROM tbl_employee_status WHERE active_status = 1) GROUP BY employee_id)", $this->campus);
        return $this;
    }
}