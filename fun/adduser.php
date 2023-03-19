 <?php
 include('../connect.php');
 $Wfname=$_GET['Wfname'];
 $Wlname=$_GET['Wlname'];
 $Wemail=$_GET['Wemail'];
 $Wusername=$_GET['Wusername'];
 $sql="SELECT * FROM `users` WHERE `Wusername`= ' $Wusername'";
 $result= $conn->query($sql);
 while($row=$result->fetch_assoc()){
   $count = $result->num_rows;
 }
 if($count>0){
  header('location:http://localhost/iot_wep/index.php?q1=1');
  exit();
 }

 $Wpassword=$_GET['Wpassword'];
 $ConfirmPassword=$_GET['ConfirmPassword'];
 if($ConfirmPassword!=$Wpassword){
  header('location:http://localhost/iot_wep/index.php?q1=2');
  exit();
 }
else{
  mysqli_query($conn,"INSERT INTO `users` 
  (`Wfname`, `Wlname`, `Wemail`, `Wusername`, `Wpassword`)
   VALUES (' $Wfname', '$Wlname', '$Wemail', ' $Wusername', '$Wpassword');");
   header('location:http://localhost/iot_wep/login.php');
}
?>