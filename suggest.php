<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body style="background:url(image/curve_bg.jpg);background-size:1000px 800px;">
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
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-cog"></i> Manage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="user.php">Add User</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li  class="active"><a href="suggest.php"><span class="fa fa-user"></span>Suggestions</a></li>

        <li><a href="logout.php"><span class="fa fa-user"></span> Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>

<table class="table table-bordered table-hover project_table" style="box-shadow: 1px 2px 4px rgb(253, 179, 16),1px 1px 3px rgb(238, 17, 13),2px 1px 4px rgb(241, 24, 9);">
	<thead>
		<tr>
			<th> Name/ Roll</th>
			<th>Project Title</th>
			<th>Description</th>
			<th></th>
			
		</tr>
	</thead>
	<tbody >
		<?php
           $query = $db->query("SELECT * FROM suggest order by date");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $id=$row->id;
               $name = $row->name;
               $title = $row->title;
               $desc = $row->descr;
              
			 
        ?>
             <tr>
			  
             	<td><?php echo $name; ?></td>
             	<td><?php echo $title; ?></td>
             	<td><?php echo $desc ?></td>
             
             	<td>
             	    <a class="btn btn-xs btn-primary" href="delete_suggest.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
					  
             	</td>
             </tr>
        <?php
           }
		?>
	</tbody>
</table>
<?php include 'footer.php'; ?>
</body>
