<div class="row header">
    <div class="col-xs-6 page-title">
会社情報削除
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active">会社情報削除</a></li>
        </ol>
    </div>
</div>

<div class="row detail">
    <?php
    //フォームエラー
    if($errorMsg){
        echo $this->Html->para('alert alert-danger error-top', $errorMsg);
    }
    //createform
    echo  $this->Form->create(false, array(
        'type' => 'post',
        'id' => 'addForm',
        'class' => "form-group"
    ));
    //hiddenuserid
    echo $this->Form->input('UserResume.id', array('type' =>'hidden',  'value' => $resumes['UserResume']['id'] ));
    echo $this->Form->input('UserResume.user_id', array('type' =>'hidden',  'value' => $resumes['UserResume']['user_id'] ));

    //submit button
    echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">';
    ?>
    <a href="/work/user_resumes/example?id=<?php echo $resumes['UserResume']['user_id'];?>" class="btn"><i class="fa fa-pencil"></i>&nbspキャンセル</a>
    <?php
    echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp削&nbsp除', array(
        "class" => "btn",
        'type' => 'submit',
        'escape' => false
    ));
    echo '</div>
        </div>';

    echo '<div class="col-xs-12">';

    echo "<hr>";


    echo $this->Html->para('UserResume.company', '企業名');
    echo $this->Html->para('', $resumes['UserResume']['company']);

    echo $this->Html->para('UserResume.employment_type', '雇用形態');
    $employment_type = array(

        '0' => 'アルバイト',
        '1' => '派遣社員',
        '2' => '契約社員',
        '3' => '正社員'
    );
    foreach ($employment_type as $key => $value){

        if ($resumes['UserResume']['employment_type'] == $key && $resumes['UserResume']['employment_type'] !== null){
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

        if ($resumes['UserResume']['position'] == $key && $resumes['UserResume']['position'] !== null){
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

        if ($resumes['UserResume']['employee_amount'] == $key && $resumes['UserResume']['employee_amount'] !== null){
            echo $this->Html->para('', $value);

        }else{
            echo $this->Html->para('', ' ');
        }
    }

    echo $this->Html->para('UserResume.start_date1', '在籍期間');

    echo $this->Html->para('', substr($resumes['UserResume']['start_date'],0,4).'-'.substr($resumes['UserResume']['start_date'],5,2));
    echo $this->Html->para('', '~');
    if(!$resumes['UserResume']['end_date']){
        echo $this->Html->para('','現在');
    }else{
        echo $this->Html->para('', substr($resumes['UserResume']['end_date'],0,4).'-'. substr($resumes['UserResume']['end_date'],5,2));
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

        if ($resumes['UserResume']['salary'] == $key && $resumes['UserResume']['salary'] !== null){
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

        if ($resumes['UserResume']['industry'] == $key && $resumes['UserResume']['industry'] !== null){
            echo $this->Html->para('', $value);

        }else{
            echo $this->Html->para('', ' ');
        }
    }

    echo $this->Html->para('UserResume.occupation', '職種');
    echo $this->Html->para('', $resumes['UserResume']['occupation']);

    echo $this->Html->para('UserResume.job_description', '職務内容');
    echo $this->Html->para('', $resumes['UserResume']['job_description']);

    echo $this->Html->para('UserResume.appeal_point', 'アピールポイント');
    echo $this->Html->para('', $resumes['UserResume']['appeal_point']);

    echo '</div>';

    echo "<hr>";
    echo '</div>';
    //submit button
    echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">';
    ?>
    <a href="/work/user_resumes/example?id=<?php echo $resumes['UserResume']['user_id'];?>" class="btn"><i class="fa fa-pencil"></i>&nbspキャンセル</a>
    <?php
    echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp削&nbsp除', array(
        "class" => "btn",
        'type' => 'submit',
        'escape' => false
    ));
    echo '</div>
    </div>';


    echo $this->Form->end();

    ?>
