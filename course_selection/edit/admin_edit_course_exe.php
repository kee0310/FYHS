<?php

	include("connect.php");


			$id = $_POST['course_id'];
			$course_title=$_POST['course_title'];
			$course_teacher=$_POST['course_teacher'];
			$course_english_title=$_POST['course_english_title'];
			$course_class_year=$_POST['course_class_year'];
			$course_half_one=$_POST['course_half_one'];
			$course_class_day=$_POST['course_class_day'];
			$course_teacher_studylevel=$_POST['course_teacher_studylevel'];
			
			$course_teacher_exp11=$_POST['course_teacher_exp11'];
			$course_teacher_exp12=$_POST['course_teacher_exp12'];
			$course_teacher_exp21=$_POST['course_teacher_exp21'];
			$course_teacher_exp22=$_POST['course_teacher_exp22'];
			$course_teacher_exp31=$_POST['course_teacher_exp31'];
			$course_teacher_exp32=$_POST['course_teacher_exp32'];
			
			$course_place=$_POST['course_place'];
			$course_type=$_POST['course_type'];
			$course_require=$_POST['course_require'];			
			$course_intro=$_POST['course_intro'];
			
			$course_content11=$_POST['course_content11'];
			$course_content12=$_POST['course_content12'];
			$course_content21=$_POST['course_content21'];
			$course_content22=$_POST['course_content22'];			
			$course_content31=$_POST['course_content31'];
			$course_content32=$_POST['course_content32'];			
			$course_content41=$_POST['course_content41'];
			$course_content42=$_POST['course_content42'];			
			$course_content51=$_POST['course_content51'];
			$course_content52=$_POST['course_content52'];			
			$course_content61=$_POST['course_content61'];
			$course_content62=$_POST['course_content62'];
			$course_content71=$_POST['course_content71'];
			$course_content72=$_POST['course_content72'];			
			$course_content81=$_POST['course_content81'];
			$course_content82=$_POST['course_content82'];			
			$course_content91=$_POST['course_content91'];
			$course_content92=$_POST['course_content92'];			
			$course_content101=$_POST['course_content101'];
			$course_content102=$_POST['course_content102'];				
			$course_content111=$_POST['course_content111'];
			$course_content112=$_POST['course_content112'];
			$course_content121=$_POST['course_content121'];
			$course_content122=$_POST['course_content122'];			
			$course_content131=$_POST['course_content131'];
			$course_content132=$_POST['course_content132'];			
			$course_content141=$_POST['course_content141'];
			$course_content142=$_POST['course_content142'];			
			$course_content151=$_POST['course_content151'];
			$course_content152=$_POST['course_content152'];				
			$course_content161=$_POST['course_content161'];
			$course_content162=$_POST['course_content162'];
			$course_content171=$_POST['course_content171'];
			$course_content172=$_POST['course_content172'];			
			$course_content181=$_POST['course_content181'];
			$course_content182=$_POST['course_content182'];			
			$course_content191=$_POST['course_content191'];
			$course_content192=$_POST['course_content192'];			
			$course_content201=$_POST['course_content201'];
			$course_content202=$_POST['course_content202'];				
			
			
			$course_material=$_POST['course_material'];
			
			$course_mark1=$_POST['course_mark1'];
			$course_mark2=$_POST['course_mark2'];
			$course_mark3=$_POST['course_mark3'];
			$course_mark4=$_POST['course_mark4'];
			$course_mark5=$_POST['course_mark5'];
			
			$course_class_upperlower=$_POST['course_class_upperlower'];	
			$course_student_limit=$_POST['course_student_limit'];	
			$course_form=$_POST['course_form'];
			$course_showhide=$_POST['course_showhide'];


	mysql_query("UPDATE course_detail SET course_title=N'$course_title', course_teacher=N'$course_teacher', course_english_title=N'$course_english_title', course_class_year=N'$course_class_year' , course_half_one=N'$course_half_one' ,course_class_day=N'$course_class_day', course_teacher_studylevel=N'$course_teacher_studylevel', 
	course_teacher_exp11=N'$course_teacher_exp11', 
	course_teacher_exp12=N'$course_teacher_exp12', 
	course_teacher_exp21=N'$course_teacher_exp21', 
	course_teacher_exp22=N'$course_teacher_exp22', 
	course_teacher_exp31=N'$course_teacher_exp31', 
	course_teacher_exp32=N'$course_teacher_exp32', 
	course_place=N'$course_place', course_type=N'$course_type', course_require=N'$course_require', course_intro=N'$course_intro', 
	course_content11=N'$course_content11', 
	course_content12=N'$course_content12', 
	course_content21=N'$course_content21', 
	course_content22=N'$course_content22', 
	course_content31=N'$course_content31', 
	course_content32=N'$course_content32', 
	course_content41=N'$course_content41', 
	course_content42=N'$course_content42', 
	course_content51=N'$course_content51', 
	course_content52=N'$course_content52', 	
	course_content61=N'$course_content61', 
	course_content62=N'$course_content62', 
	course_content71=N'$course_content71', 
	course_content72=N'$course_content72', 
	course_content81=N'$course_content81', 	
	course_content82=N'$course_content82', 
	course_content91=N'$course_content91', 
	course_content92=N'$course_content92', 
	course_content101=N'$course_content101', 
	course_content102=N'$course_content102', 	
	course_content111=N'$course_content111', 
	course_content112=N'$course_content112', 
	course_content121=N'$course_content121', 
	course_content122=N'$course_content122', 
	course_content131=N'$course_content131', 
	course_content132=N'$course_content132', 
	course_content141=N'$course_content141', 
	course_content142=N'$course_content142', 
	course_content151=N'$course_content151', 
	course_content152=N'$course_content152', 	
	course_content161=N'$course_content161', 
	course_content162=N'$course_content162', 
	course_content171=N'$course_content171', 
	course_content172=N'$course_content172', 
	course_content181=N'$course_content181', 	
	course_content182=N'$course_content182', 
	course_content191=N'$course_content191', 
	course_content192=N'$course_content192', 
	course_content201=N'$course_content201', 
	course_content202=N'$course_content202', 		
	course_material=N'$course_material', 
	course_mark1=N'$course_mark1', 
	course_mark2=N'$course_mark2', 
	course_mark3=N'$course_mark3', 
	course_mark4=N'$course_mark4', 
	course_mark5=N'$course_mark5', 
	course_class_upperlower=N'$course_class_upperlower', course_student_limit=N'$course_student_limit', course_form=N'$course_form', course_showhide=N'$course_showhide' WHERE course_id='$id' ");



	header("location: ../admin_view_course.php?id=$id");
?>