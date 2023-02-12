<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include'connect.php';
    $email=$_POST['email'];
    $password=$_POST['password'];

    //$sql="insert into'registration'(email,password)
    //values('$email','$password')";
    //$result=mysqli_query($con,$sql);

    //if($result){
      //  echo "Data inserted successfully";0

    //}else{
      //  die(mysql_error($con));
    //}
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
<?php
if($user){
    echo'<div class="alert alert-danger
    alert-dismissible fade show"role="alert">
    <strong>ohh no sorry </strong> User already exist
    <button type="button" class="close"
    data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>

<?php
if($success){
    echo'<div class="alert alert-success
    alert-dismissible fade show"role="alert">
    <strong>success </strong> you are successfully signed up.
    <button type="button" class="close"
    data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>
  
    <form action="signup.php" method="post">
        <h1>SIGN UP</h1>
        <hr>
        <h6>( Required fields are markes as * )</h6>
        <p>Name: *<input type="text" name="Student's Name" required></p>
        <Fieldset>
            <legend>Gender*</legend>
            <p>
                Male <input type="radio" name="gender" id="male" required>
                Female <input type="radio" name="gender" id="female" required>
                Others <input type="radio" name="gender" id="others" required>
            </p>
        </fieldset>
        
        <p>Phone number: * <input type="tel" name="phone" id="phone"></p>
        <p>Email: *<input type="text" name="email" id="email" required></p>
        <p>Pincode: * <input type="number" name="Pincode" id="Pincode" required></p>
        <hr>
        <p>Create Username: *<input type="text" name="username" id="username" required></p>
        <p>Create Password: * <input type="password" name="password" id="password" required></p>
        <p>Confirm Password: * <input type="password" name="password" id="password" required></p>
        <hr>
                
        <input type="submit" value="Register now">
    
    
    </form>
</body>
</html>