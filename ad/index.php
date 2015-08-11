<?php 
session_start();

    include('../util/main.php');
	include('../model/database.php');
    //include('../util/security.php');
    include('../util/valid_admin.php');
	include('../model/admin_db.php');
	include('../model/order_db.php');


?>
<?php include('view/header_admin.php');?>

    <div class="content">
        <div class="header">
            <div class="stats">
    <p class="stat"><span class="label label-info">5</span> Tickets</p>
    <p class="stat"><span class="label label-success">27</span> Tasks</p>
    <p class="stat"><span class="label label-danger">15</span> Overdue</p>
</div>

            <h1 class="page-title">Dashboard</h1>
                    <ul class="breadcrumb">
            <li><a href="index.html">Home</a> </li>
            <li class="active">Dashboard</li>
        </ul>

        </div>
        <div class="main-content">
            




    <div class="panel panel-default">
        <a href="#page-stats" class="panel-heading" data-toggle="collapse">Biểu đồ doanh thu</a>
        <div id="page-stats" class="panel-collapse panel-body collapse in">

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="knob-container">
                                <input class="knob" data-width="200" data-min="0" data-max="3000" data-displayPrevious="true" value="2500" data-fgColor="#92A3C2" data-readOnly=true;>
                                <h3 class="text-muted text-center">Accounts</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="knob-container">
                                <input class="knob" data-width="200" data-min="0" data-max="4500" data-displayPrevious="true" value="3299" data-fgColor="#92A3C2" data-readOnly=true;>
                                <h3 class="text-muted text-center">Subscribers</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="knob-container">
                                <input class="knob" data-width="200" data-min="0" data-max="2700" data-displayPrevious="true" value="1840" data-fgColor="#92A3C2" data-readOnly=true;>
                                <h3 class="text-muted text-center">Pending</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="knob-container">
                                <input class="knob" data-width="200" data-min="0" data-max="15000" data-displayPrevious="true" value="10067" data-fgColor="#92A3C2" data-readOnly=true;>
                                <h3 class="text-muted text-center">Completed</h3>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

<div class="row">
    <div class="col-sm-6 col-md-6 " style="width:100%">
        <div class="panel panel-default">
            <div class="panel-heading no-collapse"> <h4 style="color:#F00"><img src="images/new.png" width="20" height="20"/> ĐƠN HÀNG MỚI NHẤT</h4><span class="label label-warning"><a href="">Xem tất cả</a></span></div>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
				 <th>Email</th>
                  <th>Địa Chỉ</th>
                  <th>Phone</th>
                  <th>Ngày đặt hàng</th>
                  <th>Tổng tiền</th>
                  <th></th>
                        
                </tr>
              </thead>
              <tbody>
              <?php $order=get_orders();
				foreach ($order as $orders){
				 ?>
                <tr>
                <td><?php echo $orders['firstname'];?></td>

                <td><?php echo $orders['lastname'];?></td>
			   <td><?php echo $orders['email'];?></td>
                <td><?php echo $orders['address'];?></td>
                <td>0<?php echo $orders['phone'];?></td>
                  <td><?php echo $orders['orderDate'];?></td>

	            <td><?php echo number_format($orders['price']);?> VNĐ</td>	           

                <td><a href="">Chi Tiết</a></td>
     			<!-- <td><a href="javascript:check_Delete('<?php echo $orders["orderID"];?>')">Xóa </a></td> -->

                </tr>
               
                <?php }?>
              </tbody>
            </table>
        </div>
    </div>
		<div class="col-sm-6 col-md-6">
        <div class="panel panel-default">
          <a href="#widget1container" class="panel-heading" data-toggle="collapse"><h4><img src="images/no.png" width="20" height="20"/> ĐƠN HÀNG CHƯA THANH TOÁN </h4></a>
            <div id="widget1container" class="panel-body collapse in">
              <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Mã ĐH</th>
  			      <th>Phone</th>
                  <th>Ngày đặt hàng</th>
                  <th>Tổng tiền</th>
           			<th></th>
			    </tr>
              </thead>
              <tbody>
                <?php 
			  $pay="";
			  $yes_pay=get_order_pay($pay);
			  foreach ($yes_pay as $yes_pays){?>
              <tr>
                	<td>ĐH <?php echo $yes_pays['id'];?></td>
			  	 <td>0<?php echo $yes_pays['phone'];?></td>
               	 <td><?php echo $yes_pays['orderDate'];?></td>
		         <td><?php echo number_format($yes_pays['price']);?> VNĐ</td>	           
		         <td><a href="">Chi Tiết</a></td>
	           </tr> <?php }
				  ?>
				</tbody>
            </table>        
				 
            </div>
        </div>
    </div>
    
    <div class="col-sm-6 col-md-6">
        <div class="panel panel-default">
            <a href="#widget1container1" class="panel-heading" data-toggle="collapse"><H4><img src="images/Check.png" width="20" height="20"/> ĐƠN HÀNG ĐÃ THANH TOÁN</H4> </a>
            <div id="widget1container1" class="panel-body collapse in">
              
				  <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Mã ĐH</th>
  			      <th>Phone</th>
                  <th>Ngày đặt hàng</th>
                  <th>Tổng tiền</th>
           			<th></th>
			    </tr>
              </thead>
              <tbody>
                <?php 
			  $pay="yes";
			  $yes_pay=get_order_pay($pay);
			  foreach ($yes_pay as $yes_pays){?>
              <tr>
                	<td>ĐH <?php echo $yes_pays['id'];?></td>
			  	 <td>0<?php echo $yes_pays['phone'];?></td>
               	 <td><?php echo $yes_pays['orderDate'];?></td>
		         <td><?php echo number_format($orders['price']);?> VNĐ</td>	           
		         <td><a href="">Chi Tiết</a></td>
	           </tr>	  <?php }
			  
			  ?>
				</tbody>
            </table>        
			
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6">
        <div class="panel panel-default"> 
            <div class="panel-heading no-collapse">
                <span class="panel-icon pull-right">
                    <a href="" class="demo-cancel-click" rel="tooltip" title="Click to refresh"><i class="fa fa-refresh"></i></a>
                </span>

               <H4>SẢN PHẨM XEM NHIỀU NHẤT 
               <span style="font-size:12px"><select name="">
               <option>SẢN PHẨM NỔI BẬT</option>
               <option>SẢN PHẨM GIẢM GIÁ</option>
               </select></span>
              <span style="font-size:12px"> <input type="submit" value="Go" /></span>
               </H4>
            </div>
            <table class="table list">
              <tbody>
              <?php
						   $top_view=top_view_id();//lấy 10 id_view có lượt view nhiều nhất
						  foreach ($top_view as $top_views) { 
						  
						  $id_view=$top_views['id_view']; //lấy giá trị id_view
						   //$show_view=show_view($id_view);}//lấy giá trị view từ id_view
						 $view_top=top_view($id_view);//lấy thông sin sản phẩm từ id_view tương ứng 
						  foreach ($view_top as $views_top){
						  ?>
                  <tr>
                      <td>
                          <a href="#"><p class="title"></p></a>
                          <p class="info">Tên Sản Phẩm: </p><a href=""> <?php echo $views_top['product_name']; ?></a>
						
                         
                      </td>
                      <td>
                          <p>Date: <?php echo $views_top['date']; ?></p>
                          <a href="#">Chi tiết sản phẩm</a>
                      </td>
                      <td> 
                          <p class="text-danger h3 pull-right" style="margin-top: 12px;"><?php echo  $top_views['view'] ?> <span style="font-size:10px">lượt xem</span></p>
                      </td>
                  </tr>
                 
                  
                  <?php }}?>
                 
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <div class="panel panel-default">
            <a href="#widget2container" class="panel-heading" data-toggle="collapse">Collapsible </a>
            <div id="widget2container" class="panel-body collapse in">
                <h2></h2>
                <p>.</p>
                <p><a class="btn btn-primary"></a></p>
            </div>
        </div>
    </div>
</div>


       <?php include('view/footer_admin.php');?>


