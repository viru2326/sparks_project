<?php
include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sparks Bank</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">
<style>
.temp{
background-color: #1a2238;
  position: absolute;
  top: 50%;
  left: 50%;
 padding:30px;
  transform: translate(-50%, -50%);
border: 1px solid #FFFF00;
border-radius:20px;
}

</style>

</head>
<body style="background-color:white;">
<?php
include 'includes/header.php';
?>
<div class="temp">
<div class="container ">
<div class="row ">
<br>

<h1 class="sign text-center" style="margin-top: 100px; color: #9daaf2;">CREATE</h1>
<br>
<div class="col-sm-offset-4 col-sm-6 col-md-5 ">
<form method="POST" action="user_script.php" >
<div class="form-group">
<label for="name" style="color: #f4db7d;">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name" required>
</div>
<div class="form-group">
<label for="email" style="color: #f4db7d;">Email</label>
<input type="text" class="form-control" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<label for="balance" style="color: #f4db7d;">Balance</label>
<input type="number" class="form-control" step="0.01" name="balance" placeholder="Balance" required>
</div>
<button class="btn btn-danger">Submit</button>
</form>
</div>
</div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>