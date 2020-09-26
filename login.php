<?php
include('seerver.php')
?>
<!DOCTYPE html>
<html>
<head>
<title>User register System</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2> Register </h2>
</div>
<form method="post" action="login.php">
<!-- display the relevant errors -->
<?php

include('errors.php');

?>
<div class="input-group">
<label>User Name </label>
<input type="text" name="username">
</div>



<div class="input-group">
<label>Email </label>
<input type="text" name="email">
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password">
</div>
<div class="input-group">
<label>Confrm Password </label>
<input type="password" name="password_2">
</div> 

<div class="input-group">
<button type="submit" name ="register " class="btn">Register</button>
</div>
<p>
    Already have a account? <a href="signin.php"> Sign In </a>
</p>
</form>
</body>
</html>
