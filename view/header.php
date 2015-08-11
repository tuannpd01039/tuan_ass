<!DOCTYPE HTML>
<html>
<head>
<title>Mỹ Phẩm Đà Nẵng - Cung cấp mỹ phẩm USA tại Đà Nẵng - Xixi Boutique!
</title>
<meta content="my pham da nang, mỹ phẩm Đà Nẵng, mỹ phẩm usa Đà Nẵng, mỹ phẩm hàn quốc, chăm sóc da, my pham usa chinh hang, nuoc hoa my, giao hang toan quoc, my pham nuoc hoa cham soc da , my pham han quoc chinh hang, my pham, mỹ phẩm, my pham my, mỹ phẩm Mỹ" name="description">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<link href="<?php echo $app_path; ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $app_path; ?>css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo $app_path; ?>js/jquery1.min.js"></script>
<link rel="icon" type="image/ipg"  href="<?php echo $app_path; ?>images/icon/logo.jpg">
<!-- tab menu-->
<link href="<?php echo $app_path; ?>css/tabcontent.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $app_path; ?>js/tabcontent.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $app_path; ?>js/ajax.js"></script> 

<!-- start menu -->
<link href="<?php echo $app_path; ?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo $app_path; ?>js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="<?php echo $app_path; ?>css/fwslider.css" media="all">
    <script src="<?php echo $app_path; ?>js/jquery-ui.min.js"></script>
    <script src="<?php echo $app_path; ?>js/css3-mediaqueries.js"></script>
    <script src="<?php echo $app_path; ?>js/fwslider.js"></script>
<!--end slider -->
<script src="<?php echo $app_path; ?>js/jquery.easydropdown.js"></script>

<script language="javascript">

function checkdangky()
{

	
	
	var email = document.getElementById('emailaddress');
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	

	if(document.getElementById("tenkh").value=="")
	{
		//label_ma_sinhvien.innerHTML = "Xin vui lòng nhập tên KH";
		alert('Bạn phải nhập tên !');
		document.getElementById("tenkh").focus();
		return;
	}
	if(document.getElementById("feedback").value=="")
	{
		alert('Bạn chưa nhập feedback!');
		document.getElementById("feedback").focus();
		return;
	}
	

	document.getElementById("frmfeedback").submit();
	
	
	
}


   
</script>

<!-- check login-->



<!-- end -->
</head>
<body onLoad="popup('autopopup.html', 'ad')" >
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- facebook-->


     <div class="header-top">
	   <div class="wrap"> 
			  <div class="header-top-left">
			  	   <div class="box">
   				      <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">Ngôn Ngữ :</option>
							<option value="1">Việt Nam</option>
							<option value="2">English</option>
							<option value="3">Korean</option>
					  </select>
                      <?php //echo "<pre>";
					 // print_r ($_SESSION['member']);
					 // echo "</pre>";?>
   				    </div>
   				    <div class="box1">
   				        <select tabindex="4" class="dropdown">
							<option value="" class="label">Tỉ Giá :</option>
							<option value="1">$ Dollar</option>
							<option value="2">€ Euro</option>
                            <option value="2">VNĐ VNĐ</option>

						</select>
   				    </div>
   				    <div class="clear"></div>
   			 </div>
			 <div class="cssmenu">
				<ul>
				 <?php if(!(isset($_SESSION['member']))) { ?>
					<li><a href="<?php echo $app_path?>?action=login">Đăng nhập</a></li> |
					<li><a href="<?php echo $app_path?>?action=register">Đăng kí</a></li> | 
                    
					<li><a href="">Liên Hệ</a></li> |
					<li><a href="<?php  echo $app_path ;?>cart/?action=view ">Thanh Toán</a></li> |
                   <?php }else{ 
					echo '<li><a href="login.html">Xin chào '.$_SESSION['member'][0]['firstname'].'</a></li> |
					<li><a href="'. $app_path.'?action=info">Thông Tin</a></li> |
					<li><a href="login.html">Liên Hệ</a></li> |
					<li><a href="'.$app_path.'cart/?action=view">Thanh Toán</a></li> |
					<li><a href="'.$app_path.'?action=logout">Thoát</a></li>'; }
					?>	
						
                    
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="<?php echo $app_path;?>"><img src="<?php echo $app_path;?>images/logo-banner/logo.jpg" alt="Xixi - Boutique" width="190" height="155"/></a>
</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
                	<li class="active grid"><a href="<?php echo $app_path;?>"><img src="<?php echo $app_path;?>/images/icon/home.png" width="30" height="30" style="margin:0px 0px -5px 0px"/> Home</a></li>
			<li class="active grid"><a class="color4" href="<?php echo $app_path;?>catalog?category_id=1"><img src="<?php echo $app_path;?>images/icon/mypham_icon.jpg" width="30" height="30" style="margin:0px 0px -5px 0px"/> Mỹ Phẩm</a></li>
			<li class="active grid"><a class="color5" href="<?php echo $app_path;?>catalog?category_id=2"><img src="<?php echo $app_path;?>images/icon/nuochoa_icon.jpg" width="30" height="30" style="margin:0px 0px -5px 0px"/>  Nước Hoa</a>	</li>
				<li class="active grid"><a class="color6" href="<?php echo $app_path;?>catalog?category_id=3"><img src="<?php echo $app_path;?>images/icon/chamsocda_icon.jpg" width="30" height="30" style="margin:0px 0px -5px 0px"/> Chăm Sóc Da</a></li>
                
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  
				<input type="text" name="s" class="textbox" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}">
                
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
	    <ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>Thông Báo & Tin Tức</h3><a href=""></a></li>
                    <li><h4 style="text-align:center">Hiện không có thông báo nào</h4></li>
				</ul>
			</li>
		</ul>
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon1 list">
					<li>
                    <h3>Giỏ Hàng Của Bạn hiện có </br> 
               
		<?php 
			 if(isset($_SESSION['cart'])) {
			 $count =count($_SESSION['cart']);
				echo $count;}else{echo "0";}
		?> sản phẩm
        			</h3>
              </li>
					
				</ul>
			</li>
		</ul>
	    <ul class="last"><li id="panel1"><a href="<?php echo $app_path ;?>cart/?action=view">
   
        Cart(<?php 
			 if(isset($_SESSION['cart'])) {
			 $count =count($_SESSION['cart']);
				echo $count;}else{echo "0";}
		?>) </a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
