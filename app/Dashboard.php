<?php
use Controllers\DashboardController;

class Dashboard extends DashboardController {
    
    public function __construct () {
        parent::__construct ();
    }

    public function index () {
        if ($this->user['is_admin']) $this->view->display ('admin/dashboard', ['bdaycelebrant' => $this->bday_celebrant()]);
        else $this->view->display ('home');
    }
}