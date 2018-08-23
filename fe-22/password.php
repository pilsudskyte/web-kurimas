<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fe-22 password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/6603c9fd94.js"></script>
    <style type="text/css">
   body {
       margin-left: 5%;
       background-image: url("https://www.inspectionsupport.net/wp-content/uploads/2014/07/LoginRed.jpg");
       background-repeat: no-repeat;
       background-size: 40%;
       background-position: center;
   }
   form {
            height: 45%;
            width: 30%;
            margin: auto;
            margin-top: 2%;
            border-width: 100%;
            border-style: groove;
            padding-left: 3%;
        
   }
   div {
       margin: 1%;
   }
   input {
      margin-top: 4%;
  }
   </style>
</head>
<body>
<h2>Yours info:</h2>
Welcome <?php echo $_POST["username"]; ?><br>
Your old password is: <?php echo $_POST["old_password"]; ?><br>
Your new password is: <?php echo $_POST["new_password"]; ?>
<div class=container>
<form name="resetform" action="change.php" id="resetform" class="passform" method="post" role="form">
  <h3>Change Your Password:</h3>
  
  <input type="hidden" name="username" value="<?php echo $sname;?>" ></input>
  <br>
  <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Enter Old Password">
  <br>
  <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter New Password">
  <br>
  <input type="password" class="form-control"  name="con_newpassword"  id="con_newpassword" placeholder="Confirm New Password">
 <br>
 <input type="submit" class="btn btn-warning" name="password_change" id="submit_btn" value="Change Password">
 
 &copy; <?php echo date("Y"); ?> <br>  
</form>
       

</body>
</html>

