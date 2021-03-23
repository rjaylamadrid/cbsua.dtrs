<?php
use Controllers\EmployeesController;

class Employees extends EmployeesController {
    private $stats = [0, 0, 0, 0, 0, 0];

    public function index () {
        $this->view->display ('admin/employees', ["stats" => $this->stats, "employees" => $this->employees()->all()]);
    }

    public function profile ($id = NULL, $view = 'basic-info') {
        $id = $id ? $id : $this->user['employee_id'];
        $table = $view == 'basic-info' ? 'tbl_employee' : 'tbl_employee_'.str_replace ("-", "_", $view);
        $emp = Profile::employee($id)->info($table);

        if($view == 'employment')
        {
            $ctr=0;
            foreach($emp as $workExperience) {
                $empSalary[$ctr] = Profile::getSalary($workExperience['salary_grade'], $workExperience['salary_step'], $workExperience['date_to']);
                $ctr++;
            }
        }
        $this->view->display ('profile', ["employee" => Profile::$employee, "emp" => $emp, "tab" => $view]);
    }

    public function update ($id, $view = 'basic-info') {
        $table = $view == 'basic-info' ? 'tbl_employee' : 'tbl_employee_'.str_replace ("-", "_", $view);

        $emp = Profile::employee($id)->info($table);
        $this->view->display ('profile', ["employee" => Profile::$employee, "emp" => $emp, "tab" => $view, "view" => "update"]);
    }

    public function save ($id, $view = 'basic-info') {
        // $empUpd = Profile::saveChanges($id,$_POST['employeeinfo'],$view);
        header ("location: /employees/profile/$id/$view");
    }
}