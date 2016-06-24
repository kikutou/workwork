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
            <br /><br />
            <button type="button" onClick="location.href='/work/users/profileEdit?id=<?php echo $user['User']['id']?>';">編集</button>
            <button type="button" onClick="location.href='/work/users/profileEdit?id=<?php echo $user['User']['id']?>';">settings</button>
            <div class="divider-form"></div>



        <?php

        echo '<div class="form-group">';
        echo $this->Html->para('User.family_name', '姓');
        echo $this->Html->para('',$user['User']['family_name']);
        echo '</div>';
        echo '<div class="divider-form"></div>';

        echo '<div class="form-group">';
        echo $this->Html->para('User.first_name', '名');
        echo $this->Html->para('', $user['User']['first_name']);
        echo '</div>';
        echo '<div class="divider-form"></div>';

        echo '<div class="form-group">';
        echo $this->Html->para('User.furigana', 'カタカナ');
        echo $this->Html->para('',$user['User']['furigana']);
        echo '</div>';
        echo '<div class="divider-form"></div>';

        echo '<div class="form-group">';
        echo $this->Html->para('User.birthday', '誕生日');
        echo $this->Html->para('',$user['User']['birthday']);
        echo '</div>';
        echo '<div class="divider-form"></div>';

        echo '<div class="form-group">';
        echo $this->Html->para('User.gender', '性別');

        $gender = $user['User']['gender'];

            if ($gender == '0' && $gender !== null){
                echo $this->Html->para('', '男性');

            }else{
                echo $this->Html->para('', '女性');
            }
        echo '</div>';
        echo '<div class="divider-form"></div>';

        echo '<div class="form-group">';
        echo $this->Html->para('User.email', 'メール');
        echo $this->Html->para('', $user['User']['email']);
        echo '</div>';
        echo '<div class="divider-form"></div>';

        echo '<div class="form-group">';
        echo $this->Html->para('User.login_id', 'ログインID');
        echo $this->Html->para('', $user['User']['login_id']);
        echo '</div>';
        echo '<div class="divider-form"></div>';
        ?>

            <button type="button" onClick="location.href='/work/users/passchange?id=<?php echo $user['User']['id']?>';">パスワード変更</button>
            <div class="divider-form"></div>

            <?php
            echo '<div class="form-group">';
            echo $this->Html->para('User.mobile1', '電話番号1');
            echo $this->Html->para('', $user['User']['mobile1']);
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Html->para('User.mobile2', '電話番号2');
            echo $this->Html->para('', $user['User']['mobile2']);
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //TODO ポストコード結合
            echo '<div class="form-group">';
            echo $this->Html->para('User.postcode1', '郵便番号');
            echo $this->Html->para('', $user['User']['postcode']);
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Html->para('User.province', '都道府県');

            $provinces = array(
                '0' => '北海道',
                '1' => '青森県',
                '2' => '秋田県',
                '3' => '岩手県',
                '4' => '山形県',
                '5' => '宮城県',
                '6' => '福島県',
                '7' => '茨城県',
                '8' => '栃木県',
                '9' => '群馬県',
                '10' => '埼玉県',
                '11' => '神奈川県',
                '12' => '千葉県',
                '13' => '東京都',
                '14' => '山梨県',
                '15' => '長野県',
                '16' => '新潟県',
                '17' => '富山県',
                '18' => '石川県',
                '19' => '福井県',
                '20' => '岐阜県',
                '21' => '静岡県',
                '22' => '愛知県',
                '23' => '三重県',
                '24' => '滋賀県',
                '25' => '京都府',
                '26' => '大阪府',
                '27' => '兵庫県',
                '28' => '奈良県',
                '29' => '和歌山県',
                '30' => '鳥取県',
                '31' => '島根県',
                '32' => '岡山県',
                '33' => '広島県',
                '34' => '山口県',
                '35' => '徳島県',
                '36' => '香川県',
                '37' => '愛媛県',
                '38' => '高知県',
                '39' => '福岡県',
                '40' => '佐賀県',
                '41' => '長崎県',
                '42' => '熊本県',
                '43' => '大分県',
                '44' => '宮崎県',
                '45' => '鹿児島県',
                '46' => '沖縄県'
            );

            foreach ($provinces as $key => $value){

                if ($user['User']['province'] == $key && $user['User']['province'] !== null){
                    echo $this->Html->para('', $value);

                }else{
                    echo $this->Html->para('', ' ');
                }
            }
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Html->para('User.address1', '住所1');
            echo $this->Html->para('', $user['User']['address1']);
            echo '</div>';
            echo '<div class="divider-form"></div>';


            echo '<div class="form-group">';
            echo $this->Html->para('User.address2', '住所2');
            echo $this->Html->para('', $user['User']['address2']);
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Html->para('receive_mail', '連絡可能の日');

            $allNames = array('すべて', '月曜日', '火曜日', '水曜日' , '木曜日', '金曜日', '土曜日', '日曜日');

            $name = $user['User']['spareday'];

            if( substr ($name , 0, 1) == '1'){

                echo $this->Html->para('', "'月曜日', '火曜日', '水曜日' , '木曜日', '金曜日', '土曜日', '日曜日'");
            }else {


                $weekdays = '';

                for($i = 1; $i < 8 ; $i++){

                    if(substr ($name , $i, 1) == '1'){
                        //echo $this->Html->para('', $allNames[$i]);
                        $weekdays .= $allNames[$i].' ';
                    }

                }

                echo $this->Html->para('', $weekdays);


            }
            ?>
        <p>
            <?php
            $spare_from = array(

                '0' => '0:00',
                '1' => '1:00',
                '2' => '2:00',
                '3' => '3:00',
                '4' => '4:00',
                '5' => '5:00',
                '6' => '6:00',
                '7' => '7:00',
                '8' => '8:00',
                '9' => '9:00',
                '10' => '10:00',
                '11' => '11:00',
                '12' => '12:00',
                '13' => '13:00',
                '14' => '14:00',
                '15' => '15:00',
                '16' => '16:00',
                '17' => '17:00',
                '18' => '18:00',
                '19' => '19:00',
                '20' => '20:00',
                '21' => '21:00',
                '22' => '22:00',
                '23' => '23:00'
            );

            foreach ($spare_from as $key => $value){

                if ($user['User']['spare_from'] == $key && $user['User']['spare_from'] !== null){
                    echo $value;

                }else{
                    echo ' ';
                }
            }

            echo $this->Html->tag('span', '-');

            $spare_to = array(

                '0' => '0:00',
                '1' => '1:00',
                '2' => '2:00',
                '3' => '3:00',
                '4' => '4:00',
                '5' => '5:00',
                '6' => '6:00',
                '7' => '7:00',
                '8' => '8:00',
                '9' => '9:00',
                '10' => '10:00',
                '11' => '11:00',
                '12' => '12:00',
                '13' => '13:00',
                '14' => '14:00',
                '15' => '15:00',
                '16' => '16:00',
                '17' => '17:00',
                '18' => '18:00',
                '19' => '19:00',
                '20' => '20:00',
                '21' => '21:00',
                '22' => '22:00',
                '23' => '23:00'
            );

            foreach ($spare_to as $key => $value){

                if ($user['User']['spare_to'] == $key && $user['User']['spare_to'] !== null){
                    echo $value;

                }else{
                    echo ' ';
                }
            }
            echo '</div>';
            echo '<div class="divider-form"></div>';
            ?>
        </p>
            <?php

            echo '<div class="form-group">';
            echo $this->Html->para('User.degree', '学位');

            $degree = array(

                '0' => '学士',
                '1' => '修士',
                '2' => '博士'
            );

            foreach ($degree as $key => $value){

                if ($user['User']['degree'] == $key && $user['User']['degree'] !== null){
                    echo $this->Html->para('', $value);

                }else{
                    echo $this->Html->para('', ' ');
                }
            }
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Html->para('User.college', '学校名');
            echo $this->Html->para('', $user['User']['college']);
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Html->para('User.primary_major', '学部・学科名');
            echo $this->Html->para('', $user['User']['primary_major']);
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Html->para('User.secondary_major', '学科系統');
            echo $this->Html->para('', $user['User']['secondary_major']);
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Html->para('User.certification', '資格証明書');
            echo $this->Html->para('', $user['User']['certification']);
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Html->para('User.skill', 'スキル');
            echo $this->Html->para('', $user['User']['skill']);
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Html->para('User.work_situation', '勤務状況');

            $work_situation = array(

                '0' => '就職している',
                '1' => '失職中',
                '2' => '新卒'
            );

            foreach ($work_situation as $key => $value){

                if ($user['User']['work_situation'] == $key && $user['User']['work_situation'] !== null){
                    echo $this->Html->para('', $value);

                }else{
                    echo $this->Html->para('', ' ');
                }
            }
            echo '</div>';
            echo '<div class="divider-form"></div>';
            ?>


<!--
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
-->