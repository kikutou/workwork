<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>スカウト管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/scoutManagement/fixedscout" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/scoutManagement/fixedscout" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/formUI.js" charset="utf-8" baseViewId="/scoutManagement/fixedscout" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/textresizedetector.js" baseViewId="/scoutManagement/fixedscout" xml:space="preserve"></script></head>
<body class="scoutManagement">
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
<h2 class="title">スカウト管理　</h2>
<!-- /.prt-headingA --></div>


<div class="site-use">
<table><col width="134" span="1" /><col width="120" span="1" /><col width="70" span="1" /><col width="120" span="1" /><col width="70" span="1" /><tr><th colspan="1" rowspan="1" valign="middle" align="center">スカウト利用状況</th><th colspan="1" rowspan="1" class="jbt">ジョブターミナル</th><td colspan="1" rowspan="1"><span id="scoutCntEmploy" class="red">参照のみ</span></td><th colspan="1" rowspan="1" class="bj">バイトジャングル</th><td colspan="1" rowspan="1"><span id="scoutCntArbeit" class="">0/10</span></td></tr></table>
<ul><li>【スカウトのご利用について】</li><li>　　折込セットプランのみをご契約のお客様は、上記ご利用状況が「参照のみ」と表示され、スカウト検索のみがご利用いただける状態となっております。</li><li>　　登録者に対する実際のスカウトアクションには、テキストプラン以上のネットプランまたは折込セットグレードアッププランのご契約が必要となります。</li><li>　　ご不明な点がございましたら、弊社担当営業までお問合せ下さい。</li></ul>
</div>

<div class="scout-nav fix">
<ul><li><a shape="rect" href="index?mode=e"><img src="/sponsor/images/parts/nav_jbt.png" class="js-hoverSwap" height="46" alt="ジョブターミナル" width="170" /></a></li><li><a shape="rect" href="indexbj?mode=a"><img src="/sponsor/images/parts/nav_bj.png" class="js-hoverSwap" height="46" alt="バイトジャングル" width="170" /></a></li><li><a shape="rect" href="scoutsituation"><img src="/sponsor/images/parts/nav_scout.png" class="js-hoverSwap" height="46" alt="スカウト履歴" width="170" /></a></li><li><img src="/sponsor/images/parts/nav_fix_on.png" height="46" alt="定型文管理" width="170" /></li></ul>
</div>


<form id="fixedscoutForm" name="fixedscoutForm" method="post" enctype="application/x-www-form-urlencoded" action="/sponsor/scoutManagement/fixedscout">

<div class="prt-articleUnitA fixhead">
<div class="head">
<!--<p class="nav"><a href="./"><img src="../images/parts/articleUnitA_typeE_btn_02.png" alt="条件から検索する" width="130" height="22" class="js-hoverSwap" /></a></p>
<h3 class="title"><img src="../images/parts/articleUnitA_typeE_tit_01.gif" alt="スカウト回答状況" width="130" height="28"/></h3>-->
<p class="headwhite">定型文一覧</p>
<!-- /.head --></div>

<div class="body">
<div class="articleTable">
<table><colgroup span="1"><col width="110" span="1" /><col width="668" span="1" /></colgroup><tbody><tr class="even"><td colspan="2" rowspan="1">
<ul class="cmn-commentList"><li>スカウトした内容を保存しておくことで、次回から定型文を選択するだけでスカウトが可能になります。</li><li>スカウト定型文は、貴社の<strong class="c-red">オリジナルの定型文が最大50件登録</strong>できます。</li></ul>
</td></tr></tbody></table>
<!-- /.articleTable --></div>
<!-- /.body --></div>
<!-- /.prt-articleUnitA --></div>

<span id="isBefore">
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>スカウト管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/fixedForm/scoutformlistinner" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/fixedForm/scoutformlistinner" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/formUI.js" charset="utf-8" baseViewId="/fixedForm/scoutformlistinner" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" baseViewId="/fixedForm/scoutformlistinner" xml:space="preserve">
	<!--
	$(function(){
		$('.all').click(function(){
		    if(this.checked){
		    	$('.all').attr('checked','checked');
		    	$('.chktitle').attr('checked','checked');
		    }else{
		    	$('.all').removeAttr('checked');
		    	$('.chktitle').removeAttr('checked');
		    }
	    });
	});
	function checkDelete() {
		checkFlg = false;

		if(document.inputForm.deleteCheckId.checked){
			checkFlg = true;
		}else{
			for (var i=0; i< document.inputForm.deleteCheckId.length; i++){
				if(document.inputForm.deleteCheckId[i].checked){
					checkFlg = true;
					break;
				}
		 	}
		}

		if(checkFlg){
			return dele();
		}
		else{
			window.alert('削除対象をチェックしてください。');
			return false;
		}
	}
	-->
	</script></head>
	<body class="fixedForm">
	<form id="inputForm" name="inputForm" method="post" enctype="application/x-www-form-urlencoded" action="/sponsor/fixedForm/scoutformlistinner?wid=6286534137169184003">



	<div id="iframe">
	<div id="contents">


	<div class="section">
	<span id="isRegist">
	<div class="prt-buttonUnitB">
	<p class="button"><a shape="rect" href="scoutforminput?mode=new"><img src="/sponsor/images/parts/buttonUnitB_btn_01.png?wid=6286534137169184003" class="js-hoverSwap" height="22" alt="新規定型文作成" width="130" /></a></p>
	<p class="comment">あと<span class="num"><span id="registCnt">49</span>件</span>登録できます</p>
	<!-- /.prt-buttonUnitB --></div>
	</span>
	<span id="isExist">

	<div class="prt-actionBar">
	<div class="inner">
	<div class="actionUnit">
	<p class="result">【<dfn>該当件数</dfn>　<strong><span id="allRecordCount">1</span></strong>件 <span class="displayNumber"><span id="currentRecordCount_Start">1</span>-<span id="currentRecordCount">1</span>件を表示</span>】</p>
	</div>
	<div class="actionUnit-right"><p class="result">
	<select id="displayCnt" name="inputForm:displayCnt" size="1" onchange="submit(this.form)" name="displayCnt"><option value="10">10</option><option value="20" selected="selected">20</option><option value="30">30</option><option value="50">50</option><option value="100">100</option></select>
	件ずつ表示する</p>
	</div>
	</div>

	<div class="inner">
	<div class="actionUnit">
	<ul class="buttonUnit"><li class="checkbox"><a shape="rect" href="#"><input type="checkbox" class="all" />▼</a></li><li><input type="image" id="doDelete" name="inputForm:doDelete" src="/sponsor/images/common/btn_delete_01.png" class="js-hoverSwap" height="21" onclick="return checkDelete();" alt="削除する" width="97" /></li><!--
	<li><a onclick="dele(); return false;" href="#"><img src="../images/common/btn_delete_01.png" alt="一括削除" width="87" height="21" class="js-hoverSwap" /></a></li>
	<li><a href="./obomailinput"><img src="../images/common/btn_reply_01.png" alt="一括返信" width="87" height="21" class="js-hoverSwap" /></a></li>
	 --></ul>
	<!-- /.actionUnit --></div>

	<div class="pagenation">
	<dl><dt>ページ：</dt>
	<span id="isCurrentPage">
	<dd class="current"><span id="page-1">1</span></dd>
	</span>


	<!--
	<dd class="current"><a href="#">1</a></dd>
	<dd><a href="#">2</a></dd>
	<dd><a href="#">3</a></dd>
	<dd><a href="#">4</a></dd>
	<dd><a href="#">5</a></dd>
	<dd><a href="#">6</a></dd>
	<dd><a href="#">7</a></dd>
	 --><span id="isNotPrevPage">
	<dd class="prev"><img src="/sponsor/images/parts/pagenation_btn_prev_02.png?wid=6286534137169184003" height="25" width="26" /></dd>
	</span><span id="isNotNextPage">
	<dd class="next"><img src="/sponsor/images/parts/pagenation_btn_next_02.png?wid=6286534137169184003" height="25" width="25" /></dd>
	</span></dl>
	<!-- /.pagenation --></div>
	<!-- /.inner --></div>
	<!-- /.prt-actionBar --></div>

	<div class="prt-tableC">
	<table><col width="16" span="1" /><col width="781" span="1" /><tr><th colspan="1" rowspan="1" class="titleA">&nbsp;</th><th colspan="1" rowspan="1" class="titleA">定型文一覧</th></tr><tbody id="templateItems"><tr><td colspan="1" rowspan="1" class="checkbox"><label class="checkbox"><span id="deleteCheck"><input type="checkbox" id="deleteCheckId" name="deleteCheckId" value="a0R1000000MgafVEAR" class="chktitle"/></span></label></td><td colspan="1" rowspan="1"><p class="cmn-iconLinkA"><a id="goInput" href="/sponsor/fixedForm/scoutforminput" shape="rect"><img src="/sponsor/images/common/icon_arrow_02.png?wid=6286534137169184003" class="iconA" height="17" width="17" /><span id="templateTitle__c">34343</span></a></p></td></tr></tbody></table>
	<!-- /.prt-tableC --></div>

	<div class="prt-actionBar bottom">
	<div class="inner">
	<div class="actionUnit">
	<ul class="buttonUnit"><li class="checkbox"><a shape="rect" href="#"><input type="checkbox" class="all" />▲</a></li><li><input type="image" id="doDelete-2" name="inputForm:doDelete-2" src="/sponsor/images/common/btn_delete_01.png" class="js-hoverSwap" height="21" onclick="return checkDelete();" alt="削除する" width="97" /></li><!--
	<li><a onclick="dele(); return false;" href="#"><img src="../images/common/btn_delete_01.png" alt="一括削除" width="87" height="21" class="js-hoverSwap" /></a></li>
	<li><a href="./obomailinput"><img src="../images/common/btn_reply_01.png" alt="一括返信" width="87" height="21" class="js-hoverSwap" /></a></li>
	 --></ul>
	<!-- /.actionUnit --></div>

	<div class="pagenation">
	<dl><dt>ページ：</dt><!--
	<dd class="current"><a href="#">1</a></dd>
	<dd><a href="#">2</a></dd>
	<dd><a href="#">3</a></dd>
	<dd><a href="#">4</a></dd>
	<dd><a href="#">5</a></dd>
	<dd><a href="#">6</a></dd>
	<dd><a href="#">7</a></dd>
	<dd class="prev"><img src="../images/parts/pagenation_btn_prev_02.png" alt="" width="26" height="25" /></dd>
	<dd class="next"><a href="#"><img src="../images/parts/pagenation_btn_next_01.png" alt="" width="25" height="25" class="js-hoverBlink" /></a></dd>
	 -->
	<span id="isCurrentPage-2">
	<dd class="current"><span id="page-1">1</span></dd>
	</span>

	<span id="isNotPrevPage-2">
	<dd class="prev"><img src="/sponsor/images/parts/pagenation_btn_prev_02.png?wid=6286534137169184003" height="25" width="26" /></dd>
	</span><span id="isNotNextPage-2">
	<dd class="next"><img src="/sponsor/images/parts/pagenation_btn_next_02.png?wid=6286534137169184003" height="25" width="25" /></dd>
	</span></dl>


	<!-- /.pagenation --></div>
	<!-- /.inner --></div>
	<!-- /.prt-actionBar --></div>
	</span>
	<!-- /.section --></div>
	<!-- /#contents --></div>




	</div>
	<!-- /#document --></div>
	<input type="hidden" name="inputForm/fixedForm/scoutformlistinner" value="inputForm" /></form>

	<script language="JavaScript" type="text/javascript">
	<!--
	var forms = ['inputForm'];
	for (var i = 0, len = forms.length; i < len; ++i) {
	  var span = document.createElement('span');
	  span.style.display = 'none';
	  span.style.position = 'absolute';
	  var form = document.getElementById(forms[i]);
	  form.appendChild(span);
	  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAADnQAEmlucHV0Rm9ybTppc1JlZ2lzdHNyABFqYXZhLmxhbmcuQm9vbGVhbs0gcoDVnPruAgABWgAFdmFsdWV4cAF0ABFpbnB1dEZvcm06aXNFeGlzdHEAfgAFdAAjaW5wdXRGb3JtOnBhZ2VJdGVtczowOmlzQ3VycmVudFBhZ2VxAH4ABXQAJmlucHV0Rm9ybTpwYWdlSXRlbXM6MDppc05vdEN1cnJlbnRQYWdlc3EAfgAEAHQAFGlucHV0Rm9ybTppc1ByZXZQYWdlcQB+AAl0ABdpbnB1dEZvcm06aXNOb3RQcmV2UGFnZXEAfgAFdAAUaW5wdXRGb3JtOmlzTmV4dFBhZ2VxAH4ACXQAF2lucHV0Rm9ybTppc05vdE5leHRQYWdlcQB+AAV0ACdpbnB1dEZvcm06cGFnZUl0ZW1zLTI6MDppc0N1cnJlbnRQYWdlLTJxAH4ABXQAKmlucHV0Rm9ybTpwYWdlSXRlbXMtMjowOmlzTm90Q3VycmVudFBhZ2UtMnEAfgAJdAAWaW5wdXRGb3JtOmlzUHJldlBhZ2UtMnEAfgAJdAAZaW5wdXRGb3JtOmlzTm90UHJldlBhZ2UtMnEAfgAFdAAWaW5wdXRGb3JtOmlzTmV4dFBhZ2UtMnEAfgAJdAAZaW5wdXRGb3JtOmlzTm90TmV4dFBhZ2UtMnEAfgAFeAA=' />";
	}

	//-->
	</script></body></html>
</span>



<input type="hidden" name="fixedscoutForm/scoutManagement/fixedscout" value="fixedscoutForm" /></form>
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





<!-- /#document --></div>
<script type="text/javascript" language="JavaScript" baseViewId="/scoutManagement/fixedscout" xml:space="preserve">
<!--
	function init()  {
	   var iBase = TextResizeDetector.addEventListener(onFontResize,null);
	}

	function onFontResize(e,args) {
		//iFrameの高さ自動調整
		var el,iEle;
		el=document.getElementById("scoutFormListinner");
		iEle=parent.frames["scoutFormListinner"].document;
		el.style.height=(document.height)?30+iEle.height+'px':30+iEle.body.scrollHeight+'px';
	}
	TextResizeDetector.TARGET_ELEMENT_ID = 'header';
	TextResizeDetector.USER_INIT_FUNC = init;
//-->
</script>

<script language="JavaScript" type="text/javascript">
<!--
var forms = ['fixedscoutForm'];
for (var i = 0, len = forms.length; i < len; ++i) {
  var span = document.createElement('span');
  span.style.display = 'none';
  span.style.position = 'absolute';
  var form = document.getElementById(forms[i]);
  form.appendChild(span);
  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAAB3QAEF9pZDEwOmlzRW1wU2NvdXRzcgARamF2YS5sYW5nLkJvb2xlYW7NIHKA1Zz67gIAAVoABXZhbHVleHAAdAATX2lkMTA6aXNOb3RFbXBTY291dHNxAH4ABAF0ABRfaWQxMDppc0lucHV0U3BvbnNvcnEAfgAFdAAOX2lkMTA6aXNBdXRoZWRxAH4AB3QADWlzRGlzcGxheU9ubHlxAH4ABXQAF2ZpeGVkc2NvdXRGb3JtOmlzQmVmb3JlcQB+AAd0ABZmaXhlZHNjb3V0Rm9ybTppc0FmdGVycQB+AAV4AA==' />";
}

//-->
</script></body></html>
