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
					<a class="btn btn-primary" href="admin_add_course.php" title="增加课程">增加课程</a>
					<div style="height: 20px"></div>
					</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">所有课程一览</div>
					<div class="panel-body">


						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
						    <thead>
						    <tr>	
								<th>年份</th>
						        <th>课程名称</th>
						        <th>课程类型</th>
								<th>Content Code</th>
						        <th>指导老师</th>
						        <th>上半年 / 下半年</th>							
						        <th>星期一 / 星期三</th>
						        <th>人数上限</th>
						        <th>年段要求</th>
								<th>添加学生</th>
						        <th>查看</th>
								<th>修改</th>
								<th>课程状态</th>
						        <th>删除</th>
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
							$result = mysql_query("SELECT * FROM course_detail ORDER BY course_class_year DESC, course_id ASC");
							while($row = mysql_fetch_array($result))
								{						
						    echo '<tr>';
						        echo '<td>'.$row["course_class_year"].'</td>';
								echo '<td>'.$row["course_title"].'</td>';
								echo '<td>'.$row["course_type"].'</td>';
								echo '<td>'.$row["course_id"].'<br>'.$row["course_content_code"].'</td>';								
						        echo '<td>'.$row["course_teacher"].'</td>';

								if ($row["course_class_upperlower"] == 1){
				
									echo "<td>上半年</td>";
				
								}
								elseif ($row["course_class_upperlower"] == 2){
				
									echo "<td>下半年</td>";
				
								}								
								else{
				
									echo "<td>全年</td>";
				
								}								
								
								if ($row["course_class_day"] == 1){
				
									echo "<td>星期三</td>";
				
								}
								elseif ($row["course_class_day"] == 2){
				
									echo "<td>星期一</td>";
				
								}								
								else{
				
									echo "<td>全年</td>";
				
								}								
								
						        echo '<td>'.$row["course_student_limit"].'</td>'; 
						        

								if ($row["course_form"] == 2){
				
									echo "<td><span style='color:blue'>高二年段不能选修</span></td>";
				
								}
								elseif ($row["course_form"] == 3){
				
									echo "<td><span style='color:red'>高三年段不能选修</span></td>";
				
								}								
								else{
				
									echo "<td>不限年段</td>";
				
								}
								echo '<td><a class="btn btn-primary" title="添加学生" href="admin_edit_student_course.php?id='.$row['course_id'].'">添加</a></td>';	
				        		echo '<td><a class="btn btn-primary" title="查看" href="admin_view_course.php?id='.$row['course_id'].'">查看</a></td>';
								echo '<td><a class="btn btn-primary" title="修改" href="admin_edit_course.php?id='.$row['course_id'].'">修改</a></td>';
								
								if ($row["course_showhide"] == 1){
				
									echo "<td><span style='color:green'>显示</span></td>";
				
								}							
								else{
				
									echo "<td><span style='color:red'>隐藏</span></td>";
				
								}
								
								echo '<td><a class="btn btn-primary" title="删除课程" href="admin_delete_course.php?id='.$row['course_id'].'">删除课程</a></td>';
						    echo '</tr>';
								}

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
