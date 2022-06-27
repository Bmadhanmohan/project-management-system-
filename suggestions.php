<button onclick="suggest();" ondblclick="close();">project ideas</button>

<div style="box-shadow: 1px 2px 8px black,1px 1px 5px black,2px 1px 8px blue;display:none" id="suggest" >
<div class="well">
     <button onclick="hide();" style="float:right;color:red;background:none;">X</button><br>

 	<form method="post" autocomplete="off" action="" id="send">
		<div class="form-group">
			<label class="control-label text-danger">Name/Roll</label>
			<input type="text" name="name" class="form-control" required style="background:none;color:white">
		</div>

		<div class="form-group">
			<label class="control-label text-danger">project title</label>
			<input type="text" name="title" class="form-control" required style="background:none;color:white">
		</div>
		<div class="form-group">
			<label class="control-label text-danger">Description</label>
			<textarea name="desc" class="form-control" rows=3 style="background:none;color:white"></textarea>
		</div>

	<center>	<button type="submit" class="btn btn-sm btn-primary" name="btn">SEND</button></center>
	</form>
</div>
</div>
<script>
      function suggest(){
       document.getElementById("suggest").style.display="block";
       
     }
      function hide(){
       document.getElementById("suggest").style.display="none";
       
     }
</script>
<?php
     if(array_key_exists('btn',$_POST))
     {
      	$name = $_POST['name'];
      	$pro = $_POST['title'];
      	$desc = $_POST['desc'];
        
        $query = $db->query("INSERT INTO suggest(name,title,descr) VALUES('$name','$pro','$desc')");

        if($query){ ?>
         <script>
                document.getElementById('suggest').style.display='none';
         
         </script>
        <?php

        }
}
?> 

 
