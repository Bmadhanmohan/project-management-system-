<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body id="dashboard" >
<nav class="navbar nav-expand-lg  navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNav">
      <ul class="nav navbar-nav m-0">
        <li class="active"><a href="dashboard_std.php"><i class="fa fa-home"></i>  Dashboard</a></li>
        <li><a href="submitprojects.php"><i class="fa fa-book"></i>  Projects</a></li>
        <li><a href="std_guides.php"><i class="fa fa-user"></i>Guides List</a></li>
        <li><a href="std_meeting.php"><i class="fa fa-user"></i>Meeting</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="user_student.php">Change password</a></li>
        
        <li><a href="logout.php"><span class="fa fa-user"></span>Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>  
<h3>Recent Project Allocations</h3>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover project_table" style=" box-shadow: 1px 2px 4px rgb(8, 173, 232),1px 1px 5px rgb(44, 221, 1),2px 1px 10px rgb(224, 13, 196);">
		<thead>
			<tr>
				<th>ID</th>
				<th>Student Name</th>
				<th>Roll number</th>
				<th>Project Title</th>
				<th>Domain/Case Study</th>
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
               $run = $db->query("SELECT project_name,project_case,document FROM project WHERE id = '$project_id'");
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
                 <td>
				       <a href="uploads/documents/<?php echo $document; ?>" style="color:red;"  ><i class="fa fa-view"><?php echo $document; ?></i></a></td>
               </tr>
               <?php
               };
             };
			?>
		</tbody>
	</table>

  <table class="table table-bordered table-hover project_table"  style="box-shadow: 1px 2px 4px rgb(8, 173, 238),1px 1px 5px rgb(12, 221, 1),2px 1px 10px rgb(224, 13, 196);">
	<thead>
		<h3 style="color:yellow" >PROJECT-<span style="color:skyblue">MARKS</span></h3>
		

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
     $roll= $_SESSION['user'];
     $query = $db->query("SELECT * FROM allstudents where roll='$roll' ");
     $rows = $query->fetchAll(PDO::FETCH_OBJ);
     foreach($rows as $row){
       $project_id = $row->project_id;
     };
	     $query = $db->query("SELECT * FROM guides where project_id='$project_id' ");
       $rows = $query->fetchAll(PDO::FETCH_OBJ);
       foreach($rows as $row){
         $tbname = $row->last_name;
       };
           $query = $db->query("SELECT * FROM  `$tbname`");
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
     
		?>
	</tbody>
</table>
		
</div>
<?php include 'footer.php'; ?>
</body>