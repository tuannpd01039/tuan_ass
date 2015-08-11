<?php 
session_start();
require_once '../util/main.php';
require_once './cart.php';
require_once '../model/product_db.php';
require_once '../model/database.php';
require_once('../model/order_db.php');
require_once('../model/category_db.php');



if(isset($_POST['action'])) {$action=$_POST['action'];}
elseif(isset($_GET['action'])) {$action=$_GET['action'];}
if(isset($_POST['add'])) {$action="add";}
$cart = cart_get_items();


switch ($action){
	case 'add' :
			
				$product_id 	= filter_var($_POST["product_id"], FILTER_SANITIZE_STRING); //product code
				$product_qty 	= filter_var($_POST["product_qty"], FILTER_SANITIZE_NUMBER_INT); //product code
				//$return_url= base64_decode($_POST["return_url"]); //return url
				cart_add_item($product_id, $product_qty);
				$cart = cart_get_items();	
				$count =count($_SESSION['cart']);
				echo "<a href='../cart/?action=view'>CART($count)</a> ";
				
				 
			break;
	case 'view' :
	 $cart = cart_get_items();
        include './view_cart.php';
        break;
		
	 case 'update':
        $items = $_POST['items'];
        foreach ( $items as $product_id => $product_qty ) {
            if ($product_qty == 0) {
                cart_remove_item($product_id);
            } else {
                cart_update_item($product_id, $product_qty);
            }
        }
        $cart = cart_get_items();
        include './view_cart.php';
        break;	
		
		case 'confirm':
        if (isset($_POST['firstname'])) {$firstname = $_POST['firstname'];}
        if (isset($_POST['lastname'])) {$lastname = $_POST['lastname'];}
        if (isset($_POST['email'])) {$email = $_POST['email'];}
        if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
        if (isset($_POST['address'])) {$address = $_POST['address'];}
        if (isset($_POST['ghichu'])) {$ghichu = $_POST['ghichu'];}
		if (isset($_POST['txtCaptcha'])) {$txtCaptcha = $_POST['txtCaptcha'];}
		if (isset($_POST['tongtien'])) {$tongtien = $_POST['tongtien'];}
		if (isset($_POST['giamgia'])) {$giamgia = intval($_POST['giamgia']);}
		if (empty($firstname) || empty($lastname) || empty($email) ||
            empty($phone) || empty($address) || empty($ghichu) || empty($txtCaptcha) || ($txtCaptcha != $_SESSION['security_code'])) {
				header('Location: ./error.php');
				}else{
		$pay="no";
     	$order_id = add_order($firstname, $lastname, $email, $phone, $address,$tongtien,$ghichu,$pay);
        foreach($cart as $product_id => $item) {
            $product_name = $item['name'];
            $product_code = $item['product_code'];
            $product_qty = $item['product_qty'];
			$price=$item['price'];
            add_order_item($order_id, $product_name,
                        $product_code, $product_qty, $price);
        }
		
		delete_voucher($giamgia);
        clear_cart();
        include './checkout_thankyou.php';}
        break;
		
	  case 'checkout':
	  	 if (isset($_POST['count'])) {$count = $_POST['count'];}
        if (isset($_POST['tamtinh'])) {$tamtinh = $_POST['tamtinh'];}
		 if (isset($_POST['voucher'])) {$voucher = intval($_POST['voucher']);}
		if (isset($_POST['product_name'])) {$name = $_POST['product_name'];}

        if (isset($_POST['value'])) {$value = $_POST['value'];}
	    if (isset($_POST['vanchuyen'])) {$vanchuyen = $_POST['vanchuyen'];}
        if (isset($_POST['total'])) {$total = $_POST['total'];}
      	
        include './checkout_confirm.php';
        break;
	

}


?>