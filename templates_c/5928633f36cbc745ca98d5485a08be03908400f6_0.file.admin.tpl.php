<?php
/* Smarty version 3.1.30, created on 2017-11-10 14:39:07
  from "D:\Dropbox\Ellen_php7\Ellen_php7\UniServerZ\www\reporter\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a05ba0bc182a9_68672672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5928633f36cbc745ca98d5485a08be03908400f6' => 
    array (
      0 => 'D:\\Dropbox\\Ellen_php7\\Ellen_php7\\UniServerZ\\www\\reporter\\templates\\admin.tpl',
      1 => 1510324744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a05ba0bc182a9_68672672 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="admin.php" method="post">
                <div class="form-group">
                    <label for="title" class="col-form-label sr-only">文章標題</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題">
                </div>
                <div class="form-group">
                    <label for="content" class="col-form-label sr-only">文章內容</label>
                    <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"></textarea>
                </div>
                <div class="text-center">
                    <input type="hidden" name="op" value="insert">
                    <button type="submit" class="btn btn-primary">儲存</button>
                </div>
            </form>


        </div>
        </form>


    </div>
    </form>
    </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html><?php }
}
