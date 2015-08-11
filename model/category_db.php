<?php 
	function get_category() {
		global $db;
		$query = 'SELECT *,
                (SELECT COUNT(*)
                 FROM product
                 WHERE product.category_id = categories.categoryID)
                 AS productCount
              FROM categories
              ORDER BY categoryID';
		try {
			$statement=$db->prepare($query);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
		}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);
		
		}
	}
	function getcategory($category_id) {
    global $db;
    $query = '
        SELECT *
        FROM categories
        WHERE categoryID = :category_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_category_by_product($product_id) {
		global $db;
		$query = 'SELECT * 
					FROM product p
					INNER JOIN categories c ON p.category_ID = c.categoryID
					WHERE id =:product_id';
		try {
			$statement=$db->prepare($query);
			$statement->bindValue(':product_id', $product_id);
			$statement->execute();
			$result=$statement->fetch();
			$statement->closeCursor();
			return $result;
		}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);
		
		}
	}

?>