case 'chamsocda':
		$product_chamsocda=get_products_chamsocda();
		include ('../view/chamsocda_product.php');
	 break;
	 
	 case 'edit_chamsocda_product':
	  $product_id=$_GET['product_id'] ;
	  $edit_chamsocda=get_products_cham_soc_da($product_id);
		include ('./product_chamsocda_add.php');
	
	 break;
	case 'update_chamsocda_product': 
       	$chamsocda_code = $_POST['product_code'];
	   	$chamsocda_name = $_POST['product_name'];
       	$chamsocda_price = $_POST['price'];
		$chamsocda_detail=$_POST['detail'];
		$chamsocda_status = $_POST['status'];
       	$chamsocda_type = $_POST['type'];
		$chamsocda_size = $_POST['size'];
		$chamsocda_color = $_POST['color'];
		$chamsocda_new = $_POST['new'];
	 	$chamsocda_product_id=$_POST['id'] ;
        update_product_chamsocda($chamsocda_code, $chamsocda_name, $chamsocda_price,$chamsocda_detail, $chamsocda_status,$chamsocda_type, $chamsocda_size, $chamsocda_color,$chamsocda_new,$chamsocda_product_id);
	header('Location: .?cham_soc_da&edit_chamsocda_product&product_id='.$chamsocda_product_id.'&edit=true');
  break;
	 case 'update_chamsocda_image':
		$uploaddir = '../../images/product/featured/';
		
		$uploadfile = $uploaddir . basename($_FILES['img']['name']);
		move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
		
		
		$uploadfile = $uploaddir . basename($_FILES['img1']['name']);
		move_uploaded_file($_FILES['img1']['tmp_name'], $uploadfile);
		
		
		$uploadfile = $uploaddir . basename($_FILES['img2']['name']);
		move_uploaded_file($_FILES['img2']['tmp_name'], $uploadfile);
		
		
		$uploadfile = $uploaddir . basename($_FILES['img3']['name']);
		move_uploaded_file($_FILES['img3']['tmp_name'], $uploadfile);
		$img_chamsocda= $_FILES['img']['name'];
		$img1_chamsocda= $_FILES['img1']['name'];
		$img2_chamsocda= $_FILES['img2']['name'];
		$img3_chamsocda= $_FILES['img3']['name'];
		if (isset($_POST['product_id'])) {$chamsocda_product_id = $_POST['product_id'];}
		  if (empty($img_chamsocda) || empty($img1_chamsocda) || empty($img2_chamsocda) ||
           empty($img2_chamsocda) ){
        header('Location: .?cham_soc_da&edit_chamsocda_product&product_id='.$chamsocda_product_id.'&edit=error');

        } else {
		update_chamsocda_images($img_chamsocda, $img1_chamsocda, $img2_chamsocda,$img3_chamsocda,$chamsocda_product_id);
		header('Location: .?cham_soc_da&edit_chamsocda_product&product_id='.$chamsocda_product_id.'&edit=true');}
