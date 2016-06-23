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
                $("#emadvertisesEditUpForm").validationEngine();
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



            <?php
            if($errorMsg)
            {
                echo $this->Html->para('alert alert-danger error-top', $errorMsg);
            }


            echo $this->Form->create(false, array(
                'type' => 'post',
                'role' => 'form',
                'class' => "form-group",
                'id' => 'emadvertisesEditUpForm'
            ));

            echo $this->Form->input('EmAdvertise.id', array('type' => 'hidden', 'value' => $data['EmAdvertise']['id']));

            //職業
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.occupation', '職業');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.occupation', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.occupation', array("class" => "form-control validate[required]", 'value' => $data['EmAdvertise']['occupation']));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //システム
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.salary_system', 'システム');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.salary_system', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
                $salare = array(
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                    '3' => '4',
                    '4' => '5',
                    '5' => '6',
                    '6' => '7',
                    '7' => '8');

            ?>
            <select name = "data[EmAdvertise][salary_system]" id = "EmAdvertiseSalarySystem">
                <option value = "">項目を選んでください</option>
                <?php
                foreach ($salary as $key => $value){
                    if ($data['EmAdvertise']['salary_system'] == $key && $data['EmAdvertise']['salary_system'] !== null){
                        echo "<option value =".$key." selected>".$value."</potion>";
                    }else{
                        echo "<option value=".$key.">".$value."</option>";
                    }
                }
                ?>
            </select>

            <?php
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //最小収入
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.salary_min', '最小収入');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.salary_min', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.salary_min', array("class" => "form-control validate[required]", 'value' => $data['EmAdvertise']['salary_min']));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //最大収入
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.salary_max', '最大収入');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.salary_max', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.salary_max', array("class" => "form-control validate[required]", 'value' => $data['EmAdvertise']['salary_max']));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //勤務地
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.location', '勤務地');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.location', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.location', array("class" => "form-control validate[required]", 'value' => $data['EmAdvertise']['location']));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //備考
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.description', '備考');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.description', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.description', array("class" => "form-control validate[required]", 'value' => $data['EmAdvertise']['description']));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //資格
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.qualification', '資格');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.qualification', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.qualification', array("class" => "form-control validate[required]", 'value' => $data['EmAdvertise']['qualification']));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //待遇・福利
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.welfare', '待遇・福利厚生');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.welfare', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.welfare', array("class" => "form-control validate[required]", 'value' => $data['EmAdvertise']['welfare']));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //休暇
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.vacation', '休暇');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.vacation', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.vacation', array("class" => "form-control validate[required]", 'value' => $data['EmAdvertise']['vacation']));
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
                                    url:"\/cakephp2\/employers\/checkid"
                                });
                                return false;});});
            </script>

        </div>
    </div>
</div>
</body>
</html>



<script>
    $(
        function(){
        $("#edit_id").validationEngine();
    };
    )
</script>
<?php

if($errorMsg){
    echo $this->Html->para('errorMsg', $errorMsg);
}

echo  $this->Form->create(false, array('type' => 'post', 'id' => 'edit_id'));

    echo $this->Html->para('', "person in charge information");
    echo "<br/><br/>";

    echo $this->Form->input('EmAdvertise.id', array('type' => 'hidden', 'value' => $data['EmAdvertise']['id']));

    //職業
    echo $this->Form->label('EmAdvertise.occupation', 'occupation');
    echo $this->Form->textarea('EmAdvertise.occupation', array('value' => $data['EmAdvertise']['occupation']));
    echo $this->Form->error('EmAdvertise.occupation');
    //収入システム
    echo $this->Form->label('EmAdvertise.salary_system', 'salary system');
    //echo $this->Form->select('EmAdvertise.salary_system',
        $salary = array(
            '0' => '1',
            '1' => '2',
            '2' => '3',
            '3' => '4',
            '4' => '5',
            '5' => '6',
            '6' => '7',
            '7' => '8');
        //array('empty' => '※項目を選択'),
        //array('value' => $data['EmAdvertise']['salary_system']));
    ?>
    <!--javascript-->
    <select name = "data[EmAdvertise][salary_system]" id = "EmAdvertiseSalarySystem">
        <option value = "">項目を選んでください</option>
        <?php
        foreach ($salary as $key => $value){
            if ($data['EmAdvertise']['salary_system'] == $key && $data['EmAdvertise']['salary_system'] !== null){
                echo "<option value =".$key." selected>".$value."</potion>";
            }else{
                echo "<option value=".$key.">".$value."</option>";
            }
        }
        ?>
    </select>

    <?php
    echo $this->Form->error('EmAdvertise.salary_system');
    //収入
    echo $this->Form->label('EmAdvertise.salary_min', 'salary min');
    echo $this->Form->text('EmAdvertise.salary_min', array('value' => $data['EmAdvertise']['salary_min']));
    echo $this->Form->label('EmAdvertise.salary_max', 'salary max');
    echo $this->Form->text('EmAdvertise.salary_max', array('value' => $data['EmAdvertise']['salary_max']));
    echo $this->Form->error('EmAdvertise.salary_min');
    echo $this->Form->error('EmAdvertise.salary_max');
    //位置
    echo $this->Form->label('EmAdvertise.location', 'location');
    echo $this->Form->textarea('EmAdvertise.location', array('value' => $data['EmAdvertise']['location']));
    echo $this->Form->error('EmAdvertise.location');
    //記述
    echo $this->Form->label('EmAdvertise.description', 'job description');
    echo $this->Form->textarea('EmAdvertise.description', array('value' => $data['EmAdvertise']['description']));
    echo $this->Form->error('EmAdvertise.description');
    //資格
    echo $this->Form->label('EmAdvertise.qualification', 'qualification');
    echo $this->Form->textarea('EmAdvertise.qualification', array('value' => $data['EmAdvertise']['qualification']));
    echo $this->Form->error('EmAdvertise.qualification');
    //待遇・福利
    echo $this->Form->label('EmAdvertise.welfare', 'welfare');
    echo $this->Form->textarea('EmAdvertise.welfare', array('value' => $data['EmAdvertise']['welfare']));
    echo $this->Form->error('EmAdvertise.welfare');
    //休暇
    echo $this->Form->label('EmAdvertise.vacation', 'vacation');
    echo $this->Form->textarea('EmAdvertise.vacation', array('value' => $data['EmAdvertise']['vacation']));
    echo $this->Form->error('EmAdvertise.vacation');
    //サブミット
    echo $this->Form->submit("authentication");

echo $this->Form->end();
?>


