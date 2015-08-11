<?php
function add_order($firstname, $lastname, $email, $phone, $address,$tongtien,$ghichu,$pay){
    global $db;
    $order_date = date("Y-m-d H:i:s");
    

    $query = 'INSERT INTO orders (orderDate,firstname, lastname,email, phone,address,price,ghichu,pay)
            VALUES (:order_date,:firstname, :lastname, :email,:phone,:address,:tongtien,:ghichu,:pay)';
    $statement = $db->prepare($query);
	 $statement->bindValue(':order_date', $order_date);
	 $statement->bindValue(':firstname', $firstname);
    $statement->bindValue(':lastname', $lastname);
    $statement->bindValue(':email', $email);
	 $statement->bindValue(':phone', $phone);
	$statement->bindValue(':address', $address);
    $statement->bindValue(':tongtien', $tongtien);
    $statement->bindValue(':ghichu', $ghichu);
	$statement->bindValue(':pay', $pay);
    $statement->execute();
    $order_id = $db->lastInsertId();
    $statement->closeCursor();
    return $order_id;
}

function  add_order_item($order_id, $product_name,
                        $product_code, $product_qty, $price) {
    global $db;
    $query = '
        INSERT INTO OrderItems (id, product_name, product_code,
                                product_qty, price)
        VALUES (:order_id, :product_name, :product_code, :product_qty, :price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':order_id', $order_id);
    $statement->bindValue(':product_name', $product_name);
    $statement->bindValue(':product_code', $product_code);
    $statement->bindValue(':product_qty', $product_qty);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
}

function get_order($order_id) {
    global $db;
    $query = 'SELECT * FROM orders WHERE id = :order_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':order_id', $order_id);
    $statement->execute();
    $order = $statement->fetch();
    $statement->closeCursor();
    return $order;
}

function get_orders() {
    global $db;
    $query = 'SELECT * FROM orders ORDER BY id ASC' ;
    $statement = $db->prepare($query);
    $statement->execute();
    $orders = $statement->fetchAll();
    $statement->closeCursor();
    return $orders;
}

function get_order_pay($pay) {
    global $db;
    $query = 'SELECT * FROM orders WHERE pay = :pay';
    $statement = $db->prepare($query);
    $statement->bindValue(':pay', $pay);
    $statement->execute();
    $order = $statement->fetchAll();
    $statement->closeCursor();
    return $order;
}

function get_order_items($order_id) {
    global $db;
    $query = 'SELECT * FROM OrderItems WHERE orderID = :order_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':order_id', $order_id);
    $statement->execute();
    $order_items = $statement->fetchAll();
    $statement->closeCursor();
    return $order_items;
}

function delete_order($order_id) {
    global $db;
    $query = 'DELETE FROM orders WHERE id = :order_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':order_id', $order_id);
    $statement->execute();
    $statement->closeCursor();
}
function update_pay($pay,$order_id) {
			global $db;
			$query = "UPDATE orders  
		   SET `pay` = :pay 
		 WHERE `id` = :order_id ";
			try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':pay',$pay);
			$statement->bindvalue(':order_id',$order_id);
			$statement->execute();	
					}
				
			catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		
		
		}
//edit voucher admin
function get_vouchers($id) {
    global $db;
    $query = 'SELECT * FROM voucher WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $order = $statement->fetch();
    $statement->closeCursor();
    return $order;
}
function update_voucher($id,$code,$value){
    global $db;
	
    $query = "UPDATE voucher   
		   SET 
            code = :code,
			value = :value
		  WHERE id = :id";
    try {
     $statement = $db->prepare($query);
	$statement->bindValue(':code', $code);     
	 $statement->bindValue(':value', $value);
   	 $statement->bindValue(':id', $id);
	 $statement->execute(); 
     $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function add_voucher($code,$value){
		global $db;
    $query = 'INSERT INTO voucher (code,value)
            VALUES (:code, :value)';
		try{
			  $statement = $db->prepare($query);
				$statement->bindValue(':code', $code);
				$statement->bindValue(':value', $value);
				$statement->execute();
				$result=$statement->fetchAll();
				$statement->closeCursor();
				return $result;
					}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
}

?>