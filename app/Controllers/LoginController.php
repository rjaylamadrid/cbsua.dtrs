<?php
namespace Controllers;

class LoginController extends Controller {
    public function start () {}
    
    public function find ($id) {
        $user = DB::select ("SELECT * FROM tbl_user_employee a, tbl_employee_status b WHERE a.employee_username = ? and a.employee_id = b.employee_id AND b.active_status = '1' ORDER BY b.date DESC", $id)[0];
        if ($user) {
            $this->user = $user;
            return $user;
        }
        return;
    }

    public function verify ($pass) {
        return password_verify ($pass, $this->user['employee_password']);
    }
}