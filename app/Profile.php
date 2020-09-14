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
        return $salary;
    }

    public static function get () {
        return self::$employee;
    }

    public static function numberedArray($array) {
        $i=0;
        foreach ($array as $value) {
            if($value == '')
            {
                $value = "N/A";
            }
            $numArr[$i] = $value;
            $i++;
        }
        return $numArr;
    }

    public static function saveChanges($id, $employeeinfo, $view) {
        if($view == 'basic-info') {
            $stmt = "UPDATE tbl_employee SET ";
            $ctr=1;
            foreach ($employeeinfo as $key => $value) {
                if($ctr == sizeof($employeeinfo)) {
                    $stmt .= $key . '= ? ';
                }
                else {
                    $stmt .= $key . '= ?, ';
                }
                $ctr++;
            }
            $stmt .= "WHERE employee_id = ?";
            $numberedArr = Profile::numberedArray($employeeinfo);
            array_push($numberedArr, $id);
            $udpates = DB::update ($stmt,$numberedArr);
            return $updates;
        }
        else if($view == 'family-background') {
            // Update father's info
            $stmt = "UPDATE tbl_employee_family_background SET ";
            $ctr=1;
            foreach ($employeeinfo['father'] as $key => $value) {
                if($ctr == sizeof($employeeinfo['father'])) {
                    $stmt .= $key . '= ? ';
                }
                else {
                    $stmt .= $key . '= ?, ';
                }
                $ctr++;
            }
            $stmt .= "WHERE employee_id = ? AND relationship = 3";
            $numberedArr = Profile::numberedArray($employeeinfo['father']);
            array_push($numberedArr, $id);
            $udpates = DB::update ($stmt,$numberedArr);
            
            // Update mother's info
            $stmt = "UPDATE tbl_employee_family_background SET ";
            $ctr=1;
            foreach ($employeeinfo['mother'] as $key => $value) {
                if($ctr == sizeof($employeeinfo['mother'])) {
                    $stmt .= $key . '= ?';
                }
                else {
                    $stmt .= $key . '= ?, ';
                }
                $ctr++;
            }
            $stmt .= "WHERE employee_id = ? AND relationship = 2";
            $numberedArr = Profile::numberedArray($employeeinfo['mother']);
            array_push($numberedArr, $id);
            $udpates = DB::update ($stmt,$numberedArr);

            // Update spouse's info
            $stmt = "UPDATE tbl_employee_family_background SET ";
            $ctr=1;
            foreach ($employeeinfo['spouse'] as $key => $value) {
                if($ctr == sizeof($employeeinfo['spouse'])) {
                    $stmt .= $key . '= ?';
                }
                else {
                    $stmt .= $key . '= ?, ';
                }
                $ctr++;
            }
            $stmt .= "WHERE employee_id = ? AND relationship = 1";
            $numberedArr = Profile::numberedArray($employeeinfo['spouse']);
            array_push($numberedArr, $id);
            $udpates = DB::update ($stmt,$numberedArr);

            //Update child info
            for($i=1;$i<sizeof($employeeinfo['child']);$i++)
            {
                $stmt = "UPDATE tbl_employee_family_background SET ";
                $ctr=1;
                foreach ($employeeinfo['child'][$i] as $key => $value) {
                    if($ctr == sizeof($employeeinfo['child'][$i])) {
                        $stmt .= $key . '= ?';
                    }
                    else {
                        $stmt .= $key . '= ?, ';
                    }
                    $ctr++;
                }
                $stmt .= "WHERE employee_id = ? AND relationship = 0 AND no = $employeeinfo['child'][$i]['no']";
                $numberedArr = Profile::numberedArray($employeeinfo['child'][$i]);
                array_push($numberedArr, $id);
                $udpates = DB::update ($stmt,$numberedArr);
            }
        }
    }
}