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
    echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css', array('integrity' => 'sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r', 'crossorigin' => 'anonymous'));
    echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    //Latest compiled and minified JavaScript
    echo $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('integrity' => 'sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS', 'crossorigin' => 'anonymous'));
    //font-awesome
    echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array('integrity' => 'sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1', 'crossorigin' => 'anonymous'));
    
    echo $this->Html->css('user-dashboard');

    echo $this->Html->script('jQuery-Validation-Engine-master/js/jquery.validationEngine.js');
    echo $this->Html->script('jQuery-Validation-Engine-master/js/jquery.validationEngine-ja.js');
    //validationEngineのcssを追加する。
    echo $this->Html->css('validationEngine.jquery.css');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>

    <script>
        $(document).ready(function() {
            $('[data-toggle=offcanvas]').click(function() {
                $('.row-offcanvas').toggleClass('active');
            });
        });

        $(
            function () {
                $("#edit_id").validationEngine();
            }
        );

        $(
            function () {
                $("#passchange").validationEngine();
            }
        );

        $(
            function () {
                $("#addForm").validationEngine();
            }
        );
    </script>

</head>
<body>

<div class="page-container">

    <!-- top navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project Name</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">

            <!-- sidebar -->
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                <ul class="nav">
                    <li class="active"><a href="users/management">応募管理</a></li>
                    <li><a href="users/publish">求人掲載</a></li>
                    <li><a href="users/scout">人材スカウト</a></li>
                    <li><a href="users/fixedmessage">定型文管理</a></li>
                    <li><a href="users/report">掲載状況</a></li>
                    <li><a href="users/profile">アカウント情報管理</a></li>
                    <li><a href="users/help">ヘルプ</a></li>
                </ul>
            </div>

            <!-- main area -->
            <div class="col-xs-12 col-sm-9">
                <div id="content">
                    <?php echo $this->Flash->render(); ?>
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div><!-- /.col-xs-12 main -->
        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/.page-container-->



<!-- Footer -->
<div id="footer">

    <!-- Footer END --></div>

<!--<?php //echo $this->element('sql_dump'); ?>-->

</body>
</html>