<?php /* Smarty version Smarty 3.1.4, created on 2017-02-20 14:13:20
         compiled from "templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181930028958a9e57c24cf14-15920238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9206ffe216f3f7c2e7655782292928f7d20e8be5' => 
    array (
      0 => 'templates/footer.tpl',
      1 => 1487599997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181930028958a9e57c24cf14-15920238',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_58a9e57c250f3',
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a9e57c250f3')) {function content_58a9e57c250f3($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value!='list'){?>
</div>
</div>
<?php }?>
</body>
<script>
function setupDragDrop(){
	var $outputArea = $("#product_image");
	var $downloadarea = $("#product_image_encoded");
	var $count = $("#product_image_count");
	$('#product_image').fileDrop({
		decodeBase64: false,
		removeDataUriScheme: false,
		onFileRead: function(fileCollection){

			if(console){
				console.clear();
				console.log("---File Collection---");
				console.log(fileCollection);
			}

			var newHtml='';
			//Loop through each file that was dropped
			$.each(fileCollection, function(i){

				//if(this.type.indexOf('image')>=0){
					newHtml += '<img src="' + this.data + '"/>';
				//}else{
					var noScheme = $.removeUriScheme(this.data);
					var base64Decoded = window.atob(noScheme);
					var htmlEncoded = htmlEncode(base64Decoded);
					$downloadarea.val(noScheme);
					//newHtml += '<p>'+ htmlEncoded + '</p>';
				//}
				
				if(i !== fileCollection.length-1){
					newHtml += "<hr />";
				}
			});

			//Set the text about how many files were dropped. Make it plural when there is more than one!
			var countText = fileCollection.length + ' file' + ( fileCollection.length === 1 ? '' : 's' ) + ' dropped!';
			$count.text(countText);

			//Set the HTML
			$outputArea.html(newHtml);
		}
	});
};
//Helper function to HTML encode anything that gets dropped on the page
function htmlEncode(value) {
	var el = document.createElement('div');
	if (value) {
		el.innerText = el.textContent = value;
		return el.innerHTML;
	}
	return value;
}
//Page Load
$(function(){
	if($.support.fileDrop){
		setupDragDrop();
	}else{
		alert('Your browser does not support file drag-n-drop :(');
	}
});
</script>
</html><?php }} ?>