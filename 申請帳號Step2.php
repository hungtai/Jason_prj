
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
                    <form action="/student/Account/Login" class="form-horizontal" method="post" role="form">
                      <input name="__RequestVerificationToken" type="hidden" value="lvn8ULTR99Mm4fCEKfWSrntYl8E4x-hHDm8e9Qce0BVOP0Pgg8ttuNcMGJcoLZfBcJPW7gJjqv2d1Edd80CJIoQL2JK0uXoGjYLGx4vd6fQ1" />                        <div class="form-group">
                            <div class="col-md-offset-1 col-md-9 col-lg-offset-1 col-lg-9">

                              <div class="col-xs-12">
                                  <div class="page-header">
                                      <h3><i class="fa fa-fw fa-sign-in"></i> <b class="text-muted">申請帳號</b></h3>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <!--body view部分--><div class="row clearfix">
                    	<div id="stepbox" class="mainbox col-md-8 col-md-offset-2">
                    		<div class="row bs-wizard" style="border-bottom:0;">
                    			<div class="col-xs-3 bs-wizard-step complete">
                    				<div class="text-center bs-wizard-stepnum">Step 1</div>
                    				<div class="progress"><div class="progress-bar"></div></div>
                    				<a class="bs-wizard-dot"></a>
                    				<div class="bs-wizard-info text-center">同意註冊條款</div>
                    			</div>

                    			<div class="col-xs-3 bs-wizard-step complete">
                    				<div class="text-center bs-wizard-stepnum">Step 2</div>
                    				<div class="progress"><div class="progress-bar"></div></div>
                    				<a class="bs-wizard-dot"></a>
                    				<div class="bs-wizard-info text-center">驗證LDAP帳號</div>
                    			</div>

                    			<div class="col-xs-3 bs-wizard-step disabled">
                    				<div class="text-center bs-wizard-stepnum">Step 3</div>
                    				<div class="progress"><div class="progress-bar"></div></div>
                    				<a class="bs-wizard-dot"></a>
                    				<div class="bs-wizard-info text-center">修改個人資料</div>
                    			</div>

                    			<div class="col-xs-3 bs-wizard-step disabled">
                    				<div class="text-center bs-wizard-stepnum">Step 4</div>
                    				<div class="progress"><div class="progress-bar"></div></div>
                    				<a class="bs-wizard-dot"></a>
                    				<div class="bs-wizard-info text-center">完成帳號建置</div>
                    			</div>
                    		</div>
                    	</div>

                    	<div id="ldapbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3">
                    		<div class="panel panel-info" >
                    			<div class="panel-heading">
                    				<div class="panel-title" align="center">驗證LDAP帳號</div>
                    			</div>

                    			<div class="panel-body" >
                    				<form id="ldapForm" class="form-horizontal" role="form" method="post" action="/Register/Step2">

                    					<div id="verify-ldap-alert" style="display:none" class="alert alert-danger col-md-12" align="center">
                    						<a href="#" class="close" data-dismiss="alert">&times;</a>
                    						<i class="glyphicon glyphicon-remove"></i>請完整輸入LDAP帳號與密碼!
                    					</div>

                    					<div class="form-group">
                    						<label for="ldapUser" class="col-md-3 control-label">LDAP帳號</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="ldapUser" placeholder="請輸入您的LDAP帳號">
                    						</div>
                    					</div>

                    					<div class="form-group">
                    						<label for="ldapPass" class="col-md-3 control-label">LDAP密碼</label>
                    						<div class="col-md-9">
                    							<input type="password" class="form-control" name="ldapPass" placeholder="請輸入您的LDAP密碼">
                    						</div>
                    					</div>

                    					<div class="form-group">
                    						<div class="col-md-12" align="center">
                    							<a class="btn btn-info" href="申請帳號Step3.php">LDAP驗證</a>
                    						</div>
                    					</div>
                    					<div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

                    						<div class="col-md-12">
                    							<div class="alert alert-warning">
                    								<center><h4>說明</h4></center>
                    								<p>請輸入您在輔大的<strong>LDAP登入資訊</strong>, 完成驗證後, 將繼續完成接續的註冊帳號程序。若在帳號上還有其他問題, 請於上班時間至資管系系辦找尋助教協助</p>
                    							</div>
                    						</div>
                    					</div>
                    				</form>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <script type="text/javascript" src="\js\register.js"></script></div>


                      </form>
                  </section>


              </div>
          </div>
      </div>

      </body>
  </html>
