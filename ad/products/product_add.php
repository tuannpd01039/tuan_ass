<?php include '../view/header_admin.php'; ?>
<div class="content">
        <div class="header">
            <h1 class="page-title">Thêm Sản Phẩm</h1>
                    <ul class="breadcrumb">
            <li><a href="<?php echo $app_path?>ad/">Home</a> </li>
            <li class="active">Thêm sản phẩm</li>
        </ul>

        </div>
        <div class="main-content" >
<ul class="nav nav-tabs" style="width:60%">
  <li class="active"><a href="#home" data-toggle="tab">Thông Tin Cơ Bản</a></li>
  <li><a href="#profile" data-toggle="tab">Thông Tin Thêm</a></li>
</ul>

<div class="row" >
  <div class="col-md-4" style="width:60%" >
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <form id="tab" action="." method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label style="font-weight:bold">Tên Sản Phẩm</label>
        <input type="text" value="" class="form-control" name="product_name" required="" >
        </div>
        <div class="form-group">
        <label style="font-weight:bold">Mã Sản Phẩm</label>
        <input type="text"  value="" name="product_code"  class="form-control" required="" >
         <input type="hidden"  value="" name="id"  class="form-control">
	 </div>
        <div class="form-group">
        <label style="font-weight:bold">Giá (VNĐ)</label>
        <input type="text" value="" class="form-control" name="price" required="" >
        </div>
        <div class="form-group">
	      <div class="alert alert-error">Thông Tin Chi Tiết</div>
        <textarea value="Smith" rows="3" name="detail" class="form-control" id="chitiet"></textarea>
		<script type="text/javascript">CKEDITOR.replace( 'chitiet'); </script>
		 </div>
		
        <div class="form-group">
	      <div class="alert alert-error">Hướng Dẫn Sử Dụng</div>
        <textarea value="Smith" rows="3" name="huongdan" class="form-control" id="huongdan"></textarea>
		<script type="text/javascript">CKEDITOR.replace( 'huongdan'); </script>
		 </div>
          <div class="panel panel-default" style="text-align:left">
        <p class="panel-heading">Tình Trạng Sản Phẩm </p>
        <div class="panel-body gallery">
               <div class="form-group">
          <label>Tình Trạng : 
          <select name="status">
         <option value="Còn Hàng">Còn Hàng</option> 
          <option value="Hết Hàng">Hết Hàng</option></select> |   
        </label>
		 <label >Thể Loại : <select name="type">
          <option value="Vip">Vip</option>
         <option value="Normal">Normal</option>
		  </select>
          </label>  | 
          
           <label>Màu Sắc  : <select name="color">
          <option value="Như hình">Như hình</option>
         <option value="Không có">Không có</option>
		  </select>
          </label>
        <p>&nbsp </p>
       <label>Size  : <select name="size">
          <option value="Free">Free</option>
         <option value="">Không</option>
		  </select>
          </label>
         
    </div>  
            <div class="clearfix"></div>
        </div>
    </div>
    </br>
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
        				 <option value="">Không</option> </select> </label> 
            <div class="clearfix"></div>
        </div>
    </div> 
    
<div class="panel panel-default">
        <p class="panel-heading">Hình Ảnh Sản Phẩm </p>
        <div class="panel-body gallery" style="text-align:left">
                <table width="447" border="0">
  <tr>
    <td width="111" height="35">Ảnh chính :</td>
    <td width="326"><input type="file" name="img" required /></td>
  </tr>
  <tr>
    <td height="26">Ảnh phụ 1 :</td>
    <td><input type="file" name="img1" required /></td>
  </tr>
  <tr>
    <td height="43">Ảnh phụ 2 :</td>
    <td><input type="file" name="img2" required /></td>
  </tr>
  <tr>
    <td>Ảnh phụ 3:</td>
    <td><input type="file" name="img3" required /></td>
  </tr>
</table>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="tab-pane fade" id="profile">
   <div id="tab2">
     <div class="form-group">
    </div> <div></div></div></div>
   <div class="btn-toolbar list-toolbar">
      <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
      <input type="hidden" name="product_add" value="product_add"/>
	</form>
      <a href="#myModal" data-toggle="modal" class="btn btn-danger">Reset</a>
    </div>
  </div>
</div>

<?php include '../view/footer_admin.php'; ?>
