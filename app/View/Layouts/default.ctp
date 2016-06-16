<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="jp">
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

    echo $this->Html->css('articles');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<!-- TopNavi -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo $this->Html->link('企業の方', '/employers/login', array('class' => 'navbar-brand')); ?>
            <!-- <a class="navbar-brand" href="#myPage">企業の方</a> -->
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/work">ホーム</a></li>
                <li><a href="/work/companys">企業検索</a></li>
                <li><a href="/work/jobs">仕事検索</a></li>
                <li><a href="/work/fairs">フェアー</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">お役に立ち情報<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/work/articles/selfAnalysis">自己分析</a></li>
                        <li><a href="/work/articles/jobAnalysis">仕事分析</a></li>
                        <li><a href="/work/articles/application">応募方法</a></li>
                        <li><a href="/work/articles/manner">マナー</a></li>
                        <li><a href="/work/articles/interview">面接方法</a></li>
                        <li><a href="/work/articles/offer">内定</a></li>
                    </ul>
                </li>
                <li><a href="/work/users/signup"><span class="fa fa-user-plus hidden-xs" aria-hidden="true" style="color:#fff;"></span></a></li>
            </ul>
        </div>
        <!--
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img alt="Brand" src="..."></a>
        </div>
        -->
    </div>
    <!-- TopNavi END--></nav>

<!-- LogoRow -->
<div class="container logorow">
    <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5"> <?php echo $this->Html->link($this->Html->image('logo.png', array('alt'=>'logo', 'class'=>'img-responsive logo')), "/", array('escape' => false) ); ?> </div>
        <div class="col-lg-5 col-md-5 col-sm-5"> <?php //echo $this->Html->image('notice.png', array('alt'=>'notice', 'class'=>'img-responsive hidden-xs')); ?> </div>
        <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">

        </div>
        <div class="top-login col-lg- col-md-3 col-sm-3 hidden-xs">
            <?php echo $this->Form->create(false, array('type' => '', 'url' => '', 'class' => 'hidden-xs')); ?>
            <?php echo $this->Form->text('loginID', array('placeholder' => 'ID', 'class' => 'text-upper')); ?>
            <?php echo $this->Form->text('password', array('placeholder' => 'Password', 'class' => 'text-bottom')); ?>
            <?php echo $this->Form->submit('login_submit.png', array('class' => 'img-responsive submit')); ?>
        </div>
        <?php echo $this->Form->end(); ?>
        <div class="col-xs-1 visible-xs-inline-block"></div>
        <div class="col-xs-5 visible-xs-inline-block"><br><?php echo $this->Html->image('login_submit.png', array('alt'=>'to login page', 'class'=>'img-responsive')); ?> </div>
        <div class="col-xs-1 visible-xs-inline-block" style="color:"><a href="/work/users/signup"><br><span class="fa fa-user-plus" aria-hidden="true" style="color:#EA5E5E;"></span></a></div>
    </div>
    <!-- LogoRow END--></div>

    <!-- Mainvisual -->
    <div class="container-fluid mainvisual">
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <?php echo $this->Html->image('mainvisual/mainvisualA.png', array('alt'=>'mainvisualA', 'class'=>'img-responsive logo')); ?>
                        <div class="carousel-caption">
                            <h3>Chania</h3>
                            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                        </div>
                    </div>
                    <div class="item">
                        <?php echo $this->Html->image('mainvisual/mainvisualA.png', array('alt'=>'mainvisualB', 'class'=>'img-responsive logo')); ?>
                        <div class="carousel-caption">
                            <h3>Chania</h3>
                            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                        </div>
                    </div>
                    <div class="item">
                        <?php echo $this->Html->image('mainvisual/mainvisualA.png', array('alt'=>'mainvisualC', 'class'=>'img-responsive logo')); ?>
                        <div class="carousel-caption">
                            <h3>Flowers</h3>
                            <p>Beatiful flowers in Kolymbari, Crete.</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <!--
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                -->
            </div>
        </div>
    <!-- Mainvisual END--></div>

    <div id="content">
        <?php echo $this->Flash->render(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>

    <!-- Footer -->
    <div id="footer">
			
    <!-- Footer END --></div>

</body>
</html>
