<?php /* Smarty version Smarty 3.1.4, created on 2017-02-20 14:33:17
         compiled from "templates/createproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159169559258a9ed07a23d66-20448694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd66e2b62b82028212797f98fbc31d350d075970a' => 
    array (
      0 => 'templates/createproduct.tpl',
      1 => 1487601195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159169559258a9ed07a23d66-20448694',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_58a9ed07a4d69',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a9ed07a4d69')) {function content_58a9ed07a4d69($_smarty_tpl) {?><h3>Production Creation test for URG</h3>

<form id="addproduct" method="POST" action="/index.php?action=createproduct" enctype='application/json'>
	<fieldset>
	<legend>Create Product</legend>
	<p><label for="title">Title</label>	<input id="title" name="title"></p>
	<p><label for="body">Body</label>	<input id="body" name="body_html"></p>
	<p><label for="vendor">Vendor</label>	<input id="vendor" name="vendor"></p>
	<p><label for="product_type">Product Type</label>	<input id="product_type" name="product_type"></p>
	<p><label for="product_image">Product Image</label>	
		<pre id="product_image" name="images">Drag product image here
		<img src="images/download.png">
		</pre>
		
	</p>
	<p><label for="product_image_count">Image Count</label><strong id="product_image_count"></strong>
	<p><input id="product_image_encoded" name="product_image_encoded"></p>
	<p><input type="submit" value="Submit"></p>
</form>
<?php }} ?>