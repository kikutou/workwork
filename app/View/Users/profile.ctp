<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="/work/favicon.ico" type="image/x-icon" rel="icon"/>
    <link href="/work/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="/work/css/employer-login.css"/>
</head>
<body class="container-fluid">
<div class="row">
    <div class="col-md-2 col-md-offset-5 col-xs-6 col-xs-offset-3" style="margin-top: 20px;">
        <a href="/work/">
            <img src="/work/img/logo.png" alt="logo" class="img-responsive logo"/>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="box">
            <div class="input-group">
          <span class="input-group-addon addon-facebook">
            <i class="fa fa-fw fa-2x fa-facebook fa-fw"></i>
          </span>
                <a class="btn btn-lg btn-block btn-facebook" href="#">Facebookで新規登録</a>
            </div>
            <div class="input-group">
          <span class="input-group-addon addon-twitter">
            <i class="fa fa-fw fa-2x fa-twitter fa-fw"></i>
          </span>
                <a class="btn btn-lg btn-block btn-twitter" href="#">Twitterで新規登録</a>
            </div>
            <div class="input-group">
          <span class="input-group-addon addon-wechat">
            <i class="fa fa-fw fa-2x fa-wechat fa-fw"></i>
          </span>
                <a class="btn btn-lg btn-block btn-wechat" href="#">Wechatで新規登録</a>
            </div>

            <div class="divider-form"></div>
            <div class="label label-default form-tag">
                <i class="fa fa-building"></i>ユーザ情報登録
            </div>
            <form action="/work/employers/signup" role="form" class="form-group" id="signupForm" method="post" accept-charset="utf-8">
                <div style="display:none;">
                    <input type="hidden" name="_method" value="POST"/>
                </div>
                <input type="hidden" name="data[Employer][delete_flag]" value="0" id="EmployerDeleteFlag"/>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerName">会社名</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][name]" class="form-control" placeholder="株式会社○○○" type="text" id="EmployerName" required="required"/>
                </div>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerUrl">会社URL</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][url]" class="form-control" placeholder="www.html.com" type="text" id="EmployerUrl" required="required"/>
                </div>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerLoginId">ログインID</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][login_id]" class="form-control" placeholder="英数字のみ" type="text" id="EmployerLoginId" required="required"/>
                    <button id="check_id" onclick="check_id_js();" type="button" class="btn btn-default">登録可能かをチェック</button>
                </div>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerPassword">パスワード</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][password]" class="form-control" placeholder="8~16桁・英数字それぞれ1種類以上" type="password" id="EmployerPassword" required="required"/>
                </div>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerPasswordConfirm">パスワード確認</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][password_confirm]" class="form-control" placeholder="8~16桁・英数字それぞれ1種類以上" type="password" id="EmployerPasswordConfirm" required="required"/>
                </div>
                <div class="divider-form"></div>
                <div class="label label-default form-tag right">
                    <i class="fa fa-user"></i>担当者情報登録
                </div>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerStaffFamilyName">姓</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][staff_family_name]" class="form-control" placeholder="山田" type="text" id="EmployerStaffFamilyName" required="required"/>
                </div>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerStaffFirstName">名</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][staff_first_name]" class="form-control" placeholder="太郎" type="text" id="EmployerStaffFirstName" required="required"/>
                </div>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerStaffFurigana">カタカナ</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][staff_furigana]" class="form-control" placeholder="ヤマダタロウ" type="text" id="EmployerStaffFurigana" required="required"/>
                </div>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerStaffDepartment">部署</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][staff_department]" class="form-control" placeholder="営業部" type="text" id="EmployerStaffDepartment" required="required"/>
                </div>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerStaffPosition">役職</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][staff_position]" class="form-control" placeholder="課長" type="text" id="EmployerStaffPosition" required="required"/>
                </div>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerStaffMobile">電話</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][staff_mobile]" class="form-control" placeholder="08012345678" type="text" id="EmployerStaffMobile" required="required"/>
                </div>
                <div class="divider-form"></div>
                <div class="form-group">
                    <label for="EmployerStaffEmail">メール</label>&nbsp
                    <span class="label label-warning">必須</span>
                    <input name="data[Employer][staff_email]" class="form-control" placeholder="xxx＠workwork.com" type="text" id="EmployerStaffEmail" required="required"/>
                </div>
                <div class="divider-form"></div>
                <p class="text-center">※お読みください
                    <strong>
                        <a href="http://kiyaku.jp/" target="_blank">利用規約/個人情報保護方針</a>
                    </strong>.
                </p>
                <div class="submit">
                    <input class="btn-block btn btn-lg btn-primary" type="submit" value="以上の規約に同意して新規登録"/>
                </div>
                <p class="text-center">既にアカウントをお持ちしています
                    <strong>
                        <a href="/work/employers/login">ログイン</a>
                </p>
            </form>
            <script type="text/javascript">
                //<![CDATA[
                function check_id_func(result){
                    alert(result.responseText);
                }
                //]]>
            </script>
            <script>
                $(document).ready(
                    function () {
                        $("#check_id").bind("click",
                            function (event) {
                                $.ajax({
                                    async:true,
                                    method:'post',
                                    complete:function (XMLHttpRequest, textStatus) {check_id_func(XMLHttpRequest)},
                                    data:"id=" + document.getElementById('EmployerLoginId').value,
                                    url:"\/cakephp2\/employers\/checkid"
                                });
                                return false;});});
            </script>
        </div>
    </div>
</div>
</body>
<html>