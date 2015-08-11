<?php
if (!isset($_SESSION['cart']) ) {
    $_SESSION['cart'] = array();
}

function cart_add_item($product_id, $product_qty) {
    $_SESSION['cart'][$product_id] = round($product_qty, 0);
}


function cart_update_item($product_id, $product_qty) {
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] = round($product_qty, 0);
    }
}
// Remove an item from the cart
function cart_remove_item($product_id) {
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }
}
function cart_get_items() {
    $items = array();
    foreach ($_SESSION['cart'] as $product_id => $product_qty ) {
        // Get product data from db
        $product = get_product($product_id);
        $price = $product['price'];
        $product_qty = intval($product_qty);
		$name=$product['product_name'];
		$desc=$product['detail'];
		$product_code=$product['product_code'];
		$img=$product['img'];
        // Calculate discount
       // Store data in items array
        $items[$product_id]['name'] = $name;
		$items[$product_id]['product_code'] = $product_code;
		$items[$product_id]['img'] = $img;
	 	$items[$product_id]['desc'] = $desc;
        $items[$product_id]['price'] = $price;
		$items[$product_id]['product_qty'] = $product_qty;
        
    }
    return $items;
}

function cart_product_count() {
    return count($_SESSION['cart']);
}




// Get the subtotal for the cart
function cart_subtotal () {
    $subtotal = 0;
    $cart = cart_get_items();
    foreach ($cart as $item) {
        $subtotal += $item['price'] * $item['product_qty'];
    }
    return $subtotal;
}

// Remove all items from the cart
function clear_cart() {
    $_SESSION['cart'] = array();
}
?>