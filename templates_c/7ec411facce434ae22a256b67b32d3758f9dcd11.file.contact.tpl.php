<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-23 17:36:06
         compiled from "./templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1451090685594d9f287b5e77-10190984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ec411facce434ae22a256b67b32d3758f9dcd11' => 
    array (
      0 => './templates/contact.tpl',
      1 => 1498264564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1451090685594d9f287b5e77-10190984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594d9f287fead6_82267577',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594d9f287fead6_82267577')) {function content_594d9f287fead6_82267577($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active"><a href="contact.php">Contact</a></li>
</ol>

<center>  
<h2>Contact</h2>
</center>

<div class="jumbotron" style="background-color: #333">
    <h1 style="color: white">Need help?</h1>
    <p>Use the button below to contact us for any questions or help!</p>
    <p style="font-size: 12px; color: #777">*or right-click and copy the email address</p> 
    <p><a class="btn btn-primary btn-lg" href="mailto:info@ethereum-faucets.com" role="button">info@ethereum-faucets.com</a></p>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
