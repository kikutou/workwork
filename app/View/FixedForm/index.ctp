<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>定型文管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/fixedForm/index" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/fixedForm/index" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/formUI.js" charset="utf-8" baseViewId="/fixedForm/index" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/textresizedetector.js" baseViewId="/fixedForm/index" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" baseViewId="/fixedForm/index" xml:space="preserve">
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
<h1 id="siteTitle"><img src="/sponsor/images/base/logo_siteTitle.png" height="28" alt="クリエイト管理システム" width="129" /></h1>

<div id="globalNav">
<ul><li id="gnav07"><a shape="rect" href="../help/">ヘルプ</a></li><li id="gnav06"><a shape="rect" href="../accessLog/">レポート</a></li><li id="gnav05"><a shape="rect" href="../fixedForm/">定型文管理</a></li><span id="isEmpScout">
<li id="gnav03"><a shape="rect" href="../scoutManagement/">スカウト管理</a></li>
</span><li id="gnav02"><a shape="rect" href="../oboManagement/">応募管理</a></li><li id="gnav01"><a shape="rect" href="../top/">TOP</a></li></ul>
<!-- /#globalNav --></div>
<!-- /#header --></div>
</div>

<div id="login"><div id="loginInner">
<p id="loginName"></p>

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
<h2 class="title">定型文管理</h2>
</div>

<div class="prt-articleUnitA typeC">
<div class="head">
<h3 class="title"><img src="/sponsor/images/parts/articleUnitA_typeC_tit_01.gif" height="28" alt="応募者返信メール" width="130" /></h3>
<p class="nav"><a shape="rect" href="scoutformlist"><img src="/sponsor/images/parts/articleUnitA_typeC_btn_02.png" class="js-hoverSwap" height="22" alt="スカウトメール" width="130" /></a></p>
</div>

<div class="body">
<div class="articleTable">
<table><col width="110" span="1" /><col width="668" span="1" /><tr><td colspan="2" rowspan="1">
<ul class="cmn-commentList"><li>返信した内容を保存しておくことで、次回から定型文を選択するだけで返信可能になります。</li><li>返信定型文は、貴社の<strong class="c-red">オリジナルの定型文が最大10件登録</strong>できます。</li></ul>
</td></tr></table>
</div>
</div>
</div>

<div class="section">
<div class="prt-buttonUnitB">
<p class="button"><a href="scoutforminput"><img src="/sponsor/images/parts/buttonUnitB_btn_01.png?wid=3840238130196645341" alt="新規定型文作成" width="130" height="22" class="js-hoverSwap" /></a></p>
<p class="comment">あと<span class="num">5件</span>登録できます</p>
</div>


<!--
<li><a onclick="dele(); return false;" href="#"><img src="../images/common/btn_delete_01.png" alt="一括削除" width="87" height="21" class="js-hoverSwap" /></a></li>
<li><a href="./obomailinput"><img src="../images/common/btn_reply_01.png" alt="一括返信" width="87" height="21" class="js-hoverSwap" /></a></li>
 -->
<!--
</ul>
</div>

<div class="pagenation">
<dl>
<dt>ページ：</dt>

<div id="pageItems">
<span id="isCurrentPage">
<dd class="current"><span id="page-1">1</span></dd>
</span>

<span id="isNotCurrentPage">
<dd><a id="goIndexPage" href="index?page=page&fixed_searchCondition=searchInfo"><span id="page-2">2</span></a></dd>
</span>
</div>


<span id="isPrevPage">
<dd class="prev"><a id="goPrevPage" href="index?page=page&fixed_searchCondition=searchInfo"><img src="../images/parts/pagenation_btn_prev_01.png" alt="" width="26" height="25" class="js-hoverBlink" /></a></dd>
</span>
<span id="isNotPrevPage">
<dd class="prev"><img src="../images/parts/pagenation_btn_prev_02.png" alt="" width="26" height="25"  /></dd>
</span>

<span id="isNextPage">
<dd class="next"><a id="goNextPage" href="index?page=page&fixed_searchCondition=searchInfo"><img src="../images/parts/pagenation_btn_next_01.png" alt="" width="25" height="25" class="js-hoverBlink" /></a></dd>
</span>
<span id="isNotNextPage">
<dd class="next"><img src="../images/parts/pagenation_btn_next_02.png" alt="" width="25" height="25" /></dd>
</span>

</dl>
</div>
</div>
</div>
<div class="prt-tableC">
<table>
<col width="16" />
<col width="781" />
<tr>
<th class="titleA">&nbsp;</th>
<th class="titleA">定型文一覧</th>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td><p class="cmn-iconLinkA"><a href="scoutforminput"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />定型文の保存用タイトルです</a></p></td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td><p class="cmn-iconLinkA"><a href="scoutforminput"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />定型文の保存用タイトルです</a></p></td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td><p class="cmn-iconLinkA"><a href="scoutforminput"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />定型文の保存用タイトルです</a></p></td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td><p class="cmn-iconLinkA"><a href="scoutforminput"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />定型文の保存用タイトルです</a></p></td>
</tr>
</table>
</div>

<div class="prt-actionBar bottom">
<div class="inner">
<div class="actionUnit">
<ul class="buttonUnit">
<li class="checkbox"><a href="#"><input type="checkbox" id="all" value="" tabindex="1" />▲</a></li>
<li><a href="#" onclick="disp(); return false;"><img src="../images/common/btn_delete_01.png" alt="削除" width="87" height="21" class="js-hoverSwap" /></a></li>
</ul>
</div>
</div>
</div>
</div>-->

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
<script type="text/javascript" language="JavaScript" baseViewId="/fixedForm/index" xml:space="preserve">
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
</body></html>
