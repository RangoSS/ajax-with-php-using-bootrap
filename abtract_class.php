<?php
abstract class db{
   var $host="localhost";
   var $db_name="phashions";
   var $db_user="root";
   var $db_password="";

   

   function get_connection(){
   	$conn=mysqli_connect($this->host,$this->db_user,$this->db_password,$this->db_name) or Die("you are not connected");
   	return $conn;
   }

   function queryData($query){
   	 $con=$this->get_connection();
   	 $result=mysqli_query($con,$query) or Die(mysqli_error($con));
   	 return $result;
   }

}

?>