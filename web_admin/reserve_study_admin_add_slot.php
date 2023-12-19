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
					<div class="panel-heading">增加预约时段</div>
					<div class="panel-body">

						<form role="form" action="reserve_study_admin_add_slot_exe.php" method="post">
								
							<div class="col-md-6">										
								<div class="form-group">
									<label>时段编号【编号不能重复，不能一样】</label>
									<input class="form-control" placeholder="时段编号" name="reserve7_slot_number">
								</div>
								<div class="form-group">
									<label>日期</label>
									<input class="form-control" placeholder="日期" name="reserve7_slot_date">
								</div>

								<div class="form-group">
									<label>时段</label>
									<div class="radio">
										<label>
											<input type="radio" name="reserve7_slot_time" id="optionsRadios3" value="时段1（0800-0900）">时段1（0800-0900）
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="reserve7_slot_time" id="optionsRadios3" value="时段2（1000-1100）">时段2（1000-1100）
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="reserve7_slot_time" id="optionsRadios3" value="时段3（1200-1300）">时段3（1200-1300）
										</label>
									</div>
								</div>									
								<div class="form-group">
									<label>类别</label>
									<div class="radio">
										<label>
											<input type="radio" name="reserve7_slot_di" id="optionsRadios3" value="1">文件验证 Document
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="reserve7_slot_di" id="optionsRadios3" value="2">升学面谈 Interview
										</label>
									</div>
								</div>	
								<div class="form-group">
									<input type="hidden" name="reserve7_slot_limit" value="1" readonly>
								</div>								
							</div>
								
							<button type="submit" title="增加时段" class="btn btn-primary">增加时段</button>
							
							
							
							
							
							
						</form>
							
					
					
					
					
					
					
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
