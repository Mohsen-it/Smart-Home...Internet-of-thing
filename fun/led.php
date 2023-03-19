 <?php
 include('../connect.php');
 $vled1=$_GET[''];
 $vled2=$_GET['Wlname'];
 $vled3=$_GET['Wemail'];
 $vled4=$_GET['Wusername'];
 $sql=" INSERT INTO `leds` (`id`, `led1`, `led2`, `led3`, `led4`) VALUES ('', '1', '1', '0', '0')";
 $result= $conn->query($sql);
?>