<?php
session_start();
include('../../util/main.php');
include('../../model/database.php');
include('../../util/security.php');

include('../../model/admin_db.php');
include('../../model/order_db.php');

//if (isset($_SESSION['user'])) {
//    display_error('You cannot login to the admin section while ' .
//                  'logged in as a customer.');
//}
    if (!isset($_SESSION['admin'])) {
		$action="view_login";
		}
    if (isset($_POST['action']) == 'login') {$action = 'login';}
 if (isset($_GET['act']) == 'del') {$action = 'del_order';}

		


switch ($action) {
	case 'del_order':
	$orderid=$_GET['orderid'];
	delete_order($orderid);
 header('Location: ' . $app_path . 'ad/' );
      break;
		
    case 'view_login':
        include './account_login.php';
        break;
    case 'login':
        // Get username/password
        $email = $_POST['email'];
        $password = $_POST['password'];
		$return_url= base64_decode($_POST["return_url"]); //return url

        // If valid username/password, log in
		if (is_valid_admin_login($email, $password)) {
		header('Location:'.$app_path.'ad');

            $_SESSION['admin'] = get_admin_by_email($email);
			;
			//include './account_view.php';


        } else {
		header('Location:'.$return_url.'?msg=false');

	       }

        // Display Admin Menu page
      
        break;
    case 'create':
        // Get admin user data
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];

        // Set admin user data in session
        $_SESSION['form_data'] = array();
        $_SESSION['form_data']['email'] = $email;
        $_SESSION['form_data']['first_name'] = $first_name;
        $_SESSION['form_data']['last_name'] = $last_name;

        // Validate admin user data
        // TODO: Improve this validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            display_error('The e-mail address ' . $email . ' is not valid.');
        } elseif (is_valid_admin_email($email)) {
            display_error('The e-mail address ' . $email . ' is already in use.');
        }
        if (empty($first_name)) {
            display_error('First name is a required field.');
        }
        if (empty($last_name)) {
            display_error('Last name is a required field.');
        }
        if (empty($password_1) || empty($password_2)) {
            display_error('Password is a required field.');
        } elseif ($password_1 !== $password_2) {
            display_error('Passwords do not match.');
        } elseif (strlen($password_1) < 6) {
            display_error('Password must be at least six characters.');
        }

        // Add admin user
        $admin_id = add_admin($email, $first_name, $last_name,
                                 $password_1, $password_2);

        // Set up session data
        unset($_SESSION['form_data']);
        if (!isset($_SESSION['admin'])) {
            $_SESSION['admin'] = get_admin($admin_id);
        }

        redirect('.');
        break;
    case 'view_account':
    
        include 'account_view.php';
        break;
    case 'view_edit':
        // Get admin user data
        $admin_id = intval($_POST['admin_id']);
        $admin = get_admin($admin_id);
        $first_name = $admin['firstName'];
        $last_name = $admin['lastName'];
        $email = $admin['emailAddress'];

        // Display Edit page
        include 'account_edit.php';
        break;
    case 'update':
        $admin_id = intval($_POST['admin_id']);
        update_admin(
            $admin_id,
            $_POST['email'],
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['password_1'],
            $_POST['password_2']
        );
        if ($admin_id == $_SESSION['admin']['adminID']) {
            $_SESSION['admin'] = get_admin($admin_id);
        }
        redirect($app_path . 'admin/account');
        break;
    case 'view_delete_confirm':
        $admin_id = intval($_POST['admin_id']);
        if ($admin_id == $_SESSION['admin']['adminID']) {
            display_error('You cannot delete your own account.');
        }
        $admin = get_admin($admin_id);
        $first_name = $admin['firstName'];
        $last_name = $admin['lastName'];
        $email = $admin['emailAddress'];
        include 'account_delete.php';
        break;
    case 'delete':
        $admin_id = intval($_POST['admin_id']);
        delete_admin($admin_id);
        redirect($app_path . 'admin/account');
        break;
    case 'logout':
        unset($_SESSION['admin']);
        redirect($app_path . 'admin/account');
        break;
    default:
        display_error('Unknown account action: ' . $action);
        break;
}
?>