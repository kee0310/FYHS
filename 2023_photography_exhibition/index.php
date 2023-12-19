<!DOCTYPE html>
<html lang="en">
  <head>
    <title>宽柔中学古来分校</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.php"><img src="images/logo.png" style="width: 100px; height: auto;"></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="index.php">首页</a></li>
					<li><a href="photography_student.php">学生作品</a></li>

				</ul>
			</nav>

			<div class="colorlib-footer">
				<p>宽柔学校 110 周年校庆 - 摄影展</p>

			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<div class="hero-wrap js-fullheight" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="js-fullheight d-flex justify-content-center align-items-center">
					<div class="col-md-8 text text-center">
						<div class="img mb-4" style="background-image: url(images/logo.jpg);"></div>
						<div class="desc">
							<h2 class="subheading">宽柔中学古来分校</h2>
							<h1 class="mb-4">宽柔学校 110 周年校庆 - 摄影展</h1>
							<p class="mb-4">宽柔中学古来分校 丹斯里林梧桐大礼堂底层展览厅 <br>2023年8月12日至8月13日</p>
						</div>
					</div>
				</div>
			</div>
			<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">展览作品</h2>
          </div>
        </div>
    		<div class="row">
			
			
<?php			


							include('connect.php');

							$result = mysql_query("
							
							SELECT *
							FROM qphotography
							WHERE qgroup = 't'
							");
							while($row = mysql_fetch_array($result))
								{	
?>			
    			<div class="col-md-4">
    				<div class="blog-entry ftco-animate">
							<a href="#" class="img img-2" style="background-image: url(img/<?php echo $row['qimg']; ?>.jpg);border: 5px solid #555;"></a>
							<div class="text text-2 pt-2 mt-3">
								<span class="category mb-3 d-block"><a href="#"><?php echo $row['qname']; ?>&nbsp;&nbsp;<?php echo $row['qclass']; ?></a><br>价格（MYR）：<?php echo $row['qprice']; ?></span>
	              <h3 class="mb-4"><a href="#"><?php echo $row['qtitle']; ?></a></h3>
	              <p class="mb-4"><?php echo $row['qdis01']; ?></p>

	            </div>
						</div>
    			</div>
				
<?php } ?>

    		</div>
    	</div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container px-md-5">
        <div class="row mb-5">

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">宽柔中学古来分校</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Lot 1591,Jalan Persiaran Indahpura 6,Taman Indahpura,81000 Kulai,Johor,Malaysia.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">07-6625888</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">enquiry@fyk.edu.my</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>