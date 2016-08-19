<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>応募管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/oboManagement/oboDetail" /><link rel="stylesheet" href="/sponsor/css/jquery-ui.1.11.4.dialog.min.css" media="all" type="text/css" baseViewId="/oboManagement/oboDetail" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/oboManagement/oboDetail" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/formUI.js" charset="utf-8" baseViewId="/oboManagement/oboDetail" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/ajax.js" charset="utf-8" baseViewId="/oboManagement/oboDetail" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/jquery-ui.min.js" charset="utf-8" baseViewId="/oboManagement/oboDetail" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" baseViewId="/oboManagement/oboDetail" xml:space="preserve">
/* 【応募返信促進対応】対応状況自動変更 確認ダイアログ Ajax・表示設定 */
$(function(){
	var dialogChangeToTel = $("#dialogChangeToTel");
	var dialogChangeToMail = $("#dialogChangeToMail");

	//対応状況を変更Ajax
	function setSupportStatus(oboId, SupportStatus) {
		Kumu.Ajax.executeTeedaAjax(oboManagement_oboDetailPage_ajaxSetSupportStatus, [ oboId, SupportStatus ], Kumu.Ajax.RESPONSE_TYPE_TEXT);
	}
	//対応状況変更からのAjaxコールバック
	function oboManagement_oboDetailPage_ajaxSetSupportStatus(res) {
		$("#inputSupportStatus__cItems").val(res);
	}
	//ボタンがクリックされた場合にダイアログを開く
	$(".changeSupportStatus").click(function(e){
		if($(this).hasClass("toggleTel")){
			dialogChangeToTel.dialog("open");
		}else if($(this).hasClass("toggleMail")){
			dialogChangeToMail.dialog("open");
		}
	});

	//応募者の電話番号情報ダイアログの各種設定
	dialogChangeToTel.dialog({
			width : 500,
			dialogClass:"supportStatus-dialog",
			title:'応募者の電話番号情報＜対応状況可否のご確認＞',
			resizable : false,
			autoOpen : false,
			modal : true,
			buttons : {
				"電話済" : function() {
					oboId = $("#oboId").val();
					setSupportStatus(oboId, "電話済");
					$('#tel__c-2').parent("td").removeClass("invisible");
					$('#mobileTel__c-2').parent("td").removeClass("invisible");
					$('.toggleTel').parent("td").addClass("invisible");
					$(this).dialog("close");
				},
				"電話不在" : function() {
					oboId = $("#oboId").val();
					setSupportStatus(oboId, "電話不在");
					$(this).dialog("close");
				},
				"いいえ" : function() {
					$(this).dialog("close");
				}
			},
			open : function(event, ui) {
				$('.ui-dialog-titlebar', ui.panel).show();
				$('.ui-dialog-titlebar-close').show();
			}
		});

	//応募者のメールアドレス情報ダイアログの各種設定
	dialogChangeToMail.dialog({
		width : 500,
		dialogClass:"supportStatus-dialog",
		title:'応募者のメールアドレス情報＜対応状況可否のご確認＞',
		resizable : false,
		autoOpen : false,
		modal : true,
		buttons : {
			"はい" : function() {
				oboId = $("#oboId").val();
				setSupportStatus(oboId, "メール済");
				$('#eMail__c-2').parent("td").removeClass("invisible");
				$('#eMail2__c-2').parent("td").removeClass("invisible");
				$('.toggleMail').parent("td").addClass("invisible");
				$(this).dialog("close");
			},
			"いいえ" : function() {
				$(this).dialog("close");
			}
		},
		open : function(event, ui) {
			$('.ui-dialog-titlebar', ui.panel).show();
			$('.ui-dialog-titlebar-close').show();
		}
	});

	//ダイアログ内 電話番号2,追加メールアドレス存在時見出し
	if($('#mobileTel__c-3').text() != ""){
		$('#mobileTel__c-3').before('<span>電話番号2：</span>');
	}
	if($('#eMail2__c-3').text() != ""){
		$('#eMail2__c-3').before('<span>追加メールアドレス：</span>');
	}

});
</script><style xml:space="preserve">
.invisible{
display:none;
}
</style></head>
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
<form id="oboForm" name="oboForm" method="post" enctype="application/x-www-form-urlencoded" action="/sponsor/oboManagement/oboDetail">
<div class="prt-navUnitA js-followScroll">
<ul><li><a shape="rect" href="#memo"><img src="/sponsor/images/parts/navA_btn_01.png" height="31" alt="対応状況を変更・メモする" width="206" /></a></li><!-- <li><input id="doRegist" type="image" src="../images/parts/navA_btn_01.png" alt="対応状況を変更・メモする" width="206" height="31" onmouseover="this.src='../images/parts/navA_btn_01_on.png';" /></li> --><li><a shape="rect" href="./"><img src="/sponsor/images/parts/navA_btn_02.png" height="31" alt="一覧へ戻る" width="112" /></a></li><span id="isNotOboStatusDelete-1">
<li><a id="goOboMailInput" href="obomailinput?oboId=Obo000090047" shape="rect"><img src="/sponsor/images/parts/navA_btn_03.png" height="31" alt="返事をする" width="115" /></a></li>
</span></ul>

<!-- /.prt-navUnitA --></div>

<div class="prt-headingA">
<h2 class="title">応募管理</h2>
<!-- /.prt-headingA --></div>

<div class="section">
<h3 class="prt-headingB"><img src="/sponsor/images/oboManagement/oboDetail_tit_01.png" height="30" alt="掲載原稿" width="840" /></h3>

<div class="prt-tableA">
<table><col width="168" span="1" /><col width="600" span="1" /><tr class="first"><th colspan="1" rowspan="1">掲載期間</th><td colspan="1" rowspan="1"><span id="startDate__c">2016/04/02</span> ～ <span id="endDate__c">2016/04/29</span></td></tr><tr><th colspan="1" rowspan="1">求人情報掲載企業名</th><td colspan="1" rowspan="1"><span id="companyName__c">株式会社Ｍａｍｏｌ（メアモール）</span></td></tr><tr><th colspan="1" rowspan="1">募集職種</th><td colspan="1" rowspan="1"><span id="jobTitle__c">SE・プログラマー</span></td></tr><tr><th colspan="1" rowspan="1">募集勤務地</th><td colspan="1" rowspan="1"><span id="locationTitle__c">都内各所</span></td></tr></table>
<!-- /.prt-tableA --></div>
<!-- /.section --></div>

<div class="section">
<h3 class="prt-headingB"><img src="/sponsor/images/oboManagement/oboDetail_tit_02.png" height="30" alt="応募情報" width="840" /></h3>



<div class="errorMessage02"><p>

</p></div>

<div class="section">
<h4 class="prt-headingE"><span class="inner">基本情報</span></h4>
<div class="prt-tableA">
<table><col width="168" span="1" /><col width="600" span="1" /><tr class="first"><th colspan="1" rowspan="1">氏名</th><td colspan="1" rowspan="1"><span id="name__c">秋本弘行</span></td></tr><tr><th colspan="1" rowspan="1">氏名ふりがな</th><td colspan="1" rowspan="1"><span id="kana__c">あきもとひろゆき</span></td></tr><tr><th colspan="1" rowspan="1">生年月日(年齢)</th><td colspan="1" rowspan="1"><span id="age">1990年10月03日（25歳）</span></td></tr><tr><th colspan="1" rowspan="1">性別</th><td colspan="1" rowspan="1"><span id="gender__c">男性</span></td></tr><tr><th colspan="1" rowspan="1">住所</th><td colspan="1" rowspan="1"><table class="address-tbl-inner"><col width="135" span="1" /><col width="450" span="1" /><tr><th colspan="1" rowspan="1">郵便番号</th><td colspan="1" rowspan="1"><span id="zip__c">334-0001</span></td></tr><tr><th colspan="1" rowspan="1">都道府県</th><td colspan="1" rowspan="1"><span id="province__c">埼玉県</span></td></tr><tr><th colspan="1" rowspan="1">市区町村 町域</th><td colspan="1" rowspan="1"><span id="city__c"></span></td></tr><tr><th colspan="1" rowspan="1">以下の住所</th><td colspan="1" rowspan="1"><span id="followingAddrees__c"></span></td></tr></table></td></tr><tr><th colspan="1" rowspan="1">連絡先電話番号</th><td colspan="1" rowspan="1"><table class="tel-tbl-inner"><col width="135" span="1" /><col width="450" span="1" /><!-- 【応募返信促進対応】対応状況自動変更 対応状況 = "未対応以外"の場合 --><!-- 【応募返信促進対応】対応状況自動変更 対応状況 = "未対応"の場合 -->
	<tr><th colspan="1" rowspan="1">電話番号1</th><td colspan="1" rowspan="1" class="invisible"><span id="tel__c-2">080-1231-6960</span></td><td colspan="1" rowspan="2"><button type="button" class="changeSupportStatus toggleTel"><img src="/sponsor/images/common/icon-view.png" />電話番号を表示する</button></td></tr>
	<tr><th colspan="1" rowspan="1">電話番号2</th><td colspan="1" rowspan="1" class="invisible"><span id="mobileTel__c-2"></span></td></tr>
	</table></td></tr><tr><th colspan="1" rowspan="1">連絡可能な時間帯</th><td colspan="1" rowspan="1"><table><tr><td colspan="1" rowspan="1"><span id="wishTime__c">12:00〜13:00:午後</span></td></tr><tr><td colspan="1" rowspan="1"><span id="wishTimeDescription__br">電話に出られない場面が多いため、メールでの連絡を希望します。</span></td></tr></table></td></tr><!-- 【応募返信促進対応】対応状況自動変更 対応状況 = "未対応以外"の場合 --><!-- 【応募返信促進対応】対応状況自動変更 対応状況 = "未対応"の場合 -->
<tr><th colspan="1" rowspan="1">メールアドレス</th><td colspan="1" rowspan="1" class="invisible"><span id="eMail__c-2">y-aki@cablenet.ne.jp</span></td><td colspan="1" rowspan="2" class="mail-tbl">
		<button type="button" class="changeSupportStatus toggleMail"><img src="/sponsor/images/common/icon-view.png" />メールアドレスを表示する</button>
	</td></tr>
<tr><th colspan="1" rowspan="1">追加メールアドレス</th><td colspan="1" rowspan="1" class="invisible"><span id="eMail2__c-2"></span></td></tr>
<tr><th colspan="1" rowspan="1">学歴</th><td colspan="1" rowspan="1"><table class="school-tbl-inner"><col width="135" span="1" /><col width="450" span="1" /><tr><th colspan="1" rowspan="1">最終学歴</th><td colspan="1" rowspan="1"><span id="school__c"></span></td></tr><tr><th colspan="1" rowspan="1">学校名</th><td colspan="1" rowspan="1"><span id="schoolName__c"></span></td></tr><tr><th colspan="1" rowspan="1">学部・学科名</th><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><tr><th colspan="1" rowspan="1">現在の勤務状況</th><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr><tr><th colspan="1" rowspan="1">応募サイト</th><td colspan="1" rowspan="1"><span id="obositeName">バイトジャングル　パソコン版</span></td></tr></table>
<!-- /.prt-tableA --></div>
<!-- /.section --></div>

<div class="section">
<h4 class="prt-headingE"><span class="inner">資格・スキル</span></h4>
<div class="prt-tableA">
<table><col width="168" span="1" /><col width="600" span="1" /><tr class="first"><th colspan="1" rowspan="2">資格</th><td colspan="1" rowspan="1"><table class="licence-tbl-inner"><col width="135" span="1" /><col width="450" span="1" /><tr><th colspan="1" rowspan="1">普通自動車免許</th><td colspan="1" rowspan="1"><span id="isDriverLicense__c">有り</span></td></tr></table></td></tr><tr><td colspan="1" rowspan="1"><table class="licence-tbl-inner"><col width="135" span="1" /><col width="450" span="1" /><tr><th colspan="1" rowspan="1">その他の所有資格</th><td colspan="1" rowspan="1"><span id="licence__c"></span><span id="licenceOther__br"></span></td></tr></table></td></tr><tr><th colspan="1" rowspan="1">スキル</th><td colspan="1" rowspan="1"><span id="skillPr__br">現在LinuxとJavaの勉強を始めたばかりですが<br/>よろしくお願いします。</span></td></tr></table>
<!-- /.prt-tableA --></div>
<!-- /.section --></div>

<div class="section">
<h4 class="prt-headingE"><span class="inner">希望条件</span></h4>
<div class="prt-tableA">
<table><col width="168" span="1" /><col width="600" span="1" /><tr class="first"><th colspan="1" rowspan="1">希望勤務地</th><td colspan="1" rowspan="1"><span id="wishLocation__c"></span></td></tr><tr><th colspan="1" rowspan="1">希望勤務開始日</th><td colspan="1" rowspan="1"><span id="wishWorkStartDate__c"></span></td></tr><!-- <tr>
<th>希望職種</th>
<td>テキストテキスト／テキストテキスト／テキストテキスト／テキストテキスト／テキストテキスト</td>
</tr>
<tr>
<th>希望業種</th>
<td>テキストテキスト／テキストテキスト／テキストテキスト／テキストテキスト／テキストテキスト</td>
</tr> --></table>
<!-- /.prt-tableA --></div>
<!-- /.section --></div>

<div class="section">
<h4 class="prt-headingE"><span class="inner">自己PR</span></h4>
<div class="prt-tableA">
<table><col width="168" span="1" /><col width="600" span="1" /><tr class="first"><th colspan="1" rowspan="1">自己PR</th><td colspan="1" rowspan="1"><span id="selfPr__br"></span></td></tr><tr><th colspan="1" rowspan="1">企業へのメッセージ</th><td colspan="1" rowspan="1"><span id="message__br"></span></td></tr></table>
<!-- /.prt-tableA --></div>
<!-- /.section --></div>

<!-- /.section --></div>



<div id="memo" class="section">
<h3 class="prt-headingB"><img src="/sponsor/images/oboManagement/oboDetail_tit_04.png" height="30" alt="応募返信履歴" width="840" /></h3>

<div class="prt-tableA">
<table><col width="168" span="1" /><col width="600" span="1" /><tr class="first"><p class="notes">※企業管理画面でご掲載企業様が応募返信された履歴を表示します。（最新10件まで）<br clear="none" />
※メールでのやりとりは含みません。<br clear="none" />
※応募返信の本文は画面上部または最下部の「返事をする」からご確認いただけます。但し、最後に送信された1件のみとなります。</p><th colspan="1" rowspan="1">返信日時／返信タイトル</th><td colspan="1" rowspan="1">
	<span id="replyHistory__br"></span>
</td></tr></table>
<p style="text-align: right;">※履歴は2013年6月以降の応募返信が表示されます。</p>
<!-- /.prt-tableA --></div>
<!-- /.section --></div>

<div id="memo" class="section">
<h3 class="prt-headingB"><img src="/sponsor/images/oboManagement/oboDetail_tit_03.png" height="30" alt="企業様入力欄" width="840" /></h3>

<div class="prt-tableA">
<table><col width="168" span="1" /><col width="600" span="1" /><tr class="first"><th colspan="1" rowspan="1">対応状況</th><td colspan="1" rowspan="1"><select id="inputSupportStatus__cItems" name="oboForm:inputSupportStatus__cItems" size="1"><option value="未対応" selected="selected">未対応</option><option value="メール済">メール済</option><option value="電話済">電話済</option><option value="電話不在">電話不在</option><option value="予約済">予約済</option><option value="登録済">登録済</option><option value="紹介中">紹介中</option><option value="採用">採用</option><option value="不採用">不採用</option></select></td></tr><tr><th colspan="1" rowspan="1">メモ欄</th><td colspan="1" rowspan="1">
	<textarea id="inputMemo__c" name="oboForm:inputMemo__c" class="textareaA" fu="1000" rows="6" style="ime-mode: active;"></textarea>
	<p class="notes">上限：全角<span id="inputMemo__cCount" class="inputCount"></span>/1000文字</p>
	<p id="inputMemo__cError" class="red"></p>
</td></tr></table>
<input type="hidden" id="oboId" name="oboForm:oboId" value="Obo000090047" />
<!-- /.prt-tableA --></div>

<div class="prt-buttonUnitA">
<ul><li><input type="image" id="doRegist" name="oboForm:doRegist" src="/sponsor/images/oboManagement/oboDetail_btn_01.png" class="js-hoverSwap" height="32" alt="変更を保存する" width="230" /></li><li><a shape="rect" href="./"><img src="/sponsor/images/parts/buttonUnit_btn_01.png" class="js-hoverSwap" height="32" alt="一覧へ戻る" width="190" /></a></li><span id="isNotOboStatusDelete-2">
<li><a id="goOboMailInput-2" href="obomailinput?oboId=Obo000090047" shape="rect"><img src="/sponsor/images/oboManagement/oboDetail_btn_03.png" class="js-hoverSwap" height="32" alt="返事をする" width="230" /></a></li>
</span></ul>
<!-- /.prt-buttonUnitA --></div>
<!-- /.section --></div>
<input type="hidden" name="oboForm/oboManagement/oboDetail" value="oboForm" /></form>
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

<!-- 【応募返信促進対応】対応状況自動変更 確認ダイアログ(電話) -->
<div id="dialogChangeToTel" class="dialog-tel-box">
		<p class="dialog-tel"><span>電話番号1：</span><span id="tel__c-3">080-1231-6960</span><br clear="none" />
		<span id="mobileTel__c-3"></span>
		</p>
		<p class="dialog-txt">
		<span>あわせて対応状況を<b> “電話済” </b>もしくは<b> “電話不在” </b>に変更いたしますか？</span><br clear="none" />
		*対応状況を<b> “電話済” </b>もしくは<b> “電話不在” </b>に変えていただくことで未対応応募確認通知（メール）が届かなくなります。<br clear="none" />
		*対応状況は後ほど手動で変更が可能です（採用など）。
		</p>
</div>
<!-- 【応募返信促進対応】対応状況自動変更 確認ダイアログ(メール) -->
<div id="dialogChangeToMail" class="dialog-mail-box">
		<p class="dialog-mail"><span>メールアドレス：</span><span id="eMail__c-3">y-aki@cablenet.ne.jp</span><br clear="none" />
		<span id="eMail2__c-3"></span>
		</p>
		<p class="dialog-txt">
		<span>あわせて対応状況を<b> “メール済” </b>にいたしますか？</span><br clear="none" />
		*対応状況を変えていただくことで未対応応募確認通知（メール）が届かなくなります。<br clear="none" />
		*対応状況は後ほど手動で変更が可能です（採用など）。
		</p>
</div>




<script language="JavaScript" type="text/javascript">
<!--
var forms = ['oboForm'];
for (var i = 0, len = forms.length; i < len; ++i) {
  var span = document.createElement('span');
  span.style.display = 'none';
  span.style.position = 'absolute';
  var form = document.getElementById(forms[i]);
  form.appendChild(span);
  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAAEXQAEF9pZDE2OmlzRW1wU2NvdXRzcgARamF2YS5sYW5nLkJvb2xlYW7NIHKA1Zz67gIAAVoABXZhbHVleHAAdAATX2lkMTY6aXNOb3RFbXBTY291dHNxAH4ABAF0ABRfaWQxNjppc0lucHV0U3BvbnNvcnEAfgAFdAAOX2lkMTY6aXNBdXRoZWRxAH4AB3QAHm9ib0Zvcm06aXNOb3RPYm9TdGF0dXNEZWxldGUtMXEAfgAHdAAbb2JvRm9ybTppc09ib1N0YXR1c0RlbGV0ZS0ycQB+AAV0ABtvYm9Gb3JtOmlzT2JvU3RhdHVzRGVsZXRlLTFxAH4ABXQAHW9ib0Zvcm06aXNTdXBwb3J0U3RhdHVzX19leC0xcQB+AAV0ACBvYm9Gb3JtOmlzTm90U3VwcG9ydFN0YXR1c19fZXgtMnEAfgAHdAAdb2JvRm9ybTppc1N1cHBvcnRTdGF0dXNfX2V4LTNxAH4ABXQAIG9ib0Zvcm06aXNOb3RTdXBwb3J0U3RhdHVzX19leC00cQB+AAd0ABxvYm9Gb3JtOmlzQ3VzdG9tUXVlc3Rpb25fX2V4cQB+AAV0ABpvYm9Gb3JtOmlzRHJpdmVyTGljZW5zZV9fY3EAfgAHdAAdb2JvRm9ybTppc05vdERyaXZlckxpY2Vuc2VfX2NxAH4ABXQAFW9ib0Zvcm06aXNKb2JUZXJtaW5hbHEAfgAFdAAYb2JvRm9ybTppc0pvYlRlcm1pbmFsLTAycQB+AAV0AB5vYm9Gb3JtOmlzTm90T2JvU3RhdHVzRGVsZXRlLTJxAH4AB3gA' />";
}

//-->
</script></body></html>
