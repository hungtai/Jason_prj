
<!DOCTYPE html>
<html>

  <head>
	<meta charset="utf-8">
	<title>FJUIM-資訊專題線上評分系統</title>
  <script src="\css\jquery.min.js"></script>
	<link href="\css\bootstrap.min.css" rel="stylesheet">
	<link href="\css\style.css" rel="stylesheet">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
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
					<li><a href="teacher_index_login.html">首頁</a></li>
                    <li><a href="">公告欄</a></li>
                    <li><a href="專題規則.php">專題規則</a></li>
                    <li><a href="">產學合作列表</a></li>
                    <li><a href="">檔案下載</a></li>
                    <li class="active"><a href="文件評分.php">線上評分</a></li>

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
                            <li><a id="eCardLostReissue" href="文件評分.php"><i class="fa fa-fw fa-caret-right text-primary"></i> 線上評分 </a></li>

                        </ul>
                    </li>
                    <li>

                        <a href="javascript:void(0);" id="logoutLink"><i class="fa fa-fw fa-sign-out"></i> 登出</a>
                    </li>
                        </ul>
                    </form>    <!-- /.navbar-top-links -->
                </div>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="page-header">
                <h3><i class="fa fa-fw fa-sign-in"></i> <b class="text-muted">發表評分</b></h3>
            </div>
        </div>

        <div class="container">
            <div class="btn-group btn-group-vertical" style="position:fixed; top:300px; left:250px;">
                <a type="button" class="btn btn-default" href="文件評分.php">文件評分</a>
                <a type="button" class="btn btn-default active" href="發表評分.php">發表評分</a>
                <a type="button" class="btn btn-default" href="評分標準.php">評分標準</a>
            </div>

            <div>
                <table width=100% class=table frame="hsides">
                    <colgroup>
                        <col style="width:100px">
                        <col style="width:250px">
                        <col style="width:px">
                        <col style="width:px">
                        <col style="width:px">
                        <col style="width:px">
                        <col style="width:px">
                    </colgroup>
                    <tr>
                        <th>系統名稱</th>
                        <th>專題組員</th>
                        <th colspan="4">專題發表臨場表現</th>
                    </tr>
                    <tr>
                        <td>###</td>
                        <td>###&emsp;###&emsp;###&emsp;###&emsp;###</td>
                        <td>展示(15%)</td>
                        <td>應對(10%)</td>
                        <td>時間控制(5%)</td>
                        <td>系統功能(10%)</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="form-control" name="present"></td>
                        <td><input type="text" class="form-control" name="talk"></td>
                        <td><input type="text" class="form-control" name="time"></td>
                        <td><input type="text" class="form-control" name="function"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="4">
                            <textarea id="comment" class="form-control" name="post-text" cols="100" rows="15" tabindex="101" data-wz-state="8" data-min-length="" placeholder="請評審給予整組綜合性評語"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="送出" class="btn btn-success"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <p>
                    (1)展示中包含English Presentation 5分鐘，請評審斟酌給分。<br>
                    (2)分數請用ABCDF等級表示：A為優異、B為佳、C為普通、D為有待改進、F為不合格。(建議只選一組評為優異)<br>
                    (3)時間配分標準:<br>
                    &emsp; 15分鐘以下: F &emsp; 15~18分鐘 : C &emsp; 18~20分鐘 : A <br>
                    &emsp; 20~23分鐘 : C &emsp; 23分鐘以上: F <br>
                    (4)安裝耽誤發表時間的扣分標準：<br>
                    &emsp; 開始發表時間延遲2分鐘以上，以F計之<br>
                    &emsp; 延遲超過10分鐘以上由評審老師決定是否發表<br>
                    (5)評審表請各位老師於該評審場次結束後立即交給工讀生或助教
                </p>
            </div>

        </div>

        </div>
    </body>
</html>
