<?php
require('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <title>综合实践活动课程</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

</head>

<style>
  .panel-content span {
    color: #7b98ff;
    padding: 0 5px;
  }

  .column {
    border: 1px solid transparent;
    border-image: var(--second-color);
    border-image-slice: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
  }

  .column img {
    width: 100%;
    max-width: 300px;
    object-fit: cover;
    margin: auto;
    min-height: 150px;
  }

  .column div {
    padding: 20px;
  }

  .panel-content ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .panel-content ul li {
    padding-left: 2em;
    text-indent: -1.6em;
  }

  .panel-content ul li::before {
    content: '❀';
    color: #7b98ff;
    font-size: x-large;
    padding-right: 10px;
  }

  .panel-content ol {
    list-style: none;
    counter-reset: li;
    padding: 0;
    margin: 0;
  }

  .panel-content ol li {
    counter-increment: li;
    padding-left: 2em;
    text-indent: -1.6em;
  }

  .panel-content ol li::before {
    content: counter(li) ". ";
    color: #7b98ff;
    font-weight: bold;
    letter-spacing: 3px;
  }

  .carousel-indicators li {
    padding: 0 20px;
  }

  .carousel-indicators li:hover {
    transform: scale(1.1) !important;
  }

  .carousel-indicators .active {
    transform: scale(1.1) !important;
  }
</style>

<body>
  <?php
  $header = file_get_contents('header.php');
  echo $header;
  ?>

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="">活动说明</a></li>
      </ol>
    </div><!--/.row-->


    <div class="panel panel-default">
      <div class="panel-heading">参与对象</div>
      <div class="panel-body">
        <div class="panel-content">
          <div style="display: flex; justify-content: center;">
            <span>ඞඞ</span>
            <p>全体高一学生，组队申请。</p>
            <span>ඞඞ</span>
          </div>
          <div style="display: flex; justify-content: center;">
            <span>ඞඞ</span>
            <p>每个小组至少4人且不得超过10人。</p>
            <span>ඞඞ</span>
          </div>
          <div style="display: flex; justify-content: center;">
            <span>ඞඞ</span>
            <p>每一组可邀请一位指导老师。</p>
            <span>ඞඞ</span>
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">实行方向与种类</div>
      <div class="panel-body">
        <div class="panel-content" align="center">
          <div style="display: grid; background: white; padding:0; max-width: 800px;">
            <div class="column">
              <div class="col-md-4">
                <img src="https://www.iferp.in/assets/images/ban1.jpg" alt="">
              </div>
              <div class="col-md-8">
                <b style="color: #7b98ff;">以研究为主的方法和过程。</b>
                <p>包括制定方案、调查、访问、观察、实验、统计、信息收集与处理等。</p>
              </div>
            </div>
            <div class="column" style="border-top:none;">
              <div class="col-md-4">
                <img src="https://www.planstreetinc.com/wp-content/uploads/2022/09/Social-Services-1200x675.jpg" alt="">
              </div>
              <div class="col-md-8" style="text-align: center; padding: 20px">
                <b style="color: #7b98ff;">以社会实践和社区服务活动为主的方法和过程。</b>
                <p>包括参观、考察、服务、宣传、义务劳动、经济活动等。</p>
              </div>
            </div>
            <div class="column" style="border-top:none;">
              <div class="col-md-4">
                <img
                  src="https://blog.adobe.com/en/publish/2020/01/01/media_1fc4cb174873280e8cd41adfe0599c31d5644dd6c.png?width=1200&format=pjpg&optimize=medium"
                  alt="">
              </div>
              <div class="col-md-8">
                <b style="color: #7b98ff;">以项目设计和技术实践为主的方法和过程。</b>
                <p>包括项目立项与研究、设计、制作、研制、种植、养殖、信息发布，以及科技小发明、小制作等技术实践，鼓励学生大胆创新。</p>
              </div>
            </div>

          </div>
          <span style="color: #7b98ff; font-size: x-large; font-weight: bold;">⚝</span>
          <i>这三类活动可以相对独立，也可以互融合，融汇贯通。</i>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">实施流程</div>
        <div class="panel-body">
          <div class="panel-content">
            <ol>
              <li>组织小组，提出申请。</li>
              <li>邀请指导老师。</li>
              <li>启动说明会。</li>
              <li>完成较详细的计划书，建立目标、确定范围、实施方案、预算案等。</li>
              <li>落实并实践计划（ 2月 ～ 6月 ），完成执行报告。</li>
              <li>申请答辩（ 7月 - 9月 ）。</li>
              <li>完成答辩并获得实践成绩 **备注3。</li>
            </ol>
          </div>

          <h3>申请方式</h3>
          <div class="panel-content">
            <ul>
              <li>到系统填写电子申请表格。</li>
              <li>申请截止日期：-</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">执行报告内容</div>
        <div class="panel-body">
          <div class="panel-content">
            <ul>
              <li>目录</li>
              <li>绪论（计划背景与目的）。</li>
              <li>执行方法与过程。</li>
              <li>过程中面对的问题及解决方案。</li>
              <li>结论与建议。</li>
              <li>附录与致谢。</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">答辩</div>
          <div class="panel-body">
            <div class="panel-content">
              <ul>
                <li>由校方委派3位老师，针对小组的执行报告进行答辩环节，并给予答辩成绩。</li>
                <li>答辩环节将安排在7月至9月份进行，日期待定。</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">实践成绩</div>
          <div class="panel-body">
            <div class="panel-content">
              <ul>
                <li>成绩将记录在学年成绩单上。</li>
                <li>完成之执行报告将编定成册，收录于图书馆供参考。</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          实践活动开展步骤
        </div>
        <div class="panel-body">
          <h3>志趣相投之学生邀请老师共同进行实践活动计划</h3>
          <div class="panel-content">
            <ol>
              <li>制定计划。</li>
              <li>建立目标。</li>
              <li>确定范围。</li>
              <li>注重学习的氛围和环境。</li>
              <li>落实并实践计划，过程中自我检讨和反省。</li>
            </ol>
          </div>

          <h3>申请流程</h3>
          <div class="panel-content">
            <ol>
              <li>成立实践小组，制定计划。</li>
              <li>申请通过后邀请指导老师。</li>
              <li>建立目标、确定范围、拟定预算，提呈“实践活动计划书”。</li>
              <li>落实并实践计划（半年）。</li>
              <li>申请答辩。</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          实践活动计划时间表
        </div>
        <div class="panel-body">
          <h3>2023年</h3>
          <div class="panel-content">
            <ul>
              <li>26/10 &#x21AA; 说明会暨分享会</li>
              <li>26/10 - 25/11 &#x21AA; 组队登记4-10人/组</li>
              <li>假期中 &#x21AA; 构思议题</li>
            </ul>
          </div>

          <h3>2024年</h3>
          <div class="panel-content">
            <ul>
              <li>1月份 &#x21AA; 填写申请表</li>
              <li>1月份 &#x21AA; 邀请指导老师</li>
              <li>2月份 &#x21AA; 启动说明会</li>
              <li>2-6月份 &#x21AA; 开始实践活动</li>
              <li>3月份 &#x21AA; 提交计划书</li>
              <li>6月份 &#x21AA; 完成执行报告</li>
              <li>7-9月份 &#x21AA; 答辩</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div><!--/.main-->

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/bootstrap-table.js"></script>

  <script>
    !function ($) {
      $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
        $(this).find('em:first').toggleClass("glyphicon-minus");
      });
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script>
</body>

</html>