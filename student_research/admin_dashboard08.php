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
<!--/.mark-->
			<div class="col-lg-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						学生名单分数
					</div>
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
						分数1：20%：计划书<br>
						分数2：30%：实践报告（答辩前）<br>
						分数3：30%：答辩表现<br>
						分数4：10%：实践报告（答辩后）<br>
						分数5：10%：指导老师评分<br>
						总分：100%
					</div>
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
						<table  data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
						    <thead>
						    <tr>
								<th>年份</th>
								<th>Group Code</th>
								<th>Role</th>
								<th>学号</th>
								<th>班级</th>
								<th>姓名</th>
								<th>项目</th>
								<th>指导老师</th>
								<th>分数1</th>
								<th>分数2</th>
								<th>分数3</th>
								<th>分数4</th>
								<th>分数5</th>
								<th>总分</th>
								<th>等级</th>
								<th>check</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
	include('connect.php');


			$result = mysql_query("

			SELECT *
			FROM zstudent_mark a

			ORDER BY a.group_code ASC, a.mark_membernumber ASC
			
			");
			while($row = mysql_fetch_array($result))
			{


				
?>


						    <tr>
							<td><?php echo $row['year']; ?></td>
							<td>
							<?php echo $row['group_code']; ?><br>
							<a href="resource/<?php echo $row['year']; ?>/proposal/<?php echo $row['group_code']; ?>p.pdf" target="_blank">Proposal</a><br>
							<a href="resource/<?php echo $row['year']; ?>/report/<?php echo $row['group_code']; ?>r.pdf" target="_blank">Report</a><br>
							<a href="resource/<?php echo $row['year']; ?>/finalreport/<?php echo $row['group_code']; ?>f.pdf" target="_blank">FinalReport</a>
							
							
							</td>
							<td><?php echo $row['mark_role']; ?></td>
							<td><?php echo $row['student_number']; ?></td>
							<td><?php echo $row['student_class']; ?></td>
							<td><?php echo $row['student_name']; ?></td>
							<td><?php echo $row['mark_topic']; ?><br><?php echo $row['mark_topiceg']; ?></td>
							<td><?php echo $row['mark_teacher']; ?></td>
							
							<?php $mark01 = $row['mark_pdf01'] + $row['mark_pdf02'] + $row['mark_pdf03']
							?>
							
							<td><?php echo $mark01; ?></td>
							
							<?php $mark02 = ($row['mark_report01'] + $row['mark_report02'] + $row['mark_report03'])/3
							?>							
							
							<td><?php echo round($mark02,1); ?></td>
							
							
							<?php $mark03 = ($row['mark_present01'] + $row['mark_present02'] + $row['mark_present03'])/3
							?>							
							
							<td><?php echo round($mark03,1); ?></td>
							
							<td><?php echo $row['mark_finalreport']; ?></td>
							<td><?php echo $row['mark_individual']; ?></td>
							<td>
							<?php 
							
							$totalmark = $mark01 + $mark02 + $mark03 + $row['mark_finalreport'] + $row['mark_individual'];
							
							echo round($totalmark,1); 
							
							?>
							</td>
							<td><?php 
							
							if($totalmark>='80'){ echo"A";}
							elseif($totalmark>='70' && $totalmark<='79.9'){ echo"B";}
							elseif($totalmark>='60' && $totalmark<='69.9'){ echo"C";}
							elseif($totalmark>='40' && $totalmark<='59.9'){ echo"D";}
							else{echo "E";}
							
							?></td>
							<td><?php echo $row['mark_grade']; ?></td>
							
						    </tr>
					
				<?php 

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
