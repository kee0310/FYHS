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
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">课程选修人数</div>

					<div class="panel-body">


						<table data-toggle="table"   >
						    <thead>
						    <tr>						        
						        <th>指导老师</th>
						        <th>课程名称</th>
						        <th>人数上限</th>
						        <th>选修人数</th>							
						        
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
							
							$id=$_GET['id'];													
							$result = mysql_query("
							
							SELECT * FROM course_detail	WHERE course_id = '$id'
							");
							
							
							while($row = mysql_fetch_array($result))
								{						
						    echo '<tr>';
						        echo '<td>'.$row["course_teacher"].'</td>';							
						        echo '<td>'.$row["course_title"].'</td>';
						        echo '<td>'.$row["course_student_limit"].'</td>';
								}

						?> 
				<?php					
								
								
							$id=$_GET['id'];
							$result = mysql_query("SELECT count(*) as total from course_selection where course_id='$id'");
							$data=mysql_fetch_assoc($result);
			
							$totalstudent=$data['total'];
			
							echo '<td>'.$totalstudent.'</td>';								
											        
								
						    echo '</tr>';
								

					?> 
						    </tbody>
						</table>
					</div>
					
					<div class="panel-body">


						<table data-toggle="table" >
						    <thead>
						    <tr>						        
						        <th>序号</th>
								<th>学号</th>
						        <th>姓名</th>
						        <th>班级</th>						
						        <th>选课时间</th>
								<th>选课 IP</th>
						        <th>删除学生选课</th>						        
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
							
							$id=$_GET['id'];													
							$result = mysql_query("
							
							SELECT o.student_number,p.student_name,p.student_class,o.course_select_time,o.course_select_ip,o.course_selection_id,
							
	RANK () OVER ( 
		ORDER BY o.course_selection_id ASC
	) student_rank							
							
							FROM course_selection o
							JOIN student_detail p ON o.student_number = p.student_number
							WHERE o.course_id = '$id'
							ORDER BY o.course_selection_id ASC
													
							");
							
							
							while($row = mysql_fetch_array($result))
								{		
					
						    echo '<tr>';
						        echo '<td>'.$row["student_rank"].'</td>';	
								echo '<td>'.$row["student_number"].'</td>';	
						        echo '<td>'.$row["student_name"].'</td>';
								echo '<td>'.$row["student_class"].'</td>';	
								echo '<td>'.$row["course_select_time"].'</td>';
								echo '<td>'.$row["course_select_ip"].'</td>';	
								echo '<td><a class="btn btn-primary" title="删除学生选课" href="admin_delete_student_selection.php?id='.$row['course_selection_id'].'">删除学生选课</a></td>';												        	
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
