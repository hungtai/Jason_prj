
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
                    <form action="/student/Account/Login" class="form-horizontal" method="post" role="form"><input name="__RequestVerificationToken" type="hidden" value="lvn8ULTR99Mm4fCEKfWSrntYl8E4x-hHDm8e9Qce0BVOP0Pgg8ttuNcMGJcoLZfBcJPW7gJjqv2d1Edd80CJIoQL2JK0uXoGjYLGx4vd6fQ1" />                        <div class="form-group">
                            <div class="col-md-offset-1 col-md-9 col-lg-offset-1 col-lg-9">

                              <div class="col-xs-12">
                                  <div class="page-header">
                                      <h3><i class="fa fa-fw fa-sign-in"></i> <b class="text-muted">申請帳號</b></h3>
                                  </div>
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

			<div class="col-xs-3 bs-wizard-step disabled">
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
</div>

<div id="mainbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3">
	<div class="panel panel-info" >
		<div class="panel-heading">
			<div class="panel-title" align="center">同意註冊條款</div>
		</div>

		<div style="padding-top:50px;padding-bottom:50px" class="panel-body" align="center">
			<!--a id="btn-contract" class="btn btn-primary" data-toggle="modal" data-target="#contractModal">請點我閱讀註冊條款<!--/a-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contractModal">請點我閱讀註冊條款
			</button>
			<div style="border-top: 0px solid #999; padding-top:20px">
			</div>
			<div class="col-md-12">
				<div class="alert alert-warning">
					<center><h4>說明</h4></center>
					<p>您必須完整閱讀註冊條款, 點擊"同意"後才能繼續接下來的註冊程序</p>
				</div>
			</div>
		</div>
	</div>
	<!-- 使用條款Modal -->
	<div class="modal fade" id="contractModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" aria-hidden="true" type="button" data-dismiss="modal">×</button>
					<h4 class="modal-title">請閱讀以下註冊條款</h4>
				</div>
				<div class="modal-body">
					<!--註冊條款內容-->
					<textarea class="form-control" id="contractContent" rows="20">
歡迎使用輔仁大學資訊管理學系（以下稱本單位）所提供之資訊專題管理系統(http://project.im.fju.edu.tw)，依據個人資料保護法（以下稱個資法）第八條第一項規定，為了確保使用者之個人資料、隱私及權益之保護，當您已閱讀並同意「輔仁大學資訊管理學系個人資料保護法告知內容」時，即表示您願意以電子文件之方式行使法律所賦予同意之權利，並具有書面同意之效果，若不同意請離開此網頁，如需服務請洽本單位之服務人員。 (以下為本單位依「個人資料保護法」規定，必須向您告知的各項聲明，請您務必詳閱。)

1. 個人資料蒐集目的：
（一）依照輔仁大學資訊管理學系所舉辦之資訊專題課程期間之行為均屬於本系統之個資蒐集目的。
（二）上述之相關業務所定義之工作範圍。

2. 個人資料蒐集來源
（一）輔仁大學學校財團法人所提供LDAP相關服務之電磁紀錄
（二）您於註冊程序時所填寫之個人聯絡資料

3. 個人資料蒐集類別：
（一）識別類（例如：中文姓名、學生或員工證號、聯絡電話號碼、地址、性別、電子郵遞地址）
（二）特徵類（例如：出生年月日、國籍、個人照片、筆跡與紙本文件）等。

4. 個人資料利用之期間、地區、對象及方式：
（一）期間：利用期間為本單位或業務所必須之保存期間。
（二）地區：您的個人資料將用於本單位提供服務之地區。
（三）對象：本單位經手資訊專題課程之相關行政人員、依法有調查權機關。
（四）方式：電子文件、紙本，或以自動化機器或其他非自動化之利用方式。

5. 依據個資法第三條規定，您就本單位保有您的個人資料得行使下列權利：
（一）查詢、閱覽、複本、補充、更正、請求停止蒐集、請求停止處理、請求停止利用、請求刪除等權利。

6. 個資保護之措施：
本單位已採取資訊安全保護措施，並且針對個資保護有以下應盡之措施：
（一）配置管理之人員及相當資源
（二）界定個人資料之範圍
（三）個人資料之風險評估及管理機制
（四）事故之預防、通報及應變機制
（五）個人資料蒐集、處理及利用之內部管理程序
（六）資料安全管理以及人員管理
（七）認知宣導及教育訓練
（八）設備安全管理
（九）資料安全稽核機制
（十）使用紀錄、軌跡資料及證據保存
（十一）個人資料安全維護之整體持續改善
					</textarea>
				</div>
				<div class="modal-footer">
					<a class="btn btn-primary" href="申請帳號Step2.php">同意</a>
					<a class="btn btn-danger" data-dismiss="modal">不同意</a>
				</div>
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
