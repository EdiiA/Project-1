<?php
include_once 'VeturaRepository.php';
$id = $_GET['ID'];//e merr id prej url

$strep = new VeturaRepository();
$strep->deleteVetura($id);

header("location:AdminDashboard.php");
?>