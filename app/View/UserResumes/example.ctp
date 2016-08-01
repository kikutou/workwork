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

    <button type="button" class="btn" onClick="location.href='/work/users/profile_edit?id=<?php echo $user['User']['id'] ?>'">個人情報編集へ</button>

    <?php

    echo '</div>
    </div>';

    echo '<div class="col-xs-12">';

    echo "<hr>";


    if($errorMsg){
        echo $this->Html->para('',$errorMsg);
    }

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
        '2' => '新卒',
        '3' => 'その他'
    );

    foreach ($work_situation as $key => $value){

        if ($user['User']['work_situation'] == $key && $user['User']['work_situation'] !== null){
            echo $this->Html->para('', $value);

        }else{
            echo $this->Html->para('', ' ');
        }
    }


    echo '<hr />';
    echo $this->Html->para('', '勤務歴');
    $i=5-$resume_num;
    echo $this->Html->para('','あと'.$i.'個入力できます。');

    if($i != '0'){

        echo '<a href="/work/user_resumes/add?resume_id='.$user['User']['id'].'"><input type="button" value="追加"></input></a>';
        echo '<input type="button" onclick="location.href=\'/work/user_resumes/add?resume_id=\''.$user['User']['id'].'" value="追加">';

    }

    foreach($resumes as $resume) {
/*            for($i=1;$i<6;$i++) {
                echo $this->Html->para('', $i . '.');
            }*/
        echo $this->Html->para('UserResume.company', '企業名');
        echo $this->Html->para('', $resume['UserResume']['company']);

        echo $this->Html->para('UserResume.employment_type', '雇用形態');
        $employment_type = array(

            '0' => 'アルバイト',
            '1' => '派遣社員',
            '2' => '契約社員',
            '3' => '正社員'
        );
        foreach ($employment_type as $key => $value){

            if ($resume['UserResume']['employment_type'] == $key && $resume['UserResume']['employment_type'] !== null){
                echo $this->Html->para('', $value);

            }else{
                echo $this->Html->para('', ' ');
            }
        }

        echo $this->Html->para('UserResume.position', '役職');
        $position = array(

            '0' => '代表取締役会長',
            '1' => '代表取締役社長',
            '2' => '部長',
            '3' => '次長',
            '4' => '課長',
            '5' => '係長',
            '6' => '主任',
            '7' => '一般社員'
        );
        foreach ($position as $key => $value){

            if ($resume['UserResume']['position'] == $key && $resume['UserResume']['position'] !== null){
                echo $this->Html->para('', $value);

            }else{
                echo $this->Html->para('', ' ');
            }
        }

        echo $this->Html->para('UserResume.employee_amount', '従業員数');
        $employee_amount = array(

            '0' => '10人未満',
            '1' => '10人～50人未満',
            '2' => '50人～100人未満',
            '3' => '100人～500人未満',
            '4' => '500人～1000人未満',
            '5' => '1000以上'
        );
        foreach ($employee_amount as $key => $value){

            if ($resume['UserResume']['employee_amount'] == $key && $resume['UserResume']['employee_amount'] !== null){
                echo $this->Html->para('', $value);

            }else{
                echo $this->Html->para('', ' ');
            }
        }

        echo $this->Html->para('UserResume.start_date1', '在籍期間');

        echo $this->Html->para('', substr($resume['UserResume']['start_date'],0,4).'-'.substr($resume['UserResume']['start_date'],5,2));
        echo $this->Html->para('', '~');
        if(!$resume['UserResume']['end_date']){
            echo $this->Html->para('','現在');
        }else{
            echo $this->Html->para('', substr($resume['UserResume']['end_date'],0,4).'-'. substr($resume['UserResume']['end_date'],5,2));
        }

        echo $this->Html->para('UserResume.salary', '年収');
        $salary = array(

            '0' => '300万未満',
            '1' => '300万-500万未満',
            '2' => '500万-700万未満',
            '3' => '700万-1000万未満',
            '4' => '1000万以上'
        );
        foreach ($salary as $key => $value){

            if ($resume['UserResume']['salary'] == $key && $resume['UserResume']['salary'] !== null){
                echo $this->Html->para('', $value);

            }else{
                echo $this->Html->para('', ' ');
            }
        }

        echo $this->Html->para('UserResume.industry', '業種');
        $industry = array(

            '0' => '製造業',
            '1' => '農林水産業',
            '2' => '建設土木業',
            '3' => '情報通信業',
            '4' => '電気・ガス・水道業',
            '5' => '公務',
            '6' => '教育・学習支援',
            '7' => '専門技術サービス業',
            '8' => '一般サービス業',
            '9' => '商業・小売業など',
            '10' => '運輸運送業'
        );
        foreach ($industry as $key => $value){

            if ($resume['UserResume']['industry'] == $key && $resume['UserResume']['industry'] !== null){
                echo $this->Html->para('', $value);

            }else{
                echo $this->Html->para('', ' ');
            }
        }

        echo $this->Html->para('UserResume.occupation', '職種');
        echo $this->Html->para('', $resume['UserResume']['occupation']);

        echo $this->Html->para('UserResume.job_description', '職務内容');
        echo $this->Html->para('', $resume['UserResume']['job_description']);

        echo $this->Html->para('UserResume.appeal_point', 'アピールポイント');
        echo $this->Html->para('', $resume['UserResume']['appeal_point']);

        echo '<a href="/work/user_resumes/edit?resume_id=' . $resume['UserResume']['id'] . '">編集</a>';
        echo '&nbsp&nbsp&nbsp&nbsp';
        echo '<a href="/work/user_resumes/edit?resume_id=' . $resume['UserResume']['id'] . '">削除</a>';
        echo '<hr>';
    }

        echo '</div>';

        echo '<hr>';
        echo '</div>';


        //submit button
        echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/users/profile?id=01" class="btn"><i class="fa fa-pencil"></i>&nbspキャンセル</a>';


        echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp保&nbsp存', array(
            'class' => 'btn',
            'type' => 'submit',
            'escape' => false
        ));
        echo '</div>
    </div>';

        echo $this->Form->end();

?>