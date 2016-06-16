<div class="row header">
    <div class="col-xs-6 page-title">
        定型文登録
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active"><a href="/work/emFixedmessages/create">定型文登録</a></li>
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

//create　form
echo  $this->Form->create(false, array(
    'type' => 'post',
    'id' => 'emfixedmessage_create',
    'class' => "form-group"
));
//submit cancel
echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/emFixedmessages?id=01" class="btn btn-blue" data-toggle="modal" data-target="#instruction"><i class="fa fa-question-circle"></i></a>
            <a href="/work/emFixedmessages?id=01" class="btn"><i class="fa fa-ban"></i>&nbspキャンセル</a>';
echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp登&nbsp録', array(
    "class" => "btn",
    'type' => 'submit',
    'escape' => false
));
echo '</div>
    </div>';

echo '<div class="col-xs-12">';

echo "<hr>";

echo $this->Form->label('EmFixedmessage.employer_id', '企業ID要隠し');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->text('EmFixedmessage.employer_id', array("class" => "form-control", "placeholder" => ""));
echo $this->Form->error('EmFixedmessage.employer_id',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));

//管理用名前
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.name', '管理用名前');
echo '&nbsp<span class="label label-warning">必須</span>';
echo '<a href="#" class="btn-form-blue pull-right" data-toggle="modal" data-target="#mail-name">記入例</a>';
echo $this->Form->error('EmFixedmessage.name',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->text('EmFixedmessage.name', array("class" => "form-control", "placeholder" => ""));
echo '</div>';

echo "<hr>";

//タイトル
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.title', 'メールタイトル');
echo '&nbsp<span class="label label-warning">必須</span>';
echo '<a href="#" class="btn-form-blue pull-right" data-toggle="modal" data-target="#mail-title">記入例</a>';
echo $this->Form->error('EmFixedmessage.title',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->text('EmFixedmessage.title', array("class" => "form-control", "placeholder" => ""));
echo '</div>';

//本文
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.content', 'メール本文');
echo '&nbsp<span class="label label-warning">必須</span>';
echo '<a href="#" class="btn-form-blue pull-right" data-toggle="modal" data-target="#mail-content">記入例</a>';
echo $this->Form->error('EmFixedmessage.content',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->textarea('EmFixedmessage.content', array("class" => "form-control", "placeholder" => ""));
echo '</div>';

//代表者氏名
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.representitive', '代表者氏名');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('EmFixedmessage.representitive',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->text('EmFixedmessage.representitive', array("class" => "form-control", "placeholder" => ""));
echo '</div>';

//メール
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.email', '連絡用メール');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('EmFixedmessage.email',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->text('EmFixedmessage.email', array("class" => "form-control", "placeholder" => ""));
echo '</div>';

//電話
echo '<div class="form-group">';
echo $this->Form->label('EmFixedmessage.mobile', '電話番号');
echo '&nbsp<span class="label label-warning">必須</span>';
echo $this->Form->error('EmFixedmessage.mobile',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
echo $this->Form->text('EmFixedmessage.mobile', array("class" => "form-control", "placeholder" => ""));
echo '</div>';

echo '<hr>';

//col12 END
echo '</div>';

//submit button
echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/emFixedmessages?id=01" class="btn"><i class="fa fa-ban"></i>&nbspキャンセル</a>';
echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp登&nbsp録', array(
    "class" => "btn",
    'type' => 'submit',
    'escape' => false
));
echo '</div>
    </div>';

echo $this->Form->end();


?>

<?php
//echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('inline'=> false));
//
//$scirpt =<<<EOl
//    function testFunc(str)
//    {
//      alert("you click ");
//    }
//  EOl;
//    echo $this->Html->scriptBlock($scirpt, array('inline' => false, 'safe' => true));
//    $this->Js->get('#click_div');
//    $this->Js->event('click', 'testFunc("click_div")');
//echo $this->Js->writeBuffer();
?>
</div>

<div class="modal fade" id="instruction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">定型文登録</h4>
            </div>

            <div class="modal-body">
                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">説明</h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <p class = "list-group-item-text">返信した内容を保存しておくことで、次回から定型文を選択するだけで応募者に返信することは可能になります</p>
                    </a>

                    <a href = "#" class = "list-group-item">
                        <p class = "list-group-item-text">返信定型文は、貴社のオリジナルの定型文が最大10件登録できます</p>
                    </a>
                </div>

                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">メール実例</h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <h4 class = "list-group-item-heading">赤文字はメッセージ登録フォームに<br>記入する内容となります</h4>
                        <p class = "list-group-item-text">
                            From:workwork.com<br>
                            To:応募者メール<br>
                            Cc:<span class="modal-span-red">連絡用メール</span><br>
                            表題：ワクワク---<span class="modal-span-red">メールタイトル</span><br>
                        </p>
                        <hr>
                        <p class = "list-group-item-text">
                            本文：...<br>
                            <span class="modal-span-red">　　　メール本文</span><br>
                            　　　...<br>
                            　　　採用担当：<span class="modal-span-red">代表者氏名</span><br>
                            　　　電話番号：<span class="modal-span-red">電話番号</span><br>
                            　　　メール：<span class="modal-span-red">連絡用メール</span><br>
                        </p>
                        <h4 class = "list-group-item-heading"></h4>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="mail-name" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">定型文記入例</h4>
            </div>

            <div class="modal-body">
                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">管理用名前</h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <h4 class = "list-group-item-heading">企業様定型文自己管理用名前、実際の返事メールに不表示となります</h4>
                        <p class = "list-group-item-text">技術職書類選考通過--面接通知</p>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="mail-title" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">定型文記入例</h4>
            </div>

            <div class="modal-body">
                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">メールタイトル</h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <p class = "list-group-item-text">○○株式会社選考通知</p>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="mail-content" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">定型文記入例</h4>
            </div>

            <div class="modal-body">
                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">メール本文A</h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <p class = "list-group-item-text">
                            拝啓　時下ますますご健勝のこととお慶び申し上げます。<br>
                            この度は当社のへの応募、誠にありがとうございます。<br>
                            つきましては、貴殿の履歴書及び職務経歴書を拝見し是非、<br>
                            直接お会いをして当社での職務内容などご説明をさせていただきたく存じます。<br>
                            ご意向を本メールへご返信頂ければ幸いでございます。<br>
                            ご連絡をお待ちしております。
                        </p>
                    </a>
                </div>
            </div>

            <div class="modal-body">
                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">メール本文B</h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <p class = "list-group-item-text">
                            拝啓　時下ますますご健勝のこととお慶び申し上げます。<br>

                            さて、この度は当社募集にご興味をいただきまして、誠にありがとうございます。<br>
                            早速ではありますが、以下のとおり面接を実施致しますので、<br>
                            是非ご出席いただきますようお願いいたします。<br>

                            なお、日程等で不都合がありましたら採用担当までご連絡いただけましたら調整いたします 。<br>

                            面接日時：〇〇年〇〇月〇〇日〇〇時より<br>
                            面接場所：〇〇〇〇<br>
                            持参いただきたいもの：履歴書（要写真貼付）、職務経歴書
                        </p>
                    </a>
                </div>
            </div>

            <div class="modal-body">
                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">メール本文C</h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <p class = "list-group-item-text">
                            拝啓　時下ますますご清栄のことと存じます。<br>

                            さて、このたびは、当社の社員募集にあたり、ご応募をいただきまして、まことにありがとうございました。 つきましては、下記の要領で、採用試験を行いますので、定刻までにお集まりくださいますよ う、ご案内申し上げます。<br>　　　　　　　　　　　　　　　　　　　　　　　　敬具

                            　　　　　　　　　　　　　　　　　　　　　記<br>

                            １．日 　時：平成○○年○○月○○日　 午前○○時○○分〜○○時○○分<br>

                            ２．場 　所：〇〇県〇〇市〇〇町〇〇丁目○番○号　　　当社本店　○○室<br>

                            ３．携行品：履歴書（要写真貼付）、職務経歴書
                        </p>
                    </a>
                </div>
            </div>

            <div class="modal-body">
                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">メール本文D</h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <p class = "list-group-item-text">
                            前略　先日ご応募いただきました選考の結果、第一次選考に合格されましたので、お知らせいたします。 つきましては、下記の要領で第二次選考となる面接試験を実施いたしますので、ご来社いただきたく存じます。<br>

                            尚、当日ご来社できない場合は、前日までに当社担当までご連絡下さいますようお願いいたします。<br>
                            草々<br>

                            　　　　　　　　　　　　　　　　　　　　記<br>

                            １．日 　時：平成○○年○○月○○日　 午前○○時○○分〜○○時○○分<br>
                            ２．場 　所：〇〇県〇〇市〇〇町〇〇丁目○番○号　　　当社本店　○○室<br>

                            以上
                        </p>
                    </a>
                </div>
            </div>

            <div class="modal-body">
                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">メール本文E--不採用</h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <p class = "list-group-item-text">
                            拝啓　時下ますますご清栄のこととお喜び申し上げます。<br>
                            さて、先日は弊社の募集に際し、ご応募頂きましてありがとうございました。<br>

                            さっそく慎重に選考を重ねました結果、遺憾ながら今回は面談を見送らせて頂くことになりました。<br>

                            誠に不本意な結論かと存じますが、あしからずご了承下さいますようお願い<br>　
                            申し上げます。末筆ながら、貴殿の今後のご健勝をお祈り申し上げます。<br>　
                            敬具
                        </p>
                    </a>
                </div>
            </div>

            <div class="modal-body">
                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">メール本文F--不採用</h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <p class = "list-group-item-text">
                            拝啓　時下ますますご健勝のこととお慶び申し上げます。<br>
                            さて、先日は当社ご応募いただき誠にありがとうございました。<br>

                            厳正なる選考の結果、残念ながら採用を見送りましたことをご通知いたします。<br>

                            ご志望に添うことができませんでしたが、何卒ご理解の程よろしく願いたします。<br>
                            つきましては、ご応募に際し、お預かりしました履歴書等はすべて弊社にて責任を持って取り扱わせていただきます。<br>

                            末筆ではありますが、より一層のご活躍をお祈りいたします 。<br>　　
                            敬具
                        </p>
                    </a>
                </div>
            </div>

            <div class="modal-body">
                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">メール本文G--不採用</h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <p class = "list-group-item-text">
                            前略　先日は当社採用試験のためにご来社いただきまして、誠にありがとうございました。<br>
                            <br>
                            慎重に選考させていただきました結果、今回は残念ながら採用を見送らせていただくことになりました。<br>
                            <br>
                            何卒、あしからずご海容くださいますよう、お願い申し上げます。<br>
                            今後一層のご健勝とご活躍をお祈り申し上げます。<br>　　　　　　　　　
                            草々
                        </p>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

