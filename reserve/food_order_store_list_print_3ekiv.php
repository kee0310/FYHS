<?php
require('connect.php');
require('connect2.php');
include("auth_admin.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>订购名单（给档口3）</title>
</head>
<body onload="window.print()">
<p>订购名单（给档口3）</p>

					<?php
					
						include('connect.php');

						$id=$_GET['id'];
						$date=$_GET['date'];
			
						echo $date;
						echo '&nbsp;&nbsp;&nbsp;';
						echo '档口：';
						echo '&nbsp;&nbsp;&nbsp;';
						echo $id;
			
			
					?>
			


<br>午餐

<table style="width: 100%; border-collapse: collapse;" border="1">
<tbody>
<tr>
	<td style="width: 10%;" align="center">班级</td>
	<td style="width: 9%" align="center">waffle</td>
	<td style="width: 9%" align="center">Nugget</td>
	<td style="width: 9%" align="center">玉蜀黍</td>
	<td style="width: 9%" align="center">海鲜豆腐Fish ball</td>
	<td style="width: 9%" align="center">Hushbrown</td>
	<td style="width: 9%" align="center">大鱼柳</td>
	<td style="width: 9%" align="center">茶叶蛋</td>
	<td style="width: 9%" align="center">三文治</td>
	<td style="width: 9%" align="center">饭团 </td>
	<td style="width: 9%" align="center">小丸子</td>
</tr>
		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			$class601 = '高三理1';
			$class602 = '高三理2';
			$class603 = '高三理3';
			$class604 = '高三理4';
			$class605 = '高三理5';
			$class606 = '高三文商1';
			$class607 = '高三文商2';
			$class608 = '高三文商3';
			$class609 = '高三文商4';
			$class610 = '高三文商5';
			$class611 = '高三文商6';
			$class612 = '高三文商7';
			$class613 = '高三文商8';
			$class614 = '高三文商9';
			$class615 = '高三文商10';
			$class616 = '高三文商11';
			$class617 = '高三餐饮管理1';
			$class618 = '高三餐饮管理2';
			$class619 = '高三电机电子1';
			$class501 = '高二理1';
			$class502 = '高二理2';
			$class503 = '高二理3';
			$class504 = '高二理4';
			$class505 = '高二文商1';
			$class506 = '高二文商2';
			$class507 = '高二文商3';
			$class508 = '高二文商4';
			$class509 = '高二文商5';
			$class510 = '高二文商6';
			$class511 = '高二文商7';
			$class512 = '高二文商8';
			$class513 = '高二文商9';
			$class514 = '高二文商10';
			$class515 = '高二文商11';
			$class516 = '高二餐饮管理1';
			$class517 = '高二餐饮管理2';
			$class518 = '高二电机电子1';
		
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 601a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class601'


			");
			$row = mysql_fetch_assoc($result); 
			$sum601a = $row['601a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 601b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class601'


			");
			$row = mysql_fetch_assoc($result); 
			$sum601b = $row['601b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 601c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class601'


			");
			$row = mysql_fetch_assoc($result); 
			$sum601c = $row['601c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 601d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class601'


			");
			$row = mysql_fetch_assoc($result); 
			$sum601d = $row['601d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 601e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class601'


			");
			$row = mysql_fetch_assoc($result); 
			$sum601e = $row['601e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 601f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class601'


			");
			$row = mysql_fetch_assoc($result); 
			$sum601f = $row['601f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 601g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class601'


			");
			$row = mysql_fetch_assoc($result); 
			$sum601g = $row['601g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 601h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class601'


			");
			$row = mysql_fetch_assoc($result); 
			$sum601h = $row['601h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 601i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class601'


			");
			$row = mysql_fetch_assoc($result); 
			$sum601i = $row['601i'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 601j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class601'

			");
			$row = mysql_fetch_assoc($result); 
			$sum601j = $row['601j'];			
				
		?>
<tr>
	<td align="center"><?php echo $class601  ?></td>
	<td align="center"><?php echo $sum601a  ?></td>
	<td align="center"><?php echo $sum601b  ?></td>
	<td align="center"><?php echo $sum601c  ?></td>
	<td align="center"><?php echo $sum601d  ?></td>
	<td align="center"><?php echo $sum601e  ?></td>
	<td align="center"><?php echo $sum601f  ?></td>
	<td align="center"><?php echo $sum601g  ?></td>
	<td align="center"><?php echo $sum601h  ?></td>
	<td align="center"><?php echo $sum601i  ?></td>
	<td align="center"><?php echo $sum601j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 602a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class602'


			");
			$row = mysql_fetch_assoc($result); 
			$sum602a = $row['602a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 602b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class602'


			");
			$row = mysql_fetch_assoc($result); 
			$sum602b = $row['602b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 602c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class602'


			");
			$row = mysql_fetch_assoc($result); 
			$sum602c = $row['602c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 602d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class602'


			");
			$row = mysql_fetch_assoc($result); 
			$sum602d = $row['602d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 602e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class602'


			");
			$row = mysql_fetch_assoc($result); 
			$sum602e = $row['602e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 602f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class602'


			");
			$row = mysql_fetch_assoc($result); 
			$sum602f = $row['602f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 602g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class602'


			");
			$row = mysql_fetch_assoc($result); 
			$sum602g = $row['602g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 602h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class602'


			");
			$row = mysql_fetch_assoc($result); 
			$sum602h = $row['602h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 602i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class602'


			");
			$row = mysql_fetch_assoc($result); 
			$sum602i = $row['602i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 602j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class602'

			");
			$row = mysql_fetch_assoc($result); 
			$sum602j = $row['602j'];					
		?>
<tr>
	<td align="center"><?php echo $class602  ?></td>
	<td align="center"><?php echo $sum602a  ?></td>
	<td align="center"><?php echo $sum602b  ?></td>
	<td align="center"><?php echo $sum602c  ?></td>
	<td align="center"><?php echo $sum602d  ?></td>
	<td align="center"><?php echo $sum602e  ?></td>
	<td align="center"><?php echo $sum602f  ?></td>
	<td align="center"><?php echo $sum602g  ?></td>
	<td align="center"><?php echo $sum602h  ?></td>
	<td align="center"><?php echo $sum602i  ?></td>
	<td align="center"><?php echo $sum602j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 603a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class603'


			");
			$row = mysql_fetch_assoc($result); 
			$sum603a = $row['603a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 603b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class603'


			");
			$row = mysql_fetch_assoc($result); 
			$sum603b = $row['603b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 603c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class603'


			");
			$row = mysql_fetch_assoc($result); 
			$sum603c = $row['603c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 603d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class603'


			");
			$row = mysql_fetch_assoc($result); 
			$sum603d = $row['603d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 603e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class603'


			");
			$row = mysql_fetch_assoc($result); 
			$sum603e = $row['603e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 603f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class603'


			");
			$row = mysql_fetch_assoc($result); 
			$sum603f = $row['603f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 603g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class603'


			");
			$row = mysql_fetch_assoc($result); 
			$sum603g = $row['603g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 603h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class603'


			");
			$row = mysql_fetch_assoc($result); 
			$sum603h = $row['603h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 603i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class603'


			");
			$row = mysql_fetch_assoc($result); 
			$sum603i = $row['603i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 603j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class603'

			");
			$row = mysql_fetch_assoc($result); 
			$sum603j = $row['603j'];					
		?>
<tr>
	<td align="center"><?php echo $class603  ?></td>
	<td align="center"><?php echo $sum603a  ?></td>
	<td align="center"><?php echo $sum603b  ?></td>
	<td align="center"><?php echo $sum603c  ?></td>
	<td align="center"><?php echo $sum603d  ?></td>
	<td align="center"><?php echo $sum603e  ?></td>
	<td align="center"><?php echo $sum603f  ?></td>
	<td align="center"><?php echo $sum603g  ?></td>
	<td align="center"><?php echo $sum603h  ?></td>
	<td align="center"><?php echo $sum603i  ?></td>
	<td align="center"><?php echo $sum603j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 604a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class604'


			");
			$row = mysql_fetch_assoc($result); 
			$sum604a = $row['604a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 604b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class604'


			");
			$row = mysql_fetch_assoc($result); 
			$sum604b = $row['604b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 604c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class604'


			");
			$row = mysql_fetch_assoc($result); 
			$sum604c = $row['604c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 604d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class604'


			");
			$row = mysql_fetch_assoc($result); 
			$sum604d = $row['604d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 604e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class604'


			");
			$row = mysql_fetch_assoc($result); 
			$sum604e = $row['604e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 604f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class604'


			");
			$row = mysql_fetch_assoc($result); 
			$sum604f = $row['604f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 604g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class604'


			");
			$row = mysql_fetch_assoc($result); 
			$sum604g = $row['604g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 604h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class604'


			");
			$row = mysql_fetch_assoc($result); 
			$sum604h = $row['604h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 604i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class604'


			");
			$row = mysql_fetch_assoc($result); 
			$sum604i = $row['604i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 604j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class604'

			");
			$row = mysql_fetch_assoc($result); 
			$sum604j = $row['604j'];					
		?>
<tr>
	<td align="center"><?php echo $class604  ?></td>
	<td align="center"><?php echo $sum604a  ?></td>
	<td align="center"><?php echo $sum604b  ?></td>
	<td align="center"><?php echo $sum604c  ?></td>
	<td align="center"><?php echo $sum604d  ?></td>
	<td align="center"><?php echo $sum604e  ?></td>
	<td align="center"><?php echo $sum604f  ?></td>
	<td align="center"><?php echo $sum604g  ?></td>
	<td align="center"><?php echo $sum604h  ?></td>
	<td align="center"><?php echo $sum604i  ?></td>
	<td align="center"><?php echo $sum604j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 605a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class605'


			");
			$row = mysql_fetch_assoc($result); 
			$sum605a = $row['605a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 605b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class605'


			");
			$row = mysql_fetch_assoc($result); 
			$sum605b = $row['605b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 605c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class605'


			");
			$row = mysql_fetch_assoc($result); 
			$sum605c = $row['605c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 605d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class605'


			");
			$row = mysql_fetch_assoc($result); 
			$sum605d = $row['605d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 605e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class605'


			");
			$row = mysql_fetch_assoc($result); 
			$sum605e = $row['605e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 605f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class605'


			");
			$row = mysql_fetch_assoc($result); 
			$sum605f = $row['605f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 605g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class605'


			");
			$row = mysql_fetch_assoc($result); 
			$sum605g = $row['605g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 605h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class605'


			");
			$row = mysql_fetch_assoc($result); 
			$sum605h = $row['605h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 605i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class605'


			");
			$row = mysql_fetch_assoc($result); 
			$sum605i = $row['605i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 605j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class605'

			");
			$row = mysql_fetch_assoc($result); 
			$sum605j = $row['605j'];					
		?>
<tr>
	<td align="center"><?php echo $class605  ?></td>
	<td align="center"><?php echo $sum605a  ?></td>
	<td align="center"><?php echo $sum605b  ?></td>
	<td align="center"><?php echo $sum605c  ?></td>
	<td align="center"><?php echo $sum605d  ?></td>
	<td align="center"><?php echo $sum605e  ?></td>
	<td align="center"><?php echo $sum605f  ?></td>
	<td align="center"><?php echo $sum605g  ?></td>
	<td align="center"><?php echo $sum605h  ?></td>
	<td align="center"><?php echo $sum605i  ?></td>
	<td align="center"><?php echo $sum605j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 606a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class606'


			");
			$row = mysql_fetch_assoc($result); 
			$sum606a = $row['606a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 606b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class606'


			");
			$row = mysql_fetch_assoc($result); 
			$sum606b = $row['606b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 606c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class606'


			");
			$row = mysql_fetch_assoc($result); 
			$sum606c = $row['606c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 606d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class606'


			");
			$row = mysql_fetch_assoc($result); 
			$sum606d = $row['606d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 606e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class606'


			");
			$row = mysql_fetch_assoc($result); 
			$sum606e = $row['606e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 606f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class606'


			");
			$row = mysql_fetch_assoc($result); 
			$sum606f = $row['606f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 606g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class606'


			");
			$row = mysql_fetch_assoc($result); 
			$sum606g = $row['606g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 606h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class606'


			");
			$row = mysql_fetch_assoc($result); 
			$sum606h = $row['606h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 606i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class606'


			");
			$row = mysql_fetch_assoc($result); 
			$sum606i = $row['606i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 606j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class606'

			");
			$row = mysql_fetch_assoc($result); 
			$sum606j = $row['606j'];					
		?>
<tr>
	<td align="center"><?php echo $class606  ?></td>
	<td align="center"><?php echo $sum606a  ?></td>
	<td align="center"><?php echo $sum606b  ?></td>
	<td align="center"><?php echo $sum606c  ?></td>
	<td align="center"><?php echo $sum606d  ?></td>
	<td align="center"><?php echo $sum606e  ?></td>
	<td align="center"><?php echo $sum606f  ?></td>
	<td align="center"><?php echo $sum606g  ?></td>
	<td align="center"><?php echo $sum606h  ?></td>
	<td align="center"><?php echo $sum606i  ?></td>
	<td align="center"><?php echo $sum606j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 607a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class607'


			");
			$row = mysql_fetch_assoc($result); 
			$sum607a = $row['607a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 607b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class607'


			");
			$row = mysql_fetch_assoc($result); 
			$sum607b = $row['607b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 607c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class607'


			");
			$row = mysql_fetch_assoc($result); 
			$sum607c = $row['607c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 607d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class607'


			");
			$row = mysql_fetch_assoc($result); 
			$sum607d = $row['607d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 607e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class607'


			");
			$row = mysql_fetch_assoc($result); 
			$sum607e = $row['607e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 607f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class607'


			");
			$row = mysql_fetch_assoc($result); 
			$sum607f = $row['607f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 607g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class607'


			");
			$row = mysql_fetch_assoc($result); 
			$sum607g = $row['607g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 607h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class607'


			");
			$row = mysql_fetch_assoc($result); 
			$sum607h = $row['607h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 607i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class607'


			");
			$row = mysql_fetch_assoc($result); 
			$sum607i = $row['607i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 607j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class607'

			");
			$row = mysql_fetch_assoc($result); 
			$sum607j = $row['607j'];					
		?>
<tr>
	<td align="center"><?php echo $class607  ?></td>
	<td align="center"><?php echo $sum607a  ?></td>
	<td align="center"><?php echo $sum607b  ?></td>
	<td align="center"><?php echo $sum607c  ?></td>
	<td align="center"><?php echo $sum607d  ?></td>
	<td align="center"><?php echo $sum607e  ?></td>
	<td align="center"><?php echo $sum607f  ?></td>
	<td align="center"><?php echo $sum607g  ?></td>
	<td align="center"><?php echo $sum607h  ?></td>
	<td align="center"><?php echo $sum607i  ?></td>
	<td align="center"><?php echo $sum607j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 608a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class608'


			");
			$row = mysql_fetch_assoc($result); 
			$sum608a = $row['608a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 608b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class608'


			");
			$row = mysql_fetch_assoc($result); 
			$sum608b = $row['608b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 608c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class608'


			");
			$row = mysql_fetch_assoc($result); 
			$sum608c = $row['608c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 608d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class608'


			");
			$row = mysql_fetch_assoc($result); 
			$sum608d = $row['608d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 608e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class608'


			");
			$row = mysql_fetch_assoc($result); 
			$sum608e = $row['608e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 608f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class608'


			");
			$row = mysql_fetch_assoc($result); 
			$sum608f = $row['608f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 608g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class608'


			");
			$row = mysql_fetch_assoc($result); 
			$sum608g = $row['608g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 608h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class608'


			");
			$row = mysql_fetch_assoc($result); 
			$sum608h = $row['608h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 608i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class608'


			");
			$row = mysql_fetch_assoc($result); 
			$sum608i = $row['608i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 608j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class608'

			");
			$row = mysql_fetch_assoc($result); 
			$sum608j = $row['608j'];					
		?>
<tr>
	<td align="center"><?php echo $class608  ?></td>
	<td align="center"><?php echo $sum608a  ?></td>
	<td align="center"><?php echo $sum608b  ?></td>
	<td align="center"><?php echo $sum608c  ?></td>
	<td align="center"><?php echo $sum608d  ?></td>
	<td align="center"><?php echo $sum608e  ?></td>
	<td align="center"><?php echo $sum608f  ?></td>
	<td align="center"><?php echo $sum608g  ?></td>
	<td align="center"><?php echo $sum608h  ?></td>
	<td align="center"><?php echo $sum608i  ?></td>
	<td align="center"><?php echo $sum608j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 609a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class609'


			");
			$row = mysql_fetch_assoc($result); 
			$sum609a = $row['609a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 609b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class609'


			");
			$row = mysql_fetch_assoc($result); 
			$sum609b = $row['609b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 609c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class609'


			");
			$row = mysql_fetch_assoc($result); 
			$sum609c = $row['609c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 609d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class609'


			");
			$row = mysql_fetch_assoc($result); 
			$sum609d = $row['609d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 609e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class609'


			");
			$row = mysql_fetch_assoc($result); 
			$sum609e = $row['609e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 609f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class609'


			");
			$row = mysql_fetch_assoc($result); 
			$sum609f = $row['609f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 609g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class609'


			");
			$row = mysql_fetch_assoc($result); 
			$sum609g = $row['609g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 609h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class609'


			");
			$row = mysql_fetch_assoc($result); 
			$sum609h = $row['609h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 609i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class609'


			");
			$row = mysql_fetch_assoc($result); 
			$sum609i = $row['609i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 609j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class609'

			");
			$row = mysql_fetch_assoc($result); 
			$sum609j = $row['609j'];					
		?>
<tr>
	<td align="center"><?php echo $class609  ?></td>
	<td align="center"><?php echo $sum609a  ?></td>
	<td align="center"><?php echo $sum609b  ?></td>
	<td align="center"><?php echo $sum609c  ?></td>
	<td align="center"><?php echo $sum609d  ?></td>
	<td align="center"><?php echo $sum609e  ?></td>
	<td align="center"><?php echo $sum609f  ?></td>
	<td align="center"><?php echo $sum609g  ?></td>
	<td align="center"><?php echo $sum609h  ?></td>
	<td align="center"><?php echo $sum609i  ?></td>
	<td align="center"><?php echo $sum609j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 610a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class610'


			");
			$row = mysql_fetch_assoc($result); 
			$sum610a = $row['610a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 610b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class610'


			");
			$row = mysql_fetch_assoc($result); 
			$sum610b = $row['610b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 610c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class610'


			");
			$row = mysql_fetch_assoc($result); 
			$sum610c = $row['610c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 610d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class610'


			");
			$row = mysql_fetch_assoc($result); 
			$sum610d = $row['610d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 610e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class610'


			");
			$row = mysql_fetch_assoc($result); 
			$sum610e = $row['610e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 610f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class610'


			");
			$row = mysql_fetch_assoc($result); 
			$sum610f = $row['610f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 610g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class610'


			");
			$row = mysql_fetch_assoc($result); 
			$sum610g = $row['610g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 610h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class610'


			");
			$row = mysql_fetch_assoc($result); 
			$sum610h = $row['610h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 610i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class610'


			");
			$row = mysql_fetch_assoc($result); 
			$sum610i = $row['610i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 610j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class610'

			");
			$row = mysql_fetch_assoc($result); 
			$sum610j = $row['610j'];					
		?>
<tr>
	<td align="center"><?php echo $class610  ?></td>
	<td align="center"><?php echo $sum610a  ?></td>
	<td align="center"><?php echo $sum610b  ?></td>
	<td align="center"><?php echo $sum610c  ?></td>
	<td align="center"><?php echo $sum610d  ?></td>
	<td align="center"><?php echo $sum610e  ?></td>
	<td align="center"><?php echo $sum610f  ?></td>
	<td align="center"><?php echo $sum610g  ?></td>
	<td align="center"><?php echo $sum610h  ?></td>
	<td align="center"><?php echo $sum610i  ?></td>
	<td align="center"><?php echo $sum610j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 611a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class611'


			");
			$row = mysql_fetch_assoc($result); 
			$sum611a = $row['611a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 611b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class611'


			");
			$row = mysql_fetch_assoc($result); 
			$sum611b = $row['611b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 611c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class611'


			");
			$row = mysql_fetch_assoc($result); 
			$sum611c = $row['611c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 611d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class611'


			");
			$row = mysql_fetch_assoc($result); 
			$sum611d = $row['611d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 611e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class611'


			");
			$row = mysql_fetch_assoc($result); 
			$sum611e = $row['611e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 611f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class611'


			");
			$row = mysql_fetch_assoc($result); 
			$sum611f = $row['611f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 611g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class611'


			");
			$row = mysql_fetch_assoc($result); 
			$sum611g = $row['611g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 611h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class611'


			");
			$row = mysql_fetch_assoc($result); 
			$sum611h = $row['611h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 611i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class611'


			");
			$row = mysql_fetch_assoc($result); 
			$sum611i = $row['611i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 611j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class611'

			");
			$row = mysql_fetch_assoc($result); 
			$sum611j = $row['611j'];					
		?>
<tr>
	<td align="center"><?php echo $class611  ?></td>
	<td align="center"><?php echo $sum611a  ?></td>
	<td align="center"><?php echo $sum611b  ?></td>
	<td align="center"><?php echo $sum611c  ?></td>
	<td align="center"><?php echo $sum611d  ?></td>
	<td align="center"><?php echo $sum611e  ?></td>
	<td align="center"><?php echo $sum611f  ?></td>
	<td align="center"><?php echo $sum611g  ?></td>
	<td align="center"><?php echo $sum611h  ?></td>
	<td align="center"><?php echo $sum611i  ?></td>
	<td align="center"><?php echo $sum611j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 612a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class612'


			");
			$row = mysql_fetch_assoc($result); 
			$sum612a = $row['612a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 612b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class612'


			");
			$row = mysql_fetch_assoc($result); 
			$sum612b = $row['612b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 612c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class612'


			");
			$row = mysql_fetch_assoc($result); 
			$sum612c = $row['612c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 612d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class612'


			");
			$row = mysql_fetch_assoc($result); 
			$sum612d = $row['612d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 612e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class612'


			");
			$row = mysql_fetch_assoc($result); 
			$sum612e = $row['612e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 612f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class612'


			");
			$row = mysql_fetch_assoc($result); 
			$sum612f = $row['612f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 612g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class612'


			");
			$row = mysql_fetch_assoc($result); 
			$sum612g = $row['612g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 612h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class612'


			");
			$row = mysql_fetch_assoc($result); 
			$sum612h = $row['612h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 612i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class612'


			");
			$row = mysql_fetch_assoc($result); 
			$sum612i = $row['612i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 612j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class612'

			");
			$row = mysql_fetch_assoc($result); 
			$sum612j = $row['612j'];					
		?>
<tr>
	<td align="center"><?php echo $class612  ?></td>
	<td align="center"><?php echo $sum612a  ?></td>
	<td align="center"><?php echo $sum612b  ?></td>
	<td align="center"><?php echo $sum612c  ?></td>
	<td align="center"><?php echo $sum612d  ?></td>
	<td align="center"><?php echo $sum612e  ?></td>
	<td align="center"><?php echo $sum612f  ?></td>
	<td align="center"><?php echo $sum612g  ?></td>
	<td align="center"><?php echo $sum612h  ?></td>
	<td align="center"><?php echo $sum612i  ?></td>
	<td align="center"><?php echo $sum612j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 613a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class613'


			");
			$row = mysql_fetch_assoc($result); 
			$sum613a = $row['613a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 613b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class613'


			");
			$row = mysql_fetch_assoc($result); 
			$sum613b = $row['613b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 613c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class613'


			");
			$row = mysql_fetch_assoc($result); 
			$sum613c = $row['613c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 613d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class613'


			");
			$row = mysql_fetch_assoc($result); 
			$sum613d = $row['613d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 613e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class613'


			");
			$row = mysql_fetch_assoc($result); 
			$sum613e = $row['613e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 613f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class613'


			");
			$row = mysql_fetch_assoc($result); 
			$sum613f = $row['613f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 613g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class613'


			");
			$row = mysql_fetch_assoc($result); 
			$sum613g = $row['613g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 613h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class613'


			");
			$row = mysql_fetch_assoc($result); 
			$sum613h = $row['613h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 613i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class613'


			");
			$row = mysql_fetch_assoc($result); 
			$sum613i = $row['613i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 613j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class613'

			");
			$row = mysql_fetch_assoc($result); 
			$sum613j = $row['613j'];				
		?>
<tr>
	<td align="center"><?php echo $class613  ?></td>
	<td align="center"><?php echo $sum613a  ?></td>
	<td align="center"><?php echo $sum613b  ?></td>
	<td align="center"><?php echo $sum613c  ?></td>
	<td align="center"><?php echo $sum613d  ?></td>
	<td align="center"><?php echo $sum613e  ?></td>
	<td align="center"><?php echo $sum613f  ?></td>
	<td align="center"><?php echo $sum613g  ?></td>
	<td align="center"><?php echo $sum613h  ?></td>
	<td align="center"><?php echo $sum613i  ?></td>
	<td align="center"><?php echo $sum613j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 614a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class614'


			");
			$row = mysql_fetch_assoc($result); 
			$sum614a = $row['614a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 614b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class614'


			");
			$row = mysql_fetch_assoc($result); 
			$sum614b = $row['614b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 614c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class614'


			");
			$row = mysql_fetch_assoc($result); 
			$sum614c = $row['614c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 614d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class614'


			");
			$row = mysql_fetch_assoc($result); 
			$sum614d = $row['614d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 614e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class614'


			");
			$row = mysql_fetch_assoc($result); 
			$sum614e = $row['614e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 614f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class614'


			");
			$row = mysql_fetch_assoc($result); 
			$sum614f = $row['614f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 614g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class614'


			");
			$row = mysql_fetch_assoc($result); 
			$sum614g = $row['614g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 614h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class614'


			");
			$row = mysql_fetch_assoc($result); 
			$sum614h = $row['614h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 614i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class614'


			");
			$row = mysql_fetch_assoc($result); 
			$sum614i = $row['614i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 614j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class614'

			");
			$row = mysql_fetch_assoc($result); 
			$sum614j = $row['614j'];				
		?>
<tr>
	<td align="center"><?php echo $class614  ?></td>
	<td align="center"><?php echo $sum614a  ?></td>
	<td align="center"><?php echo $sum614b  ?></td>
	<td align="center"><?php echo $sum614c  ?></td>
	<td align="center"><?php echo $sum614d  ?></td>
	<td align="center"><?php echo $sum614e  ?></td>
	<td align="center"><?php echo $sum614f  ?></td>
	<td align="center"><?php echo $sum614g  ?></td>
	<td align="center"><?php echo $sum614h  ?></td>
	<td align="center"><?php echo $sum614i  ?></td>
	<td align="center"><?php echo $sum614j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 615a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class615'


			");
			$row = mysql_fetch_assoc($result); 
			$sum615a = $row['615a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 615b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class615'


			");
			$row = mysql_fetch_assoc($result); 
			$sum615b = $row['615b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 615c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class615'


			");
			$row = mysql_fetch_assoc($result); 
			$sum615c = $row['615c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 615d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class615'


			");
			$row = mysql_fetch_assoc($result); 
			$sum615d = $row['615d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 615e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class615'


			");
			$row = mysql_fetch_assoc($result); 
			$sum615e = $row['615e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 615f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class615'


			");
			$row = mysql_fetch_assoc($result); 
			$sum615f = $row['615f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 615g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class615'


			");
			$row = mysql_fetch_assoc($result); 
			$sum615g = $row['615g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 615h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class615'


			");
			$row = mysql_fetch_assoc($result); 
			$sum615h = $row['615h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 615i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class615'


			");
			$row = mysql_fetch_assoc($result); 
			$sum615i = $row['615i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 615j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class615'

			");
			$row = mysql_fetch_assoc($result); 
			$sum615j = $row['615j'];				
		?>
<tr>
	<td align="center"><?php echo $class615  ?></td>
	<td align="center"><?php echo $sum615a  ?></td>
	<td align="center"><?php echo $sum615b  ?></td>
	<td align="center"><?php echo $sum615c  ?></td>
	<td align="center"><?php echo $sum615d  ?></td>
	<td align="center"><?php echo $sum615e  ?></td>
	<td align="center"><?php echo $sum615f  ?></td>
	<td align="center"><?php echo $sum615g  ?></td>
	<td align="center"><?php echo $sum615h  ?></td>
	<td align="center"><?php echo $sum615i  ?></td>
	<td align="center"><?php echo $sum615j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 616a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class616'


			");
			$row = mysql_fetch_assoc($result); 
			$sum616a = $row['616a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 616b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class616'


			");
			$row = mysql_fetch_assoc($result); 
			$sum616b = $row['616b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 616c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class616'


			");
			$row = mysql_fetch_assoc($result); 
			$sum616c = $row['616c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 616d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class616'


			");
			$row = mysql_fetch_assoc($result); 
			$sum616d = $row['616d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 616e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class616'


			");
			$row = mysql_fetch_assoc($result); 
			$sum616e = $row['616e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 616f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class616'


			");
			$row = mysql_fetch_assoc($result); 
			$sum616f = $row['616f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 616g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class616'


			");
			$row = mysql_fetch_assoc($result); 
			$sum616g = $row['616g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 616h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class616'


			");
			$row = mysql_fetch_assoc($result); 
			$sum616h = $row['616h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 616i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class616'


			");
			$row = mysql_fetch_assoc($result); 
			$sum616i = $row['616i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 616j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class616'

			");
			$row = mysql_fetch_assoc($result); 
			$sum616j = $row['616j'];				
		?>
<tr>
	<td align="center"><?php echo $class616  ?></td>
	<td align="center"><?php echo $sum616a  ?></td>
	<td align="center"><?php echo $sum616b  ?></td>
	<td align="center"><?php echo $sum616c  ?></td>
	<td align="center"><?php echo $sum616d  ?></td>
	<td align="center"><?php echo $sum616e  ?></td>
	<td align="center"><?php echo $sum616f  ?></td>
	<td align="center"><?php echo $sum616g  ?></td>
	<td align="center"><?php echo $sum616h  ?></td>
	<td align="center"><?php echo $sum616i  ?></td>
	<td align="center"><?php echo $sum616j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 617a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class617'


			");
			$row = mysql_fetch_assoc($result); 
			$sum617a = $row['617a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 617b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class617'


			");
			$row = mysql_fetch_assoc($result); 
			$sum617b = $row['617b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 617c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class617'


			");
			$row = mysql_fetch_assoc($result); 
			$sum617c = $row['617c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 617d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class617'


			");
			$row = mysql_fetch_assoc($result); 
			$sum617d = $row['617d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 617e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class617'


			");
			$row = mysql_fetch_assoc($result); 
			$sum617e = $row['617e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 617f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class617'


			");
			$row = mysql_fetch_assoc($result); 
			$sum617f = $row['617f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 617g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class617'


			");
			$row = mysql_fetch_assoc($result); 
			$sum617g = $row['617g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 617h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class617'


			");
			$row = mysql_fetch_assoc($result); 
			$sum617h = $row['617h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 617i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class617'


			");
			$row = mysql_fetch_assoc($result); 
			$sum617i = $row['617i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 617j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class617'

			");
			$row = mysql_fetch_assoc($result); 
			$sum617j = $row['617j'];				
		?>
<tr>
	<td align="center"><?php echo $class617  ?></td>
	<td align="center"><?php echo $sum617a  ?></td>
	<td align="center"><?php echo $sum617b  ?></td>
	<td align="center"><?php echo $sum617c  ?></td>
	<td align="center"><?php echo $sum617d  ?></td>
	<td align="center"><?php echo $sum617e  ?></td>
	<td align="center"><?php echo $sum617f  ?></td>
	<td align="center"><?php echo $sum617g  ?></td>
	<td align="center"><?php echo $sum617h  ?></td>
	<td align="center"><?php echo $sum617i  ?></td>
	<td align="center"><?php echo $sum617j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 618a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class618'


			");
			$row = mysql_fetch_assoc($result); 
			$sum618a = $row['618a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 618b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class618'


			");
			$row = mysql_fetch_assoc($result); 
			$sum618b = $row['618b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 618c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class618'


			");
			$row = mysql_fetch_assoc($result); 
			$sum618c = $row['618c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 618d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class618'


			");
			$row = mysql_fetch_assoc($result); 
			$sum618d = $row['618d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 618e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class618'


			");
			$row = mysql_fetch_assoc($result); 
			$sum618e = $row['618e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 618f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class618'


			");
			$row = mysql_fetch_assoc($result); 
			$sum618f = $row['618f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 618g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class618'


			");
			$row = mysql_fetch_assoc($result); 
			$sum618g = $row['618g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 618h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class618'


			");
			$row = mysql_fetch_assoc($result); 
			$sum618h = $row['618h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 618i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class618'


			");
			$row = mysql_fetch_assoc($result); 
			$sum618i = $row['618i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 618j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class618'

			");
			$row = mysql_fetch_assoc($result); 
			$sum618j = $row['618j'];				
		?>
<tr>
	<td align="center"><?php echo $class618  ?></td>
	<td align="center"><?php echo $sum618a  ?></td>
	<td align="center"><?php echo $sum618b  ?></td>
	<td align="center"><?php echo $sum618c  ?></td>
	<td align="center"><?php echo $sum618d  ?></td>
	<td align="center"><?php echo $sum618e  ?></td>
	<td align="center"><?php echo $sum618f  ?></td>
	<td align="center"><?php echo $sum618g  ?></td>
	<td align="center"><?php echo $sum618h  ?></td>
	<td align="center"><?php echo $sum618i  ?></td>
	<td align="center"><?php echo $sum618j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 619a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class619'


			");
			$row = mysql_fetch_assoc($result); 
			$sum619a = $row['619a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 619b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class619'


			");
			$row = mysql_fetch_assoc($result); 
			$sum619b = $row['619b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 619c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class619'


			");
			$row = mysql_fetch_assoc($result); 
			$sum619c = $row['619c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 619d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class619'


			");
			$row = mysql_fetch_assoc($result); 
			$sum619d = $row['619d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 619e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class619'


			");
			$row = mysql_fetch_assoc($result); 
			$sum619e = $row['619e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 619f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class619'


			");
			$row = mysql_fetch_assoc($result); 
			$sum619f = $row['619f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 619g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class619'


			");
			$row = mysql_fetch_assoc($result); 
			$sum619g = $row['619g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 619h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class619'


			");
			$row = mysql_fetch_assoc($result); 
			$sum619h = $row['619h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 619i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class619'


			");
			$row = mysql_fetch_assoc($result); 
			$sum619i = $row['619i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 619j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class619'

			");
			$row = mysql_fetch_assoc($result); 
			$sum619j = $row['619j'];				
		?>
<tr>
	<td align="center"><?php echo $class619  ?></td>
	<td align="center"><?php echo $sum619a  ?></td>
	<td align="center"><?php echo $sum619b  ?></td>
	<td align="center"><?php echo $sum619c  ?></td>
	<td align="center"><?php echo $sum619d  ?></td>
	<td align="center"><?php echo $sum619e  ?></td>
	<td align="center"><?php echo $sum619f  ?></td>
	<td align="center"><?php echo $sum619g  ?></td>
	<td align="center"><?php echo $sum619h  ?></td>
	<td align="center"><?php echo $sum619i  ?></td>
	<td align="center"><?php echo $sum619j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 501a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class501'


			");
			$row = mysql_fetch_assoc($result); 
			$sum501a = $row['501a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 501b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class501'


			");
			$row = mysql_fetch_assoc($result); 
			$sum501b = $row['501b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 501c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class501'


			");
			$row = mysql_fetch_assoc($result); 
			$sum501c = $row['501c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 501d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class501'


			");
			$row = mysql_fetch_assoc($result); 
			$sum501d = $row['501d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 501e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class501'


			");
			$row = mysql_fetch_assoc($result); 
			$sum501e = $row['501e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 501f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class501'


			");
			$row = mysql_fetch_assoc($result); 
			$sum501f = $row['501f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 501g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class501'


			");
			$row = mysql_fetch_assoc($result); 
			$sum501g = $row['501g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 501h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class501'


			");
			$row = mysql_fetch_assoc($result); 
			$sum501h = $row['501h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 501i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class501'


			");
			$row = mysql_fetch_assoc($result); 
			$sum501i = $row['501i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 501j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class501'

			");
			$row = mysql_fetch_assoc($result); 
			$sum501j = $row['501j'];				
		?>
<tr>
	<td align="center"><?php echo $class501  ?></td>
	<td align="center"><?php echo $sum501a  ?></td>
	<td align="center"><?php echo $sum501b  ?></td>
	<td align="center"><?php echo $sum501c  ?></td>
	<td align="center"><?php echo $sum501d  ?></td>
	<td align="center"><?php echo $sum501e  ?></td>
	<td align="center"><?php echo $sum501f  ?></td>
	<td align="center"><?php echo $sum501g  ?></td>
	<td align="center"><?php echo $sum501h  ?></td>
	<td align="center"><?php echo $sum501i  ?></td>
	<td align="center"><?php echo $sum501j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 502a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class502'


			");
			$row = mysql_fetch_assoc($result); 
			$sum502a = $row['502a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 502b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class502'


			");
			$row = mysql_fetch_assoc($result); 
			$sum502b = $row['502b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 502c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class502'


			");
			$row = mysql_fetch_assoc($result); 
			$sum502c = $row['502c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 502d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class502'


			");
			$row = mysql_fetch_assoc($result); 
			$sum502d = $row['502d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 502e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class502'


			");
			$row = mysql_fetch_assoc($result); 
			$sum502e = $row['502e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 502f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class502'


			");
			$row = mysql_fetch_assoc($result); 
			$sum502f = $row['502f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 502g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class502'


			");
			$row = mysql_fetch_assoc($result); 
			$sum502g = $row['502g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 502h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class502'


			");
			$row = mysql_fetch_assoc($result); 
			$sum502h = $row['502h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 502i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class502'


			");
			$row = mysql_fetch_assoc($result); 
			$sum502i = $row['502i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 502j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class502'

			");
			$row = mysql_fetch_assoc($result); 
			$sum502j = $row['502j'];				
		?>
<tr>
	<td align="center"><?php echo $class502  ?></td>
	<td align="center"><?php echo $sum502a  ?></td>
	<td align="center"><?php echo $sum502b  ?></td>
	<td align="center"><?php echo $sum502c  ?></td>
	<td align="center"><?php echo $sum502d  ?></td>
	<td align="center"><?php echo $sum502e  ?></td>
	<td align="center"><?php echo $sum502f  ?></td>
	<td align="center"><?php echo $sum502g  ?></td>
	<td align="center"><?php echo $sum502h  ?></td>
	<td align="center"><?php echo $sum502i  ?></td>
	<td align="center"><?php echo $sum502j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 503a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class503'


			");
			$row = mysql_fetch_assoc($result); 
			$sum503a = $row['503a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 503b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class503'


			");
			$row = mysql_fetch_assoc($result); 
			$sum503b = $row['503b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 503c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class503'


			");
			$row = mysql_fetch_assoc($result); 
			$sum503c = $row['503c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 503d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class503'


			");
			$row = mysql_fetch_assoc($result); 
			$sum503d = $row['503d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 503e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class503'


			");
			$row = mysql_fetch_assoc($result); 
			$sum503e = $row['503e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 503f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class503'


			");
			$row = mysql_fetch_assoc($result); 
			$sum503f = $row['503f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 503g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class503'


			");
			$row = mysql_fetch_assoc($result); 
			$sum503g = $row['503g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 503h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class503'


			");
			$row = mysql_fetch_assoc($result); 
			$sum503h = $row['503h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 503i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class503'


			");
			$row = mysql_fetch_assoc($result); 
			$sum503i = $row['503i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 503j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class503'

			");
			$row = mysql_fetch_assoc($result); 
			$sum503j = $row['503j'];				
		?>
<tr>
	<td align="center"><?php echo $class503  ?></td>
	<td align="center"><?php echo $sum503a  ?></td>
	<td align="center"><?php echo $sum503b  ?></td>
	<td align="center"><?php echo $sum503c  ?></td>
	<td align="center"><?php echo $sum503d  ?></td>
	<td align="center"><?php echo $sum503e  ?></td>
	<td align="center"><?php echo $sum503f  ?></td>
	<td align="center"><?php echo $sum503g  ?></td>
	<td align="center"><?php echo $sum503h  ?></td>
	<td align="center"><?php echo $sum503i  ?></td>
	<td align="center"><?php echo $sum503j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 504a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class504'


			");
			$row = mysql_fetch_assoc($result); 
			$sum504a = $row['504a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 504b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class504'


			");
			$row = mysql_fetch_assoc($result); 
			$sum504b = $row['504b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 504c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class504'


			");
			$row = mysql_fetch_assoc($result); 
			$sum504c = $row['504c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 504d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class504'


			");
			$row = mysql_fetch_assoc($result); 
			$sum504d = $row['504d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 504e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class504'


			");
			$row = mysql_fetch_assoc($result); 
			$sum504e = $row['504e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 504f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class504'


			");
			$row = mysql_fetch_assoc($result); 
			$sum504f = $row['504f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 504g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class504'


			");
			$row = mysql_fetch_assoc($result); 
			$sum504g = $row['504g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 504h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class504'


			");
			$row = mysql_fetch_assoc($result); 
			$sum504h = $row['504h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 504i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class504'


			");
			$row = mysql_fetch_assoc($result); 
			$sum504i = $row['504i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 504j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class504'

			");
			$row = mysql_fetch_assoc($result); 
			$sum504j = $row['504j'];				
		?>
<tr>
	<td align="center"><?php echo $class504  ?></td>
	<td align="center"><?php echo $sum504a  ?></td>
	<td align="center"><?php echo $sum504b  ?></td>
	<td align="center"><?php echo $sum504c  ?></td>
	<td align="center"><?php echo $sum504d  ?></td>
	<td align="center"><?php echo $sum504e  ?></td>
	<td align="center"><?php echo $sum504f  ?></td>
	<td align="center"><?php echo $sum504g  ?></td>
	<td align="center"><?php echo $sum504h  ?></td>
	<td align="center"><?php echo $sum504i  ?></td>
	<td align="center"><?php echo $sum504j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 505a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class505'


			");
			$row = mysql_fetch_assoc($result); 
			$sum505a = $row['505a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 505b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class505'


			");
			$row = mysql_fetch_assoc($result); 
			$sum505b = $row['505b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 505c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class505'


			");
			$row = mysql_fetch_assoc($result); 
			$sum505c = $row['505c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 505d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class505'


			");
			$row = mysql_fetch_assoc($result); 
			$sum505d = $row['505d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 505e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class505'


			");
			$row = mysql_fetch_assoc($result); 
			$sum505e = $row['505e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 505f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class505'


			");
			$row = mysql_fetch_assoc($result); 
			$sum505f = $row['505f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 505g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class505'


			");
			$row = mysql_fetch_assoc($result); 
			$sum505g = $row['505g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 505h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class505'


			");
			$row = mysql_fetch_assoc($result); 
			$sum505h = $row['505h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 505i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class505'


			");
			$row = mysql_fetch_assoc($result); 
			$sum505i = $row['505i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 505j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class505'

			");
			$row = mysql_fetch_assoc($result); 
			$sum505j = $row['505j'];				
		?>
<tr>
	<td align="center"><?php echo $class505  ?></td>
	<td align="center"><?php echo $sum505a  ?></td>
	<td align="center"><?php echo $sum505b  ?></td>
	<td align="center"><?php echo $sum505c  ?></td>
	<td align="center"><?php echo $sum505d  ?></td>
	<td align="center"><?php echo $sum505e  ?></td>
	<td align="center"><?php echo $sum505f  ?></td>
	<td align="center"><?php echo $sum505g  ?></td>
	<td align="center"><?php echo $sum505h  ?></td>
	<td align="center"><?php echo $sum505i  ?></td>
	<td align="center"><?php echo $sum505j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 506a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class506'


			");
			$row = mysql_fetch_assoc($result); 
			$sum506a = $row['506a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 506b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class506'


			");
			$row = mysql_fetch_assoc($result); 
			$sum506b = $row['506b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 506c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class506'


			");
			$row = mysql_fetch_assoc($result); 
			$sum506c = $row['506c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 506d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class506'


			");
			$row = mysql_fetch_assoc($result); 
			$sum506d = $row['506d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 506e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class506'


			");
			$row = mysql_fetch_assoc($result); 
			$sum506e = $row['506e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 506f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class506'


			");
			$row = mysql_fetch_assoc($result); 
			$sum506f = $row['506f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 506g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class506'


			");
			$row = mysql_fetch_assoc($result); 
			$sum506g = $row['506g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 506h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class506'


			");
			$row = mysql_fetch_assoc($result); 
			$sum506h = $row['506h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 506i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class506'


			");
			$row = mysql_fetch_assoc($result); 
			$sum506i = $row['506i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 506j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class506'

			");
			$row = mysql_fetch_assoc($result); 
			$sum506j = $row['506j'];				
		?>
<tr>
	<td align="center"><?php echo $class506  ?></td>
	<td align="center"><?php echo $sum506a  ?></td>
	<td align="center"><?php echo $sum506b  ?></td>
	<td align="center"><?php echo $sum506c  ?></td>
	<td align="center"><?php echo $sum506d  ?></td>
	<td align="center"><?php echo $sum506e  ?></td>
	<td align="center"><?php echo $sum506f  ?></td>
	<td align="center"><?php echo $sum506g  ?></td>
	<td align="center"><?php echo $sum506h  ?></td>
	<td align="center"><?php echo $sum506i  ?></td>
	<td align="center"><?php echo $sum506j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 507a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class507'


			");
			$row = mysql_fetch_assoc($result); 
			$sum507a = $row['507a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 507b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class507'


			");
			$row = mysql_fetch_assoc($result); 
			$sum507b = $row['507b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 507c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class507'


			");
			$row = mysql_fetch_assoc($result); 
			$sum507c = $row['507c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 507d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class507'


			");
			$row = mysql_fetch_assoc($result); 
			$sum507d = $row['507d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 507e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class507'


			");
			$row = mysql_fetch_assoc($result); 
			$sum507e = $row['507e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 507f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class507'


			");
			$row = mysql_fetch_assoc($result); 
			$sum507f = $row['507f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 507g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class507'


			");
			$row = mysql_fetch_assoc($result); 
			$sum507g = $row['507g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 507h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class507'


			");
			$row = mysql_fetch_assoc($result); 
			$sum507h = $row['507h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 507i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class507'


			");
			$row = mysql_fetch_assoc($result); 
			$sum507i = $row['507i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 507j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class507'

			");
			$row = mysql_fetch_assoc($result); 
			$sum507j = $row['507j'];				
		?>
<tr>
	<td align="center"><?php echo $class507  ?></td>
	<td align="center"><?php echo $sum507a  ?></td>
	<td align="center"><?php echo $sum507b  ?></td>
	<td align="center"><?php echo $sum507c  ?></td>
	<td align="center"><?php echo $sum507d  ?></td>
	<td align="center"><?php echo $sum507e  ?></td>
	<td align="center"><?php echo $sum507f  ?></td>
	<td align="center"><?php echo $sum507g  ?></td>
	<td align="center"><?php echo $sum507h  ?></td>
	<td align="center"><?php echo $sum507i  ?></td>
	<td align="center"><?php echo $sum507j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 508a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class508'


			");
			$row = mysql_fetch_assoc($result); 
			$sum508a = $row['508a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 508b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class508'


			");
			$row = mysql_fetch_assoc($result); 
			$sum508b = $row['508b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 508c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class508'


			");
			$row = mysql_fetch_assoc($result); 
			$sum508c = $row['508c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 508d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class508'


			");
			$row = mysql_fetch_assoc($result); 
			$sum508d = $row['508d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 508e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class508'


			");
			$row = mysql_fetch_assoc($result); 
			$sum508e = $row['508e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 508f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class508'


			");
			$row = mysql_fetch_assoc($result); 
			$sum508f = $row['508f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 508g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class508'


			");
			$row = mysql_fetch_assoc($result); 
			$sum508g = $row['508g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 508h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class508'


			");
			$row = mysql_fetch_assoc($result); 
			$sum508h = $row['508h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 508i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class508'


			");
			$row = mysql_fetch_assoc($result); 
			$sum508i = $row['508i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 508j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class508'

			");
			$row = mysql_fetch_assoc($result); 
			$sum508j = $row['508j'];				
		?>
<tr>
	<td align="center"><?php echo $class508  ?></td>
	<td align="center"><?php echo $sum508a  ?></td>
	<td align="center"><?php echo $sum508b  ?></td>
	<td align="center"><?php echo $sum508c  ?></td>
	<td align="center"><?php echo $sum508d  ?></td>
	<td align="center"><?php echo $sum508e  ?></td>
	<td align="center"><?php echo $sum508f  ?></td>
	<td align="center"><?php echo $sum508g  ?></td>
	<td align="center"><?php echo $sum508h  ?></td>
	<td align="center"><?php echo $sum508i  ?></td>
	<td align="center"><?php echo $sum508j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 509a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class509'


			");
			$row = mysql_fetch_assoc($result); 
			$sum509a = $row['509a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 509b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class509'


			");
			$row = mysql_fetch_assoc($result); 
			$sum509b = $row['509b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 509c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class509'


			");
			$row = mysql_fetch_assoc($result); 
			$sum509c = $row['509c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 509d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class509'


			");
			$row = mysql_fetch_assoc($result); 
			$sum509d = $row['509d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 509e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class509'


			");
			$row = mysql_fetch_assoc($result); 
			$sum509e = $row['509e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 509f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class509'


			");
			$row = mysql_fetch_assoc($result); 
			$sum509f = $row['509f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 509g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class509'


			");
			$row = mysql_fetch_assoc($result); 
			$sum509g = $row['509g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 509h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class509'


			");
			$row = mysql_fetch_assoc($result); 
			$sum509h = $row['509h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 509i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class509'


			");
			$row = mysql_fetch_assoc($result); 
			$sum509i = $row['509i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 509j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class509'

			");
			$row = mysql_fetch_assoc($result); 
			$sum509j = $row['509j'];				
		?>
<tr>
	<td align="center"><?php echo $class509  ?></td>
	<td align="center"><?php echo $sum509a  ?></td>
	<td align="center"><?php echo $sum509b  ?></td>
	<td align="center"><?php echo $sum509c  ?></td>
	<td align="center"><?php echo $sum509d  ?></td>
	<td align="center"><?php echo $sum509e  ?></td>
	<td align="center"><?php echo $sum509f  ?></td>
	<td align="center"><?php echo $sum509g  ?></td>
	<td align="center"><?php echo $sum509h  ?></td>
	<td align="center"><?php echo $sum509i  ?></td>
	<td align="center"><?php echo $sum509j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 510a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class510'


			");
			$row = mysql_fetch_assoc($result); 
			$sum510a = $row['510a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 510b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class510'


			");
			$row = mysql_fetch_assoc($result); 
			$sum510b = $row['510b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 510c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class510'


			");
			$row = mysql_fetch_assoc($result); 
			$sum510c = $row['510c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 510d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class510'


			");
			$row = mysql_fetch_assoc($result); 
			$sum510d = $row['510d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 510e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class510'


			");
			$row = mysql_fetch_assoc($result); 
			$sum510e = $row['510e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 510f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class510'


			");
			$row = mysql_fetch_assoc($result); 
			$sum510f = $row['510f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 510g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class510'


			");
			$row = mysql_fetch_assoc($result); 
			$sum510g = $row['510g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 510h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class510'


			");
			$row = mysql_fetch_assoc($result); 
			$sum510h = $row['510h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 510i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class510'


			");
			$row = mysql_fetch_assoc($result); 
			$sum510i = $row['510i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 510j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class510'

			");
			$row = mysql_fetch_assoc($result); 
			$sum510j = $row['510j'];				
		?>
<tr>
	<td align="center"><?php echo $class510  ?></td>
	<td align="center"><?php echo $sum510a  ?></td>
	<td align="center"><?php echo $sum510b  ?></td>
	<td align="center"><?php echo $sum510c  ?></td>
	<td align="center"><?php echo $sum510d  ?></td>
	<td align="center"><?php echo $sum510e  ?></td>
	<td align="center"><?php echo $sum510f  ?></td>
	<td align="center"><?php echo $sum510g  ?></td>
	<td align="center"><?php echo $sum510h  ?></td>
	<td align="center"><?php echo $sum510i  ?></td>
	<td align="center"><?php echo $sum510j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 511a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class511'


			");
			$row = mysql_fetch_assoc($result); 
			$sum511a = $row['511a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 511b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class511'


			");
			$row = mysql_fetch_assoc($result); 
			$sum511b = $row['511b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 511c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class511'


			");
			$row = mysql_fetch_assoc($result); 
			$sum511c = $row['511c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 511d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class511'


			");
			$row = mysql_fetch_assoc($result); 
			$sum511d = $row['511d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 511e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class511'


			");
			$row = mysql_fetch_assoc($result); 
			$sum511e = $row['511e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 511f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class511'


			");
			$row = mysql_fetch_assoc($result); 
			$sum511f = $row['511f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 511g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class511'


			");
			$row = mysql_fetch_assoc($result); 
			$sum511g = $row['511g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 511h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class511'


			");
			$row = mysql_fetch_assoc($result); 
			$sum511h = $row['511h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 511i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class511'


			");
			$row = mysql_fetch_assoc($result); 
			$sum511i = $row['511i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 511j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class511'

			");
			$row = mysql_fetch_assoc($result); 
			$sum511j = $row['511j'];					
		?>
<tr>
	<td align="center"><?php echo $class511  ?></td>
	<td align="center"><?php echo $sum511a  ?></td>
	<td align="center"><?php echo $sum511b  ?></td>
	<td align="center"><?php echo $sum511c  ?></td>
	<td align="center"><?php echo $sum511d  ?></td>
	<td align="center"><?php echo $sum511e  ?></td>
	<td align="center"><?php echo $sum511f  ?></td>
	<td align="center"><?php echo $sum511g  ?></td>
	<td align="center"><?php echo $sum511h  ?></td>
	<td align="center"><?php echo $sum511i  ?></td>
	<td align="center"><?php echo $sum511j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 512a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class512'


			");
			$row = mysql_fetch_assoc($result); 
			$sum512a = $row['512a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 512b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class512'


			");
			$row = mysql_fetch_assoc($result); 
			$sum512b = $row['512b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 512c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class512'


			");
			$row = mysql_fetch_assoc($result); 
			$sum512c = $row['512c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 512d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class512'


			");
			$row = mysql_fetch_assoc($result); 
			$sum512d = $row['512d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 512e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class512'


			");
			$row = mysql_fetch_assoc($result); 
			$sum512e = $row['512e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 512f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class512'


			");
			$row = mysql_fetch_assoc($result); 
			$sum512f = $row['512f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 512g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class512'


			");
			$row = mysql_fetch_assoc($result); 
			$sum512g = $row['512g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 512h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class512'


			");
			$row = mysql_fetch_assoc($result); 
			$sum512h = $row['512h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 512i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class512'


			");
			$row = mysql_fetch_assoc($result); 
			$sum512i = $row['512i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 512j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class512'

			");
			$row = mysql_fetch_assoc($result); 
			$sum512j = $row['512j'];					
		?>
<tr>
	<td align="center"><?php echo $class512  ?></td>
	<td align="center"><?php echo $sum512a  ?></td>
	<td align="center"><?php echo $sum512b  ?></td>
	<td align="center"><?php echo $sum512c  ?></td>
	<td align="center"><?php echo $sum512d  ?></td>
	<td align="center"><?php echo $sum512e  ?></td>
	<td align="center"><?php echo $sum512f  ?></td>
	<td align="center"><?php echo $sum512g  ?></td>
	<td align="center"><?php echo $sum512h  ?></td>
	<td align="center"><?php echo $sum512i  ?></td>
	<td align="center"><?php echo $sum512j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 513a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class513'


			");
			$row = mysql_fetch_assoc($result); 
			$sum513a = $row['513a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 513b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class513'


			");
			$row = mysql_fetch_assoc($result); 
			$sum513b = $row['513b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 513c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class513'


			");
			$row = mysql_fetch_assoc($result); 
			$sum513c = $row['513c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 513d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class513'


			");
			$row = mysql_fetch_assoc($result); 
			$sum513d = $row['513d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 513e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class513'


			");
			$row = mysql_fetch_assoc($result); 
			$sum513e = $row['513e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 513f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class513'


			");
			$row = mysql_fetch_assoc($result); 
			$sum513f = $row['513f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 513g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class513'


			");
			$row = mysql_fetch_assoc($result); 
			$sum513g = $row['513g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 513h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class513'


			");
			$row = mysql_fetch_assoc($result); 
			$sum513h = $row['513h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 513i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class513'


			");
			$row = mysql_fetch_assoc($result); 
			$sum513i = $row['513i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 513j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class513'

			");
			$row = mysql_fetch_assoc($result); 
			$sum513j = $row['513j'];					
		?>
<tr>
	<td align="center"><?php echo $class513  ?></td>
	<td align="center"><?php echo $sum513a  ?></td>
	<td align="center"><?php echo $sum513b  ?></td>
	<td align="center"><?php echo $sum513c  ?></td>
	<td align="center"><?php echo $sum513d  ?></td>
	<td align="center"><?php echo $sum513e  ?></td>
	<td align="center"><?php echo $sum513f  ?></td>
	<td align="center"><?php echo $sum513g  ?></td>
	<td align="center"><?php echo $sum513h  ?></td>
	<td align="center"><?php echo $sum513i  ?></td>
	<td align="center"><?php echo $sum513j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 514a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class514'


			");
			$row = mysql_fetch_assoc($result); 
			$sum514a = $row['514a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 514b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class514'


			");
			$row = mysql_fetch_assoc($result); 
			$sum514b = $row['514b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 514c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class514'


			");
			$row = mysql_fetch_assoc($result); 
			$sum514c = $row['514c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 514d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class514'


			");
			$row = mysql_fetch_assoc($result); 
			$sum514d = $row['514d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 514e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class514'


			");
			$row = mysql_fetch_assoc($result); 
			$sum514e = $row['514e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 514f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class514'


			");
			$row = mysql_fetch_assoc($result); 
			$sum514f = $row['514f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 514g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class514'


			");
			$row = mysql_fetch_assoc($result); 
			$sum514g = $row['514g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 514h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class514'


			");
			$row = mysql_fetch_assoc($result); 
			$sum514h = $row['514h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 514i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class514'


			");
			$row = mysql_fetch_assoc($result); 
			$sum514i = $row['514i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 514j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class514'

			");
			$row = mysql_fetch_assoc($result); 
			$sum514j = $row['514j'];					
		?>
<tr>
	<td align="center"><?php echo $class514  ?></td>
	<td align="center"><?php echo $sum514a  ?></td>
	<td align="center"><?php echo $sum514b  ?></td>
	<td align="center"><?php echo $sum514c  ?></td>
	<td align="center"><?php echo $sum514d  ?></td>
	<td align="center"><?php echo $sum514e  ?></td>
	<td align="center"><?php echo $sum514f  ?></td>
	<td align="center"><?php echo $sum514g  ?></td>
	<td align="center"><?php echo $sum514h  ?></td>
	<td align="center"><?php echo $sum514i  ?></td>
	<td align="center"><?php echo $sum514j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 515a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class515'


			");
			$row = mysql_fetch_assoc($result); 
			$sum515a = $row['515a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 515b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class515'


			");
			$row = mysql_fetch_assoc($result); 
			$sum515b = $row['515b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 515c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class515'


			");
			$row = mysql_fetch_assoc($result); 
			$sum515c = $row['515c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 515d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class515'


			");
			$row = mysql_fetch_assoc($result); 
			$sum515d = $row['515d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 515e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class515'


			");
			$row = mysql_fetch_assoc($result); 
			$sum515e = $row['515e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 515f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class515'


			");
			$row = mysql_fetch_assoc($result); 
			$sum515f = $row['515f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 515g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class515'


			");
			$row = mysql_fetch_assoc($result); 
			$sum515g = $row['515g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 515h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class515'


			");
			$row = mysql_fetch_assoc($result); 
			$sum515h = $row['515h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 515i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class515'


			");
			$row = mysql_fetch_assoc($result); 
			$sum515i = $row['515i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 515j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class515'

			");
			$row = mysql_fetch_assoc($result); 
			$sum515j = $row['515j'];					
		?>
<tr>
	<td align="center"><?php echo $class515  ?></td>
	<td align="center"><?php echo $sum515a  ?></td>
	<td align="center"><?php echo $sum515b  ?></td>
	<td align="center"><?php echo $sum515c  ?></td>
	<td align="center"><?php echo $sum515d  ?></td>
	<td align="center"><?php echo $sum515e  ?></td>
	<td align="center"><?php echo $sum515f  ?></td>
	<td align="center"><?php echo $sum515g  ?></td>
	<td align="center"><?php echo $sum515h  ?></td>
	<td align="center"><?php echo $sum515i  ?></td>
	<td align="center"><?php echo $sum515j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 516a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class516'


			");
			$row = mysql_fetch_assoc($result); 
			$sum516a = $row['516a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 516b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class516'


			");
			$row = mysql_fetch_assoc($result); 
			$sum516b = $row['516b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 516c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class516'


			");
			$row = mysql_fetch_assoc($result); 
			$sum516c = $row['516c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 516d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class516'


			");
			$row = mysql_fetch_assoc($result); 
			$sum516d = $row['516d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 516e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class516'


			");
			$row = mysql_fetch_assoc($result); 
			$sum516e = $row['516e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 516f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class516'


			");
			$row = mysql_fetch_assoc($result); 
			$sum516f = $row['516f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 516g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class516'


			");
			$row = mysql_fetch_assoc($result); 
			$sum516g = $row['516g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 516h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class516'


			");
			$row = mysql_fetch_assoc($result); 
			$sum516h = $row['516h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 516i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class516'


			");
			$row = mysql_fetch_assoc($result); 
			$sum516i = $row['516i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 516j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class516'

			");
			$row = mysql_fetch_assoc($result); 
			$sum516j = $row['516j'];					
		?>
<tr>
	<td align="center"><?php echo $class516  ?></td>
	<td align="center"><?php echo $sum516a  ?></td>
	<td align="center"><?php echo $sum516b  ?></td>
	<td align="center"><?php echo $sum516c  ?></td>
	<td align="center"><?php echo $sum516d  ?></td>
	<td align="center"><?php echo $sum516e  ?></td>
	<td align="center"><?php echo $sum516f  ?></td>
	<td align="center"><?php echo $sum516g  ?></td>
	<td align="center"><?php echo $sum516h  ?></td>
	<td align="center"><?php echo $sum516i  ?></td>
	<td align="center"><?php echo $sum516j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 517a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class517'


			");
			$row = mysql_fetch_assoc($result); 
			$sum517a = $row['517a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 517b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class517'


			");
			$row = mysql_fetch_assoc($result); 
			$sum517b = $row['517b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 517c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class517'


			");
			$row = mysql_fetch_assoc($result); 
			$sum517c = $row['517c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 517d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class517'


			");
			$row = mysql_fetch_assoc($result); 
			$sum517d = $row['517d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 517e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class517'


			");
			$row = mysql_fetch_assoc($result); 
			$sum517e = $row['517e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 517f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class517'


			");
			$row = mysql_fetch_assoc($result); 
			$sum517f = $row['517f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 517g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class517'


			");
			$row = mysql_fetch_assoc($result); 
			$sum517g = $row['517g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 517h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class517'


			");
			$row = mysql_fetch_assoc($result); 
			$sum517h = $row['517h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 517i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class517'


			");
			$row = mysql_fetch_assoc($result); 
			$sum517i = $row['517i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 517j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class517'

			");
			$row = mysql_fetch_assoc($result); 
			$sum517j = $row['517j'];					
		?>
<tr>
	<td align="center"><?php echo $class517  ?></td>
	<td align="center"><?php echo $sum517a  ?></td>
	<td align="center"><?php echo $sum517b  ?></td>
	<td align="center"><?php echo $sum517c  ?></td>
	<td align="center"><?php echo $sum517d  ?></td>
	<td align="center"><?php echo $sum517e  ?></td>
	<td align="center"><?php echo $sum517f  ?></td>
	<td align="center"><?php echo $sum517g  ?></td>
	<td align="center"><?php echo $sum517h  ?></td>
	<td align="center"><?php echo $sum517i  ?></td>
	<td align="center"><?php echo $sum517j  ?></td>
</tr>

		<?php			
			include('connect.php');
			$id=$_GET['id'];
			$date=$_GET['date'];
			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 518a, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=1 AND a.reserve_fd3_student_class = '$class518'


			");
			$row = mysql_fetch_assoc($result); 
			$sum518a = $row['518a'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 518b, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=2 AND a.reserve_fd3_student_class = '$class518'


			");
			$row = mysql_fetch_assoc($result); 
			$sum518b = $row['518b'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 518c, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=3 AND a.reserve_fd3_student_class = '$class518'


			");
			$row = mysql_fetch_assoc($result); 
			$sum518c = $row['518c'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 518d, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=4 AND a.reserve_fd3_student_class = '$class518'


			");
			$row = mysql_fetch_assoc($result); 
			$sum518d = $row['518d'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 518e, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=5 AND a.reserve_fd3_student_class = '$class518'


			");
			$row = mysql_fetch_assoc($result); 
			$sum518e = $row['518e'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 518f, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=6 AND a.reserve_fd3_student_class = '$class518'


			");
			$row = mysql_fetch_assoc($result); 
			$sum518f = $row['518f'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 518g, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=7 AND a.reserve_fd3_student_class = '$class518'


			");
			$row = mysql_fetch_assoc($result); 
			$sum518g = $row['518g'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 518h, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=8 AND a.reserve_fd3_student_class = '$class518'


			");
			$row = mysql_fetch_assoc($result); 
			$sum518h = $row['518h'];	
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 518i, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=9 AND a.reserve_fd3_student_class = '$class518'


			");
			$row = mysql_fetch_assoc($result); 
			$sum518i = $row['518i'];			
			$result = mysql_query("
			
							SELECT count(a.reserve_fd3_food_id) AS 518j, a.reserve_fd3_student_class
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' 
							AND b.reserve_fd2_cat=0 AND a.reserve_fd3_student_class = '$class518'

			");
			$row = mysql_fetch_assoc($result); 
			$sum518j = $row['518j'];					
		?>
<tr>
	<td align="center"><?php echo $class518  ?></td>
	<td align="center"><?php echo $sum518a  ?></td>
	<td align="center"><?php echo $sum518b  ?></td>
	<td align="center"><?php echo $sum518c  ?></td>
	<td align="center"><?php echo $sum518d  ?></td>
	<td align="center"><?php echo $sum518e  ?></td>
	<td align="center"><?php echo $sum518f  ?></td>
	<td align="center"><?php echo $sum518g  ?></td>
	<td align="center"><?php echo $sum518h  ?></td>
	<td align="center"><?php echo $sum518i  ?></td>
	<td align="center"><?php echo $sum518j  ?></td>
</tr>
</tbody>
</table>

</body>
</html>