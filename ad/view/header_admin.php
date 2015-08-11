
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Quản Trị Website</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo $app_path;?>ad/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $app_path;?>ad/lib/font-awesome/css/font-awesome.css">
	<script language="javascript" src="<?php echo $app_path;?>ckeditor/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="<?php echo $app_path;?>ad/lib/jquery-1.11.1.min.js" type="text/javascript"></script>

        <script src="<?php echo $app_path;?>ad/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>


    <link rel="stylesheet" type="text/css" href="<?php echo $app_path;?>ad/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $app_path;?>ad/stylesheets/premium.css">
    
   

<script language="javascript">
function del(id)
{
	kq = confirm("Bạn có chắc chắn muốn xóa không?");
	if(kq==true)
	{
		window.location.href = "?orderid="+id+"&act=del";
	}
}
</script>
</head>

<body class=" theme-blue">

    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo $app_path;?>ad/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $app_path;?>ad/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $app_path;?>ad/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $app_path;?>ad/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $app_path;?>ad/assets/ico/apple-touch-icon-57-precomposed.png">
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
 
<script language="javascript">
function check_Del(id)
{
	kq = confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?");
	if(kq==true)
	{
		window.location.href = "./?category_id=<?php $category_id=$_GET['category_id'];
		echo $category_id;?>&product_id="+id+"&delete_product";
	}
}
</script>
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="<?php echo $app_path?>ad/"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Xixi- Boutique</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>Xin Chào <?php 
				
						foreach ($_SESSION['admin'] as $name){
							echo $name['admin_lastname'];
							}
					 ?>
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
                <li><a href="./">My Account</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Admin Panel</li>
                <li><a href="./">Users</a></li>
                <li><a href="./">Security</a></li>
                <li><a tabindex="-1" href="./">Payments</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    

    <div class="sidebar-nav">
    <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i>Danh mục sản phẩm<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse in">
     <li><a href="<?php echo $app_path;?>ad/products?category_id=1"><span class="fa fa-caret-right"></span> Mỹ Phẩm</a></li>
     <li ><a href="<?php echo $app_path;?>ad/products?category_id=2"><span class="fa fa-caret-right"></span> Nước Hoa</a></li>
     <li ><a href="<?php echo $app_path;?>ad/products?category_id=3"><span class="fa fa-caret-right"></span> Chăm Sóc Da </a></li>
     <li ><a href="<?php echo $app_path;?>ad/products?featured_product"><span class="fa fa-caret-right"></span> Sản Phẩm Nổi Bật</a></li>
     <li ><a href="<?php echo $app_path;?>ad/products?sale_product"><span class="fa fa-caret-right"></span> Sản Phẩm Giảm Giá</a></li>
    </ul></li>

    <li data-popover="true" data-content="Đây là mục quản lý đơn hàng  <strong><a href='http://portnine.com/bootstrap-themes/aircraft' target='blank'></a><strong>." rel="popover" data-placement="right"><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-fighter-jet"></i> Đơn Hàng<i class="fa fa-collapse"></i></a></li>
        <li><ul class="premium-menu nav nav-list collapse">
                <li class="visible-xs visible-sm"><a href="#">- Premium features require a license -</a></span>
             <li ><a href="<?php echo $app_path;?>ad/order?order=view"><span class="fa fa-caret-right"></span> Tất Cả Đơn Hàng</a></li>    
            <li ><a href="<?php echo $app_path;?>ad/order?pay=yes"><span class="fa fa-caret-right"></span> Đơn Hàng Đã Thanh Toán</a></li>
            <li ><a href="<?php echo $app_path;?>ad/order?pay=no"><span class="fa fa-caret-right"></span> Đơn Hàng Chưa Thanh Toán</a></li>
    
    </ul></li>

        <li ><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Tài Khoản <span class="label label-info">+3</span></a></li>
        <li><ul class="accounts-menu nav nav-list collapse">
            <li ><a href="sign-in.html"><span class="fa fa-caret-right"></span> Admin</a></li>
            <li ><a href="sign-up.html"><span class="fa fa-caret-right"></span> Thành Viên</a></li>

    </ul></li>

        <li data-popover="true" data-content="Quản lí hình ảnh của bạn tại đây  <strong><a href='http://portnine.com/bootstrap-themes/aircraft' target='blank'></a><strong>." rel="popover" data-placement="right"><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Hình Ảnh<i class="fa fa-collapse"></i></a></li>
        <li><ul class="legal-menu nav nav-list collapse">
            <li ><a href="privacy-policy.html"><span class="fa fa-caret-right"></span> Hình Ảnh Sản Phẩm</a></li>
            <li ><a href="terms-and-conditions.html"><span class="fa fa-caret-right"></span> Banner</a></li>
    </ul></li>

        <li><a href="help.html" class="nav-header"><i class="fa fa-fw fa-question-circle"></i> Help</a></li>
            <li><a href="<?php echo $app_path;?>ad/voucher" class="nav-header"><i class="fa fa-fw fa-comment"></i> Feedback</a></li>
            <li><a href="<?php echo $app_path;?>ad/voucher" class="nav-header"><i class="fa fa-fw fa-heart"></i>   Voucher<span class="label label-info">+3</span></a></li>
      </ul>
    </div>