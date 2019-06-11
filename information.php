<?php
include "hedds2.php";
?>


<br><br><br><br><br>
	<div class="container" style="background-color: silver;">
		<div class="row">
			<div class="col-sm-5"style="background-color: silver;">
				<img class="img-thumbnail" src="uploads/rangos.png" style="height: 80%;width: 80%;">
			</div>
		<div class="col-sm-6 ml-4" style="background-color: silver;color: white;">
			<h2 class="text-center">We always do the best for your best</h2>
			<p>  I am sure you have probably heard every grown-up in your life tell you. But the honest truth is that schooling is an absolute fundamental step to a successful life. We sometimes take school and classes for granted. But we forget that by going to school you get a compressed crash course on the collective knowledge of mankind.</p> 

			<a class="btn btn-success btn-lg" href="">read more</a>
			<a class="btn btn-success btn-lg" href="">Spercials</a>
			<a class="btn btn-success btn-lg" href="">Find Us</a>
		</div>
		</div>
	</div>
		<!--here comes my tabs-->


	<br>
	<br>
	<div class="container" style="background-color: silver;">	          
  <table class="table table-dark">
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
	</div>

</body>
<br>
<div class="container">
<?php
 include "foot.php";
?>
</div>
</html>

<script type="text/javascript">
	$(document).ready(function(){

		display();
		//under ajax i included action for selected_Joined function
		//action calls the name of function
		function display(){
     $.ajax({
     	url:'get_info.php',
     	method: 'POST',
     	data: {action:'select_joined'},
     	success:function(data){

     		$('tbody').html(data);
     	}

     })
 }

 //url:'localhost://api/seledss',
	});
</script>