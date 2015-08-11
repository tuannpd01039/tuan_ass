<?php 
include('../view/header.php');?>
 <div class="checkout" >
 <ul class="breadcrumb breadcrumb__t" style="padding-left:70px;"><a class="home" href="<?php echo $app_path; ?>">Home</a>/ Giỏ Hàng</ul>
    <div class="wrap" >
   <div class="col_1_of_2 span_1_of_2">
             <img src="../images/icon/cart3.png" style="float:left; margin:0px 5px 0px 0px"/>
             <h4 class="title">Giỏ Hàng Của Bạn</h4>
    	     <p class="cart" >
             	<?php 
					$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
				?>  
    <?php if (cart_product_count() == 0) : ?>
        <p>Không có sản phẩm nào trong giỏ hàng</p>
        <p></p>
    <?php else: ?>
        <p>Bạn đã đặt mua <span style="color:#4CB1CA"><?php  $count=cart_product_count();
		echo $count;?></span> sản phẩm</p>
        </br>
        <form action="." method="post">
            <input type="hidden" name="action" value="update" />
	
            <table id="cart">
            <tr id="cart_header"><br />
		 <th class="left" width="200px">Thông Tin Sản Phẩm</th>
                <th align="center">Giá</th>
                <th align="center">Số lượng</th>
                <th class="right">Giá Tiền</th>
                 
            </tr>
            <?php foreach ($cart as $product_id => $item) : ?>
            <tr>
                <td><img src="<?php echo $app_path;?>images/product/<?php  echo $item['img'];?>" width="50px" height="50px" style="float:left; margin:0px 10px 15px 10px"/><a href="<?php echo $app_path;?>"><?php echo $item['name']; ?></a></br><?php echo $item['product_code']; ?></td>
                <td class="right">
                    <?php echo number_format($item['price']); ?> VNĐ
                </td>
                <td class="right">
            <input type="text" size="1" class="right" name="items[<?php echo $product_id; ?>]"value="<?php echo $item['product_qty']; ?>" />
                </td>
                <td class="right">
                    <?php echo number_format($item['price']);  ?> VNĐ
                </td>
            </tr>
            <?php endforeach; ?>
            
			<?php //lay mã voucher và kiểm tra
			
			if (isset($_POST['submit'])) {
				if(isset($_POST['voucher'])) 
				  {
					  $test=$_POST['voucher'];}
				$sale="";
				$value=get_value_voucher($test);
				foreach($value as $values){ $sale=$values['value'];}
				if($value){
					echo '<strong><span style="color:#4CB1CA">'."Sử dụng voucher thành công !".'<span></strong>';
					}else{
					echo '<strong><span style="color:red">'."Voucher không tồn tại hoặc đã qua sử dụng !".'<span></strong>';
						}			
			}
			
				?>                

            <tr id="cart_footer" >
                <td colspan="3" class="right" ><strong>Tổng Cộng :</strong></td>
                <td class="right">
         	     <span style="color:#4CB1CA"> 
				   <?php 
				   $total=cart_subtotal();
					 echo number_format($total);
				   ?>
				    </span> VNĐ                 
                </td>
            
            </tr>
            
            <tr>
                <td colspan="4" class="right">
                		<form action="view_cart.php" method="post">
              <input type="submit" value="Sử Dụng Voucher"  name="submit" class="update"/>
              <input type="text"  class="right" name="voucher" placeholder="Nhập mã Voucher" />  
                        
                        </form>
						<input type="submit" value="Update Cart"  class="update"/></form>
					
                </td>
            </tr>
            </table>
        
        

             
             
             </p>
            
             </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
           		<h4 class="title"> <img src="../images/icon/icon.jpg" style="float:left; margin:0px 5px 0px 0px"/>Đơn Hàng Của Bạn</h4>
                
                	<table width="500" border="0">
  <tr>
    <td width="300px" height="50px">Số Sản Phẩm : </td>
    <td ><span style="color:#4CB1CA"> <?php  $count=cart_product_count();
		echo $count; ?> </span> sản phẩm</td>
  </tr>
  <tr>
    <td width="300px" height="60px">Tạm Tính : </br>
     (Không bao gồm VAT & Voucher) </td>
    <td><span style="color:#4CB1CA"> <?php echo number_format(cart_subtotal()); ?> </span> VNĐ</td>
  </tr>
  <tr>
    <td width="300px" height="50px">Mã Giảm Giá (Voucher) :</td>
    <td>
	<?php 
	
	
	$test="";
	if(isset($_POST['voucher'])) 
				  {
					  $test=$_POST['voucher'];}
				$value=get_value_voucher($test);
				if($value){
					echo $test;
					}else{
					echo "Không có";
						}
	
	?>
    </td>
  </tr>
   <tr>
    <td width="300px" height="50px">Giảm Giá</td>
    <td><?php 	
	$test="";
	
	if(isset($_POST['voucher'])) 
				  {
					  $test=$_POST['voucher'];}
				$value=get_value_voucher($test);
				if($value){
					echo '<span style="color:#4CB1CA">'.$sale ."%".'</span>';
					}else{
					echo '<span style="color:#4CB1CA">'."0%".'</span>';
						}?></td>
  </tr>
  <tr>
    <td width="300px" height="50px">Phí vận chuyển & đóng gói:</td>
    <td>Miễn Phí</td>
  </tr>
   <tr>
    <td width="300px" height="50px">Tổng Chi Phí</td>
    <td><?php 
			
			if (isset($_POST['submit'])) {
				if(isset($_POST['voucher'])) 
				  {
					  $test=$_POST['voucher'];}
					  $giam=((($sale)*($total))/100);
					  $dagiam=$total-$giam;
					  echo number_format($dagiam);
				}else{
					echo number_format($total);
					}
	
	?> VNĐ
    </td>
  </tr>
  <tr>
    <td  height="45px" align="right"><a href="<?php echo $app_path;?>"><input type="button" value="Tiếp Tục Mua"  class="update"/></a>
</td>
    <td height="100px">
   <form action="." method="post">
    <input type="hidden" name="count" value="<?php  $count=cart_product_count();echo $count; ?>" />
    <input type="hidden" name="voucher" value="
    	<?php 
	$test="";
	if(isset($_POST['voucher'])) 
	{ $test=$_POST['voucher'];}
		$value=get_value_voucher($test);
		if($value){
			echo $test;
		}else{
			echo "Không có";
			}
	
	?>
 " />
 
    <input type="hidden" name="tamtinh" value="<?php echo cart_subtotal(); ?>" />
	<input type="hidden" name="value" value="<?php 
	if(isset($_POST['voucher'])) 
				  {
					  $test=$_POST['voucher'];}
				$value=get_value_voucher($test);
				if($value){
					echo $sale;
					}else{
					echo '0';
					}

	?>" />
    <input type="hidden" name="vanchuyen" value="Miễn Phí" />
    <input type="hidden" name="total" value="<?php 
			if (isset($_POST['submit'])) {
				if(isset($_POST['voucher'])) 
				  {
					  $test=$_POST['voucher'];}
					  $giam=((($sale)*($total))/100);
					  $dagiam=$total-$giam;
					  echo $dagiam;
				}else{
					echo $total;
					}?>" />

    <input type="hidden" name="action" value="checkout" />

    <input type="submit" value="Thanh Toán"  class="update"/>
    </form>
    </td>
  </tr>
  
</table> 
                		<?php endif; ?>
             </div> 
    	   </div>
    	</div>  
	
       <div style="clear:both"></div>
    
   

<?php include('../view/footer.php');?>