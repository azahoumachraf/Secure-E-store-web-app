
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>paiement</title>

<?php include 'inc/link.php'?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style_form.css">
<style>
  
  .close_alert p{
    position: relative;

  }
  .close_alert p i{
    position: absolute;
    right: 0px;
    top: -15px;
  }
</style>
</head>

<body>

<div class="row">
  <div class="col-75">
    <div class="container">


<?php
    $u_id=$_SESSION['usur_id'];
    $select_usur_data="SELECT * from usur_info where u_id='$u_id'";
    if($con_select_usur=$db->select($select_usur_data)){
      while($result_usur_info=$con_select_usur->fetch_assoc()){
  
 ?>
      <form method="post">

        <div class="row">
          <div class="col-50">
            <h3>Vos coordonnées</h3>
            <label for="fname"><i class="fa fa-user"></i>Nom d'utilisateur</label>
            <input type="text" id="fname" name="firstname" placeholder="<?php echo $result_usur_info['u_name'];?>" readonly>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="<?php echo $result_usur_info['email'];?>" readonly>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="<?php echo $result_usur_info['address'];?>" readonly>
            <label for="city"><i class="fa fa-institution"></i>Numéro de téléphone</label>
            <input type="text" id="city" name="city" placeholder="<?php echo $result_usur_info['m_number']?>" readonly>

            <div class="row">
              <div class="col-50">
                <label for="state">Ville</label>
                <input type="text" id="state" name="state" placeholder="<?php echo $result_usur_info['city']?>" readonly>
              </div>
              <div class="col-50">
                <label for="zip">Zip code<label>
                <input type="text" id="zip" name="zip" placeholder="<?php echo $result_usur_info['zip_code']?>" readonly>
              </div>
            </div>
          </div>

         <?php }}?>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Type de cartes acceptées</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label>Sélectionner une carte</label>

            <select name="type_carte" id="" required>
                 <option value="">Choisir une carte</option>
                 <option value="">Visa</option>
                 <option value="">Master card</option>
                 <option value="">CMI</option>
                 
            </select>

            <label for="cname">Nom sur carte</label>
            <input type="text" id="cname" name="nom_sur_carte" required>
            <label for="ccnum">Numéro de carte bancaire</label>
            <input type="text" id="ccnum" name="numero_carte" maxlength="16" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Mois d'expiration</label>
            <input type="text" id="expmonth" name="mois_exp" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Année d'expiration</label>
                <input type="text" id="expyear" name="annee_exp" maxlength="4"  required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="CVV" maxlength="3"   required>
              </div>
            </div>
          </div>



        </div>
      
       <button type="submit" name="card_info" class="btn"><a style="color: #fff;" >Payer</a></button>
      </form>
    </div>
  </div>
  <?php if (isset($_POST['card_info'])) {
              $type_carte     =$_POST['type_carte'];
              $nom_sur_carte     =$_POST['nom_sur_carte'];
              $numero_carte   =$_POST['numero_carte'];
              $mois_exp    =$_POST['mois_exp'];
              $annee_exp   =$_POST['annee_exp'];
              $CVV      =$_POST['CVV'];

              $insert_usur="INSERT into card_info(type_carte,nom_sur_carte,numero_carte,mois_exp,annee_exp,CVV) values('$type_carte','$nom_sur_carte','$numero_carte','$mois_exp','$annee_exp','$CVV')";


              if($db->insert($insert_usur)){
                $compleate_order="UPDATE card set u_id='$u_id' where buy_usur_id='$u_id'";
           if($db->update($compleate_order)){?>
            <div class="alert alert-success close_alert" id="alert">
              <?php echo 'Your Order success'?></a><p><i class="glyphicon glyphicon-remove" id="close" onclick="aleart()"></i></p>
            </div>
        <?php } 
    
              }}
                  
            ?>

</div>
</body>
</html>