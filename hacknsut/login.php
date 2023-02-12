<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include'connect.php';
    $email=$_POST['email'];
    $password=$_POST['password'];

   
$sql="Select * from 'registration where username='$username'";
$result=mysqli_query($con,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        $user=1;
        //echo"user already exist";
    }else{
        $sql="insert into'registration'(email,password)
        values('$email','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
            $success=1;
            //echo "signup successfull";
        }else{
            die(mysql_error($con));
        }

    }
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriptions</title>
    <link rel="stylesheet" href="def.css">
</head>
<body>

    <h1>.....</h1>
    <hr>
    <a href="main.html">HOME</a>
    <form action="" class="back">
        <h1>LOGIN </h1>
        <hr>
        <h2>Contact Information</h2>
        <h3>Required fields are markes as *</h3>
        <p>Name: *<input type="text" name="Name" required placeholder="abcd"></p>
        <Fieldset>
            <legend>Gender*</legend>
            <p>
                Male <input type="radio" name="gender" id="male" required>
                Female <input type="radio" name="gender" id="female" required>
                Others <input type="radio" name="gender" id="others" required>
            </p>
        </fieldset>
        <p>Address: <textarea name="address" id="address" cols="130" rows="6"></textarea></p>
        <p>Email: *<input type="email" name="email" id="email" required></p>
        <p>password: <input type="password" name="password" id="password"></p>
        <p><input type="submit" value="login"></p>
        <hr>
    
    
    </form>
    
</body>
</html>