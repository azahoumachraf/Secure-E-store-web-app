
<footer id="footer" class="footer color-bg">
     
      <!--footer section is start here-->
        <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-7 fotter_home">
             <div class="footer_menuoption">
              <ul>
                <li><a href="#"><b style="color: #fff; font-size: 20px;">E-Store</b></a></li>
                 <li><a href="#"> notre adresse</a></li>
                  <li><a href="#">ajouter un produit</a></li>
                   <li><a href="#">chercher par categorie </a></li>
                    <li><a href="#">acheter des produits</a></li>
                     
              </ul>
              </div>

              
                <div class="footer_menuoption">
              <ul>
                <li><a href="#"><b style="color: #fff; font-size: 20px;">Mode de paiement</b></a></li>
                 <li><a href="#">Paiement par : </a></li>
                 <img src="assets/images/footer-bdbl.png" alt="cash">
                 <img src="assets/images/footer-visa.png" alt="cash">
                 <img src="assets/images/footer-mastercard.png" alt="cash">
                 <!--<img src="assets/images/footer-ipay.png" alt="cash">-->
                   
              </ul>
              </div>
              <hr>
             
            </div>
           
            <div class="col-md-5 side_footer">
             <h2 style="color: #fff;font-weight: bold;margin-left: 75px;">E-Store</h2>      
              <!--stylesheet is running here-->
             
              <!--stylesheet is end here-->

            <div class="cont">
             <p> EMAIL: achraf.regori@gmail.com</p>
            </div>
            <p style="color: #fff;margin-left: 75px;">&copy;droits d'auteur:achraf</p>

          </div>
        </div>
      </div>


      <!--footer section is end here-->
      <div class="copyright-bar">
        <div class="container">
          <div class="col-xs-12 col-sm-6 no-padding social">
            <ul class="link">
              <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
              <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
              <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
              <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 no-padding">
            <div class="clearfix payment-methods">
              <ul>
                <li><img src="assets/images/payments/1.png" alt=""></li>
                <li><img src="assets/images/payments/2.png" alt=""></li>
                <li><img src="assets/images/payments/3.png" alt=""></li>
                <li><img src="assets/images/payments/4.png" alt=""></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/echo.min.js"></script>
    <script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <script>
      $(document).ready(function(){
        var a=0;
        $("#slide_togle").click(function(){
          if($("#massage_box").toggle("fast")){
            if(a==0){
              $("#slide_togle").css("transform", "rotate(180deg)");
            }else{
              $("#slide_togle").css("transform", "rotate(0deg)");
            }
            if(a==1){
              a=0;
            }else{
              a=1;
            }
          }
        });


        $("#chat_start").click(function(){
        var a = $("#live_email").val();
        $.ajax({
          url:"classes/check_usur_name.php",
          data:"chat_email="+a,
          success:function(data){
              $().html(data);
          }
        });
    });


      $("#send_massage").click(function(){
        var massage = $("#massage").val();
        $.ajax({
          url:"classes/check_usur_name.php",
          data:"massage="+massage,
          success:function(data){
              $("#massage").val(" ");
          }
        });
    });
        $("body").click(function(){
           $.ajax({
          url:"classes/check_usur_name.php",
          success:function(data){
            data:"massage";
              $("#chat_now").html(data);
          }
        });

        });
        $("#massage").blur(function(){
           $.ajax({
          url:"classes/check_usur_name.php",
          success:function(data){
            data:"massage";
              $("#chat_now").html(data);
          }
        });

        });
      });
    </script>
  </body>
</html>

