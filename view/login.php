<div class="login">
          	<div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">Khách Hàng Mới</h4>
					<p>Nếu bạn là khách hàng mới , chỉ vài bước đăng kí hãy tạo cho mình 1 tài khoản thành viên để có thể nhận được những ưu đãi đặc biệt :
                    </p>
                    <p style="color:#4CB1CA"> - Nhận được voucher khuyến mãi khi thanh toán đơn hàng</p>
                    <p style="color:#4CB1CA"> - Cập nhật những tin tức khuyến mãi mới nhất</p>
                    <p style="color:#4CB1CA"> - Thanh toán nhanh và an toàn hơn</p>
					<p style="color:#4CB1CA"> - Có cơ hội trở thành "thành viên vàng" của shop</p>

					<div class="button1">
					   <a href="<?php echo $app_path?>?action=register"><input type="submit" name="Submit" value="Tạo Tài Khoản"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_login span_1_of_login">
				<div class="login-title">
	           		<h4 class="title">Đăng nhập</h4>
					<div id="loginbox" class="loginbox">
                     <?php 
		$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		$msg = "";
		if(isset($_GET["msg"])) $msg = $_GET["msg"];
		if($msg=="false") echo "<script type='text/javascript'>alert('Mật Khẩu Và Tài Khoản Không Đúng!')</script>";
		if($msg=="true") echo "<script type='text/javascript'>alert('Thành Công!')</script>";
				
?>
						<form action="." method="post" name="login" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Email</label>
						      <input id="modlgn_username" type="text" name="email" class="inputbox" size="18" autocomplete="off" placeholder="Nhập địa chỉ email của bạn">           <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" /> 

						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Password</label>
						      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off" placeholder="Nhập mật khẩu của bạn">
						    </p>
						    <div class="remember">
							    <p id="login-form-remember">
							      <label for="modlgn_remember"><a href="#">Quên mật khẩu ? </a></label>
							   </p>
                               <input type="hidden" name="action" value="check_login"/>
							    <input type="submit"  class="button" value="Login"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			    </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>