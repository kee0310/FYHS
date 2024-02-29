<!-- 
  This page are use to display the history of the school.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 校史 | 宽柔学校</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Header -->
  <?php include('header.php') ?>

  <style>
    .switcher input[type='radio'] {
      display: none;

      &~label {
        font-family: 楷体, KaiTi;
        font-size: 18pt;
        padding: 8px 0;
        background: linear-gradient(to left, rgba(255, 255, 255, 0) 50%, rgb(248, 185, 180) 50%) right;
        background-size: 200%;
        transition: .4s ease-out;
        border-radius: 15px;
        width: 100%;
        text-align: center;

        &:hover {
          background-position: left;
        }
      }

      &:checked+label {
        background-color: darkgrey;
        color: white;
      }
    }

    .year {
      font-weight: bold;
      padding: 0 10px;
      margin: 20px;
      font-size: x-large;
      border-bottom: 1px solid salmon;
      width: fit-content;
    }

    .paragraph {
      list-style: none;

      & li {
        padding-left: 3em;
        text-indent: -1.6em;

        &::before {
          content: '❀';
          background: red;
          background-clip: text;
          -webkit-text-fill-color: transparent;
          font-size: x-large;
          padding-right: 6px;

        }

        &:last-child {
          padding-bottom: 50px;
        }
      }
    }
  </style>

</head>

<body>

  <!-- Page Banner -->
  <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner18.jpg) center; background-size: cover;">
    <div class="container">
      <div class="col-md-6">
        <h2>校史</h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <a href="index.php">
            <li><i>首页 /&ensp;</i></li>
          </a>
          <a href="history.php">
            <li><i>校史</i></li>
          </a>
        </ul>
      </div>
    </div>
  </div>


  <!-- Content -->
  <div id="content">
    <div class="container">
      <div class="page-content">
        <!-- Switcher for Year-->
        <div class="col-md-3">
          <div class="switcher" onchange=switcher() style="width: 100%; padding:15px; display: block;">
            <div>
              <input type="radio" id="y1" name="year" checked />
              <label for="y1">1998 - 2010 ></label>
            </div>
            <div>
              <input type="radio" id="y2" name="year" />
              <label for="y2">2011 - 2020 ></label>
            </div>
            <div>
              <input type="radio" id="y3" name="year" />
              <label for="y3">2021 - 2024 ></label>
            </div>
          </div>
        </div>

        <!-- Year 1: 1998 - 2010 -->
        <div id="c1" class="col-md-9">
          <div class="year">
            1998年
          </div>
          <ul class="paragraph">
            <li>由宽中董事会、新山中华公会、宽柔校友会及新山五帮会馆联合组成的“申办分校委员会”正式成立并向政府提呈备忘录。在校地的考量上，最初是新山中华公会捐献出属下振林山油棕园25英亩地段作为未来分校的校址。随后，校方物色到更理想的地段，那就是云顶集团属下亚地发展有限公司在古来优美城一片卅英亩的地段，这片地段将转换为教育用地。因此，新山中华公会同 意收回献地并同意捐献270万令吉，用以购买位于古来优美城的校地以设立宽中分校。</li>
          </ul>

          <div class="year">
            2000年
          </div>
          <ul class="paragraph">
            <li>柔佛州教育局致函校方并表示原则上批准宽中在古来优美城扩建分校。</li>
            <li>7月，筹办宽中分校委员会和亚地发展有限公司于吉隆坡云顶大厅签署买卖意向书，双方同意以270万令吉购买30英亩校地。丹斯里林梧桐更在签约仪式上宣布捐献200万令吉作为扩建基金。校方同意建校完成以后，礼堂以“丹斯里林梧桐大礼堂”命名。</li>
            <li>8月20日，适逢宽柔创校87周年校庆，以宽柔校友会为主举办万人宴，并号召各地校友一起回家，力创分校。同时，为了配合华人文化节，宴会上也演出展示华人南来开荒拓野的史诗剧“南方之路”。</li>
          </ul>

          <div class="year">
            2002年
          </div>
          <ul class="paragraph">
            <li>1月22日，校方邀请了23位嘉宾联合主持宽中分校动土典礼。当天，出席观礼见证的华教热心人士多达400多人。</li>
            <li>7月，分校推泥工程正式展开。</li>
          </ul>

          <div class="year">
            2003年
          </div>
          <ul class="paragraph">
            <li>校方与工程承包商正式签署合约，第一期建校工程包括：两栋教学楼含100间课室、礼堂、学生食堂、运动场、篮球场、校门、电房、蓄水塔，为期一年竣工。</li>
            <li>6月，建校工程正式开始，第一根基石插入教学楼28米深的土地内。</li>
          </ul>

          <div class="year">
            2004年
          </div>
          <ul class="paragraph">
            <li>11月13日，启航万人宴在宽中分校大操场举行，出席人数达八千人之多，宴开八百席。当晚宴会共筹得160万令吉，财政部副部长黄燕燕医生在晚宴上将财政部发出的1千900万令吉免税证交给董事长林俊民先生。</li>
          </ul>

          <div class="year">
            2005年
          </div>
          <ul class="paragraph">
            <li>1月3日，宽中分校正式开课，宽中分校1千1百多名初一及初二的学生及50名教师正式在宽中分校的校园上课，颜光辉出任署理校长。</li>
            <li>7月24日，宽中古来分校举行第二期建校工程奠基典礼，受邀主持奠基的嘉宾共38人。奠基仪式之后，丹斯里郭鹤尧为分校校名匾额主持解封仪式。进行奠基的第二期建校工程包括一座综合大楼、一座图书楼、一座技职楼、一座科学楼和一座活动中心，工程8月动工，15个月时间兴建完成。</li>
            <li>10月8日，南洋商报十大歌星义演在分校举行，当晚共筹得100万令吉。</li>
          </ul>

          <div class="year">
            2006年
          </div>
          <ul class="paragraph">
            <li>6月，由TIGER BEER呈献，星洲日报、光明日报联办TIGER星洲华教义演在宽中分校大礼堂举行。当晚成功为分校筹获RM1,142,415，并邀请卫生部长拿督蔡细历医生主持开幕。蔡部长也在当晚宣布拨款20万令吉。</li>
            <li>10月28日举行第一届初中部毕业典礼，毕业生358人。</li>
          </ul>

          <div class="year">
            2007年
          </div>
          <ul class="paragraph">
            <li>增设高中部，开办的高中课程包括理科、文商科和技职科的电机电子科、餐饮管理科，其中电机电子科高二高三班级的学生是由新山总校迁移过来，餐饮管理科则是宽柔中学首次开办。</li>
            <li>3月17日，宽中分校郑格如综合大楼举办落成开幕仪式，并恭请新加坡郭兄弟有限公司董事郭运光女士及马来西亚郭兄弟有限公司董事郭孔辅先联合主持揭幕仪式。</li>
            <li>教务处主任彭进财升任副校长兼任教务处主任。</li>
            <li>4月14日，宽中分校丹斯里林梧桐大礼举行开幕仪式，并邀请云顶集团主席丹斯里林国泰、亚地发展主席TAN SRI MOHD AMIN BIN OSMAN等一同出席见证。开幕人为丹斯里林国泰。</li>
            <li>8月4日，宽中分校丹斯里高级拿督张愈昌技职楼举行落成开幕仪式。丹斯里高级拿督张愈昌为开幕人。</li>
            <li>8月12日，于升旗广场举办隆重的宽友图书楼、中华体育场、各课室的开幕仪式。</li>
            <li>10月28日，举行第一届高中部毕业典礼，毕业生58人(电机电子科)。</li>
          </ul>

          <div class="year">
            2008年
          </div>
          <ul class="paragraph">
            <li>6月份，颜光辉署理校长升任第二任校长。（2014年修改）</li>
            <li>7月18日，举办第一届运动会。</li>
            <li>8月30日举行95周年校庆和第一届文娱表演晚会。</li>
          </ul>

          <div class="year">
            2009年
          </div>
          <ul class="paragraph">
            <li>1月份，开学全校学生3937人，拥有从初一至高三的完整年段。</li>
            <li>训导处主任黄慧珠升任副校长兼任训导处主任。</li>
            <li>17位老师参加与新纪元学院联办的第一届教育专业课程。</li>
            <li>招收第一批数位教学种子老师。</li>
          </ul>

          <div class="year">
            2010年
          </div>
          <ul class="paragraph">
            <li>8月28日邀请丹斯里黄家定主持雨盖篮球场启用仪式。</li>
            <li>全校铺设光缆和安装无线网络基站。</li>
            <li>招收第二批数位教学种子老师。</li>
          </ul>
        </div>

        <!-- Year 2: 2011 - 2020 -->
        <div id="c2" class="col-md-9" style="display:none;">
          <div class="year">
            2011年
          </div>
          <ul class="paragraph">
            <li>总校校长许宗森兼任分校校长，副校长兼训导处主任黄慧珠升任第一副校长，总校副校长兼教务处主任江宁福调任分校第二副校长。</li>
            <li>24位老师参加第二届教育专业课程。</li>
            <li>招收第三批数位教学种子老师。</li>
            <li>11月17日 宽中与槟城韩江中学缔结姐妹校。</li>
          </ul>

          <div class="year">
            2012年
          </div>
          <ul class="paragraph">
            <li>招收第三批第二阶段数位教学种子老师。</li>
            <li>修建运动场，扩大跑道。</li>
            <li>主办第九届全柔独中运动会。</li>
            <li>8月11日，竖立在李光前教学楼前，已故黄继翔校长墨迹─“爱我宽柔 造福人群”牌匾举行揭幕仪式。牌匾由新山宽柔校友会筹建。牌匾内涵凸显宽中办学理念，激发爱校精神，为学做人态度。</li>
            <li>12月12日董事会联合华团及各区协理会主办联欢宴会筹募清寒学生助学金基金。</li>
          </ul>

          <div class="year">
            2013年
          </div>
          <ul class="paragraph">
            <li>许宗森校长退休，由黄慧珠第一副校长接任第四任校长，第二副校长江宁福任副校长，训导处主任黄子锦升任副校长兼训导处主任。</li>
            <li>5月18日，配合在总校举行的宽柔学村百年庆，全校师生在中华体育场进行“挥千旗 祝福寿”，高举红彤彤的“福”字“寿”字祝贺语，排出气势非凡“百”字造型。</li>
            <li>举办第一届校内创意竞赛—创改1.0。</li>
            <li>8月3日举行分校校庆庆典、“宽柔石”揭幕仪式和宽中丛书《微言集》、《张礼铭柔佛地方史略》新书推介礼。</li>
            <li>建设长达600米衔接雨盖篮球场与校外走道之雨盖走廊。</li>
            <li>宽中两校荣获教育部私立教育组颁发五星级评估奖（2012年进行评估）。</li>
            <li>9月7日举行第二届教育专业文凭课程结业礼，分校26位老师获颁证书。</li>
            <li>11月14日，校方主办第一届学科教学分享会暨数位教学成果发表会，当天共有19位老师进行15场专题分享，全校老师可从中增进学科之间的了解与观摩不同的教学技巧。</li>
            <li>12月开始，19位教师参加与新纪元学院合办的第三届中文组教育专业课程。校方同时与新纪元学院合办的第一届英文组教育专业课程，分校共有20位老师参与。</li>
          </ul>

          <div class="year">
            2014年
          </div>
          <ul class="paragraph">
            <li>为持续达致全校老师均掌握数位教学技术，校方招收第四批数位教学种子老师，共有36位教师参与。</li>
            <li>因应科技教学趋势，视听教育馆所管理的两间多媒体课室改建为智慧课室。</li>
            <li>6月增设一位副校长，由教务主任谭细湄兼任。</li>
            <li>6月18日，全校4800多名师生参与“爱我宽柔一定行”越野步行活动，环绕校园内外与邻近油棕园，全程约4公里。</li>
            <li>7月4及5日举行第四届校庆运动会。</li>
            <li>欢庆宽柔101周年暨古来分校10周年纪念，8月23日举行“10周年纪念石”揭幕仪式和《宽柔中学古来分校10周年纪念特刊》、《2014年联课活动团体特辑》、《十载爱校—附家在古来》、《2014年宽中古来分校老师作品集》新书推介礼。9月6日于大礼堂举行分校首次承办的校庆联欢晚宴。</li>
          </ul>

          <div class="year">
            2015年
          </div>
          <ul class="paragraph">
            <li>6月开始，43位教师参加与新纪元学院合办的第五届中文组教育专业课程。</li>
            <li>6月27日，举行第一届成年礼（高三学生）。</li>
            <li>在图书楼三楼建设两间电脑设备的英语自学室。</li>
            <li>出版《学生三语文集1》</li>
            <li>11月，常务主任一行16人参加海南省教育参访团，到海口华侨中学、海口市实验中学、万宁中学和文昌中学参访并与4校领导交流。</li>
          </ul>

          <div class="year">
            2016年
          </div>
          <ul class="paragraph">
            <li>1月，拟订并执行2016-2018年《校长5年中、长期及各部门3年中、短期发展计划》。</li>
            <li>宽中两校荣获教育部私立教育组颁发五星级评估奖（2015年评估）</li>
          </ul>

          <div class="year">
            2017年
          </div>
          <ul class="paragraph">
            <li>1月，推行高三学分选修课，共开73门课，分专题、统考加强辅导和兴趣三大类课程。</li>
            <li>3月19日-25日，正副校长及常务主任一行16人到北京市两所大学（北京大学和清华大学）和3所中学（北大附中、清华附中和汇文中学）参访并交流学习。</li>
            <li>6月份完成高三课室的智慧白板的安装并使用。</li>
            <li>7月31日首办全校运动日，活动项目计有：”爱我宽柔一定行”越野步行、全校球类决赛、20人21足比赛、趣味竞技游戏和体育达标项目。</li>
            <li>7月，ISO 品质管理系统9001:2008提升为ISO 品质管理系统9001:2015。</li>
            <li>10月,宽柔中学与台湾高雄中学缔结姐妹校。</li>
          </ul>

          <div class="year">
            2018年
          </div>
          <ul class="paragraph">
            <li>教务处蔡劲雄主任升任副校长，兼任教务处主任。</li>
            <li>8月初，丹斯里林梧桐大礼堂安装LED大屏幕（18‘ x 36’）.</li>
            <li>8月11日宽柔学校105周年校庆日举行校史室开幕仪式，邀请前任董事长林俊民先生、前任董事长陈伟雄先生和董事长童星存先生担任联合开幕嘉宾。</li>
          </ul>

          <div class="year">
            2019年
          </div>
          <ul class="paragraph">
            <li>联课活动处颜壮志主任升任副校长，兼任联课活动处主任。</li>
            <li>拟订并执行2019-2021年《校长5年中、长期及各部门3年中、短期发展计划》。</li>
            <li>开始招收宽中至达城分校2020年初一学生，宽中联合招生委员会调整小学分区的安排（原在B区的小学国光二校划入A区小学）。</li>
          </ul>
        </div>

        <!-- Year 3: 2021 - 2024 -->
        <div id="c3" class="col-md-9" style="display:none;">
          <div class="year">
            2020年
          </div>
          <ul class="paragraph">
            <li>江宁福副校长赴新山校本部上任至达城分校校长。</li>
            <li>事务处李锦星主任升任副校长，兼任事务处主任。</li>
            <li>因新冠肺炎疫情政府实施全国行动管制令。校方自3月24日起至9月5日开展网上教学，学校停课期间坚守“停课不停学”的大原则，师生教学活动持续进行。</li>
            <li>受疫情影响改变庆祝校庆方式，举行简单隆重校庆庆典，并首次举办校庆艺术展及线上直播义卖活动。</li>
            <li>配合教育部颁布《学校复课防疫指南》，课室无法容纳一整班学生，故从6月24日高二高三复课起，所有班级分拆两间课室，利用视频连线上课。7月15日起初一至高一全面复课，唯因课室不足，采取轮流到校上课，其余时间安排网课。</li>
            <li>为让学生恢复每天到校上课的正常学习生活，自9月7日起施行上下午班上课制度。</li>
            <li>宽中三校首次采用不同试卷同步进行初一新生入学试，各自划定标准分数录取新生。</li>
          </ul>

          <div class="year">
            2021年
          </div>
          <ul class="paragraph">
            <li>因新冠肺炎疫情政府继续实施全国行动管制令，1月20日开学日起全校师生居家网课。</li>
            <li>自3月起全国疫情稍有舒缓，全体师生于4月5日返校恢复实体课。唯，配合教育部规定复课防疫指南中课室座位安全距离，初中部20%学生每日需轮流居家与课堂连线，同步学习。高中部则因班级人数较少或是调至大型课室而不受影响。</li>
            <li>4月15日至24日，因接获学生确诊感染病例通知，根据教育部防疫措施规定而关闭校园，4月16日起全面恢复居家网课学习，至4月24日。</li>
            <li>4月26日恢复实体课，唯5月5日再度接获确诊案例而紧急停课，并再次启动网课。</li>
            <li>受疫情影响展延校庆活动，于10月9日举行校庆庆典，并首次以线上直播方式举办。9月25日及11月4日两次举办线上直播义卖。11月27日至30日举办校庆书画展。</li>
            <li>因师生长时间无法回校复课，经慎重讨论，将高二高三年中考、初一至高一下半年期考、高初三毕业考及初一至高二学年考皆改以线上考试方式进行。</li>
            <li>因疫情仍未舒缓，初一新生入学试在两次展延后，于11月13日三校同步举办“线上”初一新生入学试。</li>
            <li>11月20日举办线上成年礼。</li>
          </ul>

          <div class="year">
            2022年
          </div>
          <ul class="paragraph">
            <li>配合行政业务需求，2022年度开学日延后一星期至1月10日，当天举办开学典礼。</li>
            <li>教育部延长2021年度学期至2022年3月，导致初一年段学生1月至3月份上午需在各自小学上课，下午则安排每星期21节网课，以进行中学课程。至3月份才回校复课。</li>
            <li>政府宣布新冠肺炎疫情自4月1日起过渡至地方性流行病阶段，为了减少校园内下课拥挤的程度，校方将每个下课皆延长10分钟，并调整第二个下课时段，让高初中分开下课。</li>
            <li>3月至9月首次在高一年段推行“课外实践活动学习计划”，共10组学生自愿报名参与。2023年正式以“综合实践活动课程”方式推动全高一年段同学参与。</li>
            <li>10月，三校ISO 品质管理系统9001:2015转变为多点认证(Multi-site Certification)</li>
          </ul>

          <div class="year">
            2023年
          </div>
          <ul class="paragraph">
            <li>升学辅导处郑叶枫主任升任副校长，兼任升学辅导处主任。</li>
            <li>事务处蔡顺程主任升任副校长，兼任事务处主任。</li>
            <li>配合行政业务需求，2023年度开学日延后一星期至1月9日，当天举办开学典礼。初一年段第一学期进行网课。上课与休息时间全面调整，每节课时40分钟。</li>
            <li>为了更深入地推动德育课程，在每个年段增设2节“品格与公民教育课”课程，课程由班主任负责指导。通过课程，更加有针对性地培养学生的品德修养与公民意识。</li>
            <li>正式在全高一年段推行“综合实践活动课程”项目，全年段共计127组参与。</li>
            <li>1月9日至18日，与马来西亚现代国际书画联盟联合举行癸卯年“春闹宽柔”春联义展。宽中三校首次联合举办全校挥春比赛，并于1月18日联合展示13264幅春联，缔造“展示最多春联”的马来西亚记录大全。</li>
            <li>5月20及21日，首次举行校园开放日，主题为“梦想从这里起航”，欢迎小学生及家长到校参观。</li>
            <li>5月27至30日，本校轮值举办“第16届全柔华文独中球类锦标赛”。因天气酷热，教育部禁止户外运动项目，故足球赛展延至9月15至17日进行。</li>
            <li>8月6日，配合宽柔学校110周年校庆，于大礼堂举办“用宽柔的脚步·走世界的道路”校庆联欢晚宴，共开126席桌。</li>
            <li>8月12及13日，配合校庆日，首度举办校庆摄影展。</li>
            <li>9月10日，黄慧珠校长荣获第7届李子松杰出行政人员奖，董事及行政人员一同出席于吉隆坡冼都银星宴会厅举办的第8届吴德芳杰出华文教师奖颁奖典礼。</li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <script>
    function switcher() {

      if (document.getElementById("y1").checked) {
        document.getElementById("c1").style.display = "block";
      } else {
        document.getElementById("c1").style.display = "none";
      }
      if (document.getElementById("y2").checked) {
        document.getElementById("c2").style.display = "block";
      } else {
        document.getElementById("c2").style.display = "none";
      }
      if (document.getElementById("y3").checked) {
        document.getElementById("c3").style.display = "block";
      } else {
        document.getElementById("c3").style.display = "none";
      }
    }
  </script>

</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>