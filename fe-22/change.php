<?php

    include_once 'password.php';

    if (isset($_POST['password'])) {

        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['old_password']);
        $newpassword = strip_tags($_POST['new_password']);
        $confirmnewpassword = strip_tags($_POST['con_newpassword']);

       
        $sql = "SELECT * FROM `users` WHERE `username` = ? LIMIT 1";

        $query = $dbh->prepare($sql);
        $query->bindParam(1, $username, PDO::PARAM_STR);

        if($query->execute() && $query->rowCount()){
            $hash = $query->fetch();
            if ($password == $hash['password']){
                if($newpassword == $confirmnewpassword) {
                    $sql = "UPDATE `users` SET `password` = ? WHERE `username` = ?";

                    $query = $dbh->prepare($sql);
                    $query->bindParam(1, $newpassword, PDO::PARAM_STR);
                    $query->bindParam(2, $username, PDO::PARAM_STR);
                    if($query->execute()){
                        echo "Password Changed Successfully!";
                    }else{
                        echo "Password could not be updated";
                    }
                } else {
                    echo "Passwords do not match!";
                }
            }else{
                echo "Please type your current password accurately!";
            }
        }else{
            echo "Incorrect username";
        }
    }

?>