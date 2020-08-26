<?php
use Controllers\EmployeesController;

class Employees extends EmployeesController {
    private $stats = [0, 0, 0, 0, 0, 0];

    public function index () {
        $this->view->display ('admin/employees', ["stats" => $this->stats]);
    }
}