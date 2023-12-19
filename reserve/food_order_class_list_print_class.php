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


<title>订购名单（给班级）</title>
</head>
<body onload="window.print()">
<p>订购名单（给班级）</p>

					<?php
					
						include('connect.php');

						$id=$_GET['id'];
						$date=$_GET['date'];
			
						echo $date;
						echo '&nbsp;&nbsp;&nbsp;';
						echo '班级：';
						echo '&nbsp;&nbsp;&nbsp;';
						echo $id;
			
			
					?>
			

<br>
早餐
<table style="width: 100%">
<tbody>
<tr>
<td style="width: 100%">



						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 10%">学号</th>
						        <th style="font-size:12px; line-height: 1.4;width: 25%">姓名</th>
								<th style="font-size:12px; line-height: 1.4;width: 5%">座号</th>
						        <th style="font-size:12px; line-height: 1.4;width: 5%">档口</th>
								<th style="font-size:12px; line-height: 1.4;width: 7%">时段</th>
						        <th style="font-size:12px; line-height: 1.4;width: 28%">食物</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">价钱 (RM)</th>	
								<th style="font-size:12px; line-height: 1.4;width: 10%">备注</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
			
SELECT P.reserve_name,P.student_name,P.student_seat,R.reserve_fd2_store,R.reserve_fd2_name,R.reserve_fd2_price,R.reserve_fd2_ma

FROM reserve_fd3 O

JOIN reserve_shop	P	ON O.reserve_fd3_student_number = P.reserve_name
JOIN reserve_fd2	R	ON O.reserve_fd3_food_id = R.reserve_fd2_id

WHERE R.reserve_fd2_date='$date' AND P.student_class='$id' AND R.reserve_fd2_ma='m'

ORDER BY R.reserve_fd2_store ASC

;
			
			
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_name"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_name"].'</td>';	
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_seat"].'</td>';	
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd2_store"].'</td>';
								
								if($row["reserve_fd2_ma"] == 'm'){
									echo '<td align="center" style="font-size:11px;line-height: 1.3;">早餐</td>';
								}
								elseif($row["reserve_fd2_ma"] == 'a'){
									echo '<td align="center" style="font-size:11px;line-height: 1.3;">午餐</td>';
								}
								else{
									echo '<td align="center" style="font-size:11px;line-height: 1.3;">其它</td>';
								}
								
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd2_name"].'</td>';	
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd2_price"].'</td>';	
								echo '<td align="center" style="font-size:11px;line-height: 1.3;"></td>';
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>

</td>
</tr>
</tbody>
</table>				

<br>
午餐
<table style="width: 100%">
<tbody>
<tr>
<td style="width: 100%">



						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 10%">学号</th>
						        <th style="font-size:12px; line-height: 1.4;width: 25%">姓名</th>
								<th style="font-size:12px; line-height: 1.4;width: 5%">座号</th>
						        <th style="font-size:12px; line-height: 1.4;width: 5%">档口</th>
								<th style="font-size:12px; line-height: 1.4;width: 7%">时段</th>
						        <th style="font-size:12px; line-height: 1.4;width: 28%">食物</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">价钱 (RM)</th>	
								<th style="font-size:12px; line-height: 1.4;width: 10%">备注</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$date=$_GET['date'];
			$result = mysql_query("
			
SELECT P.reserve_name,P.student_name,P.student_seat,R.reserve_fd2_store,R.reserve_fd2_name,R.reserve_fd2_price,R.reserve_fd2_ma

FROM reserve_fd3 O

JOIN reserve_shop	P	ON O.reserve_fd3_student_number = P.reserve_name
JOIN reserve_fd2	R	ON O.reserve_fd3_food_id = R.reserve_fd2_id

WHERE R.reserve_fd2_date='$date' AND P.student_class='$id' AND R.reserve_fd2_ma='a'

ORDER BY R.reserve_fd2_store ASC

;
			
			
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_name"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_name"].'</td>';	
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_seat"].'</td>';	
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd2_store"].'</td>';
								
								if($row["reserve_fd2_ma"] == 'm'){
									echo '<td align="center" style="font-size:11px;line-height: 1.3;">早餐</td>';
								}
								elseif($row["reserve_fd2_ma"] == 'a'){
									echo '<td align="center" style="font-size:11px;line-height: 1.3;">午餐</td>';
								}
								else{
									echo '<td align="center" style="font-size:11px;line-height: 1.3;">其它</td>';
								}
								
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd2_name"].'</td>';	
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_fd2_price"].'</td>';	
								echo '<td align="center" style="font-size:11px;line-height: 1.3;"></td>';
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