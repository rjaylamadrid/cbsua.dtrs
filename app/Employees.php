<?php
use Controllers\EmployeesController;

class Employees extends EmployeesController {
    private $stats = [0, 0, 0, 0, 0, 0];

    public function index () {
        $this->view->display ('admin/employees', ["stats" => $this->stats, "employees" => $this->employees()->all()]);
    }

    public function show ($id, $view = 'basic-info') {
        $table = $view == 'basic-info' ? 'tbl_employee' : 'tbl_employee_'.str_replace ("-", "_", $view);

        $emp = $this->employee($id)->profile($table);
        $this->view->display ('profile', ["employee" => $this->employee, "emp" => $emp, "tab" => $view]);
    }
}