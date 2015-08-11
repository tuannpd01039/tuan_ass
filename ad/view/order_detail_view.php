<?php include('../view/header_admin.php');?>
<div class="content">
        <div class="header">
            <h1 class="page-title">Chi tiết đơn hàng</h1>
        <ul class="breadcrumb">
            <li><a href="<?php echo $app_path?>ad/">Home</a> </li>
            <li class="active">Danh sách đơn hàng</li>
        </ul>

        </div>
        <div class="main-content">
       <?php 
   			$msg = "";
			if(isset($_GET["edit"])) $msg = $_GET["edit"];
			if($msg=='true') {  echo '<div class="alert alert-error" >Thêm thành công</div>';}
			if($msg=='error') {  echo '<div class="alert alert-error"> Cập nhật thành công</div>';}
			if($msg=='loi') {  echo '<div class="alert alert-error" >Không Đủ Thông Tin ! </div>';}
			if($msg=='del') {  echo '<div class="alert alert-error" >Xóa Thành Công ! </div>';}
 ?>
        </div>    
<div class="btn-toolbar list-toolbar">
    <form action="." method="get"><input type="hidden" name="add_product" value="add_product"/><button class="btn btn-primary"><i class="fa fa-plus"></i> Thêm sản phẩm</button>
    <button class="btn btn-default">Nhập</button>
    <button class="btn btn-default">Xuất</button>
   </form>
  <div class="btn-group">
  
  </div>
 <div style="float:right"> <form><input type="text" /> <input type="submit" value="Tìm Kiếm"/> </form></div>
</div>
<table class="table table-bordered table-striped">
              <thead>
                <tr>
                
                  <th>Tên Sản Phẩm</th>
                  <th>Mã sản phẩm</th>
                  <th>Số Lượng</th>
                  <th>Giá</th>
          	<th></th>
			    </tr>
              </thead>
              <tbody>
                <?php 
				
			  foreach ($order as $orders){?>
              <tr>
					<td> <?php echo $orders['product_name'];?></td>
					<td><?php echo $orders['product_code'];?></td>
			  	 <td><?php echo $orders['product_qty'];?></td>
                <td><?php echo number_format($orders['price']);?> VNĐ</td>	           
		         <td><a href="<?php echo $app_path;?>ad/order?order_id=<?php echo $orders['id'];?>">Chi Tiết</a></td>
	           </tr> <?php }
				  ?>
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
        <div class="modal-header"><form action="." method="post" >
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Xóa Sản Phẩm</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Bạn thật sự muốn xóa sản phẩm này ?</p>
        </div>
        <div class="modal-footer">
            <input type="submit" name="delete" value="Xóa" class="btn btn-default"/>

            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </form>
        </div>
      </div>
    </div>
</div>

 <?php include('../view/footer_admin.php');?>