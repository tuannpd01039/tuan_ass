<?php include '../view/header_admin.php'; ?>
<div class="content">
        <div class="header">
            <h1 class="page-title">Edit Voucher</h1>
                    <ul class="breadcrumb">
            <li><a href="<?php echo $app_path?>ad/">Home</a> </li>
            <li><a href="<?php echo $app_path?>ad/voucher/">Danh sách voucher</a> </li>
            <li class="active">Edit</li>
        </ul>
   </div>
        <div class="main-content" >
  </span>  
<ul class="nav nav-tabs" style="width:60%">
  <li class="active"><a href="#home" data-toggle="tab">Thông Tin Cơ Bản</a></li>
  <li><a href="#profile" data-toggle="tab"></a></li>
</ul>

<div class="row" >
  <div class="col-md-4" style="width:60%" >
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <form id="tab" action="." method="post">
        <div class="form-group">
        <label style="font-weight:bold">Mã Voucher</label>
        <input type="text" value="<?php echo $voucher['code'];?>" class="form-control" name="code"  >
        </div>
        <div class="form-group">
        <label style="font-weight:bold">Giá Trị Voucher</label>
        <input type="text"  value="<?php echo $voucher['value'];?>" name="value"  class="form-control"  >
        <input type="hidden"  value="<?php echo $voucher['id'];?>" name="id"  class="form-control">

        </div> 
  <div class="tab-pane fade" id="profile">
  <div id="tab2">
  <div class="form-group">
  </div>
  <div>
  </div>
  </div>
  </div>
  <div class="btn-toolbar list-toolbar">
      <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
      <input type="hidden" name="action" value="update_voucher"/>
      <input type="hidden" name="id" value="<?php echo intval($_GET['id']);?>"/>
  </form>
    </div>
  </div>
</div>
<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Upload Images</h3>
      </div>
      <div class="modal-body">
        
        <p class="error-text"><i class="fa fa-warning modal-icon"></i>Tìm tới thư mục hình ảnh của bạn và upload </p>
        <p style="color:#F00">( Chú ý: Đổi tên hình thành dạng :</p>
        <p style="color:#F00">'mục sản phẩm + tên sp + stt .jpg' trước khi up ! )</p>
        <p style="color:#F00; padding-left:39px" > Ví Dụ : nuochoa_nuochoamy_12.jpg </p>
        </br>
        <form action="../products/." method="post" enctype="multipart/form-data">
        <table width="447" border="0">
  <tr>
    <td width="111" height="35">Ảnh chính :</td>
    <td width="326"><input type="file" name="img" required /></td>
  </tr>
  <tr>
    <td height="29">Ảnh phụ 1 :</td>
    <td><input type="file" name="img1" required /></td>
  </tr>
  <tr>
    <td height="35">Ảnh phụ 2 :</td>
    <td><input type="file" name="img2" required /></td>
  </tr>
  <tr>
    <td>Ảnh phụ 3:</td>
    <td><input type="file" name="img3" required /></td>
  </tr>
</table>
   </div>
      <div class="modal-footer">
      <input type="hidden" name="update_product_image" value="update_product_image"/>
      <input type="hidden" name="category_id" value="<?php echo intval($_GET['category_id']);?>"/>
	 <input type="hidden" name="product_id" value="<?php echo $product_id=$_GET['product_id'] ;
?> "/>
      <input type="submit"  class="btn btn-danger"  aria-hidden="true" value="Upload"/>
        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
        
      </div></form>
    </div>
  </div>
</div>


           




<?php include '../view/footer_admin.php'; ?>
