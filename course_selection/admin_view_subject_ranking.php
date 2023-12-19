<?php
require('connect.php');
include("auth_admin.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>选修课系统</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
</script>
<style type="text/css">
.material-icons.print{Font-size:45px ; color:#ffffff;}</style>

</head>

<body>
	<?php
	$header = file_get_contents('header_admin.php');
	echo $header;
	?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


			<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
			</div><!--/.row-->


		<div class="row">
					<div class="col-lg-12">
					<div style="height: 20px"></div>
					</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">课程排行（以已选人数作为标准）上半年 - 星期一</div>
					<div class="panel-body">

						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" >
						    <thead>
						    <tr>	
								<th>已选人数</th>
								<th>人数上限</th>						        
						        <th>年份</th>
								<th>课程名称</th>
						        <th>指导老师</th>
								<th>全年 / 半年</th>							
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
																				
							$result = mysql_query("
							
							SELECT count(b.course_id) AS abc, a.course_title, a.course_teacher, a.course_half_one, a.course_class_upperlower, a.course_class_day, a.course_id, a.course_form, a.course_student_limit, a.course_type, a.course_id, a.course_class_year							
							FROM course_detail a 
							LEFT JOIN course_selection b
							ON a.course_id = b.course_id
							WHERE a.course_class_day = 2 AND a.course_class_upperlower = 1 AND a.course_class_year = 2024
							GROUP BY a.course_id
							ORDER BY abc DESC				
													
							");
													

							while($row = mysql_fetch_array($result))
								{		
					
						    echo '<tr>';
								echo '<td>'.$row["abc"].'</td>';
								echo '<td>'.$row["course_student_limit"].'</td>';	
								echo '<td>'.$row["course_class_year"].'</td>';
						        echo '<td>'.$row["course_title"].'</td>';							
						        echo '<td>'.$row["course_teacher"].'</td>';

								if ($row["course_half_one"] == 1){
				
									echo '<td><span style="color:green">半年</span></td>';
				
								}								
								else{
				
									echo '<td><span style="color:blue">全年</span></td>';
				
								}								
															


							
								}								
											        
								
						    echo '</tr>';


					?> 
						    </tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">课程排行（以已选人数作为标准）上半年 - 星期三</div>
					<div class="panel-body">

						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" >
						    <thead>
						    <tr>	
								<th>已选人数</th>
								<th>人数上限</th>						        
						        <th>年份</th>
								<th>课程名称</th>
						        <th>指导老师</th>
								<th>全年 / 半年</th>							
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
																				
							$result = mysql_query("
							
							SELECT count(b.course_id) AS abc, a.course_title, a.course_teacher, a.course_half_one, a.course_class_upperlower, a.course_class_day, a.course_id, a.course_form, a.course_student_limit, a.course_type, a.course_id, a.course_class_year							
							FROM course_detail a 
							LEFT JOIN course_selection b
							ON a.course_id = b.course_id
							WHERE a.course_class_day = 1 AND a.course_class_upperlower = 1 AND a.course_class_year = 2024
							GROUP BY a.course_id
							ORDER BY abc DESC				
													
							");
													

							while($row = mysql_fetch_array($result))
								{		
					
						    echo '<tr>';
								echo '<td>'.$row["abc"].'</td>';
								echo '<td>'.$row["course_student_limit"].'</td>';	
								echo '<td>'.$row["course_class_year"].'</td>';
						        echo '<td>'.$row["course_title"].'</td>';							
						        echo '<td>'.$row["course_teacher"].'</td>';

								if ($row["course_half_one"] == 1){
				
									echo '<td><span style="color:green">半年</span></td>';
				
								}								
								else{
				
									echo '<td><span style="color:blue">全年</span></td>';
				
								}								
															


							
								}								
											        
								
						    echo '</tr>';


					?> 
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->



		<div class="row">
					<div class="col-lg-12">
					<div style="height: 20px"></div>
					</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">课程排行（以已选人数作为标准）下半年 - 星期一</div>
					<div class="panel-body">

						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" >
						    <thead>
						    <tr>	
								<th>已选人数</th>
								<th>人数上限</th>						        
						        <th>年份</th>
								<th>课程名称</th>
						        <th>指导老师</th>
								<th>全年 / 半年</th>							
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
																				
							$result = mysql_query("
							
							SELECT count(b.course_id) AS abc, a.course_title, a.course_teacher, a.course_half_one, a.course_class_upperlower, a.course_class_day, a.course_id, a.course_form, a.course_student_limit, a.course_type, a.course_id, a.course_class_year							
							FROM course_detail a 
							LEFT JOIN course_selection b
							ON a.course_id = b.course_id
							WHERE a.course_class_day = 2 AND a.course_class_upperlower = 2 AND a.course_class_year = 2024
							GROUP BY a.course_id
							ORDER BY abc DESC				
													
							");
													

							while($row = mysql_fetch_array($result))
								{		
					
						    echo '<tr>';
								echo '<td>'.$row["abc"].'</td>';
								echo '<td>'.$row["course_student_limit"].'</td>';	
								echo '<td>'.$row["course_class_year"].'</td>';
						        echo '<td>'.$row["course_title"].'</td>';							
						        echo '<td>'.$row["course_teacher"].'</td>';

								if ($row["course_half_one"] == 1){
				
									echo '<td><span style="color:green">半年</span></td>';
				
								}								
								else{
				
									echo '<td><span style="color:blue">全年</span></td>';
				
								}								
															


							
								}								
											        
								
						    echo '</tr>';


					?> 
						    </tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">课程排行（以已选人数作为标准）下半年 - 星期三</div>
					<div class="panel-body">

						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" >
						    <thead>
						    <tr>	
								<th>已选人数</th>
								<th>人数上限</th>						        
						        <th>年份</th>
								<th>课程名称</th>
						        <th>指导老师</th>
								<th>全年 / 半年</th>							
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
																				
							$result = mysql_query("
							
							SELECT count(b.course_id) AS abc, a.course_title, a.course_teacher, a.course_half_one, a.course_class_upperlower, a.course_class_day, a.course_id, a.course_form, a.course_student_limit, a.course_type, a.course_id, a.course_class_year							
							FROM course_detail a 
							LEFT JOIN course_selection b
							ON a.course_id = b.course_id
							WHERE a.course_class_day = 1 AND a.course_class_upperlower = 2 AND a.course_class_year = 2024
							GROUP BY a.course_id
							ORDER BY abc DESC				
													
							");
													

							while($row = mysql_fetch_array($result))
								{		
					
						    echo '<tr>';
								echo '<td>'.$row["abc"].'</td>';
								echo '<td>'.$row["course_student_limit"].'</td>';	
								echo '<td>'.$row["course_class_year"].'</td>';
						        echo '<td>'.$row["course_title"].'</td>';							
						        echo '<td>'.$row["course_teacher"].'</td>';

								if ($row["course_half_one"] == 1){
				
									echo '<td><span style="color:green">半年</span></td>';
				
								}								
								else{
				
									echo '<td><span style="color:blue">全年</span></td>';
				
								}								
															


							
								}								
											        
								
						    echo '</tr>';


					?> 
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->



		
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
