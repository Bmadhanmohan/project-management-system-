<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body id="pro_bg">
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
        <li  class="active"><a href="create-project.php"><i class="fa fa-book"></i>  Project</a></li>
        <li><a href="create-student.php"><i class="fa fa-users"></i>  Student</a></li>
        <li><a href="guides.php"><i class="fa fa-user"></i>  Guides</a></li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-cog"></i> Manage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="user.php">Add User</a></li>
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
<h3>Add Project</h3>
<?php include 'createp.php'; ?>
<?php include 'footer.php'; ?>