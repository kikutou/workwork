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

    echo $this->Html->css('employer-dashboard');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>

    <script>
        //offcanvas leftmenu
        $(document).ready(function() {
            $('[data-toggle=offcanvas]').click(function() {
                $('.row-offcanvas').toggleClass('active');
            });
        });

        //tooltip
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

        //popover
        $(function () {
            $('[data-toggle="popover"]').popover()
                });
    </script>

</head>
<body>

<div class="page-container">

    <!-- top navbar -->
    <div class="navbar navbar-default navbar-fixed-top topbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-left" style="margin-left:10px;" data-toggle="offcanvas" data-target=".sidebar-nav"> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button> <a class="navbar-brand pull-right" href="/work/employers" contenteditable="false">ワクワク企業</a>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
            <!-- sidebar -->
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" style="margin-top:0px;" id="sidebar" role="navigation">
                <ul class="nav">
                    <li class="active"><a href="/work/employers/management" class=""><i class="fa fa-tachometer fa-fw"></i>&nbsp;&nbsp;応募管理</a>

                    </li>
                    <li><a href="/work/emAdvertises/" class="dropdown-toggle"><i class="fa fa-briefcase fa-fw"></i>&nbsp;&nbsp;求人掲載</a>

                    </li>
                    <li><a href="/work/employers/scout" class=""><i class="fa fa-search fa-fw"></i>&nbsp;&nbsp;人材スカウト</a>

                    </li>
                    <li><a href="/work/emFixedmessages/" class=""><i class="fa fa-commenting fa-fw"></i>&nbsp;&nbsp;定型文管理</a>

                    </li>
                    <li><a href="/work/employers/report" class=""><i class="fa fa-bar-chart-o fa-fw"></i>&nbsp;&nbsp;掲載状況</a>

                    </li>
                    <li><a href="/work/employers/profile" class=""><i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;プロファイル</a>

                    </li>
                    <li><a href="/work/employers/help" class=""><i class="fa fa-question-circle fa-fw"></i>&nbsp;&nbsp;ヘルプ</a>

                    </li>
                </ul>
            </div>


            <!-- main area -->
            <div class="col-xs-12 col-sm-9" style="padding-right: 0;padding-left: 0;">
                <div id="content" >

                    <?php echo $this->Flash->render(); ?>
                    <?php echo $this->fetch('content'); ?>

                </div>
            </div>
            <!-- /.col-xs-12 main -->
        </div>
        <!--/.row-->+
    </div>
    <!--/.container--> <i class="icon-cog"></i>

</div>
<!--/.page-container-->

<!-- Footer -->
<div id="footer">
    <div class="container-fluid copyright">
        <div class="text-center">
            <a href="/work">ワクワク</a>・
            <a href="/other/enquiry">お問合せ</a>・
            <a href="/other/contact">コンタクト</a>・
            <a href="/other/privacy">プライバシープリシー</a>・
            <a href="/work/employers/help">ヘルプ</a>・
            <a href="/sitemap">サイトマップ</a>
        </div>
        <div class="text-center">Copyright WorkWork Site All rights reserved.</div>
    </div>
    <!-- Footer END --></div>

</body>
</html>