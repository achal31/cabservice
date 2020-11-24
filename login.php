<?php 
include_once('function.php');
// Object creation
$userdata=new DB_con();
if(isset($_POST['login']))
{
// Posted Values
$name=$_POST['name'];
$pasword=($_POST['password']);
//Function Calling
$sql=$userdata->signin($name,$pasword);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
<script src="https://www.w3schools.com/js/myScript1.js"></script>
</head>
<body id="loginpage">
<div id="wrapper">
<img src="Screenshot.png" height="70">
    <h2 id="registerheading">User Login</h2>
    <form id="register" method="post" action="login.php">
        
        <p>
            <input type="text" name="name" placeholder="Enter The User Name" class="detail" required>
        </p>
        
        <p>
           <input type="password" name="password" placeholder="Enter The Password" class="detail" id="password" required>
        </p>
       
        <p>
            <input type="checkbox" onclick="myFunction()">Show Password
        </p>      
        <p>
        <input type="submit" name="login" value="Login" id="detailbutton">   
        <a href="register.php" class="linkbutton">Create An Account</a> 
        </p>
        
        
        
</form>
</div>
<script>
    function myFunction(id) {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

}

</script>
</body>
</html>