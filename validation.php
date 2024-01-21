<?php
    if(isset($_POST['submit'])){
        for ($i=0; $i < sizeof($user); $i++) { 
            if($_POST['name'] == $users[$i][0] && $_POST['psw'] == $user[$i][1]){
                session_start();
                $_SESSION['name'] = $user[$i][0];
                $_SESSION['password'] = $user[$i][1];
                $_SESSION['roli'] = $user[$i][2];
                

                header("Location:home-page.php");
            }
        }
    }
?>