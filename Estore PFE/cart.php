 <?php include 'lib/Database.php';
    $db = new Database;

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>e-SHOPPER </title>
  <link rel="icon"  type="image" href="assets/images/pig.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    *{
      margin:0;
      padding: 0;
    }
    body{
      font-family: 'calibri';
      box-sizing: border-box;
    }
    .pop_up_sec{
      width: 75%;
      background-color: #ddd;
      margin:0 auto;
    }
    .head_body{
      height: 50px;
      
      background-color: #8a8a8a;
    }
    .img_sec{

    width: 8%;
    padding: 9px;
    border-radius: 1em;
    }
    .title {
         margin-top: -53px;
        margin-left: 241px;
    }
    .title h2{
      color: #fff;

    }
    .mid_box{
    height: 30px;
    background-color: ##8a8a8a;
    width: 700px;
    /* margin: 0 auto; */
    /* padding: 3px; */
    /* margin-top: 16px; */
    padding: 18px;
    margin: 38px;
}
    .right_img{
      margin-top: -12px;
    margin-left: -10px;
    }
    .mid_text{
          margin-top: -43px;
          margin-left: 28px;
    }
    .mid_text h2{
      font-family: 'Open Sans', sans-serif;
      font-size: 23px;
      color: #B2875E;
    }
    .br_dash{
      border: 1px solid #8a8a8a;
    }
    .product_details{
      margin:40px;
      padding: 3px;
    }
    .pro-details{
      margin-top: -17px;
    }
    .pro-details h4{
      color: #343434;
    }
    .cros_sec{
      float: left;
    }
    .cros_sec img{
      height: 19px;
    }
    .prod_pic img{
      height: 90px;
    }
    .pro_cros{
      margin:5px;
    }
    .dil_img{
      float: left;
    }
    .dill{
      margin-left: -60px;
    }
    .footer{
      height: 50px;
      background-color: #8a8a8a;
    }
    .one_step{
      margin-top: 8px;
      margin-left: 120px;
    }
    .two_step{
      margin-top: 8px;
      margin-left: 145px;
    }
     .close_alert p{
    position: relative;

  }
  .close_alert p i{
    position: absolute;
    right: 0px;
    top: -15px;
  }
.btn-danger{
 width: 100%;
    padding: 12px;
    border: none;
    border-radius: 0px;
    margin: 5px 0;
    opacity: 0.85;
    display: inline-block;
    font-size: 17px;
    line-height: 20px;
    text-decoration: none;
    background-color: black;

}
.btn-danger:hover{
background-color: #8a8a8a;
  color: #8a8a8a;

}
.h1, .h2, .h3{
    margin-top: 20px;
    margin-bottom: -20px;
}
.h4, h4 {
    font-size: 25px;
}
    
  </style>
</head>

 <?php if (isset($_GET['cros_id'])) {
    $card_id=$_GET['cros_id'];
    $delete_data="DELETE from card where card_id='$card_id'";
    $db->delete($delete_data);
 }

 ?>

<body>
  <div class="container">
    <div class="pop_up_sec">
      
      <div class="col-md-12 head_body">
        <div class="img_sec">
          <img >
        </div>
        <div class="title">
          <h2>
            Informations sur votre commande
          </h2>
        </div>

      </div>

      <div class="col-md-12 mid_box">
        <div class="right_img">
          <img >
        </div>
        <div class="mid_text">
          <h2></h2>
        </div>
      </div>
      <div class="product_details">
      <div class="row">
        <div class="col-md-1 br_dash">
        </div>
        <div class="col-md-2 pro-details">
          <h4>Produit</h4>
        </div>
        <div class="col-md-1 br_dash">
        </div>
        <div class="col-md-2 pro-details">
          <h4>quantité</h4>
        </div>
        <div class="col-md-1 br_dash">
        </div>
        <div class="col-md-2 pro-details">
          <h4>Prix</h4>
        </div>
        <div class="col-md-1 br_dash">
        </div>
        <div class="col-md-2 pro-details">
          <h4>Total</h4>
        </div>
      </div>
      </div>

      <div class="pro_sec">

  <?php
    $u_id=$_SESSION['usur_id'];
    $select_usur_data="SELECT * from card where u_id=0 && buy_usur_id='$u_id'";
    if($con_select_usur=$db->select($select_usur_data)){
      $i=0;
      while($result_usur_info=$con_select_usur->fetch_assoc()){
        $i=($result_usur_info['p_price']*$result_usur_info['quantity'])+$i;
  
 ?>


        <div class="row">
          <div class="col-md-3">
            <div class="pro_cros">
            <div class="cros_sec">
              <a href="?cros_id=<?php echo $result_usur_info['card_id']?>"><img src="assets/images/close.png"></a>
            </div>
            <div class="prod_pic">
              <img src="rw_admin/<?php echo $result_usur_info['p_image']?>">
            </div>
            </div>
          </div>

          <div class="col-md-3 dill">
            <div class="dil_img">
            </div>
            
          </div>

          <div class="col-md-2">
            <div class="total">
                <h3><?php echo $result_usur_info['quantity'];?></h3>
            </div>
          </div>

          <div class="col-md-3">
            <div class="price">
              <h2><?php echo $result_usur_info['p_price'];?>DH</h2>
            </div>

          </div>
          <div class="col-md-1">
            <div class="result">
              <h2 style="color: #ff1919;"><?php echo $result_usur_info['quantity']*$result_usur_info['p_price'];?>DH</h2>
            </div>
          </div>
        </div>

<?php }}?>
<hr>

<div class="row">
          <div class="col-md-3">
            <div class="pro_cros">
            <div class="cros_sec">
               
            </div>
            <div class="prod_pic">
             
            </div>
            </div>
          </div>

          <div class="col-md-3 dill">
            <div class="dil_img">
         

            </div>
            
          </div>

          <div class="col-md-2">
            <div class="total">
                <h3> </h3>
            </div>
          </div>

          <div class="col-md-3">
            <div class="price">
              <h2>Total:</h2>
            </div>

          </div>
          <div class="col-md-1">
            <div class="result">
              <h2 style="color: #ff1919;"><?php if (isset($i)){
                echo $i."DH"; } ?></h2>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <p></p>



     <div class="footer">
      <div class="row">
        <div class="col-md-6">
          <div class="one_step">
            <p></p>
          </div>
        </div>
        <div class="col-md-6">
          <div>
            <button type="button" class="btn-danger"><a href="paiement_form.php" style="color: #fff;" >Passer au Paiement</a></button>
          </div>
        </div>

      </div>
      </div>


    </div>
  </div>
</body>
<script> 
    function aleart(){
    document.getElementById("alert").style.display = "none";
  }
</script>
</html>