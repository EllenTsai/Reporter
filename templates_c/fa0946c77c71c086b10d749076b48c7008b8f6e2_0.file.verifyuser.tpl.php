<?php
/* Smarty version 3.1.30, created on 2017-11-11 07:45:23
  from "D:\Ellen_php7\UniServerZ\www\reporter\templates\verifyuser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a06aa932bda86_60245188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa0946c77c71c086b10d749076b48c7008b8f6e2' => 
    array (
      0 => 'D:\\Ellen_php7\\UniServerZ\\www\\reporter\\templates\\verifyuser.tpl',
      1 => 1510365809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a06aa932bda86_60245188 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

    <div class="img-container">
        <div class="container">
            <nav class="nav">
                <a href="index.php" class="nav-link text-white">首頁</a>
                <a href="index.php" class="nav-link text-white">編輯精選</a>
                <a href="index.php" class="nav-link text-white">街巷故事</a>
                <a href="index.php" class="nav-link text-white">市井觀點</a>
                <a href="index.php" class="nav-link text-white">私房知識塾</a>
                <a href="admin.php" class="nav-link text-white">管理</a>
            </nav>
            <h1 class="pt-5">巷集談-街道新聞</h1>

            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

        </div>
    </div>


    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</body>

</html><?php }
}
