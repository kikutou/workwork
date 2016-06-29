<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php //echo $cakeDescription ?>
        <?php //echo $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');
    // Latest compiled and minified CSS
    echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array('integrity' => 'sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7', 'crossorigin' => 'anonymous'));
    // Latest compiled and minified CSS
    //echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css', array('integrity' => 'sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r', 'crossorigin' => 'anonymous'));
    echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    //Latest compiled and minified JavaScript
    echo $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('integrity' => 'sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS', 'crossorigin' => 'anonymous'));


    //validationEngineのjsを追加する。
    echo $this->Html->script('jQuery-Validation-Engine-master/js/jquery.validationEngine.js');
    echo $this->Html->script('jQuery-Validation-Engine-master/js/jquery.validationEngine-ja.js');
    //validationEngineのcssを追加する。
    echo $this->Html->css('validationEngine.jquery.css');


    //font-awesome
    echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array('integrity' => 'sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1', 'crossorigin' => 'anonymous'));

    echo $this->Html->css('employer-login');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');



    ?>

    <script>
        $(
            function(){
                $("#employerSignUpForm").validationEngine();
            }
        );
    </script>

</head>
<body class="container-fluid">

<div class="row">
    <div class="col-md-2 col-md-offset-5 col-xs-6 col-xs-offset-3" style="margin-top: 20px;">
        <?php echo $this->Html->link($this->Html->image('logo.png', array('alt'=>'logo', 'class'=>'img-responsive logo')), "/", array('escape' => false) ); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="box">

            <div class="input-group">
					<span class="input-group-addon addon-facebook">
						<i class="fa fa-fw fa-2x fa-facebook fa-fw"></i>
					</span>
                <a class="btn btn-lg btn-block btn-facebook" href="#"> Facebookで新規登録</a>
            </div>

            <div class="input-group">
					<span class="input-group-addon addon-twitter">
						<i class="fa fa-fw fa-2x fa-twitter fa-fw"></i>
					</span>
                <a class="btn btn-lg btn-block btn-twitter" href="#"> Twitterで新規登録</a>
            </div>

            <div class="input-group">
					<span class="input-group-addon addon-wechat">
						<i class="fa fa-fw fa-2x fa-wechat fa-fw"></i>
					</span>
                <a class="btn btn-lg btn-block btn-wechat" href="#"> Wechatで新規登録</a>
            </div>



            <!--
            <form role="form">

                <div class="divider-form"></div>

                <div class="form-group">
                    <label for="exampleInputEmail1">ログインID<span class="label label-warning">必須</span></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ログインID/メール">
                </div>

                <div class="divider-form"></div>

                <div class="form-group">
                    <label for="exampleInputPassword1">パスワード </label>
                    <div class="alert alert-danger">パスワード形式は間違っています</div>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="パスワード">
                </div>

                <div class="divider-form"></div>

                <p class="text-center">※お読みください <strong><?php //echo $this->html->link('利用規約/個人情報保護方針', 'http://kiyaku.jp/', array('escape' => false));?></strong>.</p>

                <button type="submit" class="btn-block btn btn-lg btn-primary">以上の規約に同意して新規登録</button>

                <p class="text-center">既にアカウントをお持ちしています <?php //echo $this->html->link('ログイン', '/employers/login', array('escape' => false));?> </p>

            </form>
            -->


                <?php
                if($errorMsg)
                {
                    echo $this->Html->para('alert alert-danger error-top', $errorMsg);
                }

                echo '<div class="divider-form"></div>';
                echo '<div class="label label-default form-tag"><i class="fa fa-building"></i> 会社情報登録</div>';

                echo $this->Form->create(false, array(
                    'type' => 'post',
                    'role' => 'form',
                    'class' => "form-group",
                    'id' => 'employerSignUpForm'
                    ));

                echo $this->Form->input('Employer.delete_flag', array('type' => 'hidden', 'value' => '0'));

                echo '<div class="divider-form"></div>';
                //会社名チェック
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.name', '会社名');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.name',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->text('Employer.name', array("class" => "form-control validate[required]", "placeholder" => "株式会社○○○"));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                //会社URLチェック
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.url', '会社URL');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.url', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->text('Employer.url', array("class" => "form-control validate[required]", "placeholder" => "www.html.com"));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                //ログインIDチェック
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.login_id', 'ログインID');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.login_id', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->text('Employer.login_id', array("class" => "form-control validate[required]", "placeholder" => "英数字のみ"));
                echo $this->Form->button('IDが登録可否チェック', array('id' => 'check_id', 'onclick' => 'check_id_js();', 'type' => 'button'));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                    /*echo '<div class="form-group">';
                echo $this->Form->label('User.login_id', 'ログインID');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('User.login_id', array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-danger')));
                echo $this->Form->text('User.login_id', array("class" => 'form-control validate[required]', "placeholder" => "ログインID/メール"));
                echo $this->Form->button('IDチェック', array('id' => 'check_id', 'onclick' => 'check_id_js();', 'type' => 'button'));
                echo '</div>';
                echo '<div class="divider-form"></div>';*/

                //パスワードチェック
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.password', 'パスワード');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.password', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->password('Employer.password', array("class" => "form-control validate[required]", "placeholder" => "8~16桁・英数字それぞれ1種類以上"));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                //パスワード確認チェック
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.password_confirm', 'パスワード確認');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.password_confirm', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->password('Employer.password_confirm', array("class" => "form-control validate[required]", "placeholder" => "8~16桁・英数字それぞれ1種類以上"));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                echo '<div class="label label-default form-tag right"><i class="fa fa-user"></i>担当者情報登録</div>';
                echo '<div class="divider-form"></div>';

                //苗字
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.staff_family_name', '姓');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.staff_family_name', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->text('Employer.staff_family_name', array("class" => "form-control validate[required]", "placeholder" => "山田"));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                //名前
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.staff_first_name', '名');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.staff_first_name', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->text('Employer.staff_first_name', array("class" => "form-control validate[required]", "placeholder" => "太郎"));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                //ふりがな
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.staff_furigana', 'カタカナ');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.staff_furigana', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->text('Employer.staff_furigana', array("class" => "form-control validate[required]", "placeholder" => "ヤマダタロウ"));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                //部署
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.staff_department', '部署');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.staff_department', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->text('Employer.staff_department', array("class" => "form-control validate[required]", "placeholder" => "営業部"));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                //ポスト
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.staff_position', '役職');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.staff_position', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->text('Employer.staff_position', array("class" => "form-control validate[required]", "placeholder" => "課長"));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                //電話
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.staff_mobile', '電話');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.staff_mobile', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->text('Employer.staff_mobile', array("class" => "form-control validate[required]", "placeholder" => "08012345678"));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                //メール
                echo '<div class="form-group">';
                echo $this->Form->label('Employer.staff_email', 'メール');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('Employer.staff_email', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->text('Employer.staff_email', array("class" => "form-control validate[required]", "placeholder" => "xxx＠workwork.com"));
                echo '</div>';
                echo '<div class="divider-form"></div>';

                echo '<p class="text-center">※お読みください <strong>';
                echo $this->html->link('利用規約/個人情報保護方針', 'http://kiyaku.jp/', array('escape' => false,  "target" => "_blank"));
                echo '</strong>.</p>';

                //ボタン
                echo $this->Form->submit("以上の規約に同意して新規登録", array("class" => "btn-block btn btn-lg btn-primary"));

                echo '<p class="text-center">既にアカウントをお持ちしています <strong>';
                echo $this->html->link('ログイン', '/employers/login', array('escape' => false));
                echo ' </p>';

                echo $this->Form->end();
                ?>


                <?php

                    //echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('inline' => false));

                    $script = <<<EOL
                    function check_id_func(result){
                    alert(result.responseText);
     }
EOL;
                echo $this->Html->scriptBlock($script,array('inline' => true));
                ?>

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
                            url:"\/work\/employers\/checkid"
                        });
                    return false;});});
                </script>

        </div>
    </div>
</div>
</body>
<html>