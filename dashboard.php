<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<head>
   <script>
  
 
       setTimeout(dis,4000);
       function dis(){
        $('#land').fadeOut(3000); 
       $('.dash_board').show(6000);
       };
     

</script>
</head>
<!-- <div class="load_bg"><div class="loader">Loading...</div></div> -->

<body id="dashboard" class="dash_board" >
     <iframe src="landing.php" id="land" width="100%" height="100%" style="position:fixed;left:0;top:0;z-index:10" ></iframe> 
<?php include 'dashboard_navbar.php'; ?>
<h3>Recent Project Submissions</h3>

	<table class="table table-bordered table-striped table-hover project_table" style=" box-shadow: 1px 2px 4px rgb(8, 173, 232),1px 1px 5px rgb(44, 221, 1),2px 1px 10px rgb(224, 13, 196);">
		<thead>
			<tr>
				<th>ID</th>
				<th>Student Name</th>
				<th>Roll number</th>
				<th>Project Title</th>
				<th>Domain/case study</th>
				<th>Level</th>
				<th>Department</th>
				<th>Document</th>

			</tr>
		</thead>
		<tbody>
			<?php
             $query = $db->query("SELECT * FROM student");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $name = $row->name;
               $roll = $row->roll;
               $level = $row->level;
               $department = $row->department;
               $project_id = $row->project_id;
               $date = $row->date;
               $id = $row->id;
               $run = $db->query("SELECT project_name,project_case,document FROM project WHERE id = '$project_id' AND document IS NOT NULL");
               $run_rows = $run->fetchAll(PDO::FETCH_OBJ);
               foreach($run_rows as $runrow){
                  $case = $runrow->project_case;
                  $title = $runrow->project_name;
                  $document=$runrow->document;
				  
				
               ?>
			   
               <tr>
               	<td><?php echo $id; ?></td>
               	<td><?php echo $name; ?></td>
				<td><?php echo $roll; ?></td>
               	<td class="text-bold"><?php echo $title; ?></td>
               	<td class="text-bold"><?php echo $case; ?></td>
               	<td><?php echo $level; ?></td>
               	<td><?php echo $department; ?></td>
				<td ><a href="uploads/documents/<?php echo $document; ?>"  >View</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="uploads/documents/<?php echo $document; ?>" style="color:red;"  download><i class="fa fa-download"></i></a></td>
               </tr>
               <?php
               }
             }
			?>
		</tbody>
	</table>

	<h3>All Project Allocations</h3>
	
<?php
  $query = $db->query("SELECT * FROM  guides ");
  $rows = $query->fetchAll(PDO::FETCH_OBJ);
  foreach($rows as $row){
	  $table=$row->last_name;
	  $gdname=$row->guide_name;
	  $p_id=$row->project_id;
	  $query = $db->query("SELECT project_name FROM project WHERE id = '$p_id' ");
	  $rows = $query->fetchAll(PDO::FETCH_OBJ);
	  foreach($rows as $rw){
		  $title=$rw->project_name;
		 
	?>
	<table class="table table-bordered table-hover project_table"  style="box-shadow: 1px 2px 4px rgb(8, 173, 238),1px 1px 5px rgb(12, 221, 1),2px 1px 10px rgb(224, 13, 196);">
	<thead>
		<h4 style="color:lightgreen; text-shadow:1px 1px 0.5px black,1px 1px 2px black;" ><?php echo $gdname; ?><span style="float:right;color:skyblue"><?php echo $title; ?></span></h4>
		

	</thead>
	<thead>
		<tr>
			<th>Student Name</th>
			<th>Mobile</th>
            <th>Roll No</th>
			<th>Email</th>
            <th>Address</th>
            <th>project Marks</th>
		
			
		</tr>
	</thead>
	<tbody>
		<?php
	    
           $query = $db->query("SELECT * FROM  $table ");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $name = $row->name;
               $mobile = $row->mobile;
               $roll = $row->roll;
               $email = $row->email;
               $address = $row->address;
               $marks = $row->r;
             
        ?>
		
             <tr>
             	<td><?php echo $name; ?></td>
             	<td><?php echo $mobile; ?></td>
             	<td><?php echo $roll ?></td>
             	<td><?php echo $email ?></td>
                <td><?php  echo $address?></td> 
                 <td><?php  echo $marks?></td> 
				

             </tr>
			 
        <?php
			 }; 
			};
		};
		?>
	</tbody>
</table>
		
	
<?php include 'footer.php'; ?>
</body>

			