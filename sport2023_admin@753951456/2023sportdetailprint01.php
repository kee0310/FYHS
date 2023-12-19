<?php
require('connect.php');
require('db.php');
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

<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>

<body style="padding-top: 0px;">
	
<table style="width: 100%;border: none;">
	<tbody>
		<tr>
			<td style="width:20%;border: none;" align="center" valign="top"><img src="img/logo2023.png" style="width: 50%; height: auto"></td>
			<td style="width:80%;border: none;font-size:18pt;text-align:center;">2023年第16届全柔独中球类锦标赛报名表</td>
		</tr>
	</tbody>
</table>
<div style="height: 10px"></div>
<table style="width: 100%;border:1px #000 solid">
	<tbody>
		<tr>
			<td style="width:20%;border:1px #000 solid" align="center">参赛学校</td>
			<td style="width:80%;font-size:16pt;text-align:center"><?php $a=$_GET['a']; echo $a; ?></td>
		</tr>
		<tr>
			<td style="width:20%;border:1px #000 solid" align="center">参赛组别</td>
			<td style="width:80%;font-size:16pt;text-align:center"><?php $b=$_GET['b']; echo $b; ?></td>
		</tr>
	</tbody>
</table>

<div style="height: 10px"></div>

						<table style="width: 100%;font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
						    <thead>
						    <tr>
								<th style="width: 12%;text-align: center">正式球员</th>
								<th style="width: 10%;text-align: center">球员</th>
								<th style="width: 12%;text-align: center">球衣号码</th>
								<th style="width: 30%;text-align: center">英文姓名</th>
								<th style="width: 13%;text-align: center">中文姓名</th>
								<th style="width: 23%;text-align: center">身份证号码</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
	include('connect.php');

			$a=$_GET['a'];
			$b=$_GET['b'];
			$c=$_GET['c'];
							
			$result = mysql_query("

			SELECT user_id,qschool,qsport,qrole,qcname,qename,qic,qcall,qimg,
			
			RANK () OVER ( 
			ORDER BY user_id ASC
			) group_rank			
			
			FROM qsport
			
			WHERE qschool = '$a' AND qsport = '$b' AND qrole = '$c'

			ORDER BY user_id ASC
			
			");
			while($row = mysql_fetch_array($result))
			{
				
?>

						    <tr>
							<td></td>
							<td style="line-height: 1.6;" align="center"><?php echo $row['group_rank']; ?></td>
							<td align="center"><?php echo $row['qcall']; ?></td>
							<td align="center"><?php echo $row['qename']; ?></td>
							<td align="center"><?php echo $row['qcname']; ?></td>
							<td align="center"><?php echo $row['qic']; ?></td>

						    </tr>
					
				<?php 

			}
?>						

						    </tbody>
						</table>

<div style="height: 10px"></div>

						<table style="width: 100%;font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
						    <thead>
						    <tr>
								<th style="width: 15%;text-align: center"></th>
								<th style="width: 35%;text-align: center">英文姓名</th>
								<th style="width: 20%;text-align: center">中文姓名</th>
								<th style="width: 30%;text-align: center">联络电话</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
	include('connect.php');

			$a=$_GET['a'];
			$b=$_GET['b'];
			$c=$_GET['c'];
							
			$result = mysql_query("

			SELECT user_id,qschool,qsport,qrole,qcname,qename,qic,qcall,qimg,
			
			RANK () OVER ( 
			ORDER BY user_id ASC
			) group_rank			
			
			FROM qsport
			
			WHERE qschool = '$a' AND qsport = '$b' AND qrole != '$c'

			ORDER BY user_id ASC
			
			");
			while($row = mysql_fetch_array($result))
			{
				
?>

						    <tr>
							<td style="line-height: 1.6;" align="center"><?php echo $row['qrole']; ?></td>
							<td align="center"><?php echo $row['qename']; ?></td>
							<td align="center"><?php echo $row['qcname']; ?></td>
							<td align="center"><?php echo $row['qcall']; ?></td>

						    </tr>
					
				<?php 

			}
?>						

						    </tbody>
						</table>

<div style="height: 10px"></div>
<table style="width: 100%;border:1px #000 solid">
	<tbody>
		<tr>
			<td style="width:80%;font-size:14pt;text-align:center">截止日期：2023年8月5日</td>
		</tr>
	</tbody>
</table>
<div style="height: 20px" align="right">
<?php
echo "打印日期：" . date("Y-m-d");
echo date("l");
?>

</div>
<!--
<table style="width: 100%;border: none;">
	<tbody>
		<tr>
			<td style="width:15%;font-size:12pt;line-height: 1.6;text-align:left;border: none;padding-left:20px;">校长签名：</td><td style="width:20%;border: none;text-align:left;">__________________</td><td rowspan="2" style="border: none;padding-left:20px;" valign="bottom">校印：</td>
		</tr>
		<tr>
			<td style="width:15%;font-size:12pt;line-height: 1.6;text-align:left;border: none;padding-left:20px;">日期：</td><td style="width:20%;border: none;text-align:left;">__________________</td>
		</tr>
	</tbody>
</table>

-->







	


		
		


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
<script type="text/javascript">
<!--
window.print();
//-->
</script>	
</body>

</html>
