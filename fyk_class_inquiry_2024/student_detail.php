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
<title>2024年宽柔中学古来分校初一新生入学试</title>

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
			
	<div style="height: 20px"></div>	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div style="height: 10px"></div>
					<div align="center"><img src="img/fylogo1.jpg" style="width: 200px ; height: auto"></div>
					<div class="panel-heading" align="center">2024年宽柔中学古来分校初一新生入学试（第二阶段）</div>
				</div>
			</div>

			
	<div style="height: 20px"></div>
			<div class="col-lg-12">
				<div class="panel panel-default">	

			<div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

			<div class="panel panel-default">
			
			<div class="panel-body">
			<div class="panel-heading" align="center" style="color:#222222;font-size: 16pt;">成绩查询</div>
			<div style="height: 20px"></div>
		
			
			
			
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

<table style="width: 100%; font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;color:#222222;">
<tbody>
<tr>
<td style="width: 50%;" align="right">学生编号：</td><td><?php echo $row['entrance_username']; ?></td>
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
<td align="right">小学：</td><td><?php echo $row['entrance_schoolorg']; ?></td>
</tr>
<tr>
<td align="center" colspan="2"><span style="font-weight: bold"><br><br>入学考试成绩</span></td>
</tr>
<tr>
<td align="right">华文：</td><td><?php echo $row['entrance_bc']; ?></td>
</tr>
<tr>
<td align="right">国文：</td><td><?php echo $row['entrance_bm']; ?></td>
</tr>
<tr>
<td align="right">英文：</td><td><?php echo $row['entrance_bi']; ?></td>
</tr>
<tr>
<td align="right">数学：</td><td><?php echo $row['entrance_math']; ?></td>
</tr>
<tr>
<td align="right">总分：</td><td><?php echo $row['entrance_total']; ?></td>
</tr>
<tr>
<td align="right">结果：</td>
<td><?php 
if($row['entrance_result'] == "录取")
{
	echo"<span style='color:green'>录取</span>";
}
else
{
	echo"<span style='color:red'>不录取</span>";
}

?></td>
</tr>


</tbody>
</table>

<div style="height: 10px"></div>




			</div>
			</div>
			
			<!--/.information012ndphase-->	
			<div class="panel-body">
			<div class="panel-heading" align="center" style="color:#222222;font-size: 16pt;">注册事宜（第二阶段）</div>
			<div style="height: 20px"></div>
			<div align="justify" style="width: 100%; font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;color:#222222;">
			<ol>
			<li>缴费注册报名日期和时间</li>
			<img src="img/e05.jpg" style="width: 75%; height: auto;">
			
			<li>被录取的新生必须在上述日期内缴费注册报名，逾期一概不处理。</li>

			<li>注册费用如下</li>
			
			<img src="img/e02.jpg" style="width: 75%; height: auto;">
			
			<li>在职华小教师、国中全职华文科教师及南方大学学院全职教师的子女可获学费半免，注册费用为RM 1,620。在开学后一个月内，必须向校长秘书处申请。</li>
			<li>新生缴费注册后，不论任何理由，所缴费用一概不退回。</li>
			<li>校方有提供借书计划，清寒学生可在缴费注册时，向训导处了解申请手续。</li>
			<li>若新生在2024学年开学日起，连续缺席 3 天，校方将取消其学籍。</li>
			<li>若有任何询问，可联系教务处：07-6636479；校长室秘书处：07-6625888。</li>
			
			
			</ol>

			</div>
			</div>			
			
			<!--/.information01-->	
			<div class="panel-body">
			<div class="panel-heading" align="center" style="color:#222222;font-size: 16pt;">注意事项</div>
			<div style="height: 20px"></div>
			<div align="justify" style="width: 100%; font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;color:#222222;">
			<ol>
			<li>录取标准：宽柔中学古来分校初一新生入学试4科成绩总分达138分。</li>
			<li>被录取者必须于18/9/2023（星期一）至7/10/2023（星期六）到古来分校大礼堂进行缴费注册，逾期一概不处理。</li>
			
			<img src="img/e01.jpg" style="width: 75%; height: auto;">

			<li>缴费注册后，不论任何理由，所缴费用一概不退回。</li>
			<li>缴费注册时，家长将会拿到初一书单和购书日期。</li>
			<li>初一A组名单将于购书日之前公布于宽柔中学古来分校网站<br><a href="http://www.fyk.edu.my/" title="http://www.fyk.edu.my/">http://www.fyk.edu.my/</a>。</li>
			</ol>

			</div>
			</div>
			
			<!--/.information02-->	
			<div class="panel-body">
			<div class="panel-heading" align="center" style="color:#222222;font-size: 16pt;">新生注册事宜</div>
			<div style="height: 20px"></div>
			<div align="justify" style="width: 100%; font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;color:#222222;">
			<ol>
			<li>注册费用如下：</li>
			<img src="img/e02.jpg" style="width: 80%; height: auto;">
			<li>入学试优异生奖励人数:</li>
			<img src="img/e03.jpg" style="width: 100%; height: auto;">
			<li>入学试优异生的奖励及注册时应缴费用如下：</li>
			<img src="img/e04.jpg" style="width: 100%; height: auto;">
			<br>注：以上奖励只限本国公民
			<li>在职华小教师、国中全职华文科教师及南方大学学院全职教师的子女可获学费半免，注册费用为RM 1,620。在开学后一个月内，必须向校长秘书处申请。</li>
			<li>新生缴费注册后，不论任何理由，所缴费用一概不退回。&nbsp;&nbsp;</li>
			<li>缴费注册报名日期和时间：</li>
			<img src="img/e01.jpg" style="width: 75%; height: auto;">
			<li>被录取的新生必须在上述日期内缴费注册报名，逾期一概不处理。</li>
			</ol>

			</div>
			</div>

			<!--/.information03-->	
			<div class="panel-body">
			<div class="panel-heading" align="center" style="color:#222222;font-size: 16pt;">其他注意事项</div>
			<div style="height: 20px"></div>
			<div align="justify" style="width: 100%; font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;color:#222222;">
			<ol>
			<li>欲重审答卷的考生必须于 9月13日（星期三）下午3时前，到本校教务处申请，重审的行政费为每科RM5，逾期不受理。学校将于 9月15日前致电通知重审结果。</li>
			<li>清寒学生助学金：
				<ol style="list-style-type:lower-alpha;">
					<li>家境清寒者，可于 9月11日（星期一）开始，至 9月19日（星期二）中午12时，向校长秘书处申请助学金。</li>
					<li>可先到学校网站下载申请表格并了解手续。</li>
					<li>获得助学金的申请者名单将在 9月21日（星期四）公布于本校网站及布告栏。</li>
					<li>助学金用于支付学生的第二期学费及第三期的部分学费。</li>
				</ol>
			
			</li>
			<li>校方有提供借书计划，清寒学生可在缴费注册时，向训导处了解申请手续。</li>
			<li>在注册日期截止后，若尚有学额，将在 9月30日（星期六）公布第二阶段录取名单。</li>
			<li>若新生在2024学年开学日起，连续缺席 3天，校方将取消其学籍。</li>
			<li>若有任何询问，可联系教务处：07-6636479。</li>
			</ol>

			</div>
			</div>
			
			
			
<?php } 
			session_destroy();
				
			exit();						
?>
			
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
