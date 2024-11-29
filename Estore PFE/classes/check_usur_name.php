 <?php include '../lib/Database.php';
    $db = new Database;

    session_start();

?>
<?php
if(isset($_GET['usurname'])){
$name=$_GET['usurname'];

$select_usur_name="SELECT * from usur_info where email='$name'";
if($db->select($select_usur_name)){
	echo "$name L'e-mail a été utilisé.";
}}



if (isset($_GET['chat_email'])) {
	$chat_email=$_GET['chat_email'];

	$select_chat_usur="SELECT * from usur_info where email='$chat_email'";
	if($chat_connect=$db->select($select_chat_usur)){
	if($chat_result=$chat_connect->fetch_assoc())
	$_SESSION['chat_usur_name']=$chat_result['u_name'];
	$_SESSION['cleant_id']=$chat_result['u_id'];
	echo $chat_result['u_name'];
}else{
	echo 'You have no accounts. Please create a new account';
}}

if (isset($_GET['massage'])) {
	if (isset($_SESSION['chat_usur_name'])) {
		$sender 	=$_SESSION['chat_usur_name'];
		$massage 	=$_GET['massage'];
		$reciver 	="admin";
		$cleant_id 	=$_SESSION['cleant_id'];
		date_default_timezone_set('Asia/Dhaka');
		$today = date("Y.m.d h:i:sa");
		 $insert_massage="INSERT into live_chat(sender,reciver,massage,chat_date,cleant_id)values('$sender','$reciver','$massage','$today','$cleant_id')";
		 $db->insert($insert_massage);
	}
}

if (isset($_SESSION['cleant_id'])){
	$sender=$_SESSION['cleant_id'];


$select_massage="SELECT * from live_chat where cleant_id='$sender' order by chat_id desc";
if($massage_conn=$db->select($select_massage)){
	while ($massage_result=$massage_conn->fetch_assoc()) { 
			if ($massage_result['sender']=='admin') {	
		?>
		<div class="singla_massage"><p class=""><?php echo $massage_result['massage']?></p></div>
	<?php }else{ ?>
		<div class="singla_massage pull-right"><p class="pull-right"><?php echo $massage_result['massage']?></p></div>
<?php }  
     }}}
 
?>