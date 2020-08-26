<?php
/* Smarty version 3.1.36, created on 2020-08-26 10:07:31
  from 'C:\xampp\htdocs\www\dtrs\public\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f461843c794f3_09259252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd2429872d7a6f0b7afe2851dd0ef41bf9bcc02f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\dtrs\\public\\templates\\header.tpl',
      1 => 1598429249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modal/account_modal.tpl' => 1,
  ),
),false)) {
function content_5f461843c794f3_09259252 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header py-4">
    <div class="card-status bg-secondary"></div>
    <div class="container" style="padding-right: 0.75rem; padding-left: 0.75rem;">
        <div class="d-flex">
            <a class="header-brand" href="./index.html">
                <img src="assets/images/logo.png" class="header-brand-img" alt="cbsua umis logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span><img class="avatar" style="object-fit: cover;" src="assets/images/employees/<?php if ($_smarty_tpl->tpl_vars['user']->value['employee_picture']) {
echo $_smarty_tpl->tpl_vars['user']->value['employee_picture'];
} else { ?>profile_temp.jpeg<?php }?>"></span>
                        <span class="ml-2 d-none d-lg-block">
                            <span class="text-default"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['user']->value['first_name'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['user']->value['last_name'], 'UTF-8');?>
</span>
                            <small class="text-muted d-block mt-1"></small>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['is_admin'] == 1) {?>
                        <a class="dropdown-item" href="#loginOtherAccountModal" data-toggle="modal">
                            <i class="dropdown-icon fe fe-user"></i> Account
                        </a>
                        <?php }?>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-send"></i> Messages
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-settings"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?a=logout">
                            <i class="dropdown-icon fe fe-log-out"></i> Sign out
                        </a>
                    </div>
                </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>
<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == "admin") {?>
                        <li class="nav-item">
                            <a href="dashboard" class="nav-link <?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] == 'dashboard') {?>active<?php }?>"><i class="fe fe-home"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="employees" class="nav-link <?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] == 'employees') {?>active<?php }?>"><i class="fe fe-users"></i> Employees</a>
                        </li>
                        <li class="nav-item">
                            <a href="payroll" class="nav-link <?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] == 'payroll') {?>active<?php }?>"><i class="fe fe-edit-3"></i> Payroll</a>
                        </li>
                        <li class="nav-item">
                            <a href="attendance" class="nav-link <?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] == 'attendance') {?>active<?php }?>"><i class="fe fe-clock"></i> Daily Time Record</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] == 'calendar') {?>active<?php }?>"><i class="fe fe-calendar"></i> Calendar</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] == 'leave') {?>active<?php }?>"><i class="fe fe-mail"></i> Leave Request</a>
                            <span><div class="notif"></div></span>
                        </li>
                        <li class="nav-item">
                            <a href="settings" class="nav-link <?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] == 'settings') {?>active<?php }?>"><i class="fe fe-settings"></i> Settings</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a href="profile/basic-info" class="nav-link <?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] == 'profile') {?>active<?php }?>"><i class="fe fe-user"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="payroll" class="nav-link <?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] == 'payroll') {?>active<?php }?>"><i class="fe fe-edit-3"></i> Payroll</a>
                        </li>
                        <li class="nav-item">
                            <a href="attendance" class="nav-link <?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] == 'attendance') {?>active<?php }?>"><i class="fe fe-clock"></i> Daily Time Record</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->_subTemplateRender("file:modal/account_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
