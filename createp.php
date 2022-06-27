
<div class="row">


	<div class="col-md-4 std_fm" style="box-shadow: 1px 1px 1px rgb(27, 207, 12),0px 1px 1px rgb(54, 255, 36),1px 1px 4px rgb(22, 1, 255);
	">
		<form method="post" action=""  autocomplete="off" id="login_form1">
			<div class="form-group">
				<label class="control-label">Project Name</label>
				<input type="text" name="project_name" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Project Domain</label>
				<input type="text" name="project_case" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Project Level</label>
				<select name="project_level" class="form-control input-sm " required>
				  <option>Easy</option>
				  <option>Intermediate</option>
				  <option>Hard</option>
				</select>
			</div>

			<button type="submit" class="btn btn-sm btn-default">Submit</button>
		</form>
	</div>

	<div class="col-md-8">
		<?php include 'all_project.php'; ?>
	</div>
</div>
<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "addproject.php",
			data: formData,
			success: function(html){
			if(html=='false')
			{
				$.jGrowl("Error creating project", { header: 'Project creation failed' });

			
			}else
			{
			    
				$.jGrowl("Adding Project Details Please Wait......", { sticky: true });
				$.jGrowl("Successfully added", { header: 'Success !!' });
				var delay = 5000;
					setTimeout(function(){ window.location = 'create-project.php'  }, delay);  
			}
			}
		});
		return false;
	});
});
</script>