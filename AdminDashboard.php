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
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <?php
        include('header.php');
        echo $header1;
    ?>

    <div class="edit-title">
        <p>DASHBOARD</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Emri</th>
                <th>VitiProdhimit</th>
                <th>Km</th>
                <th>Motori</th>
                <th>Hp</th>
                <th>Cmimi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($veturat as $vetura) { ?> <!--e hapim foreach-->
                <tr>
                    <td><?php echo $vetura['Emri'];?></td>
                    <td><?php echo $vetura['VitiProdhimit'];?></td>
                    <td><?php echo $vetura['Km'];?></td>
                    <td><?php echo $vetura['Motori'];?></td>
                    <td><?php echo $vetura['HP'];?></td>
                    <td><?php echo $vetura['Cmimi'];?></td>
                    <td><a href='edit.php?id=<?php echo $vetura['ID'];?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
                    <td><a href='delete.php?id=<?php echo $vetura['ID'];?>'>Delete</a></td>
                </tr>
            <?php }?> <!--e mbyllim foreach-->
        </tbody>
    </table>

    <?php
        include('footer.php');
    
        echo $footer1;
    ?>
</body>
</html>