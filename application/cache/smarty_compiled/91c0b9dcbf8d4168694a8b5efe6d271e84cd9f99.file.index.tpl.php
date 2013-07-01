<?php /* Smarty version Smarty-3.1.5, created on 2013-07-01 12:12:44
         compiled from "Z:\home\kohana\www\application\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1880651d1b88c04d314-26423433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91c0b9dcbf8d4168694a8b5efe6d271e84cd9f99' => 
    array (
      0 => 'Z:\\home\\kohana\\www\\application\\views\\index.tpl',
      1 => 1372698132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1880651d1b88c04d314-26423433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_51d1b88c0b2c7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d1b88c0b2c7')) {function content_51d1b88c0b2c7($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
<br>
<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value->blogposts->find_all(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['post']->value->name;?>

<?php } ?><?php }} ?>