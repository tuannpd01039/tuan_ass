<?php
function is_valid_admin_login($email, $password) {
    global $db;
	    

    $query = '
        SELECT * FROM admin
        WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}
function is_valid_member_login($email, $password) {
    global $db;
	$password = sha1($email . $password);

    $query = '
        SELECT * FROM member
        WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

function admin_count() {
    global $db;
    $query = 'SELECT count(*) AS adminCount FROM admin';
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result['adminCount'];
}

function get_all_admins() {
    global $db;
    $query = 'SELECT * FROM admin ORDER BY admin_lastName, admin_firstName';
    $statement = $db->prepare($query);
    $statement->execute();
    $admins = $statement->fetchAll();
    $statement->closeCursor();
    return $admins;
}

function get_admin ($admin_id) {
    global $db;
    $query = 'SELECT * FROM admin WHERE admin_id = :admin_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':admin_id', $admin_id);
    $statement->execute();
    $admin = $statement->fetch();
    $statement->closeCursor();
    return $admin;
}

function get_admin_by_email ($email) {
    global $db;
    $query = 'SELECT * FROM admin WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $admin = $statement->fetchAll();
    $statement->closeCursor();
    return $admin;
}
function get_member_by_email ($email) {
    global $db;
    $query = 'SELECT * FROM member WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $admin = $statement->fetchAll();
    $statement->closeCursor();
    return $admin;
}
function is_valid_member_email($email) {
    global $db;
    $query = '
        SELECT * FROM member
        WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}
function add_member($email, $first_name, $last_name, $password,$address,$diachinhanhang,$phone,$city,$code) {
    global $db;
    $password = sha1($email . $password);
    $query = '
        INSERT INTO member 	(email, password, firstname, lastname,address,phone,city,diachinhanhang,voucher)
        VALUES 				(:email, :password, :firstname, :lastname,:address,:phone,:city,:diachinhanhang,:code)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':firstname', $first_name);
    $statement->bindValue(':lastname', $last_name);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':diachinhanhang', $diachinhanhang);
	$statement->bindValue(':code', $code);
	$statement->execute();
    $admin_id = $db->lastInsertId();
    $statement->closeCursor();
    return $admin_id;
}
function get_member ($add_member) {
    global $db;
    $query = 'SELECT * FROM member WHERE id = :add_member';
    $statement = $db->prepare($query);
    $statement->bindValue(':add_member', $add_member);
    $statement->execute();
    $admin = $statement->fetch();
    $statement->closeCursor();
    return $admin;
}

function is_valid_admin_email($email) {
    global $db;
    $query = '
        SELECT * FROM admin
        WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

function add_admin($email, $first_name, $last_name, $password_1, $password_2) {
    global $db;
    $password = sha1($email . $password_1);
    $query = '
        INSERT INTO administrators (emailAddress, password, firstName, lastName)
        VALUES (:email, :password, :first_name, :last_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->execute();
    $admin_id = $db->lastInsertId();
    $statement->closeCursor();
    return $admin_id;
}

function update_admin($admin_id, $email, $first_name, $last_name,
                      $password_1, $password_2) {
    global $db;
    $query = '
        UPDATE administrators
        SET emailAddress = :email,
            firstName = :first_name,
            lastName = :last_name
        WHERE adminID = :admin_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':admin_id', $admin_id);
    $statement->execute();
    $statement->closeCursor();

    if (!empty($password_1) && !empty ($password_2)) {
        if ($password_1 !== $password_2) {
            display_error('Passwords do not match.');
        } elseif (strlen($password_1) < 6) {
            display_error('Password must be at least six characters.');
        }
        $password = sha1($email . $password_1);
        $query = '
            UPDATE administrators
            SET password = :password
            WHERE adminID = :admin_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':admin_id', $admin_id);
        $statement->execute();
        $statement->closeCursor();
    }
}

function delete_admin($admin_id) {
    global $db;
    $query = 'DELETE FROM administrators WHERE adminID = :admin_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':admin_id', $admin_id);
    $statement->execute();
    $statement->closeCursor();
}





function top_view_id() {
    global $db;
    $query = 'SELECT t.*
				FROM view t
				ORDER BY t.view DESC
				LIMIT 10';
    $statement = $db->prepare($query);
    $statement->execute();
	$admins = $statement->fetchAll();
	$statement->closeCursor();
	return $admins;
}

function top_view($id_view) {
    global $db;
    $query = 'select * from product where id=:id_view ORDER BY id DESC LIMIT 10';
    $statement = $db->prepare($query);
	$statement->bindValue(':id_view', $id_view);
	 $statement->execute();
	$admins = $statement->fetchAll();
	$statement->closeCursor();
	return $admins;
}



?>