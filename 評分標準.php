
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
                <h3><i class="fa fa-fw fa-sign-in"></i> <b class="text-muted">評分標準</b></h3>
            </div>
        </div>

        <div class="container">
            <div class="btn-group btn-group-vertical" style="position:fixed; top:300px; left:250px;">
                <a type="button" class="btn btn-default" href="文件評分.php">文件評分</a>
                <a type="button" class="btn btn-default" href="發表評分.php">發表評分</a>
                <a type="button" class="btn btn-default active" href="評分標準.php">評分標準</a>
            </div>

            <div>
                <embed width="100%" height="100%" name="plugin" id="plugin" src="file:///C:/Users/user/Downloads/22756_%E9%99%84%E4%BB%B607%20%E8%A9%95%E5%88%86%E6%A8%99%E6%BA%96%E8%AA%AA%E6%98%8E.pdf"
                  type="application/pdf" internalinstanceid="85" style="height: 1140px; width: 1140px;">
            </div>

        </div>


        </div>
    </body>
</html>
