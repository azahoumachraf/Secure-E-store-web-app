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
    <?php include 'inc/under_menu.php';?>
 
<style>
  .product_box{
   padding: 10px 2px 3px 3px; 
   padding: 7px;
   margin-bottom: 10px;
  }
  .product_box:hover{
  box-shadow: 1px 0px 10px #0a0909;
  }
  .product_box img{
    height: 300px;
    width: 280px;    
    filter: alpha(opacity=50);
    cursor: pointer;
  }

  .product_box img:hover{
    opacity: 0.9;
  }
  .product_box h4{
     padding: 5px; 
     background: #fff; 
     font-size: 20px;
     text-align:center;
     font-weight: bold;
    
  }
  
  .product_box p{

font-family: SolaimanLipi,helvetica,verdana;
font-size: 14px;
margin-top: 3px;
text-align: center;

  }
  .product_box h2 a{
    color: #fff;
  }
  .product_box h2 a:hover{
    color: #232F3E;
  }
</style>

<div class="container">
  <div class="row">
    <?php if (isset($_GET['res_search'])) {
            $p_cat=$_GET['res_search'];
            $select_p = "SELECT * FROM product_list where p_name LIKE '%$p_cat%' || p_brand LIKE '%$p_cat%' || sub_category LIKE '%$p_cat%' || p_des LIKE '%$p_cat%' order by p_id desc limit 60";
            $insert_single_p = $db->select($select_p);
            if ($insert_single_p) {
              while ($result_single_p = $insert_single_p->fetch_assoc()) {

    ?>
    <div class="col-md-3 product_box">
      <a href="product_details.php?p_id=<?php echo $result_single_p['p_id'];?>"><img src="rw_admin/<?php echo $result_single_p['p_img']?>"></a>
      <a href="product_details.php?p_id=<?php echo $result_single_p['p_id'];?>"><p><?php echo $result_single_p['p_name']?></p></a>
      
      <h4>dh<?php echo $result_single_p['p_price']?></h4>
       
    </div>
 <?php }}}?>

  <?php if (isset($_GET['sub_cat'])) {
            $sub_category=$_GET['sub_cat'];
            $select_p = "SELECT * FROM product_list where sub_category='$sub_category' order by p_id desc limit 60";
            $insert_single_p = $db->select($select_p);
            if ($insert_single_p) {
              while ($result_single_p = $insert_single_p->fetch_assoc()) {

    ?>
    <div class="col-md-3 product_box">
      <a href="product_details.php?p_id=<?php echo $result_single_p['p_id'];?>"><img src="rw_admin/<?php echo $result_single_p['p_img']?>"></a>
      <a href="product_details.php?p_id=<?php echo $result_single_p['p_id'];?>"><p><?php echo $result_single_p['p_name']?></p></a>
      
      <h4>dh<?php echo $result_single_p['p_price']?></h4>
       
    </div>
 <?php }}}?>
  </div>
 
  </div>
</div>






<?php include "inc/footer.php";?>