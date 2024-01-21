   
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

   <h1>Dashboards</h1>
   
   <nav>
    <ul>
      <li><a href="#">Produkte</a></li>
      <li><a href="#">Porositë</a></li>
      <li><a href="#">Statistikat</a></li>
      <!-- Shtoni opsione shtesë sipas nevojave tuaja -->
    </ul>
  </nav>

          <table>
            <thead>
            <tr>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Emaili</th>
                <th>Data e Lindjes</th>
                <th>Niveli</th>
                <th>Viti</th>
                <th>Departamenti</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($students as $student) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $student['Emri'];?></td>
                        <td><?php echo $student['Mbiemri'];?></td>
                        <td><?php echo $student['Emaili'];?></td>
                        <td><?php echo $student['DataeLindjes'];?></td>
                        <td><?php echo $student['Gjinia'];?></td>
                        <td><?php echo $student['VitiAkademik'];?></td>
                        <td><?php echo $student['NiveliIStudimit'];?></td>
                        <td><?php echo $student['Departamenti'];?> </td>
                        <td><a href='edit.php?id=<?php echo $student['Id']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='delete.php?id=<?php echo $student['Id']?>'>Delete</a></td>
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