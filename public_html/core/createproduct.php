<?php
	
try {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$product = [
			"title"	=>	$_POST["title"],
			"body_html"	=>	$_POST["body_html"],
			"vendor"=>	$_POST["vendor"],
			"product_type"	=>	$_POST["product_type"],
			"images" => [[
				"attachment"=>$_POST["product_image_encoded"],
				]],
		];
		$params = ["product"=>$product,];
		$shop_response = $shopifyClient->call('POST', '/admin/products.json', $params);
		//print_r($shop_response);
	}	
} catch (ShopifyApiException $ex) {
	// handle the exception
	debug($ex);
}
	
?>

</script>
