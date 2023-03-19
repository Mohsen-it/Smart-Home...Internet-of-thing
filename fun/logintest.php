 <?php
 include('../connect.php');
 $User1=$_GET['User'];
 $Password1=$_GET['Password'];
 $ConfirmPassword=$_GET['ConfirmPassword'];

 $sql="SELECT * FROM `users` WHERE  Wpassword='$Password1' AND Wusername= '$User1'";
 $result= $conn->query($sql);
 while($row=$result->fetch_assoc()){
   $count = $result->num_rows;
 }
 if($count>0){
  header('location:http://95.0.89.36:500/QLDA/UpdatestatusWEB.php');
  }
  else{
  header('location:http://127.0.0.1/QLDA/index.php?q1=2');
  }
  if($ConfirmPassword!=$Password1){
   header('location:http://127.0.0.1/QLDA/index.php?q1=1');
  }
$count=0;
 

?>