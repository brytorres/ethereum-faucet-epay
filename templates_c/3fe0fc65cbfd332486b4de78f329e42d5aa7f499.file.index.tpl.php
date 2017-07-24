<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-23 19:21:53
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:382122348594bec97d54a43-71138746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fe0fc65cbfd332486b4de78f329e42d5aa7f499' => 
    array (
      0 => './templates/index.tpl',
      1 => 1498270911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '382122348594bec97d54a43-71138746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594bec97e6d728_32814868',
  'variables' => 
  array (
    'anti_bot' => 0,
    'ab4' => 0,
    'timer' => 0,
    'faucet_steps' => 0,
    'step' => 0,
    'wll' => 0,
    'ads_1' => 0,
    'ab1' => 0,
    'diff' => 0,
    'solvemedia_box' => 0,
    'solvemedia_active' => 0,
    'recaptcha_box' => 0,
    'recap_active' => 0,
    'token_id' => 0,
    'token' => 0,
    'ab2' => 0,
    'ads_2' => 0,
    'ab3' => 0,
    'bwait' => 0,
    'bwait_time' => 0,
    'ab5' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594bec97e6d728_32814868')) {function content_594bec97e6d728_32814868($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
<form action="" method="post" id="frm_contain">
<?php if ($_smarty_tpl->tpl_vars['anti_bot']->value) {?><center><?php echo $_smarty_tpl->tpl_vars['ab4']->value;?>
</center><?php }?>
<?php if (!$_smarty_tpl->tpl_vars['timer']->value&&($_smarty_tpl->tpl_vars['faucet_steps']->value==1||!$_smarty_tpl->tpl_vars['step']->value)) {?>
	<div class="row">
		<div class="col-md-10 col-md-push-1">
			<div class="form-group" style="margin-top:5px;margin-bottom:5px;">
				<input class="form-control input-lg" type="text" value="<?php echo $_smarty_tpl->tpl_vars['wll']->value;?>
" name="wallet" id="wallet" placeholder="Ethereum Address or ePay username" style="padding:20px;">
			</div>
		</div>
	</div>
<?php }?>  
 
<div  style="margin-top:5px;"></div> 
<div class="row"><center><?php echo $_smarty_tpl->tpl_vars['ads_1']->value;?>
</center></div>
<?php if ($_smarty_tpl->tpl_vars['anti_bot']->value) {?><center><?php echo $_smarty_tpl->tpl_vars['ab1']->value;?>
</center><?php }?>
<Div class="clearfix"></Div>  
    
<?php if ($_smarty_tpl->tpl_vars['timer']->value) {?>
	<div class="col-md-6 text-center col-md-push-3">
		<strong style="font-size:18px">You can get a reward again in</strong><br>
		<div style="margin-top:10px"></div>
		<div class="clock"></div>
		<?php echo '<script'; ?>
 type="text/javascript"> var diff = <?php echo $_smarty_tpl->tpl_vars['diff']->value;?>
; <?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="templates/style/javascript/clock.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.js"><?php echo '</script'; ?>
>
	</div>
<?php }?>
      
<Div class="clearfix"></Div>      

<?php if (($_smarty_tpl->tpl_vars['faucet_steps']->value==1||$_smarty_tpl->tpl_vars['step']->value==2)&&!$_smarty_tpl->tpl_vars['timer']->value) {?>
	<Div class="row" style="margin-top:5px;">
		<Div class="col-md-6 col-md-push-3">
		
			<ul class="nav nav-tabs" role="tablist">
				<?php if ($_smarty_tpl->tpl_vars['solvemedia_box']->value) {?><li role="presentation" class="<?php if ($_smarty_tpl->tpl_vars['solvemedia_active']->value) {?>active<?php }?>"><a href="#solvmedia" aria-controls="solvmedia" role="tab" data-toggle="tab">Solvemedia</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['recaptcha_box']->value) {?><li role="presentation" class="<?php if ($_smarty_tpl->tpl_vars['recap_active']->value) {?>active<?php }?>"><a href="#recaptcha" aria-controls="recaptcha" role="tab" data-toggle="tab">Recaptcha</a></li><?php }?>
			</ul>
	
			<div class="tab-content">
				<?php if ($_smarty_tpl->tpl_vars['solvemedia_box']->value) {?><div role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['solvemedia_active']->value) {?>active<?php }?>" id="solvmedia"><center><?php echo $_smarty_tpl->tpl_vars['solvemedia_box']->value;?>
</center></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['recaptcha_box']->value) {?><div role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['recap_active']->value) {?>active<?php }?>" id="recaptcha"><center><?php echo $_smarty_tpl->tpl_vars['recaptcha_box']->value;?>
</center></div><?php }?>
			</div>
			
		</Div>
	</Div>
	<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['token_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['anti_bot']->value) {?><center><?php echo $_smarty_tpl->tpl_vars['ab2']->value;?>
</center><?php }?>
  
  
<Div class="clearfix"></Div>      
<div class="row" style="margin-top:5px;"><center><?php echo $_smarty_tpl->tpl_vars['ads_2']->value;?>
</center></div>
    
    
<?php if (!$_smarty_tpl->tpl_vars['timer']->value) {?>
 <div class="row" style="margin-top:5px;">
	<div class="col-xs-4 text-center col-xs-push-4">
		<?php if ($_smarty_tpl->tpl_vars['faucet_steps']->value==1||$_smarty_tpl->tpl_vars['step']->value==2) {?>
		
			
		
		
			<?php if ($_smarty_tpl->tpl_vars['anti_bot']->value) {?><center><?php echo $_smarty_tpl->tpl_vars['ab3']->value;?>
</center><?php }?>
		
		
			<?php if ($_smarty_tpl->tpl_vars['anti_bot']->value) {?>
			<input type="hidden" name="antibotlinks" id="antibotlinks" value="" data-click="<?php echo $_smarty_tpl->tpl_vars['anti_bot']->value;?>
" /> 
			<?php }?>
		
		
			<?php if (!$_smarty_tpl->tpl_vars['anti_bot']->value) {?><button type="submit" name="with" class="btn btn-lg btn-block btn-success" id="claim" <?php if ($_smarty_tpl->tpl_vars['bwait']->value) {?>disabled data-time="<?php echo $_smarty_tpl->tpl_vars['bwait_time']->value;?>
"<?php }?>>Claim your prize NOW!!</button><?php }?>
			
			
			
		<?php } else { ?>
			<button type="submit" name="step2" class="btn btn-lg btn-block btn-success" id="claim" <?php if ($_smarty_tpl->tpl_vars['bwait']->value) {?> disabled data-time="<?php echo $_smarty_tpl->tpl_vars['bwait_time']->value;?>
"<?php }?>>Next Step</button>
		<?php }?>
	</div>
</div>
<?php }?>
  
 <?php if ($_smarty_tpl->tpl_vars['anti_bot']->value) {?><center><?php echo $_smarty_tpl->tpl_vars['ab5']->value;?>
</center><?php }?> 
  
   
</form>


<?php echo $_smarty_tpl->getSubTemplate ('bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
