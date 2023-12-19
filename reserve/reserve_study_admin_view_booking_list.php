<?php
require('connect.php');
include("auth_admin2.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>预订系统</title>

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
	$header = file_get_contents('header_admin_2.php');
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
					<div class="panel-heading">学生名单</div>
					<div class="panel-body">


						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" >
						    <thead>
						    <tr>						        
						        <th style="width: 10%">时段</th>
								<th style="width: 10%">日期</th>
								<th style="width: 10%">时间</th>
								<th style="width: 10%">类别</th>
						        <th style="width: 20%">学号</th>
						        <th style="width: 20%">班级</th>
								<th style="width: 20%">姓名</th>
								<th style="width: 20%">问题 / 状态</th>
						        <th style="width: 20%">取消预订</th>
						        
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
							$result = mysql_query("
							
							SELECT *
							FROM reserve6_shop
							JOIN reserve5_shop
							ON reserve6_shop.reserve6_student_number = reserve5_shop.reserve5_name
							JOIN reserve7_shop
							ON reserve6_shop.reserve6_slot = reserve7_shop.reserve7_slot_number							
							ORDER BY reserve6_shop.reserve6_slot ASC;

							");
							while($row = mysql_fetch_array($result))
								{		

							
						    echo '<tr>';
						        echo '<td>'.$row["reserve6_slot"].'</td>';	
								echo '<td>'.$row["reserve7_slot_date"].'</td>';	
								echo '<td>'.$row["reserve7_slot_time"].'</td>';	
								
								if($row["reserve7_slot_di"] == 1){
									
									echo'<td><span style="color: blue">验证</span></td>';
									
								}
								elseif($row["reserve7_slot_di"] == 2){
									
									echo'<td><span style="color: green">面谈</span></td>';
									
								}								
								else{
									
									echo'<td><span style="color: red">讲座</span></td>';	
									
								}
																
						        echo '<td>'.$row["reserve6_student_number"].'</td>';
								echo '<td>'.$row["student_class"].'</td>';
						        echo '<td>'.$row["student_name"].'</td>';	
								echo '<td>'.$row["reserve6_status"].'</td>';
						        echo '<td><a class="btn btn-primary" title="取消" href="reserve_study_admin_view_booking_cancel.php?id='.$row['reserve6_id'].'">取消</a><span style="color:red; margin-left: 10px;">This action cant be undone</span></td>';					        
								
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
