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


<title>（2022初一）订购总表</title>
</head>
<body onload="window.print()">
<p>（2022初一）订购总表</p>



						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
						        <th style="font-size:12px; line-height: 1.4;width: 10%">ID</th>
								<th style="font-size:12px; line-height: 1.4;width: 20%">书名</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">Size</th>
								<th style="font-size:12px; line-height: 1.4;width: 20%">价钱</th>
								<th style="font-size:12px; line-height: 1.4;width: 20%">订购数量</th>
								<th style="font-size:12px; line-height: 1.4;width: 20%">备注</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');

			$result = mysql_query("
							SELECT count(a.reserve_bk3_book_id) AS abc, a.reserve_bk3_size, a.reserve_bk3_price, a.reserve_bk3_bookname, a.reserve_bk3_book_id
							FROM reserve_bk3 a 
							GROUP BY a.reserve_bk3_book_id, a.reserve_bk3_size
							ORDER BY a.reserve_bk3_book_id

							;
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_bk3_book_id"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_bk3_bookname"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_bk3_size"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["reserve_bk3_price"].'</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["abc"].'</td>';	
								echo '<td align="center" style="font-size:11px;line-height: 1.3;"></td>';
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>			




</body>
</html>