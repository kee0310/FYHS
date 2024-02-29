<?php
include('../connect.php');

$id = $_GET['id'];
$table = $_GET['table'];
$editable = $_GET['editable'];

mysqli_query($conn, "UPDATE `$table` SET `editable`=N'$editable' WHERE `group_id`='$id'");

if ($table == 'zgroup_budget') {
  header("location: ../admin_researchBudget.php");
} elseif ($table == 'zgroup_research') {
  header("location: ../admin_researchApplication.php");
} elseif ($table == 'zgroup_proposal') {
  header("location: ../admin_researchProposal.php");
} elseif ($table == 'zgroup_report') {
  header("location: ../admin_researchReport.php");
} elseif ($table == 'zgroup_finalreport') {
  header("location: ../admin_researchFinalreport.php");
}
