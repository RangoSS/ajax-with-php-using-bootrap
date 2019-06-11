
<?php
include "hedds2.php";
 echo "<br><br><br><br>";

?>

<div class="container" style="background-color: silver;">
	<h2 class="text-center"><b> You are more than wellcome brother</b></h2>
	<hr>
	<!--here we put the pages on row-->
	<div class="row">
		<div class="col-sm-4">
	<p><b>Wellcome Mugumo 2019 top players</b> </p>
	<img class="rounded-circle" src="uploads/pic1.png" height="40%" width="40%">
	<p class="text-center"><b> our heroes of all the times ,we are proud of you and<abbr> we will always remember you</abbr> all the time
	more espercialy about all you've done for the company</b></p>
</div>
		<!--then we specify the number of column for specific data-->
	<div class="col-sm-5">	

<form class="contact-form font-weight-bold" id="myform" method="post" style="" action="login_back.php">
	<fieldset>
		<legend><b>Log In</b></legend>
	<div class="form-group">
			<label>Username</label>
		<input class="form-control" type="text" id="username" name="username">
	</div>
	<div class="form-group">
			<label>Password</label>
		<input class="form-control" type="Password" id="pwd" name="pwd">
		<input class="form-control" type="hidden" id="user_id" name="user_id">
	</div>
	
	<div class="btn-group btn-group-xs m2">
		<input id="log_me" type="submit" class="btn btn-success" value="Log In">
	<a class="rounded ml-2" style="background-color: yellow;" href="signup.php">Signup</a>
	</div>

	</fieldset>
</form>
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
	

	
</script>