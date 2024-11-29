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
                      <!--  TOP NAVIGATION  -->
            <?php include 'inc/sideber.php'?> 
          </div>
          <!-- SIDEBAR : END  -->

          <!-- CONTENT -->
          <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
            <style>
.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
}

 
.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
    background-color: black;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}
.input-container i{

}
.i-container{
  text-align: right;
  padding-top: 10px;
}
.i-container a{
  color: green;
}
.resister_form{
  padding: 47px;
  max-width: 579px;
  margin: auto;
  background: #fff;
  border: 1px solid #ddd;
}
.close_alert p{
    position: relative;

  }
  .close_alert p i{
    position: absolute;
    right: 0px;
    top: -15px;
  }

   </style>
   <?php 
    if (isset($_POST['login'])) {
       $email=$_POST['email'];
       $psw=$_POST['psw'];

       $select_usur="SELECT * from usur_info where email='$email' && password='$psw'";
       if($conn_usur=$db->select($select_usur)){
          while($usur_result=$conn_usur->fetch_assoc()) {
             $_SESSION['usur_id']=$usur_result['u_id'];?>
            <script>
              location = "profile.php";
            </script>
         <?php }
       }else{?>
          <div class="alert alert-warning close_alert" id="alert">Addresse email ou mot de passe incorrect !<p><i class="glyphicon glyphicon-remove" id="close" onclick="aleart()"></i></p>
          </div>
      <?php }
    }
   ?>
            <form action="" class="resister_form" method="post">
                <h1 style="font-family: 'calibri';">Se connecter</h1>
                <div class="input-container">
                  
                  <input class="input-field" type="text" placeholder="E-Mail" name="email">
                  
                </div>
                <div class="input-container">
                  <input class="input-field" type="password" placeholder="mot de passe" name="psw">
                </div>
                
                <button type="submit" name="login" class="btn">Se connecter</button>
                <div class="i-container">
                 <p>Pas encore inscrit? <a href="nolog.php">S'inscrire.</a></p>
               </div>
              </form>
          </div>
        </div>
      </div>
    </div>          
      </div>
    </div>
    <script> 
    function aleart(){
    document.getElementById("alert").style.display = "none";
  }
</script>
    <!-- FOOTER -->
    <?php include "inc/footer.php";?>