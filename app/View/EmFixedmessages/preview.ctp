<div class="row header">
    <div class="col-xs-6 page-title">
        定型文プレビュー
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active"><a href="/work/emFixedmessages/preview">定型文プレビュー</a></li>
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
    <div class="col-xs-12">
        <a href="/work/emFixedmessages?employer_id=01" class="btn pull-right"><i class="fa fa-arrow-left"></i>&nbsp戻る</a>
    </div>
</div>

<div class="row detail">
    <div class="col-xs-12">
        
        <div class="mail-preview-head">
            <strong>From:</strong> info@workwork.com<br>
            <strong>To:</strong> 応募者メール<br>
            <strong>Cc:</strong> <?php echo $user['EmFixedmessage']['email']; ?><br>
            <strong>Subject:</strong> <?php echo $user['EmFixedmessage']['title']; ?>
        </div>

        <div class="mail-preview-content">
            応募者　様<br><br>
            <?php echo $user['EmFixedmessage']['content'];?><br><br>
            採用担当者: 人事部　<?php echo $user['EmFixedmessage']['representitive']; ?><br>
            問合せメール: <?php echo $user['EmFixedmessage']['email']; ?><br>
            問合せ電話: <?php echo $user['EmFixedmessage']['mobile']; ?><br>
        </div>

    </div>
</div>

