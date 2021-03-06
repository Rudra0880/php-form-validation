<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Bootstrap 4 css -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>
<body>

<div class="container">
<div class="row">
<div  class="col-md-4 offset-md-4 form-div login">
<form action="login.php" method="post">
<h3 class="text-center">Login</h3>

<div class=".alert alert-danger">
    <li>Username required</li>
</div> 

<div class="form-group">
<lebel for="username">username or Email</lebel>
<input type="text" name="username" class="form-control form-control-lg">
</div> 

<div class="form-group">
<lebel for="password">Password</lebel>
<input type="password" name="password" class="form-control form-control-lg">
</div>

<div class="form-group">
<button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
</div>
<p class="text-center">Already a member?<a href="signup.php">Sign In</a></p>
</form>

</body>
</html>