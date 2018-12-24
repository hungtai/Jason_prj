
<!DOCTYPE html>
<html>

  <head>
	<meta charset="utf-8">
	<title>FJUIM-資訊專題線上評分系統</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="http://project.im.fju.edu.tw/public/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://project.im.fju.edu.tw/public/css/style.css" rel="stylesheet">

	<script type="text/javascript" src="http://project.im.fju.edu.tw/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://project.im.fju.edu.tw/public/js/jquery.url.js"></script>
	<script type="text/javascript" src="http://project.im.fju.edu.tw/public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://project.im.fju.edu.tw/public/js/jquery.validate.min.js"></script>
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
					<li><a href="teacher_index_login.php">首頁</a></li>
                    <li><a href="">公告欄</a></li>
                    <li><a href="專題規則.php">專題規則</a></li>
                    <li><a href="">產學合作列表</a></li>
                    <li><a href="">檔案下載</a></li>
                    <li class="active"><a href="帳號管理.php">帳號管理</a></li>
                    <li><a href="評分組別分配.php">評分組別分配</a></li>

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
                            <li><a id="eCardLostReissue" href="帳號管理.php"><i class="fa fa-fw fa-caret-right text-primary"></i> 帳號管理 </a></li>
                            <li><a id="eCardLostReissue" href="評分組別分配.php"><i class="fa fa-fw fa-caret-right text-primary"></i> 評分組別分配 </a></li>

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
                <h3><i class="fa fa-fw fa-sign-in"></i> <b class="text-muted">帳號管理</b></h3>
            </div>
        </div>

        <div class="container">
            <div class="btn-group btn-group-vertical" style="position:fixed; top:300px; left:250px;">
                <a type="button" class="btn btn-default" href="帳號管理_學生.html">學生帳號管理</a>
                <a type="button" class="btn btn-default active" href="帳號管理_教師.html">教師帳號管理</a>
            </div>
        </div>
        <div>
            <table width=100% class=table align="center" style="table-layout:fixed">
                <tr>
                    <th>姓名</th>
                    <th>ID</th>
                    <th>權限</th>
                </tr>
                <tr>
                    <td>###</td>
                    <td>000001</td>
                    <td><input type="radio" name="teach" value="1">指導老師&emsp;<input type="radio" name="score" value="2">評分老師</td>
                </tr>
                <tr>
                    <td>###</td>
                    <td>000002</td>
                    <td><input type="radio" name="teach" value="1">指導老師&emsp;<input type="radio" name="score" value="2">評分老師</td>
                </tr>
                <tr>
                    <td>###</td>
                    <td>000003</td>
                    <td><input type="radio" name="teach" value="1">指導老師&emsp;<input type="radio" name="score" value="2">評分老師</td>
                </tr>
                <tr>
                    <td>###</td>
                    <td>000004</td>
                    <td><input type="radio" name="teach" value="1">指導老師&emsp;<input type="radio" name="score" value="2">評分老師</td>
                </tr>
                <tr>
                    <td>###</td>
                    <td>000005</td>
                    <td><input type="radio" name="teach" value="1">指導老師&emsp;<input type="radio" name="score" value="2">評分老師</td>
                </tr>
                <tr>
                    <td>###</td>
                    <td>000006</td>
                    <td><input type="radio" name="teach" value="1">指導老師&emsp;<input type="radio" name="score" value="2">評分老師</td>
                </tr>
                <tr>
                    <td>###</td>
                    <td>000007</td>
                    <td><input type="radio" name="teach" value="1">指導老師&emsp;<input type="radio" name="score" value="2">評分老師</td>
                </tr>
                <tr>
                    <td>###</td>
                    <td>000008</td>
                    <td><input type="radio" name="teach" value="1">指導老師&emsp;<input type="radio" name="score" value="2">評分老師</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="儲存" class="btn btn-success"></td>
                </tr>
            </table>
        </div>
        </div>
    </body>
</html>
