<?php require 'init.php'; ?>
<?php include 'head.php'; ?>

<body style="display:grid"  class="dash_board">
  
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
        <li><a href="dashboard_std.php"><i class="fa fa-home"></i>  Dashboard</a></li>
        <li><a href="submitprojects.php"><i class="fa fa-book"></i>  Projects</a></li>
         <li class="active"><a href="std_guides.php"><i class="fa fa-user"></i>Guides List</a></li>
          <li><a href="std_meeting.php"><i class="fa fa-user"></i>Meeting</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="user_student.php">Change password</a></li>
         <li><a href="cse_2022/cse_img.html">.</a></li>
        <li><a href="logout.php"><span class="fa fa-user"></span>Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>
<table class="table table-bordered table-hover project_table" style="box-shadow: 1px 2px 4px rgb(253, 179, 16),1px 1px 3px rgb(238, 17, 13),2px 1px 4px rgb(241, 24, 9);">
	<thead>
		<tr>
			<th>Photo</th>
			<th>Guide Name</th>
			<th>Mobile</th>
			<th>Project</th>
			
		</tr>
	</thead>
	<tbody >
		<?php
           $query = $db->query("SELECT * FROM guides");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $guide_name = $row->guide_name;
               $mobile = $row->mobile;
               $department = $row->department;
               $allocation = $row->allocation;
			   $img=$row->photo;
			   $p_id=$row->project_id;
			   $query= $db->query("SELECT * FROM project where id=$p_id");

             $rows = $query->fetchAll(PDO::FETCH_OBJ);

             foreach($rows as $row){
               $name = $row->project_name;
               
			 
        ?>
             <tr>
			    <th style="margin:0;padding:2px;"><img src="uploads/images/<?php echo $img;?>"  height="100px" alt="NO-IMAGE"></th>
             	<td><?php echo $guide_name; ?></td>
             	<td><?php echo $mobile; ?></td>
             	<td><?php echo $name ?></td>
             
             </tr>
        <?php
           }
             }
		?>
	</tbody>
</table>
</body>