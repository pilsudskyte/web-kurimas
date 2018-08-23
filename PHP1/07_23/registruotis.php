<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form class="form-signin" method="POST" action="atsakymas.php">
        <h2 class="form-signin-heading">Please Login:</h2>
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"></span>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="text" name="e. pastas" id="inputPassword" class="form-control" placeholder="mail">
    </div>
    <br>
    
        <div><button class="btn btn-lg btn-primary btn-block" type="submit">Login</button></div>
        <br>
        &copy; <?php echo date("Y"); ?>
    </form>

    
</body>
</html>