<?php include '../view/header_admin.php'; ?>
<div class="content">
        <div class="header">
            <h1 class="page-title"><?php 
			$category_id=$_GET['category_id'];
			$category=getcategory($category_id); ?>
		  	<strong><?php echo $category['categoryName']; ?></strong></h1>
                    <ul class="breadcrumb">
            <li><a href="<?php echo $app_path?>ad/">Home</a> </li>
            <li><a href="<?php echo $app_path?>ad/products/?category_id=<?php echo $category_id;?>">Danh sách sản phẩm</a> </li>
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
        <label style="font-weight:bold">Tên Sản Phẩm</label>
        <input type="text" value="<?php echo $edit['product_name'];?>" class="form-control" name="product_name"  >
        </div>
        <div class="form-group">
        <label style="font-weight:bold">Mã Sản Phẩm</label>
        <input type="text"  value="<?php echo $edit['product_code'];?>" name="product_code"  class="form-control"  >
                <input type="hidden"  value="<?php echo $edit['id'];?>" name="id"  class="form-control">

        </div>
        <div class="form-group">
        <label style="font-weight:bold">Giá (VNĐ)</label>
        <input type="text" value="<?php echo $edit['price'];?>" class="form-control" name="price" >
        </div>
        <div class="form-group">
	      <div class="alert alert-error">Thông Tin Chi Tiết Sản Phẩm</div>
        
        <textarea value="Smith" rows="3" name="detail" class="form-control" id="chitiet"><?php echo $edit['detail'];?></textarea>
	<script type="text/javascript">CKEDITOR.replace( 'chitiet'); </script>
   </div>
	      <div class="alert alert-error">Hướng Dẫn Sử Dụng</div>
    <textarea  rows="3" name="huongdan" class="form-control" id="huongdan"><?php echo $edit['huongdan'];?></textarea>
	<script type="text/javascript">CKEDITOR.replace( 'huongdan'); </script>
</br></br>
 <div class="panel panel-default">
        <p class="panel-heading">Tình Trạng Sản Phẩm</p>
        <div class="panel-body gallery">
       <div class="form-group">
          <label style="padding-right:20px;">Tình Trạng : 
          <select name="status">
          <option value="Còn Hàng">Còn Hàng</option> 
		 <option value="Hết Hàng">Hết Hàng</option>
		</select>  
        </label>
		 <label style="padding-right:20px;">Thể Loại : <select name="type">
          <option value="Vip">Vip</option>
         <option value="Normal">Normal</option>
		  </select>
          </label> 
          
           <label style="padding-right:20px;">Màu Sắc  : <select name="color">
          <option value="Như hình">Như hình</option>
         <option value="Không có">Không có</option>
		  </select>
          </label>
        <p>&nbsp </p>
            <label style="padding-right:70px;padding-left:8px;">Hàng Mới  : <select name="new">
          <option value="new">Có</option>
         <option value="">Không</option>
		  </select>
          </label>
          
          <label style="padding-right:20px;">Size  : <select name="size">
          <option value="Free"><?php echo $edit['size'];?></option>
         <option value="">Không</option>
		  </select>
          </label>
       <div class="clearfix"></div>
        </div>
    </div>
       </div>
 <div class="panel panel-default">
        <p class="panel-heading">Danh Mục Sản Phẩm </p>
        <div class="panel-body gallery" style="text-align:left">
                  <label>Thuộc Mục <select name="category" required="" >
                 <option value=""></option>
                  		<option value="1">Mỹ Phẩm</option>
       				  	<option value="2">Nước Hoa</option>
           				<option value="3">Chăm Sóc Da</option></select> </label> | 
		 			<label> Sản Phẩm Giảm Giá <select name="sales" required="" >
                		<option value=""></option>
						<option value="">Không</option>  
            			<option value="có">Có</option></select></label> | 
                     <label> Sản Phẩm Mới <select name="new" required="" >
         				<option value=""></option>
						 <option value="new">Có</option>
        				 <option value="">Không</option> </select> </label> </br></br>
                     <label> Sản Phẩm Nổi Bật <select name="featured" required="" >
            			<option value=""></option>  
                        <option value="">Không</option>  
            			<option value="có">Có</option></select></label> 
            <div class="clearfix"></div>
        </div>
    </div>       
<div class="panel panel-default">
        <p class="panel-heading">Hình ảnh sản phẩm </p>
        <div class="panel-body gallery">
                <img src="<?php echo $app_path?>images/product/<?php echo $edit['img'];?>" width="100" height="90" />
                <img src="<?php echo $app_path?>images/product/<?php echo $edit['img2'];?>" width="100" height="90" />
                <img src="<?php echo $app_path?>images/product/<?php echo $edit['img3'];?>" alt="" width="100" height="90" />
                <img src="<?php echo $app_path?>images/product/<?php echo $edit['img3'];?>" alt="" width="100" height="90" />   
            <div class="clearfix"></div>
        </div>
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
      <input type="hidden" name="update_product" value="update_product"/>
      <input type="hidden" name="category_id" value="<?php echo intval($_GET['category_id']);?>"/>
  </form>
      <a href="#myModal" data-toggle="modal" class="btn btn-danger">Upload Hình Ảnh</a>
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
        <form action="." method="post" enctype="multipart/form-data">
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
