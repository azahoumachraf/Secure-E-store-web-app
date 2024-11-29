<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include 'inc/link.php'?>
  </head>
  <body class="cnt-home">
    <!--  HEADER  -->
    <header class="header-style-1">
      <?php include 'inc/search.php'?>
      <!--  NAVBAR -->
      <?php include 'inc/nav.php'?>
    </header>
    <!--  HEADER : END  -->
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
      <div class="container">
        <div class="row">
          <!-- SIDEBAR  -->	
          <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
            <!--  TOP NAVIGATION  --> 
            <?php include 'inc/sideber.php'?>
          </div>
          <!-- SIDEBAR : END  -->
          <!-- CONTENT -->
          <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
            <!-- SECTION – HERO -->
            <?php include 'inc/hero_section.php';?>
            <!--  SCROLL TABS  -->
          </div>
        </div>
      </div>
    </div>
    <div class="body-content" id="top-banner-and-menu">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
            <div id="product-tabs-slider" class="scroll-tabs wow fadeInUp">
              <div class="more-info-tab clearfix ">
                <h3 class="new-product-title pull-left">produits disponible</h3>
                <!-- /.nav-tabs -->
              </div>
              <div class="tab-content outer-top-xs">
                <div class="tab-pane in active" id="all">
                  <div class="product-slider">
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                    <?php 
                      $new_product="SELECT * from product_list order by p_id DESC Limit 10";
                      if($con_new_product=$db->select($new_product)){
                        while ($new_product_select=$con_new_product->fetch_assoc()) {
                          # code...
                    ?>
                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="product_details.php?p_id=<?php echo $new_product_select['p_id'];?>"><img src="rw_admin/<?php echo $new_product_select['p_img'];?>" alt=""></a>
                              </div>
                             
                            </div>
                            <div class="product-info text-left">
                              <h3 class="name"><a href="product_details.php?p_id=<?php echo $new_product_select['p_id'];?>"><?php echo $new_product_select['p_name'];?></a></h3>
                              <div class="description"></div>
                              <div class="product-price">	
                                <span class="price">
                                <?php echo $new_product_select['p_price'];?>DH</span>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php }}?>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php
            $query = "SELECT * FROM category order by id Asc";
            $insert_category = $db->select($query);
            if ($insert_category) {
            while ( $result = $insert_category->fetch_assoc()) {
              $category=$result['categorys'];

              $single_product = "SELECT * FROM product_list where p_cat='$category' order by p_id desc limit 10";
              $insert_single_product = $db->select($single_product);
              if ($insert_single_product) {?> 
 
            <div id="product-tabs-slider" class="scroll-tabs wow fadeInUp">
              <div class="more-info-tab clearfix ">
                <h3 class="new-product-title pull-left"><?php echo $category ?></h3>
                <!-- /.nav-tabs -->
              </div>
              <div class="tab-content outer-top-xs">
                <div class="tab-pane in active" id="all">
                  <div class="product-slider">
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                    <?php
                        while ($result_single_product = $insert_single_product->fetch_assoc()) {
                      ?>
                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="product_details.php?p_id=<?php echo $result_single_product['p_id'];?>"><img  src="rw_admin/<?php echo $result_single_product['p_img'];?>" alt=""></a>
                              </div>
                             
                            </div>
                            <div class="product-info text-left">
                              <h3 class="name"><a href="product_details.php?p_id=<?php echo $result_single_product['p_id'];?>"><?php echo $result_single_product['p_name'];?></a></h3>
                              <div class="description"></div>
                              <div class="product-price">	
                                <span class="price">
                                <?php echo $result_single_product['p_price'];?>DH
                                </span>              
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php }?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php }}} ?>
<!--scroll bar is start here-->
<!--scroll bar is end here-->
         
       

          </div>
        </div>
                
      </div>
    </div>


    <!-- FOOTER -->
    <?php include "inc/footer.php";?>