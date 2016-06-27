<div class="row header">
    <div class="col-xs-6 page-title">
        プロファイル
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active"><a href="/work/employers/profile">プロファイル</a></li>
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

    <div class="row" style="width:100%">
        <a href="/work/employers/profileEdit?id=01" class="btn pull-right"><i class="fa fa-pencil"></i>&nbsp情報編集</a>
        <a href="/work/employers/passchange?id=01" class="btn pull-right"><i class="fa fa-key"></i>&nbspパスワード変更</a>
    </div>
    <div class="clear-fix">
    </div>
    <div class="col-sm-5 col-xs-12">
        <div class="label profile-edit-tag"><i class="fa fa-user"></i> 担当者情報</div><hr>
        <table class="table table-striped">
            <tr class="something">
                <td class="col-sm-4">姓</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['staff_family_name']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">名</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['staff_first_name']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">カタカナ</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['staff_furigana']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">部署</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['staff_department']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">役職</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['staff_position']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">電話</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['staff_mobile']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">メール</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['staff_email']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-7 col-xs-12">
        <div class="label profile-edit-tag"><i class="fa fa-building"></i> 会社情報</div><hr>
        <table class="table table-striped">
            <tr class="something">
                <td class="col-sm-4">ログインID</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['login_id']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">会社名</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['name']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">会社URL</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['url']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">成立時間</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['foundation_date']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">従業員数</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['employee_amount']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">資本金</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['capital']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">業界</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['industry']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">会社種類</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['category']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">郵便番号</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['postcode']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">都道府県</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['province']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">アドレス１</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['address1']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">アドレス２</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['address2']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">FAX</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['fax']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">電話</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['tel']; ?></td>
            </tr>
            <tr class="something">
                <td class="col-sm-4">メール</td>
                <td class="col-sm-8"><?php echo $employer['Employer']['email']; ?></td>
            </tr>
        </table>
    </div>
</div>

<hr>

<div class="row" style="width:100%">
    <a href="/work/employers/profileEdit?id=01" class="btn pull-right"><i class="fa fa-pencil"></i>&nbsp情報編集</a>
    <a href="/work/employers/passchange?id=<?php echo $employer['Employer']['id']; ?>" class="btn pull-right"><i class="fa fa-key"></i>&nbspパスワード変更</a>
</div>