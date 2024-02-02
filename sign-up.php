<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $user_name = $_POST['username'];
        $email = $_POST['email'];
        $passw = $_POST['psw'];

        if(!empty($email) && !empty($passw) && !is_numeric($email)){
            $query = "insert into form (username, email, psw) values('$user_name', '$email', '$passw')";

            mysqli_query($con, $query);
            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }

    }
?>
  
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="sign-up.css">
        <script src="https://kit.fontawesome.com/c8a0de6e0d.js" crossorigin="anonymous"></script>
    </head>
<body>
<div class="sign-up">
    <div class="signUp-text">
        <div class="bgfoto">
            <p class="bg-logo"><img src="Img/logo-1.png" alt="logo"id="logo1" ></p>
            <!-- <p>Emri</p> House Of Cars -->
        </div>
        <div class="signUP-txt-div">
            <p id="text-title">WELCOME</p>
            <p id="text-title-2">Always!</p>
            <p id="text-p">Laboris duis incididunt amet ullamco enim. In proident veniam duis est nostrud eiusmod laborum. Commodo mollit ipsum eiusmod minim magna ut voluptate duis irure tempor adipisicing deserunt et.</p>
        </div>
    </div>
    <div class="signUp-form">
        <h1 id="title">Sign UP</h1>
        <form  onsubmit="return validateForm()" method="POST">
            <div class="input-group">
                <div class="input-field" id="nameField">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="username" placeholder="Username" name = "username">
                </div> 
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" id="email" placeholder="Email" name="email">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="password" placeholder="Password" name="psw">
                </div>
                <p>Lost password <a href="#">Click Here!</a></p>
                <p>Already a member <a href="login.php">Login here</a> </p>
            </div>
            <div class="btn-field">
                
                

                <input type="submit" id="signupBtn" value="Send Data" placeholder="Sign Up">
                

            </div>
        </form>
    
    </div>
    <script src="funksioniLoginpage.js"></script>
</div>
    
</body>
</html>