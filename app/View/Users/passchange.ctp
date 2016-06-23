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




<?php
if($errorMsg){
    echo $this->Html->para('', $errorMsg);
}

echo $this->Form->create(false, array('type' => 'post'));

echo $this->Form->input('User.id', array('type' => 'hidden', 'value' => $user['User']['id']));

echo $this->Form->label('User.old_password', '旧パスワード');
echo $this->Form->password('User.old_password');
echo $this->Form->error('User.old_password');

echo $this->Form->label('User.password', '新パスワード');
echo $this->Form->password('User.password');
echo $this->Form->error('User.password');

echo $this->Form->label('User.password_confirm', '新パスワード確認');
echo $this->Form->password('User.password_confirm');
echo $this->Form->error('User.password_confirm');

echo $this->Form->submit('change');

echo $this->Form->end();

?>
</body>
<html>