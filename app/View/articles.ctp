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

		//echo $this->Html->css('cake.generic');
                echo $this->Html->css('bootstrap');
		echo $this->Html->css('workwork');
                echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
		echo $this->Html->script('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div>
		<!-- TOP BAR
		<div class="container-fluid topbar"><div class="container topbar"><?php echo $this->Html->link('企業の方', '/employer'); ?></div></div>
		-->
 		<div class="container logorow">
			<div class="row">
  				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> <?php echo $this->Html->image('logo.png', array('alt'=>'logo', 'class'=>'img-responsive logo')); ?> </div>
				<div class="col-lg-6 col-md-6 col-sm-6"> <?php echo $this->Html->image('notice.png', array('alt'=>'notice', 'class'=>'img-responsive hidden-xs')); ?> </div>
  				<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
					<?php echo $this->Form->create(false, array('type' => '', 'url' => '', 'class' => 'hidden-xs')); ?>
						<?php echo $this->Form->text('loginID', array('placeholder' => 'LOGIN ID', 'class' => '')); ?>
						<?php echo $this->Form->submit('login_submit.png', array('class' => 'img-responsive')); ?>
					<?php echo $this->Form->end(); ?>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 visible-xs-inline-block"> <?php echo $this->Html->image('login_submit.png', array('alt'=>'to login page', 'class'=>'img-responsive')); ?> </div>
			</div>
		</div>
	
		<nav class="navbar navbar-default navbar-fixed-top">
  			<div class="container">
				<div class="navbar-header">
      					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>                        
      					</button>
					<?php echo $this->Html->link('企業の方', '/employer', array('class' => 'navbar-brand')); ?>
      					<!--<a class="navbar-brand" href="#myPage">企業の方</a>-->
    				</div>
    				<div class="collapse navbar-collapse" id="myNavbar">
      					<ul class="nav navbar-nav navbar-right">
        					<li><a href="/work">ホーム</a></li>
        					<li><a href="/work/company">企業検索</a></li>
        					<li><a href="/work/job">仕事検索</a></li>
        					<li><a href="/work/fair">フェアー</a></li>
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
        					<!--<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>-->
      					</ul>
  				</div>
				<!--
    				<div class="navbar-header">
      					<a class="navbar-brand" href="#"><img alt="Brand" src="..."></a>
    				</div>
				-->
  			</div>
		</nav>

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
	<?php echo $this->Html->image('mainvisual/mainvisualA.png', array('alt'=>'logo', 'class'=>'img-responsive logo')); ?>
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <?php echo $this->Html->image('mainvisual/mainvisualA.png', array('alt'=>'logo', 'class'=>'img-responsive logo')); ?>
	<div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <?php echo $this->Html->image('mainvisual/mainvisualA.png', array('alt'=>'logo', 'class'=>'img-responsive logo')); ?>
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
</div>








		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
