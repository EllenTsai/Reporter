<?php
/* Smarty version 3.1.30, created on 2017-11-11 02:35:08
  from "D:\Ellen_php7\UniServerZ\www\reporter\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0661dc33c247_96292311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b2fa1125a9c38f729fcd567e71da1a81b063175' => 
    array (
      0 => 'D:\\Ellen_php7\\UniServerZ\\www\\reporter\\templates\\op_show_article.tpl',
      1 => 1510206196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0661dc33c247_96292311 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
</div><?php }
}
