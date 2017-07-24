<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-23 17:13:21
         compiled from "./templates/cube-ninja.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69175417594daa0b113848-45571276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b36dd95cb30bc62bf30357ffc18b7c7b707e9d74' => 
    array (
      0 => './templates/cube-ninja.tpl',
      1 => 1498263162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69175417594daa0b113848-45571276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594daa0b160264_93283720',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594daa0b160264_93283720')) {function content_594daa0b160264_93283720($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="games.php">Games</a></li>
    <li class="active"><a href="cube-ninja.php">Cube Ninja</a></li>
</ol>

<center><h2>Cube Ninja</h2></center> 
<br>
<center><iframe src="https://cloudgames.com/games/html5/cube-ninja-new-en-s-iga-cloud/index.html?pub=10" name="cloudgames-com" width="706" height="396" frameborder="0" scrolling="no"></iframe></center>
<br>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
