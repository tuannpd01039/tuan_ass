<?php
 session_start();

include('../util/main.php');
include('../util/pagination.php');
include('../model/database.php');
include('../model/product_db.php');
include('../model/category_db.php');


if (isset($_GET['category_id'])) {
    $action = 'category';
} elseif (isset($_GET['product_id'])) {
    $action = 'product';
}elseif (isset($_POST['search'])) {
    $action = 'search';
}elseif (isset($_POST['sort_up'])) 
{ $action = 'sort_up';}elseif (isset($_POST['sort_down'])) 
{ $action = 'sort_down';}
if (isset($_GET['sort'])) 
{ $action = $_GET['sort'];}

switch ($action) {

    // Display the specified category
    case 'category':
        // Get category data
        $category_id = intval($_GET['category_id']);//1
        $category = getcategory($category_id);
        $category_name = $category['categoryName'];
        $products = get_products_by_category($category_id);
		//pagination
		$p = new Pager;
		$counts = count_products_by_category($category_id);
		$count=$counts[0];
		$limit = 2;
		$start = $p->findStart($limit);
    	$pages = $p->findPages($count,$limit);
		//hiển thị 5 dòng
		$result=product_on_page($category_id,$start,$limit);
        // Display product by category
        include('./category_view.php');
        break;
    // Display the specified product
    case 'product':
        // Get product data
        $product_id = $_GET['product_id'];
        $product = get_product($product_id);

        // Display product
        include('./product_view.php');
        break;
	case 'search':
		$keyword=addslashes($_POST['key']);
		$category=$_POST['cate'];
		if($search=search($category,$keyword)){
					include('./search.php');

			}else { include('./error_search.php');}
		break;
	case 'sort_up';
		 $category_id = $_POST['cate'];
		 $p = new Pager;
		$counts = count_products_by_category($category_id);
		$count=$counts[0];
		$limit = 2;
		$start = $p->findStart($limit);
    	$pages = $p->findPages($count,$limit);
		//hiển thị 5 dòng
		$result=product_on_page_sort_up($category_id,$start,$limit);
        include('./category_view.php');

	break;

	case 'down';
		$category_id = intval($_GET['category_id']);//1
		$p = new Pager;
		$counts = count_products_by_category($category_id);
		$count=$counts[0];
		$limit = 2;
		$start = $p->findStart($limit);
    	$pages = $p->findPages($count,$limit);
		//hiển thị 5 dòng
		$result=product_on_page_sort_down($category_id,$start,$limit);
        include('./category_view.php');

	break;
	case 'up';
		$category_id = intval($_GET['category_id']);//1
		$p = new Pager;
		$counts = count_products_by_category($category_id);
		$count=$counts[0];
		$limit = 2;
		$start = $p->findStart($limit);
    	$pages = $p->findPages($count,$limit);
		//hiển thị 5 dòng
		$result=product_on_page_sort_up($category_id,$start,$limit);
        include('./category_view.php');

	break;
	}
	

?>