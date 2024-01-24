<?php
    include('user.php');

    // if(isset($_POST['submit'])){
    //     for ($i=0; $i < sizeof($user); $i++) { 
    //         if($_POST['name'] == $user[$i][0] && $_POST['psw'] == $user[$i][1]){
                
    //             setcookie('name', $user[$i][0],time()+3600); 
    //             setcookie('password',$user[$i][1],time()+3600);
    //             setcookie('roli', $user[$i][2],time()+3600);
    //             header("Location:home-page");
    //         }
    //     }
    // }

    if(isset($_POST['submit'])){
        for ($i=0; $i < sizeof($user); $i++) { 
            if($_POST['name'] == $user[$i][0] && $_POST['psw'] == $user[$i][2]){
                session_start();
                $_SESSION['name'] = $user[$i][0];
                $_SESSION['roli'] = $user[$i][4];
                

                header("Location:home-page.php");
            }
        }
    }
?>

    