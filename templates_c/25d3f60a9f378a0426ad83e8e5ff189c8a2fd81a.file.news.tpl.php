<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-23 20:18:08
         compiled from "./templates/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68000397594d9d062811b0-49838984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25d3f60a9f378a0426ad83e8e5ff189c8a2fd81a' => 
    array (
      0 => './templates/news.tpl',
      1 => 1498274286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68000397594d9d062811b0-49838984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594d9d062c9b05_17623330',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594d9d062c9b05_17623330')) {function content_594d9d062c9b05_17623330($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active"><a href="news.php">News</a></li>
</ol>

<center>  
<h2>News</h2>
</center>

<div class="textbox">
    <p>Staying up to date with the latest cryptocurrency news is a must if you want to maximize your gains! In such a fast moving and volatile market, keeping you're eye on the prices of Ethereum should become a habit.</p>
    <p>Below you will find feeds to the latest cryptocurrency and Ethereum news, coming from the best sources with constant updates. Use updates to know when there's potential for some extra earnings by researching altcoins, and knowing when the best times are to buy more Ethereum.</p>
    <p>Between wise investments, and the steady trickle of FREE Ethereum from faucets like <a href="index.php">this one</a>, you can ensure your wealth for your future.</p>
</div>

<a class="twitter-follow-button"
  href="https://twitter.com/TwitterDev"
  data-size="large">
Follow @TwitterDev</a>

<center><a class="twitter-timeline" data-width="800" data-height="700" data-theme="dark" data-link-color="#676FB1" href="https://twitter.com/EthereumFaucets/lists/ethereum-info">A Twitter List by EthereumFaucets</a> <?php echo '<script'; ?>
 async src="//platform.twitter.com/widgets.js" charset="utf-8"><?php echo '</script'; ?>
></center>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
