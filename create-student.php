<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<style>
#clippath{width:100%;height:100%;
background:blueviolet;
clip-path: circle(15.0% at  100% 100%);

position:fixed;
left:0;
top:0;
z-index:-2;

}
#clippathtop{width:100%;height:100%;
background:deeppink;
clip-path: circle(25.0% at 0 0);
position:fixed;
left:0;
top:0;
z-index:-2;

animation: tp alternate-reverse infinite 8s;

}
#clippathmidle{width:100%;height:100%;
background:orange;
clip-path: circle(13.4% at 19% 73%);
position:fixed;
left:0;
top:0;
z-index:-2;
animation: midle alternate-reverse infinite 15s;

}
#clippathright{width:100%;height:100%;
background:purple;
clip-path: circle(23.4% at 70% 33%);
position:fixed;
left:0;
top:0;
z-index:-2;



}

@keyframes midle{
    0%{background:green;clip-path: circle(1.4% at 19% 73%);};
    100%{background:green;clip-path: circle(43.4% at 19% 73%);};
}

@keyframes tp{
    0%{background:blueviolet;clip-path: circle(27.0% at 0 0);};
    100%{background:green;clip-path: circle(35.0% at 0 0);};
}

</style>
<body id="" style="background:black">
<div id="clippath"></div>
<div id="clippathtop"></div>
<div id="clippathmidle"></div>
<div id="clippathright"></div>
 
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
        <li><a href="create-project.php"><i class="fa fa-book"></i>  Project</a></li>
        <li class="active"><a href="create-student.php"><i class="fa fa-users"></i>  Student</a></li>
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
<h3>Add Student</h3>
<?php include 'createstd.php'; ?>
<?php include 'footer.php'; ?>
</body>