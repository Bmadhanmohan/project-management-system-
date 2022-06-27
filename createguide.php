<div class="row">
	<div class="col-md-4" style="box-shadow: 1px 2px 2px rgb(8, 173, 238),1px 1px 4px rgb(12, 221, 1),2px 1px 10px rgb(224, 13, 196);">
		
	
	
	
	<form method="post" action="addguide.php"  autocomplete="off"  id="login_form1" enctype="multipart/form-data">
	    
	    	<div class="form-group">

				<label class="control-label">First Name</label>

				<input type="text" name="first_name" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Last Name</label>
				<input type="text" name="last_name" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Mobile</label>
				<input type="number" name="mobile" class="form-control input-sm" required >
			</div>

			<div class="form-group">
				<label class="control-label">Department</label>
				<select name="department" class="form-control input-sm " required>
				 <option></option>
				  <option>CSE</option>
                  <option>ECE</option> 
                  <option>MCA</option>
                  <option>EEE</option>
                  <option>CIVIL</option>
                  <option>MECH</option>
				 
				</select>
			</div>
			

			
			<div class="form-group" >
				<label class="control-label">Photo</label>
				<input type="file" name="file"  accept="image/jpeg,image/png,/image/gif" class="form-control">
				
			</div>
			<div class="form-group">
				<div class="well well-sm">
					<h5>Please wait while the system generate project topic for this student....</h5>
					<p id="project_title"></p>
					<input type="hidden" name="project_id" value="" id="project_id">
					<button class="btn btn-xs btn-primary" title="refresh" type="button" id="RefProj"><i class="fa fa-refresh"></i></button>
				</div>
			</div>
			
			<button type="submit" class="btn btn-sm btn-default" value="upload" >Submit</button><br>
		</form>
		<!--<form action="uploadimg.php" method="POST" enctype="multipart/form-data">
			<label class="control-label">Photo</label>
			<div class="form-group" style="display:flex;">
				
				<input type="file" name="file"  accept="image/jpeg,image/png,/image/gif" class="form-control">
				<button  type="submit" class="btn btn-sm btn-default" value="upload" >Upload</button>
			</div>
             </form>
         -->
		
	</div>

	<div class="col-md-8">
		<?php include 'all_guides.php'; ?>
	</div>
</div>

<script>

$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "addguide.php",
			enctype:'multipart/form-data',
			data:data,
			success: function(html){
			if(html=='false')
			{
				$.jGrowl("Error creating project", { header: ' failed' });

			
			}else
			{
			    
				$.jGrowl("Adding guide Details Please Wait......", { sticky: true });
				$.jGrowl("Successfully added", { header: 'Success !!' });
				var delay = 5000;
					setTimeout(function(){ window.location = 'guides.php'  }, delay);  
			}
			}
		});
		return false;
	});
});*/
</script>
<script>
	function assign(){
   	  	$('#project_title').html('<img src="image/ajax-loader.gif">')
   	  	$.ajax({
        	type: 'POST',
        	url: 'allocate.php',
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
