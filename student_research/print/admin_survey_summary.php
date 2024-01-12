<?php
require('../connect.php');
include("../exe/auth_admin.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php

  $id = $_GET['id'];
  $result = mysqli_query($link, "
			
									SELECT *
									FROM course_detail
									WHERE course_id='$id'

									;

									");
  while ($row = mysqli_fetch_array($result)) { ?>
    <title>选修问卷回馈 <?php echo $row["course_teacher"]; ?>_<?php echo $row["course_title"]; ?></title>
  <?php } ?>
</head>

<body onload="window.print()">
  <table style="width: 100%">
    <tbody>
      <tr>
        <td align="center"><img src="../img/fylogo1.jpg" style="width: 25%;height:auto">
        </td>
      </tr>
      <tr>
        <td align="center">
          <?php
          $year = $_GET['year'];
          echo '<p style="line-height: 1.3;">';
          echo $year;
          echo '选修课问卷调查回馈表</p>';
          ?>



        </td>
      </tr>
    </tbody>
  </table>

  <?php

  include('connect.php');

  $id = $_GET['id'];
  $result = mysqli_query($link, "
			
									SELECT *
									FROM course_detail
									WHERE course_id='$id'

									;

									");
  while ($row = mysqli_fetch_array($result)) {

    echo '<table style="width: 100%; border-collapse: collapse;" border="0" >';
    echo '<tbody>';
    echo '<tr>';
    echo '<td align="center" style="width: 15%"><p>课程名称：</p></td>';
    echo '<td align="center" style="width: 35%"><p>' . $row["course_title"] . '</p></td>';
    echo '<td align="center" style="width: 15%"><p>授课老师：</p></td>';
    echo '<td align="center" style="width: 10%"><p>' . $row["course_teacher"] . '</p></td>';
    echo '<td align="center" style="width: 10%"></td>';
    if ($row["course_class_upperlower"] == 1) {

      echo '<td>上半年</td>';
    } elseif ($row["course_class_upperlower"] == 2) {

      echo '<td>下半年</td>';
    } else {

      echo '<td>全年</td>';
    }

    if ($row["course_class_day"] == 1) {

      echo '<td>星期三</td>';
    } elseif ($row["course_class_day"] == 2) {

      echo '<td>星期五</td>';
    } else {

      echo '<td>全年</td>';
    }

    echo '</tr>';
  }

  ?>
  </tbody>
  </table>
  <?php
  $id = $_GET['id'];
  $classday = $_GET['classday'];
  $upperlower = $_GET['upperlower'];
  $section = $_GET['year'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q6) AS q61
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q6=1

			");
  $row = mysqli_fetch_assoc($result);
  $sum61 = $row['q61'];

  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q6) AS q62
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q6=2

			");
  $row = mysqli_fetch_assoc($result);
  $sum62 = $row['q62'];

  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q6) AS q63
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q6=3

			");
  $row = mysqli_fetch_assoc($result);
  $sum63 = $row['q63'];

  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q6) AS q64
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q6=4

			");
  $row = mysqli_fetch_assoc($result);
  $sum64 = $row['q64'];

  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q6) AS q65
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q6=5

			");
  $row = mysqli_fetch_assoc($result);
  $sum65 = $row['q65'];

  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q7) AS q71
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q7=1

			");
  $row = mysqli_fetch_assoc($result);
  $sum71 = $row['q71'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q7) AS q72
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q7=2

			");
  $row = mysqli_fetch_assoc($result);
  $sum72 = $row['q72'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q7) AS q73
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q7=3

			");
  $row = mysqli_fetch_assoc($result);
  $sum73 = $row['q73'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q7) AS q74
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q7=4

			");
  $row = mysqli_fetch_assoc($result);
  $sum74 = $row['q74'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q7) AS q75
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q7=5

			");
  $row = mysqli_fetch_assoc($result);
  $sum75 = $row['q75'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q8) AS q81
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q8=1

			");
  $row = mysqli_fetch_assoc($result);
  $sum81 = $row['q81'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q8) AS q82
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q8=2

			");
  $row = mysqli_fetch_assoc($result);
  $sum82 = $row['q82'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q8) AS q83
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q8=3

			");
  $row = mysqli_fetch_assoc($result);
  $sum83 = $row['q83'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q8) AS q84
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q8=4

			");
  $row = mysqli_fetch_assoc($result);
  $sum84 = $row['q84'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q8) AS q85
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q8=5

			");
  $row = mysqli_fetch_assoc($result);
  $sum85 = $row['q85'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q9) AS q91
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q9=1

			");
  $row = mysqli_fetch_assoc($result);
  $sum91 = $row['q91'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q9) AS q92
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q9=2

			");
  $row = mysqli_fetch_assoc($result);
  $sum92 = $row['q92'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q9) AS q93
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q9=3

			");
  $row = mysqli_fetch_assoc($result);
  $sum93 = $row['q93'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q9) AS q94
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q9=4

			");
  $row = mysqli_fetch_assoc($result);
  $sum94 = $row['q94'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q9) AS q95
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q9=5

			");
  $row = mysqli_fetch_assoc($result);
  $sum95 = $row['q95'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q10) AS q101
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q10=1

			");
  $row = mysqli_fetch_assoc($result);
  $sum101 = $row['q101'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q10) AS q102
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q10=2

			");
  $row = mysqli_fetch_assoc($result);
  $sum102 = $row['q102'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q10) AS q103
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q10=3

			");
  $row = mysqli_fetch_assoc($result);
  $sum103 = $row['q103'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q10) AS q104
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q10=4

			");
  $row = mysqli_fetch_assoc($result);
  $sum104 = $row['q104'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q10) AS q105
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q10=5

			");
  $row = mysqli_fetch_assoc($result);
  $sum105 = $row['q105'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q11) AS q111
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q11=1

			");
  $row = mysqli_fetch_assoc($result);
  $sum111 = $row['q111'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q11) AS q112
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q11=2

			");
  $row = mysqli_fetch_assoc($result);
  $sum112 = $row['q112'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q11) AS q113
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q11=3

			");
  $row = mysqli_fetch_assoc($result);
  $sum113 = $row['q113'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q11) AS q114
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q11=4

			");
  $row = mysqli_fetch_assoc($result);
  $sum114 = $row['q114'];
  $result = mysqli_query($link, "
			
									SELECT count(P.course_survey_q11) AS q115
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section' AND P.course_survey_q11=5

			");
  $row = mysqli_fetch_assoc($result);
  $sum115 = $row['q115'];
  ?>

  <?php

  $classday = $_GET['classday'];

  if ($classday == 1) {





    echo '<table style="width: 100%; border-collapse: collapse;" border="0" >';
    echo '<tbody>';
    echo '<tr>';
    echo '<td align="left" style="font-size:12px;line-height: 1.5;">';
  ?>
    <ol>

      <li style="border-bottom: 1px solid #A9A9A9;"><span style="color: red">星期三</span>课程的实际课程内容是否符合网上选课时所叙述的课程纲要？
        <br>非常不认同:<?php echo $sum61  ?> <br>
        不认同:<?php echo $sum62  ?><br>
        普通:<?php echo $sum63  ?><br>
        认同:<?php echo $sum64  ?><br>
        非常认同:<?php echo $sum65  ?><br>
      </li>
      <li style="border-bottom: 1px solid #A9A9A9;"><span style="color: red">星期三</span>课程的授课内容是否有助于你对相关课题或知识的了解？
        <br>非常不认同:<?php echo $sum71  ?> <br>
        不认同:<?php echo $sum72  ?><br>
        普通:<?php echo $sum73  ?><br>
        认同:<?php echo $sum74  ?><br>
        非常认同:<?php echo $sum75  ?><br>
      </li>
      <li style="border-bottom: 1px solid #A9A9A9;"><span style="color: red">星期三</span>课程的老师充分掌握课程内容，有效把握课堂时间教授知识？
        <br>非常不认同:<?php echo $sum81  ?> <br>
        不认同:<?php echo $sum82  ?><br>
        普通:<?php echo $sum83  ?><br>
        认同:<?php echo $sum84  ?><br>
        非常认同:<?php echo $sum85  ?><br>
      </li>
    </ol>

  <?php
    echo '</td>';
    echo '</tr>';

    echo '</tbody>';
    echo '</table>';
  } else {




    echo '<table style="width: 100%; border-collapse: collapse;" border="0" >';
    echo '<tbody>';
    echo '<tr>';
    echo '<td align="left" style="font-size:12px;line-height: 1.5;">';
  ?>
    <ol>

      <li style="border-bottom: 1px solid #A9A9A9;"><span style="color: blue">星期五</span>课程的实际课程内容是否符合网上选课时所叙述的课程纲要？
        <br>非常不认同:<?php echo $sum91  ?> <br>
        不认同:<?php echo $sum92  ?><br>
        普通:<?php echo $sum93  ?><br>
        认同:<?php echo $sum94  ?><br>
        非常认同:<?php echo $sum95  ?><br>
      </li>
      <li style="border-bottom: 1px solid #A9A9A9;"><span style="color: blue">星期五</span>课程的授课内容是否有助于你对相关课题或知识的了解？
        <br>非常不认同:<?php echo $sum101  ?> <br>
        不认同:<?php echo $sum102  ?><br>
        普通:<?php echo $sum103  ?><br>
        认同:<?php echo $sum104  ?><br>
        非常认同:<?php echo $sum105  ?><br>
      </li>
      <li style="border-bottom: 1px solid #A9A9A9;"><span style="color: blue">星期五</span>课程的老师充分掌握课程内容，有效把握课堂时间教授知识？
        <br>非常不认同:<?php echo $sum111  ?> <br>
        不认同:<?php echo $sum112  ?><br>
        普通:<?php echo $sum113  ?><br>
        认同:<?php echo $sum114  ?><br>
        非常认同:<?php echo $sum115  ?><br>
      </li>
    </ol>

  <?php
    echo '</td>';
    echo '</tr>';

    echo '</tbody>';
    echo '</table>';
  }

  ?>


  <p>想对课程老师说的话：</p>
  <?php

  $classday = $_GET['classday'];

  if ($classday == 1) {


    include('connect.php');

    $id = $_GET['id'];
    $classday = $_GET['classday'];
    $upperlower = $_GET['upperlower'];
    $result = mysqli_query($link, "
			
									SELECT O.student_id,I.student_name,P.course_survey_q1,P.course_survey_q2,P.course_survey_q3,P.course_survey_q4,P.course_survey_q5,P.course_survey_q6,P.course_survey_q7,P.course_survey_q8,P.course_survey_q9,P.course_survey_q10,P.course_survey_q11,P.course_survey_q12,P.course_survey_q13,P.course_survey_q14,P.course_survey_time
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section'
									;
		
			");
    while ($row = mysqli_fetch_array($result)) {



      echo '<table style="width: 100%; border-collapse: collapse;" border="0" >';
      echo '<tbody>';
      echo '<tr>';
      echo '<td align="left" style="font-size:12px;line-height: 1.5;">';
  ?>
      <div style="border-bottom: 1px solid #A9A9A9; width:100%"><?php echo $row["course_survey_q12"]; ?></div>

    <?php
      echo '</td>';
      echo '</tr>';

      echo '</tbody>';
      echo '</table>';
    }
  } else {


    include('connect.php');

    $id = $_GET['id'];
    $classday = $_GET['classday'];
    $upperlower = $_GET['upperlower'];
    $result = mysqli_query($link, "
			
									SELECT O.student_id,I.student_name,P.course_survey_q1,P.course_survey_q2,P.course_survey_q3,P.course_survey_q4,P.course_survey_q5,P.course_survey_q6,P.course_survey_q7,P.course_survey_q8,P.course_survey_q9,P.course_survey_q10,P.course_survey_q11,P.course_survey_q12,P.course_survey_q13,P.course_survey_q14,P.course_survey_time
									FROM course_selection O 
									JOIN student_detail I ON O.student_id = I.student_id 
									JOIN course_survey P ON P.student_id = I.student_id
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section'
									;			
			");
    while ($row = mysqli_fetch_array($result)) {



      echo '<table style="width: 100%; border-collapse: collapse;" border="0" >';
      echo '<tbody>';
      echo '<tr>';
      echo '<td align="left" style="font-size:12px;line-height: 1.5;">';
    ?>
      <div style="border-bottom: 1px solid #A9A9A9; width:100%"><?php echo $row["course_survey_q13"]; ?></div>

  <?php
      echo '</td>';
      echo '</tr>';

      echo '</tbody>';
      echo '</table>';
    }
  }


  ?>





</body>

</html>