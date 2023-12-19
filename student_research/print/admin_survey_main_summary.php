<?php
require('connect.php');
require('connect2.php');
include("../auth_admin.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>选修课问卷调查回馈表</title>

</head>
<body onload="window.print()">
<table style="width: 100%">
<tbody>
<tr>
<td align="center"><img src="../img/fylogo1.jpg" style="width: 25%;height:auto">
</td>
</tr>
<tr>
<td align="center"><p style="line-height: 1.3;">选修课问卷调查回馈表</p>
</td>
</tr>
</tbody>
</table>


<?php
			$id=$_GET['id'];
			$classday=$_GET['classday'];
			$upperlower=$_GET['upperlower'];
			$result = mysql_query("
			
									SELECT count(P.course_survey_q1) AS q11
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q1=1

			");
			$row = mysql_fetch_assoc($result); 
			$sum11 = $row['q11'];
			
			$result = mysql_query("
			
									SELECT count(P.course_survey_q1) AS q12
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q1=2

			");
			$row = mysql_fetch_assoc($result); 
			$sum12 = $row['q12'];

			$result = mysql_query("
			
									SELECT count(P.course_survey_q1) AS q13
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q1=3

			");
			$row = mysql_fetch_assoc($result); 
			$sum13 = $row['q13'];
			
			$result = mysql_query("
			
									SELECT count(P.course_survey_q1) AS q14
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q1=4

			");
			$row = mysql_fetch_assoc($result); 
			$sum14 = $row['q14'];
			
			$result = mysql_query("
			
									SELECT count(P.course_survey_q1) AS q15
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q1=5

			");
			$row = mysql_fetch_assoc($result); 
			$sum15 = $row['q15'];

			$result = mysql_query("
			
									SELECT count(P.course_survey_q2) AS q21
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q2=1

			");
			$row = mysql_fetch_assoc($result); 
			$sum21 = $row['q21'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q2) AS q22
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q2=2

			");
			$row = mysql_fetch_assoc($result); 
			$sum22 = $row['q22'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q2) AS q23
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q2=3

			");
			$row = mysql_fetch_assoc($result); 
			$sum23 = $row['q23'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q2) AS q24
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q2=4

			");
			$row = mysql_fetch_assoc($result); 
			$sum24 = $row['q24'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q2) AS q25
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q2=5

			");
			$row = mysql_fetch_assoc($result); 
			$sum25 = $row['q25'];
			$result = mysql_query("
			
									SELECT count(P.course_survey_q3) AS q31
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q3=1

			");
			$row = mysql_fetch_assoc($result); 
			$sum31 = $row['q31'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q3) AS q32
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q3=2

			");
			$row = mysql_fetch_assoc($result); 
			$sum32 = $row['q32'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q3) AS q33
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q3=3

			");
			$row = mysql_fetch_assoc($result); 
			$sum33 = $row['q33'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q3) AS q34
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q3=4

			");
			$row = mysql_fetch_assoc($result); 
			$sum34 = $row['q34'];
			$result = mysql_query("
			
									SELECT count(P.course_survey_q3) AS q35
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q3=5

			");
			$row = mysql_fetch_assoc($result); 
			$sum35 = $row['q35'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q4) AS q41
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q4=1

			");
			$row = mysql_fetch_assoc($result); 
			$sum41 = $row['q41'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q4) AS q42
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q4=2

			");
			$row = mysql_fetch_assoc($result); 
			$sum42 = $row['q42'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q4) AS q43
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q4=3

			");
			$row = mysql_fetch_assoc($result); 
			$sum43 = $row['q43'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q4) AS q44
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q4=4

			");
			$row = mysql_fetch_assoc($result); 
			$sum44 = $row['q44'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q4) AS q45
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q4=5

			");
			$row = mysql_fetch_assoc($result); 
			$sum45 = $row['q45'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q5) AS q51
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q5=1

			");
			$row = mysql_fetch_assoc($result); 
			$sum51 = $row['q51'];
			$result = mysql_query("
			
									SELECT count(P.course_survey_q5) AS q52
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q5=2

			");
			$row = mysql_fetch_assoc($result); 
			$sum52 = $row['q52'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q5) AS q53
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q5=3

			");
			$row = mysql_fetch_assoc($result); 
			$sum53 = $row['q53'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q5) AS q54
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q5=4

			");
			$row = mysql_fetch_assoc($result); 
			$sum54 = $row['q54'];	
			$result = mysql_query("
			
									SELECT count(P.course_survey_q5) AS q55
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									WHERE P.course_survey_q5=5

			");
			$row = mysql_fetch_assoc($result); 
			$sum55 = $row['q55'];	

?>	

							
							<table style="width: 100%; border-collapse: collapse;" border="0" >
							<tbody>					
							<tr>					
							<td align="left" style="font-size:12px;line-height: 1.5;">	
								<ol>

								<li style="border-bottom: 1px solid #A9A9A9;">选修课的网上选课方式与选课流程是否足够简易明了？
								<br>非常不认同:<?php echo $sum11  ?> <br>
								不认同:<?php echo $sum12  ?><br>
								普通:<?php echo $sum13  ?><br>
								认同:<?php echo $sum14  ?><br>
								非常认同:<?php echo $sum15  ?><br>
								</li>
								<li style="border-bottom: 1px solid #A9A9A9;">选修课所提供的各项课程选择是否够多元化?
								<br>非常不认同:<?php echo $sum21  ?> <br>
								不认同:<?php echo $sum22  ?><br>
								普通:<?php echo $sum23  ?><br>
								认同:<?php echo $sum24  ?><br>
								非常认同:<?php echo $sum25  ?><br>
								</li>
								<li style="border-bottom: 1px solid #A9A9A9;">选修课是否有让你接触并学习到平日课程外的知识？
								<br>非常不认同:<?php echo $sum31  ?> <br>
								不认同:<?php echo $sum32  ?><br>
								普通:<?php echo $sum33  ?><br>
								认同:<?php echo $sum34  ?><br>
								非常认同:<?php echo $sum35  ?><br>
								</li>
								<li style="border-bottom: 1px solid #A9A9A9;">选修课是否有助于提升你个人的主动学习意愿？
								<br>非常不认同:<?php echo $sum41  ?> <br>
								不认同:<?php echo $sum42  ?><br>
								普通:<?php echo $sum43  ?><br>
								认同:<?php echo $sum44  ?><br>
								非常认同:<?php echo $sum45  ?><br>
								</li>
								<li style="border-bottom: 1px solid #A9A9A9;">你是否认同校方在高三年段进行选修课的课程安排？
								<br>非常不认同:<?php echo $sum51  ?> <br>
								不认同:<?php echo $sum52  ?><br>
								普通:<?php echo $sum53  ?><br>
								认同:<?php echo $sum54  ?><br>
								非常认同:<?php echo $sum55  ?><br>
								</li>
								</ol>									

							</td>
							</tr>
						    </tbody>
							</table>
<p style="line-height: 1.3;">其他意见或建议：</p>							
<?php
			include('connect.php');

			$result = mysql_query("
			
									SELECT I.student_number,I.student_name,P.course_survey_q14,P.course_survey_time
									FROM course_survey P 
									JOIN student_detail I ON P.student_id = I.student_number 
									;
		
			");
			while($row = mysql_fetch_array($result))
			{


?>									
								<div style="border: 1px solid #A9A9A9; width:100%;font-size:12px;line-height: 1.5;"><?php echo $row["course_survey_q14"];?></div>

<?php 
			}
			?>
				




</body>
</html>