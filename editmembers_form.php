<div class="cols">
	<div class="col-md-6 m-10">
		<form method="post" action="" id="login_form1">
        <input type="hidden" name="mem_id" value="<?php echo $id; ?>">
			

			<div class="form-group">
				<label class="control-label">Student Name</label>
				<input type="text" name="name"  value=" <?php echo $name ?>" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Mobile</label>
				<input type="number" name="mobile"  value="<?php echo $mobile ?>" class="form-control input-sm" required >
			</div>
            <div class="form-group">
				<label class="control-label">Roll No</label>
				<input type="text" name="roll"  value=" <?php echo $roll ?>" class="form-control input-sm" required >
			</div>
            <div class="form-group">
				<label class="control-label">E-Mail</label>
				<input type="email" name="email"  value=" <?php echo $email ?>" class="form-control input-sm" required >
			</div>
            <div class="form-group">
				<label class="control-label">Address</label>
				<input type="text" name="address"  value=" <?php echo $address ?>" class="form-control input-sm" required >
			</div>
			
		</div>
		<div class="col-md-6 m-5">
	
		
			<div class="form-group">
				<label class="control-label">Review-0</label>
				<select name="r0" class="form-control input-sm " required style="background:rgba(10,10,10,0.1);font-size:16px;color:red;font-weight:bolder">
				 <option value=""></option>
				  <option value="Present" style="background:rgba(10,10,10,0.1);font-size:14px;color:green;font-weight:bolder" >Present</option>
				  <option value="Absent">Absent</option>
			
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Review-1</label>
				<select name="r1" class="form-control input-sm " required style="background:rgba(10,10,10,0.1);font-size:16px;color:red;font-weight:bolder">
				  <option value=""></option>
				  <option value="Present" style="background:rgba(10,10,10,0.1);font-size:14px;color:green;font-weight:bolder" >Present</option>
				  <option value="Absent">Absent</option>
			
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Review-2</label>
				<select name="r2" class="form-control input-sm " required style="background:rgba(10,10,10,0.1);font-size:16px;color:red;font-weight:bolder">
				     <option value=""></option>
				  <option value="Present" style="background:rgba(10,10,10,0.1);font-size:14px;color:green;font-weight:bolder" >Present</option>
				  <option value="Absent">Absent</option>
			
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Review-3</label>
				<select name="r3" class="form-control input-sm " required style="background:rgba(10,10,10,0.1);font-size:16px;color:red;font-weight:bolder">
		          <option value=""></option>
				  <option value="Present" style="background:rgba(10,10,10,0.1);font-size:14px;color:green;font-weight:bolder" >Present</option>
				  <option value="Absent">Absent</option>
			
				</select>
			</div>
			
			
		
			<div class="form-group">
				<label class="control-label">Project Marks</label>
				<input type="number" name="r"  value="<?php echo $r ?>"  class="form-control input-sm"  >
			</div>

          
			<button type="submit" class="btn btn-sm btn-danger">Submit</button>
		</form>
	</div>
</div>

<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "updatemembers.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{  $.jGrowl("Error creating project", { header: 'Project creation failed' });
			
			  
			}else





			{
                $.jGrowl("Please Wait......", { sticky: true });
				$.jGrowl(" successfully updated", { header: 'Success !!' });
				var delay = 1000;
					setTimeout(function(){ window.location = 'members.php'  }, delay); 
			}
			}
		});
		return false;
	});
});
</script>