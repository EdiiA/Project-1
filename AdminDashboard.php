<?php
    include('DatabaseConnection.php');
    include_once "VeturaRepository.php";
    include('function.php');
    
    $strep = new VeturaRepository();
    $veturat = $strep->getAllVetura();


    $mess = new Contact();
    $messagee = $mess->getAllComments();

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
        <p>DASHBOARD</p>
    </div>

    <div class="register-link">
        <a href="register.php" style="color: #f5f5f5;">Register</a>
    </div>

    <div class="dashboard-table">
        <table class="table">
            <thead>
                <tr>
                    <th>Emri</th>
                    <th>Viti Prodhimit</th>
                    <th>Km</th>
                    <th>Motori</th>
                    <th>Hp</th>
                    <th>Cmimi</th>
                    <th>Foto</th>
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
                        <td class="edit-del"><a href='edit.php?id=<?php echo $vetura['ID'];?>'>Edit</a></td>
                        <td class="edit-del"><a href='delete.php?id=<?php echo $vetura['ID'];?>'>Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        
    </div>
    <h1>Contact Us Messages</h1>
    <div class="contact-table">
        <table>
            <thead>
            <tr>
            <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Message</th>
           
            </tr>
            </thead>
            <tbody>
                <?php foreach($messagee as $msg) { ?> <!--e hapim foreach-->
                    <tr>
                    <td><?php echo $msg['first_name'];?></td>
                        <td><?php echo $msg['last_name'];?></td>
                        <td><?php echo $msg['email'];?></td>
                        <td><?php echo $msg['mess'];?></td>
                     
                       
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
