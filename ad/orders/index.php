<?php

session_start();
require_once('../../util/main.php');
require_once('../../util/security.php');
//require_once('../../util/valid_admin.php');
require_once('../../model/database.php');
include('../../model/order_db.php');

//require_once('../../util/images.php');
require_once('../../model/product_db.php');
require_once('../../model/category_db.php');

if ( isset($_POST['action']) ) {
    $action = $_POST['action'];
} elseif ( isset($_GET['action']) ) {
    $action = $_GET['action'];
} else {
    $action = 'view_orders';
}
 if (isset($_GET['act']) == 'del') {$action = 'del_order';}

switch($action) {
	case 'yes' :
	
	break;
    case 'view_orders':
        $new_orders = get_orders();
        include 'orders.php';
        break;
    case 'view_order':
        $order_id = $_GET['order_id'];

        // Get order data
        $order = get_order($order_id);
        $order_date = date('M j, Y', strtotime($order['orderDate']));
        $order_items = get_order_items($order_id);
        $customer_name = $order['customerName'];
        $customer_address = $order['customerAddress'];
        $customer_phone = $order['customerPhone'];

        include 'order.php';
        break;
		case 'del_order':
	$orderid=$_GET['orderid'];
	delete_order($orderid);
 header('Location: ' . $app_path . 'ad/' );
      break;
}
?>