<?php
/* Smarty version 3.1.30, created on 2017-11-10 14:36:10
  from "D:\Dropbox\Ellen_php7\Ellen_php7\UniServerZ\www\reporter\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a05b95a3b31f8_07744647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ad71cdb92d6ab3ff8b1b5976a86fa287d6c0d4b' => 
    array (
      0 => 'D:\\Dropbox\\Ellen_php7\\Ellen_php7\\UniServerZ\\www\\reporter\\templates\\index.tpl',
      1 => 1510324565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a05b95a3b31f8_07744647 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>

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
            <h1 class="text-white" .pt-5>花蓮193線道的美麗與哀愁</h1>
            <div class="row">
                <div class="col-6">
                    <p class="text-white" .mt-5>【編按】花蓮縣政府將於17日舉行環境差異分析審查會，議決通往花蓮著名景點七星潭的「193縣道拓寬案」。《報導者》特別刊登作家吳明益專文，在環差會議前夕深刻反思此案的必要性，進一步看見193縣道這條優美秘境的真正價值。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 </h3>
        <?php
}
} else {
?>

        <h1>尚無內容</h1>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</body>

</html><?php }
}
