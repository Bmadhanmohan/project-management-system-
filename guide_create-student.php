<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body id="std_bg">
  <video class="background-video" autoplay loop muted  >
<source src="video_color.mp4" type="video/mp4">
</video>
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
        <li ><a href="guide_create-project.php" ><i class="fa fa-book"></i>  Projects</a></li>
        <li><a href="members.php" ><i class="fa fa-user"></i>  members</a></li>
        <li class="active"><a href="guide_create-student.php" ><i class="fa fa-users"></i>  Student</a></li>
         <li><a href="meeting.php"><i class="fa fa-users"></i> Meeting</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" ><span class="fa fa-user"></span>Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>
<h3>Students</h3>
<?php include 'all_student.php'; ?>
<?php include 'footer.php'; ?>
</body