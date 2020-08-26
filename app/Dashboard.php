<?php
use Controllers\DashboardController;

class Dashboard extends DashboardController {
    
    public function index () {
        if ($this->user['is_admin']) $this->view->display ('admin/dashboard', ['user' => $this->user, 'bdaycelebrant' => $this->bday_celebrant()]);
        else $this->view->display ('home');
    }
}