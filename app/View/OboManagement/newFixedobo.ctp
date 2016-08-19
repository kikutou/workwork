<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>応募管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/oboManagement/fixedobo" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/oboManagement/fixedobo" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/formUI.js" charset="utf-8" baseViewId="/oboManagement/fixedobo" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/textresizedetector.js" baseViewId="/oboManagement/fixedobo" xml:space="preserve"></script></head>
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
<!--<p class="download"><a onclick="down(); return false;" href="#">応募者リストをダウンロード</a></p>-->
<!-- /.prt-headingA --></div>

<form id="fixedoboForm" name="fixedoboForm" method="post" enctype="application/x-www-form-urlencoded" action="/sponsor/oboManagement/fixedobo">
<div class="prt-articleUnitA typeD">
<div class="head">
<h3 class="title"><a shape="rect" href="index"><img src="/sponsor/images/parts/articleUnitA_typeD_tit_03.gif" class="js-hoverSwap" height="22" alt="応募者検索" width="130" /></a></h3>
<h3 class="title"><img src="/sponsor/images/parts/articleUnitA_typeD_tit_04.gif" height="28" alt="定型文登録" width="130" /></h3>
<!-- /.head --></div>

<div class="body">

<div class="articleTable">
<table><col width="110" span="1" /><col width="668" span="1" /><tr><td colspan="2" rowspan="1">
<ul class="cmn-commentList"><li>返信した内容を保存しておくことで、次回から定型文を選択するだけで返信可能になります。</li><li>返信定型文は、貴社の<strong class="c-red">オリジナルの定型文が最大10件登録</strong>できます。</li></ul>
</td></tr></table>
</div>

<!-- /.body --></div>
<!-- /.prt-articleUnitA --></div>
<input type="hidden" name="fixedoboForm/oboManagement/fixedobo" value="fixedoboForm" /></form>

<span id="isBefore">
<iframe scrolling="auto" src="../fixedForm/oboFormListinner?newwindow=true" name="oboFormListinner" width="840" frameborder="0" id="oboFormListinner" height="100%"></iframe>
</span>




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
<script type="text/javascript" language="JavaScript" baseViewId="/oboManagement/fixedobo" xml:space="preserve">
<!--
	function init()  {
	   var iBase = TextResizeDetector.addEventListener(onFontResize,null);
	}

	function onFontResize(e,args) {
		//iFrameの高さ自動調整
		var el,iEle;
		el=document.getElementById("oboFormListinner");
		iEle=parent.frames["oboFormListinner"].document;
		el.style.height=(document.height)?30+iEle.height+'px':30+iEle.body.scrollHeight+'px';
	}
	TextResizeDetector.TARGET_ELEMENT_ID = 'header';
	TextResizeDetector.USER_INIT_FUNC = init;
//-->
</script>

<script language="JavaScript" type="text/javascript">
<!--
var forms = ['fixedoboForm'];
for (var i = 0, len = forms.length; i < len; ++i) {
  var span = document.createElement('span');
  span.style.display = 'none';
  span.style.position = 'absolute';
  var form = document.getElementById(forms[i]);
  form.appendChild(span);
  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAABnQAEF9pZDEwOmlzRW1wU2NvdXRzcgARamF2YS5sYW5nLkJvb2xlYW7NIHKA1Zz67gIAAVoABXZhbHVleHAAdAATX2lkMTA6aXNOb3RFbXBTY291dHNxAH4ABAF0ABRfaWQxMDppc0lucHV0U3BvbnNvcnEAfgAFdAAOX2lkMTA6aXNBdXRoZWRxAH4AB3QACGlzQmVmb3JlcQB+AAd0AAdpc0FmdGVycQB+AAV4AA==' />";
}

//-->
</script></body></html>
