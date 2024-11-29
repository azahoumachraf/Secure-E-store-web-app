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

              <div class="panel-heading"><h2>Modifier un Produit</h2></div>
              <div class="panel-body">
            <?php
                if (isset($_GET['edit_id'])) {
                    $p_id=$_GET['edit_id'];

                    $select_edit_product="SELECT * from product_list where p_id='$p_id'";
                    if($edit_connected=$db->select($select_edit_product)){
                        while ($result_edit=$edit_connected->fetch_assoc()){
          
                ?>



        <?php 
            if(isset($_POST['update_product'])){
                $p_name     =$_POST['p_name'];
                $p_cat      =$_POST['p_cat'];
                $p_sub_cat  =$_POST['p_sub_cat'];
                $p_brand    =$_POST['p_brand'];
                $p_des      =$_POST['p_des'];
                $p_price    =$_POST['p_price'];
                $date       = date('Y-m-d');

                $permited   = array('jpg', 'jpeg', 'png', 'gif');
                $file_name  = $_FILES['p_pic']['name'];
                $file_size  = $_FILES['p_pic']['size'];
                $file_temp  = $_FILES['p_pic']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                $uploaded_data = "upload/".$unique_image;
                $uploaded_image = "rw_admin/upload/".$unique_image;


                $update_query="UPDATE product_list SET p_name='$p_name',p_cat='$p_cat',sub_category='$p_sub_cat',p_brand='$p_brand',p_des='$p_des',p_price='$p_price',upload_date='$date',p_img='$uploaded_data' where p_id='$p_id'";
                if($db->update($update_query)){
                    if(move_uploaded_file($file_temp,$uploaded_image)){?>
                      <div class="alert alert-success">
                      <strong>Success!</strong>Votre produit a été Modifié!..
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
                        <input type="text" name="p_name" value="<?php echo $result_edit['p_name']?>" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Categorie</label>
                    </td>
                    <td>
                        <select id="select_cat" name="p_cat" onchange="myFunction()" required>
                            <option value="">Categorie du produit</option>
                            <?php 
                            $se='selected';
                                $select_cat="SELECT * from category";
                                if($conn_cat = $db->select($select_cat)){
                                    while ($cat_res=$conn_cat->fetch_assoc()) {  
                            ?>
                            <option <?php if($cat_res['categorys']==$result_edit['p_cat'])echo 'selected' ?> value="<?php echo $cat_res['categorys'];?>"><?php echo $cat_res['categorys'];?></option>
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
                            <option value="">Sous Categorie</option>
                            <?php 
                            $select_sub_cat="SELECT * from sub_category";
                            if($conn_sub_cat = $db->select($select_sub_cat)){
                                while ($cat_sub_res=$conn_sub_cat->fetch_assoc()) {  
                            ?>
                            <option <?php if($cat_sub_res['sub_category']==$result_edit['sub_category'])echo 'selected' ?> value="<?php echo $cat_sub_res['sub_category']?>"><?php echo $cat_sub_res['sub_category']?></option>
                        <?php } }?>
                        </select>
                    </td>
                </tr>


        <tr>
                    <td>
                        <label>Marque du produit</label>
                    </td>
                    <td>
                       <input type="text" name="p_brand" class="medium"  value="<?php echo $result_edit['p_brand']?>" />  
                    </td>
                </tr>
        
         <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="p_des"><?php echo  $result_edit['p_des']?></textarea>
                    </td>
                </tr>
        <tr>
                    <td>
                        <label>Prix</label>
                    </td>
                    <td>
                        <input type="text" class="medium" name="p_price" value="<?php echo $result_edit['p_price']?>" required />
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
                        <input type="submit" class="btn btn-success" name="update_product" Value="Modifier le Produit" />
                    </td>
                </tr>
            </table>
            </form>
        <?php }}}?>
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