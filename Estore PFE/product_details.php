<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <?php include 'inc/link.php'?>
  </head>
<?php if (isset($_GET['p_id'])) {
   $p_id=$_GET['p_id'];

          $new_product="SELECT * from product_list  where p_id='$p_id'";
          if($con_new_product=$db->select($new_product)){
            while ($new_product_select=$con_new_product->fetch_assoc()){

     ?>
  <body class="cnt-home">
    <!--  HEADER  -->
    <header class="header-style-1">
       <?php include 'inc/search.php'?>
      <!--  NAVBAR -->
      <?php include 'inc/nav.php'?>
    </header> 
    <?php include 'inc/under_menu.php'?>

<style type="text/css">
  	.main_head_sec{

  	}
  	.main_head_sec p{
  		font-size: 25px;
  		color: white;
  		font-family: SolaimanLipi,Helvetica,Verdana,sans-serif;
  		margin-top: 16px;
  	}
  	.main_head_sec ul li{
  		display: inline;
  	}
  	.main_head_sec ul li a{
  		font-size: 13px;

  	}
  	.top-rating-separator{
  	font-family: SolaimanLipi,Helvetica,Verdana,sans-serif;
      font-size: 14px;
      float: right;
      line-height: 20px;
      max-width: 600px;
      text-align: right;
      padding: 8px 8px 0px 0px;
      color: #333333;
      margin-top: 27px;


  	}
  	.header_sec{
  		height: 70px;
  		width: 100%;
  		background: #a6a6a6;
	}
</style>
<div class="container">
        <div class="row">
        	<div class="header_sec">
        	<div class="col-md-8 main_head_sec">
        		<p> <?php echo $new_product_select['p_name'] ;?> </p>
        </div>

        <div class="col-md-4 main_head_sec">
        	<div class="top-rating-separator">

        	</div>
        </div>
    </div>
</div>
</div>



<style type="text/css">
* {box-sizing: border-box;}
    .img-zoom-container {
      position: relative;

    }
    .img-zoom-lens {
      position: absolute;
      border: 1px solid #d4d4d4;
      /*set the size of the lens:*/
      width: 40px;
      height: 40px;
    }
    .img-zoom-result {
      border: 3px solid #000;
      /*set the size of the result div:*/
      width: 300px;
      height: 300px;
      position: absolute;
      top: 0;
      right: -160px;
      padding: 0px; /* Adjust the padding as desired */
    }
</style>

<script>
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
  
</script>
<style>
	.count_sec{
		border: 1px solid #24B193;
	}
	.mid_opp{
		margin-top: 56px;
	}
	.button_left{
		padding-left: 51px;

	}
	.but_left{
		padding-left: 51px;
	}
	.last_opp{
		margin-top: 20px;
	}
	.img_ord img{
cursor: pointer;
	}
  .close_alert p{
    position: relative;

  }
  .close_alert p i{
    position: absolute;
    right: 0px;
    top: -15px;
  
  }
  .checkout_btn{
    text-align: center;
    background-color: black;
    color: white;
    padding: 15px 30px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;

  }


</style>

<?php
if (isset($_POST['good'])) {
    if (!isset($_SESSION['usur_id'])) {
        ?>
        <script>
            window.location.assign("log.php");
        </script>
        <?php
    } else {
        $u_id = $_SESSION['usur_id'];
        $quantity = $_POST['qty'];
        $author_id = $new_product_select['author_id'];
        $p_id = $new_product_select['p_id'];
        $p_name = $new_product_select['p_name'];
        $p_des = $new_product_select['p_des'];
        $p_price = $new_product_select['p_price'];
        $p_image = $new_product_select['p_img'];

        $query = "INSERT into card(
            buy_usur_id,quantity,author_id,p_id,p_name,p_des,p_price,p_image) 
            values ('$u_id','$quantity','$author_id','$p_id','$p_name','$p_des','$p_price','$p_image')";

        if ($db->insert($query)) {
            ?>
            <div class="container">
                <div class="row">
                    <div class="alert alert-success close_alert" id="alert">
                        <?php echo $p_name.' est bien ajouté, ouvrir votre panier pour continuer le paiement!'?></a>
                        <p><i class="glyphicon glyphicon-remove" id="close" onclick="aleart()"></i></p>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}
?>
<?php
if (isset($_POST['add_now'])) {
    if (!isset($_SESSION['usur_id'])) {
        ?>
        <script>
            window.location.assign("log.php");
        </script>
        <?php
    } else {
        $u_id = $_SESSION['usur_id'];
        $quantity = $_POST['qty'];
        $author_id = $new_product_select['author_id'];
        $p_id = $new_product_select['p_id'];
        $p_name = $new_product_select['p_name'];
        $p_des = $new_product_select['p_des'];
        $p_price = $new_product_select['p_price'];
        $p_image = $new_product_select['p_img'];
        $query = "INSERT into card(
            buy_usur_id,u_id,quantity,author_id,p_id,p_name,p_des,p_price,p_image) 
            values ('$u_id','$u_id','$quantity','$author_id','$p_id','$p_name','$p_des','$p_price','$p_image')";

        if ($db->insert($query)) {
            ?>
            <div class="alert alert-success close_alert" id="alert">
                <?php echo $p_name.' Order added successfully'?></a>
                <p><i class="glyphicon glyphicon-remove" id="close" onclick="aleart()"></i></p>
            </div>
            <?php
        }
    }
}
?>




        <!-- code -->
       
<div class="container">
    <form action="" method="post">
        <table class="table table-striped table-bordered">
            <tr>
                <td>
                    <label>nom du Product :</label>
                </td>
                <td>
                    <label><?php echo $new_product_select['p_name']?></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>id du produit :</label>
                </td>
                <td>
                    <label>
                        <label><?php echo $new_product_select['p_id']?></label>
                    </label>
                </td>
            </tr>
            <td>
                <label>Description : </label>
            </td>
            <td>
                <label><?php echo $new_product_select['p_des']?></label>
            </td>
            </tr>



         
            <tr>
                <td>
                    <label>Prix : </label>
                </td>
                <td>
                    <label><?php echo $new_product_select['p_price']?>dh</label>
                </td>
            </tr>
            <tr>
                
                        <td>
                            <label> quantité : </label>
                        </td>
                        <td>
                            <input name="qty" type="number" value="1" style="border:0px solid #999;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="good" class="checkout_btn">Ajouter au panier</button>
                        </td>
                    </tr>
        </table>
    </form>
    <div class="col-md-6 img_zoom_sec">
        <div class="img-zoom-container">
            <img id="myimage" src="rw_admin/<?php echo $new_product_select['p_img']?>" width="400" height="500">
            <div class="positionn">
                <div id="myresult" class="img-zoom-result"></div>
            </div>
        </div>
    </div>
</div>





<!-- fin code -->
<script>
// Initiate zoom effect:
imageZoom("myimage", "myresult");
</script>


<style type="text/css">
  
.payra_pic{
  height: 200px;
  width: 200px;
}

</style>

<script> 
    function aleart(){
    document.getElementById("alert").style.display = "none";
  }
</script>
<?php }}}?>



<?php include "inc/footer.php";?>

