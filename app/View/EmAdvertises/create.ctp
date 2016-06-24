
<div class="row">
    <div class="">
        <div class="box">

            <?php
            if($errorMsg)
            {
                echo $this->Html->para('alert alert-danger error-top', $errorMsg);
            }

            echo '<div class="divider-form"></div>';
            echo '<div class="label label-default form-tag right"><i class="fa fa-user"></i> 担当者情報登録</div>';
            echo '<div class="divider-form"></div>';

            echo $this->Form->create(false, array(
                'type' => 'post',
                'role' => 'form',
                'class' => "form-group",
                'id' => 'emAdvertisesCreateForm'
            ));

            echo $this->Form->input('EmAdvertise.employer_id', array('type' => 'hidden', 'value' => $employer['Employer']['id']));

            //職業
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.occupation', '職業');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.occupation', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.occupation', array("class" => "form-control validate[required]", "placeholder" => "サービス業"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //システム
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.salary_system', 'システム');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.salary_system', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->select('EmAdvertise.salary_system',
                array('1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8'),
                array('empty' => '※項目を選択'),
                array("class" => "form-control validate[required]"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //最小収入
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.salary_min', '最小収入');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.salary_min', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.salary_min', array("class" => "form-control validate[required]", "placeholder" => "150,000"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //最大収入
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.salary_max', '最大収入');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.salary_max', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.salary_max', array("class" => "form-control validate[required]", "placeholder" => "200,000"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //勤務地
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.location', '勤務地');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.location', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.location', array("class" => "form-control validate[required]", "placeholder" => "東京"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //備考
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.description', '備考');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.description', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.description', array("class" => "form-control validate[required]", "placeholder" => "週二日制、年俸制など"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //資格
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.qualification', '資格');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.qualification', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.qualification', array("class" => "form-control validate[required]", "placeholder" => "簿記一級、運転免許証、電気二種"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //待遇・福利
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.welfare', '待遇・福利厚生');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.welfare', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.welfare', array("class" => "form-control validate[required]", "placeholder" => "社会保険あり、労災あり、失業保険あり、通勤手当あり。"));
            echo '</div>';
            echo '<div class="divider-form"></div>';

            //休暇
            echo '<div class="form-group">';
            echo $this->Form->label('EmAdvertise.vacation', '休暇');
            echo '&nbsp<span class="label label-warning">必須</span>';
            echo $this->Form->error('EmAdvertise.vacation', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
            echo $this->Form->textarea('EmAdvertise.vacation', array("class" => "form-control validate[required]", "placeholder" => "土日祝日、週二日制、育児休暇あり、有給休暇あり。"));
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


