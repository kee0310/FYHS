﻿<?php
require('connect.php');
include("auth_admin2.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>训导处 - 购买物品</title>

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
					<div class="panel-heading">训导处 - 购买物品</div>
					<div class="panel-body">


						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" >
						    <thead>
						    <tr>						        
						        <th>学号</th>
								<th>姓名</th>
						        <th>班级</th>
						        <th>座号</th>								
								<th>物件</th>	
								<th>数量</th>
						        <th>是否付款</th>
						        <th>付款总额</th>
						        <th>购买日期</th>
								<th>付款日期</th>
								<th>删除</th>
						    </tr>
							</thead>
							<tbody style="font-size:14px">
					<?php
							include('connect.php');
							$result = mysql_query("

							SELECT a.dis3_id,a.dis3_student_number,b.student_name,b.student_class,b.student_seat,
							a.dis3_item,a.dis3_item_detail,a.dis3_paid_tf,a.dis3_paid_total,a.dis3_date_paid,a.dis3_date_buy
							FROM ddis3 a
							JOIN disstudent b
							ON a.dis3_student_number = b.reserve_name
							ORDER BY a.dis3_id DESC

							");
							while($row = mysql_fetch_array($result))
								{		

							
						    echo '<tr>';
								echo '<td>'.$row["dis3_student_number"].'</td>';
						        echo '<td>'.$row["student_name"].'</td>';							
								echo '<td>'.$row["student_class"].'</td>';
						        echo '<td>'.$row["student_seat"].'</td>';
								echo '<td>'.$row["dis3_item"].'</td>';
								echo '<td>'.$row["dis3_item_detail"].'</td>';

								if ($row["dis3_paid_tf"] == 1){
				
									echo '<td><a href="changetounreturn03.php?id='.$row["dis3_id"].'">付清</a></td>';
				
								}								
								else{
				
									echo '<td><span style="color:red;">未缴交</span></td>';
				
								}
								
								echo '<td>'.$row["dis3_paid_total"].'</td>';
								echo '<td>'.$row["dis3_date_buy"].'</td>';								
								echo '<td>'.$row["dis3_date_paid"].'</td>';
								echo '<td><a href="deletedashboard03.php?id='.$row["dis3_id"].'">删除</a></td>';

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
