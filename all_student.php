<head>
<style>
table{margin:20px auto;
box-shadow:0 0 20px linear-gradient(45deg,deeppink,blue);
position:relative;
transfor:prespective(400px) rotate3d(15px,45px,35px,15deg);
background: rgba(35,40,80,0.8);
transition:all 1s;
    
}
table:hover{
animation-name:s;animation-duration:7s;animation-direction:value;animation-iteration-count:infinite;
}
table::before{
content: '';
height:90%;width:90%;
position:absolute;
top:0;
left:0;
background: linear-gradient(40deg,#05d3d6 10%,#d53c00 100%);
filter:blur(10px);
z-index:-1;
}
table::after{
content: '';
height:100%;width:100%;
position:absolute;
top:0;
left:0;
background: linear-gradient(40deg,#05d3d6 10%,#d53c00 100%);
filter:blur(20px);
z-index:-1;
}
#gradbg{margin:20px;borde:2px solid red;
background:rgba(0,0,0,0.1);
border-radius:20px;
position:absolute;
z-index:-2;}
@keyframes s{
10%{box-shadow:0px  10px 5px black;  background: linear-gradient(40deg,#05d3d6 10%,#d53c00 100%);}
20%{box-shadow:0px  10px 5px black;  background: linear-gradient(80deg,#05d3d6 10%,#d53c00 100%);}
30%{box-shadow:0px  10px 5px black;  background: linear-gradient(60deg,#05d3d6 10%,#d53c00 100%);}
40%{box-shadow:0px  10px 5px black;  background: linear-gradient(80deg,#05d3d6 10%,#d53c00 100%);}
50%{box-shadow:0px  10px 5px black;  background: linear-gradient(100deg,#05d3d6 10%,#d53c00 100%);}
60%{box-shadow:0px  10px 5px black;  background: linear-gradient(120deg,#05d3d6 10%,#d53c00 100%);}
70%{box-shadow:0px  10px 5px black;  background: linear-gradient(180deg,#05d3d6 10%,#d53c00 100%);}
80%{box-shadow:0px  10px 5px black;  background: linear-gradient(2200deg,#05d3d6 10%,#d53c00 100%);}
90%{box-shadow:0px  10px 5px black;  background: linear-gradient(270deg,#05d3d6 10%,#d53c00 100%);}
100%{box-shadow:0px  10px 5px black;  background: linear-gradient(360deg,#05d3d6 10%,#d53c00 100%);}
}
</style>
</head>

<table class="table table-bordered table-hover project_table" style="box-shadow: 1px 2px 2px rgb(33, 255, 200),1px 1px 2px rgb(64, 245, 19),2px 1px 4px rgb(1, 199, 10);">
<div id="gradbg">
<thead style="background:rgba(0,0,0,0.4)">
		<tr>
			<th>Student Name</th>
			<th>Roll</th>
			<th>Mobile</th>
			<th>Level</th>
			<th>Department</th>
            <th>Date Added</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php
           $query = $db->query("SELECT * FROM student");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $name = $row->name;
			   $roll = $row->roll;
			   $mobile = $row->mobile;
               $department = $row->department;
               $level = $row->level;
               $date = $row->date;
               $p_id = $row->project_id;
      
        ?>
             <tr>
             	<td><?php echo $name; ?></td>
             	<td><?php echo $roll; ?></td>
             	<td><?php echo $mobile; ?></td>
             	<td><?php echo $level ?></td>
              <td><?php echo $department ?></td>
              <td><?php echo $date; ?></td>
             	<td>
             	    <a class="btn btn-xs btn-primary" href="edit_std_data.php?id=<?php echo $row->id; ?>"><i class="fa fa-edit"></i></a>

            

             		  
						<form method="POST" action="delete_std_data.php">
							
						
							<input type="hidden" name="project_id" value="<?php echo $p_id ?>">
							<input type="hidden" name="id" value="<?php echo $row->id ?>">
							<input type="hidden" name="roll" value="<?php echo $roll ?>">
							<input type="hidden" name="password" value="<?php echo $mobile ?>">
                            <button type="submit" class="btn btn-xs btn-danger fa fa-trash"></button>

			</form>
					  
             	</td
             </tr>
        <?php
           }
		?>
	</tbody>
</div>
</table>