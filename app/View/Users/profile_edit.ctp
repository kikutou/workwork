<div class="row header">
    <div class="col-xs-6 page-title">
        登録情報編集
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active">登録情報編集</a></li>
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
        echo $this->Html->para('',$errorMsg);
    }
    /*if($errorMsg){
        echo $this->Html->para('alert alert-danger error-top', $errorMsg);
    }*/
    //createform
    echo  $this->Form->create(false, array(
        'type' => 'post',
        'id' => 'edit_id',
        'class' => "form-group"
    ));
    //hiddenuserid
    echo $this->Form->input('User.id', array('type' =>'hidden', 'value' => $user['User']['id'] ));

    //submit button
    ?>
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/users/profile?id=<?php echo $user['User']['id']; ?>" class="btn"><i class="fa fa-pencil"></i>&nbspキャンセル</a>
    <?php
    echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp保&nbsp存', array(
        "class" => "btn",
        'type' => 'submit',
        'escape' => false
    ));
    echo '</div>'
    ?>
    </div>
  <?php
    echo '<div class="col-xs-12">';

    echo "<hr>";
        
        //echo $this->Form->create(false, array('type' => 'post', 'id' => 'edit_id'));
        
        echo $this->Form->input('User.id', array('type' => 'hidden', 'value' => $user['User']['id']));

        echo '<div class="form-group">';
        echo $this->Form->label('User.family_name', '姓');
        echo '&nbsp<span class="label label-warning">必須</span>';
        echo $this->Form->error('User.family_name',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.family_name', array('class' => 'form-control validate[required]','value' => $user['User']['family_name']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.first_name', '名');
        echo '&nbsp<span class="label label-warning">必須</span>';
        echo $this->Form->error('User.first_name',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.first_name', array('class' => 'form-control validate[required]','value' => $user['User']['first_name']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.furigana', 'カタカナ');
        echo '&nbsp<span class="label label-warning">必須</span>';
        echo $this->Form->error('User.furigana',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.furigana', array('class' => 'form-control validate[required]','value' => $user['User']['furigana']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.birthday', '生年月日');
        echo '&nbsp<span class="label label-warning">必須</span>';
        echo $this->Form->error('User.birthday',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.birthday', array('class' => 'form-control validate[required]','id' => "datepicker",'value' => $user['User']['birthday']));
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
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.gender', '性別');
        echo '&nbsp<span class="label label-warning">必須</span>';
        echo $this->Form->error('User.gender',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo '<br />';
        ?>

        <input type="radio" name="data[User][gender]" class="validate[required]" value="0" <?php if($user['User']['gender'] == 0) {echo "checked"; } ?>>男性
        <input type="radio" name="data[User][gender]" class="validate[required]" value="1" <?php if($user['User']['gender'] == 1) {echo "checked"; } ?>>女性

        <?php
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.email', 'メール');
        echo '&nbsp<span class="label label-warning">必須</span>';
        echo $this->Form->error('User.email',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.email', array('class' => 'form-control validate[required]','value' => $user['User']['email']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.login_id', 'ログインID');
        echo '&nbsp<span class="label label-warning">必須</span>';
        echo $this->Form->error('User.login_id',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.login_id', array('class' => 'form-control validate[required]','value' => $user['User']['login_id']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.mobile1', '電話番号1');
        echo $this->Form->error('User.mobile1',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.mobile1', array('class' => 'form-control','value' => $user['User']['mobile1']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.mobile2', '電話番号2');
        echo $this->Form->error('User.mobile2',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.mobile2', array('class' => 'form-control','value' => $user['User']['mobile2']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.postcode1', '郵便番号');
        echo '<br />';
        echo $this->Form->error('User.postcode1',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.postcode1', array('value' => $user['User']['postcode1']));
        echo $this->Html->tag('span', '-');
        echo $this->Form->error('User.postcode2',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.postcode2', array('value' => $user['User']['postcode2']));
        echo '</div>';
        echo $this->Form->button('郵便番号から住所自動表示する');
        echo '<br /><br />';

        echo '<div class="form-group">';
        echo $this->Form->label('User.province', '都道府県');
        echo '<br />';
        echo $this->Form->error('User.province',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));

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
        
        <select name="data[User][province]" id="UserProvince" class="form-control">
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
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.address1', '住所1');
        echo $this->Form->error('User.address1',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.address1', array('class' => 'form-control','value' => $user['User']['address1']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.address2', '住所2');
        echo $this->Form->error('User.address2',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.address2', array('class' => 'form-control','value' => $user['User']['address2']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.spareday', '連絡可能な時間帯');
        ?>
        <?php $name = array('すべて', '月曜日', '火曜日', '水曜日' , '木曜日', '金曜日', '土曜日', '日曜日'); ?>
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
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.degree', '学位');
        echo $this->Form->error('User.degree',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo '<br />';

        $degree = array(

            '0' => '学士',
            '1' => '修士',
            '2' => '博士'
        
        );
        ?>
        
        <select name="data[User][degree]" id="UserDegree" class="form-control">
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
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.college', '学校名');
        echo $this->Form->error('User.college',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.college', array('class' => 'form-control','value' => $user['User']['college']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.primary_major', '学部・学科名');
        echo $this->Form->error('User.primary_major',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.primary_major', array('class' => 'form-control','value' => $user['User']['primary_major']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.secondary_major', '学科系統');
        echo $this->Form->error('User.secondary_major',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.secondary_major', array('class' => 'form-control','value' => $user['User']['secondary_major']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.certification', '資格');
        echo $this->Form->error('User.certification',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.certification', array('class' => 'form-control','value' => $user['User']['certification']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.skill', 'スキル');
        echo $this->Form->error('User.skill',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo $this->Form->text('User.skill', array('class' => 'form-control','value' => $user['User']['skill']));
        echo '</div>';

        echo '<div class="form-group">';
        echo $this->Form->label('User.work_situation', '勤務状況');
        echo $this->Form->error('User.work_situation',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
        echo '<br />';
        ?>

        <input type="radio" name="data[User][work_situation]" value="0" <?php if($user['User']['work_situation'] == 0) {echo "checked"; } ?>>就職している
        <br/><br/>
        <input type="radio" name="data[User][work_situation]" value="1" <?php if($user['User']['work_situation'] == 1) {echo "checked"; } ?>>失職中
        <br/><br/>
        <input type="radio" name="data[User][work_situation]" value="2" <?php if($user['User']['work_situation'] == 2) {echo "checked"; } ?>>新卒
        
        <?php
        echo '</div>';

        echo "<hr>";
        echo '</div>';
        //submit button
       ?>
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/users/profile?id=<?php echo $user['User']['id']; ?>" class="btn"><i class="fa fa-pencil"></i>&nbspキャンセル</a>
        <?php echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp保&nbsp存', array(
            "class" => "btn",
            'type' => 'submit',
            'escape' => false
        ));?>
        </div>
    </div>

    <?php
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
