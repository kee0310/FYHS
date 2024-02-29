<!-- 
  This page are use to display the administrative calendar.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 行政历</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Header -->
  <?php include('header.php') ?>

  <style>
    .calendar {
      -ms-overflow-style: none;
      /* Internet Explorer 10+ */
      scrollbar-width: none;
      /* Firefox */
    }

    .calendar::-webkit-scrollbar {
      display: none;
      /* Safari and Chrome */
    }
  </style>

</head>

<body>
  <!-- Page Banner -->
  <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner09.jpg) center; background-size: cover;">
    <div class="container">
      <div class="col-md-6">
        <h2>行政历</h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <a href="index.php">
            <li><i>首页 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>行政历 /&ensp;</i></li>
          </a>
        </ul>
      </div>
    </div>
  </div>


  <!-- Content -->
  <div id="content">
    <div class="container">
      <div class="page-content">

        <!-- Google Calendar 1 (smaller size) -->
        <div class="hidden-xs col-md-8" style="max-width: 700px; width: 100%">
          <iframe src="https://embed.styledcalendar.com/#VdKFMVCXN2DpgpodfC9O" title="Styled Calendar" class="styled-calendar-container" style="width: 100%; border: none;" data-cy="calendar-embed-iframe"></iframe>
          <script async type="module" src="https://embed.styledcalendar.com/assets/parent-window.js"></script>
          <div style="width: 300px; height: 50px; position: absolute; background: white; margin-top: -80px; margin-left: 10px;"></div>
        </div>

        <!-- Google Calendar 2 (larger size): hidden on phone because it will resize to smaller size calendar which are the same as Google Calendar 1 -->
        <div class="calendar col-md-4" style="max-width: 500px; max-height: 750px;  height: fit-content; overflow: scroll; clip-path: inset(0px 0px calc(100% - calc(100% - 80px)) 0px);">
          <iframe src="https://embed.styledcalendar.com/#VdKFMVCXN2DpgpodfC9O" title="Styled Calendar" class="styled-calendar-container" style="width: 100%; border: none;" data-cy="calendar-embed-iframe"></iframe>
          <script async type="module" src="https://embed.styledcalendar.com/assets/parent-window.js"></script>
        </div>

      </div>
    </div>
  </div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>