<?php
require 'init.php';
?>
<?php include 'head.php'; ?>
<body background="image/scr1.jpg" style="background-size:1200px 800px;position:relative">
<div id="banner"></div>
  
   <div class="container start-container" style="position:absolute;top:100px;">
   <marquee>SREENIVASA INSTITUTE OF TECHNOLOGY AND MANAGEMENT STUDIES</marquee>
     <div class="col-md-6 title-text">
       
     	  <h1 style="text-shadow:1px 1px 3px black,2px 2px 3px black,1px 2px 10px black;">STUDENTS' PROJECT ALLOCATION & MANAGEMENT SYSTEM</h1>
     	  <?php include 'suggestions.php' ?>
     </div>
   
     <button onclick="admin();" >ADMIN_LOGIN</button>
     <button onclick="guide();" >GUIDE_LOGIN</button>
     <button onclick="student();">STUDENT_LOGIN</button>
    
     <div class="col-md-4" id="admin" style="display:none;margin-top:50px">
       <?php include 'login_form.php';  ?>
       
      
     </div>
     <div class="col-md-4 " id="guide" style="display:none;margin-top:50px">
       <?php include 'login_form_guide.php';  ?>
       
      
     </div>
     <div class="col-md-4" id="student" style="margin-top:50px">
       <?php include 'login_form_student.php';  ?>
       
      
     </div>
   </div>
   <script type="text/javascript">
     function admin(){
       document.getElementById("admin").style.display="block";
       document.getElementById("guide").style.display="none";
       document.getElementById("student").style.display="none";
     }
      function guide(){
       document.getElementById("guide").style.display="block";
       document.getElementById("admin").style.display="none";
       document.getElementById("student").style.display="none";
     }
     function student(){
       document.getElementById("student").style.display="block";
       document.getElementById("admin").style.display="none";
       document.getElementById("guide").style.display="none";
     }
    
    
     
    
    </script>

<?php include 'footer.php'; ?>
</body>