<?php
/* Smarty version 3.1.36, created on 2020-08-26 09:56:17
  from 'C:\xampp\htdocs\www\dtrs\public\templates\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f4615a1a03b74_43890535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61cf27279df399894a61cb0088a3fe008fac0f0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\dtrs\\public\\templates\\admin\\dashboard.tpl',
      1 => 1598428574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4615a1a03b74_43890535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11704647435f4615a19fb432_86704395', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_11704647435f4615a19fb432_86704395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11704647435f4615a19fb432_86704395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="my-3 my-md-5">
    <div class="container">
        <div class="row row-cards row-deck">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b><?php echo date('F');?>
</b> Birthday Celebrants <?php echo $_smarty_tpl->tpl_vars['bdaycelebrant']->value['first_name'];?>
</h3>
                    </div>
                    <div class="card-body o-auto" style="height: 20rem">
                    <ul class="list-unstyled list-separated">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bdaycelebrant']->value, 'celebrant');
$_smarty_tpl->tpl_vars['celebrant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['celebrant']->value) {
$_smarty_tpl->tpl_vars['celebrant']->do_else = false;
?>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(assets/images/employees/<?php echo $_smarty_tpl->tpl_vars['celebrant']->value['profile_picture'];?>
)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit"><?php echo $_smarty_tpl->tpl_vars['celebrant']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['celebrant']->value['last_name'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['celebrant']->value['Age'];?>
</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x"><?php echo $_smarty_tpl->tpl_vars['celebrant']->value['BDate'];?>
 - <?php echo $_smarty_tpl->tpl_vars['celebrant']->value['Araw'];?>
</small>
                                </div>
                            </div>
                        </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="alert alert-primary">Employee Statistics</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="chart-gender-ratio" class="c3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="chart-campus-ratio" class="c3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
