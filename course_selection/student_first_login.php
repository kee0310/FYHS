<?php
session_start();
require('connect.php');
include("auth.php");
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
	$header = file_get_contents('header_student_first_login.php');
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
		<div style="height: 20px"></div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">首次登入</div>
					<div class="panel-body">


						<table data-toggle="table"   data-select-item-name="toolbar1"  >
						    <thead>
						    <tr>
						        
						        <th>2 位数乱码 </th>						
						        <th>密码（身份证号码）</th>

						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
							$id = $_SESSION['username'];
							$result = mysql_query("SELECT * FROM student_detail where student_number='$id'");
							while($row = mysql_fetch_array($result))
							{						
						    echo '<tr>';
						        
						        echo '<td>'.$row["student_login_number"].'</td>';															
								echo '<td>'.$row["student_password"].'</td>';							
														        							

								echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
						
						<h4>
以上是你的 <span style="color: red">2 位数乱码</span> 与及 <span style="color: red">登入密码（身份证号码）</span></br></br>
请立即登出，并使用新密码重新登入</br>
新密码：<span style="color: red">2 位数乱码 </span> + <span style="color: red">身份证号码</span> <br><br>
例：2位数乱码：<span style="color: red">01</span>  身份证号码：<span style="color: red">23456789</span><br>
新密码：0123456789</h4>
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
