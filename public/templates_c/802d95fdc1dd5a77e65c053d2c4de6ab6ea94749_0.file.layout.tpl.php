<?php
/* Smarty version 3.1.36, created on 2020-08-26 08:45:52
  from 'C:\xampp\htdocs\www\dtrs\public\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f46052036eb67_49502164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '802d95fdc1dd5a77e65c053d2c4de6ab6ea94749' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\dtrs\\public\\templates\\layout.tpl',
      1 => 1598255237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f46052036eb67_49502164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Language" content="en" />
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="theme-color" content="#4188c9">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />

        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17012541435f460520369024_78569291', 'title');
?>
</title>
        <!-- Dashboard Core -->
        <?php echo '<script'; ?>
 src="./assets/js/require.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            requirejs.config({
                baseUrl: '.',
                waitSeconds: 0
            });
        <?php echo '</script'; ?>
>
        <link href="./assets/css/style.css" rel="stylesheet" />
        <?php echo '<script'; ?>
 src="./assets/js/dashboard.js"><?php echo '</script'; ?>
> 
    </head>
<body class="">
    <div class="page">
        <div class="flex-fill">
            <?php if ($_smarty_tpl->tpl_vars['page']->value != 'login' && $_smarty_tpl->tpl_vars['page']->value != 'home') {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20975424825f46052036d933_78315096', 'content');
?>

        </div>
    </div>
</body>
<?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] != 'login') {
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
</html>
<?php }
/* {block 'title'} */
class Block_17012541435f460520369024_78569291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17012541435f460520369024_78569291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
CBSUA :: HRMS<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_20975424825f46052036d933_78315096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20975424825f46052036d933_78315096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
