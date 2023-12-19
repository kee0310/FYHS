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
					<div class="panel-heading" style="width: 100%">时段  <span style="float: right"><a class="btn btn-primary" title="Add Slot 增加时段" href="reserve_study_admin_add_slot.php">Add Slot 增加时段</a></span></div>
					<div class="panel-body">

						
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" >
						    <thead>
						    <tr>						        
						        <th style="width: 10%">时段编号</th>
						        <th style="width: 15%">日期</th>
						        <th style="width: 15%">时间</th>
								<th style="width: 10%">人数限制</th>
								<th style="width: 10%">已选人数</th>
								<th style="width: 15%">类别</th>
								<th style="width: 10%">状态</th>
								<th style="width: 10%">名单</th>
						        <th style="width: 10%">编辑</th>
								<th style="width: 10%">删除时段</th>
						        
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
							$result = mysql_query("
							

							
							SELECT count(b.reserve6_slot) AS abc, a.reserve7_slot_number, a.reserve7_slot_date, a.reserve7_slot_time, 
							a.reserve7_slot_limit, a.reserve7_id, a.reserve7_slot_di
							FROM reserve7_shop a 
							LEFT JOIN reserve6_shop b
							ON a.reserve7_slot_number = b.reserve6_slot
							GROUP BY a.reserve7_slot_number
							ORDER BY a.reserve7_id						
							
							

							");
							while($row = mysql_fetch_array($result))
								{		

							
						    echo '<tr>';
						        echo '<td>'.$row["reserve7_slot_number"].'</td>';							
						        echo '<td>'.$row["reserve7_slot_date"].'</td>';
								echo '<td>'.$row["reserve7_slot_time"].'</td>';
								echo '<td>'.$row["reserve7_slot_limit"].'</td>';
								
								echo '<td>'.$row["abc"].'</td>';

								if($row["reserve7_slot_di"] == 1){
									
									echo'<td><span style="color: blue">验证</span></td>';
									
								}elseif($row["reserve7_slot_di"] == 2){
									
									echo'<td><span style="color: red">面谈</span></td>';
									
								}else{
									
									echo'<td><span style="color: green">讲座</span></td>';	
									
								}
								
								if($row["abc"] >= $row["reserve7_slot_limit"]){
									
									echo'<td><span style="color: red">预约已满</span></td>';
									
								}else{
									
									echo'<td><span style="color: green">尚有空位</span></td>';	
									
								}
								
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="reserve_study_admin_view_slot_name_list.php?id='.$row['reserve7_id'].'">View</a></td>';								
						        echo '<td><a class="btn btn-primary" title="Edit" href="reserve_study_admin_view_slot_edit.php?id='.$row['reserve7_id'].'">Edit</a></td>';
								echo '<td><a class="btn btn-primary" title="Delete" href="reserve_study_admin_view_slot_cancel.php?id='.$row['reserve7_id'].'">Delete</a><span style="color:red; margin-left: 10px;">This action cant be undone</span></td>';
								
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
