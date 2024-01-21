<?php include('user.php');?>
<?php include('validation.php');?>

<?php
    // session_start();

    $header1 = "<header>
                    <ul>
                        <li><a href='home-page.php'>HOME</a></li>
                        <li><a href='showroom.php'>SHOWROOM</a></li>
                        <li><a href='about-us.php'>ABOUT US</a></li>
                        <li><a href='contactus.php'>CONTACT</a></li>
                        <li><a href='team.php'>TEAM</a></li>
                    </ul>
                </header>";

//     if($_SESSION['roli']=="admin"){
//         $header1 = "<header>
//                         <ul>
//                             <li><a href='home-page.php'>HOME</a></li>
//                             <li><a href='showroom.php'>SHOWROOM</a></li>
//                             <li><a href='about-us.php'>ABOUT US</a></li>
//                             <li><a href='contactus.php'>CONTACT</a></li>
//                             <li><   a href='team.php'>TEAM</a></li>
//                             <li><button><a href='dashboard.php'>Dashboard</a></button></li>
//                         </ul>
//                     </header>";
//     }
// ?>