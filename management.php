<?php
 include "hedds2.php";
?>
<br><br><br><br>
<div class="container mb-2" style="background-color: brown;">
	<h2 class="text-center">mqnagement site </h2>
<div class="row">
	<div class="col-sm-12" style="background-color: blue;">
		<h2>search hospitals <span id="myinfo"> </span></h2>
		
		<input class="btn btn-success" type="button" name="province" id="province" value="province"/>
		<input  class="btn btn-success" type="button" name="view_bookings" id="view_bookings" value=" View Booking"/>
		<input  class="btn btn-success" type="button" name="by_dates" id="by_dates" value="By Dates"/>
		<input class="btn btn-success" type="button" name="province" id="province" value="province"/>
		<input class="btn btn-success" type="button" name="province" id="province" value="province"/>

		<div class="col-sm-5 float-right">
      <input type="email" class="form-control" id="email" placeholder="Enter Province"><br>
    </div>
	</div>
	
</div>
</div>


<div id="myProvince" class="container mb-2" style="background-color: brown;">
	<table id="tblCustomers" class="table table-dark">
    <thead>
      <tr>
       
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Date To</th>
        <th>Time</th>
        <th>Hospital</th>
        <th>Province</th>
       </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table>
	
</div>

<div class="container" style="background-color: brown;">
	<?php
      include "foot.php";
	?>
</div>	
 
</body>

</html>

<script type="text/javascript">
	$(document).ready(function(){
	display();
		//under ajax i included action for selected_Joined function
		//action calls the name of function
		function display(){
     $.ajax({
     	url:'manage_back.php',
     	method: 'POST',
     	success:function(data){

     		$('tbody').html(data);
     	}

     })
 }


	});
	 
</script>