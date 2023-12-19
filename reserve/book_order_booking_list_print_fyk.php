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


<title>（2022初二至高三）订购总表</title>
</head>
<body onload="window.print()">
<p>（2022初二至高三）订购总表</p>



						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 10%">Level</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">ID</th>
								<th style="font-size:12px; line-height: 1.4;width: 40%">书名</th>
								<th style="font-size:12px; line-height: 1.4;width: 5%">Size</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">价钱</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">订购数量</th>
								<th style="font-size:12px; line-height: 1.4;width: 15%">备注</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');

			$result = mysql_query("
							SELECT count(a.reserve_bk6_book_id) AS abc, a.reserve_bk6_size, a.reserve_bk6_price, a.reserve_bk6_bookname, a.reserve_bk6_book_id, b.reserve_bk5_level
							FROM reserve_bk6 a 
							LEFT JOIN reserve_bk5 b 
							ON a.reserve_bk6_book_id = b.reserve_bk5_id
							GROUP BY a.reserve_bk6_book_id, a.reserve_bk6_size
							ORDER BY a.reserve_bk6_book_id

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';		

								if ($row["reserve_bk5_level"] == "2"){
				
									echo "<td align='center' style='font-size:11px;line-height: 1.3;'>初二</td>";
				
								}								
								elseif($row["reserve_bk5_level"] == "3"){
				
									echo "<td align='center' style='font-size:11px;line-height: 1.3;'>初三</td>";
				
								}	
								elseif($row["reserve_bk5_level"] == "4"){
				
									echo "<td align='center' style='font-size:11px;line-height: 1.3;'>高一</td>";
				
								}
								elseif($row["reserve_bk5_level"] == "5a"){
				
									echo "<td align='center' style='font-size:11px;line-height: 1.3;'>高二文</td>";
				
								}
								elseif($row["reserve_bk5_level"] == "5b"){
				
									echo "<td align='center' style='font-size:11px;line-height: 1.3;'>高二理</td>";
				
								}
								elseif($row["reserve_bk5_level"] == "5c"){
				
									echo "<td align='center' style='font-size:11px;line-height: 1.3;'>高二餐</td>";
				
								}
								elseif($row["reserve_bk5_level"] == "5d"){
				
									echo "<td align='center' style='font-size:11px;line-height: 1.3;'>高二电</td>";
				
								}
								elseif($row["reserve_bk5_level"] == "6a"){
				
									echo "<td align='center' style='font-size:11px;line-height: 1.3;'>高三文</td>";
				
								}
								elseif($row["reserve_bk5_level"] == "6b"){
				
									echo "<td align='center' style='font-size:11px;line-height: 1.3;'>高三理</td>";
				
								}
								elseif($row["reserve_bk5_level"] == "6c"){
				
									echo "<td align='center' style='font-size:11px;line-height: 1.3;'>高三餐</td>";
				
								}
								elseif($row["reserve_bk5_level"] == "6d"){
				
									echo "<td align='center' style='font-size:11px;line-height: 1.3;'>高三电</td>";
				
								}
								
								else{
				
									echo "<td>-</td>";
				
								}
							
						        
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_bk6_book_id"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_bk6_bookname"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_bk6_size"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_bk6_price"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
								echo '<td align="center" style="font-size:11px;line-height: 1.3;"></td>';
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>			




</body>
</html>