<?php
use Controllers\LoginController;

class Login extends LoginController {
    private $message;

    public function index () {
        if ($_SESSION['user']) header ("location: dashboard");
        $this->view->display ('login', $this->message);
    }

    public function doLogin ($username, $password) {
        if ($this->find ($username)) {
            if ($this->verify ($password)) {
                $_SESSION['user'] = ['employee_id' => $this->user['employee_id'],'campus_id'=>$this->user['campus_id']];
                if ($this->user['privilege'] > 0){
                    $_SESSION['user']['is_admin'] = '1';
                    $_SESSION['user']['type'] = 'admin';
                }
                header ("location: dashboard");
            } else {
                $this->message = ["error" => ["message" => "Incorrect password."]];
            }
        } else {
            $this->message = ["error" => ["message" => "Invalid ID. Please try again."]];
        }
        $this->index ();
    }
}