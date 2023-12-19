<?php
require('connect.php');
include("auth.php");
include("auth_time.php");
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
	
			$result = mysql_query("SELECT admin_survey_onoff from admin_detail");
			$data=mysql_fetch_assoc($result);
			
			$surveyonoff=$data['admin_survey_onoff'];
			
			if ($surveyonoff == 1){
	
			$header_survey_on = file_get_contents('header_student_survey_on.php');
			echo $header_survey_on;
			
			}
			elseif ($surveyonoff == 0){
				
			$header = file_get_contents('header_student.php');
			echo $header;				

			}
	?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


			<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
			</div><!--/.row-->

	
					
		<div class="row">
		<div style="height: 20px"></div>
		
			<?php
				include('connect.php');
				$id=$_GET['id'];

				$result = mysql_query("SELECT * FROM course_selection where course_selection_id='$id'");
				while($row = mysql_fetch_array($result))
				{
					$title=$row['course_title'];
				
		
			?>
				
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">退选课程</div>
					<div class="panel-body">

						<form role="form" action="delete/student_cancel_confirm_exe.php" method="post">
						
							<div class="col-md-6">
								<input type="hidden" name="course_selection_id" value="<?php echo $row['course_selection_id']; ?>" readonly>
								<input type="hidden" name="hidden_id" value="<?php echo $_SESSION['username']; ?>" readonly>
								<div class="form-group">
									<label>课程名称</label>
									<input class="form-control" value="<?php echo $row['course_title'];?>" name="course_title" readonly>
								</div>
								<button type="submit" class="btn btn-primary">确定退选</button>								
							</div>
							<?php
			
								}

							?>								
			
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
