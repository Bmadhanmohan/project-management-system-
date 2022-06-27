<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body id="mem_bg">
    
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
        <li><a href="dashboard_guide.php" ><i class="fa fa-home"></i>  Dashboard</a></li>
        <li><a href="guide_create-project.php" ><i class="fa fa-book"></i>  Projects</a></li>
        <li  class="active"><a href="members.php" ><i class="fa fa-user"></i>  members</a></li>
        <li ><a href="guide_create-student.php" ><i class="fa fa-users"></i>  Student</a></li>
         <li><a href="meeting.php"><i class="fa fa-users"></i> Meeting</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" ><span class="fa fa-user"></span>Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>

<h3>Add members</h3>
<div class="cols">
	<div class="col-md-6 m-10" style="box-shadow: 1px 2px 4px rgb(253, 179, 16),1px 1px 3px rgb(238, 17, 13),2px 1px 4px rgb(241, 24, 9);">
		  <form method="post" action=""  autocomplete="off"  id="login_form1">
		  
		  <div class="form-group">
				<label class="control-label">Student Name</label>
				<input type="text" name="name" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Mobile</label>
				<input type="number" name="mobile" class="form-control input-sm" required >
			</div>
            <div class="form-group">
				<label class="control-label">Roll No</label>
				<input type="text" name="roll" class="form-control input-sm" required >
			</div>
            <div class="form-group">
				<label class="control-label">E-Mail</label>
				<input type="email" name="email" class="form-control input-sm"  >
			</div>
            <div class="form-group">
				<label class="control-label">Address</label>
				<input type="text" name="address" class="form-control input-sm" required >
			</div>
			
		</div>
		<div class="col-md-6 m-5 "  style="box-shadow: 1px 2px 4px rgb(11, 227, 16),1px 1px 3px rgb(23, 187, 13),2px 1px 4px rgb(241, 24, 9);">
	
		
			
			<div class="form-group">
				<label class="control-label">Review-0</label>
				<select name="r0" class="form-control input-sm " required style="background:rgba(10,10,10,0.1);font-size:16px;color:red;font-weight:bolder">
				  <option value="-" selected>-</option>
				  <option value="Present" style="background:rgba(10,10,10,0.1);font-size:14px;color:green;font-weight:bolder" >Present</option>
				  <option value="Absent">Absent</option>
			
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Review-1</label>
				<select name="r1" class="form-control input-sm " required style="background:rgba(10,10,10,0.1);font-size:16px;color:red;font-weight:bolder">
				  <option value="-" selected>-</option>
				  <option value="Present" style="background:rgba(10,10,10,0.1);font-size:14px;color:green;font-weight:bolder" >Present</option>
				  <option value="Absent">Absent</option>
			
				</select>
			</div>
			
			<div class="form-group">
				<label class="control-label">Review-2</label>
				<select name="r2" class="form-control input-sm " required style="background:rgba(10,10,10,0.1);font-size:16px;color:red;font-weight:bolder">
				  <option value="-" selected>-</option>
				  <option value="Present" style="background:rgba(10,10,10,0.1);font-size:14px;color:green;font-weight:bolder">Present</option>
				  <option value="Absent">Absent</option>
			
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Review-3</label>
				<select name="r1" class="form-control input-sm " required style="background:rgba(10,10,10,0.1);font-size:16px;color:red;font-weight:bolder">
				  <option value="-" selected>-</option>
				  <option value="Present" style="background:rgba(10,10,10,0.1);font-size:14px;color:green;font-weight:bolder">Present</option>
				  <option value="Absent">Absent</option>
			
				</select>
			</div>
			
			<div class="form-group" >
			   <label class="control-label">Final Review</label>
				<input type="number" name="r" class="form-control input-sm " style="background:rgba(10,10,10,0.1);font-size:16px;color:red;font-weight:bolder" required >
			</div>
			<div class="form-group">
			
				<input type="hidden" name="tablename" class="form-control input-sm" value="<?php echo $_SESSION['user']; ?>">
			</div>

</div>

			<center><button type="submit" class="btn btn-sm btn-danger" style="margin:20px">Submit</button></center>
		</form>
	</div>
</div>

	<div class="col-md-12">
    <?php
require 'db.php';
?>
<table class="table table-bordered table-hover project_table"  style="box-shadow: 1px 2px 4px rgb(8, 173, 238),1px 1px 5px rgb(12, 221, 1),2px 1px 10px rgb(224, 13, 196);">
<?php $date = date('D,d-M-Y');?>
	<thead><center>
		<h3><?php echo $date; ?></h3>
	</center></thead>
	<thead>
		<tr>
			<th>Student Name</th>
			<th>Mobile</th>
            <th>Roll No</th>
			<th>Email</th>
            <th>Address</th>
			<th>Review-0</th>
			<th>Review-1</th>
			<th>Review-2</th>
			<th>Review-3</th>
			<th>Project Marks</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
	    	$tb=$_SESSION['user']; 
           $query = $db->query("SELECT * FROM  $tb ");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $name = $row->name;
               $mobile = $row->mobile;
               $roll = $row->roll;
               $email = $row->email;
               $address = $row->address;
               $r0 = $row->r0;
               $r1 = $row->r1;
			   $r2 = $row->r2;
			   $r3 = $row->r3;
			   $r = $row->r;
        ?>
             <tr>
             	<td><?php echo $name; ?></td>
             	<td><?php echo $mobile; ?></td>
             	<td><?php echo $roll ?></td>
             	<td><?php echo $email ?></td>
                <td><?php  echo $address?></td> 
				<td><?php echo $r0 ?></td>
				<td><?php echo $r1 ?></td>
				<td><?php echo $r2 ?></td>
				<td><?php echo $r3 ?></td>
				<td><?php echo $r ?></td>
			
					<td>
					<a class="btn btn-xs btn-primary" href="editmembers.php?id=<?php echo $row->id; ?>"><i class="fa fa-edit"></i></a>
             		<a class="btn btn-xs btn-danger"  href="deletemember.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
             	    </td>
             </tr>
        <?php
			 }; 
		
		?>
	</tbody>
</table>
		
	</div>
<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "addmember.php",
			data: formData,
			success: function(html){
			if(html=='false')
			{
				$.jGrowl("Error creating project", { header: ' failed' });

			
			}else
			{
			    
				$.jGrowl("Adding  Details Please Wait......", { sticky: true });
				$.jGrowl("Successfully added", { header: 'Success !!' });
				var delay = 5000;
					setTimeout(function(){ window.location = 'members.php'  }, delay);  
			}
			}
		});
		return false;
	});
	
});
</script>
<?php include 'footer.php'; ?>
</body>