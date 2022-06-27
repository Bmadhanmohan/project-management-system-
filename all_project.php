<head>
<style>
table{margin:20px auto;
box-shadow:0 0 10px linear-gradient(45deg,deeppink,blue);
position:relative;
transfor:prespective(400px) rotate3d(15px,45px,35px,15deg);
background:rgba(20,10,20,0.7);
transition:all 2s;
}
table:hover{
animation-name: s;animation-duration:10s;animation-direction:value;animation-iteration-count:infinite;
}
table::before{
content: '';
height:90%;width:90%;
position:absolute;
top:0;
left:0;
background:linear-gradient(125deg,deeppink,blue);
filter:blur(10px);
z-index:-1;
}
table::after{
content: '';
height:100%;width:100%;
position:absolute;
top:0;
left:0;
background:linear-gradient(15deg,deeppink,blue);
filter:blur(20px);
z-index:-1;
}
#gradbg{margin:20px;borde:2px solid red;
background:rgba(0,0,0,0.1);
border-radius:20px;
position:absolute;
z-index:-2;}
----keyframes s{
0%{box-shadow:0px  10px 5px black;background:linear-gradient(45deg,deeppink,blue);}
10%{box-shadow:0px  10px 5px black;background:linear-gradient(65deg,deeppink,blue);}
20%{box-shadow:0px  1px 10px black;background:linear-gradient(80deg,deeppink,blueviolet);}
30%{box-shadow:0px  10px 5px black;background:linear-gradient(100deg,deeppink,blue);}
40%{box-shadow:0px  10px 5px black;background:linear-gradient(120deg,deeppink,blue);}
50%{box-shadow:0px  1px 10px black;background:linear-gradient(150deg,deeppink,blue);}
60%{box-shadow:0px  10px 5px black;background:linear-gradient(185deg,deeppink,blue);}
70%{box-shadow:0px  10px 5px black;background:linear-gradient(200deg,deeppink,blue);}
80%{box-shadow:0px  10px 5px black;background:linear-gradient(260deg,deeppink,blue);}
90%{box-shadow:0px  1px 10px black;background:linear-gradient(300deg,deeppink,blueviolet);}
100%{box-shadow:0px  1px 10px black;background:linear-gradient(360deg,deeppink,blue);}
}
tr:nth-child(even){
	background:rgba(0,0,0,0.1);
}
tr:nth-child(odd){
	background:rgba(0,0,0,0.5);
}
</style>
</head>

<table class="table table-bordered table-hover project_table" style="box-shadow: 1px 2px 2px rgb(219, 10, 191),1px 1px 2px rgb(92, 5, 100),2px 1px 4px rgb(17, 30, 218);">
<div id="gradbg">
<thead >
		<tr style="background:rgba(0,0,0,0.1);">
			<th>Project Name</th>
			<th>Project Case</th>
			<th>Project Level</th>
			<th>Allocation Status</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody >
		<?php
           $query = $db->query("SELECT * FROM project");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $project_name = $row->project_name;
               $project_case = $row->project_case;
               $project_level = $row->project_level;
               $allocation = $row->allocation;
        ?>
             <tr >
             	<td><?php echo $project_name; ?></td>
             	<td><?php echo $project_case; ?></td>
             	<td><?php echo $project_level ?></td>
				<td><?php 
				    if($allocation==0){
					   echo '<label  style="color:#00fe00;">Available</label>';
				    }
					else if($allocation==1){
						echo '<label style="color:#00bfff;">Assigned</label>';
					 }
					 else{
						 echo '<label style="color:#fd0000;">Unavailable</label>';
					 }
					?>
             
             	<!--
					 <td><?php echo ($allocation == 0)? '<label class="text-success">Available</label>':'<label class="text-warning">Unavailable</label>' ?>
             	</td
			   -->
             	<td> 
             	    <a class="btn btn-xs btn-primary" href="editproject.php?id=<?php echo $row->id; ?>"><i class="fa fa-edit"></i></a>
             		  <a class="btn btn-xs btn-danger" href="deleteproject.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
             	</td>
             </tr>
        <?php
           }
		?>
	</tbody>
</div>
</table>
