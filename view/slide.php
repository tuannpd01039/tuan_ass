 <!-- start slider -->
    <div id="fwslider">
    <?php 
	include('model/product_db.php');
	$banner=get_banner();
			foreach($banner as $banners){
	?>
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="<?php echo $app_path;?>images/logo-banner/<?php echo $banners['banner1'];?>" alt="banner-xixi boutique"/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title"><?php echo $banners['tittle1'];?></h4>
                        <!-- /Text title -->
                        
                        <!-- Text description -->
                        <p class="description"><?php echo $banners['tittle2'];?></p>
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="<?php echo $app_path;?>images/logo-banner/<?php echo $banners['banner2'];?>" alt="banner-xixi boutique"/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title"><?php echo $banners['tittle3'];?></h4>
                        <p class="description"><?php echo $banners['tittle4'];?></p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
    <?php }?>