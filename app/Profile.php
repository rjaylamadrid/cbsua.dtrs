<?php
use Database\DB;

class Profile {
    public static $employee;

    public static function employee ($id) {
        self::$employee = DB::select ("SELECT a.first_name, a.middle_name, a.last_name, b.* FROM tbl_employee a, tbl_employee_status b WHERE a.employee_id = b.employee_id AND b.employee_id = ? GROUP BY a.employee_id", $id)[0];
        return new static();
    }

    public static function info ($profile) {
        if (self::$employee) {
            return DB::select ("SELECT * FROM $profile WHERE employee_id = ?", self::$employee['employee_id'])[0];
        }
    }
}