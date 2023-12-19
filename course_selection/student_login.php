<?php
require('connect.php');
session_start();
$username=$_POST['username']; 
$_SESSION['username']=$username; 
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
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
    $query = "SELECT * FROM `student_detail` WHERE student_number='$username'";			
	
	$result = mysqli_query($con,$query) or die(mysql_error());
	$row = mysqli_fetch_assoc($result);	
	
	if($row["student_tf"] == 1){

	//Checking is user existing in the database or not
    	$query = "SELECT * FROM `student_detail` WHERE student_number='$username' and student_password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	

	$_SESSION['username'] = $username;

        if($rows==1){
	     
	$_SESSION['username'] = $username;	
	$query = "UPDATE student_detail SET student_tf='2' WHERE student_number='$username'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);			
				
					
				echo "<meta http-equiv=REFRESH CONTENT=1;url=student_first_login.php>";
				exit();

         		}		 
		else{
				echo "<div class='form'>
				<h3>Username/password is incorrect.</h3>
				<br/>Click here to <a href='student_login.php'>Login</a></div>";
			}
    		}


	elseif($row["student_tf"] == 2){
	
	//Checking is user existing in the database or not
    	$query = "SELECT * FROM `student_detail` WHERE student_number='$username' and student_password_new='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);

	$_SESSION['username'] = $username; 


        if($rows==1){
	    	
				$_SESSION['username'] = $username;
				echo "<meta http-equiv=REFRESH CONTENT=1;url=student_subject_all_list.php>";

				exit();

         		}		 
		 else{
				echo "<div class='form'>
				<h3>Username/password is incorrect.</h3>
				<br/>Click here to <a href='student_login.php'>Login</a></div>";
			}
    	}
	else{
	
				echo "<div class='form'>
				<h3>Username/password is incorrect.</h3>
				<br/>Click here to <a href='student_login.php'>Login</a></div>";
    	}	
	
	}
	else{

?>
	<?php
	$header = file_get_contents('header.php');
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
				<div class="panel panel-default">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;"> 学生登入</div>
					<!--<div class="panel-heading" style="font-family: 楷体, KaiTi; height: auto"><span style="color: red">
通知：</span></div>-->
				</div>
			</div>
					<div style="height: 20px"></div>
					
			<div class="col-lg-12">
				<div class="panel panel-default">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
			<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;" align="center">登入</div>
			<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 11pt;">
			
			<div class="form">

			<form action="" method="post" name="login">


<?php
require('connect.php');
date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('YmdHis', time());




			$result = mysql_query("SELECT * FROM admin_detail");
			while($row = mysql_fetch_array($result))
			{

				$start_time_view =$row['admin_time_view_start'];
				$end_time_view =$row['admin_time_view_end'];
			}



			if($start_time_view > $date){

									echo '查询课程日期 <br>2/11/2023(四) 至 3/11/2023(五)';
									echo '<br>';
									echo '<br>';
									echo '开放选课日期<br>4/11/2023(六)11:00am 至 5/11/2023(日)11:59pm';									
									}
			elseif($end_time_view < $date){

									echo '查询课程日期 <br>2/11/2023(四) 至 3/11/2023(五)';
									echo '<br>';
									echo '<br>';
									echo '开放选课日期<br>4/11/2023(六)11:00am 至 5/11/2023(日)11:59pm';											
									}									
			else{

									echo '<div class="form-group">';
									echo '<input class="form-control" type="text" name="username" placeholder="学号" required />';
									echo '</div>';
									echo '<div class="form-group">';
									echo '<input class="form-control" type="password" name="password" placeholder="密码" required />';
									echo '</div>';
									echo '<input name="submit" type="submit" value="Login" />';
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
