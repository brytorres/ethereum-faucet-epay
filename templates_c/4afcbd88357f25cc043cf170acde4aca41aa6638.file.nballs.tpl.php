<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-23 17:13:16
         compiled from "./templates/nballs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:681956548594da763812ec2-88015725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4afcbd88357f25cc043cf170acde4aca41aa6638' => 
    array (
      0 => './templates/nballs.tpl',
      1 => 1498263191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '681956548594da763812ec2-88015725',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594da76385c428_46809894',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594da76385c428_46809894')) {function content_594da76385c428_46809894($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="games.php">Games</a></li>
    <li class="active"><a href="nballs.php">NBalls</a></li>
</ol>

<center><h2>NBalls</h2></center> 
<br>
<center><iframe src="https://cloudgames.com/games/html5/nballs-new-en-s-iga-cloud/index.html?pub=10" name="cloudgames-com" width="559" height="638" frameborder="0" scrolling="no"></iframe></center>
<br>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
