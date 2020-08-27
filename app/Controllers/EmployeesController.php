<?php
namespace Controllers;

use Database\DB;

class EmployeesController extends Controller {
    public $employees;
    public $employee;
    public $profile;

    public function start () {
        if (!$this->user) header ("location: login");
    }
    
    public function bday_celebrant () {
        return DB::select ("SELECT first_name, last_name, DATE_FORMAT(birthdate, '%M %d') AS BDate, (YEAR(NOW()) - YEAR(birthdate)) AS Age, DAYNAME(DATE_FORMAT(birthdate, '$this->year-%m-%d')) AS Araw, employee_picture FROM tbl_employee a, tbl_employee_status b WHERE a.employee_id = b.employee_id AND b.active_status = 1 AND b.campus_id = ? AND MONTH(a.birthdate) = ? AND DAY(birthdate) BETWEEN 1 AND 31 ORDER BY BDate", [$this->user['campus_id'], $this->year]);
    }

    public function employees () {
        $this->employees = DB::select ("SELECT * FROM tbl_employee a, tbl_employee_status b WHERE a.employee_id = b.employee_id GROUP BY a.employee_id", $this->user['campus_id']);
        return $this;
    }

    public function all () {
        return $this->employees;
    }

    public function find ($id) {
        foreach ($this->employees as $employee) {
            if ($employee['employee_id'] == $id) return $employee;
        }
        return;
    }

    public function employee ($id) {
        $this->employee = DB::select ("SELECT a.first_name, a.middle_name, a.last_name, b.* FROM tbl_employee a, tbl_employee_status b WHERE a.employee_id = b.employee_id AND b.employee_id = ? GROUP BY a.employee_id", $id)[0];
        return $this;
    }

    public function profile ($view) {
        return DB::select ("SELECT * FROM $view WHERE employee_id = ?", $this->employee['employee_id'])[0];
    }
}