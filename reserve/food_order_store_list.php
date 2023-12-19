<?php
require('connect.php');
include("auth_admin.php");
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
	$header = file_get_contents('header_admin_1.php');
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
					<div class="panel-heading">给档口（2，6，7，8，11）</div>
					<div class="panel-body">


						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" >
						    <thead>
						    <tr>						        
						        <th>序号</th>
								<th>档口</th>
						        <th>-</th>
						        <th>17-May</th>
						        <th>18-May</th>
						        <th>19-May</th>
						        <th>20-May</th>
								<th>21-May</th>
								<th>1-Jun</th>	

						        
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
							
							
							$date1 = "-";
							$date2 = "17-May";
							$date3 = "18-May";
							$date4 = "19-May";
							$date5 = "20-May";
							$date6 = "21-May";
							$date7 = "1-Jun";
							
							$result = mysql_query("
							
							SELECT *
							FROM reserve_fd4
							WHERE reserve_fd4_type = 's'

							");
							while($row = mysql_fetch_array($result))
								{		

							
						    echo '<tr>';
						        echo '<td>'.$row["reserve_fd4_id"].'</td>';							
						        echo '<td>'.$row["reserve_fd4_class"].'</td>';
						        echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print.php?id='.$row['reserve_fd4_class'].'&&date='.$date1.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print.php?id='.$row['reserve_fd4_class'].'&&date='.$date2.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print.php?id='.$row['reserve_fd4_class'].'&&date='.$date3.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print.php?id='.$row['reserve_fd4_class'].'&&date='.$date4.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print.php?id='.$row['reserve_fd4_class'].'&&date='.$date5.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print.php?id='.$row['reserve_fd4_class'].'&&date='.$date6.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print.php?id='.$row['reserve_fd4_class'].'&&date='.$date7.'">View</a></td>';

						    echo '</tr>';
								}

					?> 
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
					<div class="col-lg-12">
					<div style="height: 20px"></div>
					</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">给档口（1，3）</div>
					<div class="panel-body">


						<table data-toggle="table">
						    <thead>
						    <tr>						        
						        <th>序号</th>
								<th>档口</th>
						        <th>-</th>
						        <th>17-May</th>
						        <th>18-May</th>
						        <th>19-May</th>
						        <th>20-May</th>
								<th>21-May</th>
								<th>1-Jun</th>

						        
						    </tr>
							</thead>
							<tbody>
					<?php
							include('connect.php');
							
							
							$date1 = "-";
							$date2 = "17-May";
							$date3 = "18-May";
							$date4 = "19-May";
							$date5 = "20-May";
							$date6 = "21-May";
							$date7 = "1-Jun";
							
							$result = mysql_query("
							
							SELECT *
							FROM reserve_fd4
							WHERE reserve_fd4_type = 's1'

							");
							while($row = mysql_fetch_array($result))
								{		

							
						    echo '<tr>';
						        echo '<td>'.$row["reserve_fd4_id"].'</td>';							
						        echo '<td>'.$row["reserve_fd4_class"].'</td>';
						        echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_2.php?id='.$row['reserve_fd4_class'].'&&date='.$date1.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_2.php?id='.$row['reserve_fd4_class'].'&&date='.$date2.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_2.php?id='.$row['reserve_fd4_class'].'&&date='.$date3.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_2.php?id='.$row['reserve_fd4_class'].'&&date='.$date4.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_2.php?id='.$row['reserve_fd4_class'].'&&date='.$date5.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_2.php?id='.$row['reserve_fd4_class'].'&&date='.$date6.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_2.php?id='.$row['reserve_fd4_class'].'&&date='.$date7.'">View</a></td>';

						    echo '</tr>';
								}

					?> 
					<?php
							include('connect.php');
							
							
							$date1 = "-";
							$date2 = "17-May";
							$date3 = "18-May";
							$date4 = "19-May";
							$date5 = "20-May";
							$date6 = "21-May";
							$date7 = "1-Jun";
							
							$result = mysql_query("
							
							SELECT *
							FROM reserve_fd4
							WHERE reserve_fd4_type = 's3'

							");
							while($row = mysql_fetch_array($result))
								{		

							
						    echo '<tr>';
						        echo '<td>'.$row["reserve_fd4_id"].'</td>';							
						        echo '<td>'.$row["reserve_fd4_class"].'</td>';
						        echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_3.php?id='.$row['reserve_fd4_class'].'&&date='.$date1.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_3.php?id='.$row['reserve_fd4_class'].'&&date='.$date2.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_3.php?id='.$row['reserve_fd4_class'].'&&date='.$date3.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_3.php?id='.$row['reserve_fd4_class'].'&&date='.$date4.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_3.php?id='.$row['reserve_fd4_class'].'&&date='.$date5.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_3.php?id='.$row['reserve_fd4_class'].'&&date='.$date6.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_3.php?id='.$row['reserve_fd4_class'].'&&date='.$date7.'">View</a></td>';

						    echo '</tr>';
								}

					?> 
					<?php
							include('connect.php');
							
							
							$date1 = "-";
							$date2 = "17-May";
							$date3 = "18-May";
							$date4 = "19-May";
							$date5 = "20-May";
							$date6 = "21-May";
							$date7 = "1-Jun";
							
							$result = mysql_query("
							
							SELECT *
							FROM reserve_fd4
							WHERE reserve_fd4_type = 's9'

							");
							while($row = mysql_fetch_array($result))
								{		

							
						    echo '<tr>';
						        echo '<td>'.$row["reserve_fd4_id"].'</td>';							
						        echo '<td>'.$row["reserve_fd4_class"].'</td>';
						        echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_4.php?id='.$row['reserve_fd4_class'].'&&date='.$date1.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_4.php?id='.$row['reserve_fd4_class'].'&&date='.$date2.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_4.php?id='.$row['reserve_fd4_class'].'&&date='.$date3.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_4.php?id='.$row['reserve_fd4_class'].'&&date='.$date4.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_4.php?id='.$row['reserve_fd4_class'].'&&date='.$date5.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_4.php?id='.$row['reserve_fd4_class'].'&&date='.$date6.'">View</a></td>';
								echo '<td><a class="btn btn-primary" title="View" target="_blank" href="food_order_store_list_print_4.php?id='.$row['reserve_fd4_class'].'&&date='.$date7.'">View</a></td>';

						    echo '</tr>';
								}

					?>					
						    </tbody>
						</table>						
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
