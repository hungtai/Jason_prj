
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
                    <li><a href="">公告欄</a></li>
                    <li><a href="專題規則.php">專題規則</a></li>
                    <li><a href="">產學合作列表</a></li>
                    <li><a href="">檔案下載</a></li>
                    <li class="active"><a href="小組分配.html">小組分配</a></li>
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
                <div class="col-xs-12">
                    <div class="page-header">
                        <h3><i class="fa fa-fw fa-sign-in"></i> <b class="text-muted">小組分配</b></h3>
                    </div>
                </div>

                <div class="page-header">
                    <div class="form-group">

                    </div>
                    <table style="width:100%" class=table frame="hsides">
                        <thead>
                            <tr>
                                <th>系統名稱</th>
                                <th>組長</th>
                                <th>組員</th>
                                <th>指導老師</th>
                            </tr>
                        </thead>
                        <div class="form-group">
                            <tbody>
                            <div class="form-group">

                            </div>
                            <tr>
                                <td><input type="text" class="form-control" name="sysname" placeholder="系統名稱"></td>
                                <td><input type="text" class="form-control" name="leadername" placeholder="姓名"> <input type="text" class="form-control" name="leaderID" placeholder="學號"></td>
                                <td><input type="text" class="form-control" name="crewname" placeholder="姓名"> <input type="text" class="form-control" name="crewID" placeholder="學號"></td>
                                <td><input type="text" class="form-control" name="teacher" placeholder="指導老師"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input type="text" class="form-control" name="crewname" placeholder="姓名"> <input type="text" class="form-control" name="crewID" placeholder="學號"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input type="text" class="form-control" name="crewname" placeholder="姓名"> <input type="text" class="form-control" name="crewID" placeholder="學號"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input type="text" class="form-control" name="crewname" placeholder="姓名"> <input type="text" class="form-control" name="crewID" placeholder="學號"></td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td></td>
                                <td><a class="btn btn-success">確認提交</a></td>
                            </tr>
                        </tfoot>
                        </div>


                    </table>
                </div>

                    </ul>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
