{if $action != 'list'}
</div>
</div>
{/if}
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
</html>