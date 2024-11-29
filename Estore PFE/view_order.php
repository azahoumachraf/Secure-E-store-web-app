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

              <div class="panel-heading"><h2> détails du commande</h2></div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                    <?php
                      if(isset($_GET['u_id'])){
                        $u_id=$_GET['u_id'];
                        $confirm_id=$_GET['confirm_id'];
                        $date=$_GET['date'];
                        $select_usur_info="SELECT * from usur_info where u_id='$u_id'";
                   if($conn_usur_info=$db->select($select_usur_info)){
                    while($result_usur_info=$conn_usur_info->fetch_assoc()){


                 
                      ?>
                      <style>
                        .inform{
                          font-family: 'calibri';
                          font-size: 25px;
                        }
                      </style>
                      <table class="inform">
                        <tr>
                          <td >Nom</td>
                          <td>:</td>
                          <td><?php echo $result_usur_info['u_name']?></td>
                        </tr>
                        <tr>
                          <td>Numéro de téléphone</td>
                          <td>:</td>
                          <td><?php echo $result_usur_info['m_number']?></td>
                        </tr>
                        <tr>
                          <td>e-mail</td>
                          <td>:</td>
                          <td><?php echo $result_usur_info['email']?></td>
                        </tr>
                        <!--
                        <tr>
                          <td>Gender</td>
                          <td>:</td>
                          <td><?php echo $result_usur_info['gender']?></td>
                        </tr> -->
                        <tr>
                          <td>Zip code</td>
                          <td>:</td>
                          <td><?php echo $result_usur_info['zip_code']?></td>
                        </tr><!--
                        <tr>
                          <td>Ville</td>
                          <td>:</td>
                          <td><?php echo $result_usur_info['city']?></td>
                        </tr>
                      -->
                        <tr>
                          <td>Address</td>
                          <td>:</td>
                          <td><?php echo $result_usur_info['address']?></td>
                        </tr>

                      </table>
                    <?php }}}?>
                  </div>
                  <div class="col-md-6">
                     <table class="table table-striped table-bordered text-center">
                        <tr>
                          <td style=" border:1px solid">Description</td>
                          <td style=" border:1px solid">quantité</td>
                          <td colspan="2" style=" border:1px solid">Prix Total</td>
                        </tr>
                        <?php
                            $admin_id=$_SESSION['usur_id'];
                      $select_order="SELECT * from card where u_id='$u_id' && compleate_order='$confirm_id' && c_date='$date' && author_id='$admin_id'";

                      if($con_order=$db->select($select_order)){
                        $sub_total=0;
                        $vat=0;
                        $i=0;
                   while ($result_order=$con_order->fetch_assoc()){
                    $sub_total=$sub_total+($result_order['p_price']*$result_order['quantity']);
                     $i++;

                 
                    ?>
                        <tr>
                          <td style="padding: 10px; border:1px solid"><?php echo $result_order['p_name'];?></td>
                          <td style="padding: 10px; border:1px solid"><?php echo $result_order['quantity'];?></td>
                          <td style="padding: 10px; border:1px solid"><?php echo $result_order['p_price'];?>DH</td>
                          <td style="padding: 10px; border:1px solid"><?php echo $result_order['p_price']*$result_order['quantity'];?>DH</td>
                        </tr>
                      <?php }}?> 
                        <tr>
                          <td colspan="3" style="padding: 10px; border:1px solid">Total</td>
                          <td style="padding: 10px; border:1px solid"><?php echo $sub_total?>DH</td>
                        </tr>
                      </table>
                        <a href="print.php?u_id=<?php echo $u_id;?>?&& confirm_id=<?php echo $confirm_id?>?&& date=<?php echo $date?>">Reçu de paiement</a>
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
      </div>
    </div>
 
    <!-- FOOTER -->
    <?php include "inc/footer.php";?>