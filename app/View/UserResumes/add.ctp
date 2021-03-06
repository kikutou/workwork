<div class="row header">
    <div class="col-xs-6 page-title">
        会社情報追加
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active">会社情報追加</a></li>
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
    echo $this->Form->input('UserResume.user_id', array('type' =>'hidden',  'value' => $id ));

    //submit button
    echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">';
    ?>
        <a href="/work/user_resumes/example?id=<?php echo $id;?>" class="btn"><i class="fa fa-pencil"></i>&nbspキャンセル</a>
    <?php
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
    echo $this->Form->text('UserResume.company', array('class' => 'form-control', 'placeholder' => '株式会社○○○ / ○○○株式会社','required'=>''));
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.employment_type', '雇用形態');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('User.employment_type',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->select(
        'UserResume.employment_type',
        array(
            '0' => 'アルバイト',
            '1' => '派遣社員',
            '2' => '契約社員',
            '3' => '正社員'
        ),
        array('empty' => '選んでください','class' => 'form-control validate[required]')
    );
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.position', '役職');
    echo $this->Form->error('UserResume.position',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->select(
        'UserResume.position',
        array(
            '0' => '代表取締役会長',
            '1' => '代表取締役社長',
            '2' => '部長',
            '3' => '次長',
            '4' => '課長',
            '5' => '係長',
            '6' => '主任',
            '7' => '一般社員'
        ),
        array('empty' => '選んでください','class' => 'form-control','required'=>'')
    );
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.employee_amount', '従業員数');
    echo $this->Form->error('UserResume.employee_amount',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->select(
        'UserResume.employee_amount',
        array(
            '0' => '10人未満',
            '1' => '10人～50人未満',
            '2' => '50人～100人未満',
            '3' => '100人～500人未満',
            '4' => '500人～1000人未満',
            '5' => '1000以上'
        ),
        array('empty' => '選んでください', 'class' => 'form-control','required'=>'')
    );
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.start_date1', '在籍期間');
    echo '<br />';
    echo $this->Form->year('UserResume.start_date1',1900, date('Y'),array('empty' => '----','required'=>'','class'=>'validate[required]'));
    echo $this->Form->month('UserResume.start_date2', array('monthNames' => false, 'empty' => '----','required'=>'','class'=>'validate[required]'));

?>

<!--<select id="year1" class="validate[required]"  name="data[UserResume][start_date]"><option value="">----</option></select>年
    <select id="month1" class="validate[required]" name="data[UserResume][start_date]"><option value="">--</option></select>月
    <select id="day1" style="display:none"><option value="0" >--</option></select>-->

    <?php
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('UserResume.start_date1',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo '</div>';

    echo '<div class="form-group">';
    echo '<br />';
    echo $this->Html->tag('span', '-----');
    echo $this->Form->year('UserResume.end_date1',1900, date('Y'),array('empty' => '----','required'=>''));
    echo $this->Form->month('UserResume.end_date2', array('monthNames' => false, 'empty' => '----','required'=>''));

    ?>

<!--    <select id="year2" ><option value="0" required="">----</option></select>年
    <select id="month2"><option value="0" required="">--</option></select>月
    <select id="day2" style="display:none"><option value="0" >--</option></select>
-->
    <?php
    echo '&nbsp<span class="label label-warning">*現在在籍の場合は、終了年月日を入力しないでください。</span>';
    echo $this->Form->error('UserResume.end_date1',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.salary', '年収');
    echo $this->Form->error('UserResume.salary',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->select(
        'UserResume.salary',
        array(
            '0' => '300万未満',
            '1' => '300万-500万',
            '2' => '500万-700万',
            '3' => '700万-1000万',
            '4' => '1000万以上'
        ),
        array('empty' => '選んでください', 'class' => 'form-control','required'=>'')
    );
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.industry', '業種');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('UserResume.industry',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->select(
        'UserResume.industry',
        array(
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
        ),
        array('empty' => '選んでください', 'class' => 'form-control validate[required]')
    );
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.occupation', '職種');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('UserResume.occupation',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->textarea('UserResume.occupation', array('class' => 'form-control validate[required]', 'placeholder' => '営業系','required'=>'block'));
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.job_description', '職務内容');
    echo $this->Form->error('UserResume.job_description',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->textarea('UserResume.job_description', array('class' => 'form-control', 'placeholder' => '売掛管理、サンプル出し、工程管理','required'=>'block'));
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('UserResume.appeal_point', 'アピールポイント');
    echo $this->Form->error('UserResume.appeal_point',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->textarea('UserResume.appeal_point', array('class' => 'form-control', 'placeholder' => '関連会社の中国工場での生産体制、物流などを担当しました。','required'=>'block'));
    echo '</div>';
    ?>

    <?php
        echo '</div>';

        echo "<hr>";
        echo '</div>';
        //submit button
        echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">';
    ?>
        <a href="/work/user_resumes/example?id=<?php echo $id;?>" class="btn"><i class="fa fa-pencil"></i>&nbspキャンセル</a>
    <?php
    echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp保&nbsp存', array(
        "class" => "btn",
        'type' => 'submit',
        'escape' => false
    ));
    
    echo $this->Form->end();

?>


