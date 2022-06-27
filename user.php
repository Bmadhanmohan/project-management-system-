<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body background="image/bulb.jpg" style="background-size:1000px;position:absolute;">
<nav class="navbar nav-expand-lg  navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="dashboard.php"><?php echo PROJECT_NAME; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav m-0">
        <li ><a href="dashboard.php"><i class="fa fa-home"></i>  Dashboard</a></li>
        <li ><a href="create-project.php"><i class="fa fa-book"></i>  Project</a></li>
        <li><a href="create-student.php"><i class="fa fa-users"></i>  Student</a></li>
        <li ><a href="guides.php"><i class="fa fa-user"></i>  Guides</a></li>
         <li class="dropdown" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-cog"></i> Manage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="active"><a href="user.php">Add User</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="suggest.php"><span class="fa fa-user"></span>Suggestions</a></li>

        <li><a href="logout.php"><span class="fa fa-user"></span> Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>
<h3>Create Account</h3>
<div class="row" >

	<div class="col-md-4">
		<form method="post">
			<div class="form-group">
				<label class="control-label">Username:</label>
				<input type="text" name="username" class="form-control" required style="color:black;font-weight:bolder">
			</div>

			<div class="form-group">
				<label class="control-label">Password:</label>
				<input type="text" name="password" class="form-control" required style="color:black;font-weight:bolder">
			</div>

			<button name="submit" class="btn btn-xs btn-default">Submit</button>
		</form>
    </div>
    <?php
      if(isset($_POST['submit'])){
      	$username = $_POST['username'];
      	$password = $_POST['password'];
        
        $query = $db->query("INSERT INTO auth(username,password)VALUES('$username','$password') ");

        if($query){ ?>
         <script>
         	alert("User added !");
         	window.location = 'user.php';
         </script>
        <?php

        }

      }
    ?> 
    <div class="col-md-8">
    	<table class="table table-bordered table-hover project_table">
	<thead>
		<tr>
			<th>S/N</th>
			<th>Username</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>
		<?php
           $query = $db->query("SELECT * FROM auth");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $name = $row->username;
               $id = $row->id;
               $passkey = $row->password;
        ?>
             <tr>
             	<td><?php echo $id; ?></td>
             	<td><?php echo $name; ?></td>
             	<td><?php echo $passkey; ?></td>
             </tr>
        <?php
           }
		?>
	</tbody>
</table>
    </div>
</div>
<?php include 'footer.php'; ?>