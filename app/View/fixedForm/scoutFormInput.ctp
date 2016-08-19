<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>定型文管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/fixedForm/index.html" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/fixedForm/index.html" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/formUI.js" charset="utf-8" baseViewId="/fixedForm/index.html" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/textresizedetector.js" baseViewId="/fixedForm/index.html" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" baseViewId="/fixedForm/index.html" xml:space="preserve">
$(function(){
    $('#all').click(function(){
    if(this.checked){
    $('.checkbox input').attr('checked','checked');
    }else{
    $('.checkbox input').removeAttr('checked');
    }
  });
});
</script></head>
<body class="fixedForm">
<div id="document">



<div id="header"><div id="headerInner">
<h1 id="siteTitle"><img src="/sponsor/images/base/logo_siteTitle.png?date160127" height="28" alt="クリエイト管理システム" width="129" /></h1>

<div id="globalNav">
<ul><li id="gnav07"><a shape="rect" href="../help/">ヘルプ</a></li><li id="gnav06"><a shape="rect" href="../accessLog/">レポート</a></li><li id="gnav05"><a shape="rect" href="../fixedForm/">定型文管理</a></li><span id="isNotEmpScout">
<li id="gnav03"><a shape="rect" href="../scoutManagement/indexbj.html">スカウト管理</a></li>
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
 --><li><a shape="rect" href="../account/">パスワードの変更</a></li><!-- <li><a href="../help/">ご利用について</a></li> --><li><a shape="rect" onclick="logout('../login/logout.html'); return false;" href="../login/logout.html">ログアウト</a></li></ul>
<!-- /.loginNav --></div>
<!-- /#login --></div></div>





<div id="main">
<div id="contents">
<div class="prt-headingA">
<h2 class="title">定型文管理</h2>
</div>

<div class="prt-articleUnitA typeC">
<div class="head">
<h3 class="title"><img src="/sponsor/images/parts/articleUnitA_typeC_tit_01.gif" height="28" alt="応募者返信メール" width="130" /></h3>
<p class="nav"><a shape="rect" href="scoutFormList.html"><img src="/sponsor/images/parts/articleUnitA_typeC_btn_02.png" class="js-hoverSwap" height="22" alt="スカウトメール" width="130" /></a></p>
</div>

<div class="body">
<div class="articleTable">
<table><col width="110" span="1" /><col width="668" span="1" /><tr><td colspan="2" rowspan="1">
<ul class="cmn-commentList"><li>返信した内容を保存しておくことで、次回から定型文を選択するだけで返信可能になります。</li><li>返信定型文は、貴社の<strong class="c-red">オリジナルの定型文が最大10件登録</strong>できます。</li></ul>
</td></tr></table>
</div>
</div>
</div>




<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" xmlns:te="http://www.seasar.org/teeda/extension" lang="ja"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"><meta http-equiv="content-style-type" content="text/css; charset=utf-8"><meta http-equiv="content-script-type" content="text/javascript"><title>応募管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseviewid="/fixedForm/oboFormInput.html"><link rel="stylesheet" href="/sponsor/css/notice.css?data=150907" media="all" type="text/css" baseviewid="/fixedForm/oboFormInput.html"><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js?data=150908" charset="utf-8" baseviewid="/fixedForm/oboFormInput.html" xml:space="preserve"></script><script src="http://www.d-dj.com/sponsor/javascript/jquery.js"></script>
<script src="http://www.d-dj.com/sponsor/javascript/jquery.effects.core.js"></script>
<script src="http://www.d-dj.com/sponsor/javascript/jquery.regex.js"></script>
<script src="http://www.d-dj.com/sponsor/javascript/flatHeights.paddingbugfix-ver.js"></script>
<script src="http://www.d-dj.com/sponsor/javascript/jquery.mk_hover.js"></script>
<script src="http://www.d-dj.com/sponsor/javascript/jquery.mk_smoothScroll.js"></script>
<script src="http://www.d-dj.com/sponsor/javascript/jquery.support.fixedPosition.js"></script>
<script src="http://www.d-dj.com/sponsor/javascript/main.js?data=150828"></script>
<script src="http://www.d-dj.com/sponsor/javascript/alert.js?data=150626"></script>
<script type="text/javascript" language="JavaScript" src="/sponsor/javascript/formUI.js" charset="utf-8" baseviewid="/fixedForm/oboFormInput.html" xml:space="preserve"></script></head>
<body style="" class="fixedForm">
<form id="InputOboForm" name="InputOboForm" method="post" enctype="application/x-www-form-urlencoded" action="/sponsor/fixedForm/scoutFormListConfirm.html">
<input id="templateId" name="InputOboForm:templateId" value="" type="hidden">


			<dl class="session-out-notice"><dt>自動ログアウトについて</dt><dd>
								セキュリティー対策として、登録・確認画面を開いた状態で一定時間(<span id="sessionTimeoutTime">60</span>分以上）経過し登録がされなかった場合<br clear="none">
								ログイン情報がリセットされ、入力・変更された情報が消えることが御座います。<br clear="none">
								ご登録にお時間がかかる場合は、定型文の編集中はこまめに保存していただくようお願いいたします。
							</dd></dl>
			<p class="prt-flowChart"><img src="/sponsor/images/parts/formInput_img_01.png" alt="1.定型文の作成・編集 > 2.定型文の確認 > 3.保存完了" height="33" width="609"></p>

				<div class="section">
					<h3 class="prt-headingB"><img src="/sponsor/images/parts/oboFormInput_tit_01.png" alt="応募者返信メール" height="30" width="840"></h3>
					<div class="js-selectInputPattern">
						
                        <div class="errorMessage02">
						
                        </div>
						<div class="prt-tableA">
							<table class="js-selectInputPattern-area"><colgroup><col span="1" width="168"><col span="1" width="600"></colgroup><tbody><tr class="first"><th colspan="1" rowspan="1">メッセージタイトル</th><td colspan="1" rowspan="1"><input id="replyTitle__c" name="InputOboForm:replyTitle__c" value="" class="textboxA" fu="50" style="ime-mode: active;" type="text">
									<p class="notes">上限：全角<span id="replyTitle__cCount" class="inputCount">0</span>/50文字</p><p id="replyTitle__cError" class="red"></p>
                                    <p class="green">例：【株式会社○○○○】選考結果について</p>
                                    </td></tr><tr><th colspan="1" rowspan="1">本文</th><td colspan="1" rowspan="1">
									<p class="info"><span class="info-ttl">宛名について</span>

										応募返信入力画面の宛名欄に宛名(氏名 ※内容変更可能)が自動挿入されます。<br clear="none">
										こちらに宛名を記入する必要はございません。

<!--  									初回応募返信時は、応募返信入力画面の宛名欄に宛名(例：○○ ○○　様)が自動挿入されます。 <br/>２回目以降の返信は、前回使用した宛名が自動挿入されます。こちらに宛名を記入する必要はございません。
-->									</p>

									<textarea id="replyMessage__c" name="InputOboForm:replyMessage__c" class="textareaA" fu="2000" rows="12" style="ime-mode: active;"></textarea>
									<p class="notes">上限：全角<span id="replyMessage__cCount" class="inputCount">0</span>/2000文字</p><p id="replyMessage__cError" class="red"></p>
									<p class="popuphint"><a shape="rect" onclick="javascript:window.open('../oboManagement/oboPopup.html','press','width=710,height=750,scrollbars=yes');return false" href="#.html">メッセージ記入例</a></p>
                                    </td></tr><tr><th colspan="1" rowspan="1">署名</th><td colspan="1" rowspan="1">
									<textarea id="replySignature__c" name="InputOboForm:replySignature__c" class="textareaA" fu="500" rows="3" style="ime-mode: active;"></textarea>
									<p class="notes">上限：全角<span id="replySignature__cCount" class="inputCount">0</span>/500文字</p><p id="replySignature__cError" class="red"></p>
                                    <p class="green">例：株式会社○○○○　人事部　採用担当</p>
                                    </td></tr><tr><th colspan="1" rowspan="1">お問合せ先メールアドレス</th><td colspan="1" rowspan="1"><input id="replyEMail__c" name="InputOboForm:replyEMail__c" value="" class="textboxA" fu="50" style="ime-mode: inactive;" type="text">
									<p class="notes">上限：半角<span id="replyEMail__cCount" class="inputCount">0</span>/50文字</p><p id="replyEMail__cError" class="red"></p>
                                    <p class="green">例：test@example.com</p></td></tr><tr><th colspan="1" rowspan="1">お問合せ先電話番号</th><td colspan="1" rowspan="1"><input id="replyTel__c" name="InputOboForm:replyTel__c" value="" class="textboxA" fu="50" style="ime-mode: inactive;" type="text">
									<p class="notes">上限：半角<span id="replyTel__cCount" class="inputCount">0</span>/50文字</p><p id="replyTel__cError" class="red"></p>
                                    <p class="green">例：012-3456-7890</p></td></tr></tbody></table>
						</div><!-- /.prt-tableA -->
					</div><!-- /.js-selectInputPattern -->
				</div><!-- /.section -->


				<div class="section">
					<h3 class="prt-headingB"><img src="/sponsor/images/parts/saveTitle_tit_01.png" alt="保存用タイトル" height="30" width="840"></h3>

					<p>定型文を管理する上でのタイトルを入力してください。<br clear="none">
					応募者には送信されませんので、社内で管理しやすい名前を付けてください。</p>

					<div class="prt-tableA">
						<table class="js-selectInputPattern-area"><colgroup><col span="1" width="168"><col span="1" width="600"></colgroup><tbody><tr class="first"><th colspan="1" rowspan="1">保存用タイトル<span class="cmn-icon"><img src="/sponsor/images/common/icon_necessary_01.gif" alt="必須" height="14" width="25"></span></th><td colspan="1" rowspan="1"><input id="templateTitle__c" name="InputOboForm:templateTitle__c" value="" class="textboxA" fu="50M" style="ime-mode: active;" type="text">
								<p class="notes">上限：全角<span id="templateTitle__cCount" class="inputCount">0</span>/50文字</p><p id="templateTitle__cError" class="red"></p></td></tr></tbody></table>
					</div><!-- /.prt-tableA -->
				</div><!-- /.section -->


				<div class="section">
					<div class="prt-buttonUnitA">
						<ul><li><a shape="rect" href="oboFormListinner.html"><img src="/sponsor/images/parts/buttonUnit_btn_01.png" class="js-hoverSwap" alt="一覧へ戻る" height="32" width="190"></a></li><li><input id="doConfirm" name="InputOboForm:doConfirm" src="/sponsor/images/parts/buttonUnit_btn_02.png" class="js-hoverSwap" alt="確認する" height="32" type="image" width="190"></li></ul>
					</div><!-- /.prt-buttonUnitA -->
				</div><!-- /.section -->


<input name="InputOboForm/fixedForm/oboFormInput.html" value="InputOboForm" type="hidden"><span style="display: none; position: absolute;"><input name="te-conditions" value="rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAAAXQAF0lucHV0T2JvRm9ybTppc1RlbXBsYXRlc3IAEWphdmEubGFuZy5Cb29sZWFuzSBygNWc+u4CAAFaAAV2YWx1ZXhwAHgA" type="hidden"></span></form>

<script language="JavaScript" type="text/javascript">
<!--
var forms = ['InputOboForm'];
for (var i = 0, len = forms.length; i < len; ++i) {
  var span = document.createElement('span');
  span.style.display = 'none';
  span.style.position = 'absolute';
  var form = document.getElementById(forms[i]);
  form.appendChild(span);
  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAAAXQAF0lucHV0T2JvRm9ybTppc1RlbXBsYXRlc3IAEWphdmEubGFuZy5Cb29sZWFuzSBygNWc+u4CAAFaAAV2YWx1ZXhwAHgA' />";
}

//-->
</script></body></html>
