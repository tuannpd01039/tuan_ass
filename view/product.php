<script src="<?php echo $app_path ;?>js/jquery1.min.js"></script>
<!-- start menu -->
<link href="<?php echo $app_path ;?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo $app_path ;?>js/megamenu.js"></script>
<script type="text/javascript" src="<?php echo $app_path ;?>js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- start details -->
<script src="<?php echo $app_path ;?>js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
	<!-- start zoom -->
	<link rel="stylesheet" href="<?php echo $app_path ;?>css/zoome-min.css" />
	<script type="text/javascript" src="<?php echo $app_path ;?>js/zoome-e.js"></script>
	<script type="text/javascript">
		$(function(){
		$('#img1,#img2,#img3,#img4').zoome({showZoomState:true,magnifierSize:[250,250]});
	});
	</script>		
	
   <div class="mens">    
  <div class="main">
     <div class="wrap"><?php $category=get_category_by_product($product_id);
	 ?>
     	<ul class="breadcrumb breadcrumb__t"><a class="home" href="<?php echo $app_path; ?>">Home</a> / <a href="<?php echo $app_path; ?>catalog/?category_id=<?php echo $category['categoryID'];?>"><?php echo $category['categoryName']; ?></a> / <?php echo $product['product_name'];?></ul>
		<div class="cont span_2_of_3">
		  	<div class="grid images_3_of_2">
						<div id="container">
							<div id="products_example">
								<div id="products">
									<div class="slides_container">
				<a href="#"><img  class="a" id="img1" src="<?php echo $app_path; ?>images/product/<?php echo $product['img'];?>" width="300px" height="370px" /></a>
				<a href="#"><img class="a" id="img2" src="<?php echo $app_path; ?>images/product/<?php echo $product['img2'];?>" width="300px" height="370px"/></a>
				<a href="#"><img class="a" id="img3" src="<?php echo $app_path; ?>images/product/<?php echo $product['img3'];?>" width="300px" height="370px"/></a>
				<a href="#"><img class="a" id="img4" src="<?php echo $app_path; ?>images/product/<?php echo $product['img4'];?>" width="300px" height="370px"/></a>
									</div>
									<ul class="pagination">
								<li><a href="#"><img src="<?php echo $app_path; ?>images/product/<?php echo $product['img'];?>" width="100px" height="84px"/> </a></li>
								<li><a href="#"><img src="<?php echo $app_path; ?>images/product/<?php echo $product['img2'];?>" width="100px" height="84px"/></a></li>
								<li><a href="#"><img src="<?php echo $app_path; ?>images/product/<?php echo $product['img3'];?>" width="100px" height="84px"/></a></li>
								<li><a href="#"><img src="<?php echo $app_path; ?>images/product/<?php echo $product['img4'];?>" width="100px" height="84px"/></a></li>
                                <div class="clear"></div>
									</ul>
								</div>
							</div>
						</div>
	            </div>
                <?php 	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
						$msg = "";
						if(isset($_GET["msg"])) $msg = $_GET["msg"];
						if($msg=="false") echo "<script type='text/javascript'>alert('Mặt Hàng Đã Có Trong Giỏ Hàng!')</script>";?>
		         <div class="desc1 span_3_of_2">
		         <h3 class="m_3" style="color:#4CB1CA;"><?php echo $product['product_name'];?></h3>
		         <p class="m_5">Giá : <?php echo number_format($product['price']);?> VNĐ<span class="reducedfrom"></span> 
                 <a href="#">click for offer</a></p>
		         	 <div class="btn_form">
                      <!-- <form action="<?php echo $app_path;?>cart/" method="post" id="add_to_cart_form">-->
                        <input type="hidden" name="action" value="add"  id="add"/>
                        <input type="hidden" name="product_id" id="product_id" value="<?php echo $product['id']; ?>" />
                        <input type="hidden" name="product_name" id="product_name" value="<?php echo $product['product_name'];?>" />
					  	<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" /> 
                        <b>Số Lượng:</b>&nbsp;
                        <input type="text" name="product_qty" value="1" size="2" id="product_qty" />
						<button id="panel"  class="panel" >THÊM VÀO GIỎ HÀNG</button>
					

                    <!-- </form>-->
						
					 </div>
					 <div class="sky-form">
					<h4>Thông Tin Sản Phẩm</h4>
                    </div>
                    
                     <p class="m_text2">
              
              <span class="m_link">Lượt xem :
                <?php 
			  		$product_id=$product['id'];//lấy biến id của sản phẩm
					add_id_view($product_id);//thêm biến id của sản phẩm vào bảng vew
					$view=get_view($product_id);//lấy giá trị view của bảng view
					$views=$view['view'];//lấy giá trị view hiện tại
					$views += 1;// tăng thêm 1 giá trị và gán vào biến views
					$id_view=$view['id'];	//lấy biến id tương ứng của giá trị view
					$update=update_view($views,$id_view);//cập nhật lại giá trị view tương ứng tại biến $views
					$viewed=get_view($product_id);
					$a=0;
					delete_view($a);//in ra giá trị biến $view
					echo $viewed['view'];	
					?> 
               </span>
              </p>
					<p class="m_text2">
                    					<table width="404" border="1">
                                          <tr>
                                            <td width="193" height="42"><p class="m_text2">Tình trạng :<?php echo $product['status'];?></p> </td>
                                            <td width="172"><p class="m_text2">Loại hàng : <?php echo $product['type'];?></p></td>
                                          </tr>
                                          <tr>
                                            <td height="48"><p class="m_text2">Size : <?php echo $product['size'];?></p></td>
                                            <td><p class="m_text2">Color : <?php echo $product['color'];?></p></td>
                                          </tr>
                                        </table>
					</p>
			     </div>
			   <div class="clear"></div>	
	    <div class="clients">
	    <div  class="sky-form">
					<h4>Sản Phẩm Cùng Thể Loại</h4>
                    </div>
        
		 <ul id="flexiselDemo3">
         <?php $random=random_product();
		foreach ($random as $randoms) {
			
		?>
			<li><img src="<?php echo $app_path; ?>images/product/<?php echo $randoms['img']?>"  width="150" height="100"/><a href="#"></a></li>
		<?php } ?>
		 </ul>
     
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="<?php echo $app_path; ?>js/jquery.flexisel.js"></script>
     </div>
<!-- tab menu-->
     <div class="toogle">
	<h3 class="m_3">
        		 <p class="m_text">
                 <ul class="tabs" data-persist="true">
           <li>	<a href="#view1">Chi Tiết Sản Phẩm</a></li>
            <li><a href="#view2">Hướng Dẫn Sử Dụng</a></li>
            <li><a href="#view3">Góp Ý - Nhận Xét</a></li>
       			 </ul></p>
  		 </h3>
     	<p class="m_text">
        		 <div class="tabcontents">
            <div id="view1">
              
              <p class="m_text" style="text-align:center"><img src="../images/logo-banner/logo.jpg" width="240" height="190"/></p>
                <?php echo $product['detail'];?> 
          
            </div>
            <div id="view2">
                <p class="m_text">Hướng Dẫn Sử Dụng</p>        
            </div>
            <div id="view3">
               <p class="m_text"><div class="fb-comments" data-href="http://example.com/comments" data-numposts="5" data-colorscheme="light"></div></p>
              
            </div>
        </div>
        </p>
     </div>
     

     <div class="toogle">
     	<h3 class="m_3">Các Bài Viết Liên Quan</h3>
     	<p class="m_text"><ul class="delivery-list">
		  <li><a href="#">Quyết định giao dịch</a></li>
			<li><a href="#">Quyền để thay đổi trang web

</a></li>
			<li><a href="#">Quản lý nội dung</a></li>
			<li><a href="#">Những bình luận phản hồi và những đề nghị, gợi ý khác từ khách hàng gởi đến và đăng tải trên website.</a></li>
			<li><a href="#">Thông tin sản phẩm

</a></li>
<li><a href="#">Sự bồi thường



</a></li>
<li><a href="#">Giải quyết tranh chấp


</a></li>
       </ul></p>
     </div>
      </div>
		<div class="rsingle span_1_of_single">
				<h5 class="m_1">Danh Mục Sản Phẩm</h5>
					<select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Mỹ Phẩm</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
					</select>
					<select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Nước Hoa</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
					</select>
					<ul class="kids">
						<li><a href="#">Chăm Sóc Da</a></li>
						<li class="last"><a href="#">Khác</a></li>
					</ul>
                   <section  class="sky-form">
					<h4>Sản Phẩm Đã Xem</h4>
                    <div class="row row1 scroll-pane">
                      <div class="col col-4" style="width:200px">
                        <?php 
					$product_qty=1;
					$product_id=$_GET['product_id'];
				include('../model/viewed_product_db.php');					
				view_add_item($product_id, $product_qty);
				$view = view_get_items();	
				foreach ($view as $product_id => $item) :?>
				<a href="<?php echo $app_path;?>catalog?product_id=<?php echo $item['id'];?>">
					<img src="<?php echo $app_path; ?>images/product/<?php echo $item['img']?>" 
					width="100" height="100" style="margin:0px 10px 15px 0px; float:left;"/>
				</a>
				<span style="color:#4CB1CA;font-size:12px"><?php echo $item['name']?></span>
				<span style="color:#555; font-size:10px"><?php echo $item['product_code']?></span>

				</br>
				<div style="clear:both"></div>
  <?php endforeach; ?>
				
                      </div>
                    
                    </div>
                </section>
		       <section  class="sky-form">
		  <h4>Thương Hiệu</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>John Jacobs</label>
						  </div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tag Heuer</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Lee Cooper</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Mikli</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S Oliver</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Hackett</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Killer</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>IDEE</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Vogue</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gunnar</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Accu Reader</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>CAT</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Excellent</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Feelgood</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Odysey</label>
							  <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Animal</label>	
							</div>
						</div>
		       </section>
		       <section  class="sky-form">
					<h4>Thể Loại</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Pilot</label>
						  </div>
							<div class="col col-4">
							    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rectangle</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Square</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Round</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Others</label>
						    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Cat Eyes</label>
							  <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wrap Around</label>
						    </div>
						</div>
		       </section>
		     
		       <section  class="sky-form">
					<h4>&nbsp;</h4>
						
		       </section>
	       <script src="<?php echo $app_path; ?>js/jquery.easydropdown.js"></script> 
		      </div><div class="clear"></div>
			</div>
			 <div class="clear"></div>
		   </div>
		</div>		