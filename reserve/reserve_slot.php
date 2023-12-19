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
			<div class="panel-heading" align="center">选择时段</div>
			<div class="panel-body">
			
			<div class="form">

			<form action="reserve_slot_exe.php" method="post" name="login">
			
			<input type="hidden" name="student_number" value="<?php echo $_SESSION['username']; ?>" readonly>
			
			<div class="form-group">

			<select class="form-control" name="reserve_slot">
			
		
			
			
			
			
<?php			


							include('connect.php');
							$result = mysql_query("
							
							SELECT count(b.reserve2_slot) AS abc, a.reserve4_slot_number, a.reserve4_slot_date, a.reserve4_slot_time, a.reserve4_slot_limit
							FROM reserve4_shop a 
							LEFT JOIN reserve2_shop b
							ON a.reserve4_slot_number = b.reserve2_slot
							GROUP BY a.reserve4_slot_number
							ORDER BY a.reserve4_id
							
							
							
							");
							while($row = mysql_fetch_array($result))
								{
									
									
			if($row["abc"] < $row['reserve4_slot_limit'])
			{
				echo '<option value="';
				echo $row['reserve4_slot_number'];
				echo '">';
				echo $row['reserve4_slot_date']; 
				echo '&nbsp;&nbsp;&nbsp;';
				echo $row['reserve4_slot_time'];
				echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				echo '人数：';
				echo $row['abc'];			
				echo ' / ';
				echo $row['reserve4_slot_limit'];
				echo '</option> ';

			
			}
			else{   
				
			}

}
											
?>				
				
			</select>
			</div>
			
			<div align="center"><input name="submit" type="submit" value="登记" /></div>
			</form>
			</div>
			
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
