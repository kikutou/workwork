<div class="row header">
    <div class="col-xs-6 page-title">
        定型文管理
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active"><a href="/work/em">定型文管理</a></li>
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
        <a href="/work/emFixedmessages/create" class="btn"><i class="fa fa-plus-circle"></i>&nbsp新規定型文作成</a>
        <a href="/work/emFixedmessages?id=01" class="btn btn-blue" data-toggle="modal" data-target="#myModal"><i class="fa fa-question-circle"></i></a>
        <span>&nbsp&nbsp&nbsp後&nbsp<span style="color: red;font-size: 20px;"><?php echo 10-count($user);?></span>&nbsp件登録できます</span>
    </div>
</div>


<div class="row detail">
    <div class="col-xs-12 table-responsive">
<table class="table table-striped">
    <thead>
    <tr>
        <th>No.</th>
        <th>管理用名前</th>
        <th>編集</th>
        <th>プレビュー</th>
        <th>削除</th>
        <th>作成日付</th>
        <th>編集日付</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($user as $key => $value) {
        echo $this->Html->tableCells(array(
            $key+1,
            $this->Html->para('', $value['EmFixedmessage']['name']),
            '<a href="/work/emFixedmessages/edit?id='. $value['EmFixedmessage']['id'].'" class="btn btn-table-green"><i class="fa fa-pencil-square-o fa-1.5x"></i></a>',
            '<a href="/work/emFixedmessages/preview?id='. $value['EmFixedmessage']['id'].'" class="btn btn-table-blue"><i class="fa fa-desktop fa-1.5x"></i></a>',
            '<a href="/work/emFixedmessages/delete?id='. $value['EmFixedmessage']['id'].'" class="btn btn-table-red"><i class="fa fa-trash fa-1.5x"></i></a>',
            $this->Html->para('', $value['EmFixedmessage']['created']),
            $this->Html->para('', $value['EmFixedmessage']['modified'])
        ));
    }
    ?>
    </tbody>
</table>
</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">定型文登録</h4>
            </div>

            <div class="modal-body">
                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">
                            説明
                        </h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <p class = "list-group-item-text">
                            返信した内容を保存しておくことで、次回から定型文を選択するだけで応募者に返信することは可能になります
                        </p>
                    </a>

                    <a href = "#" class = "list-group-item">
                        <p class = "list-group-item-text">返信定型文は、貴社のオリジナルの定型文が最大5件登録できます</p>
                    </a>
                </div>

                <div class = "list-group">
                    <a href = "#" class = "list-group-item active">
                        <h4 class = "list-group-item-heading">
                            メール実例
                        </h4>
                    </a>

                    <a href = "#" class="list-group-item">
                        <h4 class = "list-group-item-heading">
                            赤文字はメッセージ登録フォームに<br>記入する内容となります
                        </h4>
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
                        <h4 class = "list-group-item-heading">

                        </h4>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>




