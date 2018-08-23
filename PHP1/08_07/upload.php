<?php 
// Super globali konstanta
define("UPLOADPATH", "/Users/eimantaskasperiunas/Downloads/php_programos_medziaga_v3 (1)/");




// echo $_FILES["image"]['tmp_name'];

// Gauname failo formato galune
$extension =  "." . pathinfo($_FILES["image"]['name'],PATHINFO_EXTENSION);

// Perkelti faila is laikinos vietos i 
move_uploaded_file($_FILES["image"]["tmp_name"], UPLOADPATH . time() . $extension);

header("Location: http://localhost:83/PHP1/08_07/files.php");
?>


