<?php
require('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>2023年全柔独中球类赛</title>

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
  background-color: #ADD8E6;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
  border-radius: 8px;
  width: 220px;
}
</style>


</head>

<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$school = stripslashes($_REQUEST['school']);
	$school = mysqli_real_escape_string($con,$school);

	
	
    $query = "SELECT * FROM `entrance_exam2023` WHERE entrance_username='$username'";			
	
	$result = mysqli_query($con,$query) or die(mysql_error());
	$row = mysqli_fetch_assoc($result);	
	
	if($row["reserve_tf"] == 2){

	//Checking is user existing in the database or not
    	$query = "SELECT * FROM `entrance_exam2023` WHERE entrance_username='$username' and entrance_school='$school'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	

	$_SESSION['id'] = $row["entrance_id"];
	$_SESSION['id2'] = $row["entrance_school"];
	
	
	
        if($rows==1){
	     
	$_SESSION['id'] = $row["entrance_id"];	
	$_SESSION['id2'] = $row["entrance_school"];
				
					
				echo "<meta http-equiv=REFRESH CONTENT=1;url=student_detail.php";
				echo $date;
				echo ">";
				

         		}		 
		else{
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>查无学生资料</h3></div>
				</div>";
				echo "<meta http-equiv=REFRESH CONTENT=3;url=http://www1.fyk.edu.my/exam-result-2023/>";
			}
    		}
			
			
	elseif($row["reserve_tf"] == 1){
	
	//Checking is user existing in the database or not
    	$query = "SELECT * FROM `entrance_exam2023` WHERE entrance_username='$username' and entrance_school='$school'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);

	$_SESSION['id'] = $row["entrance_id"]; 


        if($rows==1){
	    	
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>查无学生资料</h3></div>
				</div>";
				echo "<meta http-equiv=REFRESH CONTENT=3;url=http://www1.fyk.edu.my/exam-result-2023/>";

         		}	

			else{
	
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>查无学生资料</h3></div>
				</div>";
				echo "<meta http-equiv=REFRESH CONTENT=3;url=http://www1.fyk.edu.my/exam-result-2023/>";
				}				

    	}			
			

	else{
	
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>查无学生资料</h3></div>
				</div>";
				echo "<meta http-equiv=REFRESH CONTENT=3;url=http://www1.fyk.edu.my/exam-result-2023/>";
    	}	
	
	}
	else{

?>

		
	<div>			
				


	
	<div style="height: 20px"></div>	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div style="height: 10px"></div>
					<div align="center"><img src="img/fylogo1.jpg" style="width: 200px ; height: auto"></div>
					<div class="panel-heading" align="center">2023年全柔独中球类赛</div>
				</div>
			</div>
					<div style="height: 20px"></div>
					
			<div class="col-lg-12">
				<div class="panel panel-default">	
				

		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
			<div class="panel-heading" align="center">2023年全柔独中球类赛</div>
			<div class="panel-body">
			<div class="form">

			<form action="" method="post" name="login">

<?php
require('connect.php');
date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('YmdHis', time());


				$start_time_view 	=20221221120000;
				$end_time_view 		=20230118235900;



			if($start_time_view > $date){

									echo '开放查询时间：21/12/2022：12.00PM';
									}
			elseif($end_time_view < $date){

									echo '开放查询时间：21/12/2022：12.00PM';
									}									
			else{	




			echo '<div class="form-group">';
			echo '<input class="form-control" type="text" name="username" placeholder="考生编号/ 学生编号，例：234000" required />';
			echo '</div>';
			echo '<div class="form-group">';
			echo '<input class="form-control" type="password" name="school" placeholder="英文姓名 / 身份证号码，例：wongxiaoming / 090111012223" required />';
			echo '</div>';
			echo '<div class="form-group">';
			echo '<label style="font-size: 12pt">**2023年初一新生以<span style="color:red">考生编号</span>进行查询，<br>密码为<span style="color:blue">英文姓名</span>【 小写字母、无需空格  】例：wongxiaoming</label><br><br>';	
			echo '<label style="font-size: 12pt">**2022年初一至高二年段以<span style="color:red">学生编号</span>进行查询，<br>密码为<span style="color:blue">身份证号码</span>【 无 "-"、无需空格  】例：090111012223</label>';			
			echo '</div>';
			echo '<div align="center"><input class="button" name="submit" type="submit" value="查询" /></div>';
			
	}

?>				
			
			
			
			</form>
			</div>
			
				</div>
			</div>
		</div>


		

					
					
					
				</div>
			</div>
		</div><!--/.row-->	
<?php } ?>
		
		
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
