<?php
require('connect.php');
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

<style>
@import url(https://fonts.googleapis.com/css?family=Fjalla+One:400|Roboto:400,400italic,700);

.jzdbox1 {
  width:315px; 
  background:#332f2e; 
  border-radius:5px; 
  overflow:hidden; 
  display:block; 
  margin-bottom:10px; 
  box-shadow:0 0 10px #201d1c; 
  margin:0 auto; 
  margin-top:0px;
}

.jzdcal {
  padding:0 10px 10px 10px; 
  box-sizing:border-box!important; 
  background:#749d9e; 
  background: -webkit-linear-gradient(#749d9e, #b3a68b)!important; 
  background: -o-linear-gradient(#749d9e, #b3a68b)!important; 
  background: -moz-linear-gradient(#749d9e, #b3a68b)!important; 
  background: linear-gradient(#749d9e, #b3a68b)!important;
}

.jzdcalt {
  font:18px 'Roboto'; 
  font-weight:700; 
  color:#f7f3eb; 
  display:block; 
  margin:18px 0 0 0; 
  text-transform:uppercase; 
  text-align:center; 
  letter-spacing:1px;
}

.jzdcal span {
  font:11px 'Roboto'; 
  font-weight:400; 
  color:#f7f3eb; 
  text-align:center; 
  width:42px; 
  height:42px; 
  display:inline-block; 
  float:left; 
  overflow:hidden; 
  line-height:40px;
}

.jzdcal .jzdb:before {
  opacity:0.3; 
  content:'o';
}

.circle {
  border:1px solid #f7f3eb; 
  box-sizing:border-box!important; 
  border-radius:200px!important;
}

span[data-title]:hover:after, 
div[data-title]:hover:after {
  font:11px 'Roboto'; 
  font-weight:400; 
  content:attr(data-title); 
  position:absolute; 
  margin:0 0 100px; 
  background:#282423; 
  border:1px solid #f7f3eb; 
  color:#f7f3eb; 
  padding:5px; 
  z-index:9999; 
  min-width:150px; 
  max-width:150px;
}
</style>

</head>

<body>
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
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;"> 选修课细则</div>
									</div>
			</div>
					<div style="height: 20px"></div>
		</div>
					
		<div class="row">
			<div class="col-lg-4">

<div class="jzdbox1 jzdbasf jzdcal">

<div class="jzdcalt">Nov 2023</div>

<span>Su</span>
<span>Mo</span>
<span>Tu</span>
<span>We</span>
<span>Th</span>
<span>Fr</span>
<span>Sa</span>


<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span>1</span>
<span class="circle" data-title="11月2日 - 开放查询课程，填写回馈">2</span>
<span>3</span>
<span class="circle" data-title="11月4日：11.00AM - 开放选课">4</span>
<span class="circle" data-title="11月5日：11.59PM - 结束选课">5</span>
<span>6</span>
<span>7</span>
<span>8</span>
<span>9</span>
<span>10</span>
<span>11</span>
<span>12</span>
<span>13</span>
<span>14</span>
<span>15</span>
<span>16</span>
<span>17</span>
<span>18</span>
<span>19</span>
<span>20</span>
<span>21</span>
<span>22</span>
<span>23</span>
<span>24</span>
<span>25</span>
<span>26</span>
<span>27</span>
<span>28</span>
<span>29</span>
<span>30</span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>

</div>
<div style="height: 20px"></div>

			</div>

			<div class="col-lg-8">
			<div class="col-xs-12 col-md-6 col-lg-12">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div style="font-size: 24px; font-weight: bold; color: #000;font-family: 楷体, KaiTi;">查询课程日期</div>
							<div style="height: 10px"></div>
							<div class="text-muted"><span style="color: #000">2/11/2023(四) 至 3/11/2023(五)</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-12">
				<div class="panel panel-blue panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div style="font-size: 24px; font-weight: bold; color: #000;font-family: 楷体, KaiTi;">开放选课日期</div>
							<div style="height: 10px"></div>
							<div class="text-muted"><span style="color: #000">4/11/2023(六)11:00am 至 5/11/2023(日)11:59pm</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-12">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div style="font-size: 24px; font-weight: bold; color: #000; font-family: 楷体, KaiTi;">开课日期</div>
							<div style="height: 10px"></div>
							<div class="text-muted"><span style="color: #000">开学的第一个星期三</span></div>
						</div>
					</div>
				</div>
			</div>
			</div>

		</div><!--/.row-->
			
		<div class="row">




			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading" align="center">
						选课账号与密码
					</div>
					<div class="panel-body">
<span style=" font-weight: 550; font-size: 16pt; line-height: 25px;font-family: 楷体, KaiTi;">

选课账号：学号(例子：193001)<br><br>

选课密码：身份证号码(例子：061201016789)<br><br>

首次登入后，系统会自动生成1个数字及1个小写字母(例子：1h)，请牢记此数字及英文字母。<br><br>

从第二次登入开始，选课密码将自动变为数字+小写英文字母+身份证号码(例子：1h061201016789)<br><br>





</span>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading" align="center">
						查询说明
					</div>
					<div class="panel-body">
<ol style="text-align: justify; font-weight: 550; font-size: 16pt; line-height: 25px;font-family: 楷体, KaiTi;">

<li>查询课程期间，需以学号登入系统。登入后，即可进入课程查询画面。<br><br></li>

<li>在查询页面中，学生需点选<span style="color: blue">【查看课程】</span>以了解个别课程的内容详情。<br><br></li>


</ol>
<span style=" font-weight: 550; font-size: 16pt; line-height: 25px;font-family: 楷体, KaiTi;">备注：<br>
<ul>
<li>学生需善用关键字查询功能以进行条件筛选，方便自己快速了解课程情况。<br><br></li>

<li>查询课程期间，将列明所有上下半年课程的日期与课程详情。学生需认真了解，以为自己的选择作一全面安排。<br><br></li>
</ul>
</span>
					</div>
				</div>
			</div>
	
		</div><!-- /.row -->	
		
		<div class="row">	
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading" align="center">
						选课说明
					</div>
					<div class="panel-body">
<ol style="text-align: justify; font-weight: 550; font-size: 16pt; line-height: 25px;font-family: 楷体, KaiTi;">

<li>高二及高三学生皆须从<span style="color: red">“上学年星期一课程”</span>和<span style="color: red">“上学年星期三课程”</span>的两个类组中各选一门课。<br><br></li>

<li>点选<span style="color: blue">【查看课程】</span>，会进入该课程内容页面，可透过它了解课程详情。务必详阅内容后方做出选择。<br><br></li>

<li>选定课程后，点选该课程简介上方的<span style="color: blue">【进行选课】</span>，并再转入下一页面后点选<span style="color: blue">【确定选修】</span>。选课成功者，画面即会转至主页面并在<span style="color: red">“2024 上学年已选修课程”</span>列表中列明该课程名称。同时，<span style="color: red">“选修课程”</span>栏位将会显示“完成选修”的字句。<br><br></li>

<li>学生也能在主页面通过点选自身心仪课程在<span style="color: red">“选修课程”</span>栏位的<span style="color: blue">【进行选课】</span>，并在转入下一页面后点选<span style="color: blue">【确定选修】</span>进行选课。<br><br></li>

<li>若要放弃已选课程，需先点选左侧功能区的<span style="color: blue">【退出已选课程】</span>，并在下一画面中点选所想退选课程的<span style="color: blue">【进行退选】</span>，最后在下一画面按下<span style="color: blue">【确定退选】</span>。成功退选者，画面即会转至主页面。之后，再选取自己心仪的课程即可。<br><br></li>

<li><span style="color: red">“学生选修状态”</span>一栏将在学生完成应该选择的两门课程后，显示为<span style="color: red">“2024 上学年课程选修已完成”</span>。若<span style="color: red">“学生选修状态”</span>一栏持续显示为<span style="color: red">“2024 上学年课程选修未完成”</span>，即代表学生还未完成选课。离开选课网站时，务必确定<span style="color: red">“学生选修状态”</span>显示为<span style="color: red">“2024 上学年课程选修已完成”</span>，这才代表学生已完成两门的选修课程。<br><br></li>

<li>每门课程均设有人数上限。凡已达选课人数上限的课程，将无法接受学生再点选报名，除非已选课学生退选，才能加入。<br><br></li>

<li>选课期间学生可随时更改已选课程，惟选课截止后则不接受任何理由做更动。<br><br></li>

<li>若课程选课人数不达开课下限人数，教务处将安排相关学生改选其它课程。<br><br></li>

<li>凡是课程名称后方有注明<span style="color: red">“-I”</span>与<span style="color: red">“-II”</span>(例子：<span style="color: red">“宴会管理-I”</span>与<span style="color: red">“宴会管理-II”</span>)的课程，均为全年课程。选修的学生务必全年均参与课程，不得只选半年课程，而不参加另半年的课程。<br><br></li>

<li>凡上下半年课程列表中出现同样名字的课程(例子：<span style="color: red">“上学年星期一-独立研究”</span>与<span style="color: red">“下学年星期一-独立研究”</span>)，其上课的课程内容相同。学生不得重复选修，需另选其它课程。<br><br></li>

</ol>

<span style=" font-weight: 550; font-size: 16pt; line-height: 25px;font-family: 楷体, KaiTi;">备注：</span>
<ol style="text-align: justify; font-weight: 550; font-size: 16pt; line-height: 25px;font-family: 楷体, KaiTi;">


<li>若上学年所选修之课程为全年课程，网站将在下学年选课时为学生自动锁定该全年课程。选修全年课程的学生，下学年不得要求更换课程。<br><br></li>

<li>若学生在上学年星期一与星期三所选修课程均为全年课程，则下学年无需再登入网站进行选课。若只有其一为全年课程，学生仍需在选课期间登入网站进行选课。<br><br></li>

<li>因为其中部份课程非常热门，也许会发生瞬间满额的状况。若系统自动转入<span style="color: red">“已选课成功”</span>的提示画面，并不意味学生已入选本课程，因为学生实际上可能是满额之后的选课者。<br><br></li>

<li>在此，慎重提醒学生在完成选课程序，系统自动转入<span style="color: red">“已选课成功”</span>的提示画面后，仍必须在<span style="color: red">“2024 上学年已选修课程”</span>列表上再次确认所选定之课程。如未出现，则代表并未入选。<br><br></li>

<li>若学生不符合课程中所列明的选修条件，开课老师将依规定将相关学生退选，学生退选后补选之课程将交由教务处安排。<br><br></li>


</ol>
					</div>
				</div>
			</div>


	
		</div><!-- /.row -->
					
					
					
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
