<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>パスワードの変更｜【企業用管理画面】クリエイトネットで仕事発見</title><meta name="format-detection" content="telephone=no,address=no,email=no" /><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/account/index.html" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/account/index.html" xml:space="preserve"></script><script language="JavaScript" type="text/javascript" src="/sponsor/teedaExtension/org/seasar/teeda/ajax/js/kumu.js"></script>
<script language="JavaScript" type="text/javascript" src="/sponsor/teedaExtension/org/seasar/teeda/ajax/js/event.js"></script>
<script language="JavaScript" type="text/javascript" src="/sponsor/teedaExtension/org/seasar/teeda/ajax/js/disabled.js"></script>

<script language="JavaScript" type="text/javascript">
<!--
DisabledConf = {
 includeButton : ['doOnceRegist'],
 time : 50000,
 submitMessage : function() { alert('遷移中です'); }
}

//-->
</script>
</head>
<body>
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

<form id="passChangeForm" name="passChangeForm" method="post" enctype="application/x-www-form-urlencoded" action="/sponsor/account/passChangeComplete.html">

<div class="prt-headingA">
	<h2 class="title">パスワードの変更</h2>
<!-- /.prt-headingA --></div>

<div class="prt-formTable">
<table><col width="189" span="1" /><col width="569" span="1" /><p class="notes">現在のパスワードと、新パスワード（変更したいパスワード）をそれぞれ入力してください。<br clear="none" />※新パスワードは誤入力を防ぐため、必ず2回入力してください。</p><tr><th colspan="1" rowspan="1">現在のパスワード<span class="necessary"><img src="/sponsor/images/common/icon_necessary_01.gif" height="14" alt="必須" width="25" /></span></th><td colspan="1" rowspan="1" class="first">
<input type="password" id="password__c" name="passChangeForm:password__c" value="" class="textbox02" name="pass" />
<p class="errorMessage"></p>
</td></tr><tr><th colspan="1" rowspan="1">新パスワード<span class="necessary"><img src="/sponsor/images/common/icon_necessary_01.gif" height="14" alt="必須" width="25" /></span></th><td colspan="1" rowspan="1" class="first">
<input type="password" id="newPassword__c" name="passChangeForm:newPassword__c" value="" class="textbox02" name="pass_ch" />
<p class="errorMessage"></p>
</td></tr><tr><th colspan="1" rowspan="1">新パスワード(確認用)<span class="necessary"><img src="/sponsor/images/common/icon_necessary_01.gif" height="14" alt="必須" width="25" /></span></th><td colspan="1" rowspan="1" class="first">
<input type="password" id="newPassword__cRe" name="passChangeForm:newPassword__cRe" value="" class="textbox02" name="pass_ch" />
<p class="errorMessage"></p>
</td></tr></table>
<!-- /.prt-formTable --></div>


<div class="prt-buttonUnitA">
<ul><li><a shape="rect" href="../top/"><img src="/sponsor/images/common/btn_historyBack_01.png" class="js-hoverSwap" height="32" alt="キャンセルする" width="190" /></a></li><li><input type="image" id="doOnceRegist" name="passChangeForm:doOnceRegist" src="/sponsor/images/common/btn_change_01.png" class="js-hoverSwap" height="32" alt="変更する" width="190" /><input type="hidden" name="org.seasar.teeda.extension.util.TransactionTokenUtil.TOKEN" value="f18a7107403404f94bdb2efab5e35d29" /></li></ul>
</div><!-- /.prt-buttonUnitA -->
<input type="hidden" name="passChangeForm/account/index.html" value="passChangeForm" /></form>

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
var forms = ['passChangeForm'];
for (var i = 0, len = forms.length; i < len; ++i) {
  var span = document.createElement('span');
  span.style.display = 'none';
  span.style.position = 'absolute';
  var form = document.getElementById(forms[i]);
  form.appendChild(span);
  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAABHQAD19pZDk6aXNFbXBTY291dHNyABFqYXZhLmxhbmcuQm9vbGVhbs0gcoDVnPruAgABWgAFdmFsdWV4cAB0ABJfaWQ5OmlzTm90RW1wU2NvdXRzcQB+AAQBdAATX2lkOTppc0lucHV0U3BvbnNvcnEAfgAFdAANX2lkOTppc0F1dGhlZHEAfgAHeAA=' />";
}

//-->
</script></body></html>
