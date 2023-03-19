<?php
include("connect.php");
class dht11{
 public $link='';
 function __construct($temperature, $humidity, $gas){
  $this->storeInDB($temperature, $humidity, $gas,);
 }
 function storeInDB($temperature, $humidity, $gas){
  $query = "insert into sensor set humidity='".$humidity."', temperature='".$temperature."',gas='".$gas."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['temperature'] != '' and  $_GET['humidity'] != '' and $_GET['gas'] != ''){
 $dht11=new dht11($_GET['temperature'],$_GET['humidity'],$_GET['gas']);
}

?>