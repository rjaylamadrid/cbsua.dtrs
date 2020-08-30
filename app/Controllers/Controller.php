<?php
namespace Controllers;

use View\SmartyView;

class Controller {
    public $user;
    public $view;

    public function __construct () {
        $this->user = $_SESSION['user'];
        $this->view = new SmartyView ();

        $this->view->assign (["user" => $this->user, "page" => $this->request_page ()]);
    }

    private function request_page () {
        $uri = explode ("/", rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/"));
        return $uri[1];
    }
}