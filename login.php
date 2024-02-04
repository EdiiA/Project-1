<!-- <?php //include('user.php');?>
<?php //include('validation.php');?> -->

<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_name = $_POST['username'];
        $passw = $_POST['psw'];

        if(!empty($user_name) && !empty($passw) && !is_numeric($user_name)){
            $query= "Select * From form where username = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result){

                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);


                    
                    if($user_data['psw'] == $passw){
                        session_start();
                        $_SESSION['name'] = $user_data['username'];
                        $_SESSION['roli'] = $user_data['roli'];

                        header("location:home-page.php");
                        die;

                    }
                }
            }
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
        }

    }
?>    

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>
        <link rel="stylesheet" href="login.css">
        <script src="https://kit.fontawesome.com/c8a0de6e0d.js" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="sign-up">
        <div class="signUp-text">
            <div class="bgfoto2">
                <p class="bg-logo"><img src="Img/logo-1.png" alt="logo"></p>
            </div>
            <p id="text-title">WELCOME</p>
            <p id="text-title-2">Always!</p>
            <p id="text-p">Laboris duis incididunt amet ullamco enim. In proident veniam duis est nostrud eiusmod laborum. Commodo mollit ipsum eiusmod minim magna ut voluptate duis irure tempor adipisicing deserunt et.</p>
        </div>
        <div class="signUp-form">
            <h1 id="title">LOGIN</h1>
            <form  onsubmit="return validateForm2()" method="POST">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="username2" name="username" placeholder="username">
                    </div>
                    
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password2" name="psw" placeholder="Password">
                    </div>

                    <p>Lost password <a href="#">Click Here!</a></p>
                    <p>Not a member? <a href="sign-up.php">Sign up</a></p>
                </div>

                <div class="btn-field">
                    <button type="submit" name="submit" id="signupBtn">Login </button>
                </div>
            </form>
        </div>
        <script src="funksioniLoginpage.js"></script>
    </div>
</body>
</html>