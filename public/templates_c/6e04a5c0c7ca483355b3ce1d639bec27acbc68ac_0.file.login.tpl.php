<?php
/* Smarty version 3.1.36, created on 2020-08-26 07:12:00
  from 'D:\Programs\XAMPP\htdocs\www\dtrs\public\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f45ef20a23be7_35968737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e04a5c0c7ca483355b3ce1d639bec27acbc68ac' => 
    array (
      0 => 'D:\\Programs\\XAMPP\\htdocs\\www\\dtrs\\public\\templates\\login.tpl',
      1 => 1598418696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f45ef20a23be7_35968737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3913429875f45ef20a187b2_80308183', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19983494635f45ef20a191d9_73423562', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_3913429875f45ef20a187b2_80308183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3913429875f45ef20a187b2_80308183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Authentication<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_19983494635f45ef20a191d9_73423562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19983494635f45ef20a191d9_73423562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page-single" style="height:100vh">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <form class="card" action="" method="POST">
                        <input type="hidden" name="action" value="auth">
                        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?><div class="card-alert alert alert-danger mb-0"><?php echo $_smarty_tpl->tpl_vars['error']->value['message'];?>
</div><?php }?>
                        <div class="card-body p-6">
                            <div class="card-title">Login to your account</div>
                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" name="username" class="form-control" autocomplete="username" placeholder="Enter email address" value="<?php if ($_smarty_tpl->tpl_vars['error']->value['type'] == '1') {
echo $_smarty_tpl->tpl_vars['frm']->value['username'];
}?>">
                                </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Password
                                </label>
                                <input type="password" name="password" class="form-control" autocomplete="current-password" placeholder="Password">
                            </div>
                            <div class="form-footer">
                                <button type="submit" name="" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
