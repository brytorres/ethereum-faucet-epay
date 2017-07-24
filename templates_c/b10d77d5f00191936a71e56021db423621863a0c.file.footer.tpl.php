<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-26 09:51:48
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:750827296594bec97ec2359-28365315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b10d77d5f00191936a71e56021db423621863a0c' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1498495894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '750827296594bec97ec2359-28365315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594bec97edb1b0_17166860',
  'variables' => 
  array (
    'year' => 0,
    'domainname' => 0,
    'title' => 0,
    'ads_right' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594bec97edb1b0_17166860')) {function content_594bec97edb1b0_17166860($_smarty_tpl) {?>
<div class="container">
    <div class="col-md-6 alert alert-success">
        Donate to us using the Ethereum Wallet Address below!
    <br>
        <div>
            <strong>0x1c5f939856044dfd310045c297f26a1d58d829ce</strong>
        </div>
    </div>
</div>

<footer class="text-center">
	© Copyright <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a><br>
	<!-- Built Using <a href="http://epay.info" target="_blank">ePay.info</a> - 2014-<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 -->
</footer>
<br>

	</div>
	<div class="col-md-3 hidden-xs text-center"  style="padding-top:35px;"><?php echo $_smarty_tpl->tpl_vars['ads_right']->value;?>
</div>
	</div>
	<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/style/javascript/common.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    $(document).ready(function() {
        var url = this.location.pathname;
        var filename = url.substring(url.lastIndexOf('/')+1);
        $('a[href="' + filename + '"]').parent().addClass('active');
    });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
