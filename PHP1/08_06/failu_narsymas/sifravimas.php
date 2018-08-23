<?php  session_start(); ?>  

<?php

if(isset($_SESSION['use']))   

 {
    header("Location:http://localhost:83/PHP1/08_06/failu_narsymas/sifravimas.php"); 
 }

if(isset($_POST['login']))   
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

      if($user == "Kristina" && $pass == "Kaunas")  
         {                                      

          $_SESSION['use']=$user;


         header("Location: http://localhost:83/PHP1/07_31/projektai.php");

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
 ?>

<div class=container>
    <form class="dropdown-menu p-4" method="POST" action="">
        <h2 class="form-signin-heading">Please Login to my Page:</h2>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"></span>
        <input type="text" name="user" class="form-control" placeholder="UserName" required>
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
    </div>
	<br>
        <div><button class="btn btn-lg btn-primary btn-block" input type="submit" name="login" value="LOGIN">Login</button></div>
		<br>
        &copy; <?php echo date("Y"); ?>
    </form>
    
</div>
