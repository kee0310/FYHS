<meta charset="utf-8">
<?php
include('connect.php');

include("connect2.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM course_detail where course_id='$id'");
			while($row = mysql_fetch_array($result))
			{

				$totallimit =$row['course_student_limit'];
			}


			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM course_selection where course_id='$id'", $link);
			$num_rows = mysql_num_rows($result);
					



			if($num_rows >= $totallimit)
			{

				echo '<script language="javascript">';
				echo 'alert("课程人数已达上限，无法进行选课")';
				echo '</script>';				
				echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_subject_all_list.php>";

			}
			
			else{


			date_default_timezone_set("Asia/Kuala_Lumpur");
			$date = date('YmdHis', time());

			$course_id=$_POST['course_id'];
			$course_content_code=$_POST['course_content_code'];
			$course_class_day=$_POST['course_class_day'];
			$course_class_upperlower=$_POST['upperlower'];
			$course_half_one=$_POST['halfone'];
			$course_title=$_POST['course_title'];
			$course_class_year=$_POST['course_class_year'];
			$student_number=$_POST['student_number'];
			$course_select_time=$date;
			$course_select_ip=$_SERVER['REMOTE_ADDR'];

				$sql = "INSERT INTO course_selection (course_id,course_class_day,course_class_upperlower,course_half_one,course_title,course_class_year,student_number,course_select_time,course_select_ip,course_content_code)
				VALUES (N'$course_id',N'$course_class_day',N'$course_class_upperlower',N'$course_half_one',N'$course_title',N'$course_class_year',N'$student_number',N'$course_select_time',N'$course_select_ip',N'$course_content_code')";

				

				if (mysqli_query($conn, $sql)) {


			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM course_detail where course_id='$id'");
			while($row = mysql_fetch_array($result))
			{

				$totallimit_after =$row['course_student_limit'];
			}


			$id=$_GET['id'];
			$result = mysql_query("

WITH order_values AS(
    SELECT 
        course_selection_id,course_id,student_number,
        RANK() OVER (
            ORDER BY course_selection_id ASC
        ) selection_rank
    FROM
        course_selection
    WHERE 
    	course_id='$id'
)
SELECT 
    * 
FROM 
    order_values
WHERE 
    course_id='$id' and student_number='$student_number';

						 ");



			$data=mysql_fetch_assoc($result);

			$num_rows_after = $data['selection_rank'];


			if($num_rows_after > $totallimit_after)
			{

			$course_id=$_POST['course_id'];
			$student_number=$_POST['student_number'];
			mysql_query("DELETE FROM course_selection WHERE course_id='$course_id' and student_number='$student_number'");

				echo '<script language="javascript">';
				echo 'alert("课程人数已达上限，无法进行选课")';
				echo '</script>';	
			
				echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_subject_all_list.php>";

			}
			
			else{
				
				echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_subject_all_list.php>";

								exit();
								} 

					
			}

							else {
    								echo "Error: " . $sql . "<br>" . mysqli_error($conn);
								}



				

			}

 
			mysqli_close($conn); ?>