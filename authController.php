<?php
session_start();

require 'confg/db.php';

$errors= array();
$username="";
$email="";


//if user click on the sign uo button 
if(isset($_POST['signup-btn'])){

$username=$_POST['username'];
$email= $_POST['email'];
$password=$_POST['password'];
$passwordConf=$_POST['passwordConf'];

//validation
if(empty($username)){
    $errors['username']="username required";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email']="Email address is invalid ";
}

if(empty($email)){
    $errors['email']="Email required";

}
if(empty($password)){
    $errors['password']="password required";
}

if($password !==$passwordConf){
    $errors['password']="The two password do not match";
}

$emailquery="SELECT * FROM user WHERE email=? LIMIT 1";
$stmt= $conn->prepare($emailquery);
$stmt->bind_param('s',$email);
$stmt->execute();
$result=$stmt->get_result();
$usercount=$result->num_rows;
$stmt->close();

if($userCount > 0){
    $errors[ 'email']="Email aleady exists";

}

if(count($errors)===0){
    $password=password_hash($password,PASSWORD_DEFAULT);
    $token=bin2hex(random_bytes(50));
    $verified=false;

    $sql="INSERT INTO user(username, email, verified, token, password)VALUES(?,?,?,?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->bind-param('ssbss',$email, $verified, $token, $password);
    
    if($stmt->execute()){
        //login user
        $user_id=$conn->insert_id;
        $_SESSION['id']=$user_id;
        $_SESSION['username']=$username;
        $_SESSION['email']=$email;
        $_SESSION['verified']=$verified;
        //set flash message
        $_SESSION['message']="You are now logged in!";
        $_SESSION['alert-class']="alert-success";
        header('location:index.php');
        exit();
       }else{
        $error['db_error']="Database error:failed to register";

    }
}

} 