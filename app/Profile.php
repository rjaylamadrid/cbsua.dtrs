<?php
use Database\DB;

class Profile {
    public static $employee;

    public static function employee ($id) {
        self::$employee = DB::db("db_master2")->select ("SELECT a.first_name, a.middle_name, a.last_name, b.* FROM tbl_employee a, tbl_employee_status b WHERE a.employee_id = b.employee_id AND b.employee_id = ? GROUP BY a.employee_id", $id)[0];
        return new static();
    }

    public static function info ($profile) {
        if (self::$employee) {
            $stmt = '';
            if ($profile == "tbl_employee_education") {
                $stmt = " ORDER BY year_graduated";
            } elseif ($profile == "tbl_employee_employment") {
                $stmt = " ORDER BY date_from";
            }
            return DB::select ("SELECT * FROM $profile WHERE employee_id = ? $stmt", self::$employee['employee_id']);
        }
    }

    public static function getSalary ($salaryGrade, $salaryStep, $date_to='') {
        if($date_to == '') {
            $date_to = date('Y-m-d');
        }
        $salaryArray = DB::db("db_master2")->select ("SELECT step_increment FROM tbl_salary_grade WHERE salary_grade = ? AND date_implemented < ? ORDER BY no DESC", [$salaryGrade, $date_to])[0];
        $salaryArr = explode(",", $salaryArray['step_increment']);
        $salary = $salaryArr[$salaryStep - 1];
        // print_f($salaryArray);
        var_dump($salary);
        return $salary;
    }

    public static function get () {
        return self::$employee;
    }
}