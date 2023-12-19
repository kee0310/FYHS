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


<title>选修课名单</title>
</head>
<body onload="window.print()">
<p>选修课名单</p>

					<?php
					
						include('connect.php');

						$id=$_GET['id'];
						$result = mysql_query("
			
									SELECT *
									FROM course_detail
									WHERE course_id='$id'

									;

									");
			while($row = mysql_fetch_array($result))
			{
					
						echo '<table style="width: 100%; border-collapse: collapse;" border="0" >';
							echo '<tbody>';
						    echo '<tr>';
						        echo '<td align="center" style="width: 15%"><p>课程名称：</p></td>';						
						        echo '<td align="center" style="width: 20%"><p>'.$row["course_title"].'</p></td>';
								echo '<td align="center" style="width: 15%"><p>授课老师：</p></td>';	
								echo '<td align="center" style="width: 10%"><p>'.$row["course_teacher"].'</p></td>';
								echo '<td align="center" style="width: 25%"></td>';
								if ($row["course_class_upperlower"] == 1){
				
									echo '<td>上半年</td>';
				
								}
								elseif ($row["course_class_upperlower"] == 2){
				
									echo '<td>下半年</td>';
				
								}								
								else{
				
									echo '<td>全年</td>';
				
								}
								
								if ($row["course_class_day"] == 1){
				
									echo '<td>星期三</td>';
				
								}
								elseif ($row["course_class_day"] == 2){
				
									echo '<td>星期五</td>';
				
								}								
								else{
				
									echo '<td>全年</td>';
				
								}
	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
	

<table style="width: 100%">
<tbody>
<tr>
<td style="width: 50%">



						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>		
								<th style="font-size:12px; line-height: 1.4;width: 7%">序</th>
						        <th style="font-size:12px; line-height: 1.4;width: 23%">姓名</th>
						        
								<th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$result = mysql_query("
			
SELECT student_detail.student_name,student_detail.student_number,student_detail.student_class,

	RANK () OVER ( 
		ORDER BY student_detail.student_id ASC
	) student_rank

FROM course_selection

JOIN student_detail
ON course_selection.student_number = student_detail.student_number


WHERE course_selection.course_id='$id'


ORDER BY student_detail.student_id ASC

;
			
			
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_rank"].'</td>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_name"].'</td>';
								
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_class"].'</td>';	

	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>

</td>
<td style="width: 50%">

						<table style="width: 100%; border-collapse: collapse;" border="1" >
						    <thead>
						    <tr>						        
								<th style="font-size:12px; line-height: 1.4;width: 7%">序</th>
						        <th style="font-size:12px; line-height: 1.4;width: 23%">姓名</th>
						        
								<th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
						    </tr>
							</thead>
							<tbody>
					<?php
					
	include('connect.php');
	
	
			$id=$_GET['id'];
			$result = mysql_query("
			
SELECT student_detail.student_name,student_detail.student_number,student_detail.student_class,

	RANK () OVER ( 
		ORDER BY student_detail.student_id ASC
	) student_rank

FROM course_selection

JOIN student_detail
ON course_selection.student_number = student_detail.student_number


WHERE course_selection.course_id='$id'


ORDER BY student_detail.student_id ASC

;
			
			
			");
			while($row = mysql_fetch_array($result))
			{
					
	
					
						    echo '<tr>';
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_rank"].'</td>';						
						        echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_name"].'</td>';
								
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">'.$row["student_class"].'</td>';	

	
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