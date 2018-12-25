
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
	<script type="text/javascript" src="\js\query.url.js"></script>
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

                <div class="col-xs-12">
                    <div class="page-header">
                        <h3><i class="fa fa-fw fa-sign-in"></i> <b class="text-muted">申請帳號</b></h3>
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

                <div class="col-xs-3 bs-wizard-step complete">
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

              <?php
		function pg_connection_string_from_database_url() {
			extract(parse_url($_ENV["DATABASE_URL"]));
			return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
		}
		$pg_conn = pg_connect(pg_connection_string_from_database_url());
		
		$result = pg_query($pg_conn, "SELECT relname FROM pg_stat_user_tables WHERE schemaname='public'");
		print "<pre>\n";
		if (!pg_num_rows($result)) {
			print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
		} 
		else {
			print "Tables in your database:\n";
			while ($row = pg_fetch_row($result)) { print("- $row[0]\n"); }
		}
                print "\n";
			
                //if(@$name)
                //{
                //  $link = mysql_connect("localhost", "root", "12345678");
                //  mysql_select_db("mydb", $link);
                //  mysql_query("SET NAMES 'utf8'", $link);
                //  $sql = "insert into comm()"
                //}
              ?>

              <div class="container">
                <table class="table" align="center">
                <tr>
                  <td>專題名稱</td>
                  <td colspan="5"><input type="text" class="form-control"></td>
                </tr>
                <tr>
                  <td>專題組員</td>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                  <td>指導老師</td>
                  <td><input type="text" class="form-control"></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><a class="btn btn-success" href="申請帳號Step4.php">確定</a></td>
                </tr>
                </table>
              </div>

              </div>
          </div>
      </div>
      </body>
  </html>
