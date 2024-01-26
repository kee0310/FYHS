<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Header</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/bootstrap-table.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/style_v2.css" rel="stylesheet">

  <!--Icons-->
  <script src="js/lumino.glyphs.js"></script>
  <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>
  .nav-container a .mobile-login i {
    border-radius: 0;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
</style>

<body>

  <!-- Navigation Bar -->
  <div class="navbar">
    <div class="container nav-container">
      <!-- Logo -->
      <div class="col-xs-12 col-sm-9 col-md-10 col-md-offset-2" style="position: fixed; right: 0; padding-top: 8px;" align="center">
        <span class="logo">综合实践活动课程</span>
      </div>

      <!-- Mobile Logout -->
      <a title="学生登出" href="exe/logout.php">
        <span class="mobile-login"><i class="fa fa-sign-out hidden-lg hidden-md hidden-sm"></i></span>
      </a>
    </div>
  </div>

  <!-- Sidebar -->
  <div class="col-sm-3 col-md-2 sidebar" style="top: 0;">
    <!-- Logo -->
    <div align="center" class="school-logo">
      <a href="../index@a38b.php"><img src="img/fylogo2.png" style="width: 100%;"></a>
    </div>
    <!-- Desktop Logout -->
    <a class="login" title="学生登出" href="exe/logout.php">
      <span><i class="fa fa-sign-out"></i> 登出</span>
    </a>
  </div>

</body>

</html>