<?php include('../view/header.php'); ?>
    <!-- display product -->
   
   
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

<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
          <div class="mens-toolbar">
              <div class="sort">
               	<div class="sort-by">
		           
               </div>
    		</div>
        <div class="pager">   
        	<div class="limiter visible-desktop">
           <form action="." method="POST">
                    <input type="text"  name="key"  placeholder="Search"   style="outline:none;padding-top:1px;font-size: 0.85em"/> 
                    
                    <select name="cate">
    <option value="0">Chọn danh mục</option>
    <option value="1">Mỹ Phẩm</option>
    <option value="2">Nước Hoa</option>
    <option value="3">Chăm Sóc Da</option>
</select> <input type="submit" name="search" value="Tìm Kiếm" class="btnsearch"/>
                    </form>   
             </div>
       		<ul class="dc_pagination dc_paginationA dc_paginationA06">
			   
		  	</ul>
	   		<div class="clear"></div>
    	</div>
     	<div class="clear"></div>
        </div>
        	<?php //$category=getcategory($category_id); ?>
		  	<strong><h2 class="head">Tìm thấy <?php echo count($search);?> sản phẩm </h2></strong>
           <div class="toogle">
     	<h3 class="m_3">Rất tiếc, chúng tôi không tìm thấy kết quả tìm kiếm nào phù hợp với từ khóa của bạn</h3>
     	<p class="m_text">Hãy thử lại với các cách sau : <ul class="delivery-list">
		 <li>Kiểm tra lại chuyên mục bạn chọn tương ứng với từ khóa bạn tìm</li>
          <li>Kiểm tra lại từ khóa có thể bạn đã gõ sai</li>
			<li>Nếu vẫn không tìm thấy, hãy thử 1 từ khóa khác.</li>
			<li>Dùng từ khóa ngắn hơn và đơn giản hơn.</li>
			<li>Vẫn không tìm thấy sản phẩm bạn muốn. Hãy liên hệ qua hotline : <span style="color:red">0968347557</span> .</br>
            Chúng tôi sẽ liên lạc với bạn thông báo về tình trạng sản phẩm này.</li>
			
       </ul></p>
     </div>
      		  <?php 
				
				foreach ($search as $searchs){
					
					$img=$searchs['img'];
					$price=$searchs['price'];
					$name=$searchs['product_name'];
					$new=$searchs['new'];
				
					?>
			 <div class="col_1_of_3 span_1_of_3"> 
             
			   <a href="?product_id=<?php echo
                           $searchs['id']; ?>">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo $app_path?>images/product/<?php echo $img; ?>" alt=" Sản Phẩm Mỹ Phẩm" width="210" height="200"/>
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
				</div>	<?php 
				
				
				}?>
				<div class="clear"></div>
								 
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
							<div class="col col-4">
				<?php 
				include('../model/viewed_product_db.php');					
				$view = view_get_items();	
				foreach ($view as $product_id => $item) :?>
				<a href="<?php echo $app_path;?>/catalog?product_id=<?php echo $item['id'];?>">
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
					<h4>Thương Hiệu</h4>
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
	
		      </div ><div class="clear"></div>
			</div>
			 <div class="clear"></div>
		   </div>
		</div>
	
   
   

<?php include('../view/footer.php'); ?>