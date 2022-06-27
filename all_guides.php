<?php
require 'db.php';
?>
<table class="table table-bordered table-hover project_table" style="box-shadow: 1px 2px 4px rgb(253, 179, 16),1px 1px 3px rgb(238, 17, 13),2px 1px 4px rgb(241, 24, 9);">
	<thead>
		<tr>
			<th>Photo</th>
			<th>Guide Name</th>
			<th>Mobile</th>
			<th>Department</th>
			<th>Allocation Status</th>
			
		</tr>
	</thead>
	<tbody >
		<?php
           $query = $db->query("SELECT * FROM guides");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $guide_name = $row->guide_name;
               $last_name = $row->last_name;
               $mobile = $row->mobile;
               $department = $row->department;
               $allocation = $row->allocation;
			   $img=$row->photo;
			   $p_id=$row->project_id;
			 
        ?>
             <tr>
			    <th style="margin:0;padding:2px;width:90px"><img src="uploads/images/<?php echo $img;?>"  height="80px" width="90px" alt="NO-IMAGE"></th>
             	<td><?php echo $guide_name; ?></td>
             	<td><?php echo $mobile; ?></td>
             	<td><?php echo $department ?></td>
             	<td><?php echo ($allocation == 0)? '<label class="text-success">Available</label>':'<label style="color:#fd4400;">Assigned</label>' ?>
             	</td>
             	<td>
             	    <a class="btn btn-xs btn-primary" href="edit_gd_data.php?id=<?php echo $row->id; ?>"><i class="fa fa-edit"></i></a>

             		  
						<form method="POST" action="deleteguide.php">
							<input type="hidden" name="img" value="<?php echo $img ?>">
							<input type="hidden" name="last_name" value="<?php echo $last_name ?>">
								<input type="hidden" name="password" value="<?php echo $mobile ?>">
							<input type="hidden" name="project_id" value="<?php echo $p_id ?>">
							<input type="hidden" name="id" value="<?php echo $row->id ?>">
                            <button type="submit" class="btn btn-xs btn-danger fa fa-trash"></button>

					   </form>
					  
             	</td>
             </tr>
        <?php
           }
		?>
	</tbody>
</table>