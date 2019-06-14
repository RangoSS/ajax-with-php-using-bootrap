<?php
 $api_url="http://localhost/REST_API_ONLY/api/test.php?action=fetch_users";
  $api_delete="http://localhost/REST_API_ONLY/api/test.php?action=delete_booking";
 //$api_url="http://localhost/REST_API_ONLY/api/test_api.php?action=fetch_users";
 //$api_url="http://localhost/REST_API_PRACTICE/api/test_api.php?action=joined_tables_user_and_booking";


 $client=curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response=curl_exec($client);
$result=json_decode($response);

$output="";

foreach ($result as $row) {
	
	$output .='
  	 <tr>
  	     <td>'. $row->first_name .'</td>
  	      <td>'. $row->last_name.'</td>
          <td>'. $row->user_name.'</td>
          <td>'. $row->address.'</td>
          <td>'. $row->contact.'</td>
          <td>'. $row->gernder.'</td>
          <td>'. $row->occupation.'</td>
  	      <td> <button type="button" name="edit"
  	 class="btn btn-success xs " id="'.$row->user_id.'">Edit</button></td>
  	 <td><button type="button" name="delete"
  	 class="btn btn-danger btn-xs " onclick="del_users('.$row->user_id.')" id="'.$row->user_id.'">Delete</button></td> 
  	     
  	 </tr>
  	 ';
}
echo $output;


//deleting request


  $client=curl_init($api_delete);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response=curl_exec($client);





?>