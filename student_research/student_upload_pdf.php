<?php
session_start();
require('connect.php');
$md = $_REQUEST['id'];


include("auth.php");
include("auth_student_leader.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>综合实践活动课程</title>

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
.material-icons.print{Font-size:45px ; color:#ffffff;}

    textarea {
        resize: none;
    }
</style>
<script src="ckeditor/ckeditor.js"></script>
</head>

<body oncontextmenu="return false;">

	<?php
	
			$result = mysql_query("SELECT admin_survey_onoff from zadmin_detail");
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
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading" align="center">综合实践活动课程-上载计划书</div>

					<div class="panel-body">
					
			<?php	
			
				date_default_timezone_set("Asia/Kuala_Lumpur");
				$date = date('YmdHis', time());

				$start_time_view 	=20230301000000;
				$end_time_view 		=20230425235900;			
			
				$id = $_SESSION['username'];
				$result = mysql_query("SELECT count(*) as total,pdf_allow_edit from zgroup_pdf where group_code='$id'");
				$data=mysql_fetch_assoc($result);
			
				$totalapply=$data['total'];
				$pdf_allow_edit=$data['pdf_allow_edit'];
								
				
				if($start_time_view > $date)
				{				
				echo "还未开放上载：2023年3月1日（星期三） 至 2023年3月25日（星期六）";
				}
				elseif($end_time_view < $date)
				{
				echo "上载已经截止：2023年3月1日（星期三） 至 2023年3月25日（星期六）";
				}
				elseif($totalapply >= 1)
				{
					
						if($pdf_allow_edit == 1)
						{
							echo "已完成上载计划书。如需修改计划书，请将现有的计划书删除。";
							echo '<a href="student_upload_pdf_delete_exe.php?id='.$id.'" title="删除计划书">删除计划书</a>';
						}
						else
						{
							echo "已完成上载计划书。如需修改计划书，请将现有的计划书删除。";
							echo '<span style="color: red">无法删除计划书</span>';
						}							
					
				}
				else
				{
					
					
			?>
    <div class="container" style="margin-top:30px">
        <div class="row">
         
  
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="file" name="file" accept=".pdf"/>
					<p class="help-block">请将活动计划书保存成 PDF 档案。<span style="color:red">档案命名</span>：组长学号+proposal；例：162001proposal<br><br>
					提交日期：2023年3月1日（星期三） 至 2023年3月25日（星期六）
					</p>
					<button type="submit" name="btn-upload">upload</button>
				</div>
			</form>  

    </div>

			<?php

				}
			?>

	</div>
				

				
				</div>
			</div>
		</div>

		
		
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
