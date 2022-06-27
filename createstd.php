<div class="row">
	<div class="col-md-4" style="box-shadow: 1px 2px 8px black,1px 1px 5px black,2px 1px 8px blue;">
		<form method="post" action=""  autocomplete="on" id="login_form1">
		    <div class="form-group">
				<label class="control-label">Team Leader F_Name</label>
				<input type="text" name="f_name" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Team Leader L_Name</label>
				<input type="text" name="l_name" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Reg. No</label>
				<input type="text" name="std_no" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Mobile</label>
				<input type="number" name="mobile" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Email</label>
				<input type="email" name="email" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Department</label>
				<select name="std_dept" class="form-control input-sm" required>
				<option></option>
				<option>CSE</option>
                  <option>ECE</option> 
                  <option>MCA</option>
                  <option>EEE</option>
                  <option>CIVIL</option>
                  <option>MECH</option>
                </select>
			</div>
				<div class="form-group">
				<label class="control-label">Address</label>
				<input type="text" name="address" class="form-control input-sm" required>
			</div>
			
			<div class="form-group">
				<label class="control-label">Class</label>
				<select name="std_class" class="form-control input-sm " required>
				  <option value="ND">ND 1</option>
				  <option value="ND 2">ND 2</option>
				  <option value="ND 3">ND 3</option>
				  <option value="HND 1">HND 1</option>
				  <option value="HND 2">HND 2</option>
				  <option value="HND 3">HND 3</option>
				</select>
			</div>

			<div class="form-group">
				<div class="well well-sm">
					<h5>Please wait while the system generate project topic for this student....</h5>
					<p id="project_title"></p>
					<input type="hidden" name="project_id" value="" id="project_id">
					<button class="btn btn-xs btn-primary" title="refresh" type="button" id="RefProj"><i class="fa fa-refresh"></i></button>
				</div>
			</div>
			<center><button type="submit" class="btn btn-sm btn-primary" style="margin-bottom:10px">Submit</button></center>
		</form>
	
	</div>

	<div class="col-md-8">
		<?php include 'all_student.php'; ?>
	</div>
</div>
<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "addstudent.php",
			data: formData,
			success: function(html){
			if(html=='false')
			{
				$.jGrowl("Error creating project", { header: 'Project creation failed' });
			}else
			{
				
				$.jGrowl("Please Wait......", { sticky: true });
				$.jGrowl("Student successfully added & assigned", { header: 'Success !!' });
				var delay = 5000;
					setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
			   
			}
			}
		});
		return false;
	});
});
</script>
<script>
	function assign(){
   	  	$('#project_title').html('<img src="image/ajax-loader.gif">')
   	  	$.ajax({
        	type: 'POST',
        	url: 'assign.php',
        	data: 'action=yes',
        	cache: false,
        	dataType: 'json',
        	success: function(data){
        		// data = JSON.parse(data);
        		console.log(data[0])
              setTimeout(function(){
              	var project = data[0]['project_name'];
              	var case_ = data[0]['project_case'];
              	var id = data[0]['id'];
                
                $("#project_title").html("");
                $("#project_title").append(project+"<br>"+case_);
                $("#project_id").val(id);
                if(id >0){
                	$('#login_form1 button[type="submit"]').attr('disabled',false);
                }else{
                	$('#login_form1 button[type="submit"]').attr('disabled',true);
                }
              },500);
        	}
        })
   	  }
   $(document).ready(function(){
   	  // $("#login_form1 .well").on('mouseover',function(){
        assign()
   	  // })
   	  $('#RefProj').click(function(){
   	  	assign()
   	  })
   })
</script>

