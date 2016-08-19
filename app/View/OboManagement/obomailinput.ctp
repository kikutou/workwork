<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>応募管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/oboManagement/oboMailInput" /><link rel="stylesheet" href="/sponsor/css/notice.css?data=150907" media="all" type="text/css" baseViewId="/oboManagement/oboMailInput" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js?data=150828" charset="utf-8" baseViewId="/oboManagement/oboMailInput" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/formUI.js" charset="utf-8" baseViewId="/oboManagement/oboMailInput" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" baseViewId="/obo/input" xml:space="preserve">
<!--
$(document).ready(function() {
    $(".mail-receive-notice .notice-body").hide();
    $(".mail-receive-notice .notice-title").click(function(){
        $(this).next().toggle("normal");
    });
});
//-->
</script></head>
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
<div class="prt-headingA">
<h2 class="title">応募管理</h2>
<!-- /.prt-headingA --></div>
<dl class="session-out-notice"><dt>■自動ログアウトについて</dt><dd>
		セキュリティー対策として、登録・確認画面を開いた状態で一定時間(<span id="sessionTimeoutTime">60</span>分以上）経過し登録がされなかった場合<br clear="none" />
		ログイン情報がリセットされ、入力・変更された情報が消えることが御座います。<br clear="none" />
		ご登録にお時間がかかる場合は、事前に本文登録が可能な定型文機能にてこまめに保存していただく等して、ご活用ください。
	</dd></dl>
<p class="prt-flowChart"><img src="/sponsor/images/oboManagement/oboMailInput_img_01.png" height="33" alt="1.応募者返信文作成 &gt; 2.送信内容の確認 &gt; 3.送信完了" width="609" /></p>

<form id="oboMailInputForm" name="oboMailInputForm" method="post" enctype="application/x-www-form-urlencoded" action="/sponsor/oboManagement/oboMailInput">
<div class="section">
<h4 class="prt-headingE"><span class="inner">応募者情報</span></h4>
<div class="prt-tableA">
<table><col width="168" span="1" /><col width="600" span="1" /><tr class="first"><th colspan="1" rowspan="1">氏名</th><td colspan="1" rowspan="1"><span id="name__c">秋本弘行</span></td></tr><tr><th colspan="1" rowspan="1">氏名ふりがな</th><td colspan="1" rowspan="1"><span id="kana__c">あきもとひろゆき</span></td></tr></table>
<input type="hidden" id="name__c-02" name="oboMailInputForm:name__c-02" value="秋本弘行" />
<input type="hidden" id="kana__c-02" name="oboMailInputForm:kana__c-02" value="あきもとひろゆき" />
<!-- /.prt-tableA --></div>
<!-- /.section --></div>

<div class="section">
<h3 class="prt-headingB"><img src="/sponsor/images/oboManagement/oboMailInput_tit_01.png" height="30" alt="メッセージ内容" width="840" /></h3>

<div class="js-selectInputPattern">

<div class="mail-receive-notice">
<div class="notice-title"><img src="/sponsor/images/common/icon_news.png" alt="ご注意" />【ご注意】機種依存文字に関して</div>
<div class="notice-body">
 機種依存文字とは、ご利用の環境によって正しく表示できたりできなかったりする文字のことです。<br clear="none" />
 機種依存文字を使うと、入力いただいた内容が文字化けしてしまうため、求職者様の環境によっては正常に表示されない場合があります。<br clear="none" />
 <strong>機種依存文字（一例）</strong><br clear="none" />
 <img src="/sponsor/images/common/img_depend_letter.gif" alt="囲み文字、ローマ数字" />
</div>
</div>
<div class="errorMessage02"><p>

</p></div>
<div class="prt-tableA">
<table class="js-selectInputPattern-area"><col width="168" span="1" /><col width="600" span="1" /><tr class="first"><th colspan="1" rowspan="1">メッセージタイトル<span class="cmn-icon"><img src="/sponsor/images/common/icon_necessary_01.gif" height="14" alt="必須" width="25" /></span></th><td colspan="1" rowspan="1"><input type="text" id="replyTitle__c" name="oboMailInputForm:replyTitle__c" value="" class="textboxA" fu="50M" />
<p class="notes">上限：全角<span style="ime-mode: active;" id="replyTitle__cCount" class="inputCount"></span>/50文字</p>
<p id="replyTitle__cError" class="red"></p>
<p class="green">例： 【株式会社〇〇〇〇】選考結果について</p>

</td></tr><tr><th colspan="1" rowspan="1">返信内容<span class="cmn-icon"><img src="/sponsor/images/common/icon_necessary_01.gif" height="14" alt="必須" width="25" /></span>
<br clear="none" /><br clear="none" /><p style="font-weight: normal">※『宛名』は任意です。</p></th><td colspan="1" rowspan="1">




<p>宛名</p>
<input type="text" id="replyDestinationName__c" name="oboMailInputForm:replyDestinationName__c" value="秋本弘行　様" class="textboxA notInputPattern" fu="50" style="ime-mode: active;" />
<p class="notes">上限：<span id="replyDestinationName__cCount" class="inputCount"></span>/50文字</p>
<p id="replyDestinationName__cError" class="red"></p>
<p class="green">例： 鈴木 一郎　様</p>

<p class="info"><span class="info-ttl">宛名について</span>
上記宛名が自動挿入されますので、本文に宛名を記入する必要はございません。<br clear="none" />
宛名欄は直接編集が可能ですので、必要に応じて変更してください。<br clear="none" />
２回目以降の返信は、前回使用した宛名が自動挿入されます。</p>

<p>本文</p>
<textarea id="replyMessage__c" name="oboMailInputForm:replyMessage__c" class="textareaA" fu="2000M" rows="12" style="ime-mode: active;"></textarea>
<p class="notes">上限：全角<span id="replyMessage__cCount" class="inputCount"></span>/2000文字</p>
<p id="replyMessage__cError" class="red"></p>
<p class="popuphint"><a shape="rect" onclick="javascript:window.open('obopopup','press','width=710,height=750,scrollbars=yes');return false" href="#">メッセージ記入例</a></p>
</td></tr><tr><th colspan="1" rowspan="1">署名<span class="cmn-icon"><img src="/sponsor/images/common/icon_necessary_01.gif" height="14" alt="必須" width="25" /></span></th><td colspan="1" rowspan="1">
<textarea id="replySignature__c" name="oboMailInputForm:replySignature__c" class="textareaA" fu="500M" rows="3" style="ime-mode: active;"></textarea>
<p class="notes">上限：全角<span id="replySignature__cCount" class="inputCount"></span>/500文字</p>
<p id="replySignature__cError" class="red"></p>
<p class="green">例： 株式会社〇〇〇〇　人事部　採用担当</p>
</td></tr><tr><th colspan="1" rowspan="2">お問合せ先<span class="cmn-icon"><img src="/sponsor/images/common/icon_necessary_01.gif" height="14" alt="必須" width="25" /></span>
<br clear="none" /><br clear="none" /><p style="font-weight: normal">※『メールアドレス』又は『電話番号』のどちらかをご入力下さい。</p></th><td colspan="1" rowspan="1"><p>メールアドレス</p>
<input type="text" id="replyEMail__c" name="oboMailInputForm:replyEMail__c" value="" class="textboxA" fu="80" style="ime-mode: inactive;" />
<p class="notes">上限：全角<span id="replyEMail__cCount" class="inputCount"></span>/80文字</p>
<p id="replyEMail__cError" class="red"></p>
<p class="green">例： test@example.com</p>
</td></tr><tr><td colspan="1" rowspan="1"><p>電話番号</p>
<input type="text" id="replyTel__c" name="oboMailInputForm:replyTel__c" value="" class="textboxA" fu="40" style="ime-mode: inactive;" />
<p class="notes">上限：半角<span id="replyTel__cCount" class="inputCount"></span>/40文字</p>
<p id="replyTel__cError" class="red"></p>
<p class="green">例： 012-3456-7890</p>

</td></tr></table>
<!-- /.prt-tableA --></div>
<!-- /.js-selectInputPattern --></div>
<!-- /.section --></div>

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

<input type="hidden" id="oboId" name="oboMailInputForm:oboId" value="Obo000090047" />
<div class="prt-buttonUnitA">
<ul><li><a shape="rect" href="./"><img src="/sponsor/images/parts/buttonUnit_btn_01.png" class="js-hoverSwap" height="32" alt="一覧へ戻る" width="190" /></a></li> <li><a href="oboMailConfirm"><img src="../images/parts/buttonUnit_btn_02.png" alt="確認する" width="190" height="32" class="js-hoverSwap" /></a></li></url>
<!-- /.prt-buttonUnitA --></div>
<!-- /.section --></div>
<input type="hidden" name="oboMailInputForm/oboManagement/oboMailInput" value="oboMailInputForm" /></form>
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
var forms = ['oboMailInputForm'];
for (var i = 0, len = forms.length; i < len; ++i) {
  var span = document.createElement('span');
  span.style.display = 'none';
  span.style.position = 'absolute';
  var form = document.getElementById(forms[i]);
  form.appendChild(span);
  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAABXQAEF9pZDEyOmlzRW1wU2NvdXRzcgARamF2YS5sYW5nLkJvb2xlYW7NIHKA1Zz67gIAAVoABXZhbHVleHAAdAATX2lkMTI6aXNOb3RFbXBTY291dHNxAH4ABAF0ABRfaWQxMjppc0lucHV0U3BvbnNvcnEAfgAFdAAOX2lkMTI6aXNBdXRoZWRxAH4AB3QAG29ib01haWxJbnB1dEZvcm06aXNUZW1wbGF0ZXEAfgAFeAA=' />";
}

//-->
</script></body></html>
