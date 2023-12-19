<?php
require('connect.php');
include("auth_admin.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>学生课外实践活动</title>

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
					<div class="panel-heading">组员人数</div>
					<div class="panel-body">


						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
						    <thead>
						    <tr>						        
								<th>序号</th>
								<th>Group Code</th>
								<th>人数</th>
								<th>学生姓名</th>
								<th>班级</th>
								<th>申请项目名称</th>
								<th>指导老师</th>
								<th>状态（超出/不足/完成）</th>

						        
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
							$result = mysql_query("
							
							SELECT count(I.group_code) AS abc,a.apply_topic,a.apply_teacher,I.group_code,b.student_name,b.student_class,
							
								RANK () OVER ( 
								ORDER BY I.group_code
								) group_rank							
							
							FROM zstudent_group I
							
							LEFT JOIN zgroup_detail a
							ON I.group_code = a.group_code
							
							LEFT JOIN zstudent_detail b
							ON I.group_code = b.student_number
							
							GROUP BY I.group_code
							ORDER BY I.group_code ASC


							");
							while($row = mysql_fetch_array($result))
								{		

							
						    echo '<tr>';
								echo '<td>'.$row["group_rank"].'</td>';
								echo '<td>'.$row["group_code"].'</td>';								
						        echo '<td>'.$row["abc"].'</td>';
								echo '<td>'.$row["student_name"].'</td>';
								echo '<td>'.$row["student_class"].'</td>';
								echo '<td>'.$row["apply_topic"].'</td>';
								echo '<td>'.$row["apply_teacher"].'</td>';								
								if($row["abc"] >= 11){
									echo '<td><span style="color:red">超出</span></td>';
								}
								elseif($row["abc"] <= 3){
									echo '<td><span style="color:blue">不足</span></td>';
								}
								else{
									echo '<td><span style="color:green">完成</span></td>';
								}


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
