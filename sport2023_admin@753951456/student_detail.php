<?php
require('connect.php');
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>2023年宽柔中学古来分校学生班级查询</title>

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

.button {
  background-color: #95B9C7;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 2px 2px;
  cursor: pointer;
  border-radius: 8px;
  width: 200px;
}

a.a1:link {
  display: inline-block;
  color: #20B2AA;
  background-color: transparent;
  text-decoration: none;
}
a.a1:visited {
  color: #20B2AA;
  display: inline-block;
  background-color: transparent;
  text-decoration: none;
}
a.a1:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a.a1:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #2e86de;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 10px 8px;
  text-decoration: none;
}

li a:hover {
  background-color: #D3D3D3;
  color: black;
}

td {
  padding: 5px;
}
</style>
</head>

<body>
			
	<div style="height: 20px"></div>	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div style="height: 10px"></div>
					<div align="center"><img src="img/fylogo1.jpg" style="width: 200px ; height: auto"></div>
					<div class="panel-heading" align="center">2023年宽柔中学古来分校学生班级查询</div>
				</div>
			</div>

			
	<div style="height: 20px"></div>
			<div class="col-lg-12">
				<div class="panel panel-default">	

			<div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

			<div class="panel panel-default">
			<div class="panel-body">
			<div class="panel-heading" align="center">班级查询</div>
			<div style="height: 10px"></div>
			<div style="height: 10px"></div>			
			
			
			
<div align="center">
<?php			


							include('connect.php');
							
							
							$id = $_SESSION['id'];
							$id2 = $_SESSION['id2'];
							$result = mysql_query("
							
							SELECT *
							FROM entrance_exam2023
							WHERE entrance_id = '$id' AND entrance_school = '$id2'
							");
							while($row = mysql_fetch_array($result))
								{	
?>

<table style="width: 100%; font-family: 楷体, KaiTi; font-size: 14pt;line-height: 1.6;color:#222222;">
<tbody>
<tr>
<td style="width: 50%;" align="right">学生编号：</td><td><?php echo $row['entrance_studentnumber']; ?></td>
</tr>
<tr>
<td style="width: 50%;" align="right">中文姓名：</td><td><?php echo $row['entrance_chname']; ?></td>
</tr>
<tr>
<td style="width: 50%" align="right">英文姓名：</td><td><?php echo $row['entrance_egname']; ?></td>
</tr>
<tr>
<td align="right">性别：</td><td><?php echo $row['entrance_gender']; ?></td>
</tr>
<tr>
<td align="right">班级：</td><td><?php echo $row['entrance_class']; ?></td>
</tr>
<?php
	if($row['student_form'] == 1){
		echo '<tr>';
		echo '<td align="right">FYK 电邮账号：</td><td>';
		echo '<a href="mailto:';
		echo $row['entrance_fykemail']; 
		echo '">';
		echo $row['entrance_fykemail']; 
		echo '</a>';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="right">网课 Google Meet <br>教室链接：</td><td>';
		echo '<a href="';
		echo $row['entrance_classlink']; 
		echo '">';
		echo $row['entrance_classlink']; 
		echo '</a>';
		echo '</td>';
		echo '</tr>';		
		echo '<tr>';
		echo '<td colspan="2" align="center">2023 初一新生：FYK 学生帐号首次登入（教学视频）</td></tr><tr><td colspan="2" align="center">';
		echo '<a href="';
		echo 'https://youtu.be/X1DaMy3r4vY'; 
		echo '">';
		echo 'https://youtu.be/X1DaMy3r4vY'; 
		echo '</a>';
		echo '</td>';
		echo '</tr>';		
		
	}
	else{
		echo '';
	}

?>



</tbody>
</table>


<div style="height: 20px"></div>





								<?php } 
								
				session_destroy();
				
			exit();								
								
								
								?>





					
</div>
			</div>
			</div>
			</div>	


			


					
				</div>
			</div>
		</div><!--/.row-->	

		
		


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
