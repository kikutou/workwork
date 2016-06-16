<div class="row header">
    <div class="col-xs-6 page-title">
        定型文更新
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active"><a href="/work/emFixedmessages/edit">定型文更新</a></li>
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

if($errorMsg){
    echo $this->Html->para('alert alert-danger error-top', $errorMsg);
}

//create　form
echo  $this->Form->create(false, array(
    'type' => 'post',
    'id' => 'emfixedmessage_edit',
    'class' => "form-group"
));
//submit cancel
echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/emFixedmessages?employer_id=01" class="btn"><i class="fa fa-ban"></i>&nbspキャンセル</a>';
echo $this->Form->button('<i class="fa fa-floppy-o"></i>&nbsp&nbsp保&nbsp存', array(
    "class" => "btn",
    'type' => 'submit',
    'escape' => false
));
echo '</div>
    </div>';

echo '<div class="col-xs-12">';

echo "<hr>";

//messageid hidden
echo $this->Form->text('EmFixedmessage.id', array("type" => "hidden", "value" => $user['EmFixedmessage']['id'], "class" => "form-control"));
echo $this->Form->text('EmFixedmessage.employer_id', array("type" => "hidden", "value" => $user['EmFixedmessage']['employer_id'], "class" => "form-control"));

//管理用名前
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.name', '管理用名前');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('EmFixedmessage.name',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->text('EmFixedmessage.name', array('value' => $user['EmFixedmessage']['name'], "class" => "form-control", "placeholder" => ""));
echo '</div>';

echo "<hr>";

//タイトル
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.title', 'メールタイトル');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('EmFixedmessage.title',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->text('EmFixedmessage.title', array('value' => $user['EmFixedmessage']['title'], "class" => "form-control", "placeholder" => ""));
echo '</div>';

//本文
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.content', 'メール本文');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('EmFixedmessage.content',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->textarea('EmFixedmessage.content', array('value' => $user['EmFixedmessage']['content'], "class" => "form-control", "placeholder" => ""));
echo '</div>';

//代表者氏名
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.representitive', '代表者氏名');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('EmFixedmessage.representitive',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->text('EmFixedmessage.representitive', array('value' => $user['EmFixedmessage']['representitive'], "class" => "form-control", "placeholder" => ""));
echo '</div>';

//メール
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.email', '連絡用メール');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('EmFixedmessage.email',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->text('EmFixedmessage.email', array('value' => $user['EmFixedmessage']['email'], "class" => "form-control", "placeholder" => ""));
echo '</div>';

//電話
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.mobile', '電話番号');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('EmFixedmessage.mobile',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->text('EmFixedmessage.mobile', array('value' => $user['EmFixedmessage']['mobile'], "class" => "form-control", "placeholder" => ""));
echo '</div>';

echo '<hr>';

//col12 END
echo '</div>';

//submit button
echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/emFixedmessages?employer_id=01" class="btn"><i class="fa fa-ban"></i>&nbspキャンセル</a>';
echo $this->Form->button('<i class="fa fa-floppy-o"></i>&nbsp&nbsp保&nbsp存', array(
    "class" => "btn",
    'type' => 'submit',
    'escape' => false
));
echo '</div>
    </div>';

echo $this->Form->end();

?>

</div>
