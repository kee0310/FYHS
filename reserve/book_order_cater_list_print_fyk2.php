<?php
require('connect.php');
require('connect2.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>网上订书</title>
</head>
<body onload="window.print()">
<p>网上订书 - 学生名单</p>

<?php			


							include('connect.php');
							
							
							$id=$_GET['id'];
							$result = mysql_query("
							
							SELECT *
							FROM reserve_bk5
							WHERE reserve_bk5_id ='$id'
							");
							while($row = mysql_fetch_array($result))
								{					
								echo $row['reserve_bk5_bookname'];
								echo '&nbsp;&nbsp;';
								echo $row['reserve_bk5_publishing'];
								echo '&nbsp;&nbsp;';
								echo $row['reserve_bk5_editor'];
								echo '&nbsp;&nbsp;';
								echo $row['reserve_bk5_year'];
								echo '&nbsp;&nbsp;';
								echo $row['reserve_bk5_price'];
								echo '&nbsp;&nbsp;';
								echo $row['reserve_bk5_remark'];								
								}			
?>

<table style="width: 100%">
<tbody>



<tr>
<td style="width: 100%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>	
								<th style="font-size:12px; line-height: 1.4;width: 15%">学号</th>
								<th style="font-size:12px; line-height: 1.4;width: 30%">姓名</th>
								<th style="font-size:12px; line-height: 1.4;width: 15%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 40%">备注</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
				$id=$_GET['id'];

				$result = mysql_query(" 
							SELECT a.reserve_bk6_id,a.reserve_bk6_book_id,b.reserve_name,b.student_name,student_class					
							FROM reserve_bk6 a
							JOIN reserve_shop b ON b.reserve_name = a.reserve_bk6_student_number
							WHERE a.reserve_bk6_book_id ='$id'
							ORDER BY b.student_class ASC
							");
							
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';	
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_name"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_name"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_class"].'</td>';
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