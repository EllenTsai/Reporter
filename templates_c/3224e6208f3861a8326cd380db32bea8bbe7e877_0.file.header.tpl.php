<?php
/* Smarty version 3.1.30, created on 2017-11-11 00:32:04
  from "C:\Users\Ellen\Dropbox\Ellen_php7\Ellen_php7\UniServerZ\www\reporter\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a064504dde482_51392395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3224e6208f3861a8326cd380db32bea8bbe7e877' => 
    array (
      0 => 'C:\\Users\\Ellen\\Dropbox\\Ellen_php7\\Ellen_php7\\UniServerZ\\www\\reporter\\templates\\header.tpl',
      1 => 1510234759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a064504dde482_51392395 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>require_once 'header.php';
$page_title = '管理頁面';

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
switch ($op) {
    case 'insert':
        $sn = insert_article();
        header("location: index.php?sn=<?php echo $_smarty_tpl->tpl_vars['sn']->value;?>
");
        break;

    default:

        break;
}

require_once 'footer.php';

//儲存文章
function insert_article()
{
    global $db;
    $title   = $db->real_escape_string($_POST['title']);
    $content = $db->real_escape_string($_POST['content']);
    $sql     = "INSERT INTO `article` (`title`, `content`, `create_time`, `update_time`) VALUES ('<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
', NOW(), NOW())";
    $db->query($sql) or die($db->error);
    $sn = $db->insert_id;
    return $sn;
}<?php }
}
