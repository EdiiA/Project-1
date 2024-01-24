<?php include('user.php');?>
<?php include('validation.php');?>

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
            <!-- ?php echo $_SERVER['PHP_SELF']; ? -->
            <form action="home-page.php" method="POST" onsubmit="return validateForm2()">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="username2" name="name" placeholder="Username">
                    </div>
                    
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password2" name="psw" placeholder="Password">
                    </div>

                    <p>Lost password <a href="#">Click Here!</a></p>
                    <p>Not a member? <a href="sign-up.php">Sign up</a> </p>
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