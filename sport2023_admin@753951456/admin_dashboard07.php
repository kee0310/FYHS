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

	
					
		<div class="row">
					<div class="col-lg-12">
					<div style="height: 20px"></div>
					<form action = "2023sportdetailprint01.php" method = "GET" target="_blank">
					
					<input type="hidden" name="a" value="利丰港培华独中">
					<input type="hidden" name="c" value="球员">
					<select name="b">
					<option value="男子足球">男子足球</option>
					<option value="男子篮球">男子篮球</option>
					<option value="女子篮球">女子篮球</option>
					<option value="男子排球">男子排球</option>
					<option value="女子排球">女子排球</option>
					<option value="男子羽球">男子羽球</option>
					<option value="女子羽球">女子羽球</option>
					<option value="男子乒乓">男子乒乓</option>
					<option value="女子乒乓">女子乒乓</option>
					</select>
					<input type="submit">
					</form>
					</div>
					<div class="col-lg-12">
					<div style="height: 20px"></div>
					<form action = "2023sportdetailprint02.php" method = "GET" target="_blank">
					
					<input type="hidden" name="a" value="利丰港培华独中">
					<input type="hidden" name="c" value="球员">
					<select name="b">
					<option value="男子足球">男子足球</option>
					<option value="男子篮球">男子篮球</option>
					<option value="女子篮球">女子篮球</option>
					<option value="男子排球">男子排球</option>
					<option value="女子排球">女子排球</option>
					<option value="男子羽球">男子羽球</option>
					<option value="女子羽球">女子羽球</option>
					<option value="男子乒乓">男子乒乓</option>
					<option value="女子乒乓">女子乒乓</option>
					</select>
					<input type="submit">
					</form>
					</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">人员资料</div>
					<div class="panel-body">


						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
						    <thead>
						    <tr>						        
								<th>学校</th>
								<th>项目</th>
								<th>职位</th>
								<th>中文名</th>
								<th>英文名</th>
								<th>身份证号码</th>
								<th>电话/球衣号码</th>
								<th>图片</th>
								<th>上载</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
			include('connect.php');

			$result = mysql_query("

			SELECT *
			FROM qsport
			WHERE qschool = '利丰港培华独中' AND qcname <> ''
			ORDER BY user_id ASC
			
			");
			while($row = mysql_fetch_array($result))
			{

?>

						    <tr>
							<td><?php echo $row['qschool']; ?></td>
							<td><?php echo $row['qsport']; ?></td>
							<td><?php echo $row['qrole']; ?></td>
							<td><?php echo $row['qcname']; ?></td>
							<td><?php echo $row['qename']; ?></td>
							<td><?php echo $row['qic']; ?></td>
							<td><?php echo $row['qcall']; ?></td>
							<td><a href="http://www1.fyk.edu.my/sport2023_admin@753951456/img/<?php echo $row['qimg']; ?>" target="_blank" title="<?php echo $row['qimg']; ?>">
							<img src="img/<?php echo $row['qimg']; ?>" style="width: 120px; height: auto"></a><br><br>
							</td>
							<td>

								<form action="imgupload01.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
								<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
								<input type="file" name="file" accept="image/*"/ style="width: 120px">
								<button type="submit" name="btn-upload">Upload</button>
								</div>
								</form> 
							

								
							</td>

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
