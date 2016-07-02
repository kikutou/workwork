<div class="row header">
    <div class="col-xs-6 page-title">
        個人履歴書
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active"><a href="/work/users/profile_edit">個人履歴書</a></li>
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
    //submit button
    echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">';
    ?>

    <button type="button" class="btn" onClick="location.href='/work/users/profile_edit?id=<?php echo $user['User']['id']?>'">個人情報編集へ</button>

    <?php
    echo '</div>
    </div>';

    echo '<div class="col-xs-12">';

    echo "<hr>";

    ?>


<?php

    if($errorMsg){
        echo $this->Html->para('',$errorMsg);
    }

    ?>

    <?php

    echo '<div class="form-group">';
    echo $this->Html->para('User.name', '名前');
    echo $this->Html->para('',$user['User']['family_name'].' '.$user['User']['first_name']);
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('User.furigana', 'カタカナ');
    echo $this->Html->para('',$user['User']['furigana']);
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('User.birthday', '生年月日');
    echo $this->Html->para('',$user['User']['birthday']);
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('User.gender', '性別');

    $gender = $user['User']['gender'];

    if ($gender == '0' && $gender !== null){
        echo $this->Html->para('', '男性');

    }else{
        echo $this->Html->para('', '女性');
    }
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('User.email', 'メール');
    echo $this->Html->para('',$user['User']['email']);
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('User.login_id', 'ログインID');
    echo $this->Html->para('',$user['User']['login_id']);
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('User.mobile1', '電話番号1');
    echo $this->Html->para('',$user['User']['mobile1']);
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('User.mobile2', '電話番号2');
    echo $this->Html->para('',$user['User']['mobile2']);
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('User.postcode', '郵便番号');
    echo $this->Html->para('',$user['User']['postcode']);
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('User.province', '都道府県');

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

    foreach ($provinces as $key => $value){

        if ($user['User']['province'] == $key && $user['User']['province'] !== null){
            echo $this->Html->para('', $value);

        }else{
            echo $this->Html->para('', ' ');
        }
    }
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('User.address1', '住所1');
    echo $this->Html->para('', $user['User']['address1']);
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('User.address2', '住所2');
    echo $this->Html->para('', $user['User']['address2']);
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Html->para('receive_mail', '連絡可能な時間帯');

    $allNames = array('すべて', '月曜日', '火曜日', '水曜日' , '木曜日', '金曜日', '土曜日', '日曜日');

    $name = $user['User']['spareday'];

    if( substr ($name , 0, 1) == '1'){

        echo $this->Html->para('', "月曜日', '火曜日', '水曜日' , '木曜日', '金曜日', '土曜日', '日曜日'");
    }else {

        $weekdays = '';

        for($i = 1; $i < 8 ; $i++){

            if(substr ($name , $i, 1) == '1'){
                //echo $this->Html->para('', $allNames[$i]);
                $weekdays .= $allNames[$i].' ';
            }
        }

        echo $this->Html->para('', $weekdays);
    }

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

    foreach ($spare_from as $key => $value){

        if ($user['User']['spare_from'] == $key && $user['User']['spare_from'] !== null){
            echo $this->Html->para('', $value);

        }else{
            echo $this->Html->para('', ' ');
        }
    }

    echo $this->Html->tag('span', '-');

    $spare_to = array(

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

    foreach ($spare_to as $key => $value){

        if ($user['User']['spare_to'] == $key && $user['User']['spare_to'] !== null){
            echo $this->Html->para('', $value);

        }else{
            echo $this->Html->para('', ' ');
        }
    }
    echo '</div>';







    echo $this->Html->para('User.degree', '学位');

    $degree = array(

        '0' => '学士',
        '1' => '修士',
        '2' => '博士'

    );

    foreach ($degree as $key => $value){

        if ($user['User']['degree'] == $key && $user['User']['degree'] !== null){
            echo $this->Html->para('', $value);

        }else{
            echo $this->Html->para('', ' ');
        }
    }

    echo $this->Html->para('User.college', '学校名');
    echo $this->Html->para('', $user['User']['college']);

    echo $this->Html->para('User.primary_major', '学部・学科名');
    echo $this->Html->para('', $user['User']['primary_major']);

    echo $this->Html->para('User.secondary_major', '学科系統');
    echo $this->Html->para('', $user['User']['secondary_major']);

    echo $this->Html->para('User.certification', '資格');
    echo $this->Html->para('', $user['User']['certification']);

    echo $this->Html->para('User.skill', 'スキル');
    echo $this->Html->para('', $user['User']['skill']);

    echo $this->Html->para('User.work_situation', '勤務状況');

    $work_situation = array(

        '0' => '就職している',
        '1' => '失職中',
        '2' => '新卒'
    );

    foreach ($work_situation as $key => $value){

        if ($user['User']['work_situation'] == $key && $user['User']['work_situation'] !== null){
            echo $this->Html->para('', $value);

        }else{
            echo $this->Html->para('', ' ');
        }
    }




    echo $this->Html->para('', '勤務歴');
    echo '<hr />';
?>
    <button type="button" onClick="location.href='/work/user_resumes/add?resume_id=<?php echo $resumes["UserResume"]["id"]?>'">追加</button>
    <button type="button" onClick="location.href='/work/user_resumes/edit?resume_id=<?php echo $resumes['UserResume']['id']?>'">編集</button>
    <hr>


<?php foreach($resumes as $resume){
    echo $this->Html->para('',$resume['UserResume']['user_id']);
    echo $this->Html->para('',$resume['UserResume']['company']);
    echo '<a href="/work/user_resumes/edit?resume_id='.$resume['UserResume']['id'].'">編集</a>';
    echo '<hr>';
}?>




    <?php
    echo '</div>';

    echo "<hr>";
    echo '</div>';
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

    echo $this->Form->end();


    ?>
