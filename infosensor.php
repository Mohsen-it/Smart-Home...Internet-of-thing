<?php 
include("connect.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }
        div{
            display: flex;
            width: 100%;
            justify-content: center;
        }
        table{
            display: block;
            border: 1px dotted black;
    
        }
    </style>
</head>
<body>
    <div>
    <table>
        <th>
            <td>Id</td>
            <td>Date</td>
            <td>Temperature</td>
            <td>Humidity</td>
            <td>Gas</td>
        </th>
       <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
       <tr></tr>
    </table>
</div>

</body>
</html>