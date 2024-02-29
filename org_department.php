<!-- 
  This page are use to display all the departments in school.
  Able to redirect users to the corresponding department page. 
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 行政单位 | 行政单位</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Header -->
  <?php include('header.php') ?>

  <style>
    .pricing-tables {
      font-family: sans-serif;
      font-size: small;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px 20px;
      padding-top: 60px;

      & .pricing-table {
        width: 250px;
        padding: 0;
        cursor: pointer;
        display: flex;
        flex-wrap: wrap;

        & .plan-signup {
          width: 100%;
          height: 30%;
          display: flex;
          align-items: center;
          justify-content: center;
        }

        & .plan-name {
          width: 100%;
          height: 70%;
        }
      }
    }
  </style>

</head>

<body>
  <!-- Page Banner -->
  <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner04.jpg) bottom; background-size: cover;">
    <div class="container">
      <div class="col-md-6">
        <h2>行政单位</h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <a href="index.php">
            <li><i>首页 /&ensp;</i></li>
          </a>
          <a href="org_department.php">
            <li><i>行政单位 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>行政单位</i></li>
          </a>
        </ul>
      </div>
    </div>
  </div>


  <!-- Content -->
  <div id="content">
    <div class="container">
      <div class="page-content">

        <div class="row">
          <div class="pricing-section pricing-tables">
            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_principalsoffice.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od1.jpg">
                <h3>校长室</h3>
                <p>Principal's Office</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_academic.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od2.jpg">
                <h3>教务处</h3>
                <p>Academic Department</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_disciplinary.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od3.jpg">
                <h3>训导处</h3>
                <p>Disciplinary Department</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_cocurricular.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od4.jpg">
                <h3>联课活动处</h3>
                <p>Co-curricular Department</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_generalaffairs.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od5.jpg">
                <h3>事务处</h3>
                <p>General Affairs Department</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_humanresource.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od6.jpg">
                <h3>人力资源部（董事会）</h3>
                <p>Human Resource Department</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_sports.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od7.jpg">
                <h3>体育处</h3>
                <p>Sports Department</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_furtherstudiescounselling.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od8.jpg">
                <h3>升学辅导处</h3>
                <p>Further Studies Counselling Department</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_counselling.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od9.jpg">
                <h3>生活辅导处</h3>
                <p>Counselling Department</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_computercentre.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od10.jpg">
                <h3>电脑中心</h3>
                <p>Computer Centre Department</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_multimediacentre.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od10.jpg">
                <h3>视听教育馆</h3>
                <p>Multimedia Centre Department</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_library.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od12.jpg">
                <h3>图书馆</h3>
                <p>Library</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>

            <div class="pricing-table col-md-2 col-sm-12" onclick="window.open('department_eveningclass.php', '_self')">
              <div class="plan-name">
                <img src="img/organization/org_department_icon/od13.jpg">
                <h3>夜间部</h3>
                <p>Evening Class Department</p>
              </div>
              <div class="plan-signup">
                <a class="btn-system btn-small border-btn">查看更多 >></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>