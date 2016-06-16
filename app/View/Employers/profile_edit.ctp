<div class="row header">
    <div class="col-xs-6 page-title">
        プロファイル編集
    </div>
    <div class="col-xs-6 page-breadcrumb text-right">
        <ol class="breadcrumb">
            <li><a href="/work"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li class="active"><a href="/work/employers/profileEdit">プロファイル編集</a></li>
        </ol>
    </div>
</div>

    <div class="row detail">
    <?php

    //create　form
    echo  $this->Form->create(false, array(
        'type' => 'post',
        'id' => 'edit_id',
        'class' => "form-group"
    ));

    //submit button
    echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/employers/profile?id=01" class="btn"><i class="fa fa-ban"></i>&nbspキャンセル</a>';
    echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp保&nbsp存', array(
        "class" => "btn",
        'type' => 'submit',
        'escape' => false
    ));
    echo '</div>
    </div>';

    //フォームエラー
    if($errorMsg){
        echo $this->Html->para('alert alert-danger error-top', $errorMsg);
    }

    //hidden ID
    echo $this->Form->input('Employer.id', array('type' => 'hidden', 'value' => $user['Employer']['id']));

    /*
     * 会社情報
     * */
    echo '<div class="col-sm-6 col-xs-12">';
    echo '<div class="label profile-edit-tag"><i class="fa fa-building"></i> 会社情報</div><hr>';

    //会社名
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.name', '会社名');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.name',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.name', array('value' => $user['Employer']['name'], "class" => "form-control", "placeholder" => "株式会社○○○"));
    echo '</div>';


    //会社URLチェック
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.url', '会社URL');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.url', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.url', array('value' => $user['Employer']['url'], "class" => "form-control", "placeholder" => "www.html.com"));
    echo '</div>';

    //成立時間
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.foundation_date', '成立時間');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.foundation_date',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->year('Employer.foundation_date', '1900', '2016', array("class" => "form-control"));
    echo $this->Form->month('Employer.foundation_date', array("class" => "form-control"));
    echo $this->Form->day('Employer.foundation_date', array("class" => "form-control"));
    echo '</div>';

    //従業員数
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.employee_amount\'', '従業員数');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.name',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->select(
        'Employer.employee_amount',
        array(
            '0' => '10人未満',
            '1' => '10人～50人未満',
            '2' => '50人～100人未満',
            '3' => '100人～500人未満',
            '4' => '500人～1000人未満',
            '5' => '1000以上'
        ),
    array('empty' => '-', 'selected' => 'Employer.employee_amount', "class" => "form-control")
    );
    echo '</div>';

    //資本金
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.capital', '資本金');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.capital',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->select(
        'Employer.capital',
        array(
            '0' => '1000万未満',
            '1' => '1000万～5000万未満',
            '2' => '5000万～1億万未満',
            '3' => '1億以上'
        ),
        array('empty' => '-', "class" => "form-control")
    );
    echo '</div>';

    //業界
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.industry', '業界');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.industry',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->select(
        'Employer.indusrty',
        array(
            '0' => '自動車',
            '1' => '機会・造船',
            '2' => '電気。精密機器',
            '3' => '建築・住宅・不動産',
            '4' => '素材',
            '5' => '食品･飲料',
            '6' => '化学',
            '7' => '医薬',
            '8' => '流通・小売・外食',
            '9' => '金融（銀行）',
            '10' => '金融（証券）',
            '11' => '金融（保険）',
            '12' => '金融（その他）',
            '13' => '運輸･物流',
            '14' => 'エネルギー･環境',
            '15' => '医療・福祉',
            '16' => 'マスコミ（放送・新聞・出版・広告）',
            '17' => 'レジャー・エンタメ',
            '18' => 'IT・情報通信',
            '19' => '官公庁・公的機関',
            '20' => 'コンサルティング',
            '21' => 'その他'
        ),
        array('empty' => '-', "class" => "form-control")
    );
    echo '</div>';

    //会社種類
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.category', '会社種類');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.category',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->select(
        'Employer.category',
        array(
            '0' => '株式会社',
            '1' => '合同会社',
            '2' => '合名会社',
            '3' => '合資会社'
        ),
        array('empty' => '-', "class" => "form-control")
    );
    echo '</div>';

    //郵便番号
    echo '<div class="form-group">';
    echo $this->Form->label('', '郵便番号');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.postcode1',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->error('Employer.postcode2',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo '<div class="row"><div class="col-xs-5">';
    echo $this->Form->text('Employer.postcode1', array('value' => $user['Employer']['postcode'], "class" => "form-control", "placeholder" => "001"));
    echo '</div><div class="col-xs-1" style="padding:5px 10px;">-</div><div class="col-xs-6">';
    echo $this->Form->text('Employer.postcode2', array('value' => $user['Employer']['postcode'], "class" => "form-control", "placeholder" => "0001"));
    echo '</div></div>';
    echo $this->Form->button('郵便番号からアドレスを入力', array('id' => '', 'onclick' => '', 'type' => 'button', 'class' => 'btn btn-default btnpost'));
    echo '</div>';

    echo '<div class="form-group">';
    echo $this->Form->label('Employer.province', '都道府県');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.province',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->select('Employer.province',
        array(
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
        ),
        array('empty' => '-',  "class" => "form-control")
    );
    echo '</div>';

    //アドレス１
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.address1', 'アドレス１');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.address1',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.address1', array('value' => $user['Employer']['address1'], "class" => "form-control", "placeholder" => "○○市○○町xx-xx-xx"));
    echo '</div>';

    //アドレス２
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.address2', 'アドレス２');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.address2',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.address2', array('value' => $user['Employer']['address2'], "class" => "form-control", "placeholder" => "○○ビル○○室"));
    echo '</div>';

    //会社FAX
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.fax', 'FAX');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.fax',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.fax', array('value' => $user['Employer']['fax'], "class" => "form-control", "placeholder" => "08012345678"));
    echo '</div>';

    //会社電話
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.tel', '電話番号');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.tel',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.tel', array('value' => $user['Employer']['tel'], "class" => "form-control", "placeholder" => "08012345678"));
    echo '</div>';

    //会社メール
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.email', '会社メール');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.email',  array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.email', array('value' => $user['Employer']['email'], "class" => "form-control", "placeholder" => "xxx@work.com"));
    echo '</div>';

    //会社END
    echo '</div>';

    /*
     * 担当者情報
     * */
    echo '<div class="col-sm-6 col-xs-12">';
    echo '<div class="label profile-edit-tag"><i class="fa fa-user"></i> 担当者情報</div><hr>';

    //苗字
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.staff_family_name', '姓');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.staff_family_name', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.staff_family_name', array('value' => $user['Employer']['staff_family_name'], "class" => "form-control", "placeholder" => "山田"));
    echo '</div>';


    //名前
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.staff_first_name', '名');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.staff_first_name', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.staff_first_name', array('value' => $user['Employer']['staff_first_name'], "class" => "form-control", "placeholder" => "太郎"));
    echo '</div>';


    //ふりがな
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.staff_furigana', 'カタカナ');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.staff_furigana', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.staff_furigana', array('value' => $user['Employer']['staff_furigana'], "class" => "form-control", "placeholder" => "ヤマダタロウ"));
    echo '</div>';


    //部署
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.staff_department', '部署');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.staff_department', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.staff_department', array('value' => $user['Employer']['staff_department'], "class" => "form-control", "placeholder" => "営業部"));
    echo '</div>';


    //ポスト
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.staff_position', '役職');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.staff_position', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.staff_position', array('value' => $user['Employer']['staff_position'], "class" => "form-control", "placeholder" => "課長"));
    echo '</div>';


    //電話
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.staff_mobile', '電話');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.staff_mobile', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.staff_mobile', array('value' => $user['Employer']['staff_mobile'], "class" => "form-control", "placeholder" => "08012345678"));
    echo '</div>';


    //メール
    echo '<div class="form-group">';
    echo $this->Form->label('Employer.staff_email', 'メール');
    echo '&nbsp<span class="label label-warning">必須</span>';
    echo $this->Form->error('Employer.staff_email', array('attributes' => array('wrap' => 'div','class' => 'alert alert-danger')));
    echo $this->Form->text('Employer.staff_email', array('value' => $user['Employer']['staff_email'], "class" => "form-control", "placeholder" => "xxx＠workwork.com"));
    echo '</div>';

    //担当者END
    echo '</div>';

    //フォームROWEND
    echo '</div>';

    echo '<hr>';
    //submit button
    echo '
    <div class="row" style="width:100%">
        <div class="text-right" style="margin-bottom:10px;">
            <a href="/work/employers/profile?id=01" class="btn"><i class="fa fa-ban"></i>&nbspキャンセル</a>';
         echo $this->Form->button('<i class="fa fa-pencil"></i>&nbsp&nbsp保&nbsp存', array(
            "class" => "btn",
            'type' => 'submit',
            'escape' => false
        ));
     echo '</div>
    </div>';

    echo $this->Form->end();
    ?>


