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


<title>订购名单（给档口）</title>
</head>
<body onload="window.print()">
<p>订购名单（给档口）</p>

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
			
<table style="width: 100%">
<tbody>



<tr>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">Waffle</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='m' AND b.reserve_fd2_cat='1'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">Nugget</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='m' AND b.reserve_fd2_cat='2'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">玉蜀黍</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='m' AND b.reserve_fd2_cat='3'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">海鲜豆腐 & Fish ball </th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='m' AND b.reserve_fd2_cat='4'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">Hushbrown</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='m' AND b.reserve_fd2_cat='5'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">大鱼柳</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='m' AND b.reserve_fd2_cat='6'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">茶叶蛋</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='m' AND b.reserve_fd2_cat='7'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">三文治</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='m' AND b.reserve_fd2_cat='8'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">饭团</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='m' AND b.reserve_fd2_cat='9'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">小丸子</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='m' AND b.reserve_fd2_cat='0'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>


</tr>
</tbody>
</table>


<table style="width: 100%">
<tbody>



<tr>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">Waffle</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' AND b.reserve_fd2_cat='1'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">Nugget</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' AND b.reserve_fd2_cat='2'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">玉蜀黍</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' AND b.reserve_fd2_cat='3'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">海鲜豆腐 & Fish ball</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' AND b.reserve_fd2_cat='4'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">Hushbrown</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' AND b.reserve_fd2_cat='5'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">大鱼柳</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' AND b.reserve_fd2_cat='6'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">茶叶蛋</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' AND b.reserve_fd2_cat='7'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">三文治</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' AND b.reserve_fd2_cat='8'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">饭团</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' AND b.reserve_fd2_cat='9'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>
<td style="width: 10%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">小丸子</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
							SELECT count(a.reserve_fd3_food_id) AS abc, a.reserve_fd3_student_class,b.reserve_fd2_cat
							FROM reserve_fd3 a 
							LEFT JOIN reserve_fd2 b	ON a.reserve_fd3_food_id = b.reserve_fd2_id
							JOIN reserve_shop c ON a.reserve_fd3_student_number = c.reserve_name
							
							WHERE a.reserve_fd3_date='$date' AND a.reserve_fd3_store='$id' AND a.reserve_fd3_ma='a' AND b.reserve_fd2_cat='0'
							GROUP BY a.reserve_fd3_student_class
							ORDER BY a.reserve_fd3_student_class

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd3_student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
</td>


</tr>
</tbody>
</table>
</body>
</html>