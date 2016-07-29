<div class="row header">
    <div class="col-xs-6 page-title">
        会社情報編集
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active">会社情報編集</a></li>
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

    //submit button
    echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/user_reusmes/edit?id=01" class="btn"><i class="fa fa-pencil"></i>&nbspキャンセル</a>';
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

    <?php
    /* if($errorMsg){
         echo $this->Html->para('', $errorMsg);
     }*/

    //echo $this->Form->create(false, array('type' => 'post',  'id' =>'addForm', 'class' => "form-group"));

    //echo $this->Form->input('UserResume.delete_flag', array('type' => 'hidden', 'value' => $user['UserResume']['user_id']));

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.company', '企業名');
    echo $this->Form->error('UserResume.company', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('UserResume.company', array('class' => 'form-control', 'value' => $resumes['UserResume']['company'],'required'=>''));
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.employment_type', '雇用形態');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('UserResume.employment_type',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));

    $employment_type =  array(
        '0' => 'アルバイト',
        '1' => '派遣社員',
        '2' => '契約社員',
        '3' => '正社員'
    );
    ?>

    <select name="data[UserResume][employment_type]" id="UserResumeEmploymentType" class="form-control validate[required]">
        <option value="" >選んでください</option>
        <?php
        foreach ($employment_type as $key => $value){

            if ($resumes['UserResume']['employment_type'] == $key && $resumes['UserResume']['employment_type'] !== null){
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
    echo $this->Form->label('UserResume.position', '役職');
    echo $this->Form->error('UserResume.position',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));

    $position=array(
        '0' => '代表取締役会長',
        '1' => '代表取締役社長',
        '2' => '部長',
        '3' => '次長',
        '4' => '課長',
        '5' => '係長',
        '6' => '主任',
        '7' => '一般社員'
    );
    ?>

    <select name="data[UserResume][position]" id="UserResumeEmploymentType" class="form-control">
        <option value="">選んでください</option>
        <?php
        foreach ($position as $key => $value){

            if ($resumes['UserResume']['position'] == $key && $resumes['UserResume']['position'] !== null){
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
    echo $this->Form->label('UserResume.employee_amount', '従業員数');
    echo $this->Form->error('UserResume.employee_amount',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));

    $employee_amount=array(
            '0' => '10人未満',
            '1' => '10人～50人未満',
            '2' => '50人～100人未満',
            '3' => '100人～500人未満',
            '4' => '500人～1000人未満',
            '5' => '1000以上'
        );
    ?>

    <select name="data[UserResume][employee_amount]" id="UserResumeEmploymentType" class="form-control">
        <option value="">選んでください</option>
        <?php
        foreach ($employee_amount as $key => $value){

            if ($resumes['UserResume']['employee_amount'] == $key && $resumes['UserResume']['employee_amount'] !== null){
                echo "<option value=".$key." selected>".$value."</option>";

            }else{
                echo "<option value=".$key.">".$value."</option>";
            }
        }
        ?>
    </select>

    <?php
    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.start_date1', '在籍期間');
    echo '<br />';
   ?>

    <select name="data[UserResume][start_date1][year]" class="validate[required]" id="UserResumeStartDate1Year">
        <?php

        echo '<option value='.' '.'>'.'----'.'</option>';
        for($i=date('Y');$i>=1900;$i--){
            if($resumes['UserResume']['start_date1'] && $resumes['UserResume']['start_date1'] == $i){
                echo "<option value=".$i." selected>".$i."</option>";
            }else{
                echo '<option value='.$i.'>'.$i.'</option>';
            }
        }
        ?>
    </select>

    <?php
    $month1=array(
    '01',
    '02',
    '03',
    '04',
    '05',
    '06',
    '07',
    '08',
    '09',
    '10',
    '11',
    '12'
    );
    ?>
    <select name="data[UserResume][start_date2][month]" class="validate[required]" id="UserResumeStartDate2Month">

        <option value="">----</option>
        <?php
        foreach ($month1 as $value){

            //$resumes['UserResume']['start_date2']開始月がある,かつ、$resumes['UserResume']['start_date2']月は該当月に相等している場合、該当月をselectedにする。
            if($resumes['UserResume']['start_date2'] && $resumes['UserResume']['start_date2'] == $value){
                echo "<option value=".$value." selected>".$value."</option>";
            }else{
                echo "<option value=".$value.">".$value."</option>";
            }
        }
        ?>
    </select>




    <?php
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('UserResume.start_date1',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo '</div>';

    echo '<div class="form-group">';
    echo '<br />';
    echo $this->Html->tag('span', '-----');
    ?>

    <select name="data[UserResume][end_date1][year]" id="UserResumeEndDate1Year">
        <?php

        echo '<option value='.' '.'>'.'----'.'</option>';
        for($i=date('Y');$i>=1900;$i--){
            if($resumes['UserResume']['end_date1'] && $resumes['UserResume']['end_date1'] == $i){
                echo "<option value=".$i." selected>".$i."</option>";
            }else{
                echo '<option value='.$i.'>'.$i.'</option>';
            }
        }
        ?>
    </select>

    <?php
    $month2=array(
        '01',
        '02',
        '03',
        '04',
        '05',
        '06',
        '07',
        '08',
        '09',
        '10',
        '11',
        '12'
    );
    ?>
    <select name="data[UserResume][end_date2][month]" id="UserResumeEndDate2Month">

        <option value="">----</option>
        <?php
        foreach ($month2 as $value){

            //$resumes['UserResume']['end_date2']開始月がある,かつ、$resumes['UserResume']['end_date2']月は該当月に相等している場合、該当月をselectedにする。
            if($resumes['UserResume']['end_date2'] && $resumes['UserResume']['end_date2'] == $value){
                echo "<option value=".$value." selected>".$value."</option>";
            }else{
                echo "<option value=".$value.">".$value."</option>";
            }
        }
        ?>
    </select>

    <?php
    echo '&nbsp<span class="label label-warning">*現在在籍の場合は、終了年月日を入力しないでください。</span>';
    echo $this->Form->error('UserResume.end_date1',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.salary', '年収');
    echo $this->Form->error('UserResume.salary',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));

    $salary=array(
        '0' => '300万未満',
        '1' => '300万-500万',
        '2' => '500万-700万',
        '3' => '700万-1000万',
        '4' => '1000万以上'
    );
    ?>

    <select name="data[UserResume][salary]" id="UserResumeEmploymentType" class="form-control" required="">
        <option value="">選んでください</option>
        <?php
        foreach ($salary as $key => $value){

            if ($resumes['UserResume']['salary'] == $key && $resumes['UserResume']['salary'] !== null){
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
    echo $this->Form->label('UserResume.industry', '業種');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('UserResume.industry',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));

    $industry=array(
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
    ?>

    <select name="data[UserResume][industry]" id="UserResumeEmploymentType" class="form-control">
        <option value="">選んでください</option>
        <?php
        foreach ($industry as $key => $value){

            if ($resumes['UserResume']['industry'] == $key && $resumes['UserResume']['industry'] !== null){
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
    echo $this->Form->label('UserResume.occupation', '職種');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('UserResume.occupation',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->textarea('UserResume.occupation', array('class' => 'form-control validate[required]','value' => $resumes['UserResume']['occupation']));
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.job_description', '職務内容');
    echo $this->Form->error('UserResume.job_description',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->textarea('UserResume.job_description', array('class' => 'form-control','value' => $resumes['UserResume']['job_description'],'required'=>'block'));
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.appeal_point', 'アピールポイント');
    echo $this->Form->error('UserResume.appeal_point',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->textarea('UserResume.appeal_point', array('class' => 'form-control', 'value' => $resumes['UserResume']['appeal_point'],'required'=>'block'));
    echo '</div>';
    ?>

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
