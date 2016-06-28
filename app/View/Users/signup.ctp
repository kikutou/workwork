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

        //validationEngineのjsを追加する。
        echo $this->Html->script('jQuery-Validation-Engine-master/js/jquery.validationEngine.js');
        echo $this->Html->script('jQuery-Validation-Engine-master/js/jquery.validationEngine-ja.js');
        //validationEngineのcssを追加する。
        echo $this->Html->css('validationEngine.jquery.css');

        //Latest compiled and minified JavaScript
        echo $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('integrity' => 'sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS', 'crossorigin' => 'anonymous'));
        //font-awesome
        echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array('integrity' => 'sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1', 'crossorigin' => 'anonymous'));

        echo $this->Html->css('user-login');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-md-offset-5 col-xs-6 col-xs-offset-3" style="margin-top: 20px;">
            <?php echo $this->Html->link($this->Html->image('logo.png', array('alt'=>'logo', 'class' => 'img-responsive logo')), "/", array('escape' => false) ); ?>
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
    <?php
        //フォームエラー
        if($errorMsg) {
            echo $this->Html->para('errorMsg', $errorMsg);
        }

        echo $this->Form->create(false, array('type' => 'post', 'id' => 'signupForm'));
    ?>
        <div class="divider-form"></div>
        <!-- <div class="form-group">
         <label for="exampleInputEmail1">ログインID</label>
         <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ログインID/メール">
        </div>
        <div class="divider-form"></div>
        <div class="form-group">
        <label for="exampleInputPassword1">パスワード</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="パスワード">
        </div>-->

         <script>
             $(
                 function () {
                     $("#signupForm").validationEngine();
                 }
             )
         </script>

        <?php

            echo $this->Form->input('User.delete_flag',array('type' => 'hidden', 'value' => '0'));

            echo '<div class="form-group">';
            echo $this->Form->label('User.family_name', '姓');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('User.family_name', array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-danger')));
            echo $this->Form->text('User.family_name', array("class" => 'form-control validate[required]', "placeholder" => "山田"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Form->label('User.first_name', '名');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('User.first_name', array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-danger')));
            echo $this->Form->text('User.first_name', array("class" => 'form-control validate[required]', "placeholder" => "太郎"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Form->label('User.furigana', 'カタカナ');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('User.furigana', array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-danger')));
            echo $this->Form->text('User.furigana', array("class" => 'form-control validate[required]', "placeholder" => "ヤマダタロウ"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Form->label('User.birthday', '生年月日');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('User.birthday', array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-danger')));
            echo $this->Form->text('User.birthday', array('id' => "datepicker", "class" => 'form-control validate[required]', "placeholder" => "1900-01-01"));
            echo '</div>';
        ?>
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <script>
                $(function() {
                    var dateFormat = 'yy-mm-dd';
                    $('#datepicker').datepicker({
                        dateFormat: dateFormat,
                        changeYear: true,
                        changeMonth: true,
                        yearRange: '1946:'
                    });
                });
            </script>
            <div class="divider-form"></div>';

            <div class="form-group">
            <label for="UserGender">性別</label>
            &nbsp<span class="label label-warning">必須</span>
            <input type="radio" name="data[User][gender]" id="UserGenderMale" value="male" required="required" checked/>
            <label for="UserGenderMale">男性</label>
            <input type="radio" name="data[User][gender]" id="UserGenderFemale" value="female" required="required"/>
            <label for="UserGenderFemale">女性</label>

        <?php
            echo $this->Form->error('User.gender');
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Form->label('User.email', 'メール');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('User.email', array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-danger')));
            echo $this->Form->text('User.email', array("class" => 'form-control validate[required]', "placeholder" => "xxx＠workwork.com"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Form->label('User.login_id', 'ログインID');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('User.login_id', array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-danger')));
            echo $this->Form->text('User.login_id', array("class" => 'form-control validate[required]', "placeholder" => "ログインID/メール"));
        ?>

            <p><input type="checkbox" id="use_email_check" name="data[check]" onclick="use_email();" value="1"/> メールをログインIDとして登録する</p>

        <?php
            //echo $this->Form->checkbox('check', array('id' => 'use_email_check', 'onclick'=>'use_email();','class' => 'validate[required]'));
            echo $this->Form->button('IDチェック', array('id' => 'check_id', 'onclick' => 'check_id_js();', 'type' => 'button'));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo '<div class="form-group">';
            echo $this->Form->label('User.password', 'パスワード');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('User.password', array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-danger')));
            echo $this->Form->password('User.password', array("class" => 'form-control validate[required]', "placeholder" => "パスワード"));
            echo '</div>';
            echo '<div class="divider-form"></div>';


            echo '<div class="form-group">';
            echo $this->Form->label('User.password_confirm', 'パスワード確認');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('User.password_confirm', array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-danger')));
            echo $this->Form->password('User.password_confirm', array("class" => 'form-control validate[required]', "placeholder" => "もう一度パスワードを入力してください"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            echo $this->Form->label('電子メールを受信する');
            echo '<br/>';
        ?>

            <p><input type="checkbox" name="data[check]" value="1"/> はい</p>
            <div class="divider-form"></div>

            <p class="text-center">※お読みください <strong><?php echo $this->html->link('利用規約/個人情報保護方針', 'http://kiyaku.jp/', array('escape' => false));?></strong>.</p>
            <button type="submit" class="btn-block btn btn-lg btn-primary">以上の規約に同意して新規登録</button>
            <p class="text-center">既にアカウントをお持ちしています <?php echo $this->html->link('ログイン', '/users/login', array('escape' => false));?> </p>
            <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</body>
<html>

<script>
    function use_email(){
        var use_email = document.getElementById('use_email_check').checked;

        if(use_email){
            document.getElementById('UserLoginId').value = document.getElementById('UserEmail').value;
        }else{
            document.getElementById('UserLoginId').value = '';
        }
    }
</script>
<?php

    $script = <<<EOL
        function check_id_func(result){
            alert(result.responseText);
         }
EOL;
    echo $this->Html->scriptBlock($script,array('inline' => true));
    /*
    $this->Js->get('#check_id')->event('click',
        $this->Js->request(
            array('action' => 'checkid'),
            array('async' => true, 'complete' => 'check_id_func(XMLHttpRequest)',
                'data' => array(
                    'id' => "document.getElementById('UserLoginId').value",
                ))
        )
    );
    echo $this->Js->writeBuffer();
    */
?>



<script>
    $(document).ready(
        function () {
            $("#check_id").bind("click",
                function (event) {
                    if($("#UserLoginId").val().replace(/^\s+|\s+$/g, "") == ''){
                        alert('ログインIDを入力ください。');
                    }else{
                        $.ajax(
                            {
                                async:true,
                                method:'post',
                                complete:function (XMLHttpRequest, textStatus) {check_id_func(XMLHttpRequest)},
                                data:"id=" + document.getElementById('UserLoginId').value,
                                url:"\/work\/users\/checkid"
                            }
                        );
                    }
                    return false;
                });
        });
</script>


