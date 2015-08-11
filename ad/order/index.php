<?php 
session_start();
require_once('../../util/main.php');
require_once('../../util/security.php');
require_once('../../util/valid_admin.php');
require_once('../../model/database.php');
require_once('../../model/order_db.php');



if (isset($_GET['pay']) == 'yes') {$action = 'view_order_pay_yes';}
elseif (isset($_GET['pay']) == 'no') {$action = 'view_order_pay_no';}
elseif (isset($_GET['order']) == 'view') {$action = 'view_order';}
elseif (isset($_POST['update_order']))       {$action = $_POST['update_order'];}
elseif (isset($_GET['act']) == 'del') {$action = 'del_order';}

else{
	$action = 'detail_order';
	}

switch ($action) {
	 case 'view_order_pay_yes':
        // Get order da thanh toan
        $pay =$_GET['pay'];
        $order = get_order_pay($pay);
        // Display product by category
        include('../view/order_view.php');
        break;
	case 'view_order_pay_no':
        // Get order da thanh toan
        $pay =$_GET['pay'];
        $order = get_order_pay($pay);
        // Display product by category
        include('../view/order_view.php');
        break;
	case 'detail_order':
		$order_id=$_GET['order_id'];
        // Get order da thanh toan
       $order= get_order_items($order_id);
        // Display product by category
        include('../view/order_detail_view.php');
        break;

	case 'view_order':
		
       $order= get_orders();
        // Display product by category
         include('../view/order_view.php');
        break;
		
	case 'update_order':
		$pay=$_POST['pay'];
		$order_id=$_POST['orderID'];
      if (update_pay($pay,$order_id)){
		  header('Location: .?order=view&update=true');}
		  
		  else{
			   header('Location: .?order=view&update=false');}
		
    
        break;
		case 'del_order': //del order ngoài dashboard
	$orderid=$_GET['orderid'];
	delete_order($orderid);
 header('Location: ' . $app_path . 'ad/order/?order=view' );
      break;
}

?>