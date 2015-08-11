<?php 

include('../view/header.php');?>

 <?php if (cart_product_count() == 0) : ?>
        <p>Bạn chưa chọn mua sản phẩm của chúng tôi !</p>
    <?php else: ?>
  <div class="checkout_form">
  <ul class="breadcrumb breadcrumb__t" style="padding-left:70px;"><a class="home" href="<?php echo $app_path; ?>">Home</a>/<a class="home" href="<?php echo $app_path; ?>cart/?action=view"> Giỏ Hàng</a>/Thanh Toán</ul>
          	<div class="wrap">
    	      <h4 class="title">Thanh Toán Đơn Hàng </h4>
    		   <form  action="."  method="post">
    			 <div class="col_1_of_2 span_1_of_2">
                  <p style="font-size:12px; color:#4cb1ca"> Hãy nhập đầy đù thông tin để chúng tôi có thể giao hàng cho bạn</p>
		   			 <div>First Name :
                      <input type="text" value="<?php if(isset($_SESSION['member'])){ echo $_SESSION['member'][0]['name'];}else{ echo "Nhập tên của bạn";}?>" id="firstname" name="firstname" required   />
                     <span style="color:#F00">(*)</span> 
                     <span style="color:red;" id="label_ten"></span>
                     </div>
		    			<div>Last Name : <input type="text"  placeholder="First Name" id="lastname" name="lastname" required  /> 
                        <span style="color:#F00"> (*)</span>
                         <span style="color:red;" id="label_lastname"></span>
                        </div>
		    			<div>Your Email : <input type="email" value="<?php if(isset($_SESSION['member'])){ echo $_SESSION['member'][0]['email'];}else{ echo "Nhập địa chỉ Email của bạn";}?>" id="email" name="email" required /> 
                        <span style="color:#F00"> (*)</span>
                        <span style="color:red;" id="label_email"></span>

                        </div>
		    			<div>Your Phone : <input type="text" value="<?php if(isset($_SESSION['member'])){ echo $_SESSION['member'][0]['phone'];}else{ echo "Nhập số điện thoại của bạn";}?>" id="phone" name="phone" required /> 
                        <span style="color:#F00"> (*)</span>
                        <span style="color:red;" id="label_phone"></span>

                        </div>
                        <div>Your Address : <input type="text" value="<?php if(isset($_SESSION['member'])){ echo $_SESSION['member'][0]['address'];}else{ echo "Nhập địa chỉ giao hàng";}?>" id="address"  name="address"  required /> 
                        <span style="color:#F00"> (*)</span></div>
                         <span style="color:red;" id="label_address"></span>
						
                        <div>
                          <textarea name="ghichu" cols="50" rows="5"  placeholder="Ghi Chú về đơn hàng"  ></textarea>
                         <p> Mã Xác Nhận : <img src="<?php echo $app_path?>util/random_image.php" alt="" />
                         </p> <input type="text" name="txtCaptcha" maxlength="10" size="12" placeholder="Nhập Mã Xác Nhận Đơn Hàng " required  />
                        </div>   
                        
                        <button class="grey" onClick="checkAdd()">Đặt Hàng</button>
           			<p class="terms" style="font-size:10px">Đồng ý đặt hàng khi bạn đã đồng ý với 
                    <a href="<?php echo $app_path ?>quydinh.php">thỏa thuận dịch vụ</a> của chúng tôi</p>
                    </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
		    		<div>
                    <h4 class="title"> <img src="../images/icon/icon.jpg" style="float:left; margin:0px 5px 0px 0px"/>Chi Tiết Đơn Hàng</h4>
                    </div>
		    		<div>
                    			<table width="500" border="0">
    <tr>
    <td width="300px" height="50px">Đơn Hàng : </td>
    <td ><span style="color:#F00">QWAS12</span></td>
  </tr>
  <tr>
    <td width="300px" height="50px">Số Sản Phẩm : </td>
    <td ><?php echo $count;?> Sản Phẩm</td>
  </tr>
  
  
  <tr>
    <td width="300px" height="60px">Tạm Tính : </br>
     (Không bao gồm VAT & Voucher) </td>
    <td><span style="color:#4CB1CA"><?php echo number_format($tamtinh);?> </span> VNĐ</td>
  </tr>
  <tr>
    <td width="300px" height="50px">Mã Giảm Giá (Voucher) :</td>
    <td><?php echo $voucher;?></td>
  </tr>
   <tr>
    <td width="300px" height="50px">Giảm Giá</td>
    <td><?php echo $value;?> %</td>
  </tr>
  <tr>
    <td width="300px" height="50px">Phí vận chuyển & đóng gói:</td>
    <td><?php echo $vanchuyen;?></td>
  </tr>
   <tr>
    <td width="300px" height="50px">Tổng Chi Phí</td>
    
    <input type="hidden" placeholder="Your Address" id="address"  name="tongtien" value="<?php echo $total;?>"/> 
    <input type="hidden" placeholder="Your Address" id="address"  name="giamgia" value="<?php echo $voucher;?>"/> 
    <td><?php echo number_format($total);?> VNĐ
    </td>
  </tr>
</table> 
              </div>		        	          
		          </div>
		          </div>
	    <div class="clear"></div>
            <input type="hidden" name="action" value="confirm" />

		    </form>
    	</div>
    </div>
    
   	<?php endif; ?>

<?php include('../view/footer.php');?>