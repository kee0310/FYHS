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



			date_default_timezone_set("Asia/Kuala_Lumpur");
			$date = date('Y/m/d H:i:s', time());

			$group_code=$_POST['group_code'];
			
			$budget_101=isset($_POST["budget_101"]) ? $_POST["budget_101"] : '0';
			$budget_102=isset($_POST["budget_102"]) ? $_POST["budget_102"] : '0';
			$budget_103=isset($_POST["budget_103"]) ? $_POST["budget_103"] : '0';

			$budget_201=isset($_POST["budget_201"]) ? $_POST["budget_201"] : '0';
			$budget_202=isset($_POST["budget_202"]) ? $_POST["budget_202"] : '0';
			$budget_203=isset($_POST["budget_203"]) ? $_POST["budget_203"] : '0';

			$budget_301=isset($_POST["budget_301"]) ? $_POST["budget_301"] : '0';
			$budget_302=isset($_POST["budget_302"]) ? $_POST["budget_302"] : '0';
			$budget_303=isset($_POST["budget_303"]) ? $_POST["budget_303"] : '0';

			$budget_401=isset($_POST["budget_401"]) ? $_POST["budget_401"] : '0';
			$budget_402=isset($_POST["budget_402"]) ? $_POST["budget_402"] : '0';
			$budget_403=isset($_POST["budget_403"]) ? $_POST["budget_403"] : '0';

			$budget_501=isset($_POST["budget_501"]) ? $_POST["budget_501"] : '0';
			$budget_502=isset($_POST["budget_502"]) ? $_POST["budget_502"] : '0';
			$budget_503=isset($_POST["budget_503"]) ? $_POST["budget_503"] : '0';
			
			$budget_601=isset($_POST["budget_601"]) ? $_POST["budget_601"] : '0';
			$budget_602=isset($_POST["budget_602"]) ? $_POST["budget_602"] : '0';
			$budget_603=isset($_POST["budget_603"]) ? $_POST["budget_603"] : '0';
			
			$budget_701=isset($_POST["budget_701"]) ? $_POST["budget_701"] : '0';
			$budget_702=isset($_POST["budget_702"]) ? $_POST["budget_702"] : '0';
			$budget_703=isset($_POST["budget_703"]) ? $_POST["budget_703"] : '0';			
			
			$budget_801=isset($_POST["budget_801"]) ? $_POST["budget_801"] : '0';
			$budget_802=isset($_POST["budget_802"]) ? $_POST["budget_802"] : '0';
			$budget_803=isset($_POST["budget_803"]) ? $_POST["budget_803"] : '0';

			$budget_policy01=isset($_POST["budget_policy01"]) ? $_POST["budget_policy01"] : '0';
			$budget_policy02=isset($_POST["budget_policy02"]) ? $_POST["budget_policy02"] : '0';
			
			$budget_allow_edit=$_POST['budget_allow_edit'];

			$sql = "INSERT INTO zgroup_budget (
			group_code,budget_101,budget_102,budget_103,budget_201,budget_202,budget_203,budget_301,budget_302,budget_303,
			budget_401,budget_402,budget_403,budget_501,budget_502,budget_503,budget_601,budget_602,budget_603,budget_701,
			budget_702,budget_703,budget_801,budget_802,budget_803,budget_policy01,budget_policy02,budget_date,
			budget_allow_edit
			)
			VALUES (
			N'$group_code',N'$budget_101',N'$budget_102',N'$budget_103',N'$budget_201',N'$budget_202',N'$budget_203',
			N'$budget_301',N'$budget_302',N'$budget_303',N'$budget_401',N'$budget_402',N'$budget_403',N'$budget_501',
			N'$budget_502',N'$budget_503',N'$budget_601',N'$budget_602',N'$budget_603',N'$budget_701',N'$budget_702',
			N'$budget_703',N'$budget_801',N'$budget_802',N'$budget_803',N'$budget_policy01',N'$budget_policy02',
			N'$date',N'$budget_allow_edit'
			)";

if (mysqli_query($conn, $sql)) {
	echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_subject_all_list.php>";
	
			exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}				



 
			mysqli_close($conn); ?>