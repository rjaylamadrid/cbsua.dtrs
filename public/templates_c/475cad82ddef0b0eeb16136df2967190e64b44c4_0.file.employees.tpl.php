<?php
/* Smarty version 3.1.36, created on 2020-08-26 10:11:20
  from 'C:\xampp\htdocs\www\dtrs\public\templates\admin\employees.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f4619285aa603_65204656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '475cad82ddef0b0eeb16136df2967190e64b44c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\dtrs\\public\\templates\\admin\\employees.tpl',
      1 => 1598429478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/employee_stats.tpl' => 1,
  ),
),false)) {
function content_5f4619285aa603_65204656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9991791715f46192859c8c6_80478301', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_9991791715f46192859c8c6_80478301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9991791715f46192859c8c6_80478301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="my-3 my-md-5">
        <div class="container">
            <?php $_smarty_tpl->_subTemplateRender("file:admin/employee_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group form-inline">
                                <a href="?a=employees&show=registration" class="btn btn-primary"><i class="fe fe-user-plus"></i> New employee</a>
                                <div style="float: right;">
                                    <form action="" method="POST" id="inactivefrm">
                                        <div class="form-group" style="margin-bottom: 0px;">
                                            <label class="custom-switch" style="display: inline-block; padding: 0 10px; ">
                                                <input type="checkbox" name="inactive" class="custom-switch-input" onclick="inactivefrm.submit()" <?php if ($_smarty_tpl->tpl_vars['frm']->value['inactive']) {?>checked<?php }?>>
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Inactive </span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cards row-deck">
                <div class="col-12"><div class="card">
                    <div class="table-responsive">
                        <table style=" font-family:  Arial;" class="table table-hover card-table table-vcenter text-nowrap datatable dataTable no-footer" id="employees">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>BirthDate</th>
                                <th>Position</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['employee']->value['employee_id'];?>
</td>
                                        <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['employee']->value['first_name'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['employee']->value['last_name'], 'UTF-8');?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['employee']->value['gender'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['employee']->value['birthdate'];?>
</td>
                                        <td></td>
                                        <td class="text-center"><div class="item-action dropdown">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="icon" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-181px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a href="?a=employees&show=profile&id=<?php echo $_smarty_tpl->tpl_vars['employee']->value['employee_id'];?>
&tab=basic-info" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> View Profile 
                                                </a>
                                                <a href="?a=employees&show=employment&id=<?php echo $_smarty_tpl->tpl_vars['employee']->value['employee_id'];?>
&tab=employment" class="dropdown-item"><i class="dropdown-icon fe fe-user"></i> View Employment 
                                                </a>
                                                                                            </div>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
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
