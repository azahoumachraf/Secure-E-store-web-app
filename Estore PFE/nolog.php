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

          <?php if (isset($_POST['create_account'])) {
              $u_name     =$_POST['u_name'];
              $gender     =$_POST['gender'];
              $m_number   =$_POST['m_number'];
              $address    =$_POST['address'];
              $zip_code   =$_POST['zip_code'];
              $email      =$_POST['email'];
              $password   =$_POST['password'];
              $c_password =$_POST['c_password'];
              $today=date('y-m-d');
              $insert_usur="INSERT into usur_info(u_name,gender,m_number,address,zip_code,email,password,join_date) values('$u_name','$gender','$m_number','$address','$zip_code','$email','$password','$today')";

              if($db->insert($insert_usur)){?>
                  <script>
                location = "log.php";
              </script>
             <?php  } }?>

           <form action="" method="post">
            <div class="reg_ister">
              <h1> &nbsp;Créer un compte.</h1>
              
              <hr>

              <input type="text" id="u_name" name="u_name" placeholder="Nom et prénom" required>
              
               <p style="color: red" id="err_mobil"></p>
              <input type="text" name="m_number" placeholder="numéro de téléphone" id="m_number" required>
              <p style="color: red;" id="use_usur"></p>
              <input type="email" name="email" id="email" placeholder="e-Mail"required>
              <input type="password" name="password" id="password" placeholder="mot de passe"required>
              <p style="color: red" id="err_pas"></p>
              <input type="password" name="c_password" placeholder="Confirmer le mot de passe" id="c_password" required>
              <input type="text" name="zip_code" placeholder="Code ZIP" id="zip_code" required>
              <textarea name="address" id="" cols="" rows="5" placeholder="Address" required></textarea>
              <hr>
              <button type="submit" name="create_account" class="registerbtn"> &nbsp;Créer le compte.</button>
           
            
            <div class="container signin">
              <p>
                 Avez-vous déjà un compte?  <a href="log.php"> &nbsp; Connexion</a>.</p>
            </div>
             </div>
          </form>
          </div>
        </div>
      </div>
    </div>          
      </div>
    </div>
</script>
<script>
$(document).ready(function(){
    $("#email").blur(function(){
        var a = $("#email").val();
        $.ajax({
          url:"classes/check_usur_name.php",
          data:"usurname="+a,
          success:function(data){
              $("#use_usur").html(data);
          }
        })
    });

    $("#c_password").blur(function(){
        var pas = $("#password").val();
        var con_pas = $("#c_password").val();
       if(pas!=con_pas){
        $("#err_pas").html("Veuillez entrer le même mot de passe");
        $("#c_password").css("border", "1px solid red");
       }
       if(pas==con_pas){
        $("#err_pas").html("");
        $("#c_password").css("border", "1px solid #ded8d8");
       }
    });


    $("#password").blur(function(){
        var pas = $("#password").val();
        var pas_len=pas.length;
        if(pas_len<6){
        $("#err_pas").html("Veuillez entrer un minimum de 6 chiffres");
        $("#password").css("border", "1px solid red");
        }else{
        $("#err_pas").html("");
        $("#password").css("border", "1px solid #ded8d8");
        }
    });

    $("#m_number").blur(function(){
        var m_number = $("#m_number").val();
        if(isNaN(m_number)){
          $("#err_mobil").html("veuillez entrer un numéro de mobile valide.");
          $("#m_number").css("border", "1px solid red");
         }else{
          $("#err_mobil").html("");
          $("#m_number").css("border", "1px solid #ded8d8");
         }
    });

     $("#m_number").blur(function(){
        var m_number = $("#m_number").val();
        var m_number_len=m_number.length;
        if(m_number_len!=10){
          $("#err_mobil").html("veuillez entrer un numéro de mobile valide.");
          $("#m_number").css("border", "1px solid red");
        }else{
          $("#err_mobil").html("");
          $("#m_number").css("border", "1px solid #ded8d8");
         }
    });
});
</script>
    <!-- FOOTER -->
    <?php include "inc/footer.php";?>