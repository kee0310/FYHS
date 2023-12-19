<?php
require('connect.php');
require('connect2.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>训导处 - 备案牌</title>
</head>
<body onload="window.print()">
			
<table style="width: 100%">
<tbody>
<tr>
<td style="width: 50%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
							<thead>
						    <tr>		
						        <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;font-weight: bold;width: 20%" colspan="2">借备案牌记录单据</th>
						    </tr>
						    <tr>		
						        <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;font-weight: bold;width: 20%" colspan="2">学生存档</th>
						    </tr>							

					<?php
							include('connect.php');
							
							$id=$_GET['id'];
							$result = mysql_query("

							SELECT a.dis1_id,a.dis1_student_number,a.dis1_student_name,a.dis1_student_class,a.dis1_student_seat,a.dis1_batch_color,a.dis1_batch_number,
							a.dis1_date_borrow,a.dis1_date_estimate,a.dis1_date_return,a.dis1_reason
							FROM ddis1 a
							WHERE a.dis1_id = '$id'


							");
							while($row = mysql_fetch_array($result))
								{		
?>

						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">姓名</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_student_name"] ; ?></td>
						    </tr>
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">班级</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_student_class"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">座号</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_student_seat"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">学号</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_student_number"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">备案牌</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_batch_number"] ; ?>&nbsp;&nbsp;
								<?php
									if ($row["dis1_batch_color"] == 'blue'){
				
									echo '蓝色';
				
								}								
								else{
				
									echo '白色';
				
								}
							
								?>
								
								
								</td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">借出日期</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_date_borrow"] ; ?></td>
						    </tr>
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">原因</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_reason"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">预计归还日期</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_date_estimate"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">归还日期</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 3.2;width: 40%" align="center">训导处签盖</th>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 3.2;padding-left: 5px;" align="justify"></th>
						    </tr>							
								
<?php
								}
?>

						    <tr>		
						        <th style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 20%" colspan="2">
								**以此单据证明学生已将以上备案牌归还训导处，
								请学生保留此单据至该年末
								</th>
						    </tr>							
							</thead>
						</table>
</td>
<td style="width: 50%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
							<thead>
						    <tr>		
						        <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;font-weight: bold;width: 20%" colspan="2">借备案牌记录单据</th>
						    </tr>
						    <tr>		
						        <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;font-weight: bold;width: 20%" colspan="2">训导处存档</th>
						    </tr>							

					<?php
							include('connect.php');
							
							$id=$_GET['id'];
							$result = mysql_query("

							SELECT a.dis1_id,a.dis1_student_number,a.dis1_student_name,a.dis1_student_class,a.dis1_student_seat,a.dis1_batch_color,a.dis1_batch_number,
							a.dis1_date_borrow,a.dis1_date_estimate,a.dis1_date_return,a.dis1_reason
							FROM ddis1 a
							WHERE a.dis1_id = '$id'


							");
							while($row = mysql_fetch_array($result))
								{		
?>

						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">姓名</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_student_name"] ; ?></td>
						    </tr>
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">班级</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_student_class"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">座号</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_student_seat"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">学号</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_student_number"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">备案牌</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_batch_number"] ; ?>&nbsp;&nbsp;
								<?php
									if ($row["dis1_batch_color"] == 'blue'){
				
									echo '蓝色';
				
								}								
								else{
				
									echo '白色';
				
								}
							
								?>
								
								
								</td>								
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">借出日期</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_date_borrow"] ; ?></td>
						    </tr>
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">原因</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_reason"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">预计归还日期</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis1_date_estimate"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">归还日期</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 3.2;width: 40%" align="center">训导处归还处理者</th>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 3.2;padding-left: 5px;" align="justify"></th>
						    </tr>							
								
<?php
								}
?>
							
							</thead>
						</table>


</td>


</tr>
</tbody>
</table>

</body>
</html>