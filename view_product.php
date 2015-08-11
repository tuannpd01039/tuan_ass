<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('view/slide.php');
require_once('model/menu_db.php');
require_once('model/product_db.php');
?><script>
$(document).ready(function(){
  $("#img_game").click(function(){
    $("#error").toggle();
  });
});
</script>
<div class="main">
	<div class="wrap">
		<div class="section group" >
		  <div class="cont span_2_of_3" style="background: #F7F7F7;border: 1px solid #E6E6E6;"><div class="top-border"> </div>

		  	<strong><h2 class="head" style="border-bot:solid 1px">Sản Phẩm Nổi Bật</h2></strong>
      		  <?php 
			  	$featured = "có";
				$featured_product=get_product_featured($featured);
				foreach ($featured_product as $featured_products){
					$img=$featured_products['img'];
					$price=$featured_products['price'];
					$name=$featured_products['product_name'];
					$new=$featured_products['new'];
					?>
			 <div class="col_1_of_3 span_1_of_3" > 
           <a href="catalog?product_id=<?php echo
                           $featured_products['id']; ?>">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images/product/<?php echo $img; ?>" alt=" Sản Phẩm Nổi Bật" width="210" height="200"/>
					</div>
                    <?php 
					if(isset($new) && ($new)!=""){
					?>
                    <?php echo '<div class="sale-box"><span class="on_sale title_shop">New</span></div>';}?>
                    <div class="price">
					   <div class="cart-left">
							<h5 class="title"><?php echo $name; ?></h5>
							<div class="price1">
							  <span class="actual"><?php echo number_format($price); ?> VNĐ</span>
							</div>
					  </div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
				  </div>				
           </div>
              </a>
				</div>	<?php }?>
				<div class="clear"></div>
                </br>
			<h2 class="head">Sales Products</h2>
                 <?php $sle="có";
				$sale=get_product_sales($sle);
				foreach ($sale as $sales){
					$img=$sales['img'];
					$price=$sales['price'];
					$name=$sales['product_name'];
					?>
			 <div class="col_1_of_3 span_1_of_3"> 
     		   <a href="#">
				<div class="inner_content clearfix"> 
					<div class="product_image">
						<img src="images/product/<?php echo $img; ?>" alt=" Sản Phẩm Nổi Bật" width="210" height="200"/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<h5 class="title"><?php echo $name; ?></p></h5>
							<div class="price1">
							  <span class="actual"><?php echo $price; ?></span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>	<?php }?>
				<div class="clear"></div>
  </div>
      
          <!-- content right-->
			<div class="rsidebar span_1_of_left">
				<div class="top-border"> </div>
				 <div class="border">
	             <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	             <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
				  <script src="<?php echo $app_path?>js/jquery.nivo.slider.js"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
                <img src="images/t-img1.jpg"  alt="" />
               	<img src="images/t-img2.jpg"  alt="" />
                <img src="images/t-img3.jpg"  alt="" />
              </div>
             </div>
 				<div class="btn"><a href="#">Order Product</a></div>
             </div>
           <div class="top-border"> </div>
			<div class="sidebar-bottom"  >
			    <h2 class="m_1" >
                <img src="images/icon/Message.png" width="76" height="70"/><br> </h2>            
				<p class="m_text">Hãy chia sẻ cảm nghĩ của bạn về chúng tôi ^^!</p>
			    <div class="subscribe" >
                	 <form>					   
                       <a class="popup-with-zoom-anim" href="#small-dialog3"> 
                       <input type="submit" value="Đăng Bài">
                       </a>
					 </form>
	  			</div>
                <div id="small-dialog3" class="mfp-hide">
							   <div class="pop_up2">
							   	<h2>Đánh Giá</h2>
								 
								 <p> 
                                 <form method="post" class="signin" action="util/feedback.php" id="frmfeedback" enctype="multipart/form-data">
                                 <table width="485" border="1">
                                  <tr>
                                  <td width="124" height="42">Username</td>
                                  <td width="266">
                                  <input id="tenkh" name="tenKH" value="" type="text" autocomplete="on" placeholder="Tên khách hàng" /></td>
                                  <td width="8">&nbsp;</td>
                                   </tr>
                                   <tr>
                                     <td height="54" valign="top">Góp ý - Nhận Xét</td>
                                     <td valign="bottom">
                                     <textarea id="feedback" name="feedback" value="Nhận Xét Của Bạn" type="text"  rows="4,5" cols="35" >
                                     </textarea></td>
                                     <td>&nbsp;</td>
                                   </tr>
                                   <tr>
                                     <td height="28">Ảnh đại diện </td>
                                     <td><input type="file" name="file" class="input" autocomplete="on"/></td>
                                     <td>&nbsp;</td>
                                   </tr>
                                   <tr>
                                     <td height="29">Đánh Giá</td>
                                     <td><select name="vote">
                                       <option value="5">Rât tốt</option>
                                       <option value="4">Tốt</option>
                                       <option value="3">Tạm được</option>
                                       <option value="2">Bình thường</option>
                                       <option value="1">Không hài lòng</option>
                                     </select></td>
                                     <td>&nbsp;</td>
                                   </tr>
                                   <tr>
                                     <td height="30">Mã Xác Nhận</td>
                                     <td><input type="text" name="txtCaptcha" maxlength="10" size="32" /></td>
                                     <td>&nbsp;</td>
                                   </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                     <td><img src="util/random_image.php" alt="" /></td>
                                     <td>&nbsp;</td>
                                   </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                     <td><button class="submit button" type="button"  onclick="checkdangky()"  > Đăng bài </button></td>
                                     <td>&nbsp;</td>
                                   </tr>
                                 </table> 
                                 </form>
                             </div>
							 </div>
 			 <?php
			$msg = "";
			if(isset($_GET["msg"])) $msg = $_GET["msg"];	
			if($msg=="del") echo "<script type='text/javascript'>alert('Mã Xác Nhận Không Chính cmn Xác!')</script>";								
			if($msg=="ok") echo "<script type='text/javascript'>alert('Cám ơn bạn đã gửi lại lời nhắn .Chúc bạn 1 ngày vui vẻ ^^!')</script>";	
?>	               
     </div>
            </br></br></br>              	
			  <div class="top-border"> </div>
    <div class="sidebar-bottom">
		    <h2 class="m_1">FeedBack<br> </h2> 
			 <div class="scroll" style=""> 
		  	<?php 
			$feedback=get_feedback();
					foreach ($feedback as $feedbacks){
						$check=$feedbacks['check'];
						$rate=$feedbacks['rate'];
					if ($check=="check"){
				?>		              
               <div style="float:left; padding:0px 10px 10px 5px; " ><img src="images/thanhvien/<?php echo $feedbacks['image'];?> " width="90" 								height="75"/></div>	
      	<div style=" font-size:11px; text-align:left; " ><span style="color:#4CB1CA"><?php echo $feedbacks['tenKH'];?></span>
                        	<p><?php 
							switch ($rate) {
						   case "1":
							 echo '<div style="margin-bot:20px"><img src="images/icon/star1.gif" /></div>';
							 break;
						   case "2":
							 echo '<div style="margin-bot:20px"><img src="images/icon/star2.gif" /></div>';
							 break;
						   case "3":
							 echo '<div style="margin-bot:20px"><img src="images/icon/star3.gif" /></div>';
							 break;
								case "4":
							 echo '<div style="margin-bot:20px"><img src="images/icon/star4.gif" /></div>';
							 break;
						
						   case "5":
							 echo '<div style="margin-bot:20px"><img src="images/icon/star5.gif" /></div>';
							 break;					   
						}
							?> </p>
							<?php
                                 $str = $feedbacks['feedback']; 
                                 $str = strip_tags($str); 
                                 if(strlen($str)>20) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                                 $strCut = substr($str, 0, 60); //Cắt 100 kí tự đầu
                                 $str = substr($strCut, 0, strrpos($strCut, ' ')).'... <a href="#">Read More</a>'; 
                                    }
                                   ?>
                            	<p><strong><?php  echo $str;?></strong></p> </div>
				  </br>
				  <?php }}?>
		    </div> 
	        </div>     
            <div class="top-border"> </div>
	    </div>
 	   <div class="clear"></div>
	</div>
	</div>
	</div>
    <script src="<?php echo $app_path ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
		<link href="<?php echo $app_path ?>css/magnific-popup.css" rel="stylesheet" type="text/css">
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
