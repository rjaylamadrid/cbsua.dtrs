<?php
/* Smarty version 3.1.36, created on 2020-08-26 10:01:58
  from 'C:\xampp\htdocs\www\dtrs\public\templates\modal\account_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f4616f695c2c6_14103969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abefa02bfb5d214ec1486e3bc4354333b58187e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\dtrs\\public\\templates\\modal\\account_modal.tpl',
      1 => 1598428914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4616f695c2c6_14103969 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="loginOtherAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">Login to your <?php if ($_smarty_tpl->tpl_vars['session']->value['type'] == 'admin') {?>Employee<?php } else { ?>Admin<?php }?> Account?</div>
        <div class="modal-footer">
          <form method="POST" action="?a=login">
            <input type="hidden" name="action" value="change_type">
            <input type="hidden" name="type" value="<?php if ($_smarty_tpl->tpl_vars['session']->value['type'] == 'admin') {?>employee<?php } else { ?>admin<?php }?>">
            <a href="#" class="btn btn-pill btn-secondary" type="" data-dismiss="modal">Cancel</a>
            <button class="btn btn-primary btn-pill" name="otherAccount" type="submit" >Login as <?php if ($_smarty_tpl->tpl_vars['session']->value['type'] == 'admin') {?>Employee<?php } else { ?>Admin<?php }?></button>
          </form>
        </div>
      </div>
    </div>
</div><?php }
}
