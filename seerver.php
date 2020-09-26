<?php
// connect to the data base
$db=mysqli_connect("localhost","root","", "loginform")or die("Connection was not established");

if (isset($_POST['login'])){
    $username=htmlentities(mysqli_real_escape_string($db,$_POST['username']));
    $email=htmlentities(mysqli_real_escape_string($db,$_POST['email']));
    $password=htmlentities(mysqli_real_escape_string($db,$_POST['password']));
   
if(empty($username)){
    array_push($errors,"username is requires");
}
if(empty($email)){
    array_push($errors,"email is requires");
}
if(empty($password)){
    array_push($errors,"password is requires");
}
    if(count($errors)==0){
        $password_1=md5($password);// encrpt the pass befor entring the dat base 
        $sql="INSERT INTO users (username, email, password) VALUES ('$username',$email',$password_1')";
    }   

    mysqli_query($db,$sql);

}


?>
