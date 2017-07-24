<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-26 10:21:35
         compiled from "./templates/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1800963430594d9d99b62a11-25437366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6b5473c5512ac371db9cd13eb84d68b3cfaba8b' => 
    array (
      0 => './templates/top.tpl',
      1 => 1498497693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1800963430594d9d99b62a11-25437366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594d9d99b6fe60_35772716',
  'variables' => 
  array (
    'prize_min' => 0,
    'prize_max' => 0,
    'setinterval' => 0,
    'ads_main_top' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594d9d99b6fe60_35772716')) {function content_594d9d99b6fe60_35772716($_smarty_tpl) {?><div class="row text-center lgfont">
    <h1>Ethereum Faucet</h1>
    <h2>Get Free Ethereum!</h2>
    This Ethereum Faucet allows you to earn <br>between <span style="color:#428bca"><?php echo $_smarty_tpl->tpl_vars['prize_min']->value;?>
</span> and <span style="color:#428bca"><?php echo $_smarty_tpl->tpl_vars['prize_max']->value;?>
</span> free gwei every <?php echo $_smarty_tpl->tpl_vars['setinterval']->value;?>
 minutes!<br>
    <strong>Your earnings goes directly to your <a href="http://epay.info/" target="_blank">ePay</a> account</strong> <br>
    Sign Up <a href="http://epay.info/register" target="_blank">Here</a> for an ePay account if you don't have one already.
</div>  

<div class="row text-center">
    Our service depends on the revenue from displaying adverts.<br>
    Please deactivate your ad blocker to support us.<br><br>
 </div>
 
 <div class="row text-center lgfont">
    Learning about cryptocurrency can become an overwhelming experience. <br>Let <a href="http://www.cryptolearning.info"><strong>CryptoLearning.info</strong></a> help you with our easy-to-read PDFs, videos and <a href="free-resources.php">free resources</a>.
 </div>

<div class="row imgwrapper centerimg">
    <?php echo $_smarty_tpl->tpl_vars['ads_main_top']->value;?>

</div>

<br>
<?php echo $_smarty_tpl->getSubTemplate ('msg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
