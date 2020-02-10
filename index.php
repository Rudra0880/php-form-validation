<?php require_once 'controllers/authController.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Bootstrap 4 css -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">

    <title>Homepage</title>
</head>
<body>

<div class="container">
<div class="row">
<div  class="col-md-4 offset-md-4 form-div login">

<?php if(isset($_SESSION['message']));?>
<div class="alert <?php echo $_SESSION['alert-class'];?>">
<?php 
echo $_SESSION['message'];
?>
    
</div>


<h3>Welcome, </h3>

<a href="#" class="logout">logout</a>


<div class="alert alert-warning">
    You need to verify your account.
    sign in to your email account and click on the verification link we just emailed you at 
    <strong></strong>
</div>



  <button class="btn btn-block btn-lg btn-primary">I am verified </button>

  </div>
 </div>
</div>


</body>
</html>