<?php
include_once 'VeturaRepository.php';
$id = $_GET['id'];//e merr id prej url

$strep = new VeturaRepository();
$strep->deleteVetura($id);

header("location:AdminDashboard.php");
?>