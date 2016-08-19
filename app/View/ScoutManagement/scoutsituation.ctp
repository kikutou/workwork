<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>スカウト管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/scoutManagement/scoutsituation" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/scoutManagement/scoutsituation" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" baseViewId="/scoutManagement/scoutsituation" xml:space="preserve">
<!--
$(function(){
	$('.all').click(function(){
	    if(this.checked){
	    	$('.all').attr('checked','checked');
	    	$('.chkmember').attr('checked','checked');
	    }else{
	    	$('.all').removeAttr('checked');
	    	$('.chkmember').removeAttr('checked');
	    }
    });
});
function checkScout() {
	checkFlg = false;

	if(document.situationForm.memberIdCheck.checked){
		checkFlg = true;
	}else{
		for (var i=0; i< document.situationForm.memberIdCheck.length; i++){
			if(document.situationForm.memberIdCheck[i].checked){
				checkFlg = true;
				break;
			}
	 	}
	}

	if(checkFlg){
		return dele();
	}
	else{
		window.alert('スカウト対象をチェックしてください。');
		return false;
	}
}
-->
</script></head>
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

<div class="scout-nav sco-history">
<ul><li><a shape="rect" href="index?mode=e"><img src="/sponsor/images/parts/nav_jbt.png" class="js-hoverSwap" height="46" alt="ジョブターミナル" width="170" /></a></li><li><a shape="rect" href="indexbj?mode=a"><img src="/sponsor/images/parts/nav_bj.png" class="js-hoverSwap" height="46" alt="バイトジャングル" width="170" /></a></li><li><img src="/sponsor/images/parts/nav_scout_on.png" height="46" alt="スカウト履歴" width="170" /></li><li><a shape="rect" href="fixedscout"><img src="/sponsor/images/parts/nav_fix.png" class="js-hoverSwap" height="46" alt="定型文管理" width="170" /></a></li></ul>
</div>


<form id="situationForm" name="situationForm" method="post" enctype="application/x-www-form-urlencoded" action="/sponsor/scoutManagement/scoutsituation">
<div class="prt-articleUnitA sco-historyhead">
<div class="head">
<!--<p class="nav"><a href="./"><img src="../images/parts/articleUnitA_typeE_btn_02.png" alt="条件から検索する" width="130" height="22" class="js-hoverSwap" /></a></p>
<h3 class="title"><img src="../images/parts/articleUnitA_typeE_tit_01.gif" alt="スカウト回答状況" width="130" height="28"/></h3>-->
<p class="headwhite">絞り込み</p>
<!-- /.head --></div>

<div class="body">
<div class="articleTable">
<table><col width="100" span="1" /><col width="568" span="1" /><tr class="even"><th colspan="1" rowspan="1">登録サイト</th><td colspan="1" rowspan="1"><select id="type" name="situationForm:type" size="1" onchange="submit(this.form)" name="type"><option value="" selected="selected">指定しない</option><option value="ジョブターミナル">ジョブターミナル</option><option value="バイトジャングル">バイトジャングル</option></select></td></tr><tr><th colspan="1" rowspan="1">スカウト状況</th><td colspan="1" rowspan="1"><select id="replyStatus" name="situationForm:replyStatus" size="1" onchange="submit(this.form)" name="replyStatus"><option value="" selected="selected">全て表示</option><option value="回答あり・ＯＫ">回答あり・ＯＫ</option><option value="回答あり・ＮＧ">回答あり・ＮＧ</option><option value="未回答">未回答</option></select></td></tr><!-- <tr> --></table>
<!-- /.articleTable --></div>
<!-- /.body --></div>
<!-- /.prt-articleUnitA --></div>
<div class="errorMessage02">

<p></p>
</div><!-- /.errorMessage02 -->


<input type="hidden" name="situationForm/scoutManagement/scoutsituation" value="situationForm" /></form>
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
var forms = ['situationForm'];
for (var i = 0, len = forms.length; i < len; ++i) {
  var span = document.createElement('span');
  span.style.display = 'none';
  span.style.position = 'absolute';
  var form = document.getElementById(forms[i]);
  form.appendChild(span);
  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAAB3QAEF9pZDEwOmlzRW1wU2NvdXRzcgARamF2YS5sYW5nLkJvb2xlYW7NIHKA1Zz67gIAAVoABXZhbHVleHAAdAATX2lkMTA6aXNOb3RFbXBTY291dHNxAH4ABAF0ABRfaWQxMDppc0lucHV0U3BvbnNvcnEAfgAFdAAOX2lkMTA6aXNBdXRoZWRxAH4AB3QADWlzRGlzcGxheU9ubHlxAH4ABXQAE3NpdHVhdGlvbkZvcm06aXNOb25xAH4ABXQAGXNpdHVhdGlvbkZvcm06aXNFeGlzdERhdGFxAH4ABXgA' />";
}

//-->
</script></body></html>
