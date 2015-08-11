<?php
	function get_menu(){
		global $db;
		$query='select * from pages';
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
	function get_sub($id_pages){
		global $db;
		$query='select * from subject where id_pages=:id';
		try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':id',$id_pages);
			$statement->execute();
			$result=$statement->fetch(PDO::FETCH_NUM);
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}
		

?>