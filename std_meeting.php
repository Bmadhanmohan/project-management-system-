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
        <li ><a href="dashboard_std.php"><i class="fa fa-home"></i>  Dashboard</a></li>
        <li><a href="submitprojects.php"><i class="fa fa-book"></i>  Projects</a></li>
         <li><a href="std_guides.php"><i class="fa fa-user"></i>Guides List</a></li>
          <li class="active"><a href="std_meeting.php"><i class="fa fa-user"></i>Meeting</a></li>
   
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="user_student.php" id="pass">Change password</a></li>
              <li><a href="logout.php"><span class="fa fa-user"></span>Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php 
$roll=$_SESSION['user'];
$query2 = $db->query("SELECT project_id FROM allstudents where roll='$roll' ");
  $rows = $query2->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $p_id = $row->project_id;
             }
 $query = $db->query("SELECT * FROM guides where project_id='$p_id' ");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $meet = $row->meeting;
               $time = $row->time;
               $pass = $row->pass;
               $dur = $row->duration;
             }
?>
<div>
<h5>JOIN URL:<a onclick="meet();" ><?php echo $meet ?></a></h5>
<h5>START TIME:<span><?php echo $time ?></span></h5>
<h5>PASSWORD:<span><?php echo $pass ?></span></h5>
<h5>DURATION:<span><?php echo $dur ?>min</span></h5>
</div>

<iframe src="" id="meet" ></iframe>
<script>
  
    function meet(){
        document.getElementById('meet').style.display="block";
        document.getElementById('meet').src="<?php echo $meet ?>";
    }
</script>
</div>
<?php include 'footer.php'; ?>
</body>

