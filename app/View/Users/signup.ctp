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

            <form role="form">

                <div class="divider-form"></div>

                <div class="form-group">
                    <label for="exampleInputEmail1">ログインID</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ログインID/メール">
                </div>

                <div class="divider-form"></div>

                <div class="form-group">
                    <label for="exampleInputPassword1">パスワード</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="パスワード">
                </div>

                <div class="divider-form"></div>

                <p class="text-center">※お読みください <strong><?php echo $this->html->link('利用規約/個人情報保護方針', 'http://kiyaku.jp/', array('escape' => false));?></strong>.</p>

                <button type="submit" class="btn-block btn btn-lg btn-primary">以上の規約に同意して新規登録</button>

                <p class="text-center">既にアカウントをお持ちしています <?php echo $this->html->link('ログイン', '/users/login', array('escape' => false));?> </p>
            </form>
        </div>
    </div>
</div>
</body>
<html>