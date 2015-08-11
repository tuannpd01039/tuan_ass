<?php  ob_start();
	session_start();
	require_once('model/database.php');
	require_once('model/category_db.php');
	require_once('util/main.php');
	require_once('model/order_db.php');

	include('model/admin_db.php');

	//include('model/cart.php');
	$msg = "";
	if(isset($_GET["msg"])) $msg = $_GET["msg"];
	if($msg=="alert") echo "<script type='text/javascript'>alert('Đăng kí thành viên thành công!.Hãy đăng nhập để nhận voucher giảm giá ! ')</script>";
	if (isset($_POST['action'])) 
{
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'view';
}
	include('view/header.php');
	
	switch ($action) {
    case 'view':
       include('view_product.php');
        break;
	case 'login':
	include('view/login.php');
	break;
	case 'check_login':
	$email = $_POST['email'];
    $password = $_POST['password'];
	$return_url= base64_decode($_POST["return_url"]); //return url
	 // If valid username/password, log in
		if (is_valid_member_login($email, $password)) {
		
		 $_SESSION['member'] = get_member_by_email($email);;
			//include './account_view.php';
		header('Location:'.$app_path);
        } else {
		header('Location:'.$return_url.'&msg=false');

	       }
	
	break;
	case 'register':
       include('view/register.php');
        break;
	 case 'create':
        // Get admin user data
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];
		$address = $_POST['address'];
		$diachinhanhang = $_POST['diachinhanhang'];
		$phone = $_POST['phone'];
 		 $city = $_POST['city'];   
		 $txtCaptcha = $_POST['txtCaptcha'];
		$return_url= base64_decode($_POST["return_url"]); //return url
		$code=rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9);
		$value=10;
        // Set admin user data in session
        $_SESSION['form_data'] = array();
        $_SESSION['form_data']['email'] = $email;
        $_SESSION['form_data']['firstname'] = $first_name;
        $_SESSION['form_data']['lastname'] = $last_name;

        // Validate admin user data
        // TODO: Improve this validation
		
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header('Location:'.$return_url.'&msg=email');

        }elseif (is_valid_member_email($email)) {
           header('Location:'.$return_url.'&msg=email_exits');
        } 
		elseif (empty($email) || empty($first_name) || empty($last_name) || empty($password) || empty($address) || empty($diachinhanhang) || empty($phone) || empty($city) || empty($txtCaptcha) || ($txtCaptcha != $_SESSION['security_code'])) {
		 header('Location:'.$return_url.'&msg=error');

				}else{
        // Add admin user
        $add_member = add_member($email, $first_name, $last_name, $password,$address,$diachinhanhang,$phone,$city,$code);
		//$_SESSION['member'][0]['voucher']=$code;;
	//add_voucher($code,$value);
        // Set up session data
        
        
			header('Location:'.$app_path.'?msg=alert');	}
      
        break;
	case 'logout':
        unset($_SESSION['member']);
		header('Location:'.$app_path);
        break;
	case 'info':
       include('view/profile.php');
        break;
	case 'contact':
       include('view/contact.php');
        break;
	
}

	


	include('view/footer.php');
	
?>
