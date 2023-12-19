<?php
require('connect.php');
include("auth_admin.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">





<title>贩卖部预约表</title>
</head>
<body onload="window.print()">



						<table style="width: 100%; border-collapse: collapse;" border="0" >
							<tbody>					
					<?php
							include('connect.php');
							
							$id = $_GET['id'];
							$result = mysql_query("
							SELECT * FROM reserve4_shop	WHERE reserve4_slot_number = $id				
							");
							
							if($result === FALSE) { 
							die(mysql_error()); // TODO: better error handling
							}

							while($row = mysql_fetch_array($result))
								{			
						    echo '<tr>';								
						        echo '<td align="center" style="font-size:11px;line-height: 1.2; width: 3%">'.$row["reserve4_slot_number"].':</td>';
								echo '<td align="left" style="font-size:11px;line-height: 1.2; width: 50%">'.$row["reserve4_slot_date"].'</td>';
								echo '<td align="right" style="font-size:11px;line-height: 1.2; width: 47%">'.$row["reserve4_slot_time"].'</td>';
						    echo '</tr>';
								}

					?> 						
						    </tbody>
						</table>
<div style="height:10px"></div>
						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>						        
						        <th style="font-size:12px; line-height: 1.4;width: 10%">学号</th>
								<th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">座号</th>
						        <th style="font-size:12px; line-height: 1.4;width: 40%">姓名</th>
						        <th style="font-size:12px; line-height: 1.4;width: 20%">备注</th>
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
							
							$id = $_GET['id'];
							$result = mysql_query("
							SELECT *
							FROM reserve2_shop
							INNER JOIN reserve_shop
							ON reserve2_shop.reserve2_student_number = reserve_shop.reserve_name
							WHERE reserve2_shop.reserve2_slot = $id
							ORDER BY reserve2_shop.reserve2_id ASC;
													
							");
							
							if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

							while($row = mysql_fetch_array($result))
								{		
					
						    echo '<tr>';
						        						
						        echo '<td align="center" style="font-size:11px;line-height: 1.2;">'.$row["reserve2_student_number"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.2;">'.$row["student_class"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.2;">'.$row["student_seat"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.2;">'.$row["student_name"].'</td>';
						        echo '<td></td>';
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
	
						
						
						


</body>
</html>