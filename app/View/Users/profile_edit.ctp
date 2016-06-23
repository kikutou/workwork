<div class="row header">
    <div class="col-xs-6 page-title">
        登録情報編集
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active"><a href="/work/users/profileEdit">登録情報編集</a></li>
        </ol>
    </div>
</div>
<!--
<div class="row detail">
    <div class="panel panel-danger panel-authentication">
        <div class="panel-heading">アカウント認証されていません&nbsp<i data-toggle="tooltip" data-placement="bottom" title="企業用機能を利用するためには、会社情報の認証が必要です。下のリンクをクリックして、情報を補足してください。審査が通過次第、企業用機能が開放されます。通常の認証期間は５営業日となります。" class="fa fa fa-question-circle danger-tooltip"></i></div>
        <div class="panel-body"><a href="/work/users/profileEdit?id=01">こちら</a>でアカウント認証を行いましょう</div>
    </div>
</div>
-->
<div class="row detail">
    <?php
    //フォームエラー
    if($errorMsg){
        echo $this->Html->para('alert alert-danger error-top', $errorMsg);
    }
    //createform
    echo  $this->Form->create(false, array(
        'type' => 'post',
        'id' => 'edit_id',
        'class' => "form-group"
    ));
    //hiddenuserid
    echo $this->Form->input('User.id', array('type' =>'hidden', 'value' => $user['User']['id'] ));

    //submit button
    echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/users/profile?id=01" class="btn"><i class="fa fa-pencil"></i>&nbspキャンセル</a>';
    echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp保&nbsp存', array(
        "class" => "btn",
        'type' => 'submit',
        'escape' => false
    ));
    echo '</div>
    </div>';

    echo '<div class="col-xs-12">';

    echo "<hr>";

?>

        <script>
            $(
                function () {
                    $("#edit_id").validationEngine();
                }
            )
        </script>
        
        <?php
        /*if($errorMsg){
            echo $this->Html->para('',$errorMsg);
        }
        
        
        echo $this->Form->create(false, array('type' => 'post', 'id' => 'edit_id'));
        
        echo $this->Form->input('User.id', array('type' => 'hidden', 'value' => $user['User']['id']));*/

        echo '<div class="form-group">';
        echo $this->Form->label('User.family_name', '姓');
        echo '&nbsp<span class="label label-warning">必須</span>';
        echo $this->Form->error('User.family_name',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.family_name', array('class' => "'form-control' 'validate[required]'",'value' => $user['User']['family_name']));
        echo '</div>';










        echo $this->Form->label('User.family_name', 'Family Name');
        echo $this->Form->text('User.family_name', array('value' => $user['User']['family_name'], 'class' => 'validate[required]'));
        echo $this->Form->error('User.family_name');
        
        echo $this->Form->label('User.first_name', 'First Name');
        echo $this->Form->text('User.first_name', array('value' => $user['User']['first_name'], 'class' => 'validate[required]'));
        echo $this->Form->error('User.first_name');
        
        echo $this->Form->label('User.furigana', 'Japanese');
        echo $this->Form->text('User.furigana', array('value' => $user['User']['furigana'], 'class' => 'validate[required]'));
        echo $this->Form->error('User.furigana');
        
        /*echo $this->Form->label('User.birthday', 'Birthday');
        echo $this->Form->year('User.birthday', '1946', '2016', array('value' => $user['User']['birthday']));
        echo $this->Form->month('User.birthday',array('value' => $user['User']['birthday']));
        echo $this->Form->day('User.birthday',array('value' => $user['User']['birthday']));
        echo $this->Form->error('User.birthday');*/
        
        echo $this->Form->label('User.birthday', 'Birthday');
        echo $this->Form->text('User.birthday',array('value' => $user['User']['birthday'],'id' => "datepicker", 'class' => 'validate[required]'));
        ?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/js/jquery-ui-1.11.4.custom">
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
        
        
        <?php
        echo '<br/>';
        echo $this->Form->label('User.gender', 'Gender');
        ?>
        <input type="radio" name="data[User][gender]" value="0" <?php if($user['User']['gender'] == 0) {echo "checked"; } ?>>Male
        <br/><br/>
        <input type="radio" name="data[User][gender]" value="1" <?php if($user['User']['gender'] == 1) {echo "checked"; } ?>>Female
        
        <?php
        //echo $this->Form->radio('User.gender', array('male' => 'Male', 'female' => 'Female'), array('legend' => ''), array('value' => $user['User']['gender']));
        echo $this->Form->error('User.gender');
        
        echo '<br/>';
        echo $this->Form->label('User.email', 'Mail');
        echo $this->Form->text('User.email', array('value' => $user['User']['email'], 'class' => 'validate[required]'));
        echo $this->Form->error('User.email');
        
        echo $this->Form->label('User.login_id', 'Login ID');
        echo $this->Form->text('User.login_id', array('value' => $user['User']['login_id'], 'class' => 'validate[required]'));
        echo $this->Form->error('User.login_id');
        
        /*echo '<br/>';
        echo $this->Form->button('Change password button');*/
        
        echo $this->Form->label('User.mobile1', 'Mobile1');
        echo $this->Form->text('User.mobile1', array('value' => $user['User']['mobile1']));
        echo $this->Form->error('User.mobile1');
        
        echo $this->Form->label('User.mobile2', 'Mobile2');
        echo $this->Form->text('User.mobile2', array('value' => $user['User']['mobile2']));
        echo $this->Form->error('User.mobile2');
        
        //TODO ポストコード結合
        echo $this->Form->label('User.postcode1', 'Postcode');
        echo $this->Form->text('User.postcode1', array('value' => $user['User']['postcode1']));
        echo $this->Form->error('User.postcode1');
        echo $this->Html->tag('span', '-');
        echo $this->Form->text('User.postcode2', array('value' => $user['User']['postcode2']));
        echo $this->Form->error('User.postcode2');
        
        echo $this->Html->link('get postcode from address', 'http://www.baidu.com/', array('target' => '_blank'), 'move');
        echo $this->Form->button('Click: Input address automatically according to postcode');
        
        echo $this->Form->label('User.province', 'Province');
        
        $provinces = array(
            '0' => '北海道',
            '1' => '青森県',
            '2' => '秋田県',
            '3' => '岩手県',
            '4' => '山形県',
            '5' => '宮城県',
            '6' => '福島県',
            '7' => '茨城県',
            '8' => '栃木県',
            '9' => '群馬県',
            '10' => '埼玉県',
            '11' => '神奈川県',
            '12' => '千葉県',
            '13' => '東京都',
            '14' => '山梨県',
            '15' => '長野県',
            '16' => '新潟県',
            '17' => '富山県',
            '18' => '石川県',
            '19' => '福井県',
            '20' => '岐阜県',
            '21' => '静岡県',
            '22' => '愛知県',
            '23' => '三重県',
            '24' => '滋賀県',
            '25' => '京都府',
            '26' => '大阪府',
            '27' => '兵庫県',
            '28' => '奈良県',
            '29' => '和歌山県',
            '30' => '鳥取県',
            '31' => '島根県',
            '32' => '岡山県',
            '33' => '広島県',
            '34' => '山口県',
            '35' => '徳島県',
            '36' => '香川県',
            '37' => '愛媛県',
            '38' => '高知県',
            '39' => '福岡県',
            '40' => '佐賀県',
            '41' => '長崎県',
            '42' => '熊本県',
            '43' => '大分県',
            '44' => '宮崎県',
            '45' => '鹿児島県',
            '46' => '沖縄県'
        );
        ?>
        
        <select name="data[User][province]" id="UserProvince">
            <option value="">都道府県を選んでください</option>
            <?php
            foreach ($provinces as $key => $value){
        
                if ($user['User']['province'] == $key && $user['User']['province'] !== null){
                    echo "<option value=".$key." selected>".$value."</option>";
        
                }else{
                    echo "<option value=".$key.">".$value."</option>";
                }
            }
            ?>
        </select>
        
        <?php
        
        echo $this->Form->error('User.province');
        
        echo $this->Form->label('User.address1', 'Address1');
        echo $this->Form->text('User.address1', array('value' => $user['User']['address1']));
        //echo $this->Form->text('User.address1', array('value' => $user['User']['address1']));
        echo $this->Form->error('User.address1');
        
        echo $this->Form->label('User.address2', 'Address2');
        echo $this->Form->text('User.address2', array('value' => $user['User']['address2']));
        //echo $this->Form->text('User.address2', array('value' => $user['User']['address2']));
        echo $this->Form->error('User.address2');
        
        echo $this->Form->label('User.spareday', 'spare time to recieve call');
        ?>
        <?php $name = array('All', 'Mon', 'Tue', 'wed' , 'Thu', 'Fri', 'Sat', 'Sun'); ?>
        <?php for($i = 0; $i < 8; $i++){ ?>
            <div>
                <label><?php echo $name[$i]; ?></label>
                <input name = "data[User][spareday<?php echo $i.']' ?>" value="1" id="UserSpareday<?php echo $i ?>" type = "checkbox"
                    <?php
                    if( substr ($user['User']['spareday'] , $i, 1) == '1'){
                        ?>
                        checked
                        <?php
                    }
                    ?>
        
                >
            </div>
        <?php } ?>
        
        <?php
        $spare_from = array(
        
            '0' => '0:00',
            '1' => '1:00',
            '2' => '2:00',
            '3' => '3:00',
            '4' => '4:00',
            '5' => '5:00',
            '6' => '6:00',
            '7' => '7:00',
            '8' => '8:00',
            '9' => '9:00',
            '10' => '10:00',
            '11' => '11:00',
            '12' => '12:00',
            '13' => '13:00',
            '14' => '14:00',
            '15' => '15:00',
            '16' => '16:00',
            '17' => '17:00',
            '18' => '18:00',
            '19' => '19:00',
            '20' => '20:00',
            '21' => '21:00',
            '22' => '22:00',
            '23' => '23:00',
        
        
        );
        ?>
        <select name="data[User][spare_from]" id="UserSpareFrom">
            <option value="">選んでください</option>
            <?php
            foreach ($spare_from as $key => $value){
                if($user['User']['spare_from'] == $key && $user['User']['spare_from'] !== null ) {
                    echo "<option value=".$key." selected>".$value."</option>";
                }else {
                    echo "<option value=".$key.">".$value."</option>";
                }
            }
            ?>
        </select>
        
        <?php
        echo $this->Html->tag('span', '-');
        ?>
        
        <?php
        $spare_to = array(
        
            '0' => '0',
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8' => '8',
            '9' => '9',
            '10' => '10',
            '11' => '11',
            '12' => '12',
            '13' => '13',
            '14' => '14',
            '15' => '15',
            '16' => '16',
            '17' => '17',
            '18' => '18',
            '19' => '19',
            '20' => '20',
            '21' => '21',
            '22' => '22',
            '23' => '23',
        
        
        );
        ?>
        <select name="data[User][spare_to]" id="UserSpareTo">
            <option value="">選んでください</option>
            <?php
            foreach ($spare_from as $key => $value){
                if($user['User']['spare_to'] == $key && $user['User']['spare_to'] !== null ) {
                    echo "<option value=".$key." selected>".$value."</option>";
                }else {
                    echo "<option value=".$key.">".$value."</option>";
                }
            }
            ?>
        </select>
        
        <?php
        echo $this->Form->label('User.degree', 'Degree');
        
        $degree = array(
        
            '0' => 'Diploma',
            '1' => 'Associate degree',
            '2' => 'Bachelor',
            '3' => 'Master',
            '4' => 'Doctor'
        
        );
        ?>
        
        <select name="data[User][degree]" id="UserDegree">
            <option value="">選んでください</option>
            <?php
            foreach ($degree as $key => $value){
                if($user['User']['degree'] == $key && $user['User']['degree'] !== null ) {
                    echo "<option value=".$key." selected>".$value."</option>";
                }else {
                    echo "<option value=".$key.">".$value."</option>";
                }
            }
            ?>
        </select>
        
        <?php
        echo $this->Form->error('User.degree');
        
        echo $this->Form->label('User.college', 'College');
        echo $this->Form->text('User.college', array('value' => $user['User']['college']));
        echo $this->Form->error('User.college');
        
        echo $this->Form->label('User.primary_major', 'Major');
        echo $this->Form->text('User.primary_major', array('value' => $user['User']['primary_major']));
        echo $this->Form->error('User.primary_major');
        
        echo $this->Form->label('User.secondary_major', 'Major2');
        echo $this->Form->text('User.secondary_major', array('value' => $user['User']['secondary_major']));
        echo $this->Form->error('User.secondary_major');
        
        echo $this->Form->label('User.certification', 'Certification');
        echo $this->Form->textarea('User.certification', array('value' => $user['User']['certification']));
        echo $this->Form->error('User.certification');
        
        echo $this->Form->label('User.skill', 'Skill');
        echo $this->Form->textarea('User.skill', array('value' => $user['User']['skill']));
        echo $this->Form->error('User.skill');
        
        echo $this->Form->label('User.work_situation', 'Work Situation');
        ?>
        <input type="radio" name="data[User][work_situation]" value="0" <?php if($user['User']['work_situation'] == 0) {echo "checked"; } ?>>in employment
        <br/><br/>
        <input type="radio" name="data[User][work_situation]" value="1" <?php if($user['User']['work_situation'] == 1) {echo "checked"; } ?>>out of employment
        <br/><br/>
        <input type="radio" name="data[User][work_situation]" value="2" <?php if($user['User']['work_situation'] == 2) {echo "checked"; } ?>>new graduate
        
        <?php
        //echo $this->Form->radio('User.work_situation', array('situation1' => 'in employment', 'situation2' => 'out of employment','situation3'=>'new graduate'), array('legend' => ''));
        echo $this->Form->error('User.work_situation');
        
        echo $this->Form->submit('submit');
        
        echo $this->Form->end();
        
        
        ?>
        <script>
            $(
                function(){
                    $("#UserSpareday0").click(
                        function () {
                            //Allがチェックされたら、月曜日から日曜日まで全部チェックする
                            if($("#UserSpareday0").prop("checked")){
        
                                for( var i1 = 1; i1 < 8; i1++ ){
                                    $("#UserSpareday" + i1).prop("checked",true);
                                }
                            }else{
                                for( var i1 = 1; i1 < 8; i1++ ){
                                    $("#UserSpareday" + i1).prop("checked",false);
                                }
                            }
        
                        }
                    );
        
        
                    for(var i = 1; i < 8; i++){
                        $("#UserSpareday" + i).click(
                            function(){
        
                                //月曜日から日曜日まで全部チェックされたら、Allをチェックします。
                                //逆に、月曜日から日曜日まで、１つでもチェックされなかったら、Allのチェックを外す。
                                var allChecked = true;
                                for(var i2 = 1; i2 < 8; i2++){
                                    if(!$("#UserSpareday" + i2).prop("checked")){
                                        allChecked = false;
                                        break;
                                    }
                                }
                                if(allChecked){
                                    $("#UserSpareday0").prop("checked",true);
                                }else{
                                    $("#UserSpareday0").prop("checked",false);
                                }
                            }
                        )
                    }
        
                }
            )
        </script>
