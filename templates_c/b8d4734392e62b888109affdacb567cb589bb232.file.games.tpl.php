<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-23 20:05:10
         compiled from "./templates/games.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1177382387594d9f246ba530-93871987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d4734392e62b888109affdacb567cb589bb232' => 
    array (
      0 => './templates/games.tpl',
      1 => 1498273501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1177382387594d9f246ba530-93871987',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594d9f24702804_89121835',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594d9f24702804_89121835')) {function content_594d9f24702804_89121835($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active"><a href="games.php">Games</a></li>
</ol>

<center><h2>Games</h2></center> 

<div class="textbox">
    <p>Play fun games while you wait for your Ethereum timer to count down to zero! Don't get bored waiting for your <a href="index.php">Ethereum Faucet</a> to be ready, play these great games and try to beat your high score! The longer you stick around, the more free Ethereum you will get.</p>
</div>

<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="/templates/style/images/games/nballs.png" alt="NBalls">
            <div class="caption">
                <center><h3>NBalls</h3></center>
                <center><a href="nballs.php" class="btn btn-primary" role="button">Play NBalls</a></center>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="/templates/style/images/games/pixelcastlerunner.png" alt="NBalls">
            <div class="caption">
                <center><h3>Castle Runner</h3></center>
                <center><a href="castle-runner.php" class="btn btn-primary" role="button">Play Pixel Castle Runner</a></center>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="/templates/style/images/games/cubeninja.jpg" alt="NBalls">
            <div class="caption">
                <center><h3>Cube Ninja</h3></center>
                <center><a href="cube-ninja.php" class="btn btn-primary" role="button">Play Cube Ninja</a></center>
            </div>
        </div>
    </div>
</div>

<div class="textbox" style="color: #999">
    <center><p>Have any suggestions for cool HTML games we can add to the list? Any cryptocurrency based games are a plus! Go to our <a href="contact.php">Contact</a> page and send us an email with the details.</p></center>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
