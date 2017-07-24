<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-26 21:43:19
         compiled from "./templates/bottom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1818936065594d9dfa7c9544-48056523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '472b65571a858ae553a961b287965d425459610e' => 
    array (
      0 => './templates/bottom.tpl',
      1 => 1498538597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1818936065594d9dfa7c9544-48056523',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594d9dfa7d6997_98493466',
  'variables' => 
  array (
    'ref_percent' => 0,
    'domainname' => 0,
    'ads_3' => 0,
    'ads_main_bottom' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594d9dfa7d6997_98493466')) {function content_594d9dfa7d6997_98493466($_smarty_tpl) {?><br>
<div>
    <center><a href="games.php" class="btn btn-info" style="font-size: 24px;color:white">PLAY GAMES WHILE YOU WAIT!</a></center>
</div>

<Div class="row" style="margin-top:5px; font-size:18px;">
    <Div class="col-md-10 col-md-push-1">
        <div class="well well-sm text-center">Earn <?php echo $_smarty_tpl->tpl_vars['ref_percent']->value;?>
% referral bonus! Share your referral URL<br><?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
/?r=ePay username,email or ETH address</div>
    </Div>
</Div>

<div class="row" style="margin-bottom:5px;"><center><?php echo $_smarty_tpl->tpl_vars['ads_3']->value;?>
</center></div>  
    
<div class="clearfix"></div> 

<div class="row">
    <div class="col-md-4">
        <?php echo '<script'; ?>
 type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"><?php echo '</script'; ?>
>

        <div class="coinmarketcap-currency-widget" data-currency="ethereum" data-base="USD" data-secondary="BTC" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
        <br>
        <a href="news.php" class="btn btn-primary btn-lg centerimg">See Ethereum News Here!</a>
       <!--  <p style="font-size: 24px">See Ethereum <a href="news.php">News</a> Here!</p>
 -->
    </div>
<!-- <br> -->

<!-- <center> -->
    <div class="col-md-8">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/ptLfwp6JYgk" allowfullscreen></iframe>
        </div>
    <!-- </center> -->
    </div>
</div>
<br>



<div class="row">
    <div class="col-md-8">
    <p style="text-align:justify !important;">
        Ethereum is a  decentralized platform that runs smart contracts: applications that run exactly as programmed without any possibility of downtime, censorship, fraud or third party interference.
        <br><br>
        
        These apps run on a custom built  blockchain, an enormously powerful shared global infrastructure that can move value around and represent the ownership of property. This enables developers to create markets, store registries of debts or promises, move funds in accordance with instructions given long in the past (like a will or a futures contract) and many other things that have not been invented yet, all without a middle man or counterparty risk.
        <br><br>
        
        The project was bootstraped via an ether pre-sale during August 2014 by fans all around the world. It is developed by the  Ethereum Foundation, a Swiss nonprofit, with contributions from great minds across the globe.            
        <br><br>

        A Faucet gives you free ethereum. You can win ethereum at an ethereum faucet by solving things. To get free ethereum or win free ether you also can referrel with a multiplier of 0,2 to get free Gwei for just placing a link. <a href="https://www.ethereum.org/" target="_blank">
        <br><br>
        More Information at Ethereum.org</a><br><br>

    </p> 
    </div>
    <div class="col-md-4">
        <a class="twitter-timeline" data-width="300" data-height="400" data-theme="dark" href="https://twitter.com/EthereumFaucets">Tweets by EthereumFaucets</a> <?php echo '<script'; ?>
 async src="//platform.twitter.com/widgets.js" charset="utf-8"><?php echo '</script'; ?>
>
    </div>
</div>
  
<div class="row"><center><?php echo $_smarty_tpl->tpl_vars['ads_main_bottom']->value;?>
</center></div> 
<?php }} ?>
