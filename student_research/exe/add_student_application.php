<?php
include('../connect.php');

$group_id = $_REQUEST['group_id'];
$research_date = $_REQUEST['research_date'];

$teacher_id = $_REQUEST['teacher_id'];
$teacher_id = preg_replace('/[^0-9\.]/', '', $teacher_id);

$research_topic = $_REQUEST['research_topic'];
$research_topic_en = $_REQUEST['research_topic_en'];

$research_direct = $_REQUEST['research_direct'];
$research_tag = implode(' | ', $_POST['research_tag']);
$research_tag = trim($research_tag, ' | ');
$research_desc = $_REQUEST['research_desc'];

mysqli_query(
  $conn,
  "INSERT INTO zgroup_research
    VALUES ('$group_id', '$teacher_id', '$research_topic', '$research_topic_en', '$research_direct', '$research_tag', '$research_desc', '$research_date', null, null)"
);

header("location: ../student_index.php");
