
<?php
include "hedds2.php";
 echo "<br><br><br><br>";

?>

<div class="container" style="background-color: silver;">
	<h2 class="text-center"><b> You are more than wellcome brother</b></h2>
	<hr>
	<!--here we put the pages on row-->
	<div class="row">
		<!--then we specify the number of column for specific data-->
	<div class="col-sm-5">	

<form class="contact-form font-weight-bold" id="myform" method="post" style="">
	<fieldset>
		<legend><b>Welcome buddy</b></legend>
		<div class="form-group">
			<label>First Name</label>
		<input class="form-control" type="text" id="first_name" name="first_name">
	</div>
	<div class="form-group">
			<label>Last Name</label>
		<input class="form-control" type="text" id="last_name" name="last_name">
	</div>
	<div class="form-group">
			<label>Username</label>
		<input class="form-control" type="text" id="Username" name="Username">
		<span id="err" style="color: red;display: none;">please fill in your address</span>
	</div>
	<div class="form-group">
			<label>address</label>
		<textarea row="4" cols="50" class="form-control" type="text" id="address" name="address">
	</textarea>

	</div>
		<div class="form-group">
			<label>Upload Profile</label>
		<input class="form-control" type="file" id="profile">
	</div>
	<div class="btn-group btn-group-xs m2">
		<input type="button" class="btn btn-success" id="sub" value="Sign Up">
		<input type="reset" class="btn btn-warning " value="Reset">
	</div>

	</fieldset>
</form>
</div>
<div class="col-sm-7">
	<p><b>Our 2018 to 2019 top players</b> </p>
	<img class="img-thumbnail" src="uploads/danies.jpg" height="80%" width="70%">
	<p><b> our heroes of all the times ,we are proud of you and <br>we will always remember you all the time
	more espercialy<br> about all you've done for the company</b></p>
</div>
</div>
</div>
</body>
<br>
<div class="container" style="background-color: silver;">
	<?php
      include "foot.php";
	?>
</div>

<script type="text/javascript">
	$(document).ready(function(){
        validaings(); 

   });

	function validaings(){
		 var first_name=$('#first_name').val();
           var last_name=$('#last_name').val();
            var usernum=$('#Username').val();
             var address=$('#address').val();
       
       if(first_name==""){
       	      $('#first_name').css("border-color","red");
       	
       }
       else if(last_name ==""){
          $("#last_name").css("border-color","red");
       }
       else if(usernum == ""){
       	$("#err").show();
       }
	}
  
</script>