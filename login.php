<html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>
        <link rel="stylesheet" href="login.css">
        <script src="https://kit.fontawesome.com/c8a0de6e0d.js" crossorigin="anonymous"></script>
<body>
<div class="sign-up">
    <div class="signUp-text">
        <div class="bgfoto2">
            <p class="bg-logo"><img src="Img/logo-1.png" alt="logo"></p>
            <!-- <p>Emri</p> House Of Cars -->
        </div>
        <p id="text-title">WELCOME</p>
        <p id="text-title-2">Always!</p>
        <p id="text-p">Laboris duis incididunt amet ullamco enim. In proident veniam duis est nostrud eiusmod laborum. Commodo mollit ipsum eiusmod minim magna ut voluptate duis irure tempor adipisicing deserunt et.</p>
    </div>
    <div class="signUp-form">
        <h1 id="title">LOGIN</h1>
        <form action="home-page.html" onsubmit="return validateForm2()">
            <div class="input-group">
                <div class="input-field" id="nameField">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="username2" placeholder="Username">
                </div>
                
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="password2" placeholder="Password">
                </div>
                <p>Lost password <a href="#">Click Here!</a></p>
                <p>Not a member? <a href="sign-up.html">Sign up</a> </p>
            </div>
            <div class="btn-field">
                
                <button type="submit" id="signupBtn">Login </button>
                

            </div>
        </form>
    
    </div>
    <script src="funksioniLoginpage.js"></script>
</div>
    
</body>
</html>