<?php
namespace View;

use Smarty;

class SmartyView {
    public $smarty;

    public function __construct () {
        $smarty = new Smarty();
        $smarty->setTemplateDir('templates');
        $smarty->setCompileDir('templates_c');
        $this->smarty = $smarty;
    }

    public function display ($name, $vars = null) {
        if ($vars) $this->assign ($vars);
        $this->smarty->display ("$name.tpl");
        return;
    }

    public function assign ($vars) {
        foreach ($vars as $key => $value) {
            $this->smarty->assign ($key, $value);
        }
        return;
    }
}