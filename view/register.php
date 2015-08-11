  <?php 
		$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		$msg = "";
		if(isset($_GET["msg"])) $msg = $_GET["msg"];
		if($msg=="false") echo "<script type='text/javascript'>alert('Mật Khẩu Và Tài Khoản Không Đúng!')</script>";
		if($msg=="true") echo "<script type='text/javascript'>alert('Thành Công!')</script>";
		if($msg=="email") echo "<script type='text/javascript'>alert('Địa chỉ email của bạn không hợp lệ!')</script>";
		if($msg=="email_exits") echo "<script type='text/javascript'>alert('Địa chỉ email đã tồn tai!')</script>";
		if($msg=="error") echo "<script type='text/javascript'>alert('Bạn chưa nhập đầy đủ thông tin!')</script>";
		
				?>
 <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Tạo tài khoản</h4>
         <form method="post" action=".">
    			 <div class="col_1_of_2 span_1_of_2"><input type="hidden" name="return_url" value="<?php echo $current_url; ?>" /> 
		   			 <div><input type="text" name="first_name" placeholder="Hãy nhập họ của bạn"></div>
		    			<div><input type="text" name="last_name" placeholder="Hãy nhập tên của bạn"></div>
		    			<div><input type="text" name="email" placeholder="Hãy nhập địa chỉ email của bạn"></div>
		    			<div><input type="text" name="password" placeholder="Hãy nhập password của bạn"></div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
		    		<div><input type="text" name="address" placeholder="Địa chỉ bạn đang sống"></div>
                    <div><input type="text" name="diachinhanhang" placeholder="Địa chỉ giao hàng"></div>  
                    <div><input type="text" name="phone" placeholder="Hãy nhập số điện thoại của bạn"></div>
   		        
		          <div><input type="text" name="city" placeholder="Thành phố"></div>
		           <div>
		          </div>
		          	<input type="text" name="txtCaptcha" maxlength="10" size="12" placeholder="Nhập Mã Xác Nhận " required  />
		          		<p class="code"><div><img src="<?php echo $app_path?>util/random_image.php" /> </div></p>
                <input type="hidden" name="action" value="create"/>
                </div>
		      <button class="grey">Đăng ký</button>
		    <p class="terms">Đồng ý đăng kí khi bạn chấp nhận <a href=""> thỏa thuận sử dụng</ của chúng tôi.</p>
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>