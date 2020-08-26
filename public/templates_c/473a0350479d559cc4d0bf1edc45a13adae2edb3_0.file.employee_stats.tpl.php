<?php
/* Smarty version 3.1.36, created on 2020-08-26 10:11:20
  from 'C:\xampp\htdocs\www\dtrs\public\templates\admin\employee_stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f46192861f8b4_15711650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '473a0350479d559cc4d0bf1edc45a13adae2edb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\dtrs\\public\\templates\\admin\\employee_stats.tpl',
      1 => 1598426290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f46192861f8b4_15711650 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row row-cards">
    <div class="col-6 col-sm-4 col-lg-2">
        <div class="card">
            <div class="card-body p-3 text-center">
                <div class="h1 m-0"><?php echo $_smarty_tpl->tpl_vars['stats']->value[0];?>
</div>
                <div class="text-muted mb-4">Employees</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-4 col-lg-2">
        <div class="card">
            <div class="card-body p-3 text-center">
                <div class="h1 m-0"><?php echo $_smarty_tpl->tpl_vars['stats']->value[1];?>
</div>
                <div class="text-muted mb-4">Permanent/Casual</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-4 col-lg-2">
        <div class="card">
            <div class="card-body p-3 text-center">
                <div class="h1 m-0"><?php echo $_smarty_tpl->tpl_vars['stats']->value[2];?>
</div>
                <div class="text-muted mb-4">Contract of Service</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-4 col-lg-2">
        <div class="card">
            <div class="card-body p-3 text-center">
                <div class="h1 m-0"><?php echo $_smarty_tpl->tpl_vars['stats']->value[3];?>
</div>
                <div class="text-muted mb-4">Male</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-4 col-lg-2">
        <div class="card">
            <div class="card-body p-3 text-center">
                <div class="h1 m-0"><?php echo $_smarty_tpl->tpl_vars['stats']->value[4];?>
</div>
                <div class="text-muted mb-4">Female</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-4 col-lg-2">
        <div class="card">
            <div class="card-body p-3 text-center">
                <div class="h1 m-0"><?php echo $_smarty_tpl->tpl_vars['stats']->value[5];?>
</div>
                <div class="text-muted mb-4">Inactive</div>
            </div>
        </div>
    </div>
</div><?php }
}
