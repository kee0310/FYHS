<?php
include("exe/auth_admin.php");
include("header_admin.php");
include('connect.php');
?>

<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>学生课外实践活动</title>

  <link rel="alternate" href="print/admin_evaluation_form01.php">

</head>

<style>
  #printableArea {
    display: none;
  }

  @media print {
    #printableArea {
      display: block;
    }
  }
</style>

<body>

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home">
              <use xlink:href="#stroked-home"></use>
            </svg></a></li>
        <li class="active">
          <?php
          $id = $_SESSION['id'];
          $result = mysqli_query($conn, "SELECT * FROM zadmin_detail WHERE admin_id='$id'");
          $row = mysqli_fetch_assoc($result);
          $department = $row['admin_department'];

          echo $department;
          echo ": ";
          echo $id;
          ?>
        </li>
      </ol>
    </div><!--/.row-->


    <div class="panel panel-default" style="margin-top: 20px">
      <div class="panel-heading">各项实践报告：评审1 60%、评审2 60%、评审3 60% = （60+60+60）/3</div>

      <div class="panel-body">
        <table data-toggle="table" check="1" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
          <thead>
            <tr>
              <th data-sortable="true">队伍编号</th>
              <th data-sortable="true">项目名称</th>
              <th data-sortable="true">项目英文名称</th>
              <th data-sortable="true">指导老师</th>
              <th data-sortable="true">活动报告</th>
              <th data-sortable="true">允许删除</th>
              <th data-sortable="true">答辩1</th>
              <th data-sortable="true">答辩2</th>
              <th data-sortable="true">答辩3</th>
              <th data-sortable="true">报告1</th>
              <th data-sortable="true">报告2</th>
              <th data-sortable="true">报告3</th>
              <th data-sortable="true">总分</th>
              <th data-sortable="true">平均分</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $result = mysqli_query(
              $conn,
              "SELECT a.*, b.research_topic, b.research_topic_en, b.teacher_name
							
							FROM zgroup_report a

							LEFT JOIN zgroup_research b ON a.group_id = b.group_id
              COLLATE utf8_unicode_ci
              
							LEFT JOIN zstudent_detail c ON a.group_id = c.student_id
              COLLATE utf8_unicode_ci
							"
            );
            while ($row = mysqli_fetch_array($result)) {
              $marktotal = $row["pdf_report01"] + $row["pdf_report02"] + $row["pdf_report03"] + $row["pdf_present01"] + $row["pdf_present02"] + $row["pdf_present03"];
              $markaverage = $marktotal / 3;
            ?>

              <tr>
                <td>
                  <div name="btnChangeSource" onclick="printPdf('<?= $row['group_id']; ?>')"><?= $row["group_id"]; ?></div>
                </td>

                <td><a href="admin_markReport.php?id=<?= $row["group_id"]; ?>"><?= $row["research_topic"]; ?></a></td>
                <td><?= $row["research_topic_en"]; ?></td>
                <td><?= $row["teacher_name"]; ?></td>
                <td><a href="pdf/report/<?= $row["pdf_file"]; ?>" target="_blank"><?= $row["pdf_file"]; ?></a></td>
                <td>
                  <?php
                  if ($row["editable"] == 1) {
                    echo '<a href="exe/change_editable.php?table=zgroup_report&id=' . $row["group_id"] . '&editable=0"><span style="color:green">能够</span></a>';
                  } elseif ($row["editable"] == 0) {
                    echo '<a href="exe/change_editable.php?table=zgroup_report&id=' . $row["group_id"] . '&editable=1"><span style="color:red">不能够</span></a>';
                  } else {
                    echo 'Error';
                  }
                  ?>
                </td>
                <td><?= $row["pdf_present01"]; ?></td>
                <td><?= $row["pdf_present02"]; ?></td>
                <td><?= $row["pdf_present03"]; ?></td>
                <td><?= $row["pdf_report01"]; ?></td>
                <td><?= $row["pdf_report02"]; ?></td>
                <td><?= $row["pdf_report03"]; ?></td>
                <td><?= $marktotal; ?></td>
                <td><?= round($markaverage, 1); ?></td>
              </tr>

            <?php
            }
            ?>
          </tbody>
        </table>

        <div id="frPDF" style="display: none;">The div that should be appended</div>
      </div>
    </div>

  </div><!--/.main-->

  <script>
    function printPdf(id) {
      let div = document.querySelector("#frPDF");
      div.outerHTML = '<iframe id="frPDF" style="display: none;" src="print/admin_evaluation_form01.php?id=' + id + '" frameborder="0"></iframe>'

      let iframe = document.frames ? window.frames.frames["frPDF"] : document.getElementById("frPDF");
      let ifWin = iframe.contentWindow || iframe;

      try {
        ifWin.focus();
        ifWin.print();
      } catch (e) {
        window.print(false);
      }

      return false;
    }
  </script>

</body>

</html>