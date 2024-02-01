<?php
SESSION_START();

include 'teamRepository.php';
$id = $_GET['id'];

$editedBy = isset($_SESSION['name']) ? "Edited By: " . $_SESSION['name'] : "Edited By: Unknown";
$strep = new TeamRepository();
$team = $strep->getTeamById($id);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <?php
        include('header.php');
        
        echo $header1;
    ?>

    <!-- <h3>Edit Vetura</h3>
    <form action="<?php //echo $SERVER['PHP_SELF']?>" method="POST">
    
        <input type="text" name="emri"  value="<?php //echo $vetura['Emri']?>"> <br> <br> 
        <input type="text" name="vitiProdhimit"  value="<?php //echo $vetura['VitiProdhimit']?>"> <br> <br>
        <input type="text" name="km"  value="<?php //echo $vetura['Km']?>"> <br> <br>
        <input type="date" name="motori"  value="<?php //echo $vetura['Motori']?>"> <br> <br>
        <input type="text" name="hp"  value="<?php //echo $vetura['Hp']?>"> <br> <br>
        <input type="text" name="cmimi"  value="<?php //echo $vetura['Cmimi']?>"> <br> <br>
        
        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form> -->



    <div class="edit-title">
        <p>Edit Team</p>
    </div>

    <div class="form-div">
        <form class="edit-form" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST">
             <!-- nese nuk duam t'i ndryshojme te gjitha te dhenat, e perdorim kete pjesen tek value qe te na shfaqen vlerat aktuale, ashtu qe atributet qe nuk duam t'i ndryshojme mbesin te njejta pa pasur nevoje t'i shkruajme prape-->
             <div>
                <label class="team-lable-1" for="">First Name:</label>  
                <input class="input-field-3" type="text" name="firstName" value="<?php echo $team['firstname']?>">
                
                <label for="">Last Name:</label>
                <input class="input-field-3" type="text" name="lastName" value="<?php echo $team['lastname']?>">
            </div><br>

            <div>
                <label for="">Position:</label>
                <input class="input-field" type="text" name="pozita" value="<?php echo $team['pozita']?>">

                <label for="">Description:</label>
                <input class="input-field" type="text" name="pershkrimi" value="<?php echo $team['pershkrimi']?>">
            </div><br>
            <div>
                <label for="">Image:</label>
                <input  class="input-field" type="file" name="image"  value="<?php echo $team['img']?>">

                <input type="hidden" name="modifikoi" value="<?php echo htmlspecialchars($editedBy); ?>">
            </div>

        
            <div>
                <input class="edit-submit" type="submit" name="editBtn" value="save">
                <button type="submit" class="edit-submit"><a href="AdminDashboard.php">Dashboard</a></button>
            </div>
            
            <!-- <button name="editBtn"><a href="AdminDashboard.php">Save Changes</a></button> -->
        </form>
    </div>

    <?php
        include('footer.php');
    
        echo $footer1;
    ?>
</body>
</html>

<?php 
    if(isset($_POST['editBtn'])){
        $id =$id;
        $firstName = $_POST['firstName']; //merret nga formulari
        $lastName = $_POST['lastName'];
        $pozita = $_POST['pozita'];
        $pershkrimi = $_POST['pershkrimi'];
        $img = $_POST['image'];
        $modifikim = $_POST['modifikoi'];

        $strep->editTeam($id, $firstName, $lastName, $pozita, $pershkrimi, $img, $modifikim);
        header("location:AdminDashboard.php");
        exit();
    }
    $team = $strep->getTeamById($id);
?>