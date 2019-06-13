<?php
 
 include "abtract_class.php";

 class d_base extends db{
      
     // var $usernum;
      var $pwd;
      function __construct(){
        
        // $this->usernum=$_POST['username'];
         $this->pwd=$_POST['pwd'];
      }

     function log_in(){

        session_start();
       $usernames=$_SESSION['username']=htmlspecialchars($_POST['username']); //takes data from one page to another	 
     $datas="SELECT user_id,passwords,occupation FROM users WHERE passwords='$this->pwd' AND user_name='$usernames'";
     $res=$this->queryData($datas);

     if($res && mysqli_num_rows($res) > 0){
     		$row = mysqli_fetch_assoc($res);
     		if($row['occupation']=='phashions'){
     	header('location:information.php');
     }
     else if($row['occupation']=='nurse'){
     	header('location:management.php');
     	
     }
     else  if($row['occupation']=='exco'){
           header('location:esco_boss.php');
     }
     else{
     	echo "wrong user";
     		header('location:login.php');
     }  
}
return $res;
 }
}

$show=new d_base();
$show->log_in();

?>