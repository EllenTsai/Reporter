<?php
/* Smarty version 3.1.30, created on 2017-11-11 00:32:04
  from "C:\Users\Ellen\Dropbox\Ellen_php7\Ellen_php7\UniServerZ\www\reporter\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a064504e1b387_15736628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ef6d044fa3c16f1bc9225c197ebddd11fd2e6cc' => 
    array (
      0 => 'C:\\Users\\Ellen\\Dropbox\\Ellen_php7\\Ellen_php7\\UniServerZ\\www\\reporter\\templates\\footer.tpl',
      1 => 1510324377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a064504e1b387_15736628 (Smarty_Internal_Template $_smarty_tpl) {
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
