<?php
require('connect.php');
include("auth_admin.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>学生课外实践活动</title>

<style>
.f{font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;}
.g{font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.6;padding-left: 5px;}
.h{font-family: 楷体, KaiTi; font-size: 13pt; line-height: 1.2;padding-left: 5px;padding-right: 5px;}
</style>
</head>
<body onload="window.print()">
			
<table style="width: 100%">
<tbody>
<tr>
<td style="width: 50%;vertical-align: top;">


						<table style="width: 100%; border-collapse: collapse;" border="1" >
							<thead>
						    <tr>		
						        <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;font-weight: bold;width: 20%" colspan="2">2023 年实践活动计划申请表</th>
						    </tr>
						

					<?php
							include('connect.php');
							
							$id=$_GET['id'];
							$result = mysql_query("

							SELECT *
							FROM zgroup_detail a
							JOIN zstudent_detail b
							ON a.group_code = b.student_number
							WHERE a.apply_id = '$id'


							");
							while($row = mysql_fetch_array($result))
								{		
?>

						    <tr>		
						        <td style="width: 20%" class="f" align="center">Group Code</td>
								<td class="g" align="justify"><?php echo $row["group_code"] ; ?>&nbsp;&nbsp;<?php echo $row["student_name"] ; ?>&nbsp;&nbsp;<?php echo $row["student_class"] ; ?></td>
						    </tr>
						    <tr>		
						        <td class="f" align="center">项目名称</td>
								<td class="g" align="justify"><?php echo $row["apply_topic"] ; ?></td>
						    </tr>							
						    <tr>		
						        <td class="f" align="center">学习方向</td>
								<td class="g" align="justify">
<?php 
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
									?>
								
								</td>
						    </tr>
						    <tr>		
						        <td class="f" align="center">项目简介</td>
								<td class="h" align="justify"><?php echo $row["apply_desc"] ; ?></td>
						    </tr>	
						    <tr>		
						        <td class="f" align="center">指导老师</td>
								<td class="g" align="justify"><?php echo $row["apply_teacher"] ; ?></td>
						    </tr>
						    <tr>		
						        <td class="f" align="center">评语</td>
								<td class="g" align="justify"><?php echo $row["apply_comment"] ; ?></td>
						    </tr>
						    <tr>		
						        <td class="f" align="center">填写时间</td>
								<td class="g" align="justify"><?php echo $row["apply_date"] ; ?></td>
						    </tr>							
<?php
								}
?>
							
							</thead>
						</table>
</td>

</tr>
</tbody>
</table>

</body>
</html>