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
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">

              <div class="panel-heading"><h2>Ajouter un Produit</h2></div>
              <div class="panel-body">

        <?php 
            if(isset($_POST['add_product'])){
                $p_name     =$_POST['p_name'];
                $p_cat      =$_POST['p_cat'];
                $p_sub_cat  =$_POST['p_sub_cat'];
                $p_brand    =$_POST['p_brand'];
                $p_des      =$_POST['p_des'];
                $p_price    =$_POST['p_price'];
                $date       = date('Y-m-d');
                $author_id  =$_SESSION['usur_id'];

                $permited   = array('jpg', 'jpeg', 'png', 'gif');
                $file_name  = $_FILES['p_pic']['name'];
                $file_size  = $_FILES['p_pic']['size'];
                $file_temp  = $_FILES['p_pic']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                $uploaded_data = "upload/".$unique_image;
                $uploaded_image = "rw_admin/upload/".$unique_image;


                $query="INSERT into product_list(author_id,p_name,p_cat,p_brand,p_des,p_price,p_img,upload_date,sub_category) values ('$author_id','$p_name','$p_cat','$p_brand','$p_des','$p_price','$uploaded_data','$date','$p_sub_cat')";
                if($db->insert($query)){
                    if(move_uploaded_file($file_temp,$uploaded_image)){?>
                      <div class="alert alert-success">
                      <strong>!</strong>Your Product Upload Painding . Please Wait For approve.
                    </div>
                 
                 <?php }}}
        ?> 


                <form action="" method="post" enctype="multipart/form-data">
            <table class="form" style="width: 80%; margin: 50px;">
               
                <tr>
                    <td>
                        <label>Nom du Produit</label>
                    </td>
                    <td>
                        <input type="text" name="p_name" placeholder="entrer le nom du produit" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Categorie</label>
                    </td>
                    <td>
                        <select id="select_cat" name="p_cat" onchange="myFunction()" required>
                            <option value="">Selectionner une Categorie</option>
                            <?php 
                                $select_cat="SELECT * from category";
                                if($conn_cat = $db->select($select_cat)){
                                    while ($cat_res=$conn_cat->fetch_assoc()) {  
                            ?>
                            <option value="<?php echo $cat_res['categorys'];?>"><?php echo $cat_res['categorys'];?></option>
                        <?php }} ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>sous Categorie</label>
                    </td>
                    <td>   
                        <select name="p_sub_cat" id="">
                            <option value="">sous Categorie</option>
                            <?php 
                            $select_sub_cat="SELECT * from sub_category";
                            if($conn_sub_cat = $db->select($select_sub_cat)){
                                while ($cat_sub_res=$conn_sub_cat->fetch_assoc()) {  
                            ?>
                            <option value="<?php echo $cat_sub_res['sub_category']?>"><?php echo $cat_sub_res['sub_category']?></option>
                        <?php } }?>
                        </select>
                    </td>
                </tr>


        <tr>
                    <td>
                        <label>Marque</label>
                    </td>
                    <td>
                       <input type="text" name="p_brand" class="medium" />  
                    </td>
                </tr>
        
         <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="p_des"></textarea>
                    </td>
                </tr>
        <tr>
                    <td>
                        <label>Prix</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Enter Price..." class="medium" name="p_price" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Image du produit</label>
                    </td>
                    <td>
                        <input type="file" name="p_pic" required />
                    </td>
                </tr>
    
        <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn btn-success" name="add_product" Value="ajouter le Product" />
                    </td>
                </tr>
            </table>
            </form>
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