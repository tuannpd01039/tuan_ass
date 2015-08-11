<?php

function get_products_by_category($category_id) {
    global $db;
    $query='select * from product where category_id=:category_id';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
			
function count_products_by_category($category_id) {
    global $db;
    $query='select count(id) as count from product where category_id=:category_id';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
      	$products=$statement->fetchAll(PDO::FETCH_COLUMN, 0);
		$statement->closeCursor();
		return $products;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function product_on_page($category_id,$start,$limit) {
   global $db;
			$query='SELECT *
				FROM product
				where category_id=:category_id
				limit :start , :limit';
			try{
			$statement=$db->prepare($query);
       		$statement->bindValue(':start', $start,PDO::PARAM_INT);
	        $statement->bindValue(':category_id', $category_id);
			$statement->bindValue(':limit', $limit,PDO::PARAM_INT);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}
		
function get_product($product_id){
			global $db;
			$query='select * from product where id=:product_id';
			try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':product_id',$product_id);
			$statement->execute();
			$result=$statement->fetch();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}
		
	function get_product_featured($featured){
			global $db;
			$query='select * from product where featured=:featured';
			try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':featured',$featured);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}	
	
	
	function get_products_featured(){
			global $db;
			$query='select * from product';
			try{
			$statement=$db->prepare($query);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
				
			catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		
		}

	function get_product_sales($sle){
			global $db;
			$query='select * from product where sales=:sle';
			try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':sle',$sle);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}
	
	
	
			
		
	function get_products_my_pham(){
			global $db;
			$query='select * from product where category_id=2';
			try{
			$statement=$db->prepare($query);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
				
			catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		
		}	
		
		
	function get_products_mypham($product_id){
			global $db;
			$query='select * from mypham where id=:product_id';
			try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':product_id',$product_id);
			$statement->execute();
			$result=$statement->fetch();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}	
		
		
	function get_products_chamsocda(){
			global $db;
			$query='select * from product where category_id=3';
			try{
			$statement=$db->prepare($query);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
				
			catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		
		}	
		
	function get_products_cham_soc_da($product_id){
			global $db;
			$query='select * from chamsocda where id=:product_id';
			try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':product_id',$product_id);
			$statement->execute();
			$result=$statement->fetch();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}	
		
	function get_products_nuochoa(){
			global $db;
			$query='select * from product where category_id=1';
			try{
			$statement=$db->prepare($query);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
				
			catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		
		}
	function get_products_nuoc_hoa($product_id)
	{
			global $db;
			$query='select * from product where id=:product_id';
			try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':product_id',$product_id);
			$statement->execute();
			$result=$statement->fetch();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}
		
		function random_product(){
			global $db;
			$query='SELECT product_name,img
				FROM product
				ORDER BY RAND( ) 
				LIMIT 8';
			try{
			$statement=$db->prepare($query);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}
		
	function get_banner(){
		global $db;
		$query='select * from images';
		try{
			$statement=$db->prepare($query);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
				
			catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		
		
		}
		 function get_feedback(){
		global $db;
		$query='select * from feedback ';
		try{
			$statement=$db->prepare($query);
			
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
				
			catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		
		
		}
			 function add_feedback($tenKH,$feedback, $image,$vote){
		global $db;
    $query = 'INSERT INTO feedback (tenKH, feedback, image, rate)
            VALUES (:tenKH, :feedback, :image, :vote)';
		try{
			  $statement = $db->prepare($query);
				$statement->bindValue(':tenKH', $tenKH);
				$statement->bindValue(':feedback', $feedback);
				$statement->bindValue(':image', $image);
				$statement->bindValue(':vote', $vote);
				$statement->execute();
				$result=$statement->fetchAll();
				$statement->closeCursor();
				return $result;
					}
				
			catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		
		
		}
		
	function update_view($views,$id_view) {
			global $db;
			$query = "UPDATE `view`   
		   SET `view` = :views 
		 WHERE `id` = :id_view ";
			try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':views',$views);
			$statement->bindvalue(':id_view',$id_view);
			$statement->execute();	
					}
				
			catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		
		
		}

			function delete_view($a) {
    global $db;
    $query = 'DELETE FROM view WHERE view = :a';
    $statement = $db->prepare($query);
    $statement->bindValue(':a', $a);
    $statement->execute();
    $statement->closeCursor();
}
		
	function get_view($product_id){
			global $db;
			$query='select * from view where id_view=:product_id';
			try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':product_id',$product_id);
			$statement->execute();
			$result=$statement->fetch();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}
		
	 function add_id_view($product_id){
		global $db;
    $query = 'INSERT INTO view (id_view)
            VALUES (:product_id)';
		try{
			  $statement = $db->prepare($query);
				$statement->bindValue(':product_id', $product_id);
				$statement->execute();
				$result=$statement->fetchAll();
				$statement->closeCursor();
				return $result;
					}
				
			catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		
		
		}	
	function get_voucher(){
			global $db;
			$query='select * from voucher';
			try{
			$statement=$db->prepare($query);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
				
			catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		
		
		}
		
		function get_value_voucher($test){
			global $db;
			$query='select * from voucher where code=:test';
			try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':test',$test);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}
		
	function delete_voucher($giamgia) {
    global $db;
    $query = 'DELETE FROM voucher WHERE code = :giamgia';
    $statement = $db->prepare($query);
    $statement->bindValue(':giamgia', $giamgia);
    $statement->execute();
    $statement->closeCursor();
	
	}
	
function update_product($product_code, $product_name, $price,$detail, $status,$type, $size, $color,$new,$huongdan,$product_id,$sales,$category,$featured){
    global $db;
	
    $query = "UPDATE product   
		   SET 
            product_code = :product_code,
			product_name = :product_name,
		  	price = :price,
			detail=:detail,
            status = :status,
          	type = :type,
			size=:size,
			color = :color,
            new = :new,
			huongdan=:huongdan,
			category_id=:category,
			sales=:sales,
			featured=:featured

        WHERE id = :product_id";
    try {
     $statement = $db->prepare($query);
	$statement->bindValue(':product_code', $product_code);     
	 $statement->bindValue(':product_name', $product_name);
   	 $statement->bindValue(':price', $price);
     $statement->bindValue(':detail', $detail);
 	 $statement->bindValue(':status', $status);
	 $statement->bindValue(':type', $type);
	 $statement->bindValue(':size', $size);
	$statement->bindValue(':huongdan', $huongdan);  	
     $statement->bindValue(':color', $color);
	 $statement->bindValue(':new', $new);
	 $statement->bindValue(':product_id', $product_id);
	 $statement->bindValue(':category', $category);
	 $statement->bindValue(':sales', $sales);
	 $statement->bindValue(':featured', $featured);
	 $statement->execute(); 
     $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function update_product_images($img, $img1, $img2,$img3,$id){
    global $db;
	$query = "UPDATE product   
		   SET 
            img = :img,
			img2 = :img1,
		  	img3 = :img2,
			img4=:img3
      WHERE id = :id";
    try {
     $statement = $db->prepare($query);
	$statement->bindValue(':img', $img);     
	 $statement->bindValue(':img1', $img1);
     $statement->bindValue(':img2', $img2);
 	 $statement->bindValue(':img3', $img3);
	 $statement->bindValue(':id', $id);
	 $statement->execute(); 
     $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
	
function add_product($product_code,
								   $product_name, 
								   $price,
								   $detail,
								   $status,
								   $type, 
								   $size, 
								   $color,
								   $new,
								   $huongdan,
								   $category,
								   $sales,
								   $img,
								   $img1,
								   $img2,
								   $img3
								   ){
    global $db;
    $query = 'INSERT INTO product
                 (product_code, product_name, price, detail, status,
                  type, size, color, new,huongdan,category_id,sales,img,img2,img3,img4, date)
              VALUES
                 (:product_code, :product_name, :price, :detail, :status,
                  :type,:size,:color,:new,:huongdan,:category,:sales,:img,:img1,:img2,:img3, NOW())';
    try {
     $statement = $db->prepare($query);
	$statement->bindValue(':product_code', $product_code);     
	 $statement->bindValue(':product_name', $product_name);
   	 $statement->bindValue(':price', $price);
     $statement->bindValue(':detail', $detail);
 	 $statement->bindValue(':status', $status);
	 $statement->bindValue(':type', $type);
	 $statement->bindValue(':size', $size);
    $statement->bindValue(':color', $color);
	 $statement->bindValue(':new', $new);
	 $statement->bindValue(':huongdan', $huongdan);
 	 $statement->bindValue(':category', $category);
	 $statement->bindValue(':sales', $sales);
	 $statement->bindValue(':img', $img);
	 $statement->bindValue(':img1', $img1);
	 $statement->bindValue(':img2', $img2);
	 $statement->bindValue(':img3', $img3);
	 $statement->execute();
	$result=$statement->fetchAll();
	$statement->closeCursor();
	return $result;
	
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

	
	function update_product_mypham($mypham_code,
								   $mypham_name, 
								   $mypham_price,
								   $mypham_detail,
								   $mypham_status,
								   $mypham_type, 
								   $mypham_size, 
								   $mypham_color,
								   $mypham_new,
								   $mypham_product_id){
    global $db;
	  $query = "UPDATE mypham   
		   SET 
            product_code = :mypham_code,
			product_name = :mypham_name,
		  	price = :mypham_price,
			detail=:mypham_detail,
            status = :mypham_status,
          	type = :mypham_type,
			size=:mypham_size,
			color = :mypham_color,
            new = :mypham_new
        WHERE id = :mypham_product_id";
    try {
     $statement = $db->prepare($query);
		$statement->bindValue(':mypham_code', $mypham_code);     
	 $statement->bindValue(':mypham_name', $mypham_name);
   	 $statement->bindValue(':mypham_price', $mypham_price);
     $statement->bindValue(':mypham_detail', $mypham_detail);
 	 $statement->bindValue(':mypham_status', $mypham_status);
	 $statement->bindValue(':mypham_type', $mypham_type);
	 $statement->bindValue(':mypham_size', $mypham_size);
  	 $statement->bindValue(':mypham_color', $mypham_color);
	 $statement->bindValue(':mypham_new', $mypham_new);
	 $statement->bindValue(':mypham_product_id', $mypham_product_id);
	 $statement->execute(); 
     $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function update_product_mypham_images($img, $img1, $img2,$img3,$id){
    global $db;
	$query = "UPDATE mypham   
		   SET 
            img = :img,
			img2 = :img1,
		  	img3 = :img2,
			img4=:img3
      WHERE id = :id";
    try {
     $statement = $db->prepare($query);
	$statement->bindValue(':img', $img);     
	 $statement->bindValue(':img1', $img1);
     $statement->bindValue(':img2', $img2);
 	 $statement->bindValue(':img3', $img3);
	 $statement->bindValue(':id', $id);
	 $statement->execute(); 
     $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function update_product_chamsocda($chamsocda_code,
								   $chamsocda_name, 
								   $chamsocda_price,
								   $chamsocda_detail,
								   $chamsocda_status,
								   $chamsocda_type, 
								   $chamsocda_size, 
								   $chamsocda_color,
								   $chamsocda_new,
								   $chamsocda_product_id){
    global $db;
	  $query = "UPDATE chamsocda   
		   SET 
            product_code = :chamsocda_code,
			product_name = :chamsocda_name,
		  	price = :chamsocda_price,
			detail=:chamsocda_detail,
            status = :chamsocda_status,
          	type = :chamsocda_type,
			size=:chamsocda_size,
			color = :chamsocda_color,
            new = :chamsocda_new
        WHERE id = :chamsocda_product_id";
    try {
     $statement = $db->prepare($query);
		$statement->bindValue(':chamsocda_code', $chamsocda_code);     
	 $statement->bindValue(':chamsocda_name', $chamsocda_name);
   	 $statement->bindValue(':chamsocda_price', $chamsocda_price);
     $statement->bindValue(':chamsocda_detail', $chamsocda_detail);
 	 $statement->bindValue(':chamsocda_status', $chamsocda_status);
	 $statement->bindValue(':chamsocda_type', $chamsocda_type);
	 $statement->bindValue(':chamsocda_size', $chamsocda_size);
  	 $statement->bindValue(':chamsocda_color', $chamsocda_color);
	 $statement->bindValue(':chamsocda_new', $chamsocda_new);
	 $statement->bindValue(':chamsocda_product_id', $chamsocda_product_id);
	 $statement->execute(); 
     $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
	
function update_product_chamsocda_images($img, $img1, $img2,$img3,$id){
    global $db;
	$query = "UPDATE chamsocda   
		   SET 
            img = :img,
			img2 = :img1,
		  	img3 = :img2,
			img4=:img3
      WHERE id = :id";
    try {
     $statement = $db->prepare($query);
	$statement->bindValue(':img', $img);     
	 $statement->bindValue(':img1', $img1);
     $statement->bindValue(':img2', $img2);
 	 $statement->bindValue(':img3', $img3);
	 $statement->bindValue(':id', $id);
	 $statement->execute(); 
     $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function update_product_nuochoa($nuochoa_code,
								   $nuochoa_name, 
								   $nuochoa_price,
								   $nuochoa_detail,
								   $nuochoa_status,
								   $nuochoa_type, 
								   $nuochoa_size, 
								   $nuochoa_color,
								   $nuochoa_new,
								   $nuochoa_product_id){
    global $db;
	  $query = "UPDATE nuochoa   
		   SET 
            product_code = :nuochoa_code,
			product_name = :nuochoa_name,
		  	price = :nuochoa_price,
			detail=:nuochoa_detail,
            status = :nuochoa_status,
          	type = :nuochoa_type,
			size=:nuochoa_size,
			color = :nuochoa_color,
            new = :nuochoa_new
        WHERE id = :nuochoa_product_id";
    try {
     $statement = $db->prepare($query);
		$statement->bindValue(':nuochoa_code', $nuochoa_code);     
	 $statement->bindValue(':nuochoa_name', $nuochoa_name);
   	 $statement->bindValue(':nuochoa_price', $nuochoa_price);
     $statement->bindValue(':nuochoa_detail', $nuochoa_detail);
 	 $statement->bindValue(':nuochoa_status', $nuochoa_status);
	 $statement->bindValue(':nuochoa_type', $nuochoa_type);
	 $statement->bindValue(':nuochoa_size', $nuochoa_size);
  	 $statement->bindValue(':nuochoa_color', $nuochoa_color);
	 $statement->bindValue(':nuochoa_new', $nuochoa_new);
	 $statement->bindValue(':nuochoa_product_id', $nuochoa_product_id);
	 $statement->execute(); 
     $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function update_product_nuochoa_images($img, $img1, $img2,$img3,$id){
    global $db;
	$query = "UPDATE nuochoa   
		   SET 
            img = :img,
			img2 = :img1,
		  	img3 = :img2,
			img4=:img3
      WHERE id = :id";
    try {
     $statement = $db->prepare($query);
	$statement->bindValue(':img', $img);     
	 $statement->bindValue(':img1', $img1);
     $statement->bindValue(':img2', $img2);
 	 $statement->bindValue(':img3', $img3);
	 $statement->bindValue(':id', $id);
	 $statement->execute(); 
     $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function add_product_mypham($product_code,
								   $product_name, 
								   $price,
								   $detail,
								   $status,
								   $type, 
								   $size, 
								   $color,
								   $new,
								   $huongdan
								   ){
    global $db;
    $query = 'INSERT INTO mypham
                 (product_code, product_name, price, detail, status,
                  type, size, color, new,huongdan, date)
              VALUES
                 (:product_code, :product_name, :price, :detail, :status,
                  :type,:size,:color,:new,:huongdan, NOW())';
    try {
     $statement = $db->prepare($query);
	$statement->bindValue(':product_code', $product_code);     
	 $statement->bindValue(':product_name', $product_name);
   	 $statement->bindValue(':price', $price);
     $statement->bindValue(':detail', $detail);
 	 $statement->bindValue(':status', $status);
	 $statement->bindValue(':type', $type);
	 $statement->bindValue(':size', $size);
    $statement->bindValue(':color', $color);
	 $statement->bindValue(':new', $new);
	 $statement->bindValue(':huongdan', $huongdan);
     $statement->execute();
	$result=$statement->fetchAll();
	$statement->closeCursor();
	return $result;
	
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function delete_product($product_id) {
    global $db;
    $query = 'DELETE FROM product WHERE id = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}

function search($category,$keyword){
			global $db;
			$query='SELECT * FROM product WHERE category_id LIKE :category and product_name like :keyword';
			$keyword = "%".$keyword."%";
			$category = "%".$category."%";
		try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':category',$category,PDO::PARAM_STR);
			$statement->bindvalue(':keyword',$keyword,PDO::PARAM_STR);	
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}	
		


function product_on_page_sort_up($category_id,$start,$limit) {
   global $db;
			$query='SELECT *
				FROM product
				where category_id=:category_id
				order by price desc
				limit :start , :limit';
			try{
			$statement=$db->prepare($query);
       		$statement->bindValue(':start', $start,PDO::PARAM_INT);
	        $statement->bindValue(':category_id', $category_id);
			$statement->bindValue(':limit', $limit,PDO::PARAM_INT);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}

function product_on_page_sort_down($category_id,$start,$limit) {
   global $db;
			$query='SELECT *
				FROM product
				where category_id=:category_id
				order by price asc
				limit :start , :limit';
			try{
			$statement=$db->prepare($query);
       		$statement->bindValue(':start', $start,PDO::PARAM_INT);
	        $statement->bindValue(':category_id', $category_id);
			$statement->bindValue(':limit', $limit,PDO::PARAM_INT);
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