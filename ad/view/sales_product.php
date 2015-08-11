<?php include('../view/header_admin.php');?>
<div class="content">
        <div class="header">
            
            <h1 class="page-title">Sản Phẩm Giảm Giá</h1>
                    <ul class="breadcrumb">
            <li><a href="<?php echo $app_path?>ad/">Home</a> </li>
            <li class="active">Danh sách sản phẩm</li>
        </ul>

        </div>
        <div class="main-content"><?php 
   			$msg = "";
			if(isset($_GET["edit"])) $msg = $_GET["edit"];
			if($msg=='true') {  echo '<div class="alert alert-error" >Thêm thành công</div>';}
			if($msg=='error') {  echo '<div class="alert alert-error">Upload thành công</div>';}
			if($msg=='loi') {  echo '<div class="alert alert-error" >Không Đủ Thông Tin ! </div>';}

			 ?>
<div class="btn-toolbar list-toolbar">
    <form action="." method="get"><input type="hidden" name="add_product" value="add_product"/><button class="btn btn-primary"><i class="fa fa-plus"></i> Thêm sản phẩm</button>
    <button class="btn btn-default">Nhập</button>
    <button class="btn btn-default">Xuất</button>
   </form>
  <div class="btn-group">
  
  </div>
 <div style="float:right"> <form><input type="text" /> <input type="submit" value="Tìm Kiếm"/> </form></div>
</div>
<table class="table">
  <thead>
    <tr>
      <th style="width: 3.5em;">STT</th>
	 <th style="width: 9.5em;">Mã Sản Phẩm</th>
      <th style="width: 9.5em;">Hình Ảnh </th>
	 <th>Tên Sản Phẩm</th>
      <th>Thông Tin Sản Phẩm</th>
      <th>Tình Trạng</th>
      <th>Thuộc Danh Mục</th>
	 <th style="width: 3.5em;"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($product as $products){?>
    <tr>
      <td><?php echo $products['id']; ?></td>
      <td><?php echo $products['product_code']; ?></td>
 	<td><img src="../../images/product/<?php echo $products['img'];?>" width="50px" height="50px"/></td>	

      <td><?php echo $products['product_name']; ?></td>
      <td style="width: 15.5em;"><?php
	   $str = strip_tags($products['detail']);
		if(strlen($str)>120) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
        $strCut = substr($str, 0, 180); //Cắt 100 kí tự đầu
         $str = substr($strCut, 0, strrpos($strCut, ' ')); 
		 }	 
		 echo $str; 
	  
	    ?> .......</td>
      <td><?php  if (($products['status'])=="Còn Hàng"){echo '<span style="color:#5bc0de">'."Còn Hàng".'</span>';}
	  else{echo '<span style="color:red">'."Hết Hàng".'</span>';}
	  
	   ?>
    </td>
    <td><a href="<?php echo $app_path?>ad/products/?category_id=<?php echo $products['category_id'];?>">
	<?php  if (($products['category_id'])=="1"){echo "Mỹ Phẩm";}
	if (($products['category_id'])=="2"){echo "Nước Hoa";}
	if (($products['category_id'])=="0"){echo "Chưa có danh mục";}
	if (($products['category_id'])=="3"){echo "Chăm Sóc Da";}?></a></td>
   
    </tr>
    <?php }?>
  </tbody>
</table>

<ul class="pagination">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>

<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the user?<br>This cannot be undone.</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
</div>


          
   








 <?php include('../view/footer_admin.php');?>