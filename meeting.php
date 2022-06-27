<?php include 'init.php'; ?>
<?php include 'head.php'; ?>
<head>
    <style>
        .form-group label,h5{color:red;text-shadow:1px 1px 1px black;}
        a{text-shadow:1px 1px 1px black;cursor:pointer}
        span{color:skyblue;text-shadow:1px 1px 1px black;}
        div{display:grid;align-items:center;justify-content:center; }
        .form-group input{background:none;width:400px;}
        iframe{
             background:white;width:80%;height:80%;position:fixed;left:10%;top:10%;display:none;
             box-shadow:1px 1px px black;
        }
        media screen and (max-width:767px){
            
                    iframe{

             background:white;width:100%;height:100%;position:fixed;left:10%;top:10%;display:none;

             box-shadow:1px 1px px black;
        }
            
        }

    </style>
</head>
<body id="meet_bg" >
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
        <li ><a href="dashboard_guide.php" ><i class="fa fa-home"></i>  Dashboard</a></li>
        <li><a href="guide_create-project.php" ><i class="fa fa-book"></i>  Projects</a></li>
        <li ><a href="members.php" ><i class="fa fa-user"></i>  members</a></li>
        <li ><a href="guide_create-student.php" ><i class="fa fa-users"></i>  Student</a></li>
         <li class="active"><a href="meeting.php"><i class="fa fa-users"></i> Meeting</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" ><span class="fa fa-user"></span>Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>

	<form method="post" autocomplete="off" action="project_meeting/index.php" id="fm7" style="display:none" >
		<div class="form-group">
			<label class="control-label">Topic:</label>
			<input type="text" name="topic" class="form-control" required>
		</div>
        <div class="form-group">
			<label class="control-label">start Time:</label>
			<input type="datetime-local" name="time" class="form-control" required>
		</div>
		<div class="form-group">
			<label class="control-label">Password:</label>
			<input type="password" name="password" class="form-control" required>
		</div>
		<input type="hidden" name="lastname"  value="<?php echo $_SESSION['user'] ?>">
		<div class="form-group">
			<label class="control-label">Duration:</label>
			<input type="number" name="duration" class="form-control" required>
		</div>

		<center><button type="submit" class="btn btn-sm btn-primary" >Create Meeting</button></center>
	</form>
<?php 
$lastname=$_SESSION['user'];
 $query = $db->query("SELECT * FROM guides where last_name='$lastname' ");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $meet = $row->meeting;
               $time = $row->time;
               $pass = $row->pass;
               $dur = $row->duration;
             }
?>
<div>
<h5>JOIN URL:<a href="<?php echo $meet ?>" target="_blank"><?php echo $meet ?></a></h5>
<h5>START TIME:<span><?php echo $time ?></span></h5>
<h5>PASSWORD:<span><?php echo $pass ?></span></h5>
<h5>DURATION:<span><?php echo $dur ?>min</span></h5>
</div>
<button onclick="meetform();" ondblclick="hide();" style="color:red;background:lightgreen;text-shadow:1px 1px 1px black;">CREATE NEW MEETING</button>

<script>
   function meetform(){
        document.getElementById('fm7').style.display="block";
      
    }
     function hide(){
        document.getElementById('fm7').style.display="none";
      
    }
 
</script>
</div>
<?php include 'footer.php'; ?>
</body>

