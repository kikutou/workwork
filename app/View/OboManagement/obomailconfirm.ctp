<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>応募管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/oboManagement/oboMailConfirm" /><link rel="stylesheet" href="/sponsor/css/notice.css" media="all" type="text/css" baseViewId="/oboManagement/oboMailConfirm" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/oboManagement/oboMailConfirm" xml:space="preserve"></script></head>
<body class="oboManagement">

    <div id="document">





<div id="header"><div id="headerInner">
<h1 id="siteTitle"><img src="/sponsor/images/base/logo_siteTitle.png?date160127" height="28" alt="クリエイト管理システム" width="129" /></h1>

<div id="globalNav">
<ul><li id="gnav07"><a shape="rect" href="../help/">ヘルプ</a></li><li id="gnav06"><a shape="rect" href="../accessLog/">レポート</a></li><li id="gnav05"><a shape="rect" href="../fixedForm/">定型文管理</a></li><span id="isNotEmpScout">
<li id="gnav03"><a shape="rect" href="../scoutManagement/indexbj">スカウト管理</a></li>
</span><li id="gnav02"><a shape="rect" href="../oboManagement/">応募管理</a></li><li id="gnav01"><a shape="rect" href="../top/">TOP</a></li></ul>
<!-- /#globalNav --></div>
<!-- /#header --></div>
</div>

<div id="login"><div id="loginInner">
<p id="loginName"><span id="isAuthed"><span id="companyName">株式会社Ｍａｍｏｌ（メアモール）</span>様　用管理画面</span></p>

<div class="loginNav">
<ul><!--
<span id="isInputSponsor">
<li><a href="dataImport/">データのインポート</a></li>
</span>
 --><li><a shape="rect" href="../account/">パスワードの変更</a></li><!-- <li><a href="../help/">ご利用について</a></li> --><li><a shape="rect" onclick="logout('../login/logout'); return false;" href="../login/logout">ログアウト</a></li></ul>
<!-- /.loginNav --></div>
<!-- /#login --></div></div>








        <div id="main">

            <div id="contents">

            <form id="oboMailForm" name="oboMailForm" method="post" enctype="application/x-www-form-urlencoded" action="/sponsor/oboManagement/oboMailConfirm">

                <div class="prt-headingA">

                    <h2 class="title">応募管理</h2>

                <!-- /.prt-headingA --></div>
                    <dl class="session-out-notice"><dt>■自動ログアウトについて</dt><dd>
                            セキュリティー対策として、登録・確認画面を開いた状態で一定時間(<span id="sessionTimeoutTime">60</span>分以上）経過し登録がされなかった場合<br clear="none" />
                            ログイン情報がリセットされ、入力・変更された情報が消えることが御座います。<br clear="none" />
                            ご登録にお時間がかかる場合は、事前に本文登録が可能な定型文機能にてこまめに保存していただく等して、ご活用ください。
                        </dd></dl>
                    <p class="prt-flowChart"><img src="/sponsor/images/oboManagement/oboMailInput_img_02.png" height="33" alt="1.応募者返信文作成 &gt; 2.送信内容の確認 &gt; 3.送信完了" width="609" /></p>

					<div class="section">
					<h4 class="prt-headingE"><span class="inner">応募者情報</span></h4>
					<div class="prt-tableA">
					<table><col width="168" span="1" /><col width="600" span="1" /><tr class="first"><th colspan="1" rowspan="1">氏名</th><td colspan="1" rowspan="1"><span id="name__c"></span></td></tr><tr><th colspan="1" rowspan="1">氏名ふりがな</th><td colspan="1" rowspan="1"><span id="kana__c"></span></td></tr></table>
					<input type="hidden" id="name__c-02" name="oboMailForm:name__c-02" value="" />
					<input type="hidden" id="kana__c-02" name="oboMailForm:kana__c-02" value="" />
					<!-- /.prt-tableA --></div>
					<!-- /.section --></div>

                    <div class="section">

                        <h3 class="prt-headingB"><img src="/sponsor/images/oboManagement/oboMailInput_tit_01.png" height="30" alt="メッセージ内容" width="840" /></h3>

                            <div class="prt-tableA">

                                <table class="js-selectInputPattern-area"><col width="168" span="1" /><col width="600" span="1" /><tr class="first"><th colspan="1" rowspan="1">メッセージタイトル</th><td colspan="1" rowspan="1"><span id="replyTitle__c">【株式会社〇〇〇〇】選考結果について</span></td></tr><tr><th colspan="1" rowspan="1">返信内容</th><td colspan="1" rowspan="1">

										<span id="replyDestinationName__c">鈴木 一郎　様</span><br clear="none" /><br clear="none" />

                                        拝啓　時下ますますご健勝のこととお慶び申し上げます。
<br/>この度は当社の○○（職種）への応募、誠にありがとうございます。
<br/>つきましては、貴殿の履歴書及び職務経歴書を拝見し是非、
<br/>直接お会いをして当社での職務内容などご説明をさせていただきたく存じます。
<br/>ご意向を本メールへご返信頂ければ幸いでございます。
<br/>ご連絡をお待ちしております。</td></tr><tr><th colspan="1" rowspan="1">署名</th><td colspan="1" rowspan="1"> 株式会社〇〇〇〇　人事部　採用担当</td></tr><tr><th colspan="1" rowspan="1">お問合せ先メールアドレス</th><td colspan="1" rowspan="1"><span id="replyEMail__c"> test@example.com</span></td></tr><tr><th colspan="1" rowspan="1">お問合せ先電話番号</th><td colspan="1" rowspan="1"><span id="replyTel__c">012-3456-7890</span></td></tr></table>

                            </div><!-- /.prt-tableA -->

                    </div><!-- /.section -->



<div class="section">

<!--

<h3 class="prt-headingB"><img src="../images/oboManagement/oboMailInput_tit_02.png" alt="送信先" width="840" height="30" /></h3>

-->



<div class="prt-tableC">

<!--

<table>

<col width="216" />

<col width="107" />

<col width="68" />

<col width="45" />

<col width="46" />

<col width="150" />

<col width="80" />

<tr>

<th class="titleA">応募職種</th>

<th class="titleA">氏名</th>

<th class="titleA">対応状況</th>

<th class="titleA">性別</th>

<th class="titleA">年齢</th>

<th class="titleA">住所</th>

<th class="titleA">応募日時</th>

</tr>

<tr>

<td>早朝機内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>

<td>山田太郎</td>

<td>済み</td>

<td>男</td>

<td>28歳</td>

<td>東京都千代田区神田</td>

<td>00/00/00<br />00:00</td>

</tr>

<tr>

<td>早朝機内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>

<td>山田太郎</td>

<td>済み</td>

<td>男</td>

<td>28歳</td>

<td>東京都千代田区神田</td>

<td>00/00/00<br />00:00</td>

</tr>

<tr>

<td>早朝機内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>

<td>山田太郎</td>

<td>済み</td>

<td>男</td>

<td>28歳</td>

<td>東京都千代田区神田</td>

<td>00/00/00<br />00:00</td>

</tr>

</table>

 -->

<!-- /.prt-tableC --></div>



<div class="prt-buttonUnitA">

<input type="hidden" id="oboId" name="oboMailForm:oboId" value="Obo000090047" />

<ul><li><a id="goOboMailInput" href="oboMailInput?oboId=Obo000090047" shape="rect"><img src="/sponsor/images/parts/buttonUnit_btn_03.png" class="js-hoverSwap" height="32" alt="修正する" width="190" /></a></li><li><a href="oboMailComplete"><img src="../images/parts/buttonUnit_btn_04.png" alt="送信する" width="190" height="32" class="js-hoverSwap" /></a></li></ul>

<!-- /.prt-buttonUnitA --></div>

<!-- /.section --></div>

<input type="hidden" name="oboMailForm/oboManagement/oboMailConfirm" value="oboMailForm" /></form>

<!-- /#contents --></div>

<!-- /#main --></div>








<div id="footer"><div id="footerInner">
<p id="pageTop"><a shape="rect" href="#document"><img src="/sponsor/images/base/pageTop.png" class="js-hoverBlink" height="21" alt="ページの先頭へ" width="130" /></a></p>
<p style="text-align:center" id="copyright">Copyright(c)Create Co.,Ltd.All rights reserved.</p>
<!-- 20150302 懸案対応 start -->
<p style="text-align:center" id="copyright">推奨ブラウザ：Mozilla Firefox（最新版）、Google Chrome（最新版）、Safari6.0以降、Internet Explorer9.x以降</p>
<!-- <p id="copyright" style="text-align:center">推奨ブラウザ：Firefox、Google chome、Safari、IE7〜（最新バージョンが望ましい）</p> -->
<!-- 20150302 懸案対応  end  -->
<!-- <div id="veriSign">
<p><img src="../images/base/Dummy_veriSign.png" alt="" width="100" height="72" /></p>
</div> -->
<!-- /#footer --></div>
</div>






<!-- /#document --></div>


<script language="JavaScript" type="text/javascript">
<!--
var forms = ['oboMailForm'];
for (var i = 0, len = forms.length; i < len; ++i) {
  var span = document.createElement('span');
  span.style.display = 'none';
  span.style.position = 'absolute';
  var form = document.getElementById(forms[i]);
  form.appendChild(span);
  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAABXQAD19pZDk6aXNFbXBTY291dHNyABFqYXZhLmxhbmcuQm9vbGVhbs0gcoDVnPruAgABWgAFdmFsdWV4cAB0ABJfaWQ5OmlzTm90RW1wU2NvdXRzcQB+AAQBdAATX2lkOTppc0lucHV0U3BvbnNvcnEAfgAFdAANX2lkOTppc0F1dGhlZHEAfgAHdAAmb2JvTWFpbEZvcm06aXNSZXBseURlc3RpbmF0aW9uTmFtZV9fZXhxAH4AB3gA' />";
}

//-->
</script></body></html>
