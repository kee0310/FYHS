<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 其他</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <style>
    a:hover,
    a:focus {
      text-decoration: none;
      outline: none;
    }

    .vertical-tab {
      background: linear-gradient(#fff, #f5f5f5, #fff);
      font-family: 'Poppins', sans-serif;
      display: table;
      padding: 10px;
      border-radius: 20px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .vertical-tab .nav-tabs {
      background-color: #fff;
      display: table-cell;
      width: 20%;
      min-width: 20%;
      padding: 10px;
      border: none;
      border-radius: 10px;
      vertical-align: top;
    }

    .vertical-tab .nav-tabs li {
      float: none;
    }

    .vertical-tab .nav-tabs li a {
      color: #2e86de;
      background: #fff;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: 1px;
      text-transform: uppercase;
      text-align: center;
      padding: 12px 10px 10px;
      margin: 0 0 10px;
      border-radius: 10px;
      border: none;
      overflow: hidden;
      position: relative;
      z-index: 1;
      transition: all 0.5s ease 0.1s;
    }

    .vertical-tab .nav-tabs li a:hover,
    .vertical-tab .nav-tabs li.active a,
    .vertical-tab .nav-tabs li.active a:hover {
      color: #fff;
      background: #2e86de;
      border: none;
      box-shadow: 0 0 10px -4px #2e86de;

    }

    .vertical-tab .nav-tabs li a:before {
      content: '';
      background-color: #2e86de;
      height: 100%;
      width: 0;
      border-radius: 10px;
      position: absolute;
      right: 0;
      top: 0;
      z-index: -1;
      transition: all 0.4s ease 0s;
    }

    .vertical-tab .nav-tabs li a:hover:before,
    .vertical-tab .nav-tabs li.active a:before,
    .vertical-tab .nav-tabs li.active a:hover:before {
      width: 100%;
      opacity: 0;
    }

    .vertical-tab .tab-content {
      color: #000;
      background: transparent;
      font-size: 13px;
      letter-spacing: 0.5px;
      line-height: 21px;
      padding: 15px 15px 10px 15px;
      display: table-cell;

    }

    .vertical-tab .tab-content h3 {
      color: #2e86de;
      font-size: 18px;
      font-weight: 600;
      text-transform: capitalize;
      margin: 0 0 4px;
    }

    @media only screen and (max-width: 479px) {
      .vertical-tab .nav-tabs {
        width: 100%;
        display: block;
      }

      .vertical-tab .nav-tabs li:last-child a {
        margin: 0;
      }

      .vertical-tab .tab-content {
        font-size: 14px;
        display: block;
      }
    }
  </style>
</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Header -->
    <?php
    $header = file_get_contents('header.php');
    echo $header;
    ?>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner16.jpg) center; background-size: cover;">
      <div class="container">
        <div class="col-md-6">
          <h2>其他</h2>
        </div>
        <div class="col-md-6">
          <ul class="breadcrumbs">
            <a href="index@a38b.php">
              <li><i>首页 /&ensp;</i></li>
            </a>
            <a href="">
              <li><i>其他</i></li>
            </a>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">


          <div class="row" align="center">
            <div class="col-md-12">
              <div class="vertical-tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">

                  <li role="presentation" class="active"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">宽友特讯</a></li>
                  <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab">新闻剪报</a></li>
                  <li role="presentation"><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab">其他刊物</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                  <div role="tabpanel" class="tab-pane fade in active" id="Section3">
                    <h3>宽友特讯</h3>
                    <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae
                      consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non
                      iaculis mi varius, mi eros viverra massa.</p>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="Section4">
                    <h3>新闻剪报</h3>
                    <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae
                      consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non
                      iaculis mi varius, mi eros viverra massa.</p>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="Section5">
                    <h3>其他刊物</h3>
                    <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae
                      consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non
                      iaculis mi varius, mi eros viverra massa.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>




        </div>
      </div>
    </div>
    <!-- End content -->

    <!-- Footer -->
    <?php include('footer.php'); ?>

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>