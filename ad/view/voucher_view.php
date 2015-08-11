<?php include('../view/header_admin.php');?>
<div class="content">
        <div class="header">
            <h1 class="page-title">Voucher</h1>
        <ul class="breadcrumb">
            <li><a href="<?php echo $app_path?>ad/">Home</a> </li>
            <li class="active">Danh sách voucher</li>
        </ul>

        </div>
        <div class="main-content">
       <?php 
   			$msg = "";
			if(isset($_GET["update"])) $msg = $_GET["update"];
			if($msg=='true') {  echo '<div class="alert alert-error" >Cập nhật thành công</div>';}
			if($msg=='false') {  echo '<div class="alert alert-error"> Cập nhật thành công</div>';}
			
 ?>
        </div>    
<div class="btn-toolbar list-toolbar">
    <form action="." method="get"><input type="hidden" name="action" value="add_voucher"/><button class="btn btn-primary"><i class="fa fa-plus"></i> Thêm Voucher</button>
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
                  <th>Mã Code</th>
  			      <th>Giá Trị</th>
                <th>Sửa/Xóa</th>
			    </tr>
              </thead>
              <tbody>
                <?php 
			  foreach ($voucher as $vouchers){?>
              <tr>
                <td> <?php echo $vouchers['code'];?></td>
			  	<th><?php echo $vouchers['value'];?>%</th>
              <td>
              <a href="<?php echo $app_path?>ad/voucher/?action=edit&id=<?php echo $vouchers['id'] ;?>"><i class="fa fa-pencil"></i></a> | 
          	<a href="javascript:check_Del('<?php echo $product["id"];?>')"><i class="fa fa-trash-o"></i></a>
     		 </td>
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
        <div class="modal-header"><form action="." method="post" >
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Edit Code Voucher</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>
             <form action="." method="post" enctype="multipart/form-data">
                 <table width="447" border="0">
                  <tr>
                    <td width="111" height="35">Mã Code</td>
                    <td width="326"><input type="text" name="img" value="" required /></td>
                  </tr>
                  <tr>
                    <td height="29">Giá Trị :</td>
                    <td><input type="text" name="img1" required /></td>
                  </tr>
 
                </table>
            
            
            </p>
        </div>
        <div class="modal-footer">
            <input type="submit" name="delete" value="Sửa" class="btn btn-default"/>

            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </form>
        </div>
      </div>
    </div>
</div>

 <?php include('../view/footer_admin.php');?>