<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log in</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
  
    <body id="body-color">
          <h1>Log in form</h1>
        <div id="Sign-In">
            
          <form action="checkuser.php"method="POST">
              User Name : <br> <input type="text" size="15" name="username" /> <br> 
              
              Password :  <br> <input type="password" size="15" name="password" /> <br> 
              <input type="submit" value="Login" />
       
          </form> 
            
    </body>
</html>
