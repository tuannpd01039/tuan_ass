<?php 
session_start();
require_once('../../util/main.php');
require_once('../../util/security.php');
require_once('../../util/valid_admin.php');
require_once('../../model/database.php');
require_once('../../model/order_db.php');
require_once('../../model/product_db.php');



if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_voucher';
}

switch ($action) {
	 case 'list_voucher':
        $voucher = get_voucher();
        include('../view/voucher_view.php');
        break;
	case'edit':
		$id=$_GET['id'];
	    $voucher = get_vouchers($id);
		include('../voucher/voucher_update.php');
	break;
	case'update_voucher':
	$id=$_POST['id'];
	$code=$_POST['code'];
	$value=$_POST['value'];
	update_voucher($id,$code,$value);
	header('Location: .');
	break;
	case'add_voucher':
	include ('./voucher_add.php');
	break;
	case'voucher_add':
	$code=$_POST['code'];
	$value=$_POST['value'];
	add_voucher($code,$value);
	header('Location: .');
	break;
}

?>