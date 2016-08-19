<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>応募管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/oboManagement/index.html" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/oboManagement/index.html" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" baseViewId="/oboManagement/index.html" xml:space="preserve">
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

	if(document.selectForm.checkObo.checked){
		checkFlg = true;
	}else{
		for (var i=0; i< document.selectForm.checkObo.length; i++){
			if(document.selectForm.checkObo[i].checked){
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

function dispDownloardMessage() {
	window.alert('ダウンロードできる応募情報が見つかりません。');
}

function doSubmit(item) {

	document.getElementById(item).click();
}

-->
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

<form id="selectForm" name="selectForm" method="post" enctype="application/x-www-form-urlencoded" action="/sponsor/oboManagement/index">

<div class="prt-headingA">
<h2 class="title">応募管理</h2>

<span id="isExist">
<p class="download"><a shape="rect" onclick="doSubmit('doDownload');" href="#">応募者リストをダウンロード</a></p>
<input type="submit" id="doDownload" name="selectForm:doDownload" style="display:none;" />
</span>



</div>



<div class="prt-articleUnitA typeD">
<div class="head">
<h3 class="title"><img src="/sponsor/images/parts/articleUnitA_typeD_tit_01.gif" height="28" alt="応募者検索" width="130" /></h3>
<h3 class="title"><a shape="rect" href="fixedobo"><img src="/sponsor/images/parts/articleUnitA_typeD_tit_02.gif" class="js-hoverSwap" height="22" alt="定型文登録" width="130" /></a></h3>
<!-- /.head --></div>

<div class="body">
<div class="articleTable">
<table><col width="110" span="1" /><col width="668" span="1" /><tr><th colspan="1" rowspan="1">募集職種</th><td colspan="1" rowspan="1"><select id="search_recruitAdvertiseIdItems" name="selectForm:search_recruitAdvertiseIdItems" size="1"><option value="" selected="selected">指定しない</option><option value="Rec002020716">SE・プログラマー（Rec002020716）</option><option value="Rec002020689">事務（Rec002020689）</option></select></td></tr><tr><th colspan="1" rowspan="1">対応状況</th><td colspan="1" rowspan="1"><select id="search_supportStatus__cItems" name="selectForm:search_supportStatus__cItems" size="1"><option value="" selected="selected">指定しない</option><option value="未対応">未対応</option><option value="メール済">メール済</option><option value="電話済">電話済</option><option value="電話不在">電話不在</option><option value="予約済">予約済</option><option value="登録済">登録済</option><option value="紹介中">紹介中</option><option value="採用">採用</option><option value="不採用">不採用</option></select></td></tr><tr><th colspan="1" rowspan="1">応募日</th><td colspan="1" rowspan="1"><select id="search_oboDate__c_fromYItems" name="selectForm:search_oboDate__c_fromYItems" size="1"><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="selected">2016</option></select>
 / <select id="search_oboDate__c_fromMItems" name="selectForm:search_oboDate__c_fromMItems" size="1"><option value="01">01</option><option value="02">02</option><option value="03" selected="selected">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
 / <select id="search_oboDate__c_fromDItems" name="selectForm:search_oboDate__c_fromDItems" size="1"><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11" selected="selected">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
 ～ <select id="search_oboDate__c_toYItems" name="selectForm:search_oboDate__c_toYItems" size="1"><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="selected">2016</option></select>
 / <select id="search_oboDate__c_toMItems" name="selectForm:search_oboDate__c_toMItems" size="1"><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04" selected="selected">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
 / <select id="search_oboDate__c_toDItems" name="selectForm:search_oboDate__c_toDItems" size="1"><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11" selected="selected">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></td></tr><tr><th colspan="1" rowspan="1">氏名</th><td colspan="1" rowspan="1"><input type="text" id="search_name__c" name="selectForm:search_name__c" value="" class="textboxB" /></td></tr><tr><td colspan="2" rowspan="1">
<input name="searchCondition" type="hidden" value="searchButton" />
<p class="button"><input src="../images/parts/articleUnitA_typeD_btn_01.png" alt="絞り込む" type="image" class="js-hoverSwap" /></p>
</td></tr></table>
<!-- /.articleTable --></div>
<!-- /.body --></div>
<!-- /.prt-articleUnitA --></div>

<div class="section">
<div class="prt-actionBar">


	<div class="errorMessage02">

		</div><!-- /.errorMessage02 -->


<div class="inner">
<div class="actionUnit">
<p class="result">【<dfn>該当件数</dfn>　<strong><span id="allRecordCount">1</span></strong>件 <span class="displayNumber"><span id="currentRecordCount_Start">1</span>-<span id="currentRecordCount">1</span>件を表示</span>】</p>
</div>
<div class="actionUnit-right"><p class="result">
<select id="displayCnt" name="selectForm:displayCnt" size="1" onchange="submit(this.form)" name="displayCnt"><option value="10">10</option><option value="20" selected="selected">20</option><option value="30">30</option><option value="50">50</option><option value="100">100</option></select>
件ずつ表示する</p>
</div>
</div>

<div class="inner">
<div class="actionUnit">
<ul class="buttonUnit"><li class="checkbox"><a shape="rect" href="#"><input type="checkbox" class="all" />▼</a></li><li><input type="image" id="doDelete" name="selectForm:doDelete" src="/sponsor/images/common/btn_delete_01.png" class="js-hoverSwap" height="21" onclick="return checkDelete();" alt="削除する" width="97" /></li><!--
<li><a onclick="dele(); return false;" href="#"><img src="../images/common/btn_delete_01.png" alt="一括削除" width="87" height="21" class="js-hoverSwap" /></a></li>
<li><a href="./oboMailInput"><img src="../images/common/btn_reply_01.png" alt="一括返信" width="87" height="21" class="js-hoverSwap" /></a></li>
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
<dd class="prev"><img src="/sponsor/images/parts/pagenation_btn_prev_02.png" height="25" width="26" /></dd>
</span><span id="isNotNextPage">
<dd class="next"><img src="/sponsor/images/parts/pagenation_btn_next_02.png" height="25" width="25" /></dd>
</span></dl>
<!-- /.pagenation --></div>
<!-- /.inner --></div>
<!-- /.prt-actionBar --></div>


<div class="prt-tableC">
<table><col width="16" span="1" /><col width="200 " span="1" /><col width="95 " span="1" /><col width="60" span="1" /><col width="45" span="1" /><col width="45" span="1" /><col width="140" span="1" /><col width="70" span="1" /><tr><th colspan="1" rowspan="1" class="titleA">&nbsp;</th><th colspan="1" rowspan="1" class="titleA">募集職種</th><th colspan="1" rowspan="1" class="titleA">氏名</th><th colspan="1" rowspan="1" class="titleA">対応状況</th><th colspan="1" rowspan="1" class="titleA">性別</th><th colspan="1" rowspan="1" class="titleA">年齢</th><th colspan="1" rowspan="1" class="titleA">住所</th><th colspan="1" rowspan="1" class="titleA">応募日</th></tr><tbody id="oboItems"><tr><span id="isNotMessageExist">
<td colspan="1" rowspan="1" class="checkbox">
	<label class="checkbox">
	<span id="checkboxObo"><input type="checkbox" name="checkObo" value="Obo000090047" class="chktitle" /></span>
	</label>
</td>
</span><td colspan="1" rowspan="1"><span id="recruitAdvertise_JobTitle">SE・プログラマー</span>

	<span id="isIconRecruitType_arbeit" class="iconB"><img src="/sponsor/images/common/icon_arbeit_01.png" height="16" alt="アルバイト" width="34" /></span>
</td><td colspan="1" rowspan="1">
<span id="isNotStatusDisable">
<p class="cmn-iconLinkA"><a id="goOboDetail" href="obodetail?oboId=Obo000090047" shape="rect"><img src="/sponsor/images/common/icon_arrow_02.png" class="iconA" height="17" width="17" /><span id="name__c">秋本弘行</span></a></p>
</span>

</td><td colspan="1" rowspan="1"><span id="isSupportStatusInitial"><p class="red"><span id="supportStatus__c">未対応</span></p></span></td><td colspan="1" rowspan="1"><span id="gender__c">男性</span></td><td colspan="1" rowspan="1"><span id="age">25</span>歳</td><td colspan="1" rowspan="1"><span id="province__c">埼玉県</span><span id="city__c"></span></td><td colspan="1" rowspan="1"><span id="oboDate__c">16/04/07</span></td></tr></tbody><!--
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td>早朝構内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>
<td><p class="cmn-iconLinkA"><a href="obodetail"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />山田太郎</a></p></td>
<td>済み</td>
<td>男</td>
<td>28歳</td>
<td>東京都千代田区神田</td>
<td>00/00/00</td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td>早朝構内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>
<td><p class="cmn-iconLinkA"><a href="oboDetail"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />山田太郎</a></p></td>
<td>済み</td>
<td>男</td>
<td>28歳</td>
<td>東京都千代田区神田</td>
<td>00/00/00</td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td>早朝構内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>
<td><p class="cmn-iconLinkA"><a href="oboDetail"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />山田太郎</a></p></td>
<td>済み</td>
<td>男</td>
<td>28歳</td>
<td>東京都千代田区神田</td>
<td>00/00/00</td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td>早朝構内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>
<td><p class="cmn-iconLinkA"><a href="oboDetail"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />山田太郎</a></p></td>
<td>済み</td>
<td>男</td>
<td>28歳</td>
<td>東京都千代田区神田</td>
<td>00/00/00</td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td>早朝構内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>
<td><p class="cmn-iconLinkA"><a href="oboDetail"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />山田太郎</a></p></td>
<td>済み</td>
<td>男</td>
<td>28歳</td>
<td>東京都千代田区神田</td>
<td>00/00/00</td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td>早朝構内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>
<td><p class="cmn-iconLinkA"><a href="oboDetail"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />山田太郎</a></p></td>
<td>済み</td>
<td>男</td>
<td>28歳</td>
<td>東京都千代田区神田</td>
<td>00/00/00</td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td>早朝構内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>
<td><p class="cmn-iconLinkA"><a href="oboDetail"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />山田太郎</a></p></td>
<td>済み</td>
<td>男</td>
<td>28歳</td>
<td>東京都千代田区神田</td>
<td>00/00/00</td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td>早朝構内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>
<td><p class="cmn-iconLinkA"><a href="oboDetail"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />山田太郎</a></p></td>
<td>済み</td>
<td>男</td>
<td>28歳</td>
<td>東京都千代田区神田</td>
<td>00/00/00</td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td>早朝構内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>
<td><p class="cmn-iconLinkA"><a href="oboDetail"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />山田太郎</a></p></td>
<td>済み</td>
<td>男</td>
<td>28歳</td>
<td>東京都千代田区神田</td>
<td>00/00/00</td>
</tr>
<tr>
<td class="checkbox"><label class="checkbox"><input type="checkbox" name="" value="" /></label></td>
<td>早朝構内スタッフ <span class="iconB"><img src="../images/common/icon_jobchange_01.png" alt="正社員" width="34" height="16" /></span><span class="iconB"><img src="../images/common/icon_arbeit_01.png" alt="アルバイト" width="34" height="16" /></span></td>
<td><p class="cmn-iconLinkA"><a href="oboDetail"><img src="../images/common/icon_arrow_02.png" alt="" width="17" height="17" class="iconA" />山田太郎</a></p></td>
<td>済み</td>
<td>男</td>
<td>28歳</td>
<td>東京都千代田区神田</td>
<td>00/00/00</td>
</tr>

 --></table>
<!-- /.prt-tableC --></div>

<div class="prt-actionBar bottom">
<div class="inner">
<div class="actionUnit">
<ul class="buttonUnit"><li class="checkbox"><a shape="rect" href="#"><input type="checkbox" class="all" />▲</a></li><li><input type="image" id="doDelete-2" name="selectForm:doDelete-2" src="/sponsor/images/common/btn_delete_01.png" class="js-hoverSwap" height="21" onclick="return checkDelete();" alt="削除する" width="97" /></li><!--
<li><a onclick="dele(); return false;" href="#"><img src="../images/common/btn_delete_01.png" alt="一括削除" width="87" height="21" class="js-hoverSwap" /></a></li>
<li><a href="./oboMailInput"><img src="../images/common/btn_reply_01.png" alt="一括返信" width="87" height="21" class="js-hoverSwap" /></a></li>
 --></ul>
<p class="result">【<dfn>該当件数</dfn>　<strong><span id="allRecordCount-2">1</span></strong>件 <span class="displayNumber"><span id="currentRecordCount_Start-2">1</span>-<span id="currentRecordCount-2">1</span>件を表示</span>】</p>
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
<dd class="prev"><img src="/sponsor/images/parts/pagenation_btn_prev_02.png" height="25" width="26" /></dd>
</span><span id="isNotNextPage-2">
<dd class="next"><img src="/sponsor/images/parts/pagenation_btn_next_02.png" height="25" width="25" /></dd>
</span></dl>
<!-- /.pagenation --></div>
<!-- /.inner --></div>
<!-- /.prt-actionBar --></div>
<!-- /.section --></div>
<input type="hidden" name="selectForm/oboManagement/index" value="selectForm" /></form>
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
var forms = ['selectForm'];
for (var i = 0, len = forms.length; i < len; ++i) {
  var span = document.createElement('span');
  span.style.display = 'none';
  span.style.position = 'absolute';
  var form = document.getElementById(forms[i]);
  form.appendChild(span);
  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAAHXQAEF9pZDEwOmlzRW1wU2NvdXRzcgARamF2YS5sYW5nLkJvb2xlYW7NIHKA1Zz67gIAAVoABXZhbHVleHAAdAATX2lkMTA6aXNOb3RFbXBTY291dHNxAH4ABAF0ABRfaWQxMDppc0lucHV0U3BvbnNvcnEAfgAFdAAOX2lkMTA6aXNBdXRoZWRxAH4AB3QAEnNlbGVjdEZvcm06aXNFeGlzdHEAfgAHdAAVc2VsZWN0Rm9ybTppc05vdEV4aXN0cQB+AAV0ACRzZWxlY3RGb3JtOmlzU2VhcmNoU3VwcG9ydFN0YXR1c19fZXhxAH4ABXQAEHNlbGVjdEZvcm06aXNOb25xAH4ABXQAJHNlbGVjdEZvcm06cGFnZUl0ZW1zOjA6aXNDdXJyZW50UGFnZXEAfgAHdAAnc2VsZWN0Rm9ybTpwYWdlSXRlbXM6MDppc05vdEN1cnJlbnRQYWdlcQB+AAV0ABVzZWxlY3RGb3JtOmlzUHJldlBhZ2VxAH4ABXQAGHNlbGVjdEZvcm06aXNOb3RQcmV2UGFnZXEAfgAHdAAVc2VsZWN0Rm9ybTppc05leHRQYWdlcQB+AAV0ABhzZWxlY3RGb3JtOmlzTm90TmV4dFBhZ2VxAH4AB3QAJ3NlbGVjdEZvcm06b2JvSXRlbXM6MDppc05vdE1lc3NhZ2VFeGlzdHEAfgAHdAAnc2VsZWN0Rm9ybTpvYm9JdGVtczowOmlzTWVzc2FnZUV4aXN0LTAxcQB+AAV0ADFzZWxlY3RGb3JtOm9ib0l0ZW1zOjA6aXNJY29uUmVjcnVpdFR5cGVfam9iY2hhbmdlcQB+AAV0AC5zZWxlY3RGb3JtOm9ib0l0ZW1zOjA6aXNJY29uUmVjcnVpdFR5cGVfYXJiZWl0cQB+AAd0AChzZWxlY3RGb3JtOm9ib0l0ZW1zOjA6aXNOb3RTdGF0dXNEaXNhYmxlcQB+AAd0AChzZWxlY3RGb3JtOm9ib0l0ZW1zOjA6aXNTdGF0dXNEaXNhYmxlLTAxcQB+AAV0ACxzZWxlY3RGb3JtOm9ib0l0ZW1zOjA6aXNTdXBwb3J0U3RhdHVzSW5pdGlhbHEAfgAHdAAvc2VsZWN0Rm9ybTpvYm9JdGVtczowOmlzTm90U3VwcG9ydFN0YXR1c0luaXRpYWxxAH4ABXQAJ3NlbGVjdEZvcm06b2JvSXRlbXM6MDppc01lc3NhZ2VFeGlzdC0wMnEAfgAFdAAoc2VsZWN0Rm9ybTpwYWdlSXRlbXMtMjowOmlzQ3VycmVudFBhZ2UtMnEAfgAHdAArc2VsZWN0Rm9ybTpwYWdlSXRlbXMtMjowOmlzTm90Q3VycmVudFBhZ2UtMnEAfgAFdAAXc2VsZWN0Rm9ybTppc1ByZXZQYWdlLTJxAH4ABXQAGnNlbGVjdEZvcm06aXNOb3RQcmV2UGFnZS0ycQB+AAd0ABdzZWxlY3RGb3JtOmlzTmV4dFBhZ2UtMnEAfgAFdAAac2VsZWN0Rm9ybTppc05vdE5leHRQYWdlLTJxAH4AB3gA' />";
}

//-->
</script></body></html>
