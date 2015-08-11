<?php include '../view/header_admin.php'; ?>
<div class="content">
        <div class="header">
            <h1 class="page-title">Thêm Voucher</h1>
                    <ul class="breadcrumb">
            <li><a href="<?php echo $app_path?>ad/">Home</a> </li>
            <li class="active">Thêm voucher</li>
        </ul>

        </div>
        <div class="main-content" >
<ul class="nav nav-tabs" style="width:60%">
  <li class="active"><a href="#home" data-toggle="tab">Thông Tin Cơ Bản</a></li>
</ul>
<div class="row" >
  <div class="col-md-4" style="width:60%" >
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <form id="tab" action="." method="post">
        <div class="form-group">
        <label style="font-weight:bold">Mã Voucher</label>
        <input type="text" placeholder="Nhập mã voucher" class="form-control" name="code"  >
        </div>
        <div class="form-group">
        <label style="font-weight:bold">Giá Trị Voucher</label>
        <input type="text"  placeholder="Nhập giá trị voucher" name="value"  class="form-control"  >
      	</div> 
    <div class="tab-pane fade" id="profile">
   <div id="tab2">
     <div class="form-group">
    </div> <div></div></div></div>
   <div class="btn-toolbar list-toolbar">
      <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
      <input type="hidden" name="action" value="voucher_add"/>
	</form>
      <a href="#myModal" data-toggle="modal" class="btn btn-danger">Reset</a>
    </div>
  </div>
</div>

<?php include '../view/footer_admin.php'; ?>
