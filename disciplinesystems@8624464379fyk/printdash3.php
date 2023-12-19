<?php
require('connect.php');
require('connect2.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>训导处 - 购买物品</title>
</head>
<body onload="window.print()">
			
<table style="width: 100%">
<tbody>
<tr>
<td style="width: 50%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
							<thead>
						    <tr>		
						        <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;font-weight: bold;width: 20%" colspan="2">购买物品记录单据</th>
						    </tr>
						    <tr>		
						        <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;font-weight: bold;width: 20%" colspan="2">学生存档</th>
						    </tr>							

					<?php
							include('connect.php');
							
							$id=$_GET['id'];
							$result = mysql_query("

							SELECT a.dis3_id,a.dis3_student_number,a.dis3_student_name,a.dis3_student_class,a.dis3_student_seat,
							a.dis3_item,a.dis3_item_detail,a.dis3_paid_total,a.dis3_date_paid,a.dis3_date_buy
							FROM ddis3 a
							WHERE a.dis3_id = '$id'


							");
							while($row = mysql_fetch_array($result))
								{		
?>

						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">姓名</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_student_name"] ; ?></td>
						    </tr>
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">班级</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_student_class"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">座号</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_student_seat"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">学号</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_student_number"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">购买物品</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_item"] ; ?>：<?php echo $row["dis3_item_detail"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">总额</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify">RM <?php echo $row["dis3_paid_total"] ; ?></td>
						    </tr>
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">购买日期</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_date_buy"] ; ?></td>
						    </tr>														
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">付款日期</td>
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
								**以此单据证明学生已向训导处全数还清以上总额，
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
						        <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;font-weight: bold;width: 20%" colspan="2">购买物品记录单据</th>
						    </tr>
						    <tr>		
						        <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;font-weight: bold;width: 20%" colspan="2">训导处存档</th>
						    </tr>							

					<?php
							include('connect.php');
							
							$id=$_GET['id'];
							$result = mysql_query("

							SELECT a.dis3_id,a.dis3_student_number,a.dis3_student_name,a.dis3_student_class,a.dis3_student_seat,
							a.dis3_item,a.dis3_item_detail,a.dis3_paid_total,a.dis3_date_paid,a.dis3_date_buy
							FROM ddis3 a
							WHERE a.dis3_id = '$id'


							");
							while($row = mysql_fetch_array($result))
								{		
?>

						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">姓名</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_student_name"] ; ?></td>
						    </tr>
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">班级</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_student_class"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">座号</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_student_seat"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">学号</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_student_number"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">购买物品</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_item"] ; ?>：<?php echo $row["dis3_item_detail"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">总额</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify">RM <?php echo $row["dis3_paid_total"] ; ?></td>
						    </tr>
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">购买日期</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"><?php echo $row["dis3_date_buy"] ; ?></td>
						    </tr>														
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;width: 40%" align="center">付款日期</td>
								<td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;" align="justify"></td>
						    </tr>							
						    <tr>		
						        <td style="font-family: 楷体, KaiTi; font-size: 13pt; line-height: 3.2;width: 40%" align="center">训导处付款处理者</th>
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