<?php include 'lib/Database.php';
    $db = new Database;

    session_start()
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
</head>
<body>

        <div class="grid_10">
            <div class="box round first grid">
                <div class="block"> 
                <style>
.cumstomer_details{
border-right: 10px solid #fff;
padding-left: 10px;
 width: 46%;
 float: left;
 background: #E6F0F3;
 overflow: hidden;
}
.cumstomer_details table{
    border-collapse: collapse;
	margin:20px auto;
}
.cumstomer_details td{
	color: #1b548d;
	padding: 10px;
	font-size: 25px;
     border-collapse: collapse;
}
.cumstomer_details tr{
     border-collapse: collapse; 
}
.vowcher_details{
padding-left: 10px;
 width: 46%;
 float: left;
 background: #E6F0F3;
 overflow: hidden;
}
.company_logo{
	width: 50%;
	float: left;
}
.company_logo td{
     border-collapse: collapse;
	padding: 2px;
	font-size: 15px;
} 
.company_logo p{
border:1px solid #999; 
width: 130px;
padding:5px;
}
.cash_voucher{
	width: 200px;
    text-align: center;
    background: rgba(0, 0, 0, .2);
    padding: 5px;
    margin: 0px auto;
}
.main_voucher{
	overflow: hidden;
	width: 100%;
}
.main_voucher td{
     border-collapse: collapse;
	border:1px solid #999;
	text-align: center;
}
.main_voucher a{
	float: right;
	background: rgba(0, 0, 0, .5);
	padding: 5px 20px;
	color: #fff;
	font-size: 25px;
	margin:5px;
}
                </style>       
                    <div class="cumstomer_details">
                        <?php
                        if(isset($_GET['u_id'])){
                            $u_id=$_GET['u_id'];
                            $confirm_id=$_GET['confirm_id'];
                            $date=$_GET['date'];
                            $select_usur_info="SELECT * from usur_info where u_id='$u_id'";
                         if($conn_usur_info=$db->select($select_usur_info)){
                          while($result_usur_info=$conn_usur_info->fetch_assoc()){
                        ?>
                        <table>
                            <tr>
                                <td >Nom</td>
                                <td>:</td>
                                <td><?php echo $result_usur_info['u_name']?></td>
                            </tr>
                            <tr>
                                <td>numero de telephone</td>
                                <td>:</td>
                                <td><?php echo $result_usur_info['m_number']?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $result_usur_info['email']?></td>
                            </tr>
                            
                            <tr>
                                <td>Code Zip</td>
                                <td>:</td>
                                <td><?php echo $result_usur_info['zip_code']?></td>
                            </tr>
                            <tr>
                                <td>ville</td>
                                <td>:</td>
                                <td><?php echo $result_usur_info['city']?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td><?php echo $result_usur_info['address']?></td>
                            </tr>

                        </table>
                    <?php }}}?>
                    </div>
                    <div class="cumstomer_details">
                      <div class="cash_voucher">
                        <h3>E-store</h3>
                      </div>
                      
                      <div class="company_address">
                        <div class="company_logo">
                            
                        </div>
                        <div class="company_logo">
                             <table>
                                <tr>
                                    <td>Mobile</td>
                                    <td>:</td>
                                    <td>0695485108</td>
                                </tr>
                                <tr>
                                    <td>Gmail</td>
                                    <td>:</td>
                                    <td>achraf.regori@gmail.com</td>
                                </tr>
                             </table>
                        </div>
                      </div>
                      <div class="main_voucher">
                        <table width="100%">
                            <tr width="100%">
                                <td width="62%">Description</td>
                                <td width="13%">quantite</td>
                                <td colspan="2" width="25%">montant</td>
                            </tr>
                            <?php
                            $admin_id=$_SESSION['usur_id'];
                        $select_order="SELECT * from card where u_id='$u_id' && compleate_order='$confirm_id' && c_date='$date' && author_id='$admin_id'";

                        if($con_order=$db->select($select_order)){
                            $sub_total=0;
                            $vat=0;
                            $i=0;
                         while ($result_order=$con_order->fetch_assoc()){
                            $sub_total=$sub_total+($result_order['p_price']*$result_order['quantity']);
                             $i++;

                       
                      ?>
                            <tr>
                                <td><?php echo $result_order['p_name'];?></td>
                                <td><?php echo $result_order['quantity'];?></td>
                                <td>dh<?php echo $result_order['p_price'];?></td>
                                <td>dh<?php echo $result_order['p_price']*$result_order['quantity'];?></td>
                            </tr>
                        <?php }
                        $update_com_order="UPDATE card set compleate_order=1 where u_id='$u_id'";
                            if($db->update($update_com_order)){?>

                                <script>
                                      window.print();
                                </script>

                            <?php }}?> 
                            <tr>
                                <td colspan="2">Total</td>
                                <td></td>
                                <td>dh<?php echo $sub_total?></td>
                            </tr>
                        </table>
                         
                      </div>
                    </div>
               </div>
            </div>
        </div>
</body>
</html>

