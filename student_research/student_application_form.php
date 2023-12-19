<?php
session_start();
require('connect.php');
$md = $_REQUEST['id'];


include("auth.php");
include("auth_student_leader.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>综合实践活动课程</title>

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
.material-icons.print{Font-size:45px ; color:#ffffff;}

    textarea {
        resize: none;
    }
</style>
<script src="ckeditor/ckeditor.js"></script>
</head>

<body oncontextmenu="return false;">

	<?php
	
			$result = mysql_query("SELECT admin_survey_onoff from zadmin_detail");
			$data=mysql_fetch_assoc($result);
			
			$surveyonoff=$data['admin_survey_onoff'];
			
			if ($surveyonoff == 1){
	
			$header_survey_on = file_get_contents('header_student_survey_on.php');
			echo $header_survey_on;
			
			}
			elseif ($surveyonoff == 0){
				
			$header = file_get_contents('header_student.php');
			echo $header;				

			}
	?>
	



	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


			<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
			</div><!--/.row-->

	
					


		
		<div class="row">
		<div style="height: 20px"></div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading" align="center">综合实践活动课程-申请表</div>

					<div class="panel-body">
					
			<?php	
			
				date_default_timezone_set("Asia/Kuala_Lumpur");
				$date = date('YmdHis', time());

				$start_time_view 	=20230116000000;
				$end_time_view 		=20230308190000;			
			
				$id = $_SESSION['username'];
				$result = mysql_query("SELECT count(*) as total,apply_allow_edit from zgroup_detail where group_code='$id'");
				$data=mysql_fetch_assoc($result);
			
				$totalapply=$data['total'];
				$apply_allow_edit=$data['apply_allow_edit'];
								
				
				if($start_time_view > $date)
				{				
				echo "还未开放填写：2023年1月16日（星期一） 至 2023年1月19日（星期四）";
				}
				elseif($end_time_view < $date)
				{
				echo "填写已经截止：2023年1月16日（星期一） 至 2023年1月19日（星期四）";
				}
				elseif($totalapply >= 1)
				{
					
						if($apply_allow_edit == 1)
						{
							echo "已完成填写申请表。如需修改申请表，请将现有的申请表删除。";
							echo '<a href="student_application_form_delete_exe.php?id='.$id.'" title="删除申请表">删除申请表</a>';
						}
						else
						{
							echo "已完成填写申请表。如需修改申请表，请将现有的申请表删除。";
							echo '<span style="color: red">无法删除申请表</span>';
						}							
					
				}
				else
				{
					
					
			?>
						<form role="form" action="add/student_application_form_exe.php" method="post">
							<div class="col-md-6">
							<input type="hidden" name="group_code" value="<?php $id = $_SESSION['username']; echo $id; ?>">
							<input type="hidden" name="apply_allow_edit" value="1">
							<input type="hidden" name="apply_approved" value="2">
								<h4>项目名称</h4>
								<input type="text" class="form-control" rows="2" name="apply_topic" required><br><br>	
							</div>
							<div class="col-md-6">
								<h4>指导老师</h4>
								<select id="apply_teacher" name="apply_teacher" class="form-control">
<option value="白君妮">白君妮</option>
<option value="陈楚豪">陈楚豪</option>
<option value="陈端峻">陈端峻</option>
<option value="陈德培">陈德培</option>
<option value="蔡惠珊">蔡惠珊</option>
<option value="陈汉祥">陈汉祥</option>
<option value="陈慧娴">陈慧娴</option>
<option value="池佳敏">池佳敏</option>
<option value="蔡珈瑜">蔡珈瑜</option>
<option value="蔡坤桂">蔡坤桂</option>
<option value="蔡恺森">蔡恺森</option>
<option value="蔡恺怡">蔡恺怡</option>
<option value="陈珑宝">陈珑宝</option>
<option value="陈美玲">陈美玲</option>
<option value="陈美丝">陈美丝</option>
<option value="陈佩琪">陈佩琪</option>
<option value="蔡佩芸">蔡佩芸</option>
<option value="陈钎盛">陈钎盛</option>
<option value="岑瑞娟">岑瑞娟</option>
<option value="陈顺发">陈顺发</option>
<option value="陈文贵">陈文贵</option>
<option value="蔡伟杰">蔡伟杰</option>
<option value="蔡伟尼">蔡伟尼</option>
<option value="陈玟全">陈玟全</option>
<option value="陈欣法">陈欣法</option>
<option value="陈心慧">陈心慧</option>
<option value="陈心怡">陈心怡</option>
<option value="陈颖达">陈颖达</option>
<option value="蔡仪萍">蔡仪萍</option>
<option value="蔡莹莹">蔡莹莹</option>
<option value="陈志丰">陈志丰</option>
<option value="陈志杰">陈志杰</option>
<option value="蔡征峦">蔡征峦</option>
<option value="陈智伟">陈智伟</option>
<option value="邓洁敏">邓洁敏</option>
<option value="戴景正">戴景正</option>
<option value="丁麒仁">丁麒仁</option>
<option value="杜庥潓">杜庥潓</option>
<option value="戴新娇">戴新娇</option>
<option value="邓绣薇">邓绣薇</option>
<option value="杜庥沄">杜庥沄</option>
<option value="邓燕菁">邓燕菁</option>
<option value="冯国强">冯国强</option>
<option value="符祥靖">符祥靖</option>
<option value="冯信美">冯信美</option>
<option value="方智雄">方智雄</option>
<option value="郭嘉颖">郭嘉颖</option>
<option value="郭丽婷">郭丽婷</option>
<option value="黄弼珊">黄弼珊</option>
<option value="韩础骏">韩础骏</option>
<option value="黄翠霞">黄翠霞</option>
<option value="黄金才">黄金才</option>
<option value="黄嘉慧">黄嘉慧</option>
<option value="黄建凯">黄建凯</option>
<option value="黄琼芳">黄琼芳</option>
<option value="黄庆康">黄庆康</option>
<option value="黄巧柔">黄巧柔</option>
<option value="何诗莉">何诗莉</option>
<option value="黄丝尹">黄丝尹</option>
<option value="黄廷泉">黄廷泉</option>
<option value="洪添祥">洪添祥</option>
<option value="黄伟宽">黄伟宽</option>
<option value="何文龙">何文龙</option>
<option value="黄伟琳">黄伟琳</option>
<option value="黄文欣">黄文欣</option>
<option value="黄宥硕">黄宥硕</option>
<option value="黄紫俐">黄紫俐</option>
<option value="黄振威">黄振威</option>
<option value="金易瑾">金易瑾</option>
<option value="江义雄">江义雄</option>
<option value="纪志贤">纪志贤</option>
<option value="林爱云">林爱云</option>
<option value="李宝娉">李宝娉</option>
<option value="赖楚殷">赖楚殷</option>
<option value="梁德兴">梁德兴</option>
<option value="刘惠玲">刘惠玲</option>
<option value="赖慧咪">赖慧咪</option>
<option value="刘惠萍">刘惠萍</option>
<option value="吕觉翰">吕觉翰</option>
<option value="罗家骏">罗家骏</option>
<option value="刘佳敏">刘佳敏</option>
<option value="刘建缗">刘建缗</option>
<option value="林建伟">林建伟</option>
<option value="林建兴">林建兴</option>
<option value="赖见贤">赖见贤</option>
<option value="林刘菁">林刘菁</option>
<option value="林俐彤">林俐彤</option>
<option value="林俐汶">林俐汶</option>
<option value="李曼妮">李曼妮</option>
<option value="林美缘">林美缘</option>
<option value="林美真">林美真</option>
<option value="刘佩君">刘佩君</option>
<option value="李佩玲">李佩玲</option>
<option value="梁佩敏">梁佩敏</option>
<option value="李佩璇">李佩璇</option>
<option value="黎琪珊">黎琪珊</option>
<option value="李俏苇">李俏苇</option>
<option value="李素霈">李素霈</option>
<option value="刘思宜">刘思宜</option>
<option value="林伟杰">林伟杰</option>
<option value="李伟杰">李伟杰</option>
<option value="林婉明">林婉明</option>
<option value="罗文伟">罗文伟</option>
<option value="刘心仪">刘心仪</option>
<option value="赖应欢">赖应欢</option>
<option value="李胤欽">李胤欽</option>
<option value="廖宗豪">廖宗豪</option>
<option value="林子伟">林子伟</option>
<option value="练智雄">练智雄</option>
<option value="潘美欣">潘美欣</option>
<option value="彭思红">彭思红</option>
<option value="邱佩萱">邱佩萱</option>
<option value="丘文汉">丘文汉</option>
<option value="阙玉萍">阙玉萍</option>
<option value="饶芳瑂">饶芳瑂</option>
<option value="任佩雯">任佩雯</option>
<option value="阮欣宁">阮欣宁</option>
<option value="阮愉雯">阮愉雯</option>
<option value="苏光顺">苏光顺</option>
<option value="沈垲钦">沈垲钦</option>
<option value="沈善妞">沈善妞</option>
<option value="苏秀芬">苏秀芬</option>
<option value="施彦均">施彦均</option>
<option value="汤颖杰">汤颖杰</option>
<option value="谭月玲">谭月玲</option>
<option value="吴彩玉">吴彩玉</option>
<option value="吴福喜">吴福喜</option>
<option value="万国明">万国明</option>
<option value="温慧晶">温慧晶</option>
<option value="王健杰">王健杰</option>
<option value="吴嘉敏">吴嘉敏</option>
<option value="魏锦松">魏锦松</option>
<option value="魏嘉欣">魏嘉欣</option>
<option value="魏铭誱">魏铭誱</option>
<option value="魏巧莹">魏巧莹</option>
<option value="吴荣霖">吴荣霖</option>
<option value="温绍芬">温绍芬</option>
<option value="伍淑婷">伍淑婷</option>
<option value="吴伟杰">吴伟杰</option>
<option value="王薇琳">王薇琳</option>
<option value="吴勇健">吴勇健</option>
<option value="巫殷仪">巫殷仪</option>
<option value="吴语莹">吴语莹</option>
<option value="谢光霖">谢光霖</option>
<option value="谢光明">谢光明</option>
<option value="徐惠菊">徐惠菊</option>
<option value="许丽兰">许丽兰</option>
<option value="许渼凌">许渼凌</option>
<option value="许秀莲">许秀莲</option>
<option value="许彦曦">许彦曦</option>
<option value="萧莹莹">萧莹莹</option>
<option value="许甄甄">许甄甄</option>
<option value="尤凤儿">尤凤儿</option>
<option value="杨健鸿">杨健鸿</option>
<option value="叶建勇">叶建勇</option>
<option value="杨洁盈">杨洁盈</option>
<option value="叶美琪">叶美琪</option>
<option value="颜梅英">颜梅英</option>
<option value="叶思成">叶思成</option>
<option value="杨丝霓">杨丝霓</option>
<option value="杨诗文">杨诗文</option>
<option value="叶穗影">叶穗影</option>
<option value="袁淑珍">袁淑珍</option>
<option value="杨雯欣">杨雯欣</option>
<option value="叶秀琼">叶秀琼</option>
<option value="颜学祥">颜学祥</option>
<option value="颜欣怡">颜欣怡</option>
<option value="叶欣怡">叶欣怡</option>
<option value="叶仲杰">叶仲杰</option>
<option value="杨芷莹">杨芷莹</option>
<option value="张彩年">张彩年</option>
<option value="赵楚萍">赵楚萍</option>
<option value="张德鸿">张德鸿</option>
<option value="张德健">张德健</option>
<option value="郑惠杰">郑惠杰</option>
<option value="张惠灵">张惠灵</option>
<option value="张惠雯">张惠雯</option>
<option value="郑俊伟">郑俊伟</option>
<option value="曾鉫鈊">曾鉫鈊</option>
<option value="张嘉玉">张嘉玉</option>
<option value="郑凯骏">郑凯骏</option>
<option value="曾可欣">曾可欣</option>
<option value="张隆培">张隆培</option>
<option value="朱凌欣">朱凌欣</option>
<option value="朱品璋">朱品璋</option>
<option value="赵淑佳">赵淑佳</option>
<option value="张诗莉">张诗莉</option>
<option value="张思敏">张思敏</option>
<option value="张淑云">张淑云</option>
<option value="钟思仪">钟思仪</option>
<option value="曾思颖">曾思颖</option>
<option value="张思韻">张思韻</option>
<option value="郑学郡">郑学郡</option>
<option value="郑欣铃">郑欣铃</option>
<option value="曾祥龙">曾祥龙</option>
<option value="张晓甜">张晓甜</option>
<option value="曾祥威">曾祥威</option>
<option value="郑伊惠">郑伊惠</option>
<option value="曾翊诗">曾翊诗</option>
<option value="郑羽攸">郑羽攸</option>
<option value="郑芷晗">郑芷晗</option>
<option value="曾振辉">曾振辉</option>
<option value="詹智全">詹智全</option>
<option value="Catherine Nadarajee">Catherine Nadarajee</option>
<option value="Edrin">Edrin</option>
<option value="Faridatul Khafizza">Faridatul Khafizza</option>
<option value="Hylmi">Hylmi</option>
<option value="Indra">Indra</option>
<option value="Kavitha">Kavitha</option>
<option value="KOKILA">KOKILA</option>
<option value="Siti Khairani Hasliza">Siti Khairani Hasliza</option>
<option value="NALINA">NALINA</option>
<option value="NIRMALLA">NIRMALLA</option>
<option value="SHAILAH SUBASH">SHAILAH SUBASH</option>
<option value="Siti Azirah">Siti Azirah</option>
<option value="Syafridah">Syafridah</option>
<option value="Vigneswary">Vigneswary</option>
<option value="Uma">Uma</option>
<option value="Yanti">Yanti</option>
<option value="Ymamageswary">Ymamageswary</option>
<option value="DESYPERMATASARI">DESYPERMATASARI</option>
<option value="FATIN">FATIN</option>
<option value="何丽娇">何丽娇</option>
</select>
								
<br><br>	
							</div>
							<div class="col-md-3">
								<h4>学习方向（可能涉及的项目请打✔）</h4>
								<input type="radio" id="apply_d" name="apply_d" value="1" required><label for="apply_d"><span style="color:blue">以研究为主</span></label><br>								
								<input type="radio" id="apply_d" name="apply_d" value="2"><label for="apply_d"><span style="color:red">以社会实践或社区服务为主</span></label><br>	
								<input type="radio" id="apply_d" name="apply_d" value="3"><label for="apply_d"><span style="color:green">以项目设计或技术实践为主</span></label><br>	
							</div>
							<div class="col-md-3">
								<h4 style="color:blue">以研究为主</h4>

								<input type="checkbox" id="apply_ds101" name="apply_ds101" value="1"><label for="apply_ds101">制定方案</label><br>
								<input type="checkbox" id="apply_ds102" name="apply_ds102" value="1"><label for="apply_ds102">调查</label><br>
								<input type="checkbox" id="apply_ds103" name="apply_ds103" value="1"><label for="apply_ds103">访问</label><br>
								<input type="checkbox" id="apply_ds104" name="apply_ds104" value="1"><label for="apply_ds104">观察</label><br>
								<input type="checkbox" id="apply_ds105" name="apply_ds105" value="1"><label for="apply_ds105">实验</label><br>
								<input type="checkbox" id="apply_ds106" name="apply_ds106" value="1"><label for="apply_ds106">统计</label><br>
								<input type="checkbox" id="apply_ds107" name="apply_ds107" value="1"><label for="apply_ds107">信息收集与处理</label><br>
								<input type="checkbox" id="apply_ds108" name="apply_ds108" value="1"><label for="apply_ds108">其他</label><br>

							</div>		
							
							<div class="col-md-3">
								<h4 style="color:red">以社会实践或社区服务为主</h4>
								
								<input type="checkbox" id="apply_ds201" name="apply_ds201" value="1"><label for="apply_ds201">参观</label><br>
								<input type="checkbox" id="apply_ds202" name="apply_ds202" value="1"><label for="apply_ds202">考察</label><br>
								<input type="checkbox" id="apply_ds203" name="apply_ds203" value="1"><label for="apply_ds203">服务</label><br>
								<input type="checkbox" id="apply_ds204" name="apply_ds204" value="1"><label for="apply_ds204">宣传</label><br>
								<input type="checkbox" id="apply_ds205" name="apply_ds205" value="1"><label for="apply_ds205">义务劳动</label><br>
								<input type="checkbox" id="apply_ds206" name="apply_ds206" value="1"><label for="apply_ds206">经济活动</label><br> 
								<input type="checkbox" id="apply_ds207" name="apply_ds207" value="1"><label for="apply_ds207">其他</label><br>

							</div>							
	
							<div class="col-md-3">
								<h4 style="color:green">以项目设计或技术实践为主</h4>

								<input type="checkbox" id="apply_ds301" name="apply_ds301" value="1"><label for="apply_ds301">项目立项与研究</label><br>
								<input type="checkbox" id="apply_ds302" name="apply_ds302" value="1"><label for="apply_ds302">设计</label><br>
								<input type="checkbox" id="apply_ds303" name="apply_ds303" value="1"><label for="apply_ds303">制作</label><br>
								<input type="checkbox" id="apply_ds304" name="apply_ds304" value="1"><label for="apply_ds304">研制</label><br>
								<input type="checkbox" id="apply_ds305" name="apply_ds305" value="1"><label for="apply_ds305">种植</label><br>
								<input type="checkbox" id="apply_ds306" name="apply_ds306" value="1"><label for="apply_ds306">养殖</label><br>
								<input type="checkbox" id="apply_ds307" name="apply_ds307" value="1"><label for="apply_ds307">信息发布</label><br>
								<input type="checkbox" id="apply_ds308" name="apply_ds308" value="1"><label for="apply_ds308">科技小发明</label><br>
								<input type="checkbox" id="apply_ds309" name="apply_ds309" value="1"><label for="apply_ds309">小制作</label><br>
								<input type="checkbox" id="apply_ds310" name="apply_ds310" value="1"><label for="apply_ds310">其他</label><br>

							</div>

							
							<div class="col-md-12">
								
								<h4>项目简介（简单叙述动机、目的、方法等等）<h4>
								<textarea class="form-control" rows="8" name="apply_desc" pattern="[A-Za-z0-9]{1,20}" required></textarea><br><br>
								<script>CKEDITOR.replace( 'apply_desc' );</script>
								
							<div align="center"><button type="submit" class="btn btn-primary" title="提交申请表">提交申请表</button></div>
							</div>
						</form>

			<?php

				}
			?>

					</div>
				</div>
			</div>
		</div>

		
		
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
