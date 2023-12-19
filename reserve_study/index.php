<?php
require('connect.php');
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
<style>
login {width: 100% ; align: center;}

</style>


</head>

<body>
	<div>			
				


	
	<div style="height: 20px"></div>	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div style="height: 10px"></div>
					<div align="center"><img src="img/fylogo1.jpg" style="width: 200px ; height: auto"></div>
					<div class="panel-heading" align="center">升学辅导处时间预约</div>
				</div>
			</div>
					<div style="height: 20px"></div>
					
			<div class="col-lg-12">
				<div class="panel panel-default">	

		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
			<div class="panel-body">
			<div class="panel-heading" align="center">作业方式</div>
			<div style="height: 10px"></div>
			<ol>
			<li>为避免群聚及逗留，升学辅导处采取预约制，请同学必须事先上网进行预约，每个时段仅限<span style="color: red">4人</span>。</li>
			<li>每一位学生（2020 高三毕业生）拥有 2 个名额，分别【文件验证预约】和【升学面谈预约】</li>
			</ol>
			</div>
			</div>
		</div>
				

				</div>
			</div>
			
			
			
			
			<div class="col-lg-12" align="center">
				<div class="panel panel-default">			
			
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-2 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						文件验证预约
					</div>
					<div class="panel-body">
					<a href="reserve_document.php" title="文件验证预约"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></a>
					</div>
				</div>
			</div>			
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-2 col-md-offset-0">
				<div class="panel panel-default">
					<div class="panel-heading">
						升学面谈预约
					</div>
					<div class="panel-body">
					<a href="reserve_interview.php" title="升学面谈预约"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg></a>
					</div>
				</div>
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
