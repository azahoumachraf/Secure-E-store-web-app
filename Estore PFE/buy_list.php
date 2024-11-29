<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
   <?php include 'inc/link.php'?>
  </head>
  <body class="cnt-home">
    <!--  HEADER  -->
    <header class="header-style-1">
      <?php include 'inc/search.php'?>
      <!--  NAVBAR -->
      <?php include 'inc/nav.php'?>
    </header>
    <?php
      if (isset($_GET['remove_buy_product'])) {
          $card_id=$_GET['remove_buy_product'];
          $update_buy="UPDATE card set compleate_order=2 where card_id='$card_id'";
          $db->update($update_buy);
      }
    ?>

    <!--  HEADER : END  -->
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
      <div class="container">
        <div class="row">
          <!-- SIDEBAR  -->	
        <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
          <?php echo include 'inc/dashbord_sideber.php';?>
        </div>
  
        <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">

              <div class="panel-heading"><h2>Produits achetés</h2></div>
              <div class="panel-body">
                <table class="table table-striped table-bordered">
                  <tr class="">
                    <th style="padding: 15px">Num.</th>
                    <th style="padding: 15px">Categorie</th>
                    <th style="padding: 15px">Quantité</th>
                    <th style="padding: 15px">Prix</th>
                    <th style="padding: 15px">Date</th>
                    <th style="padding: 15px">Action</th>
                  </tr>
                <?php 
                $u_id=$_SESSION['usur_id'];
                  $new_product="SELECT * from card where u_id='$u_id' && compleate_order=1 order by p_id desc";
                  if($con_new_product=$db->select($new_product)){
                    $i=0;
                    while ($new_product_select=$con_new_product->fetch_assoc()) {
                      $i++;
                ?>

                  <tr>
                    <td style="padding: 15px"><?php echo $i?></td>
                    <td style="padding: 15px"><?php echo $new_product_select['p_name']?></td>
                    <td style="padding: 15px"><?php echo $new_product_select['quantity'];?></td>
                    <td style="padding: 15px"><?php echo $new_product_select['p_price'];?></td>
                    <td style="padding: 15px"><?php echo $new_product_select['c_date'];?></td>
                    <td style="padding: 15px"><a href="?remove_buy_product=<?php echo $new_product_select['card_id'];?>" class=""><span>Supprimer</span></a></td>
                  </tr>
                <?php }} ?>
                </table>
              </div>
          </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>          
      </div>
    </div>
 
    <!-- FOOTER -->
    <?php include "inc/footer.php";?>