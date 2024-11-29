 <?php 
  if(!isset($_SESSION['usur_id'])){?>
<script>
  location = "log.php";
</script>
  <?php  }
 ?>

 <?php
 if(isset($_GET['log_id'])){
  session_destroy();?>
  <script>
  location = "log.php";
</script>
 <?php }

 ?>

<?php
    $u_id=$_SESSION['usur_id'];
    $select_usur_data="SELECT * from usur_info where u_id='$u_id'";
    if($con_select_usur=$db->select($select_usur_data)){
      while($result_usur_info=$con_select_usur->fetch_assoc()){
      }
    }
 ?>
 <div class="panel panel-default">
              <div class="panel-heading"><h2>Bonjour!</h2></div>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item"><a href="profile.php" style="display: block;">tableau de bord</a></li>
              <li class="list-group-item"><a href="order_list.php" style="display: block;">liste des commandes</a></li>
              <li class="list-group-item"><a href="sell_product.php" style="display: block;">Produits vendus</a></li>
               <li class="list-group-item"><a href="usur_account.php" style="display: block;">Mon compte</a></li>
              <li class="list-group-item"><a href="upload_list.php" style="display: block;">Produits ajouté</a></li>
              <li class="list-group-item"><a href="buy_list.php" style="display: block;">Produits achetés</a></li>
              <li class="list-group-item"><a href="upload_painding.php" style="display: block;">Produits en cours de traitement</a></li>
              <li class="list-group-item"><a href="usur_add_product.php" style="display: block;">Ajouter un Produit</a></li>
              <li class="list-group-item"><a href="seeting.php" style="display: block;">Paramétres</a></li>
              <li class="list-group-item"><a href="?log_id=<?php echo $_SESSION['usur_id']?>" style="display: block;">Déconnexion</a></li>
    
            </ul>
          </div>
        </div>