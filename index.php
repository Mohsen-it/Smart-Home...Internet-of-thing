<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body{
            
            background-color: #aaaaaa;
            color: #222222;
        }
        p{
            display: block;
            text-align:center;
        }

        header h1{
            text-align: center;
            margin-top: 50px;
            color: chocolate;
            font-weight: 700;
        }
        header p{
            margin-top: 8px;
            font-size: 16px;
            font-weight: 500;
        }
        form{
            background-color:#cccccc;
            display: inline-block;
            border: 2px #222222 solid;
            font-family: initial;
            border-radius: 10px;
            margin-top: 100px;
            margin-left: 30%;
            margin-right: 30%;
        }
        form h1{
            font-size: 50px;
            text-align: center;
            color: chocolate;
            font-weight: 700;
        }
        form fieldset{
            font-size: 30px;
            margin: 20px;
            background-color: #eeeeee;
            clear: both;
        }
        input{
            width: 250px;
            height: 30px;
            border: none;

        }
        input,label{
            margin-bottom: 15px;
        }
        #submit{

            margin-left: 33%;
            width: 150px;
            height: 35px;
            margin-top: 1px;
            background-color:#2ade30;
            border-radius: 15px;

        }
        #submit:hover{
            background-color:#03ad03;
        }
        .error{
            color: red;
            margin-left: 30%;
            font-weight: 400;
        }


    </style>
</head>
<body>
    <header>
        <h1>Welcom In IOT ..</h1>
        <p>login for contnrol in evry things in your home</p>
    </header>
    <form  target="_slef" action="fun/logintest.php?q1=" method="get" >
        <h1>Login</h1>
          <fieldset>
              <legend>Login Information</legend>
              <table>
                      <tr>
                      <td><label for="un">UserName:</label></td>
                      <td><input type="text" required title="Not Valid" autocomplete="off" tabindex="4" placeholder="Enter Your UserName:"  required name="User" id="un" /></td>
                  </tr>
                  <tr>
                      <td></td><td></td>
                  </tr>
                  <tr>
                      <td><label for="pw">PassWord:</label></td>
                      <td><input type="password" required  placeholder="Enter Your PassWord" tabindex="5" name="Password" id="pw" /></td>
                  </tr>
                  <tr>
                      <td></td><td></td>
                  </tr>
                  <tr>
                      <td><label for="pw">Confrim PassWord:</label></td>
                      <td><input type="password" required placeholder="confirm PassWord" tabindex="6" name="ConfirmPassword" id="cpw" /></td>
                  </tr>
                  <tr><td></td><td></td>
                   </tr>
              </table>
          </fieldset>
          <input id="submit" type="submit" tabindex="7" value="LogeIn" /> 
          <?php
            error_reporting(0);
            $q1=$_GET['q1'];
                if($q1==2){
                    echo '<div class="error"> Username not registered </div>';
                }
                if($q1==1){
                    echo '<div class="error"> Passwords do not match </div>';

                }
          ?>
      </form>
          <br>
          <br>
          <br>
          <br>
</body>
</html>