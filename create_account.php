
<!DOCTYPE html>
<html>

  <head>
	<meta charset="utf-8">
	<title>FJUIM-資訊專題線上評分系統</title>

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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
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
					<li><a href="main_index_login.php">首頁</a></li>
                    <li><a href="申請帳號.php">申請帳號</a></li>
                    <li><a href="">公告欄</a></li>
                    <li><a href="">專題規則</a></li>
                    <li><a href="">產學合作列表</a></li>
                    <li><a href="">檔案下載</a></li>
                    <li class="dropdown pull-right">
                        <a class="dropdown-toggle" href="" data-toggle="dropdown">尚未登入<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li><a href="學生登入.php">學生登入</a></li>
                            <li><a href="老師登入.php">教師登入</a></li>
                            <li><a href="管理者登入.php">管理者登入</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>



                <section id="loginForm">
                    <form action="create_user.php" class="form-horizontal" method="post" role="form"><input name="__RequestVerificationToken" type="hidden" value="lvn8ULTR99Mm4fCEKfWSrntYl8E4x-hHDm8e9Qce0BVOP0Pgg8ttuNcMGJcoLZfBcJPW7gJjqv2d1Edd80CJIoQL2JK0uXoGjYLGx4vd6fQ1" />                        <div class="form-group">
                            <div class="col-md-offset-1 col-md-9 col-lg-offset-1 col-lg-9">

                                <div class="col-xs-12">
                                <div class="page-header">
                                    <h3><i class="fa fa-fw fa-sign-in"></i> <b class="text-muted">建立帳號</b></h3>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 col-lg-2 control-label" for="UserID">ID</label>
                            <div class="col-md-8 col-lg-8">
                                <div class="input-group margin-bottom-sm">
                                    <input class="form-control" data-val="true" data-val-maxlength="帳號 最多允許 9 個字元，請修正" data-val-maxlength-max="9" data-val-required="帳號 欄位是必要項。" id="UserID" name="UserID" type="text" value="" />
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                </div>
                                <span class="field-validation-valid" data-valmsg-for="UserID" data-valmsg-replace="true"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-md-2 col-lg-2 control-label" for="Password">姓名</label>
                            <div class="col-md-8 col-lg-8">
                                <div class="input-group margin-bottom-sm">
                                    <input class="form-control" data-val="true" data-val-maxlength="密碼 最多允許 30 個字元，請修正" data-val-maxlength-max="30" data-val-required="密碼 欄位是必要項。" id="name" name="name" type="text" />
                                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                </div>
                                <span class="field-validation-valid" data-valmsg-for="name" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 col-lg-2 control-label" for="Password">密碼</label>
                            <div class="col-md-8 col-lg-8">
                                <div class="input-group margin-bottom-sm">
                                    <input class="form-control" data-val="true" data-val-maxlength="密碼 最多允許 30 個字元，請修正" data-val-maxlength-max="30" data-val-required="密碼 欄位是必要項。" id="Password" name="Password" type="password" />
                                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                </div>
                                <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-md-2 col-lg-2 control-label" for="Password">類型</label>
                            <div class="col-md-8 col-lg-8">
                                <select class="form-control" id="roleSelect" name="roleSelect">
									<option>學生</option>
									<option>教師</option>
									<option>管理者</option>
								</select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                                <input type="submit" value="建立帳號" class="btn btn-success" />
                            </div>
                        </div>
                    </form>
                </section>


            </div>
        </div>
    </div>

    </body>
</html>
