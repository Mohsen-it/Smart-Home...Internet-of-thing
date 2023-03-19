<?php
include('connect.php');
      if(isset($_POST['ON1']))
      {	
            
            $sql = "UPDATE `status` SET `status`='1'";
            if ($conn->query($sql) === TRUE) {
              //$_GET[] = 1;	
            } 
      }
      if(isset($_POST['OFF1']))
      {	
            
            $sql = "UPDATE status SET status = 0";
            if ($conn->query($sql) === TRUE) {	
              //$_GET[] = 1;					
            } 
      }
      if(isset($_POST['ON2']))
      {	
            
            $sql = "UPDATE status SET status = 2";
            if ($conn->query($sql) === TRUE) {	
              //$_GET[] = 1;					
            } 
      }
      if(isset($_POST['OFF2']))
      {	
            
            $sql = "UPDATE status SET status = 3";
            if ($conn->query($sql) === TRUE) {	
              //$_GET[] = 1;					
            } 
      }
      if(isset($_POST['ON3']))
      {	
            
            $sql = "UPDATE status SET status = 4";
            if ($conn->query($sql) === TRUE) {	
              //$_GET[] = 1;					
            } 
      }
      if(isset($_POST['OFF3']))
      {	
            
            $sql = "UPDATE status SET status = 5";
            if ($conn->query($sql) === TRUE) {	
              //$_GET[] = 1;					
            } 
      }
      if(isset($_POST['ON4']))
      {	
            
            $sql = "UPDATE status SET status = 6";
            if ($conn->query($sql) === TRUE) {	
              //$_GET[] = 1;					
            } 
      }
      if(isset($_POST['OFF4']))
      {	
            
            $sql = "UPDATE status SET status = 7";
            if ($conn->query($sql) === TRUE) {	
              //$_GET[] = 1;					
            } 
      }
      if(isset($_POST['ON5']))
      {	
            
            $sql = "UPDATE status SET status = 8";
            if ($conn->query($sql) === TRUE) {	
              //$_GET[] = 1;					
            } 
      }
      if(isset($_POST['OFF5']))
      {	
            
            $sql = "UPDATE status SET status = 9";
            if ($conn->query($sql) === TRUE) {	
              //$_GET[] = 1;					
            } 
      }
      $query ="SELECT `temperature`,`humidity`,`gas` FROM `sensor` ";	
      $T=array();
      $H=array();
      $G=array();
      
    
      $result = $conn->query($query);
      while($row = $result->fetch_assoc()) 
      {
        $H=$row["humidity"];
        $T=$row["temperature"]; 
        $G=$row["gas"];
      }
    
     
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SMART HOME</title>
    <style>
      *{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
      }
      .btn_show{
      background-color: gray;
      border: none;
      color: white;
      text-align: center;
      text-decoration: none;
      font-size:16px;
      cursor: pointer;
      border-radius: 15px;
      margin-left: 12px;
      }

    </style>
</head>
<body>
    <div class="cont">
    <div>
        <h1>smart home</h1>
        <h2>control panal</h2>
        <form action="UpdatestatusWEB.php" method="post">
            <table>
                <tr>
                    <td class="lable" >Device 1: </td>
                    <td><button id="on1" class="button_btnon" type="submit" name = "ON1" >ON</button></td>
                    <td><button id="off1" class="button_btnoff" type="submit" name = "OFF1" >OFF</button></td>
                </tr>
                <tr>
                    <td class="lable">Device 2: </td>
                    <td><button id="on2" class="button_btnon" type="submit" name = "ON2" >ON</button></td>
                    <td><button  id="off2" class="button_btnoff" type="submit" name = "OFF2" >OFF</button></td>
                </tr>
                <tr>
                    <td class="lable">Device 3:  </td>
                    <td><button id="on3" class="button_btnon" type="submit" name = "ON3" >ON</button></td>
                    <td><button id="off3" class="button_btnoff" type="submit" name = "OFF3" >OFF</button></td>
                </tr>
                <tr>
                    <td class="lable">Device 4:  </td>
                    <td><button id="on4" class="button_btnon" type="submit" name = "ON4" >ON</button></td>
                    <td><button  id="off4" class="button_btnoff" type="submit" name = "OFF4" >OFF</button></td>
                </tr>
                <tr>
                    <td class="lable">Device 5:  </td>
                    <td><button id="on5" class="button_btnon" type="submit" name = "ON5" >ON</button></td>
                    <td><button id="off5" class="button_btnoff" type="submit" name = "OFF5" >OFF</button></td>
                </tr>
                <tr>
                  <td></td>
                  <td> <button class="btn_show" type="submit" name="showtem">show</button></td>
                </tr>
            </table>
          </div>
          </form>
          <div class="sensor" >
            <div>
                <strong>Humidity is :</strong>
                <p id="valueH"><?php echo $H; ?></p>
             
            </div>
            <div>
                <strong>Tempratcher is :</strong>
                <p id="valueT"><?php echo $T; ?></p>
       
            </div>
            <div>
                <strong>Smoke is :</strong>
                <p id="valueG"><?php echo $G; ?></p>
    
            </div>
        </div>
        
    </div>
        
    <br>
    <br>
    <br>
    <br>
    <script src="sc.js"></script>
</body>
</html>







