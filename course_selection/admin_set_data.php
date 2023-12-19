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

	
		<div style="height: 20px"></div>			
		
		<div class="row">
			<div class="col-lg-12">
				<h2>系统设定
<?php
echo 'User IP Address : '. $_SERVER['REMOTE_ADDR'];
?>				
				
				</h2>
			</div>


			<div class="col-md-6">
				<div  class="panel panel-danger">
					<div class="panel-heading">
						学生开始选课时间
					</div>
					<div class="panel-heading">
						<a class="btn btn-primary" href="admin_edit_time_select_start.php" title="修改时间设定" >修改时间设定</a>
					</div>					
					<div class="panel-body">

<?php
include(connect.php);
			$result = mysql_query("SELECT * FROM admin_detail");
			while($row = mysql_fetch_array($result))
			{

				$time =$row['admin_time_select_start'];
			
?>
						<p>开始时间：<?php echo $time; ?></p>
						
<? } ?>
						<p>格式:yyyy-mm-dd hh:mm:ss(年月日时分秒)。</p>
					</div>
				</div>
			</div>


			<div class="col-md-6">
				<div  class="panel panel-danger">
					<div class="panel-heading">
						学生结束选课时间
					</div>
					<div class="panel-heading">
						<a class="btn btn-primary" href="admin_edit_time_select_end.php" title="修改时间设定" >修改时间设定</a>
					</div>					
					<div class="panel-body">

<?php
include(connect.php);
			$result = mysql_query("SELECT * FROM admin_detail");
			while($row = mysql_fetch_array($result))
			{

				$endtime =$row['admin_time_select_end'];
			
?>
						<p>结束时间：<?php echo $endtime; ?></p>
						
<? } ?>
						<p>格式:yyyy-mm-dd hh:mm:ss(年月日时分秒)。</p>
					</div>
				</div>
			</div>



			

			
		</div><!-- /.row -->


		
		
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
