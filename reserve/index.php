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
	$reserve_slot = stripslashes($_REQUEST['reserve_slot']);
	$reserve_slot = mysqli_real_escape_string($con,$reserve_slot);
	
	
    $query = "SELECT * FROM `reserve_shop` WHERE reserve_name='$username'";			
	
	$result = mysqli_query($con,$query) or die(mysql_error());
	$row = mysqli_fetch_assoc($result);	
	
	if($row["reserve_tf"] == 2){

	//Checking is user existing in the database or not
    	$query = "SELECT * FROM `reserve_shop` WHERE reserve_name='$username' and student_password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	

	$_SESSION['username'] = $username;

        if($rows==1){
	     
	$_SESSION['username'] = $username;	
		
				
					
				echo "<meta http-equiv=REFRESH CONTENT=1;url=reserve_slot.php>";
				exit();

         		}		 
		else{
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>学号 / 身份证号码 错误</h3></div>
				</div>";
				echo "<meta http-equiv=REFRESH CONTENT=3;url=http://www.fyk.edu.my>";
			}
    		}
			
			
	elseif($row["reserve_tf"] == 1){
	
	//Checking is user existing in the database or not
    	$query = "SELECT * FROM `reserve_shop` WHERE reserve_name='$username' and student_password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);

	$_SESSION['username'] = $username; 


        if($rows==1){
	    	
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>此学号已被登记过</h3></div>
				</div>";
				echo "<meta http-equiv=REFRESH CONTENT=3;url=http://www.fyk.edu.my>";

         		}	

			else{
	
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>学号 / 身份证号码 错误</h3></div>
				</div>";
				echo "<meta http-equiv=REFRESH CONTENT=3;url=http://www.fyk.edu.my>";
				}				

    	}			
			

	else{
	
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>此学号不存在</h3></div>
				</div>";
				echo "<meta http-equiv=REFRESH CONTENT=3;url=http://www.fyk.edu.my>";
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
					<div class="panel-heading" align="center">贩卖部时间预约</div>
				</div>
			</div>
					<div style="height: 20px"></div>
					
			<div class="col-lg-12">
				<div class="panel panel-default">	

		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
			<div class="panel-body">
			<div class="panel-heading" align="center">营业方式</div>
			<div style="height: 10px"></div>
			<ol>
			<li>为避免群聚及逗留，贩卖部采取预约制，请同学必须事先上网进行预约。</li>
			<li>请事先确定学生证的储值是足够的。</li>
			<li>贩卖部会发通传给预约者。（没有收到通传的学生不能到贩卖部购买物品）</li>
			</ol>
			</div>
			</div>
		</div>
				

		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
			<div class="panel-heading" align="center">登记</div>
			<div class="panel-body">
			
			<div class="form">

			<form action="" method="post" name="login">
			<div class="form-group">
			<input class="form-control" type="text" name="username" placeholder="学号" required />
			</div>
			<div class="form-group">
			<input class="form-control" type="password" name="password" placeholder="身份证号码【 e.g: 911122012233 】" required />
			</div>
			
			<div class="form-group">
			<label>**预订后将不能修改</label>
			</div>

			<div align="center"><input name="submit" type="submit" value="下一步" /></div>
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
