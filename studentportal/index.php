<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>宽柔中学古来分校 Foon Yew High School - Kulai Student Portal</title>
    <meta name="description" content="宽柔中学古来分校 Foon Yew High School - Kulai">
    <meta name="keywords" content="宽柔中学古来分校 Foon Yew High School - Kulai">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" title="宽柔中学古来分校">宽柔中学古来分校</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" class="page-scroll">主页</a></li>
            <li><a href="#tf-about" class="page-scroll">登入</a></li>
            <li><a href="#tf-services" class="page-scroll">相关链接</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1><strong><span class="color">Foon Yew High School - Kulai</span></strong></h1>
                <p class="lead">Email: <strong>enquiry@fyk.edu.my</strong>  Phone: <strong>07-6625888</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>学生平台 <strong>Student Portal</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>如有问题或状况，请电邮至 ziwei@fyk.edu.my<em></small>            
                    </div>

<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$reserve_slot = stripslashes($_REQUEST['reserve_slot']);
	$reserve_slot = mysqli_real_escape_string($con,$reserve_slot);
	
	
    $query = "SELECT * FROM `reserve_shop` WHERE reserve_name='$username'";			
	
	$result = mysqli_query($con,$query) or die(mysql_error());
	$row = mysqli_fetch_assoc($result);	
	
	if($row["reserve_tf"] == 2){

	//Checking is user existing in the database or not
    	$query = "SELECT * FROM `reserve_shop` WHERE reserve_name='$username' and student_password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	

	$_SESSION['username'] = $username;

	
	
	
        if($rows==1){
	     
	$_SESSION['username'] = $username;	

				echo "<meta http-equiv=REFRESH CONTENT=1;url=dashboard.php";
				echo $date;
				echo ">";
				

         		}		 
		else{
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>学号 / 身份证号码 错误</h3></div>
				</div>";
				
			}
    		}
			
			
	elseif($row["reserve_tf"] == 1){
	
	//Checking is user existing in the database or not
    	$query = "SELECT * FROM `reserve_shop` WHERE reserve_name='$username' and student_password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);

	$_SESSION['username'] = $username; 


        if($rows==1){
	    	
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>此学号已被登记过</h3></div>
				</div>";
				

         		}	

			else{
	
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>学号 / 身份证号码 错误</h3></div>
				</div>";
				
				}				

    	}			
			

	else{
	
				echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>此学号不存在</h3></div>
				</div>";
				
    	}	
	
	}
	else{

?>	
                    <form action="" method="post" name="login">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">学生编号 Student Number</label>
                                    <input class="form-control" type="text" name="username" placeholder="学生编号 Student Number：Sample：162111" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">身份证号码 IC Number</label>
                                    <input class="form-control" type="password" name="password" placeholder="身份证号码 IC Number：Sample：010202012222" required>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn tf-btn btn-default">登入 Login</button>
                    </form>
<?php } ?>
                </div>
            </div>
        </div>
    </div>



    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2 style="font-style: normal;">自强不息 • 厚德载物</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">







                </div>
                
            </div>
        </div>
    </div>

    <!-- Services Section
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2 style="font-style: normal;"><strong>相关链接</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-desktop"></i>
                    <h4 style="font-style: normal;"><a href="http://www.fyk.edu.my/" title="宽柔中学古来分校 官方网站" style="color:#5a5a5a" target="_blank"><strong>宽柔中学古来分校 官方网站</strong></a></h4>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-desktop"></i>
                    <h4 style="font-style: normal;"><a href="https://e.fyk.edu.my/" title="数位教学平台" style="color:#5a5a5a" target="_blank"><strong>数位教学平台</strong></a></h4>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-desktop"></i>
                    <h4 style="font-style: normal;"><a href="http://www1.fyk.edu.my/course_selection/" title="高二高三选修课系统" style="color:#5a5a5a" target="_blank"><strong>高二高三选修课系统</strong></a></h4>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-desktop"></i>
                    <h4 style="font-style: normal;"><a href="http://www1.fyk.edu.my/studentportal/" title="学生平台" style="color:#5a5a5a"><strong>学生平台</strong></a></h4>
                </div>				

            </div>
        </div>
    </div>







    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>Foon Yew High School - Kulai Student Portal © 2022</p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/fykulai" title="宽柔中学古来分校 官方脸书" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.facebook.com/宽柔中学古来分校联课活动处-118908328177404/" title="宽柔中学古来分校 联课活动处" target="_blank"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>