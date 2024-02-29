<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 2020年全柔独中球类赛</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link rel="stylesheet" href="css/bubble.css">

  <style>
    .wrap input[type='radio'] {
      display: none;
    }

    figure {
      pointer-events: none;
    }

    .wrap input[type='radio']~label>figure {
      transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -webkit-transition: all 0.3s ease-in-out;
    }

    .wrap label:hover .ball.bubble {
      transform: scale(1.1);
    }

    .wrap input[type='radio']:checked+label>figure {
      background: radial-gradient(circle at 50% 55%, rgba(240, 245, 255, 0.9), rgba(240, 245, 255, 0.9) 40%, rgb(243 221 217 / 86%) 60%, rgb(255 43 219 / 40%));
    }

    .content-container {
      overflow: hidden;
      display: flex;
    }

    .contents {
      width: 100%;
      flex: 0 0 100%;
    }
  </style>

</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Header -->
    <?php include('header.php') ?>


    <!-- Start Page Banner -->
    <div class="page-banner" style="background: url(img/banner_competition2020.jpg) center; background-size: cover; padding-top: 200px;">
      <div class="container" style="margin: 0; width: 100%">
        <div class="col-md-6">
          <h2 style="font-weight: bold; text-shadow: 3px 3px 2px rgb(0, 0, 0, 0.6), 0 0 2px rgb(0, 0, 0, 0.5)">
            第十六届全柔华文独中球类锦标赛</h2>
        </div>
        <div class="col-md-6">
          <ul class="breadcrumbs" style="text-shadow: 0px 0px 8px rgb(0, 0, 0, 1);">
            <a href="index.php">
              <li><i>首页 /&ensp;</i></li>
            </a>
            <a href="">
              <li><i>第十六届全柔华文独中球类锦标赛</i></li>
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

          <!-- Switcher Start -->
          <div class="row">
            <h2 class="classic-title">各项球类赛成绩</h2>

            <div class="wrap" style="" align="center">
              <input type="radio" name="ball_type" id="football" checked>
              <label for="football" class="stage " style="width: clamp(40px, 23vw, 60px); height: clamp(40px, 23vw, 60px);" data-animation="fadeInUp" data-animation-delay="01">
                <figure class="ball bubble">
                  <img src="img/c1.png" style="height: inherit; padding: 10px">
                </figure>
                <div>足球</div>
              </label>

              <input type="radio" name="ball_type" id="pingpong">
              <label for="pingpong" class="stage" style="width: clamp(70px, 25vw, 100px); height: clamp(70px, 25vw, 100px);" data-animation="fadeInUp" data-animation-delay="02">
                <figure class="ball bubble">
                  <img src="img/c2.png" style="width: inherit; padding: 20px">
                </figure>
                <div>兵乓</div>
              </label>

              <input type="radio" name="ball_type" id="basketball">
              <label for="basketball" class="stage" style="width: clamp(100px, 30vw, 150px); height: clamp(100px, 30vw, 150px);" data-animation="fadeInUp" data-animation-delay="01">
                <figure class="ball bubble">
                  <img class="img" src="img/c3.png" style="height: inherit; padding: 20px">
                </figure>
                <div>篮球</div>
              </label>

              <input type="radio" name="ball_type" id="badminton">
              <label for="badminton" class="stage" style="width: clamp(40px, 23vw, 60px); height: clamp(40px, 23vw, 60px);" data-animation="fadeInUp" data-animation-delay="03">
                <figure class="ball bubble">
                  <img src="img/c4.png" style="width: inherit; padding: 15px;">
                </figure>
                <div>羽球</div>
              </label>

              <input type="radio" name="ball_type" id="volleyball">
              <label for="volleyball" class="stage" style="width: clamp(70px, 25vw, 100px); height: clamp(70px, 25vw, 100px);" data-animation="fadeInUp" data-animation-delay="02">
                <figure class="ball bubble">
                  <img src="img/c5.png" style="height: inherit; padding: 15px">
                </figure>
                <div>排球</div>
              </label>
            </div>
          </div>
          <!-- Switcher End -->


          <!-- Competition Content Start -->
          <div class='content-container'>
            <!-- Football -->
            <div class='contents content1'>
              <!-- second part start-->
              <div class="row">
                <div class="col-md-12">

                  <!-- Classic Heading -->
                  <h2 class="classic-title"><span>分组</span></h2>

                  <div class="row">

                    <!-- Start Service Icon 1 -->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <div class="service-content">
                        <div style="width:100%" align="center">
                          <table style="width: 100%">
                            <tbody>

                              <tr>
                                <td style="width: 50%; height: 40px" align="center">
                                  <h4>男A组</h4>
                                </td>
                                <td style="width: 50%; height: 40px" align="center">
                                  <h4>男B组</h4>
                                </td>

                              </tr>

                              <tr>
                                <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                                  <h4>麻坡中化</h4>
                                </td>
                                <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                                  <h4>新山宽中</h4>
                                </td>
                              </tr>
                              <tr>
                                <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                                  <h4>峇株华仁</h4>
                                </td>
                                <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                                  <h4>居銮中学</h4>
                                </td>
                              </tr>
                              <tr>
                                <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                                  <h4>宽柔中学古来分校</h4>
                                </td>
                                <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                                  <h4>笨珍培群</h4>
                                </td>
                              </tr>
                              <tr>
                                <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                                  <h4>利丰港培华</h4>
                                </td>
                                <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                                  <h4></h4>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>

                      </div>
                    </div>
                    <!-- End Service Icon 1 -->
                    <!-- Start Service Icon 1 -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="service-content">
                        <div style="height: 40px"></div>
                        <div style="width:100%" align="center">
                          <h4>场地A：宽柔中学古来分校 足球场</h4>
                          <br><br>
                          <h4>场地B：Taman Muhibbah 足球场</h4>
                          <div style="height: 40px"></div>
                        </div>

                      </div>
                    </div>
                    <!-- End Service Icon 1 -->



                  </div>
                </div>
              </div>
              <!-- second part end-->

              <div style="height: 40px"></div>
              <!-- third part start-->
              <div class="row">
                <div class="col-md-12">

                  <!-- Classic Heading -->
                  <h2 class="classic-title"><span>各校足球赛成绩</span></h2>

                  <div class="row">

                    <table style="width: 100%">
                      <tbody>

                        <tr>
                          <td style="width: 5%; height: 40px" align="center">
                            <h4>排名</h4>
                          </td>
                          <td style="width: 20%; height: 40px" align="center">
                            <h4>队伍/学校</h4>
                          </td>
                          <td style="width: 15%; height: 40px" align="center">
                            <h4>总比赛场数</h4>
                          </td>
                          <td style="width: 15%; height: 40px" align="center">
                            <h4>获胜场数</h4>
                          </td>
                          <td style="width: 15%; height: 40px" align="center">
                            <h4>落败场数</h4>
                          </td>
                          <td style="width: 15%; height: 40px" align="center">
                            <h4>总进球次数</h4>
                          </td>
                          <td style="width: 15%; height: 40px" align="center">
                            <h4>总失守次数</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>1</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>新山宽柔中学</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>1</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>古来宽柔中学</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>1</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>笨珍培群中学</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>1</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>峇株华仁中学</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>1</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>居銮中华中学</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>1</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>麻坡中化中学</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>1</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>利丰港培华中学</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>永平中学</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733" colspan="5">
                            <h4 style="color: blue">不参赛</h4>
                          </td>

                        </tr>
                        <tr>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>新文龙中学</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733" colspan="5">
                            <h4 style="color: blue">不参赛</h4>
                          </td>
                        </tr>

                      </tbody>
                    </table>



                  </div>
                </div>
              </div>
              <!-- third part end-->

              <div style="height: 40px"></div>
              <!-- four part start-->
              <div class="row">
                <div class="col-md-12">

                  <!-- Classic Heading -->
                  <h2 class="classic-title"><span>足球赛成绩</span></h2>

                  <div class="row">

                    <table style="width: 100%">
                      <tbody>

                        <tr>
                          <td style="width: 5%; height: 70px" align="center">
                            <h4>场次</h4>
                          </td>
                          <td style="width: 10%; height: 70px" align="center">
                            <h4>时间</h4>
                          </td>
                          <td style="width: 5%; height: 70px" align="center">
                            <h4>地点</h4>
                          </td>
                          <td style="width: 10%; height: 70px" align="center">
                            <h4>组别</h4>
                          </td>
                          <td style="width: 15%; height: 70px" align="center">
                            <h4>队伍/学校</h4>
                          </td>
                          <td style="width: 10%; height: 70px" align="center">
                            <h4>得分</h4>
                          </td>
                          <td style="width: 5%; height: 70px" align="center"></td>
                          <td style="width: 15%; height: 70px" align="center">
                            <h4>队伍/学校</h4>
                          </td>
                          <td style="width: 10%; height: 70px" align="center">
                            <h4>得分</h4>
                          </td>
                          <td style="width: 15%; height: 70px" align="center">
                            <h4>获胜队伍/学校</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>1</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>男 A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>宽古</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>培华</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>2</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>B</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>男 A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>中化</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>华中</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>3</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>男 B</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>新宽</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>銮中</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>4</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>男 A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>中化</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>宽古</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>5</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>B</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>男 A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>华中</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>培华</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>6</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>男 B</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>新宽</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>培群</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>7</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>男 A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>中化</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>培华</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>8</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>男 A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>华中</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>宽古</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>9</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>B</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>男 B</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>銮中</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>培群</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>10</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>半决赛</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>A组正盟</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>B组副盟</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>11</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>B</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>半决赛</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>B组正盟</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>A组副盟</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>12</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>季军赛</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>场次10负方</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>场次11负方</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                        <tr>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>13</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>A</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>决赛</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>场次10胜方</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>对</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>场次11胜方</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4 style="color: red">-</h4>
                          </td>
                          <td align="center" style="height: 70px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>
                        </tr>

                      </tbody>
                    </table>



                  </div>
                </div>
              </div>
              <!-- four part end-->

              <div style="height: 40px"></div>
              <!-- fifth part start-->
              <div class="row">
                <div class="col-md-12">

                  <!-- Classic Heading -->
                  <h2 class="classic-title"><span>金靴奖成绩</span></h2>

                  <div class="row">

                    <table style="width: 100%">
                      <tbody>

                        <tr>
                          <td style="width: 20%; height: 40px" align="center">
                            <h4>进球数量</h4>
                          </td>
                          <td style="width: 80%; height: 40px" align="center">
                            <h4>球员（学校）</h4>
                          </td>

                        </tr>

                        <tr>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>2</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>

                        </tr>
                        <tr>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>1</h4>
                          </td>
                          <td align="center" style="height: 40px;border-bottom: 1px solid #ee3733">
                            <h4>-</h4>
                          </td>

                        </tr>


                      </tbody>
                    </table>



                  </div>
                </div>
              </div>
              <!-- fifth part end-->
            </div>

            <div class='contents content2'>
              <h2 class="classic-title">兵乓赛成绩</h2>
              <table style="width: 100%">
                <tbody>
                  <tr>
                    <td style="width: 20%; height: 40px" align="center">
                      <h4>队伍/学校</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center">
                      <h4>得分</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center"></td>
                    <td style="width: 20%; height: 40px" align="center">
                      <h4>队伍/学校</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center">
                      <h4>得分</h4>
                    </td>
                    <td style="width: 30%; height: 40px" align="center">
                      <h4>获胜队伍/学校</h4>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="height: 40px;" colspan="6">
                      <h4>暂无资料显示</h4>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class='contents content3'>
              <h2 class="classic-title">篮球赛成绩</h2>
              <table style="width: 100%">
                <tbody>
                  <tr>
                    <td style="width: 20%; height: 40px" align="center">
                      <h4>队伍/学校</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center">
                      <h4>得分</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center"></td>
                    <td style="width: 20%; height: 40px" align="center">
                      <h4>队伍/学校</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center">
                      <h4>得分</h4>
                    </td>
                    <td style="width: 30%; height: 40px" align="center">
                      <h4>获胜队伍/学校</h4>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="height: 40px;" colspan="6">
                      <h4>暂无资料显示</h4>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class='contents content4'>
              <h2 class="classic-title">羽球赛成绩</h2>
              <table style="width: 100%">
                <tbody>
                  <tr>
                    <td style="width: 20%; height: 40px" align="center">
                      <h4>队伍/学校</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center">
                      <h4>得分</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center"></td>
                    <td style="width: 20%; height: 40px" align="center">
                      <h4>队伍/学校</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center">
                      <h4>得分</h4>
                    </td>
                    <td style="width: 30%; height: 40px" align="center">
                      <h4>获胜队伍/学校</h4>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="height: 40px;" colspan="6">
                      <h4>暂无资料显示</h4>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class='contents content5'>
              <h2 class="classic-title">排球赛成绩</h2>
              <table style="width: 100%">
                <tbody>
                  <tr>
                    <td style="width: 20%; height: 40px" align="center">
                      <h4>队伍/学校</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center">
                      <h4>得分</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center"></td>
                    <td style="width: 20%; height: 40px" align="center">
                      <h4>队伍/学校</h4>
                    </td>
                    <td style="width: 10%; height: 40px" align="center">
                      <h4>得分</h4>
                    </td>
                    <td style="width: 30%; height: 40px" align="center">
                      <h4>获胜队伍/学校</h4>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="height: 40px;" colspan="6">
                      <h4>暂无资料显示</h4>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- Competition Content End -->
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

  <script>
    $('.wrap').click(function() {
      if ($('input#football').is(':checked')) {
        $('.content1').animate({
          'margin-left': '0'
        });
      } else if ($('input#pingpong').is(':checked')) {
        $('.content1').animate({
          'margin-left': '-100%'
        });
      } else if ($('input#basketball').is(':checked')) {
        $('.content1').animate({
          'margin-left': '-200%'
        });
      } else if ($('input#badminton').is(':checked')) {
        $('.content1').animate({
          'margin-left': '-300%'
        });
      } else if ($('input#volleyball').is(':checked')) {
        $('.content1').animate({
          'margin-left': '-400%'
        });
      }
    });
  </script>
</body>

</html>