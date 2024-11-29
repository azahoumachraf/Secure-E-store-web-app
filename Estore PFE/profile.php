<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
   <?php include 'inc/link.php';?>
  </head>
  <body class="cnt-home">
    <!--  HEADER  -->
    <header class="header-style-1">
      <?php include 'inc/search.php';?>
      <!--  NAVBAR -->
      <?php include 'inc/nav.php';?>
    </header>

    <!--  HEADER : END  -->
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
      <div class="container">
        <div class="row">
          <!-- SIDEBAR  -->	
        <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
          <?php include 'inc/dashbord_sideber.php';?>
        </div>
  
        <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default">

              <div class="panel-heading"><h2><a href="upload_list.php">les produits ajoutés</a></h2></div>
              <div class="panel-body">
                <table class="table table-striped table-bordered">
                  <tr class="">
    
                    <th style="padding: 15px">Quantité</th>
                    <th style="padding: 15px">Prix</th>
                  </tr>
                <?php
                  $author_id=$_SESSION['usur_id'];
                  $select_painding_product="SELECT * from product_list where author_id='$author_id' && is_approved=1";
                  if($painding_select_con=$db->select($select_painding_product)){
                    $i=0;
                    $price=0;
                    while ($result_painding=$painding_select_con->fetch_assoc()) {
                      $price=$result_painding['p_price']+$price;
                      $i++;
                    }
                  ?>
                  <tr>
                    <td style="padding: 15px"><?php echo $i;?></td>
                    <td style="padding: 15px">dh<?php echo $price?></td>
                  </tr>
                <?php }?>
                </table>
              </div>
          </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default">

              <div class="panel-heading"><h2><a href="buy_list.php">produits achetés</a></h2></div>
              <div class="panel-body">
                 <table class="table table-striped table-bordered">
                  <tr class="">
 
                    <th style="padding: 15px">Total des commandes</th>
                    <th style="padding: 15px">Total des produits</th>
                    <th style="padding: 15px">prix total</th>
                  </tr>
                 <?php 
                $u_id=$_SESSION['usur_id'];
                  $new_product="SELECT * from card where u_id='$u_id' && compleate_order=1";
                  if($con_new_product=$db->select($new_product)){
                    $i=0;
                    $price=0;
                    $quentity=0;
                    while ($new_product_select=$con_new_product->fetch_assoc()) {
                      $price= ($new_product_select['quantity']*$new_product_select['p_price'])+$price;
                      $i++;
                      $quentity=$new_product_select['quantity']+$quentity;
                    }
                ?>
                  <tr>
                    <td style="padding: 15px"><?php echo $i;?></td>
                    <td style="padding: 15px"><?php echo $quentity;?></td>
                    <td style="padding: 15px">dh<?php echo $price ?></td>
                  </tr>
                <?php }?>
                </table>
              </div>
          </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default">

              <div class="panel-heading"><h2><a href="order_list.php">liste des commandes</a></h2></div>
              <div class="panel-body">
                 <table class="table table-striped table-bordered">
                  <tr class="">
 
                    <th style="padding: 15px">Total des commandes</th>
                    <th style="padding: 15px">Total des produits</th>
                    <th style="padding: 15px">prix total</th>
                  </tr>
                 <?php 
                $u_id=$_SESSION['usur_id'];
                  $new_product="SELECT * from card where author_id='$u_id' && compleate_order=0 && u_id!=0";
                  if($con_new_product=$db->select($new_product)){
                    $i=0;
                    $price=0;
                    $quentity=0;
                    while ($new_product_select=$con_new_product->fetch_assoc()) {
                      $price= ($new_product_select['quantity']*$new_product_select['p_price'])+$price;
                      $i++;
                      $quentity=$new_product_select['quantity']+$quentity;
                    }
                ?>
                  <tr>
                    <td style="padding: 15px"><?php echo $i;?></td>
                    <td style="padding: 15px"><?php echo $quentity ?></td>
                    <td style="padding: 15px">dh<?php echo $price ?></td>
                  </tr>
                <?php }?>
                </table>
              </div>
          </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default">

              <div class="panel-heading"><h2><a href="sell_product.php">produits vendus</a></h2></div>
              <div class="panel-body">
                 <table class="table table-striped table-bordered">
                  <tr class="">
 
                    <th style="padding: 15px">Total du commandes</th>
                    <th style="padding: 15px">Total des produits</th>
                    <th style="padding: 15px">prix total</th>
                  </tr>
                 <?php 
                $u_id=$_SESSION['usur_id'];
                  $new_product="SELECT * from card where author_id='$u_id' && compleate_order=1";
                  if($con_new_product=$db->select($new_product)){
                    $i=0;
                    $price=0;
                    $quentity=0;
                    while ($new_product_select=$con_new_product->fetch_assoc()) {
                      $price= ($new_product_select['quantity']*$new_product_select['p_price'])+$price;
                      $i++;
                      $quentity=$new_product_select['quantity']+$quentity;
                    }
                ?>
                  <tr>
                    <td style="padding: 15px"><?php echo $i;?></td>
                    <td style="padding: 15px"><?php echo $quentity ?></td>
                    <td style="padding: 15px">dh<?php echo $price ?></td>
                  </tr>
                <?php }?>
                </table>
              </div>
          </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default">

              <div class="panel-heading"><h2 class="pull-center">Mon Compte</h2></div>
              <div class="panel-body"><a href="usur_account.php" class="btn btn-success">Vos informations personnelles</a></div>
          </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default">

              <div class="panel-heading"><h2>Ajouter un produit</h2></div>
              <div class="panel-body"><a href="usur_add_product.php" class="btn btn-success">Ajouter un produit</a></div>
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