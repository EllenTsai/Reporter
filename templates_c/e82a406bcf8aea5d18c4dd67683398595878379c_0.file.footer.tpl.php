<?php
/* Smarty version 3.1.30, created on 2017-11-10 14:36:10
  from "D:\Dropbox\Ellen_php7\Ellen_php7\UniServerZ\www\reporter\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a05b95a3de181_70013413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e82a406bcf8aea5d18c4dd67683398595878379c' => 
    array (
      0 => 'D:\\Dropbox\\Ellen_php7\\Ellen_php7\\UniServerZ\\www\\reporter\\templates\\footer.tpl',
      1 => 1510324377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a05b95a3de181_70013413 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        var images = ['pic1.jpg', 'pic2.jpg', 'pic3.jpg'];
        $(document).ready(function () {
            var images = ['pic.jpg', 'pic2.jpg', 'pic3.jpg'];
            $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });
        });
        $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());
    });
    $(window).resize(function () {
        $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());
    });

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"><?php echo '</script'; ?>
><?php }
}
