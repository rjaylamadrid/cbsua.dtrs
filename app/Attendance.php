<?php

class Attendance extends Controllers\AttendanceController {
    public function index () {
        $this->view->display ('attendance');
    }

    public function generate () {
        $employees = Employee::getAll();
        $this->view->display ('attendance', ["period" => $_POST['dtr'], "employees" => $employees]);
    }

    public function getAttendance () {
        $data = $_POST;
        if ($data['id'] != 0);
        $attendance = $this->attendance ($data['id'], ["month" => $data['month'], "year" => $data['year'], "period" => ($data['period'] - 1)]);
        $this->view->display ('custom/dtr', ["attendance" => $attendance]);
    }
}