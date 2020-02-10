<?php require_once'controllers/authController.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Bootstrap 4 css -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">

    <title>Php  form validation</title>
</head>
<body>

<div class="container">
<div class="row">
<div  class="col-md-4 offset-md-4 form-div">
<form action="signup.php" method="post">
<h3 class="text-center">Register</h3>
<?php if(count($errors)>0):?>
<div class=".alert alert-danger">
    <?php foreach($error as $error):?>
    <li><?php echo $error;?></li>
<?php endforeach;?>
</div> 
    <?php endif;?>

<div class="form-group">
<lebel for="username">username</lebel>
<input type="text" name="username" value="<?php echo $username;?>" class="form-control form-control-lg">
</div>

<div class="form-group">
<lebel for="email">Email</lebel>
<input type="email" name="email" value="<?php echo $email;?>" class="form-control form-control-lg">
</div>    

<div class="form-group">
<lebel for="password">Password</lebel>
<input type="password" name="password" class="form-control form-control-lg">
</div>

<div class="form-group">
<lebel for="passwordconf">Confirm Password</lebel>
<input type="password" name="passwordconf" class="form-control form-control-lg">
</div>

<div class="form-group">
<button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign up</button>
</div>
<p class="text-center">Already a member?<a href="login.php">Sign In</a></p>
</form>


</body>
</html>