<?php
namespace Controllers;

use View\SmartyView;

class Controller {
    public $user;
    public $view;

    public function __construct() {
        $this->view = new SmartyView();
        $this->user = $_SESSION['user'];
        $this->view->assign (["user" => $this->user, "server" => $_SERVER["REQUEST_SCHEME"].'://'.$_SERVER["SERVER_NAME"]]);
        $this->start ();
    }
}