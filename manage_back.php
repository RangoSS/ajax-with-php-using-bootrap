<?php
include "abtract_class.php";

 class All_info extends db{
        
       function select_joined(){
        
       
       	$output="";
       $qest="SELECT first_name,last_name,date_to,time_at,hos_name,province FROM users u
              JOIN booking b
              ON u.user_id=b.user_id
              join hospitals h
              ON b.hos_id=h.hos_id 
              LIMIT 10";

         $result=$this->queryData($qest);
         while($row=mysqli_fetch_assoc($result)){
               
               $output.="
                  <tr>
                  <td> $row[first_name] </td>
                  <td> $row[last_name] </td>
                  <td> $row[date_to] </td>
                  <td> $row[time_at] </td>
                  <td> $row[hos_name] </td>
                  <td> $row[province] </td>
                  </tr>
               ";


         }
        

         echo  $output;  

}
}


$show=new All_info();

		$show->select_joined();
 	?>