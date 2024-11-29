<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Approuver un produit</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
            	<style>
            		tr,td,th{
						border: 1px solid #ddd;
            		}
            	</style>
			<thead>
				<tr>
					<th width="5%">si.</th>
					<th width="8%">id de l'auteur</th>
					<th width="8%">Nom</th>
					<th width="8%">Categorie</th>
					<th width="8%">Maque</th>
					<th >desciption</th>
					<th width="8%">prix</th>
					<th width="8%">Image</th>
					<th width="10%">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$admin_id=$_SESSION['id'];
						$query = "SELECT * from product_list where author_id!='$admin_id' && is_approved=1";
						if($conn_query = $db->select($query)){
							$i=0;
						while($res_query =$conn_query->fetch_assoc()){
							$i++;
						$author_id=$res_query['author_id'];
						$query_block = "SELECT * from usur_info where u_id='$author_id' && block=0";
						if($conn_query_block = $db->select($query_block)){
					?>
				<tr class="odd gradeX">
					<td width="5%"><?php echo $i;?></td>
					<td width="8%"><?php echo $res_query['author_id'] ?></td>
					<td width="8%"><?php echo $res_query['p_name'] ?></td>
					<td width="8%"><?php echo $res_query['p_cat'] ?></td>
					<td width="8%"><?php echo $res_query['p_brand'] ?></td>
					<td><?php echo $fm->textShorten($res_query['p_des'],100) ?></td>
					<td width="8%"><?php echo $res_query['p_price'] ?></td>
					<td width="8%"><img src="<?php echo $res_query['p_img'] ?>" alt="" width="80%;"></td>
					 
				</tr>
				<?php }}}?>
			</tbody>
		</table>

       </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
