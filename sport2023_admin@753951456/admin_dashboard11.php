<?php
require('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>2023年第16届全柔独中球类锦标赛</title>

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
				<li class="active">Sport
				</li>
			</ol>
			</div><!--/.row-->

	
				<div style="height: 20px"></div>	
		<div class="row">
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">男子足球：
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qcname) AS total,I.qschool
							FROM qsport I
							WHERE qsport = '男子足球' AND qrole = '球员' AND qcname <> ''

			
			");
			while($row = mysql_fetch_array($result))
			{
				echo $row['total'];
			}

?>
					</div>
					<div class="panel-body">
						

						<table data-toggle="table">
						    <thead>
						    <tr>						        
								<th>学校</th>
								<th>人数</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qschool) AS abc,I.qschool
							FROM qsport I
							WHERE qsport = '男子足球' AND qrole = '球员' AND qcname <> ''
							
							GROUP BY I.qschool
							ORDER BY I.qschool ASC

			
			");
			while($row = mysql_fetch_array($result))
			{

?>
						    <tr>
							<td><?php echo $row['qschool']; ?></td>
							<td><?php echo $row['abc']; ?></td>


						    </tr>
					
				<?php 

			}
			
			
			
?>						

						    </tbody>
						</table>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">男子篮球：
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qcname) AS total,I.qschool
							FROM qsport I
							WHERE qsport = '男子篮球' AND qrole = '球员' AND qcname <> ''

			
			");
			while($row = mysql_fetch_array($result))
			{
				echo $row['total'];
			}

?>
					</div>
					<div class="panel-body">
						

						<table data-toggle="table">
						    <thead>
						    <tr>						        
								<th>学校</th>
								<th>人数</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qschool) AS abc,I.qschool
							FROM qsport I
							WHERE qsport = '男子篮球' AND qrole = '球员' AND qcname <> ''
							
							GROUP BY I.qschool
							ORDER BY I.qschool ASC

			
			");
			while($row = mysql_fetch_array($result))
			{

?>
						    <tr>
							<td><?php echo $row['qschool']; ?></td>
							<td><?php echo $row['abc']; ?></td>


						    </tr>
					
				<?php 

			}
			
			
			
?>						

						    </tbody>
						</table>
					</div>
				</div>
			</div>			
			
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">女子篮球：
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qcname) AS total,I.qschool
							FROM qsport I
							WHERE qsport = '女子篮球' AND qrole = '球员' AND qcname <> ''

			
			");
			while($row = mysql_fetch_array($result))
			{
				echo $row['total'];
			}

?>
					</div>
					<div class="panel-body">
						

						<table data-toggle="table">
						    <thead>
						    <tr>						        
								<th>学校</th>
								<th>人数</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qschool) AS abc,I.qschool
							FROM qsport I
							WHERE qsport = '女子篮球' AND qrole = '球员' AND qcname <> ''
							
							GROUP BY I.qschool
							ORDER BY I.qschool ASC

			
			");
			while($row = mysql_fetch_array($result))
			{

?>
						    <tr>
							<td><?php echo $row['qschool']; ?></td>
							<td><?php echo $row['abc']; ?></td>


						    </tr>
					
				<?php 

			}
			
			
			
?>						

						    </tbody>
						</table>
					</div>
				</div>
			</div>			
			

			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">男子排球：
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qcname) AS total,I.qschool
							FROM qsport I
							WHERE qsport = '男子排球' AND qrole = '球员' AND qcname <> ''

			
			");
			while($row = mysql_fetch_array($result))
			{
				echo $row['total'];
			}

?>
					</div>
					<div class="panel-body">
						

						<table data-toggle="table">
						    <thead>
						    <tr>						        
								<th>学校</th>
								<th>人数</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qschool) AS abc,I.qschool
							FROM qsport I
							WHERE qsport = '男子排球' AND qrole = '球员' AND qcname <> ''
							
							GROUP BY I.qschool
							ORDER BY I.qschool ASC

			
			");
			while($row = mysql_fetch_array($result))
			{

?>
						    <tr>
							<td><?php echo $row['qschool']; ?></td>
							<td><?php echo $row['abc']; ?></td>


						    </tr>
					
				<?php 

			}
			
			
			
?>						

						    </tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">女子排球：
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qcname) AS total,I.qschool
							FROM qsport I
							WHERE qsport = '女子排球' AND qrole = '球员' AND qcname <> ''

			
			");
			while($row = mysql_fetch_array($result))
			{
				echo $row['total'];
			}

?>
					</div>
					<div class="panel-body">
						

						<table data-toggle="table">
						    <thead>
						    <tr>						        
								<th>学校</th>
								<th>人数</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qschool) AS abc,I.qschool
							FROM qsport I
							WHERE qsport = '女子排球' AND qrole = '球员' AND qcname <> ''
							
							GROUP BY I.qschool
							ORDER BY I.qschool ASC

			
			");
			while($row = mysql_fetch_array($result))
			{

?>
						    <tr>
							<td><?php echo $row['qschool']; ?></td>
							<td><?php echo $row['abc']; ?></td>


						    </tr>
					
				<?php 

			}
			
			
			
?>						

						    </tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">男子羽球：
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qcname) AS total,I.qschool
							FROM qsport I
							WHERE qsport = '男子羽球' AND qrole = '球员' AND qcname <> ''

			
			");
			while($row = mysql_fetch_array($result))
			{
				echo $row['total'];
			}

?>
					</div>
					<div class="panel-body">
						

						<table data-toggle="table">
						    <thead>
						    <tr>						        
								<th>学校</th>
								<th>人数</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qschool) AS abc,I.qschool
							FROM qsport I
							WHERE qsport = '男子羽球' AND qrole = '球员' AND qcname <> ''
							
							GROUP BY I.qschool
							ORDER BY I.qschool ASC

			
			");
			while($row = mysql_fetch_array($result))
			{

?>
						    <tr>
							<td><?php echo $row['qschool']; ?></td>
							<td><?php echo $row['abc']; ?></td>


						    </tr>
					
				<?php 

			}
			
			
			
?>						

						    </tbody>
						</table>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">女子羽球：
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qcname) AS total,I.qschool
							FROM qsport I
							WHERE qsport = '女子羽球' AND qrole = '球员' AND qcname <> ''

			
			");
			while($row = mysql_fetch_array($result))
			{
				echo $row['total'];
			}

?>
					</div>
					<div class="panel-body">
						

						<table data-toggle="table">
						    <thead>
						    <tr>						        
								<th>学校</th>
								<th>人数</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qschool) AS abc,I.qschool
							FROM qsport I
							WHERE qsport = '女子羽球' AND qrole = '球员' AND qcname <> ''
							
							GROUP BY I.qschool
							ORDER BY I.qschool ASC

			
			");
			while($row = mysql_fetch_array($result))
			{

?>
						    <tr>
							<td><?php echo $row['qschool']; ?></td>
							<td><?php echo $row['abc']; ?></td>


						    </tr>
					
				<?php 

			}
			
			
			
?>						

						    </tbody>
						</table>
					</div>
				</div>
			</div>			
			
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">男子乒乓：
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qcname) AS total,I.qschool
							FROM qsport I
							WHERE qsport = '男子乒乓' AND qrole = '球员' AND qcname <> ''

			
			");
			while($row = mysql_fetch_array($result))
			{
				echo $row['total'];
			}

?>
					</div>
					<div class="panel-body">
						

						<table data-toggle="table">
						    <thead>
						    <tr>						        
								<th>学校</th>
								<th>人数</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qschool) AS abc,I.qschool
							FROM qsport I
							WHERE qsport = '男子乒乓' AND qrole = '球员' AND qcname <> ''
							
							GROUP BY I.qschool
							ORDER BY I.qschool ASC

			
			");
			while($row = mysql_fetch_array($result))
			{

?>
						    <tr>
							<td><?php echo $row['qschool']; ?></td>
							<td><?php echo $row['abc']; ?></td>


						    </tr>
					
				<?php 

			}
			
			
			
?>						

						    </tbody>
						</table>
					</div>
				</div>
			</div>			
			
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">女子乒乓：
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qcname) AS total,I.qschool
							FROM qsport I
							WHERE qsport = '女子乒乓' AND qrole = '球员' AND qcname <> ''

			
			");
			while($row = mysql_fetch_array($result))
			{
				echo $row['total'];
			}

?>
					
					</div>
					<div class="panel-body">
						

						<table data-toggle="table">
						    <thead>
						    <tr>						        
								<th>学校</th>
								<th>人数</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
			include('connect.php');

			$result = mysql_query("

							SELECT count(I.qschool) AS abc,I.qschool
							FROM qsport I
							WHERE qsport = '女子乒乓' AND qrole = '球员' AND qcname <> ''
							
							GROUP BY I.qschool
							ORDER BY I.qschool ASC

			
			");
			while($row = mysql_fetch_array($result))
			{

?>
						    <tr>
							<td><?php echo $row['qschool']; ?></td>
							<td><?php echo $row['abc']; ?></td>


						    </tr>
					
				<?php 

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
