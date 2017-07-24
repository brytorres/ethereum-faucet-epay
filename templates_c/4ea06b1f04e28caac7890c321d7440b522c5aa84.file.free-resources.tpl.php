<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-23 18:11:56
         compiled from "./templates/free-resources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1359446098594d9f275d6f91-67352958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ea06b1f04e28caac7890c321d7440b522c5aa84' => 
    array (
      0 => './templates/free-resources.tpl',
      1 => 1498266713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1359446098594d9f275d6f91-67352958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594d9f276211f3_34660084',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594d9f276211f3_34660084')) {function content_594d9f276211f3_34660084($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active"><a href="free-resources.php">Free Resources</a></li>
</ol>

<center>  
    <h2>Free Resources</h2>
</center>

<div class="list-group">
    <a href="https://pbs.twimg.com/media/DC70tQ-W0AEkWEn.jpg" class="list-group-item" target="_blank">
        <h4 class="list-group-item-heading">Beginners Guide to Ethereum</h4>
        <p class="list-group-item-text" style="color: #777">How does this all work?</p>
    </a>
    <a href="https://www.ethereum.org/ether" class="list-group-item" target="_blank">
        <h4 class="list-group-item-heading">What is Ether?</h4>
        <p class="list-group-item-text" style="color: #777">Ether is a necessary element -- a fuel -- for operating the distributed application platform Ethereum. It is a form of payment made by the clients of the platform to the machines executing the requested operations. To put it another way, ether is the incentive ensuring that developers write quality applications (wasteful code costs more), and that the network remains healthy (people are compensated for their contributed resources).</p>
    </a>
    <a href="https://www.myetherwallet.com/" class="list-group-item" target="_blank">
        <h4 class="list-group-item-heading">MyEtherWallet</h4>
        <p class="list-group-item-text" style="color: #777">MyEtherWallet gives you the ability to generate new wallets so you can store your Ether yourself, not on an exchange. This process happens entirely on your computer, not our servers. Therefore, when you generate a new wallet, you are responsible for safely backing it up.</p>
    </a>
    <a href="https://www.coinbase.com/" class="list-group-item" target="_blank">
        <h4 class="list-group-item-heading">Coinbase Exchange</h4>
        <p class="list-group-item-text" style="color: #777">Coinbase is the world’s most popular way to buy and sell bitcoin, ethereum, and litecoin. Use your bank account or credit/debit card for instant buys and sells. You can even link your PayPal account to Coinbase!</p>
    </a>
    <a href="https://coinmarketcap.com/" class="list-group-item" target="_blank">
        <h4 class="list-group-item-heading">CoinMarketCap</h4>
        <p class="list-group-item-text" style="color: #777">Find all the latest data on all of the cryptocurrency markets. They provide great tools to find out how the market is behaving.</p>
    </a>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
