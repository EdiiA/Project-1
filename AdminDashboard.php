<?php
    include('DatabaseConnection.php');
    include_once "VeturaRepository.php";
    include('function.php');
    include_once "teamRepository.php";
    
    $strep = new VeturaRepository();
    $veturat = $strep->getAllVetura();

    $mess = new Contact();
    $messagee = $mess->getAllComments();

    $editedBy = isset($_SESSION['name']) ? "Edited By: " . $_SESSION['name'] : "Edited By: Unknown";
    $te = new TeamRepository();
    $team = $te->getAllTeam();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <?php
        include('header.php');
        echo $header1;
    ?>
    
    <div class="dashboard-title">
        <p>Dashboard</p>
    </div>

    <div class="titlee">
        <p>Cars</p>
    </div>

    <div class="register-link">
        <a href="register.php" style="color: #f5f5f5;">Register</a>
    </div>
 
    <div class="dash-resp">
        <div class="dashboard-table">
            <table class="dash-table">
                <thead>
                    <tr>
                        <th>Emri</th>
                        <th>Viti Prodhimit</th>
                        <th>Km</th>
                        <th>Motori</th>
                        <th>Hp</th>
                        <th>Cmimi</th>
                        <th>Foto</th>
                        <th>Edited/Added</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($veturat as $vetura) { ?>
                        <tr>
                            <td><?php echo $vetura['Emri'];?></td>
                            <td><?php echo $vetura['VitiProdhimit'];?></td>
                            <td><?php echo $vetura['Km'];?></td>
                            <td><?php echo $vetura['Motori'];?></td>
                            <td><?php echo $vetura['HP'];?></td> <!-- Changed 'HP' to 'Hp' assuming this is the correct case in your database -->
                            <td><?php echo $vetura['Cmimi'];?></td>
                            <td><?php echo $vetura['Foto'];?></td>
                            <td><?php echo $vetura['Modifikim'];?></td>
                            <td class="edit-del"><a href='edit.php?id=<?php echo $vetura['ID'];?>'>Edit</a></td>
                            <td class="edit-del"><a href='delete.php?id=<?php echo $vetura['ID'];?>'>Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="titlee">
        <p>Contact Table</p>
    </div>

    <div class="contact-table">

        <!-- <p id="contact-msg">Contact Us Messages</p> -->
        
        <table class="table">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Messages</th>
           
            </tr>
            </thead>
            <tbody>
                <?php foreach($messagee as $msg) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $msg['first_name'];?></td>
                        <td><?php echo $msg['last_name'];?></td>
                        <td><?php echo $msg['email'];?></td>
                        <td><?php echo $msg['mess'];?></td>
                        <!-- <td class="edit-del"><a href='delete-team.php?id=<?php //echo $msg['first_name'];?>'>Delete</a></td> -->
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </div> 
   
    <div class="titlee">
        <p>Team Table</p>
    </div>
    <div class="register-linkT">
        <a href="register-team.php" style="color: #f5f5f5;">Register</a>
    </div>
    <div class="contact-table">
        <table  class="table">
            <thead>
            <tr>
            <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Description</th>
                <th>Image</th>
                <th>Edited/Added</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($team as $teams) { ?> <!--e hapim foreach-->
                    <tr>
                    <td><?php echo $teams['firstname'];?></td>
                        <td><?php echo $teams['lastname'];?></td>
                        <td><?php echo $teams['pozita'];?></td>
                        <td><?php echo $teams['pershkrimi'];?></td>
                        <td><?php echo $teams['img'];?></td>
                        <td><?php echo $teams['Modifikim'];?></td>
                        <td class="edit-del"><a href='edit-team.php?id=<?php echo $teams['ID'];?>'>Edit</a></td>
                        <td class="edit-del"><a href='delete-team.php?id=<?php echo $teams['ID'];?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </div>                    
    <?php
        include('footer.php');
        echo $footer1;
    ?>
</body>
</html>
