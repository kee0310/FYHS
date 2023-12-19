<?php
session_start();
require('connect.php');
$md = $_REQUEST['id'];

include("auth.php");
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

.p{font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;}

.f{font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;}
</style>
</head>

<body oncontextmenu="return false;">

	<?php
	
			$header = file_get_contents('header_student.php');
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
			<div style="height: 20px"></div>

<!--/.mark-->
			<div class="col-lg-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						学生分数
					</div>
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
						分数1：计划书<br>
						分数2：实践报告（答辩前）<br>
						分数3：答辩表现<br>
						分数4：实践报告（答辩后）<br>
						分数5：指导老师评分
					</div>
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
						<table data-toggle="table" data-select-item-name="toolbar1" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
						    <thead>
						    <tr>
								<th>Group Code</th>
								<th>组长/组员</th>
								<th>中文名称</th>
								<th>英文名称</th>
								<th>总分：100%</th>
								<th>Grade</th>
						    </tr>
							</thead>
							<tbody>

							
<?php
	include('connect.php');

			$id = $_SESSION['username'];
			$result = mysql_query("

			SELECT *
			FROM zstudent_mark a
			where a.student_number='$id'
			
			");
			while($row = mysql_fetch_array($result))
			{


				
?>


						    <tr>
							<td><?php echo $row['group_code']; ?></td>
							<td><?php echo $row['mark_role']; ?></td>
							<td><?php echo $row['mark_topic']; ?></td>
							<td><?php echo $row['mark_topiceg']; ?></td>								
							
							<td><?php 
							
							$mark01 = $row['mark_pdf01'] + $row['mark_pdf02'] + $row['mark_pdf03'];
							$mark02 = ($row['mark_report01'] + $row['mark_report02'] + $row['mark_report03'])/3;
							$mark03 = ($row['mark_present01'] + $row['mark_present02'] + $row['mark_present03'])/3;
							
							$totalmark = $mark01 + $mark02 + $mark03 + $row['mark_finalreport'] + $row['mark_individual'];
							
							
							echo round($totalmark,1);  ?>

							
							</td>
							
							<td><?php echo $row['mark_grade']; ?></td>	
						    </tr>
					
				<?php 

			}
?>						

						    </tbody>
						</table>
					</div>
						
				</div>

			</div>


			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;height: auto">
						学生个人资料
					</div>
					<div class="panel-body" style="height: auto">
<?php
			include('connect.php');
	
			$id = $_SESSION['username'];
			$result = mysql_query("

			SELECT *
			FROM zstudent_detail
			where zstudent_detail.student_number='$id'
			
			
			");
			while($row = mysql_fetch_array($result))
			{

 ?>					
					
						<p style="font-size: 18px ; font-weight: 500"><?php echo $row['student_name']; ?></p>
						<p style="font-size: 18px ; font-weight: 500"><?php echo $row['student_class']; ?></p>
						<p style="font-size: 14px ; font-weight: 500">如显示的资料有错误，请电邮到 <a href = "mailto:ziwei@fyk.edu.my" title="电邮">ziwei@fyk.edu.my</a>。</p>
						
<?php
		}
?>							
					</div>
					

					<div class="panel-body" style="height: auto">
					
<?php
require('db.php');


			$id = $_SESSION['username'];

			$result = mysql_query("SELECT count(*) as total,group_leader from zstudent_group where student_number='$id'");
			$data=mysql_fetch_assoc($result);
{

							if($data['total'] == 1 && $data['group_leader'] == 1){
								
							echo '<p style="font-size: 18px ; font-weight: 500">组长</p>';
							echo '<form role="form" action="add/group_member01_exe.php" method="post">';
							?>
							<input name="student_number" value="" required>
							<input type="hidden" name="group_code" value="<?php $id = $_SESSION['username']; echo $id; ?>">
							<?php
							echo '<input type="hidden" name="group_leader" value="0">';
							echo '<button type="submit" class="btn btn-primary">添加组员</button>';
								
							echo'</form>';


							
							}
							elseif($data['total'] == 1 && $data['group_leader'] == 0){
								
							echo '<p style="font-size: 18px ; font-weight: 500">你是组员，请耐心等候组长添加队友和编辑。</p>';

								
							}
							elseif($data['total'] >= 2){
								
								echo "System Error";
								
							}							
							else{ 
								
							echo '<p style="font-size: 18px ; font-weight: 500">开始组队的学生，系统将自动默认为组长。</p>';
							echo '<form role="form" action="add/group_member_exe.php" method="post">';
							?>
							<input type="hidden" name="student_number" value="<?php $id = $_SESSION['username']; echo $id; ?>">
							<input type="hidden" name="group_code" value="<?php $id = $_SESSION['username']; echo $id; ?>">
							<?php
							echo '<input type="hidden" name="group_leader" value="1">';
							echo '<button type="submit" class="btn btn-primary">开始组队</button>';
								
							echo'</form>';
							
							} 
							
							}							
							?>	
					</div>					
					
					
					
				</div>
			</div>

		
			<div class="col-md-9">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;height: auto">
						成员：4 至 10 位同学为一组，目前人数：
<?php
require('db.php');
			$id = $_SESSION['username'];
			$result = mysql_query("SELECT * FROM zstudent_group WHERE student_number='$id'");
			$row = mysql_fetch_assoc($result); 
			$group_code = $row['group_code'];	

			$id = $_SESSION['username'];
			$result = mysql_query("SELECT count(*) as abc FROM zstudent_group WHERE group_code='$group_code'");
			$data = mysql_fetch_assoc($result); 
			{
			echo $data['abc'];						
			}			
?>			
						
					</div>
					<div class="panel-body" style="height: auto">
					
<?php
	include('connect.php');

			$id = $_SESSION['username'];
			$result = mysql_query("SELECT * FROM zstudent_group WHERE student_number='$id'");
			$row = mysql_fetch_assoc($result); 
			$group_code = $row['group_code'];	

	
			$id = $_SESSION['username'];
			$result = mysql_query("

			SELECT a.student_number,b.student_name,b.student_class,a.group_leader,a.group_id,a.group_code
			FROM zstudent_group a
			JOIN zstudent_detail b 
			ON a.student_number=b.student_number
			where a.group_code='$group_code'
			ORDER BY a.group_leader DESC
			
			");
			while($row = mysql_fetch_array($result))
			{


				
?>
						<p style="font-family: 楷体, KaiTi; font-size: 14pt;line-height: 1.6;">					
					
						<?php
						if($row['group_leader'] == 1)
						{
							echo "组长   " ;
						}
						else{
							echo "组员   ";
						}
						?>   
						学号：<?php echo $row['student_number']; ?>   姓名：<?php echo $row['student_name']; ?>   班级：<?php echo $row['student_class']; ?>
						
				<?php 
				if($row['group_code'] == $id && $row['student_number'] != $id)
				{
					echo '<a href="deletegroupmember.php?id='.$row['group_id'].'">退出组员</a>';		
					
				}	
				else{ 
					echo'';
				}
					?>	
						
						</p>						
				<?php 

			}
?>						
						
					</div>
				</div>
			</div>
	

			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						实践活动项目
					</div>

					
<?php
	include('connect.php');

			$id = $_SESSION['username'];
			$result = mysql_query("SELECT * FROM zstudent_group WHERE student_number='$id'");
			$row = mysql_fetch_assoc($result); 
			$group_code = $row['group_code'];	

	
			$id = $_SESSION['username'];
			$result = mysql_query("

			SELECT *
			FROM zgroup_detail
			where group_code='$group_code'

			
			");
			while($row = mysql_fetch_array($result))
			{


				
?>
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
						项目是否批准：
						<?php 
									if($row['apply_approved'] == 1)
										{ echo "<span style='color:green'>批准</span>" ;}
									elseif($row['apply_approved'] == 0)
										{ echo "<span style='color:red'>不批准</span>" ;}
									elseif($row['apply_approved'] == 2)
										{ echo "<span style='color:blue'>未审查</span>" ;}
									else
										{ echo "Error" ;}											
						?>
					</div>	
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; border-bottom: 1px solid #000;">
						备注、回馈：<?php echo $row['apply_comment']; ?>
					</div>	
					<div class="panel-body" style="height: auto">
						<p style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">					
					
  
						项目名称：<?php echo $row['apply_topic']; ?><?php echo $row['apply_topiceg']; ?><br>
						学习方向：<?php 
									if($row['apply_d'] == 1)
										{ echo "<span style='color:blue'>以研究为主：</span>" ;}
									elseif($row['apply_d'] == 2)
										{ echo "<span style='color:blue'>以社会实践或社区服务为主：</span>" ;}
									else
										{ echo "<span style='color:blue'>以项目设计或技术实践为主：</span>" ;}						
									?>
									<?php 
									if($row['apply_d'] == 1)
									{ 
if($row['apply_ds101'] == 1){ echo"制定方案 |";}else{}
if($row['apply_ds102'] == 1){ echo"调查 |";}else{}
if($row['apply_ds103'] == 1){ echo"访问 |";}else{}
if($row['apply_ds104'] == 1){ echo"观察 |";}else{}
if($row['apply_ds105'] == 1){ echo"实验 |";}else{}
if($row['apply_ds106'] == 1){ echo"统计 |";}else{}
if($row['apply_ds107'] == 1){ echo"信息收集与处理 |";}else{}
if($row['apply_ds108'] == 1){ echo"其他 |";}else{}
									}
									elseif($row['apply_d'] == 2)
									{ 
if($row['apply_ds201'] == 1){ echo"参观 |";}else{}
if($row['apply_ds202'] == 1){ echo"考察 |";}else{}
if($row['apply_ds203'] == 1){ echo"服务 |";}else{}
if($row['apply_ds204'] == 1){ echo"宣传 |";}else{}
if($row['apply_ds205'] == 1){ echo"义务劳动 |";}else{}
if($row['apply_ds206'] == 1){ echo"经济活动 |";}else{}
if($row['apply_ds207'] == 1){ echo"其他 |";}else{}
									}
									else
									{
if($row['apply_ds301'] == 1){ echo"项目立项与研究 |";}else{}
if($row['apply_ds302'] == 1){ echo"设计 |";}else{}
if($row['apply_ds303'] == 1){ echo"制作 |";}else{}
if($row['apply_ds304'] == 1){ echo"研制 |";}else{}
if($row['apply_ds305'] == 1){ echo"种植 |";}else{}
if($row['apply_ds306'] == 1){ echo"养殖 |";}else{}
if($row['apply_ds307'] == 1){ echo"信息发布 |";}else{}
if($row['apply_ds308'] == 1){ echo"科技小发明 |";}else{}
if($row['apply_ds309'] == 1){ echo"小制作 |";}else{}
if($row['apply_ds310'] == 1){ echo"其他 |";}else{}
									}						
									?><br>
						项目简介（简单叙述动机、目的、方法等等）：<br><?php echo $row['apply_desc']; ?>

						</p>	
					</div>
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
						指导老师：<?php echo $row['apply_teacher']; ?>
					</div>
					
				<?php 

			}
?>						
						
				</div>
			</div>


<!--/.budget-->
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						实践活动预算案
					</div>

					
<?php
	include('connect.php');

			$id = $_SESSION['username'];
			$result = mysql_query("SELECT * FROM zstudent_group WHERE student_number='$id'");
			$row = mysql_fetch_assoc($result); 
			$group_code = $row['group_code'];	

	
			$id = $_SESSION['username'];
			$result = mysql_query("

			SELECT *
			FROM zgroup_budget
			where group_code='$group_code'

			
			");
			while($row = mysql_fetch_array($result))
			{


				
?>

					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; border-bottom: 1px solid #000;">
						备注、回馈：<?php echo $row['budget_comment']; ?>
					</div>	
					<div class="panel-body" style="height: auto">
									
						<table data-toggle="table" data-select-item-name="toolbar1" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
						    <thead>
						    <tr>
								<th>序号</th>
								<th>项目</th>
								<th>数额（RM）</th>
								<th>审批</th>
						    </tr>
							</thead>
							<tbody>
						    <tr>
							<td>1</td><td><?php echo $row['budget_101']; ?></td><td><?php echo $row['budget_102']; ?>.00</td>
							<td>
								<?php 
									if($row['budget_103'] == 1)
										{ echo "<span style='color:green'>批准</span>" ;}
									elseif($row['budget_103'] == 0)
										{ echo "<span style='color:red'>不批准</span>" ;}
									elseif($row['budget_103'] == 2)
										{ echo "<span style='color:blue'>未审查</span>" ;}
									else
										{ echo "Error" ;}											
								?>							
							</td>
						    </tr>
							
						    <tr>
							<td>2</td><td><?php echo $row['budget_201']; ?></td><td><?php echo $row['budget_202']; ?>.00</td>
							<td>
								<?php 
									if($row['budget_203'] == 1)
										{ echo "<span style='color:green'>批准</span>" ;}
									elseif($row['budget_203'] == 0)
										{ echo "<span style='color:red'>不批准</span>" ;}
									elseif($row['budget_203'] == 2)
										{ echo "<span style='color:blue'>未审查</span>" ;}
									else
										{ echo "Error" ;}											
								?>							
							</td>
						    </tr>
							
						    <tr>
							<td>3</td><td><?php echo $row['budget_301']; ?></td><td><?php echo $row['budget_302']; ?>.00</td>
							<td>
								<?php 
									if($row['budget_303'] == 1)
										{ echo "<span style='color:green'>批准</span>" ;}
									elseif($row['budget_303'] == 0)
										{ echo "<span style='color:red'>不批准</span>" ;}
									elseif($row['budget_303'] == 2)
										{ echo "<span style='color:blue'>未审查</span>" ;}
									else
										{ echo "Error" ;}											
								?>							
							</td>
						    </tr>							
							
						    <tr>
							<td>4</td><td><?php echo $row['budget_401']; ?></td><td><?php echo $row['budget_402']; ?>.00</td>
							<td>
								<?php 
									if($row['budget_403'] == 1)
										{ echo "<span style='color:green'>批准</span>" ;}
									elseif($row['budget_403'] == 0)
										{ echo "<span style='color:red'>不批准</span>" ;}
									elseif($row['budget_403'] == 2)
										{ echo "<span style='color:blue'>未审查</span>" ;}
									else
										{ echo "Error" ;}											
								?>							
							</td>
						    </tr>							
							
						    <tr>
							<td>5</td><td><?php echo $row['budget_501']; ?></td><td><?php echo $row['budget_502']; ?>.00</td>
							<td>
								<?php 
									if($row['budget_503'] == 1)
										{ echo "<span style='color:green'>批准</span>" ;}
									elseif($row['budget_503'] == 0)
										{ echo "<span style='color:red'>不批准</span>" ;}
									elseif($row['budget_503'] == 2)
										{ echo "<span style='color:blue'>未审查</span>" ;}
									else
										{ echo "Error" ;}											
								?>							
							</td>
						    </tr>							
							
						    <tr>
							<td>6</td><td><?php echo $row['budget_601']; ?></td><td><?php echo $row['budget_602']; ?>.00</td>
							<td>
								<?php 
									if($row['budget_603'] == 1)
										{ echo "<span style='color:green'>批准</span>" ;}
									elseif($row['budget_603'] == 0)
										{ echo "<span style='color:red'>不批准</span>" ;}
									elseif($row['budget_603'] == 2)
										{ echo "<span style='color:blue'>未审查</span>" ;}
									else
										{ echo "Error" ;}											
								?>							
							</td>
						    </tr>							
							
						    <tr>
							<td>7</td><td><?php echo $row['budget_701']; ?></td><td><?php echo $row['budget_702']; ?>.00</td>
							<td>
								<?php 
									if($row['budget_703'] == 1)
										{ echo "<span style='color:green'>批准</span>" ;}
									elseif($row['budget_703'] == 0)
										{ echo "<span style='color:red'>不批准</span>" ;}
									elseif($row['budget_703'] == 2)
										{ echo "<span style='color:blue'>未审查</span>" ;}
									else
										{ echo "Error" ;}											
								?>							
							</td>
						    </tr>							

						    <tr>
							<td>8</td><td><?php echo $row['budget_801']; ?></td><td><?php echo $row['budget_802']; ?>.00</td>
							<td>
								<?php 
									if($row['budget_803'] == 1)
										{ echo "<span style='color:green'>批准</span>" ;}
									elseif($row['budget_803'] == 0)
										{ echo "<span style='color:red'>不批准</span>" ;}
									elseif($row['budget_803'] == 2)
										{ echo "<span style='color:blue'>未审查</span>" ;}
									else
										{ echo "Error" ;}											
								?>							
							</td>
						    </tr>
						    <tr>
							<td></td><td></td><td>
							<?php 
							
							$totalbudget = $row['budget_102'] + $row['budget_202'] + $row['budget_302'] + 
							$row['budget_402'] + $row['budget_502'] + $row['budget_602'] + $row['budget_702'] + 
							$row['budget_802'];
							
							echo $totalbudget; 
							
							?>.00
							</td><td></td>
						    </tr>							
						    </tbody>
						</table>							
					<br>	
					<div class="f" >

								此计划书及预算案已获得小组成员全员认可并同意呈交。
								<?php 
									if($row['budget_policy01'] == 1)
										{ echo "<span style='color:green'>同意</span>" ;}
									elseif($row['budget_policy01'] == 0)
										{ echo "<span style='color:red'>不同意</span>" ;}
									else
										{ echo "Error" ;}											
								?>									
								<br>
								此计划书及预算案已获得指导老师审批并赞同呈交。
								<?php 
									if($row['budget_policy02'] == 1)
										{ echo "<span style='color:green'>同意</span>" ;}
									elseif($row['budget_policy02'] == 0)
										{ echo "<span style='color:red'>不同意</span>" ;}
									else
										{ echo "Error" ;}											
								?>									

					</div>
					
					
				<?php 

			}
?>						
						
				</div>
			</div>

			
		</div><!--/.row-->


<!--/.pdf01-->
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						实践活动计划书
					</div>

					
<?php
	include('connect.php');

			$id = $_SESSION['username'];
			$result = mysql_query("SELECT * FROM zstudent_group WHERE student_number='$id'");
			$row = mysql_fetch_assoc($result); 
			$group_code = $row['group_code'];	

	
			$id = $_SESSION['username'];
			$result = mysql_query("

			SELECT *
			FROM zgroup_pdf
			where group_code='$group_code'

			
			");
			while($row = mysql_fetch_array($result))
			{
			
?>

					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
						活动计划书：<a href="pdf/<?php echo $row['pdf_file']; ?>" target="_blank" title="<?php echo $row['pdf_file']; ?>"><?php echo $row['pdf_file']; ?></a>
						&nbsp;&nbsp;
						提交日期：<?php echo $row['pdf_date']; ?>
					</div>	

					
				<?php 

			}
?>						
						
				</div>
			</div>
<!--/.pdf02-->
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						实践活动报告
					</div>

					
<?php
	include('connect.php');

			$id = $_SESSION['username'];
			$result = mysql_query("SELECT * FROM zstudent_group WHERE student_number='$id'");
			$row = mysql_fetch_assoc($result); 
			$group_code = $row['group_code'];	

	
			$id = $_SESSION['username'];
			$result = mysql_query("

			SELECT *
			FROM zgroup_pdf02
			where group_code='$group_code'

			
			");
			while($row = mysql_fetch_array($result))
			{
			
?>

					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
						活动报告：<a href="pdf02/<?php echo $row['pdf_file']; ?>" target="_blank" title="<?php echo $row['pdf_file']; ?>"><?php echo $row['pdf_file']; ?></a>
						&nbsp;&nbsp;
						提交日期：<?php echo $row['pdf_date']; ?>
					</div>	

					
				<?php 

			}
?>						
						
				</div>
			</div>

<!--/.pdf03-->
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						最终实践活动报告
					</div>

					
<?php
	include('connect.php');

			$id = $_SESSION['username'];
			$result = mysql_query("SELECT * FROM zstudent_group WHERE student_number='$id'");
			$row = mysql_fetch_assoc($result); 
			$group_code = $row['group_code'];	

	
			$id = $_SESSION['username'];
			$result = mysql_query("

			SELECT *
			FROM zgroup_pdf03
			where group_code='$group_code'

			
			");
			while($row = mysql_fetch_array($result))
			{
			
?>

					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
						最终活动报告：<a href="pdf03/<?php echo $row['pdf_file']; ?>" target="_blank" title="<?php echo $row['pdf_file']; ?>"><?php echo $row['pdf_file']; ?></a>
						&nbsp;&nbsp;
						提交日期：<?php echo $row['pdf_date']; ?>
					</div>	

					
				<?php 

			}
?>						
						
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
