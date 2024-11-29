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

<?php
    $u_id=$_SESSION['usur_id'];
    $select_usur_data="SELECT * from usur_info where u_id='$u_id'";
    if($con_select_usur=$db->select($select_usur_data)){
      while($result_usur_info=$con_select_usur->fetch_assoc()){
  
 ?>

          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default">

              <div class="panel-heading"><h2>Mon Compte</h2></div>
              <div class="panel-body">
                <style>
                  .table-striped tr th:first-child{
                    width: 40%;
                  }
                </style>
                <table class="table table-striped table-bordered">
                  <tr class="">
                    <th style="padding: 15px">Id</th>
                    <th style="padding: 15px"><?php echo $result_usur_info['u_id'];?></th>
                  </tr>
                  <tr>
                    <td style="padding: 15px">Nom</td>
                    <td style="padding: 15px"><?php echo $result_usur_info['u_name']?></td>
                  </tr>
                  <tr>
                    <td style="padding: 15px">Date de naissance</td>
                    <td style="padding: 15px"><?php echo $result_usur_info['d_birth']?></td>
                  </tr>
                  
                  <tr>
                    <td style="padding: 15px">Numero de telephone</td>
                    <td style="padding: 15px"><?php echo $result_usur_info['m_number']?></td>
                  </tr>
                  <tr>
                    <td style="padding: 15px">Ville</td>
                    <td style="padding: 15px"><?php echo $result_usur_info['city']?></td>
                  </tr>
                  <tr>
                    <td style="padding: 15px">Code Zip</td>
                    <td style="padding: 15px"><?php echo $result_usur_info['zip_code']?></td>
                  </tr>
                  <tr>
                    <td style="padding: 15px">Address</td>
                    <td style="padding: 15px"><?php echo $result_usur_info['address']?></td>
                  </tr>
                  <tr>
                    <td style="padding: 15px">Blocked?</td>
                    <td style="padding: 15px"><?php echo $result_usur_info['block']?></td>
                  </tr>
                </table>
                <a class="btn btn-primary" href="seeting.php">Modifier les données personnelles</a>
              </div>
          </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default">

              <div class="panel-heading"><h2>coordonnées de l'utilisateur</h2></div>
              <div class="panel-body">
                 <table class="table table-striped table-bordered">
                  <tr class="">
                    <td style="padding: 15px">email</td>
                    <td style="padding: 15px"><?php echo $result_usur_info['email']?></td>
                  </tr>
                  <tr>
                    <td style="padding: 15px">mot de passe</td>
                    <td style="padding: 15px"><?php echo $result_usur_info['password']?><span class="pull-right"></span></td>
                  </tr>
                </table>
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
      </div>
    </div>
 
    <!-- FOOTER -->
    <?php include "inc/footer.php";?>