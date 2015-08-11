<?php 
session_start();
require_once('../../util/main.php');
require_once('../../util/security.php');
require_once('../../util/valid_admin.php');
require_once('../../model/database.php');

//require_once('../../util/images.php');
require_once('../../model/product_db.php');
require_once('../../model/category_db.php');


if (isset($_GET['category_id'])) {
    $action = 'category';
} elseif (isset($_GET['product_id'])) {
    $action = 'product';
}

if (isset($_POST['update_featured_product']))       {$action = $_POST['update_featured_product'];}
if (isset($_GET['featured_product'])) {$action = 'featured_product';}
if (isset($_GET['sale_product'])) {$action = 'sale_product';}

if (isset($_GET['act']) == 'edit') {$action = 'edit';}
if (isset($_GET['delete_product'])) {$action = 'delete_product';}

if (isset($_POST['update_product']))       {$action = $_POST['update_product'];}
if (isset($_POST['update_product_image'])) {$action = $_POST['update_product_image'];}
if (isset($_GET['add_product'])) {$action = $_GET['add_product'];}
if (isset($_POST['product_add'])) {$action = $_POST['product_add'];}
if (isset($_POST['add_product_image'])) {$action = $_POST['add_product_image'];}
if (isset($_POST['delete'])) {$action = $_POST['delete'];}


switch ($action) {
	 case 'category':
        // Get category data
        $category_id = intval($_GET['category_id']);//1
        $category = getcategory($category_id);
        $category_name = $category['categoryName'];
        $products = get_products_by_category($category_id);

        // Display product by category
        include('../view/product_view.php');
        break;
	case 'featured_product':
		$featured="có";
		$product= get_product_featured($featured);
		include ('../view/featured_product.php');
	 break;
	 case 'sale_product':
		$sle="có";
		$product= get_product_sales($sle);
		include ('../view/sales_product.php');
	 break;
	 case 'edit':
	  	$product_id=$_GET['product_id'] ;
		$edit=get_product($product_id);
		include ('./product_update.php');
	 break;
	  case 'delete_product':
	  $product_id=$_GET['product_id'] ;
	  $category_id=$_GET['category_id'];
		delete_product($product_id);
	header('Location: .?category_id='.$category_id.'&edit=del');
	 break;
	 case 'update_product': 
       	$product_code = $_POST['product_code'];
	   	$product_name = $_POST['product_name'];
       	$price = $_POST['price'];
		$detail=$_POST['detail'];
		$status = $_POST['status'];
       	$type = $_POST['type'];
		$size = $_POST['size'];
		$color = $_POST['color'];
		$new = $_POST['new'];
		$huongdan = $_POST['huongdan'];
		$product_id=$_POST['id'] ;
		$category=$_POST['category'];
		$sales=$_POST['sales'];
		$featured=$_POST['featured'];
		$cate=$_POST['category_id'];
		 update_product($product_code, $product_name, $price,$detail, $status,$type, $size, $color,$new,$huongdan,$product_id,$sales,$category,$featured);
	header('Location: .?category_id='.$cate.'&edit=error');
  break;
	 case 'update_product_image':
		$uploaddir = '../../images/product/';
		$uploadfile = $uploaddir . basename($_FILES['img']['name']);
		move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
		$uploadfile = $uploaddir . basename($_FILES['img1']['name']);
		move_uploaded_file($_FILES['img1']['tmp_name'], $uploadfile);
		$uploadfile = $uploaddir . basename($_FILES['img2']['name']);
		move_uploaded_file($_FILES['img2']['tmp_name'], $uploadfile);
		$uploadfile = $uploaddir . basename($_FILES['img3']['name']);
		move_uploaded_file($_FILES['img3']['tmp_name'], $uploadfile);
		$img= $_FILES['img']['name'];
		$img1= $_FILES['img1']['name'];
		$img2= $_FILES['img2']['name'];
		$img3= $_FILES['img3']['name'];
		$cate=$_POST['category_id'];
		$category_id = intval($_GET['category_id']);
		if (isset($_POST['product_id'])) {$id = $_POST['product_id'];}
		  if (empty($img) || empty($img1) || empty($img2) ||
            empty($img3) ) {
        header('Location: .?category_id='.$cate.'&act=edit&product_id='.$id.'&edit=loi');

        } else {
		update_product_images($img, $img1, $img2,$img3,$id);
		header('Location: .?category_id='.$category_id.'&act=edit&product_id='.$id.'&edit=error');}

	 break;
	 case 'add_product':
		include ('./product_add.php');
	 break;
	 
	 case 'product_add':
	 	$product_code = $_POST['product_code'];
	   	$product_name = $_POST['product_name'];
       	$price = $_POST['price'];
		$detail=$_POST['detail'];
		$status = $_POST['status'];
       	$type = $_POST['type'];
		$size = $_POST['size'];
		$color = $_POST['color'];
		$new = $_POST['new'];
		$huongdan = $_POST['huongdan'];
		$category = $_POST['category'];
		$sales=$_POST['sales'];
		// images
		$uploaddir = '../../images/product/';
		$uploadfile = $uploaddir . basename($_FILES['img']['name']);
		move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
		$uploadfile = $uploaddir . basename($_FILES['img1']['name']);
		move_uploaded_file($_FILES['img1']['tmp_name'], $uploadfile);
		$uploadfile = $uploaddir . basename($_FILES['img2']['name']);
		move_uploaded_file($_FILES['img2']['tmp_name'], $uploadfile);
		$uploadfile = $uploaddir . basename($_FILES['img3']['name']);
		move_uploaded_file($_FILES['img3']['tmp_name'], $uploadfile);
		$img= $_FILES['img']['name'];
		$img1= $_FILES['img1']['name'];
		$img2= $_FILES['img2']['name'];
		$img3= $_FILES['img3']['name'];
		add_product($product_code,
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
								   );
	header('Location: .?category_id='.$category.'&edit=true');
	 break;
	 
	
} 
?>