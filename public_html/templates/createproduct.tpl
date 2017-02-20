<h3>Production Creation test for URG</h3>

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
