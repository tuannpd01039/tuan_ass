
<div class="login">
          <div class="wrap">
				<ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Home</a>  / Profile</ul>
				<div class="section group">
			      <div class="labout span_1_of_about">
					 <h3>Welcome !</h3>
				    <div class="testimonials ">
					  <div class="testi-item">
						<blockquote class="testi-item_blockquote">
							<a href="#"><p>Hi,bạn có thể xem thông tin tài khoản của bạn tại form thông tin bên cạnh ! </br>Và thay đổi thông tin <a href="#">tại đây</br> Mọi thắc mắc về vấn đề bảo mật </br>xin liên hệ hotline : <span style="color:red">0968347557</span> để được trả lời bạn nhé !</a></p>
                             </a>
							<div class="clear"></div>
						</blockquote>
							<p>&nbsp;</p> 
                            <img src="<?php echo $app_path;?>images/thanhvien/png_eunji_by_bibi97nd-d6lvk1l.png" width="236" height="250">                

                            </div>
				      </div>
				   </div>
				    <div class="cont span_2_of_about">
				       <h3>Thông tin tài khoản</h3>
					   	<p><span style="color:#4CB1CA;">Tên : </span> <?php echo $_SESSION['member'][0]['firstname'];?> . &nbsp;&nbsp; <span style="color:#4CB1CA;">Họ </span>: <?php echo $_SESSION['member'][0]['lastname'];?></p>
					  
                       <p><span style="color:#4CB1CA;">Địa chỉ Email : </span><?php echo $_SESSION['member'][0]['email'];?></p>
                       <p><span style="color:#4CB1CA;">Địa chỉ hiện tại : </span><?php echo $_SESSION['member'][0]['address'];?></p>
                       <p><span style="color:#4CB1CA;">Địa chỉ giao hàng : </span><?php echo $_SESSION['member'][0]['diachinhanhang'];?></p>
                       <p><span style="color:#4CB1CA;">Số điện thoại :  </span> +84 <?php echo $_SESSION['member'][0]['phone'];?></p>
                       <p><span style="color:#4CB1CA;">Lượt mua : </span><?php echo $_SESSION['member'][0]['luotmua'];?> lượt</p>
                       <p><span style="color:#4CB1CA;">Lượt thanh toán : </span><?php echo $_SESSION['member'][0]['luotthanhtoan'];?> lượt</p>
                       <p><span style="color:#4CB1CA;">Voucher : </span><?php echo $_SESSION['member'][0]['voucher'];?> </p>
				       
		   <!-- Add fancyBox main JS and CSS files -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
           </div>
		   <div class="clear"></div>	
		  </div>
	</div>	
   </div>  