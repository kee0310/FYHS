<?php
require('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>没带校服记录</title>

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

	<?php
	$header = file_get_contents('header.php');
	echo $header;
	?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
				
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">没带校服记录</h1>
			</div>
		</div><!--/.row-->		

		<div class="row">
					
			<div class="col-lg-12">
				<div class="panel panel-default">					

			<div class="login-panel panel panel-default">
			<div class="panel-heading">填写以下个人资料</div>
			<div class="panel-body">
			
			<div class="form">

			<form action="adddash4.php" method="post" name="login">
			<div class="form-group">
			<label>学生学号</label>
			<input class="form-control" type="text" name="student_number" placeholder="学生学号" minlength="4" required />
			</div>
			<div class="form-group">
			<label>姓名</label>
			<input class="form-control" type="text" name="student_name" placeholder="姓名" required />
			</div>
			<div class="form-group">
			<label>班级</label>
			<input class="form-control" type="text" name="student_class" placeholder="班级" required />
			</div>			
			<div class="form-group">
			<label>座号</label>
			<input class="form-control" type="text" name="student_seat" placeholder="座号" required />
			</div>
	
			<div class="form-group">
				<label>第一处理日期</label>
			<input class="form-control" type="date" name="date" required />
			</div>			
			
			<div class="form-group">
				<label>原因</label>
					<textarea class="form-control" rows="3" name="reason"></textarea>
			</div>			
			
			<input class="form-control" type="hidden" name="remark" value="0" />			
			
			<button type="submit" class="btn btn-primary">提交</button>
			</form>
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
