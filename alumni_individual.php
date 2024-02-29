<!-- 
  This page are use to display the individual alumni.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 情系母校 | 个别校友</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Header -->
  <?php include('header.php') ?>

  <style>
    .document {
      background: salmon;
      border: 1px salmon solid;
      color: white;
      cursor: pointer;
      display: grid;
      font-family: kaiti;
      font-size: 20px;
      margin: 20px;
      overflow: hidden;
      text-align: center;
      transition: all .3s ease;
      width: 200px;
      opacity: 0;
    }

    .document:hover {
      background: tomato;
      border: 1px tomato solid;
    }

    .document:hover .content {
      -webkit-filter: brightness(40%);
      transition: all .3s ease;
    }

    .pdfIcon {
      -webkit-filter: brightness(200%);
      font-size: xx-large;
      margin-left: 85px;
      margin-top: 70px;
      position: absolute;
      visibility: hidden;
    }

    .document:hover .pdfIcon {
      visibility: visible;
    }
  </style>

</head>

<body>
  <!-- Page Banner -->
  <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner14.jpg) center; background-size: cover;">
    <div class="container">
      <div class="col-md-6">
        <h2>个别校友</h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <a href="index.php">
            <li><i>首页 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>情系母校 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>个别校友</i></li>
          </a>
        </ul>
      </div>
    </div>
  </div>


  <!-- Content -->
  <div id="content">
    <div class="container" style="background: none">

      <iframe src="https://anyflip.com/bookcase/ypcuq/" style="width: 100%; height: 90vh; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;" frameborder="0"></iframe>

    </div>
  </div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>