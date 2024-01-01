<meta charset="utf-8">
<?php
include('exe/connect.php');

include("connect2.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}



date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('Y/m/d H:i:s', time());

$group_code = $_POST['group_code'];
$apply_topic = $_POST['apply_topic'];
$apply_teacher = $_POST['apply_teacher'];
$apply_d = $_POST['apply_d'];


$apply_ds101 = isset($_POST["apply_ds101"]) ? $_POST["apply_ds101"] : '0';
$apply_ds102 = isset($_POST["apply_ds102"]) ? $_POST["apply_ds102"] : '0';
$apply_ds103 = isset($_POST["apply_ds103"]) ? $_POST["apply_ds103"] : '0';
$apply_ds104 = isset($_POST["apply_ds104"]) ? $_POST["apply_ds104"] : '0';
$apply_ds105 = isset($_POST["apply_ds105"]) ? $_POST["apply_ds105"] : '0';
$apply_ds106 = isset($_POST["apply_ds106"]) ? $_POST["apply_ds106"] : '0';
$apply_ds107 = isset($_POST["apply_ds107"]) ? $_POST["apply_ds107"] : '0';
$apply_ds108 = isset($_POST["apply_ds108"]) ? $_POST["apply_ds108"] : '0';

$apply_ds201 = isset($_POST["apply_ds201"]) ? $_POST["apply_ds201"] : '0';
$apply_ds202 = isset($_POST["apply_ds202"]) ? $_POST["apply_ds202"] : '0';
$apply_ds203 = isset($_POST["apply_ds203"]) ? $_POST["apply_ds203"] : '0';
$apply_ds204 = isset($_POST["apply_ds204"]) ? $_POST["apply_ds204"] : '0';
$apply_ds205 = isset($_POST["apply_ds205"]) ? $_POST["apply_ds205"] : '0';
$apply_ds206 = isset($_POST["apply_ds206"]) ? $_POST["apply_ds206"] : '0';
$apply_ds207 = isset($_POST["apply_ds207"]) ? $_POST["apply_ds207"] : '0';

$apply_ds301 = isset($_POST["apply_ds301"]) ? $_POST["apply_ds301"] : '0';
$apply_ds302 = isset($_POST["apply_ds302"]) ? $_POST["apply_ds302"] : '0';
$apply_ds303 = isset($_POST["apply_ds303"]) ? $_POST["apply_ds303"] : '0';
$apply_ds304 = isset($_POST["apply_ds304"]) ? $_POST["apply_ds304"] : '0';
$apply_ds305 = isset($_POST["apply_ds305"]) ? $_POST["apply_ds305"] : '0';
$apply_ds306 = isset($_POST["apply_ds306"]) ? $_POST["apply_ds306"] : '0';
$apply_ds307 = isset($_POST["apply_ds307"]) ? $_POST["apply_ds307"] : '0';
$apply_ds308 = isset($_POST["apply_ds308"]) ? $_POST["apply_ds308"] : '0';
$apply_ds309 = isset($_POST["apply_ds309"]) ? $_POST["apply_ds309"] : '0';
$apply_ds310 = isset($_POST["apply_ds310"]) ? $_POST["apply_ds310"] : '0';

$apply_desc = $_POST['apply_desc'];
$apply_approved = $_POST['apply_approved'];
$apply_allow_edit = $_POST['apply_allow_edit'];

$sql = "INSERT INTO zgroup_detail (
			group_code,apply_topic,apply_teacher,apply_d,apply_ds101,apply_ds102,apply_ds103,apply_ds104,apply_ds105,
			apply_ds106,apply_ds107,apply_ds108,apply_ds201,apply_ds202,apply_ds203,apply_ds204,apply_ds205,apply_ds206,
			apply_ds207,apply_ds301,apply_ds302,apply_ds303,apply_ds304,apply_ds305,apply_ds306,apply_ds307,apply_ds308,
			apply_ds309,apply_ds310,apply_desc,apply_date,apply_approved,apply_allow_edit
			)
			VALUES (
			N'$group_code',N'$apply_topic',N'$apply_teacher',N'$apply_d',
			N'$apply_ds101',N'$apply_ds102',N'$apply_ds103',N'$apply_ds104',N'$apply_ds105',N'$apply_ds106',N'$apply_ds107',
			N'$apply_ds108',N'$apply_ds201',N'$apply_ds202',N'$apply_ds203',N'$apply_ds204',N'$apply_ds205',N'$apply_ds206',
			N'$apply_ds207',N'$apply_ds301',N'$apply_ds302',N'$apply_ds303',N'$apply_ds304',N'$apply_ds305',N'$apply_ds306',
			N'$apply_ds307',N'$apply_ds308',N'$apply_ds309',N'$apply_ds310',N'$apply_desc',N'$date',N'$apply_approved',
			N'$apply_allow_edit'
			)";

if (mysqli_query($conn, $sql)) {
	echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_subject_all_list.php>";

	exit();
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn); ?>