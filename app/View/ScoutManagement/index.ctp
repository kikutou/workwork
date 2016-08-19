<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>スカウト管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/scoutManagement/index.html" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/scoutManagement/index.html" xml:space="preserve"></script><link rel="stylesheet" href="/sponsor/css/thickbox.css" media="all" type="text/css" baseViewId="/scoutManagement/index.html" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/thickbox.js" charset="utf-8" baseViewId="/scoutManagement/index.html" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" baseViewId="/scoutManagement/index.html" xml:space="preserve">
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

	if(document.selectForm.memberIdCheck.checked){
		checkFlg = true;
	}else{
		for (var i=0; i< document.selectForm.memberIdCheck.length; i++){
			if(document.selectForm.memberIdCheck[i].checked){
				checkFlg = true;
				break;
			}
	 	}
	}

	if(checkFlg){
		return true;
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
<h2 class="title">スカウト管理　</h2><span id="isDisplayOnly"><h2 class="title">［機能制限モード］</h2></span>
<!-- /.prt-headingA --></div>


<div class="site-use">
<table><col width="134" span="1" /><col width="120" span="1" /><col width="70" span="1" /><col width="120" span="1" /><col width="70" span="1" /><tr><th colspan="1" rowspan="1" valign="middle" align="center">スカウト利用状況</th><th colspan="1" rowspan="1" class="jbt">ジョブターミナル</th><td colspan="1" rowspan="1"><span id="scoutCntEmploy" class="red">参照のみ</span></td><th colspan="1" rowspan="1" class="bj">バイトジャングル</th><td colspan="1" rowspan="1"><span id="scoutCntArbeit" class="">0/10</span></td></tr></table>
<ul><li>【スカウトのご利用について】</li><li>　　折込セットプランのみをご契約のお客様は、上記ご利用状況が「参照のみ」と表示され、スカウト検索のみがご利用いただける状態となっております。</li><li>　　登録者に対する実際のスカウトアクションには、テキストプラン以上のネットプランまたは折込セットグレードアッププランのご契約が必要となります。</li><li>　　ご不明な点がございましたら、弊社担当営業までお問合せ下さい。</li></ul>
</div>

<div class="scout-nav jbt">
<ul><li><img src="/sponsor/images/parts/nav_jbt_on.png" height="46" alt="ジョブターミナル" width="170" /></li><li><a shape="rect" href="indexbj.html?mode=a"><img src="/sponsor/images/parts/nav_bj.png" class="js-hoverSwap" height="46" alt="バイトジャングル" width="170" /></a></li><li><a shape="rect" href="scoutSituation.html"><img src="/sponsor/images/parts/nav_scout.png" class="js-hoverSwap" height="46" alt="スカウト履歴" width="170" /></a></li><li><a shape="rect" href="fixedscout.html"><img src="/sponsor/images/parts/nav_fix.png" class="js-hoverSwap" height="46" alt="定型文管理" width="170" /></a></li></ul>
</div>


<form id="selectForm" name="selectForm" method="post" enctype="application/x-www-form-urlencoded" action="/sponsor/scoutManagement/searchResult.html">
<input name="mode" type="hidden" value="e" />
<input name="searchBtn" type="hidden" value="true" />
<div class="prt-articleUnitA jbthead">
<div class="head">
<p class="headwhite">スカウト検索</p>
<!-- /.head --></div>

<div class="body">
<div class="articleTable">
<table><col width="130" span="1" /><col width="648" span="1" /><!--<tr>
<th>登録サイト</th>
<td><select>
	<option selected="selected">必ず選択してください</option>
	<option>ジョブターミナル</option>
	<option>バイトジャングル</option>
</select></td>
</tr>
<tr>
<th>スカウト状況</th>
<td><select>
	<option selected="selected">必ず選択してください</option>
	<option>未対応</option>
	<option>メール済み</option>
	<option>電話済み</option>
	<option>予約済み</option>
	<option>登録済み</option>
	<option>紹介中</option>
	<option>決定</option>
	<option>NG</option>

</select></td>
</tr>--><tr><th colspan="1" rowspan="1">年齢</th><td colspan="1" rowspan="1"><select id="ageFrom" name="selectForm:ageFrom" size="1" name="ageFrom"><option value="" selected="selected">指定しない</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option></select> 〜 <select id="ageTo" name="selectForm:ageTo" size="1" name="ageTo"><option value="" selected="selected">指定しない</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option></select>&nbsp;<dfn>歳</dfn></td></tr><tr><th colspan="1" rowspan="1">性別</th><td colspan="1" rowspan="1"><select id="gender" name="selectForm:gender" size="1" name="gender"><option value="" selected="selected">指定しない</option><option value="男性">男性</option><option value="女性">女性</option></select>
</td></tr><!--
<tr>
<th>住所</th>
<td><input type="text" value="" title="" class="textboxA" /></td>
</tr>
--><tr><th colspan="1" rowspan="1">最終学歴</th><td colspan="1" rowspan="1"><select id="school" name="selectForm:school" size="1" name="school"><option value="" selected="selected">指定しない</option><option value="4年制大学">4年制大学</option><option value="短期大学">短期大学</option><option value="大学院">大学院</option><option value="専門学校">専門学校</option><option value="高等学校">高等学校</option><option value="高等専門学校">高等専門学校</option><option value="中学校">中学校</option><option value="その他">その他</option></select></td></tr><tr><th colspan="1" rowspan="1">経験ポジション</th><td colspan="1" rowspan="1"><select id="position" name="selectForm:position" size="1" name="position"><option value="" selected="selected">指定しない</option><option value="役職経験なし">役職経験なし</option><option value="主任">主任</option><option value="係長">係長</option><option value="課長">課長</option><option value="次長">次長</option><option value="部長">部長</option><option value="会社役員">会社役員</option><option value="取締役">取締役</option><option value="社長">社長</option><option value="その他管理職">その他管理職</option></select>&nbsp;<dfn>以上</dfn></td></tr><tr><th colspan="1" rowspan="1">希望雇用形態</th><td colspan="1" rowspan="1"><select id="wishEmploymentPattern" name="selectForm:wishEmploymentPattern" size="1" name="wishEmploymentPattern"><option value="" selected="selected">指定しない</option><option value="正社員">正社員</option><option value="契約社員">契約社員</option><option value="業務委託">業務委託</option><option value="嘱託社員">嘱託社員</option><option value="準社員">準社員</option></select></td></tr><tr><th colspan="1" rowspan="1">希望職種</th><td colspan="1" rowspan="1">
<dl class="editUnit"><dt><a shape="rect" id="selJob" href="../subPage/selectJobChangeType.html?newwindow=true&mode=m&TB_iframe=true&height=400&width=790" class="thickbox"><img src="/sponsor/images/common/btn_edit_01.png" class="js-hoverBlink" height="19" alt="編集する" width="80" /></a></dt><dd>
							<textarea id="labelJob" name="selectForm:labelJob" readonly="readonly" cols="100" rows="3" style="border:0;background-color:#ffffff;color:#000000;"></textarea>
      						<input type="hidden" id="jobChangeOffice__c" name="selectForm:jobChangeOffice__c" value="" />
      						<input type="hidden" id="jobChangeBusiness__c" name="selectForm:jobChangeBusiness__c" value="" />
      						<input type="hidden" id="jobChangeProfession__c" name="selectForm:jobChangeProfession__c" value="" />
      						<input type="hidden" id="jobChangeDriver__c" name="selectForm:jobChangeDriver__c" value="" />
      						<input type="hidden" id="jobChangeManagement__c" name="selectForm:jobChangeManagement__c" value="" />
      						<input type="hidden" id="jobChangeSecurity__c" name="selectForm:jobChangeSecurity__c" value="" />
      						<input type="hidden" id="jobChangeOperator__c" name="selectForm:jobChangeOperator__c" value="" />
      						<input type="hidden" id="jobChangeSystem__c" name="selectForm:jobChangeSystem__c" value="" />
      						<input type="hidden" id="jobChangeIT__c" name="selectForm:jobChangeIT__c" value="" />
      						<input type="hidden" id="jobChangeConstruction__c" name="selectForm:jobChangeConstruction__c" value="" />
      						<input type="hidden" id="jobChangeMedical__c" name="selectForm:jobChangeMedical__c" value="" />
      						<input type="hidden" id="jobChangeFood__c" name="selectForm:jobChangeFood__c" value="" />
      						<input type="hidden" id="jobChangeSales__c" name="selectForm:jobChangeSales__c" value="" />
      						<input type="hidden" id="jobChangeFashion__c" name="selectForm:jobChangeFashion__c" value="" />
      						<input type="hidden" id="jobChangeService__c" name="selectForm:jobChangeService__c" value="" />
      						<input type="hidden" id="jobChangeAmusement__c" name="selectForm:jobChangeAmusement__c" value="" />
      						<input type="hidden" id="jobChangeSport__c" name="selectForm:jobChangeSport__c" value="" />
      						<input type="hidden" id="jobChangeCosmetic__c" name="selectForm:jobChangeCosmetic__c" value="" />
      						<input type="hidden" id="jobChangeCreative__c" name="selectForm:jobChangeCreative__c" value="" />
      						<input type="hidden" id="jobChangeEducator__c" name="selectForm:jobChangeEducator__c" value="" />
      						<input type="hidden" id="jobChangeMaintenance__c" name="selectForm:jobChangeMaintenance__c" value="" />
      						<input type="hidden" id="jobChangeOther__c" name="selectForm:jobChangeOther__c" value="" />
</dd></dl>
</td></tr><tr><th colspan="1" rowspan="1">希望勤務地</th><td colspan="1" rowspan="1">
<dl class="editUnit"><dt><a shape="rect" id="selArea" href="../subPage/selectJobArea.html?newwindow=true&mode=m&TB_iframe=true&height=400&width=790" class="thickbox"><img src="/sponsor/images/common/btn_edit_01.png" class="js-hoverBlink" height="19" alt="編集する" width="80" /></a></dt><dd>
							<textarea id="labelArea" name="selectForm:labelArea" readonly="readonly" cols="100" rows="5" style="border:0;background-color:#ffffff;color:#000000;"></textarea>
      						<input type="hidden" id="location01_1__c" name="selectForm:location01_1__c" value="" />
      						<input type="hidden" id="location01_2__c" name="selectForm:location01_2__c" value="" />
      						<input type="hidden" id="location02_1__c" name="selectForm:location02_1__c" value="" />
      						<input type="hidden" id="location03_1__c" name="selectForm:location03_1__c" value="" />
      						<input type="hidden" id="location05_1__c" name="selectForm:location05_1__c" value="" />
      						<input type="hidden" id="location06_1__c" name="selectForm:location06_1__c" value="" />
      						<input type="hidden" id="location07_1__c" name="selectForm:location07_1__c" value="" />
      						<input type="hidden" id="location13_1__c" name="selectForm:location13_1__c" value="" />
      						<input type="hidden" id="location13_2__c" name="selectForm:location13_2__c" value="" />
      						<input type="hidden" id="location11_1__c" name="selectForm:location11_1__c" value="" />
      						<input type="hidden" id="location11_2__c" name="selectForm:location11_2__c" value="" />
      						<input type="hidden" id="location12_1__c" name="selectForm:location12_1__c" value="" />
      						<input type="hidden" id="location12_2__c" name="selectForm:location12_2__c" value="" />
      						<input type="hidden" id="location14_1__c" name="selectForm:location14_1__c" value="" />
      						<input type="hidden" id="location14_2__c" name="selectForm:location14_2__c" value="" />
      						<input type="hidden" id="location14_3__c" name="selectForm:location14_3__c" value="" />
      						<input type="hidden" id="location14_4__c" name="selectForm:location14_4__c" value="" />
      						<input type="hidden" id="location08_1__c" name="selectForm:location08_1__c" value="" />
      						<input type="hidden" id="location09_1__c" name="selectForm:location09_1__c" value="" />
      						<input type="hidden" id="location10_1__c" name="selectForm:location10_1__c" value="" />
      						<input type="hidden" id="location04_1__c" name="selectForm:location04_1__c" value="" />
      						<input type="hidden" id="location04_2__c" name="selectForm:location04_2__c" value="" />
      						<input type="hidden" id="location99_1__c" name="selectForm:location99_1__c" value="" />

							<input type="hidden" id="location15_1__c" name="selectForm:location15_1__c" value="" />
							<input type="hidden" id="location15_2__c" name="selectForm:location15_2__c" value="" />
							<input type="hidden" id="location16_1__c" name="selectForm:location16_1__c" value="" />
							<input type="hidden" id="location17_1__c" name="selectForm:location17_1__c" value="" />
							<input type="hidden" id="location18_1__c" name="selectForm:location18_1__c" value="" />
							<input type="hidden" id="location19_1__c" name="selectForm:location19_1__c" value="" />
							<input type="hidden" id="location20_1__c" name="selectForm:location20_1__c" value="" />
							<input type="hidden" id="location21_1__c" name="selectForm:location21_1__c" value="" />
							<input type="hidden" id="location22_1__c" name="selectForm:location22_1__c" value="" />
							<input type="hidden" id="location22_2__c" name="selectForm:location22_2__c" value="" />
							<input type="hidden" id="location22_3__c" name="selectForm:location22_3__c" value="" />
							<input type="hidden" id="location23_1__c" name="selectForm:location23_1__c" value="" />
							<input type="hidden" id="location23_2__c" name="selectForm:location23_2__c" value="" />
							<input type="hidden" id="location24_1__c" name="selectForm:location24_1__c" value="" />
							<input type="hidden" id="location25_1__c" name="selectForm:location25_1__c" value="" />
							<input type="hidden" id="location26_1__c" name="selectForm:location26_1__c" value="" />
							<input type="hidden" id="location26_2__c" name="selectForm:location26_2__c" value="" />
							<input type="hidden" id="location27_1__c" name="selectForm:location27_1__c" value="" />
							<input type="hidden" id="location27_2__c" name="selectForm:location27_2__c" value="" />
							<input type="hidden" id="location27_3__c" name="selectForm:location27_3__c" value="" />
							<input type="hidden" id="location28_1__c" name="selectForm:location28_1__c" value="" />
							<input type="hidden" id="location28_2__c" name="selectForm:location28_2__c" value="" />
							<input type="hidden" id="location29_1__c" name="selectForm:location29_1__c" value="" />
							<input type="hidden" id="location30_1__c" name="selectForm:location30_1__c" value="" />
							<input type="hidden" id="location31_1__c" name="selectForm:location31_1__c" value="" />
							<input type="hidden" id="location32_1__c" name="selectForm:location32_1__c" value="" />
							<input type="hidden" id="location33_1__c" name="selectForm:location33_1__c" value="" />
							<input type="hidden" id="location33_2__c" name="selectForm:location33_2__c" value="" />
							<input type="hidden" id="location34_1__c" name="selectForm:location34_1__c" value="" />
							<input type="hidden" id="location34_2__c" name="selectForm:location34_2__c" value="" />
							<input type="hidden" id="location35_1__c" name="selectForm:location35_1__c" value="" />
							<input type="hidden" id="location36_1__c" name="selectForm:location36_1__c" value="" />
							<input type="hidden" id="location37_1__c" name="selectForm:location37_1__c" value="" />
							<input type="hidden" id="location38_1__c" name="selectForm:location38_1__c" value="" />
							<input type="hidden" id="location39_1__c" name="selectForm:location39_1__c" value="" />
							<input type="hidden" id="location40_1__c" name="selectForm:location40_1__c" value="" />
							<input type="hidden" id="location40_2__c" name="selectForm:location40_2__c" value="" />
							<input type="hidden" id="location40_3__c" name="selectForm:location40_3__c" value="" />
							<input type="hidden" id="location41_1__c" name="selectForm:location41_1__c" value="" />
							<input type="hidden" id="location42_1__c" name="selectForm:location42_1__c" value="" />
							<input type="hidden" id="location43_1__c" name="selectForm:location43_1__c" value="" />
							<input type="hidden" id="location44_1__c" name="selectForm:location44_1__c" value="" />
							<input type="hidden" id="location45_1__c" name="selectForm:location45_1__c" value="" />
							<input type="hidden" id="location46_1__c" name="selectForm:location46_1__c" value="" />
							<input type="hidden" id="location47_1__c" name="selectForm:location47_1__c" value="" />
</dd></dl>
</td></tr><tr><th colspan="1" rowspan="1">所有資格</th><td colspan="1" rowspan="1">
<dl class="editUnit"><dt><a shape="rect" id="selectLicence" href="../subPage/selectJobSkill.html?newwindow=true&mode=m&TB_iframe=true&height=400&width=790" class="thickbox"><img src="/sponsor/images/common/btn_edit_01.png" class="js-hoverBlink" height="19" alt="編集する" width="80" /></a></dt><dd>
							<textarea id="labelSkill" name="selectForm:labelSkill" readonly="readonly" cols="100" rows="5" style="border:0;background-color:#ffffff;color:#000000;"></textarea>
      						<input type="hidden" id="licenceDriver__c" name="selectForm:licenceDriver__c" value="" />
      						<input type="hidden" id="licenceWelfare__c" name="selectForm:licenceWelfare__c" value="" />
      						<input type="hidden" id="licenceMedical__c" name="selectForm:licenceMedical__c" value="" />
      						<input type="hidden" id="licenceEstate__c" name="selectForm:licenceEstate__c" value="" />
      						<input type="hidden" id="licenceField__c" name="selectForm:licenceField__c" value="" />
      						<input type="hidden" id="licenceSecurity__c" name="selectForm:licenceSecurity__c" value="" />
      						<input type="hidden" id="licenceIT__c" name="selectForm:licenceIT__c" value="" />
      						<input type="hidden" id="licenceLinguist__c" name="selectForm:licenceLinguist__c" value="" />
      						<input type="hidden" id="licenceFood__c" name="selectForm:licenceFood__c" value="" />
      						<input type="hidden" id="licenceEducator__c" name="selectForm:licenceEducator__c" value="" />
      						<input type="hidden" id="licenceBusiness__c" name="selectForm:licenceBusiness__c" value="" />
      						<input type="hidden" id="licenceLife__c" name="selectForm:licenceLife__c" value="" />
      						<input type="hidden" id="licenceProfession__c" name="selectForm:licenceProfession__c" value="" />
      						<input type="hidden" id="licenceCosmetic__c" name="selectForm:licenceCosmetic__c" value="" />
</dd></dl>
</td></tr><tr><th colspan="1" rowspan="1">その他</th><td colspan="1" rowspan="1"><label class="checkbox"><input type="checkbox" id="driverLicense" name="selectForm:driverLicense" value="true" type="checkbox" />
普通運転免許有り</label></td></tr><tr><th colspan="1" rowspan="1">キーワード</th><td colspan="1" rowspan="1"><input type="text" id="keyWord" name="selectForm:keyWord" value="" class="textboxB" /><p>（住所、職歴など）※キーワード検索で得られる結果は200件までとなります。</p></td></tr><tr><td colspan="2" rowspan="1">
<p class="button"><input src="../images/parts/articleUnitA_typeB_btn_04.png" alt="絞り込む" type="image" class="js-hoverSwap" /></p>
</td></tr></table>
<!-- /.articleTable --></div>
<!-- /.body --></div>
<!-- /.prt-articleUnitA --></div>
<div class="errorMessage02">




</div><!-- /.errorMessage02 -->
<p>【お願い】<br clear="none" />
現在、スカウトの選択チェックは「スカウトする」をクリックせずにページを移動すると解除されてしまいます。<br clear="none" />
大変お手数では御座いますが、表示ページ毎のスカウトをお願い致します。</p>

<input type="hidden" name="selectForm/scoutManagement/index.html" value="selectForm" /></form>
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
  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAACXQAEF9pZDEyOmlzRW1wU2NvdXRzcgARamF2YS5sYW5nLkJvb2xlYW7NIHKA1Zz67gIAAVoABXZhbHVleHAAdAATX2lkMTI6aXNOb3RFbXBTY291dHNxAH4ABAF0ABRfaWQxMjppc0lucHV0U3BvbnNvcnEAfgAFdAAOX2lkMTI6aXNBdXRoZWRxAH4AB3QADWlzRGlzcGxheU9ubHlxAH4AB3QAEXNlbGVjdEZvcm06aXNPdmVycQB+AAV0ABBzZWxlY3RGb3JtOmlzTm9ucQB+AAV0ABlzZWxlY3RGb3JtOmlzTm9uQ29uZGl0aW9ucQB+AAV0ABZzZWxlY3RGb3JtOmlzRXhpc3REYXRhcQB+AAV4AA==' />";
}

//-->
</script></body></html>
