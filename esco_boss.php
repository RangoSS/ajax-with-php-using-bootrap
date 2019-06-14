<?php
 include "hedds2.php";

?>
<br><br><br><br><br>
<div class="container" style="background-color: silver;">
<div class="span5">   
<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h2>all useres</h2>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Address</th>
								<th>Contact</th>
								<th>Gender</th>
								<th>Occupation</th>
							
							</tr>
						</thead>
						<tbody>
							
								
								
								
								
							</tbody>
						</table>
					
				</div> 
			
			</div> 
            </div>
            </div>

            <script type="text/javascript">
            	$(document).ready(function(){
                   
                  loadUsers();


            	});


            	function loadUsers()
            	{
            		 $.ajax({
                   	  url:'ex_users.php',
                   	  method:'POST',
                   	 success:function(data){
                   	 	$('tbody').html(data);
                   	 }
                   });
            	}
                  
                  //we put action value,and row id value
                  // we pass dell_user function to delete 
            	 function del_users(rowid){

                   	$.ajax({
                       url:'ex_users.php',
                       method: 'POST',
                       data: {action:'delete_booking',rowid:rowid},
                       success: function(data)
                       {
                       		loadUsers();
                       }
                       
                   	});
                   }

            </script>