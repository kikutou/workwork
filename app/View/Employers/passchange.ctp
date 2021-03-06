<div class="row header">
    <div class="col-xs-6 page-title">
        パスワード変更
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active"><a href="/work/employers/profileEdit">パスワード変更</a></li>
        </ol>
    </div>
</div>

<div class="row detail">
    <div class="panel panel-danger panel-authentication">
        <div class="panel-heading">アカウント認証されていません&nbsp<i data-toggle="tooltip" data-placement="bottom" title="企業用機能を利用するためには、会社情報の認証が必要です。下のリンクをクリックして、情報を補足してください。審査が通過次第、企業用機能が開放されます。通常の認証期間は５営業日となります。" class="fa fa fa-question-circle danger-tooltip"></i></div>
        <div class="panel-body"><a href="/work/employers/profileEdit?id=01">こちら</a>でアカウント認証を行いましょう</div>
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
    'id' => 'passchange',
    'class' => "form-group"
));
//hiddenuserid
echo $this->Form->input('Employer.id', array('type' =>'hidden', 'value' => $user['Employer']['id'] ));

//submit button
echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/employers/profile?id=01" class="btn"><i class="fa fa-pencil"></i>&nbspキャンセル</a>';
echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp保&nbsp存', array(
    "class" => "btn",
    'type' => 'submit',
    'escape' => false
));
echo '</div>
    </div>';

echo '<div class="col-xs-12">';

echo "<hr>";

echo '<div class="form-group">';
echo $this->Form->label('Employer.old_password', '旧パスワード');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('Employer.old_password',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->password('Employer.old_password', array("class" => "form-control", "placeholder" => "8~16桁・英数字それぞれ1種類以上"));
echo '</div>';

echo '<div class="form-group">';
echo $this->Form->label('Employer.old_password', '新パスワード');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('Employer.password',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->password('Employer.password', array("class" => "form-control", "placeholder" => "8~16桁・英数字それぞれ1種類以上"));
echo '</div>';

echo '<div class="form-group">';
echo $this->Form->label('Employer.password_confirm', '新パスワード確認');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('Employer.password_confirm',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->password('Employer.password_confirm', array("class" => "form-control", "placeholder" => "8~16桁・英数字それぞれ1種類以上"));
echo '</div>';

echo "<hr>";
echo '</div>';
//submit button
echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/employers/profile?id=01" class="btn"><i class="fa fa-pencil"></i>&nbspキャンセル</a>';
echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp保&nbsp存', array(
    "class" => "btn",
    'type' => 'submit',
    'escape' => false
));
echo '</div>
    </div>';

echo $this->Form->end();

?>

</div>
