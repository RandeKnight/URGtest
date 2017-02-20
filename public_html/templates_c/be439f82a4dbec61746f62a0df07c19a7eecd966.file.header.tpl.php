<?php /* Smarty version Smarty 3.1.4, created on 2017-02-19 19:58:03
         compiled from "templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195266137958a9e57c0f67e6-06205002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1487534278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195266137958a9e57c0f67e6-06205002',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_58a9e57c24201',
  'variables' => 
  array (
    'action' => 0,
    'productId' => 0,
    'title' => 0,
    'mainnav' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a9e57c24201')) {function content_58a9e57c24201($_smarty_tpl) {?><html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="/js/jQuery.FileDrop.all.js"></script>
	<script type="text/javascript">
	$(function(){
		<?php if ($_smarty_tpl->tpl_vars['action']->value=='form'){?>
		$('.track-remove').click(function(){
			$('.ajax-button').hide();
			$(this).after('<img id="Loading" src="css/loading.gif" alt="Saving Changes" title="Saving Changes" />');
			var productId = <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['productId']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
;
			var metaFieldId = $(this).attr('name').replace('TrackRemove-','');
			var order = $("#TrackOrder-" + metaFieldId).val();
			var url = '?ajax=1&action=form&remove=1&productId=' + productId + '&metaFieldId=' + metaFieldId + '&order=' + order;
			var $row = $(this).closest('tr.data');
			$.getJSON(url, function(){
				$('#Loading').remove();
				$('.ajax-button').show();
				
				// move all the rows up
				// then delete the last row
				var $nextRow = $row.next('tr.data');
				while($nextRow.length > 0) {
					// take all the data and put it in the current $row
					copyRowData($row, $nextRow);
					$row = $nextRow;
					$nextRow = $row.next('tr.data');						
				}
				
				$row.remove();
				$('.track-up:first').hide();
				$('.track-down:last').hide();
				
				$('#SavedMessage').slideDown();
				setTimeout(function(){ $('#SavedMessage').slideUp(); }, 5000);
				
				if ($("#ExistingTracks tbody tr").length == 0)
				{
					$('#ExistingTracks').hide();
					$('#NoTracks').show();
				}
			});
		});
		$('.track-up:first').hide();
		$('.track-down:last').hide();
		$('.track-up').click(function(){
			$('.ajax-button').hide();
			$(this).after('<img id="Loading" src="css/loading.gif" alt="Saving Changes" title="Saving Changes" />');
			var productId = <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['productId']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
;
			var $row = $(this).parents('tr');
			var metaFieldId = $(this).attr('name').replace('TrackUp-','');
			var order = $("#TrackOrder-" + metaFieldId).val();
			var url = '?ajax=1&action=form&up=1&productId=' + productId + '&metaFieldId=' + metaFieldId + '&order=' + order;
			$.getJSON(url, function(){ 
				// swap the data from one row to the next
				// do not swap rows (which is way easier) because the ID of the Track
				// remains with the key... Track1, Track2, etc.  So, just swap the data
				swapRowData($row, $row.prev());

				
				$('#Loading').remove();
				$('.ajax-button').show();
				$('.track-up:first').hide();
				$('.track-down:last').hide();
				$('#SavedMessage').slideDown();
				setTimeout(function(){ $('#SavedMessage').slideUp(); }, 5000);
			});
		});
		$('.track-down').click(function(){
			$('.ajax-button').hide();
			$(this).after('<img id="Loading" src="css/loading.gif" alt="Saving Changes" title="Saving Changes" />');
			var productId = <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['productId']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
;
			var $row = $(this).parents('tr');
			var metaFieldId = $(this).attr('name').replace('TrackDown-','');
			var order = $("#TrackOrder-" + metaFieldId).val();
			var url = '?ajax=1&action=form&down=1&productId=' + productId + '&metaFieldId=' + metaFieldId + '&order=' + order;
			$.getJSON(url, function() {
				// swap the data from one row to the next
				// do not swap rows (which is way easier) because the ID of the Track
				// remains with the key... Track1, Track2, etc.  So, just swap the data
				swapRowData($row, $row.next());

				$('#Loading').remove();
				$('.ajax-button').show();
				$('.track-up:first').hide();
				$('.track-down:last').hide();
				$('#SavedMessage').slideDown();
				setTimeout(function(){ $('#SavedMessage').slideUp(); }, 5000);
			});
		});


		$('#SaveTracks').click(function(){
			$('.ajax-button').hide();
			$(this).after('<img id="Loading" src="css/loading.gif" alt="Saving Changes" title="Saving Changes" />');
			$.post("?ajax=1&action=form&productId=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['productId']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>
&save=1", $("#TrackListing").serialize(), function(){
				//$('#ExistingTracks a').each(function(){
				//	var trackId = $(this).attr('id').replace('Track-', '');
				//	var name = $("#TrackName-" + trackId).val();
				//	$(this).text(name);
				//});
				$('#Loading').remove();
				$('.ajax-button').show();
				$('.track-up:first').hide();
				$('.track-down:last').hide();
				$('#SavedMessage').slideDown();
				setTimeout(function(){ $('#SavedMessage').slideUp(); }, 5000);
			});
		});
		
		$('.browse').click(function(){
			currentButton = this;
			if (typeof browser == "undefined" || browser.closed) {
				browser = window.open("index.php?action=browse","browse","location=1,status=1,scrollbars=1, width=400,height=500");
			}
			browser.focus();
		});
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['action']->value=='browse'){?>
		$('.file').click(function(ev){
			ev.preventDefault();
			window.opener.selectFile(this.rel);
			window.close();
		});
		
		<?php }?>
		
	});
	<?php if ($_smarty_tpl->tpl_vars['action']->value=='form'){?>
	var browser;
	var currentButton = null;
	function selectFile(file) {
		var index = currentButton.id.replace('NewTrackFileName', '');
		$("#NewTrack" + index).val(file);
	}
	// copy data from a to b and from b to a
	function swapRowData($a, $b) {
		var $aTrackURLField = $a.find('.track_url');
		var $aTrackNameField = $a.find('.track_name');
		var tmpURL = $aTrackURLField.val();
		var tmpName = $aTrackNameField.val();

		var $bTrackURLField = $b.find('.track_url');
		var $bTrackNameField = $b.find('.track_name');
		$aTrackURLField.val($bTrackURLField.val());
		$aTrackNameField.val($bTrackNameField.val());
		$a.find(".sound a").attr("href", $bTrackURLField.val());
		$bTrackURLField.val(tmpURL);
		$bTrackNameField.val(tmpName);
		$b.find(".sound a").attr("href", tmpURL);
	}
	// copy data from b to a
	function copyRowData($a, $b) {
		var $bTrackURLField = $b.find('.track_url');
		var $bTrackNameField = $b.find('.track_name');
		$a.find('.track_url').val($bTrackURLField.val());
		$a.find('.track_name').val($bTrackNameField.val());
		$a.find(".sound a").attr("href", $bTrackURLField.val());
	}
	<?php }?>
	</script>
	<link rel="stylesheet" type="text/css" href="soundmanager/inlineplayer.css" />
	<link rel="stylesheet" type="text/css" href="soundmanager/flashblock/flashblock.css" />
	<script type="text/javascript" src="soundmanager/soundmanager2-nodebug-jsmin.js"></script>
	<script type="text/javascript" src="soundmanager/inlineplayer.js"></script>
	<link href="css/css.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body class="adminz">
	
	<?php if ($_smarty_tpl->tpl_vars['action']->value!='list'){?>
	<div id="header"> 
		<h1><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h1>      
	</div> 

	<div id="container" class="clearfix"> 

		<ul id="tabs"> 
			<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainnav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['href'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['link']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
</a></li>
			<?php } ?>
		</ul>
		
		<div id="main" class="clearfix">
	<?php }?>
<?php }} ?>