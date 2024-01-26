<?php
include_once 'teamRepository.php';
$id = $_GET['id'];//e merr id prej url

$team= new TeamRepository();
$team->deleteTeam($id);

header("location:AdminDashboard.php");
?>