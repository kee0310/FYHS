<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 学校概况 | 关于宽柔</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Morris Chart -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/tools.css" media="screen">

  <script>
    $(document).ready(function () {
      // Add smooth scrolling to all links
      $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 10, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>

  <style>
    .page-content {
      scroll-behavior: smooth;
    }

    .olcards,
    .olcards * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .olcards {
      list-style: none;
      counter-reset: cardCount;
      display: flex;
      flex-direction: column;
      --cardsGap: 1rem;
      gap: var(--cardsGap);
      padding-bottom: var(--cardsGap);
    }

    .olcards li {
      counter-increment: cardCount;
      display: flex;
      color: white;
      --labelOffset: 1rem;
      --arrowClipSize: 1.5rem;
      margin-top: 0.5rem;
    }

    .olcards li::before {
      content: counter(cardCount, decimal-leading-zero);
      background: salmon;
      color: honeydew;
      font-size: 1em;
      font-weight: bold;
      transform: translateY(calc(-1 * var(--labelOffset)));
      margin-right: calc(-1 * var(--labelOffset));
      z-index: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-inline: 0.5em;
      border-radius: 0 20px 0 15px;
      box-shadow: 3px 5px 8px grey;
      text-shadow: 3px 3px 5px rgb(0, 0, 0, 0.5);
    }

    .olcards li .content {
      background-color: rgb(245, 189, 179);
      color: salmon;
      display: grid;
      grid-template-areas:
        "icon title"
        "icon text";
      gap: 2px;
      clip-path: polygon(0 0,
          calc(100% - var(--arrowClipSize)) 0,
          100% 50%,
          calc(100% - var(--arrowClipSize)) 100%,
          calc(100% - var(--arrowClipSize)) calc(100% + var(--cardsGap)),
          0 calc(100% + var(--cardsGap)));
      position: relative;
    }

    .olcards li .content::after {
      content: "";
      position: absolute;
      height: var(--cardsGap);
      width: var(--cardsGap);
      background: linear-gradient(to right, rgba(0, 0, 0, 0.25), transparent 50%);
      left: 0;
      top: 100%;
    }

    .olcards li .content div {
      content: "";
      display: block;
      position: relative;
      padding: 10px 30px;
      top: 1px;
      left: 1px;
      background-color: white;
      clip-path: inherit;
    }
  </style>
</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <?php
    $header = file_get_contents('header.php');
    echo $header;
    ?>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner"
      style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner07.jpg) center; background-size: cover;">
      <div class="container">
        <div class="col-md-6">
          <h2>关于宽柔</h2>
        </div>
        <div class="col-md-6">
          <ul class="breadcrumbs">
            <a href="index@a38b.php">
              <li><i>首页 /&ensp;</i></li>
            </a>
            <a href="about_1@a38b.php">
              <li><i>学校概况 /&ensp;</i></li>
            </a>
            <a href="about_1@a38b.php">
              <li><i>关于宽柔</i></li>
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

          <!-- first part start-->
          <div id="about1" align="center" style="scroll-margin-top: 80px">

            <!-- FY Logo -->
            <div class="row">
              <h2 class="classic-title">宽柔校徽</h2>

              <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                <img src="img/ab01.png" style="max-height: 200px; margin: 40px 80px;" title="宽柔校徽">
                <div align="left">
                  <br>
                  <b style="color: firebrick; font-size:20px;">校徽含义</b><br>
                  <span>我国宽中学生，学习三种语文，前途光明灿烂</span><br>
                  <b style="color: firebrick; font-size:20px;">三角形两边线条</b><br>
                  <span>红、黄、绿三色，象征万丈光芒，蓝色表示天空</span><br>
                  <b style="color: firebrick; font-size:20px;">国花</b><br>
                  <span>代表马来西亚</span><br>
                  <b style="color: firebrick; font-size:20px;">校名</b><br>
                  <span>用华、国、英文，表示学习三种语文</span>
                </div>
              </div>
            </div>

            <!-- FY Motto -->
            <div class="row">
              <h2 class="classic-title">宽柔校训</h2>
              <img src="img/ab02.png" style="max-height: 250px; margin: 50px;" title="宽柔校训">
              <div>
                <b style="font-size: x-large">
                  规规矩矩的态度<br>
                  正正当当的行为<br>
                  清清白白的辨别<br>
                  切切实实的觉悟
                </b>
              </div>
            </div>

            <!-- School Song -->
            <div class="row">
              <h2 class="classic-title">宽柔校歌</h2>
              <video class="col-md-6" width="100%" height="auto" loop="true" autoplay="autoplay" controls muted>
                <source src="img/videoab03.mp4" type="video/mp4">
              </video>
              <div class="col-md-6">
                <img src="img/ab03.jpeg" style="width: 100%; height: auto" title="宽柔校歌">
              </div>
            </div>
          </div>
          <!-- first part end -->


          <!-- second part start -->
          <div id="about2" align="center" style="scroll-margin-top: 80px">

            <!-- School Vision -->
            <div class="row">
              <h2 class="classic-title">愿景</h2>
              <img src="img/ab04.png" style="width:100%; border-bottom: 2px solid #000; margin-bottom: 50px;">

              <b style="color: firebrick; font-size: 20px;">教育理念</b><br>
              <span>打造个性化校园，开办有品质教育。</span><br>
              <span>栽培中华底蕴和国际视野兼具，才德兼备的创新人才。</span><br><br>

              <b style="color: firebrick; font-size: 20px;">办学使命</b><br>
              <span>培育学生体现宽柔精神:</span><br>
              <span>自强不息、厚德载物、爱我宽柔，造福人群</span><br>
              <span>培育学生成人成才</span><br>
              <span>维护母语教育、传承中华文化</span>
            </div>
          </div>
          <!-- second part end -->


          <!-- third part start -->
          <div id="about3" align="center" style="scroll-margin-top: 80px">

            <!-- Education Concept -->
            <div class="row">
              <h2 class="classic-title">方针</h2>
              <div style="display: flex; flex-wrap: wrap; justify-content: center; margin-top: 30px">
                <img src="img/img03.jpg" style="max-width: 400px; padding: 0 20px; object-fit: cover;">
                <ol class="olcards">
                  <li>
                    <div class="content">
                      <div>推展五育兼顾的素质教育，以德育为核心</div>
                    </div>
                  </li>
                  <li>
                    <div class="content">
                      <div>提升华、国、英三语教与学的能力</div>
                    </div>
                  </li>
                  <li>
                    <div class="content">
                      <div>培养学生学习、沟通、处世及有创意、创新的能力</div>
                    </div>
                  </li>
                  <li>
                    <div class="content">
                      <div>提供优良的学习环境</div>
                    </div>
                  </li>
                  <li>
                    <div class="content">
                      <div>加强培训，提供优质的师资</div>
                    </div>
                  </li>
                  <li>
                    <div class="content">
                      <div>持续改善，提升管理素质与教学质量</div>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <!-- third part end -->


          <!-- forth part start -->
          <div id="about4" align="center" style="scroll-margin-top: 80px">

            <!-- School Condition -->
            <div class="row">
              <h2 class="classic-title">校务现况</h2>
              <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                <div class="counter-item col-xs-12 col-sm-3 col-md-3" style="margin-top:50px;">
                  <i class="fa fa-male" style="color: #46bbec"></i>
                  <div class="timer" id="item4" data-to="5405" data-speed="5000"
                    style="color: #46bbec; font-family: 楷体, KaiTi;"></div>
                  <h4 style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">2022年师生人数</h4>
                </div>

                <div class="counter-item col-xs-12 col-sm-3 col-md-3" style="margin-top:50px;">
                  <i class="fa fa-male" style="color: #46bbec"></i>
                  <div class="timer" id="item4" data-to="8690" data-speed="5000"
                    style="color: #46bbec; font-family: 楷体, KaiTi;"></div>
                  <h4 style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">高中毕业生总人数</h4>
                </div>
              </div>

              <div class="">
                <b>学生人数成长</b>
                <div id="myfirstchart" style="height: 250px; max-width: 100%"></div>
              </div>
            </div>
          </div>
          <!-- forth part end -->


          <!-- fifth part start -->
          <div id="about5" align="center" style="scroll-margin-top: 80px">
            <!-- Management Strategy -->
            <div class="row">
              <h2 class="classic-title">管理策略</h2>

              <div class="col-md-12 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <h4 style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">---</h4>
                </div>
              </div>
            </div>
          </div>
          <!-- fifth part end -->


          <!-- sixth part start -->
          <div id="about6" align="center" style="scroll-margin-top: 80px">
            <!-- ISO -->
            <div class="row">
              <h2 class="classic-title" style="font-family: KaiTi">ISO</h2>
              <p style="float: left; padding: 30px;">
                我校自<span style="font-family: KaiTi">2007</span>
                年获<span style="font-family: KaiTi">ISO 9001</span>
                质量管理认证至今，行政工作有序展开。各行政部门致力于提升业务，以期协助学校发展成世界级的华文中学。
              </p>
              <img src="img/iso_cert.jpg" style="max-width: 70%" title="ISO certificate Foon Yew High School">
            </div>

          </div>
          <!-- sixth part end -->


          <!-- seventh part start -->
          <div id="about7" style="scroll-margin-top: 80px">
            <!-- Academic System -->
            <div class="row">
              <h2 class="classic-title" align="center">学制</h2>

              <div class="col-md-12 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>本校采取“统考为主，政府考试为辅”的办学方针。学生应考高初中统考外，亦参与SPM考试。</p>
                </div>
              </div>
              <div class="col-md-12 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>学生在校学习六年中学完整教育，分别为初中三年与高中三年。</p>
                </div>
              </div>
              <div class="col-md-12 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>本校坚持母语教育是直接有效的教学媒介语，而国语是团结国民语文，英语为现代国际语文，
                    故教学媒介语以母语为主，三语兼顾，为学生升学或就业奠定基础。</p>
                </div>
              </div>
              <div class="col-md-12 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>
                    本校采用以统考及政府考试并重的双轨制教学，并以华文独中（董总）课程为主体，带入政府文凭考试课程的内容，
                    使二者有机结合相容并蓄，相辅相成，充份发挥双轨制的效能、即规定学生参与全国华文独中统一考试和政府SPM考试。
                  </p>
                </div>
              </div>
              <div class="col-md-12 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>
                    本校以“因材施教”作为教育方法、采用华文独中的“三三学制”、即初中三年制和高中三年制、同时为了提升学生的品学素质、
                    实行升留级制度、学生升留级与否则由在校的考试成绩、操行表现及联课活动的参与态度评定.学生修完初中和高中的课程、
                    成绩及格可获得本校颁发初中和高中毕业文凭。
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- seventh part end -->


          <!-- eighth part start -->
          <div id="about8" style="scroll-margin-top: 80px">
            <!-- Course -->
            <div class="row">
              <h2 class="classic-title" align="center">课程</h2>

              <b style="color: firebrick; font-size: x-large;"><br>初中</b>
              <p>初中施行通识教育，以期进一步奠定学生的学识基础。课程计有：<br></p>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>华文</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>国文</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>英文</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>数学</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>历史</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>地理</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>科学</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>电脑</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>美术</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>体育</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>音乐</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>生活辅导</p>
                </div>
              </div>

              <div class="col-md-3 service-box service-icon-left-more">
                <div class="service-icon">
                  <i class="fa fa-check icon-medium"></i>
                </div>
                <div class="service-content">
                  <p>联课活动</p>
                </div>
              </div>
            </div>


            <div class="row">
              <b style="color: firebrick; font-size: x-large;">高中</b>
              <p>
                高中可依据学生本身兴趣与志向选科就读，高中科组共分为文商科、理科、电机电子科及餐饮管理科四组。
                各科组除共有的华文、国文、英文、数学、电脑、体育、学分选修课、联课活动外，各有自身的专业课程：
              </p>

              <div class="pricing-section" style="padding: 30px 0;">
                <div class="pricing-tables">
                  <div class="col-md-3 col-sm-3">
                    <div class="pricing-table">
                      <div class="plan-name">
                        <h3>理科</h3>
                      </div>
                      <div class="plan-list">
                        <ul>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">生物</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">化学</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">物理</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <div class="pricing-table">
                      <div class="plan-name">
                        <h3>文商科</h3>
                      </div>
                      <div class="plan-list">
                        <ul>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">簿记</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">商业学</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">历史</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">地理</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <div class="pricing-table">
                      <div class="plan-name">
                        <h3>电机电子科</h3>
                      </div>
                      <div class="plan-list">
                        <ul>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">电子学</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">电机学</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">电路学</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">数位逻辑</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <div class="pricing-table">
                      <div class="plan-name">
                        <h3>餐饮管理科</h3>
                      </div>
                      <div class="plan-list">
                        <ul>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">簿记</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">商业学</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">烹调艺术</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">烘焙</li>
                          <li style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">餐饮服务</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <b style="color: firebrick; font-size: x-large;">高中学分选修课</b>
              <p>
                为改变学生被动学习的习惯，以及鼓励同学主动思考、独立思考、积极创新和敢于质疑。校方在不影响知识学习和积累的基础上，
                推动课程改革—高中学分选修课让学生拥有部分课程的选择权和自主权。
              </p>
              <p>
                高中学分选修课目前推广至高二高三年段，开办了<strong>150</strong> 门涵盖各领域的课程供学生们选修，
                课程分为考试辅导、大学预修、职业试探、兴趣特色、语文学习与资优加强等六类型。
              </p>
            </div>

            <div class="row">
              <div style="padding: 20px">
                <p align="center"><u style="font-weight: bold; font-size: x-large;">课程分类</u></p>
                <p>
                  为进一步加强师资阵容及多元化课程，校方也邀请校外专业人士到校开办选修课。同时，教师们也通过选修课拥有展现和发挥自己专业才能的机会。
                </p>
              </div>

              <div style="display: flex; flex-wrap: wrap;">
                <div class="col-md-6 service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-magic icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4 style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">(一) 考试辅导</h4>
                    <p style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">配合SPM与高中统考的校外考试辅导课程。</p>
                  </div>
                </div>

                <div class="col-md-6 service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-users icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4 style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">(二) 大学预修</h4>
                    <p style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">大专院校相关科系的基础知识课程。</p>
                  </div>
                </div>

                <div class="col-md-6 service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-globe icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4 style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">(三) 职业试探</h4>
                    <p style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">拟定专邀校外人士所开设职场专题课程。</p>
                  </div>
                </div>

                <div class="col-md-6 service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-picture-o icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4 style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">(四) 兴趣特色</h4>
                    <p style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">包含艺术、体育、厨艺、社会议题等专项课程。</p>
                  </div>
                </div>

                <div class="col-md-6 service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-leaf icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4 style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">(五) 语文学习</h4>
                    <p style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">英语、国语及其他外国语(如日语、韩语)课程。</p>
                  </div>
                </div>

                <div class="col-md-6 service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-umbrella icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4 style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">(六) 资优加强</h4>
                    <p style="font-family: 楷体, KaiTi; font-size: 18px;line-height: 1.6;">校方专成立于培养单科能力卓越学生的学术加强班。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- eighth part end -->


          <!-- ninth part start -->
          <div id="about9" style="scroll-margin-top: 80px" align="center">
            <div class="row">
              <!-- Development Plan -->
              <h2 class="classic-title">发展计划</h2>

              <p>校长5年中、长期发展计划/<br>各部门3年中、短期发展计划</p>
              <iframe src="doc/document01.pdf#zoom=100" type="application/pdf" title="发展计划" width="80%"
                height="1000px"></iframe>
            </div>
          </div>
          <!-- ninth part end -->
        </div>
      </div>
    </div>
    <!-- End content -->
  </div>


  <!-- Start Footer -->
  <?php
  $footer = file_get_contents('footer.php');
  echo $footer;
  ?>
  <!-- End Footer -->


  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <script type="text/javascript" src="js/script.js"></script>

  <!-- Morris Chart -->
  <script>
    new Morris.Line({
      // ID of the element in which to draw the chart.
      element: 'myfirstchart',
      // Chart data records -- each entry in this array corresponds to a point on the chart.
      data: [
        { year: '2004', value: 1184 },
        { year: '2005', value: 1840 },
        { year: '2006', value: 2674 },
        { year: '2007', value: 3340 },
        { year: '2008', value: 3897 },
        { year: '2009', value: 4277 },
        { year: '2010', value: 4396 },
        { year: '2011', value: 4512 },
        { year: '2012', value: 4602 },
        { year: '2013', value: 4660 },
        { year: '2014', value: 4661 },
        { year: '2015', value: 4755 },
        { year: '2016', value: 4872 },
        { year: '2017', value: 4993 },
        { year: '2018', value: 5043 },
        { year: '2019', value: 5009 },
        { year: '2020', value: 4938 },
        { year: '2021', value: 5090 },
        { year: '2022', value: 5118 }
      ],
      // The name of the data record attribute that contains x-values.
      xkey: 'year',
      // A list of names of data record attributes that contain y-values.
      ykeys: ['value'],
      // Labels for the ykeys -- will be displayed when you hover over the chart.
      labels: ['人数']
    });
  </script>
</body>

</html>