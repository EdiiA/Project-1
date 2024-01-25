<?php
    include('DatabaseConnection.php');
    include_once "VeturaRepository.php";
    
    $strep = new VeturaRepository();
    $veturat = $strep->getAllVetura();
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
    <a href="register.php">Register</a>
    <div class="dashboard-title">
        <p>DASHBOARD</p>
    </div>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Emri</th>
                    <th>Viti Prodhimit</th>
                    <th>Km</th>
                    <th>Motori</th>
                    <th>Hp</th>
                    <th>Cmimi</th>
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
                        <td><a href='edit.php?id=<?php echo $vetura['ID'];?>'>Edit</a></td>
                        <td><a href='delete.php?id=<?php echo $vetura['ID'];?>'>Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php
        include('footer.php');
        echo $footer1;
    ?>
</body>
</html>
