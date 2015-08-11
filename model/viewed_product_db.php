<?php
if (!isset($_SESSION['view']) ) {
    $_SESSION['view'] = array();
}

function view_add_item($product_id, $product_qty) {
    $_SESSION['view'][$product_id] = round($product_qty, 0);
}



function view_get_items() {
    $views = array();
    foreach ($_SESSION['view'] as $product_id => $product_qty ) {
        // Get product data from db
        $product = get_product($product_id);
        $price = $product['price'];
        $product_qty = intval($product_qty);
		$name=$product['product_name'];
		$desc=$product['detail'];
		$product_code=$product['product_code'];
		$img=$product['img'];
		$id=$product['id'];

        // Calculate discount


        // Store data in items array
         $views[$product_id]['name'] = $name;
		$views[$product_id]['product_code'] = $product_code;
		$views[$product_id]['img'] = $img;
		$views[$product_id]['id'] = $id;

        $views[$product_id]['desc'] = $desc;
        $views[$product_id]['price'] = $price;
		$views[$product_id]['product_qty'] = $product_qty;
        
    }
    return $views;
}

function view_product_count() {
    return count($_SESSION['views']);
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