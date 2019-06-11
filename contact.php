<?php
include "hedds2.php";
 echo "<br><br><br><br>";
?>
<style type="text/css">
	
</style>
<div class="container">
<form class="contact-form" id="myform" method="post" style="width:30%;">
	<fieldset>
		<legend>Ajax Form Data</legend>
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
	</div>
	<div class="form-group">
			<label>Email</label>
		<input class="form-control" type="text" id="email" name="email">
	</div>
	<div class="form-group">
			<label>Message</label>
		<textarea row="4" cols="50" class="form-control" type="text" id="message" name="message">
	</textarea>
	</div>
	<div class="btn-group btn-group-xs m2">
		<input type="submit" class="btn btn-success" value="Submit">
		<input type="reset" class="btn btn-warning " value="Reset">
	</div>
	</fieldset>
</form>
</div>
</body>
<?php

?>