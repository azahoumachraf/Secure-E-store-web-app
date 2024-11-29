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
              <style>
                  .table-striped tr th:first-child{
                    width: 40%;
                  }
                  .table-striped input, select{
                    padding: 10px;
                    margin:5px 0px;
                  }
                </style>
              <?php
                if (isset($_POST['update_profile'])) {
                   $u_name   =$_POST['u_name'];
                   $d_birth  =$_POST['d_birth'];
                   $m_number =$_POST['m_number'];
                   $city     =$_POST['city'];
                   $zip_code =$_POST['zip_code'];
                   $address  =$_POST['address'];
                   $update_query = "UPDATE usur_info SET u_name = '$u_name', d_birth = '$d_birth', m_number = '$m_number', city = '$city', zip_code = '$zip_code', address = '$address' WHERE u_id = $u_id";
                }
              ?>
              <form action="" method="POST">
              <div class="panel-body">
                <table class="table table-striped table-bordered">
                  <tr>
                    <td style="padding: 15px"><input name="u_name" class="form-control" type="text" placeholder="My Name" value="<?php echo $result_usur_info['u_name']?>"></td>
                  </tr>
                  <tr>
                    <td style="padding: 15px"><input name="d_birth" class="form-control" type="date" value="<?php echo $result_usur_info['d_birth']?>"></td>
                    
                  </tr>
                  <tr>
                    <td style="padding: 15px"><input name="m_number" class="form-control" type="text" placeholder="My Mobile Number"value="<?php echo $result_usur_info['m_number']?>"></td>
                  </tr>
                  <tr>
                   <td style="padding: 15px"><input name="city"class="form-control" type="text" placeholder="My City" value="<?php echo $result_usur_info['city']?>"></td>
                  </tr>
                  <tr>
                    <td style="padding: 15px"><input name="zip_code" class="form-control" type="text" placeholder="Zip Code"  value="<?php echo $result_usur_info['zip_code']?>"></td>
                  </tr>
                  <tr>
                     <td style="padding: 15px"><input name="address" class="form-control" type="text" placeholder="address"  value="<?php echo $result_usur_info['address']?>"></td>
              
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input class="btn btn-primary" type="submit" value="Update Profile" name="update_profile"></td>
                  </tr>
                </table>
              </div>
              </form>
          </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default">

              <div class="panel-heading"><h2>données d'utilisateur</h2></div>
              <div class="panel-body">
                 <table class="table table-striped table-bordered">
                  <tr class="">
                     <td style="padding: 15px"><input class="form-control" type="email" placeholder="email" value="<?php echo $result_usur_info['email']?>"></td>
                  </tr>
                  <tr>
                    <td style="padding: 15px"><input class="form-control" type="password" placeholder=""></td>
                  </tr>
                  <tr>
                    <td style="padding: 15px"><input class="form-control" type="password" placeholder="New Password"></td>
                  </tr>
                  <tr>
                    <td style="padding: 15px"><input class="form-control" type="password" placeholder="Confirm Password"></td>
                  </tr>
                </table>
                <a class="btn btn-primary" href="">Mettre à jour l'e-mail ou le mot de passe</a>
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