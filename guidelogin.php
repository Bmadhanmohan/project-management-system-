<?php require 'init.php'; ?>
<?php include 'head.php'; ?>

<body style="display:grid"   class="dash_board">
   <iframe src="landing.php" id="land" width="100%" height="100%" style="position:fixed;left:0;top:0;z-index:10" ></iframe> 
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
        <li class="active"><a href="dashboard_guide.php" ><i class="fa fa-home"></i>  Dashboard</a></li>
        <li ><a href="guide_create-project.php" ><i class="fa fa-book"></i>  Projects</a></li>
        <li><a href="members.php" ><i class="fa fa-user"></i>  members</a></li>
        <li><a href="guide_create-student.php" ><i class="fa fa-users"></i>  Student</a></li>
         <li><a href="meeting.php"><i class="fa fa-users"></i> Meeting</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" ><span class="fa fa-user"></span>Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>
<h3>Recent Project Allocations</h3>
<div class="table-responsive" >
	<table class="table table-bordered table-striped table-hover project_table" style=" box-shadow: 1px 2px 4px rgb(8, 173, 232),1px 1px 5px rgb(44, 221, 1),2px 1px 10px rgb(224, 13, 196);">
		<thead>
			<tr>
				<th>ID</th>
				<th>Student Name</th>
				<th>Roll number</th>
				<th>Project Title</th>
				<th>Case Study</th>
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
</div>


</body>
<script>
  
 
       setTimeout(dis,4000);
       function dis(){
        $('#land').fadeOut(3000); 
       $('.dash_board').show(6000);
       };
     

</script>