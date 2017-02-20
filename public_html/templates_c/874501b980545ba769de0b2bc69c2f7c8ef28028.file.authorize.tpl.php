<?php /* Smarty version Smarty 3.1.4, created on 2017-02-19 18:35:40
         compiled from "templates/authorize.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5805933558a9e57c246254-38546142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '874501b980545ba769de0b2bc69c2f7c8ef28028' => 
    array (
      0 => 'templates/authorize.tpl',
      1 => 1487516495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5805933558a9e57c246254-38546142',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_58a9e57c24b2f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a9e57c24b2f')) {function content_58a9e57c24b2f($_smarty_tpl) {?>
	<h1>Install</h1> 
 
<p>Install this app in a shop to get access to its private admin data.</p> 
 
<p style="padding-bottom: 1em;">
	<span class="hint">Don&rsquo;t have a shop to install your app in handy? <a href="https://app.shopify.com/services/partners/api_clients/test_shops">Create a test shop.</a></span>
</p> 
 
<form action="authorize.php" method="post">
  <label for='shop'><strong>The URL of the Shop</strong> 
    <span class="hint">(enter it exactly like this: myshop.myshopify.com)</span> 
  </label> 
  <p> 
    <input id="shop" name="shop" size="45" type="text" value="" /> 
    <input name="commit" type="submit" value="Install" /> 
  </p> 
</form><?php }} ?>