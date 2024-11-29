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

               <?php if(isset($_GET['remove_id'])){
                 $p_id=$_GET['remove_id'];
              $delete_query = "DELETE from product_list where p_id='$p_id'";
              if($db->delete($delete_query)){?>
               <div class="alert alert-success">
                <strong>Success!</strong>Votre produit a été supprimé!.
              </div>  
            <?php  }
              }
                ?>

              <div class="panel panel-default">

              <div class="panel-heading"><h2>Produits en cours de l'examination</h2></div>
              <div class="panel-body">
                <table class="table table-striped table-bordered">
                  <tr class="">
                    <th style="padding: 15px">Si.</th>
                    <th style="padding: 15px">Categories</th>
                    <th style="padding: 15px">Date</th>
                    <th style="padding: 15px">Prix</th>
                    <th style="padding: 15px">Action</th>
                  </tr>
                  <?php
                  $author_id=$_SESSION['usur_id'];
                  $select_painding_product="SELECT * from product_list where author_id='$author_id' && is_approved=0";
                  if($painding_select_con=$db->select($select_painding_product)){
                    $i=0;
                    while ($result_painding=$painding_select_con->fetch_assoc()) {
                      $i++
                  ?>
                  <tr>
                    <td style="padding: 15px"><?php echo $i;?></td>
                    <td style="padding: 15px"><?php echo $result_painding['p_cat']?></td>
                    <td style="padding: 15px"><?php echo $result_painding['upload_date']?></td>
                    <td style="padding: 15px"><?php echo $result_painding['p_price']?>DH</td>
                    <td style="padding: 15px"><a href="edit_product.php?edit_id=<?php echo $result_painding['p_id'] ?>" class="">Modifier</a>||<a href="?remove_id=<?php echo $result_painding['p_id'] ?>" class=""> Supprimer</a></td>
                  </tr>
                <?php }}?>
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