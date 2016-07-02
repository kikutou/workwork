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
        <?php echo $this->Html->link($this->Html->image('logo.png', array('alt'=>'logo', 'class'=>'img-responsive logo')), "/", array('escape' => false) ); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="box">
            <form role="form">

                <?php

                if($this->Session->check('Message.auth')){
                    echo $this->Session->flash('auth');
                }

                echo $this->Form->create(false, array(
                    'type' => 'post',
                    'role' => 'form',
                    'id' => 'userLoginForm'
                ));

                ?>

                <div>
                    <h1>ログイン</h1>
                </div>

                <div class="divider-form"></div>

                <?php
                echo '<div class="form-group">';
                echo $this->Form->label('User.login_id', 'ログインID');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('User.login_id', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->text('User.login_id', array("class" => "form-control validate[required]", "placeholder" => "英数字のみ"));
                echo '</div>';
                echo '<div class="divider-form"></div>';


                //パスワードチェック
                echo '<div class="form-group">';
                echo $this->Form->label('User.password', 'パスワード');
                echo '&nbsp<span class="label label-warning">必須</span>';
                echo $this->Form->error('User.password', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                echo $this->Form->password('User.password', array("class" => "form-control validate[required]", "placeholder" => "8~16桁・英数字それぞれ1種類以上"));
                echo '</div>';
                echo '<div class="divider-form"></div>';
                ?>

                <p class="text-center">パスワードをお忘れの方は <strong><?php echo $this->html->link('こちら', '/users/passloss', array('escape' => false));?></strong>.</p>

                <button type="submit" class="btn-block btn btn-lg btn-primary">ログイン</button>

                <p class="text-center">アカウントをお持ちしていない方は <strong><?php echo $this->html->link('こちら', '/users/signup', array('escape' => false));?></strong></p>
            </form>
        </div>
    </div>
</div>
</body>
<html>