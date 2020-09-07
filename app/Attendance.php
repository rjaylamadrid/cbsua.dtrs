<?php
use Controllers\AttendanceController;

class Attendance extends AttendanceController {

    public function index () {
        $this->view->display ('attendance', ["emp_type" => $this->type ()]);
    }

    public function do_action () {
        try {
            $this->{$_POST['action']} ();
        } catch (\Throwable $th) {
            $this->index();
        }
    }

    public function print_preview () {
        if ($_POST['data']) {
            $data = $_POST['data'];
            $attendance = $this->attendance ($data['employee_id'], ["month" => $data['month'], "year" => $data['year']])->compute (); // Employee Attendance
            $profile = Profile::employee ($data['employee_id'])->get ();
            
            $vars = ["attendance" => $attendance, "employee" => $profile];
            
            $pdf['content'] = $this->view->render ("pdf/dtr", $vars);
            $pdf['options'] = ["orientation" => "portrait"];
            $this->to_pdf ($pdf);
        }
    }

    protected function generate () {
        if ($_POST['data']['emp_type']) $employees = Employee::type ($_POST['data']['emp_type']);
        else $employees = Employee::getAll();
        $this->view->display ('attendance', ["period" => $_POST['data'], "employees" => $employees, "posted" => $this->is_posted ($_POST['data'])]);
    }

    protected function get_attendance () {
        $data = $_POST;
        $this->attendance ($data['id'], ["month" => $data['month'], "year" => $data['year']], ($data['period'] - 1));
        $this->view->display ('custom/dtr', ["attendance" => $this->attendance, "period" => $data]);
    }

    protected function raw_data () {
        $this->view->display ("custom/attendance_raw_data", ["rawdata" => $this->get_raw_data ($_POST['period'], [$_POST['id'], $_POST['date']])]);
    }

    protected function update_log () {
        $attn = $this->attendance ($_POST['emp_id'], ["month" => $_POST['month'], "year" => $_POST['year']])->find ($_POST['id']);
        $rawdata = $this->get_raw_data ($_POST['month'].'-'.$_POST['year'], [$_POST['emp_id'], $_POST['date']]);

        $this->view->display ("custom/attendance_update_log", ["attn" => $attn, "rawdata" => $rawdata]);
    }
}