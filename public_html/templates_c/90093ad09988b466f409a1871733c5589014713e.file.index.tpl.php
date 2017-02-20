<?php /* Smarty version Smarty 3.1.4, created on 2017-02-19 18:51:59
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214199570058a9e94fd43f10-26692938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1487516495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214199570058a9e94fd43f10-26692938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'product_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_58a9e94fd600c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a9e94fd600c')) {function content_58a9e94fd600c($_smarty_tpl) {?><h3>Welcome to the ohShopify Sample App</h3>

<dl>
	<dt>Shop Name</dt>
	<dd><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</dd>
	<dt>Product Count</dt>
	<dd><?php echo $_smarty_tpl->tpl_vars['product_count']->value;?>
</dd>
</dl>
<?php }} ?>