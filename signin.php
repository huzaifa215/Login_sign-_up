<!DOCTYPE html>
<html>
<head>
<title>User register System</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2> Log In </h2>
</div>
<form method="post" action="signin.php">
<div class="input-group">
<label>User Name </label>
<input type="text" name="username">
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password">
</div>


<div class="input-group">
<button type="submit" name ="login " class="btn">LogIn</button>
</div>
<p>
   Not have a Account? <a href="login.php"> Sign Up </a>
</p>
</form>
</body>
</html>
