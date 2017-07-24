<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-26 10:25:22
         compiled from "./templates/msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1227609335594bec97e97301-57268997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4cfcdd9e6b669231eadbfc89ad73274c35c24db' => 
    array (
      0 => './templates/msg.tpl',
      1 => 1498497746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1227609335594bec97e97301-57268997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594bec97ebf428_73677804',
  'variables' => 
  array (
    'faucet_balance' => 0,
    'epay_err' => 0,
    'epay_err_msg' => 0,
    'captcha' => 0,
    'nobtc' => 0,
    'succ' => 0,
    'wallet' => 0,
    'adb' => 0,
    'anb' => 0,
    'abinf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594bec97ebf428_73677804')) {function content_594bec97ebf428_73677804($_smarty_tpl) {?>
<div class="row" style="margin-top:5px;">
	<div class="col-md-10 col-md-push-1">
		<div class="alert alert-success text-center">We have <?php echo $_smarty_tpl->tpl_vars['faucet_balance']->value;?>
 gwei available!</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['epay_err']->value) {?>
<div class="row" style="margin-top:5px;">
	<div class="col-md-10 col-md-push-1">
		<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['epay_err_msg']->value;?>
</div>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
<div class="row" style="margin-top:5px;">
	<div class="col-md-10 col-md-push-1">
		<div class="alert alert-danger">That CAPTCHA was incorrect. Try again!</div>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['nobtc']->value) {?>
<div class="row" style="margin-top:5px;">
	<div class="col-md-10 col-md-push-1">
		<div class="alert alert-danger text-center">No Ethereum address or ePay username found was entered!</div>
	</div>
</div>
<?php }?>
    
<?php if ($_smarty_tpl->tpl_vars['succ']->value) {?>
<div class="row" style="margin-top:5px;">
	<div class="col-md-10 col-md-push-1">
		<div class="alert alert-success text-center">
			<strong><?php echo $_smarty_tpl->tpl_vars['succ']->value;?>
</strong> gwei was sent to <strong><a href="https://epay.info/check/<?php echo $_smarty_tpl->tpl_vars['wallet']->value;?>
" target="_blank" style="color:#464646"> your ePay.info account</a></strong>
		</div>
	</div>
</div>
<?php }?>

<Div class="clearfix"></Div> 
 
<?php if ($_smarty_tpl->tpl_vars['adb']->value) {?>  
<div class="row" style="margin-top:5px; display:none;" id="frm_adblocker_detect">
	<div class="col-md-10 col-md-push-1">
		<div class="alert alert-danger text-center">
			Please deactivate your adblocker.			
		</div>
	</div>
</div>
<?php }?>  

<?php if ($_smarty_tpl->tpl_vars['anb']->value) {?>  
<div class="row" style="margin-top:5px;">
	<div class="col-md-10 col-md-push-1">
		<div class="alert alert-danger">The AntiBot was incorrect. Try again!
	</div>
</div>
<?php }?>  

<div class="row"  style="margin-top:5px;"><div class="col-md-10 col-md-push-1 text-center"><?php echo $_smarty_tpl->tpl_vars['abinf']->value;?>
</div></div><?php }} ?>
