<?php
require('connect.php');
include("auth_admin2.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>预订系统</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/bootstrap-table.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Icons-->
  <script src="js/lumino.glyphs.js"></script>

  <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

  <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $('a[rel*=facebox]').facebox({
        loadingImage: 'src/loading.gif',
        closeImage: 'src/closelabel.png'
      })
    })
  </script>
  <style type="text/css">
    .material-icons.print {
      Font-size: 45px;
      color: #ffffff;
    }

    table,
    tr th div {
      text-align: center;
    }

    tr .text {
      text-align: left;
      max-width: 200px;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
      justify-content: center;
    }

    tr br {
      display: none;
    }
  </style>

</head>

<body>
  <?php
  $header = file_get_contents('header_admin.php');
  echo $header;
  ?>

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home">
              <use xlink:href="#stroked-home"></use>
            </svg></a></li>
        <li class="active">Icons</li>
      </ol>
    </div><!--/.row-->

    <div class="row" style="margin: 20px 0;">
      <div class="panel panel-default">
        <div class="panel-heading" style="width: 100%">活动/通知/公告

          <a class="btn btn-primary" title="Create" href="wannouncement_create.php"
            style="float: right; background: green; border: green; font-size: large; padding: 10px 50px;">New</a>
        </div>


        <div class="panel-body" style="height: fit-content;">
          <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true"
            data-search="true" data-select-item-name="toolbar1" style="font-size:12px">
            <thead>
              <tr>
                <th>ID</th>
                <th>日期</th>
                <th>单位</th>
                <th>标题</th>
                <th>内容</th>
                <th>查看</th>
                <th>编辑</th>
                <th>删除</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include('connect.php');
              $result = mysqli_query($conn, "SELECT *	FROM wannouncement ORDER BY announcement_date DESC");
              while ($row = mysqli_fetch_array($result)) {

                echo '<tr>
                        <td>' . $row['announcement_id'] . '</td>
                        <td>' . $row['announcement_date'] . '</td>
                        <td>' . $row['announcement_dept'] . '</td>
                        <td class="text">' . $row['announcement_title'] . '</td>
                        <td class="text">' . $row['announcement_content'] . '</td>

                        <td>  
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            View
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" >
                            <div class="modal-dialog" role="document" style="height: 100%">
                              <div class="modal-content" style="height: 100%">
                        
                                <!-- Add image inside the body of modal -->
                                <div class="modal-body" style="height: 100%">
                                  <iframe src="http://www1.fyk.edu.my/announcement1@a38b.php?id=' . $row['announcement_id'] . '" frameborder="0" width="100%" height="100%"></iframe>
                                </div>
                        
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td><a class="btn btn-primary" title="Edit" href="wannouncement_edit.php?id=' . $row['announcement_id'] . '">Edit</a></td>
                        <td><a class="btn btn-primary" title="Delete" style="background: red; border-color: red;" href="wannouncement_delete.php?id=' . $row['announcement_id'] . '">Delete</a></td>
                      </tr>';
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div><!--/.row-->

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