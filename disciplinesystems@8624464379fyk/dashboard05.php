<?php
require('connect.php');
include("auth_admin2.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>打印</title>

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
			
		<div style="height: 20px"></div>
		<div class="row">
			<div class="col-lg-6">
			<form action="searchexe.php" method="post" name="login">
			<div class="form-group">
			<label>学生编号</label>
			<input class="form-control" type="text" name="student_number" placeholder="学生编号" required />
			</div>
			<button type="submit" class="btn btn-primary">查询</button>
			</form>
			</div>
		</div><!--/.row-->

		<div class="row">
					<div class="col-lg-12">
					<div style="height: 20px"></div>
					</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">备案牌</div>
					<div class="panel-body">


						<table data-toggle="table">
						    <thead>
						    <tr>						        
						        <th>学号</th>
								<th>姓名</th>
						        <th>班级</th>
						        <th>座号</th>								
								<th>备案牌颜色</th>								
						        <th>备案牌号码</th>
								<th>归还 / 未归还</th>
						        <th>打印</th>

						    </tr>
							</thead>
							<tbody style="font-size:14px">
					<?php
							include('connect.php');
							
							$id=$_GET['id'];
							$result = mysql_query("

							SELECT a.dis1_id,a.dis1_student_number,a.dis1_batch_color,a.dis1_batch_number,b.student_name,b.student_class,b.student_seat,a.dis1_return_tf
							FROM ddis1 a
							JOIN disstudent b
							ON a.dis1_student_number = b.reserve_name
							WHERE a.dis1_student_number = '$id'


							");
							while($row = mysql_fetch_array($result))
								{		

							
						    echo '<tr>';
								echo '<td>'.$row["dis1_student_number"].'</td>';
						        echo '<td>'.$row["student_name"].'</td>';							
								echo '<td>'.$row["student_class"].'</td>';
						        echo '<td>'.$row["student_seat"].'</td>';
								echo '<td>'.$row["dis1_batch_color"].'</td>';
								echo '<td>'.$row["dis1_batch_number"].'</td>';

								if ($row["dis1_return_tf"] == 1){
				
									echo '<td><span style="color:DodgerBlue;">归还</span></td>';
				
								}								
								else{
				
									echo '<td><span style="color:red;">未归还</span></td>';
				
								}								
								
								echo '<td><a class="btn btn-primary" title="进行打印" href="printdash1.php?id='.$row['dis1_id'].'" target="_blank" style="font-size: 12px; padding: 2px 5px;">进行打印</a></td>';	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
					</div>
					
					<div class="panel-heading">借用物品</div>
					<div class="panel-body">


						<table data-toggle="table">
						    <thead>
						    <tr>						        
						        <th>学号</th>
								<th>姓名</th>
						        <th>班级</th>
						        <th>座号</th>
								<th>借用物品</th>
								<th>归还 / 未归还</th>
						        <th>打印</th>

						    </tr>
							</thead>
							<tbody style="font-size:14px;">
					<?php
							include('connect.php');
							
							$id=$_GET['id'];
							$result = mysql_query("

							SELECT a.dis2_id,a.dis2_student_number,b.student_name,b.student_class,b.student_seat,a.dis2_item,a.dis2_return_tf
							FROM ddis2 a
							JOIN disstudent b
							ON a.dis2_student_number = b.reserve_name
							WHERE a.dis2_student_number = '$id'


							");
							while($row = mysql_fetch_array($result))
								{		

							
						    echo '<tr>';
								echo '<td>'.$row["dis2_student_number"].'</td>';
						        echo '<td>'.$row["student_name"].'</td>';							
								echo '<td>'.$row["student_class"].'</td>';
						        echo '<td>'.$row["student_seat"].'</td>';
								echo '<td>'.$row["dis2_item"].'</td>';

								if ($row["dis2_return_tf"] == 1){
				
									echo '<td><span style="color:DodgerBlue;">归还</span></td>';
				
								}								
								else{
				
									echo '<td><span style="color:red;">未归还</span></td>';
				
								}
								
								echo '<td><a class="btn btn-primary" title="进行打印" href="printdash2.php?id='.$row['dis2_id'].'" target="_blank" style="font-size: 12px; padding: 2px 5px;">进行打印</a></td>';	
						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
					</div>				
					
					<div class="panel-heading">购买物品</div>
					<div class="panel-body">


						<table data-toggle="table">
						    <thead>
						    <tr>						        
						        <th>学号</th>
								<th>姓名</th>
						        <th>班级</th>
						        <th>座号</th>
								<th>购买物品</th>
								<th>购买数额</th>
								<th>付清 / 未缴交</th>
						        <th>打印</th>

						    </tr>
							</thead>
							<tbody style="font-size:14px">
					<?php
							include('connect.php');
							
							$id=$_GET['id'];
							$result = mysql_query("

							SELECT a.dis3_id,a.dis3_student_number,b.student_name,b.student_class,b.student_seat,a.dis3_item,a.dis3_paid_total,a.dis3_paid_tf
							FROM ddis3 a
							JOIN disstudent b
							ON a.dis3_student_number = b.reserve_name
							WHERE a.dis3_student_number = '$id'


							");
							while($row = mysql_fetch_array($result))
								{		

							
						    echo '<tr>';
								echo '<td>'.$row["dis3_student_number"].'</td>';
						        echo '<td>'.$row["student_name"].'</td>';							
								echo '<td>'.$row["student_class"].'</td>';
						        echo '<td>'.$row["student_seat"].'</td>';
								echo '<td>'.$row["dis3_item"].'</td>';
								echo '<td>'.$row["dis3_paid_total"].'</td>';
								
								if ($row["dis3_paid_tf"] == 1){
				
									echo '<td><span style="color:DodgerBlue;">付清</span></td>';
				
								}								
								else{
				
									echo '<td><span style="color:red;">未缴交</span></td>';
				
								}								
								
								echo '<td><a class="btn btn-primary" title="进行打印" href="printdash3.php?id='.$row['dis3_id'].'" target="_blank" style="font-size: 12px; padding: 2px 5px;">进行打印</a></td>';	
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
