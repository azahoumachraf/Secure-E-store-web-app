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
  if (isset($_GET['del_order_id']) && isset($_GET['showdate'])) {
    $u_id=$_GET['del_order_id'];
    $showdate=$_GET['showdate'];
     
     $delete_table="DELETE from card where u_id='$u_id' && c_date='$showdate'";
     $db->delete($delete_table);
     
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

              <div class="panel-heading"><h2>liste des commandes</h2></div>
              <div class="panel-body">
                <table class="table table-striped table-bordered">
                  <tr class="">
                    <th>Num.</th>
                    <th>id d'acheteur</th>
                    <th>Totale du commande</th>
                    <th>prix total</th>
                    <th>Action</th>
                  </tr>

                <?php
            $admin_id=$_SESSION['usur_id'];
            $select_email="SELECT Distinct u_id, c_date from card where u_id!=0 && compleate_order=0 && author_id='$admin_id'";
                   if($conn_data=$db->select($select_email)){
                    $i=0;
                    while($result_final=$conn_data->fetch_assoc()){
                      $show_date=$result_final['c_date'];
                      $i++;

                      $usur_id=$result_final['u_id'];
                      $c_date=$result_final['c_date'];
                      $select_order="SELECT * from card where u_id='$usur_id' && compleate_order=0 && c_date='$show_date' && author_id='$admin_id'";
                      if($con_order=$db->select($select_order)){
                        $j=0;
                        $total_price=0;
                      while ($result_order=$con_order->fetch_assoc()){
                        $j=$j+1;
                        $total_price=$total_price+($result_order['p_price']*$result_order['quantity']);
                        }
                      }
            ?>
                  <tr class="">
                  <td><?php echo $i;?></td>
                  <td><?php echo $usur_id;?></td>
 
                  <td><?php echo $j;?></td>
                  <td>dh<?php echo $total_price;?></td>
                  <td><a href="view_order.php?u_id=<?php echo $usur_id;?>?&& confirm_id=0?&& date=<?php echo $c_date?>">voir</a> || <a href="?del_order_id=<?php echo $usur_id;?>?&showdate=<?php echo $show_date;?>">Supprimer</a></td>
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