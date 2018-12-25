
<!DOCTYPE html>
<html>

  <head>
	<meta charset="utf-8">
	<title>FJUIM-資訊專題線上評分系統</title>

	<link href="\css\bootstrap.min.css" rel="stylesheet">
	<link href="\css\style.css" rel="stylesheet">

	<script type="text/javascript" src="\js\jquery.min.js"></script>
	<script type="text/javascript" src="\js\jquery.url.js"></script>
	<script type="text/javascript" src="\js\bootstrap.min.js"></script>
	<script type="text/javascript" src="\js\jquery.validate.min.js"></script>
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	</head>

    <body id="page-top">

    <div class="container">
		<div class="row clearfix">
			<div class="col-md-12 column">
				<div class="page-header">
					<h1>
						FJUIM-資訊專題線上評分系統
					</h1>
				</div>
				 <!-- /.navbar-header -->
                <div class="collapse navbar-collapse clearfix" id="stuNavbar-collapse">
                    <ul class="nav nav-pills">
					<!--預留給menu class產生-->
					<li><a href="main_index_login.html">首頁</a></li>
                    <li><a href="">申請帳號</a></li>
                    <li><a href="">公告欄</a></li>
                    <li class="active"><a href="專題規則.html">專題規則</a></li>
                    <li><a href="">產學合作列表</a></li>
                    <li><a href="">檔案下載</a></li>
                    <li><a href="小組分配.php">小組分配</a></li>
                    <li><a href="上傳檔案.php">上傳檔案</a></li>

                <div class="collapse navbar-collapse clearfix" id="stuNavbar-collapse">

                    <form action="/student/Account/LogOff" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="pSXl3u8_KJJCkPg0OhM96iUxb3_a3KvC8ywxlx1_lqgmk8BGdwbROUlYRLrrjLczUSGAXCD56piSFaAV9uA05hjcTCN6Q0HMwODoPkJrSRc1" />
                        <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#StudentBasicModal"><i class="fa fa-user fa-fw"></i> 您好，<span class="eudcFont">###</span></a>
                        </li>
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-cog"></i> 功能 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">

                            <li><a id="exportPDF" href="公告欄.php"><i class="fa fa-fw fa-caret-right text-primary"></i> 公告事項 </a></li>
                            <li><a id="eCardLostReissue" href="小組分配.php"><i class="fa fa-fw fa-caret-right text-primary"></i> 小組分配 </a></li>
                            <li><a id="eCardLostReissue" href="上傳檔案.php"><i class="fa fa-fw fa-caret-right text-primary"></i> 上傳檔案 </a></li>

                        </ul>
                    </li>
                    <li>

                        <a href="javascript:void(0);" id="logoutLink"><i class="fa fa-fw fa-sign-out"></i> 登出</a>
                    </li>
                        </ul>
                    </form>    <!-- /.navbar-top-links -->
                </div>
                        </ul>

                <div class="col-xs-12">
                    <div class="page-header">
                        <h3><i class="fa fa-fw fa-sign-in"></i> <b class="text-muted">專題規則</b></h3>
                    </div>
                </div>

                        <!--body view部分-->
                        <div class="row clearfix">
	                       <div class="col-md-8 column col-md-offset-2" style="margin-top:20px;">
		                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			                     <div class="panel panel-info">
				                    <div class="panel-heading" role="tab" id="headingOne">
					                   <h4 class="panel-title">
						                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							                 一、專題課程目的
						                  </a>
					                   </h4>
				                    </div>
				                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					                   <div class="panel-body">
						                  1. 促使學生整合應用所學的知識<br>
						                  2. 提供同學由始至終發展專案的親身體驗<br>
						                  3. 促進同學對研究主題有更深一層的了解<br>
						                  4. 培養團隊合作的精神<br>
					                   </div>
				                    </div>
			                     </div>
			                     <div class="panel panel-info">
				                    <div class="panel-heading" role="tab" id="headingTwo">
					                   <h4 class="panel-title">
						                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							                 二、專題修課限制
						                  </a>
					                   </h4>
				                    </div>
				                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					                   <div class="panel-body">
						                  （一）「系統分析與設計」擋修「資訊系統專題一」。<br>
						                  （二）「資訊系統專題二」成績不及格，需重修「資訊系統專題一」及「資訊系統專題二」。
					                   </div>
				                    </div>
			                     </div>
			                     <div class="panel panel-info">
				                    <div class="panel-heading" role="tab" id="headingThree">
					                   <h4 class="panel-title">
						                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							                 三、專題題目及範圍
						                  </a>
					                   </h4>
				                    </div>
				                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					                   <div class="panel-body">
						                  專題題目宜多元化，同時必須與資訊系統有所關聯，並以使用資訊科技為其主要發展工具，而其難易程度與範圍之大小可由指導老師依該組學生程度自行分配，同時必須在提出專案計畫書時確定。
					                   </div>
				                    </div>
			                     </div>
			                     <div class="panel panel-info">
				                    <div class="panel-heading" role="tab" id="headingFour">
					                   <h4 class="panel-title">
						                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							                 四、專題分組、選取指導老師
						                  </a>
					                   </h4>
				                    </div>
				                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
					               <div class="panel-body">
						              資格條件符合之同學，以組別名義報名（<span class="label label-primary">每組五人</span>），抽籤決定指導老師。<br>
						              採公開抽籤方式選取專題指導老師，請每組至少派一員參加抽籤。<br>
						              &nbsp;
						              <div class="alert alert-danger" role="alert">
							             註一：若單獨個人或少於五人以組別名義報名，則由系上安排分組，不得有異議。<br>
							             註二：若該組無人參與抽籤，助教在宣讀該組組員人名三聲後，尚無人抽簽(他人不得代抽)，視同放棄權利，遞補抽籤後之餘額，同學不得有異議。<br>
							             註三：未繳交志願表者，不得參加抽籤，並遞補抽籤後之餘額。<br>
							             註四：若老師有產學合作或其他特別計畫或使命，可優先指定組別，且不限指定組數。
						              </div>
					               </div>
				                </div>
			                 </div>
			                 <div class="panel panel-info">
				                <div class="panel-heading" role="tab" id="headingFive">
					               <h4 class="panel-title">
						              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							             五、轉組
						              </a>
					               </h4>
				                </div>
				                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
					               <div class="panel-body">
						              雙方指導老師同意即可，但每小組人數仍應維持<span class="label label-primary">五人</span>為原則。需填具『轉組同意書』，由雙方指導老師簽名同意。
					               </div>
				                </div>
			                 </div>
			                 <div class="panel panel-info">
				                <div class="panel-heading" role="tab" id="headingSix">
					               <h4 class="panel-title">
						              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							             六、上課方式
						              </a>
					               </h4>
				                </div>
				                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
					               <div class="panel-body">
						              各組上課方式由指導老師自行決定。
					               </div>
				                </div>
			                 </div>
			                 <div class="panel panel-info">
				                <div class="panel-heading" role="tab" id="headingSeven">
					               <h4 class="panel-title">
						              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
							             七、課程要求
						              </a>
					               </h4>
				                </div>
				                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
					               <div class="panel-body">
						              所須呈交的書面文件或系統展示的時間如下：<br>
						              （一）	文件審查 ─ 於<span class="label label-danger">11月底以前</span>以書面審查方式進行<br>
						              （二）	系統驗收 ─ 於<span class="label label-danger">公開發表前二週</span>進行<br>
						              （三）	正式發表 ─ <span class="label label-danger">三下學期末前</span>之前對外公開發表，繳交正式系統發展文件及系統驗收<br>
						              （四）	繳交專題成品 ─ 三下學期末繳交專題系統光碟及文件完稿
					               </div>
				                </div>
			                 </div>
			                 <div class="panel panel-info">
				                <div class="panel-heading" role="tab" id="headingEight">
					               <h4 class="panel-title">
						              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
							             八、評分方式
						              </a>
					               </h4>
				                </div>
				                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
					               <div class="panel-body">
						              （一）	專題學期分數由專題指導老師評訂。<br>
						              （二）	文件審查階段－評審老師提出改進建議。<br>
                                      （三）	系統驗收階段－評分項目包括：系統文件、系統功能，佔專題發表分數比重之<span class="label label-success">60%</span>。<br>
						              （四）	正式發表階段－評分項目包括：專題發表臨場表現及系統驗收後整體系統功能修改程度，佔專題發表分數比重之<span class="label label-success">40%</span>。<br>
						              （五）	評分細項請參照專題發表評分標準說明。
					               </div>
				                </div>
			                 </div>
			                 <div class="panel panel-info">
				                <div class="panel-heading" role="tab" id="headingNine">
					               <h4 class="panel-title">
						              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
							             九、獎懲方式
						              </a>
					               </h4>
				                </div>
				                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
					               <div class="panel-body">
						              1. 如指導老師不同意組別或個人參加正式發表，視同專題不及格，需重修專題，如有特殊狀況，得由專題評審委員會討論之。<br>
						              2. 優勝隊伍的評選方式是由評審推薦出優秀得獎隊伍，優等組數以<span class="label label-success">30%</span>為原則。<br>
						              3. 重新發表組別的評選方式是由各組評審老師認定不及格的組別或個人，將於一個月後重新發表。<br>
						              4. 重新發表之專題組或個人如評審分數不及格，則重修專題。<br>
						              <div style="color:red">5. 專題作品若涉有舞弊情事，則依輔仁大學學則及考試規則處理。</div>
					               </div>
				                </div>
			                 </div>
		                  </div>
	                   </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
