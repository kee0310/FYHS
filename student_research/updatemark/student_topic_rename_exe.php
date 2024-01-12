<?php
include("../connect.php");


$student_id = $_POST['student_id'];
$research_topic = $_POST['research_topic'];
$research_topic_en = $_POST['research_topic_en'];


mysqli_query($conn, "UPDATE zstudent_group SET research_topicnew=N'$research_topic',research_topic_ennew=N'$research_topic_en' WHERE group_id='$student_id'");

echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_research_finalreport.php>";
