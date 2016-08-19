<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>スカウト管理｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/scoutManagement/indexbj.html" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/scoutManagement/indexbj.html" xml:space="preserve"></script><link rel="stylesheet" href="/sponsor/css/thickbox.css" media="all" type="text/css" baseViewId="/scoutManagement/indexbj.html" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/thickbox.js" charset="utf-8" baseViewId="/scoutManagement/indexbj.html" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" baseViewId="/scoutManagement/indexbj.html" xml:space="preserve">
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

<div class="scout-nav bj">
<ul><li><a shape="rect" href="index?mode=e"><img src="/sponsor/images/parts/nav_jbt.png" class="js-hoverSwap" height="46" alt="ジョブターミナル" width="170" /></a></li><li><img src="/sponsor/images/parts/nav_bj_on.png" height="46" alt="バイトジャングル" width="170" /></li><li><a shape="rect" href="scoutsituation"><img src="/sponsor/images/parts/nav_scout.png" class="js-hoverSwap" height="46" alt="スカウト履歴" width="170" /></a></li><li><a shape="rect" href="fixedscout"><img src="/sponsor/images/parts/nav_fix.png" class="js-hoverSwap" height="46" alt="定型文管理" width="170" /></a></li></ul>
</div>


<form id="selectForm" name="selectForm" method="post" enctype="application/x-www-form-urlencoded" submitted="true" action="/sponsor/scoutManagement/indexbj">
<input name="mode" type="hidden" value="a" />
<input name="searchBtn" type="hidden" value="true" />
<div class="prt-articleUnitA bjhead">
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
</tr>--><tr><th colspan="1" rowspan="1">年齢</th><td colspan="1" rowspan="1"><select id="ageFrom" name="selectForm:ageFrom" size="1" name="ageFrom"><option value="">指定しない</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40" selected="selected">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option></select> 〜 <select id="ageTo" name="selectForm:ageTo" size="1" name="ageTo"><option value="">指定しない</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51" selected="selected">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option></select>&nbsp;<dfn>歳</dfn></td></tr><tr><th colspan="1" rowspan="1">性別</th><td colspan="1" rowspan="1"><select id="gender" name="selectForm:gender" size="1" name="gender"><option value="" selected="selected">指定しない</option><option value="男性">男性</option><option value="女性">女性</option></select>
</td></tr><!--
<tr>
<th>住所</th>
<td><input type="text" value="" title="" class="textboxA" /></td>
</tr>
--><tr><th colspan="1" rowspan="1">最終学歴</th><td colspan="1" rowspan="1"><select id="school" name="selectForm:school" size="1" name="school"><option value="" selected="selected">指定しない</option><option value="4年制大学">4年制大学</option><option value="短期大学">短期大学</option><option value="大学院">大学院</option><option value="専門学校">専門学校</option><option value="高等学校">高等学校</option><option value="高等専門学校">高等専門学校</option><option value="中学校">中学校</option><option value="その他">その他</option></select></td></tr><tr><th colspan="1" rowspan="1">経験ポジション</th><td colspan="1" rowspan="1"><select id="position" name="selectForm:position" size="1" name="position"><option value="" selected="selected">指定しない</option><option value="役職経験なし">役職経験なし</option><option value="主任">主任</option><option value="係長">係長</option><option value="課長">課長</option><option value="次長">次長</option><option value="部長">部長</option><option value="会社役員">会社役員</option><option value="取締役">取締役</option><option value="社長">社長</option><option value="その他管理職">その他管理職</option></select>&nbsp;<dfn>以上</dfn></td></tr><tr><th colspan="1" rowspan="1">希望雇用形態</th><td colspan="1" rowspan="1"><select id="wishEmploymentPattern" name="selectForm:wishEmploymentPattern" size="1" name="wishEmploymentPattern"><option value="" selected="selected">指定しない</option><option value="アルバイト">アルバイト</option><option value="パート">パート</option><option value="派遣社員">派遣社員</option><option value="紹介制">紹介制</option><option value="業務委託">業務委託</option><option value="業務請負">業務請負</option><option value="登録制">登録制</option><option value="期間従業員">期間従業員</option><option value="契約社員">契約社員</option><option value="嘱託社員">嘱託社員</option><option value="準社員">準社員</option></select></td></tr><tr><th colspan="1" rowspan="1">希望職種</th><td colspan="1" rowspan="1">
<dl class="editUnit"><dt><a shape="rect" id="selJob" href="../subPage/selectJobArbeitType.html?newwindow=true&mode=m&TB_iframe=true&height=400&width=790" class="thickbox"><img src="/sponsor/images/common/btn_edit_01.png" class="js-hoverBlink" height="19" alt="編集する" width="80" /></a></dt><dd>
							<textarea id="labelJob" name="selectForm:labelJob" readonly="readonly" cols="100" rows="3" style="border:0;background-color:#ffffff;color:#000000;"></textarea>
      						<input type="hidden" id="jobArbeitFood__c" name="selectForm:jobArbeitFood__c" value="" />
      						<input type="hidden" id="jobArbeitSales__c" name="selectForm:jobArbeitSales__c" value="" />
      						<input type="hidden" id="jobArbeitService__c" name="selectForm:jobArbeitService__c" value="" />
      						<input type="hidden" id="jobArbeitMedical__c" name="selectForm:jobArbeitMedical__c" value="" />
      						<input type="hidden" id="jobArbeitOffice__c" name="selectForm:jobArbeitOffice__c" value="" />
      						<input type="hidden" id="jobArbeitBusiness__c" name="selectForm:jobArbeitBusiness__c" value="" />
      						<input type="hidden" id="jobArbeitDriver__c" name="selectForm:jobArbeitDriver__c" value="" />
      						<input type="hidden" id="jobArbeitOperator__c" name="selectForm:jobArbeitOperator__c" value="" />
      						<input type="hidden" id="jobArbeitConstruction__c" name="selectForm:jobArbeitConstruction__c" value="" />
      						<input type="hidden" id="jobArbeitMaintenance__c" name="selectForm:jobArbeitMaintenance__c" value="" />
      						<input type="hidden" id="jobArbeitIT__c" name="selectForm:jobArbeitIT__c" value="" />
      						<input type="hidden" id="jobArbeitScience__c" name="selectForm:jobArbeitScience__c" value="" />
      						<input type="hidden" id="jobArbeitCreative__c" name="selectForm:jobArbeitCreative__c" value="" />
      						<input type="hidden" id="jobArbeitEducator__c" name="selectForm:jobArbeitEducator__c" value="" />
      						<input type="hidden" id="jobArbeitNight__c" name="selectForm:jobArbeitNight__c" value="" />
      						<input type="hidden" id="jobArbeitOther__c" name="selectForm:jobArbeitOther__c" value="" />
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
<p class="button"><input src="../images/parts/articleUnitA_typeB_btn_03.png" alt="絞り込む" type="image" class="js-hoverSwap" /></p>
</td></tr></table>
<!-- /.articleTable --></div>
<!-- /.body --></div>
<!-- /.prt-articleUnitA --></div>
<div class="errorMessage02">




</div><!-- /.errorMessage02 -->

<span id="isExistData">
<div class="section">
	<div class="prt-actionBar">



		<div class="inner">
			<div class="actionUnit">
			<p class="result">【<dfn>該当結果</dfn>　<strong><span id="allRecordCount" class="molecule">198</span></strong>件 <span id="currentRecordCount_Start">1</span>-<span id="currentRecordCount">20</span>件を表示】</p>
			</div>
			<div class="actionUnit-right"><p class="result">
<select id="displayCnt" name="selectForm:displayCnt" size="1" onchange="submit(this.form)" name="displayCnt"><option value="10">10</option><option value="20" selected="selected">20</option><option value="30">30</option><option value="50">50</option><option value="100">100</option></select>
件ずつ表示する</p>
			</div>
		</div>


		<div class="inner">
			<div class="actionUnit">
			<ul class="buttonUnit"><span id="isNotDisplayOnly-02">
				<li class="checkbox"><a shape="rect"><input type="checkbox" class="all" value="" />▼</a></li>
				<!-- <li><a href="#" onclick="dele(); return false;"><img src="../images/common/btn_delete_01.png" alt="一括削除" width="87" height="21" class="js-hoverSwap" /></a></li>
				<li><a href="#"><img src="../images/common/btn_move_01.png" alt="検討中フォルダへ" width="120" height="21" class="js-hoverSwap" /></a></li> -->
				<li><input type="image" id="doScout" name="selectForm:doScout" src="/sponsor/images/common/btn_scout_01.png" class="js-hoverSwap" height="21" onclick="return checkScout();" alt="スカウトする" width="116" /></li>
				</span></ul>
			</div><!-- /.actionUnit -->





				<div class="pagenation">
					<dl><dt>ページ：</dt>
						<span id="isCurrentPage">
						<dd class="current"><span id="page-1">1</span></dd>
						</span>



						<span id="isNotCurrentPage">

						<dd><a id="goListPage" href="indexbj?searchCondition=searchInfo&amp;mode=a&amp;page=2" shape="rect"><span id="page-2">2</span></a></dd>

						</span>


						<span id="isNotCurrentPage">

						<dd><a id="goListPage" href="indexbj?searchCondition=searchInfo&amp;mode=a&amp;page=3" shape="rect"><span id="page-2">3</span></a></dd>

						</span>


						<span id="isNotCurrentPage">

						<dd><a id="goListPage" href="indexbj?searchCondition=searchInfo&amp;mode=a&amp;page=4" shape="rect"><span id="page-2">4</span></a></dd>

						</span>


						<span id="isNotCurrentPage">

						<dd><a id="goListPage" href="indexbj?searchCondition=searchInfo&amp;mode=a&amp;page=5" shape="rect"><span id="page-2">5</span></a></dd>

						</span>
						<span id="isNotPrevPage">
						<dd class="prev"><img src="/sponsor/images/parts/pagenation_btn_prev_02.png" height="25" width="26" /></dd>
						</span><span id="isNextPage">

						<dd class="next"><a id="goNextPage" href="indexbj?searchCondition=searchInfo&amp;mode=a&amp;page=2" shape="rect"><img src="/sponsor/images/parts/pagenation_btn_next_01.png" class="js-hoverBlink" height="25" width="26" /></a></dd>

						</span></dl>
			</div><!-- /.pagenation -->

<!-- /.inner --></div>
<!-- /.prt-actionBar --></div>



<tbody id="scoutItems"><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000363787" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000363787" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">45</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">女性</span></td><td colspan="1" rowspan="1"><span id="province__c">東京都</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">なし</span></td><td colspan="1" rowspan="1"><span id="position__c">役職経験なし</span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">4年制大学</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">芝浦工業大学</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">パート</span></td><td colspan="1" rowspan="1"><span id="wishJob">事務;受付・秘書</span></td><td colspan="1" rowspan="1"><span id="wishLocation">中央区;文京区;台東区;墨田区;江東区;足立区;葛飾区</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">職歴
測量精密機器メーカーで営業技術部に所属。取説の作成や顧客サポート
栄養管理ソフトウエア会社の在宅データ入力
巡回健康診断会社での受付
私立大学での試験監督業務

2011年の4月から2016年の3月まで主人の転勤に伴いタイで生活していましたが、この春子供の進学の為に帰国しました。ブランクがありますが子供に手がかからなくなり時間の余裕もできたことから、また仕事を始め、社会と関わりをもち、自分のできることで社会貢献ができたらうれしいと思っています。

よろしくお願いします。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">現場系資格（建築・土木・設備・製造）(測量士・測量士補)</span><br clear="none" /><span id="licenceOther__c">初級シスアド</span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c"></span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000073613" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000073613" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">47</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">男性</span></td><td colspan="1" rowspan="1"><span id="province__c">神奈川県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c">主任</span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">神奈川工業高校</span></td><td colspan="1" rowspan="1"><span id="major__c">電子科</span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">契約社員;準社員;アルバイト</span></td><td colspan="1" rowspan="1"><span id="wishJob">ドライバー;ドライバー助手・配送助手;その他ドライバー・物流系、製造・加工スタッフ、その他建築・建設・土木工事系、その他清掃・警備・設備系;設備スタッフ(配管・空調・電気　他)</span></td><td colspan="1" rowspan="1"><span id="wishLocation">横須賀市;平塚市;鎌倉市;藤沢市;小田原市;茅ヶ崎市;逗子市;三浦市;秦野市;厚木市;大和市;伊勢原市;海老名市;座間市;南足柄市;綾瀬市;その他の市町村;その他;三浦郡;高座郡;中郡;足柄上郡;足柄下郡;愛甲郡、鶴見区;神奈川区;西区;中区;南区;保土ケ谷区;磯子区;金沢区;港北区;戸塚区;港南区;旭区;緑区;瀬谷区;栄区;泉区;青葉区;都筑区;横浜市、川崎区;幸区;中原区;高津区;多摩区;宮前区;麻生区;川崎市、緑区;中央区;南区;相模原市、千代田区;中央区;港区;新宿区;文京区;台東区;墨田区;江東区;品川区;目黒区;大田区;世田谷区;渋谷区;中野区;杉並区;豊島区;北区;荒川区;板橋区;練馬区;足立区;葛飾区;江戸川区;23区、八王子市;立川市;武蔵野市;三鷹市;青梅市;府中市;昭島市;調布市;町田市;小金井市;小平市;日野市;東村山市;国分寺市;国立市;福生市;狛江市;東大和市;清瀬市;東久留米市;武蔵村山市;多摩市;稲城市;羽村市;あきる野市;西東京市;その他の市町村;23区外</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">私は、仕事を覚えるにあたって行動が大事だと考え、積極的に現場対応し、経験不足のところは
自己学習で補い、取り組んでまいりました。
年齢のわりには、積極性があると自負しております。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">運転・操縦系資格(普通二輪免許、海技士・小型船舶操縦士、アマチュア無線技士)、現場系資格（建築・土木・設備・製造）(エックス線作業主任者、危険物取扱者)、警備・メンテナンス・設備系資格(消防設備士、ボイラー技士・ボイラー整備士・小規模ボイラー取扱者、電気工事士・電気工事施工管理技士)</span><br clear="none" /><span id="licenceOther__c">第三種冷凍機械</span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c"></span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000331228" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000331228" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">45</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">男性</span></td><td colspan="1" rowspan="1"><span id="province__c">埼玉県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c">主任</span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業中</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">埼玉県立三郷工業技術高等学校</span></td><td colspan="1" rowspan="1"><span id="major__c">機械科</span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">アルバイト;パート</span></td><td colspan="1" rowspan="1"><span id="wishJob">軽作業(仕分け・梱包・検品等);商品管理;その他軽作業・商品管理・製造系</span></td><td colspan="1" rowspan="1"><span id="wishLocation">大宮区;中央区;浦和区;南区;緑区、川口市;春日部市;草加市;越谷市;蕨市;戸田市;鳩ヶ谷市;和光市;八潮市;三郷市;吉川市、松戸市;野田市;柏市;流山市、墨田区;豊島区;北区;荒川区;足立区;葛飾区</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">中学・高校と６年間陸上競技部に所属し、目標のタイムに向けて練習に励みました。一つに事に継続して打ち込め、粘り強くこつこつと一つのことを最後までやり抜くところが長所です。与えられた仕事をキチンと成し遂げることを常に目指しています。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c"></span><br clear="none" /><span id="licenceOther__c"></span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c">①Auto CAD LT （2D)　②エクセル・ワード　③JW CAD（勉強中）</span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000352783" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000352783" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">43</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">女性</span></td><td colspan="1" rowspan="1"><span id="province__c">東京都</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c">役職経験なし</span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">短期大学</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">大阪国際女子短期大学</span></td><td colspan="1" rowspan="1"><span id="major__c">情報処理学科</span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">契約社員;アルバイト;パート;派遣社員</span></td><td colspan="1" rowspan="1"><span id="wishJob">事務</span></td><td colspan="1" rowspan="1"><span id="wishLocation">千代田区;中央区;港区;新宿区;江東区;江戸川区</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">一般事務は様々（経理、総務、人事労務）経験しています。
仕事はきっちりこなすタイプです。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c"></span><br clear="none" /><span id="licenceOther__c">簿記２級</span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c">一般事務（経理、総務、人事労務）は経験しています。

子供が小学校入学を機に再就職を希望し、ブランクはありますが頑張りたいと思っております。

8：30～の短時間シフトを希望します。</span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000114548" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000114548" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">41</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">女性</span></td><td colspan="1" rowspan="1"><span id="province__c">千葉県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">なし</span></td><td colspan="1" rowspan="1"><span id="position__c"></span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">千葉県松戸市立松戸高等学校</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">正社員</span></td><td colspan="1" rowspan="1"><span id="wishJob">事務;データ入力・ヘルプデスク</span></td><td colspan="1" rowspan="1"><span id="wishLocation">土浦市・かすみがうら市・つくば市;取手市・龍ヶ崎市・牛久市・稲敷市、草加市;蕨市;八潮市;三郷市;吉川市、市川市;船橋市;松戸市;柏市;流山市;我孫子市、千代田区;中央区;新宿区;文京区;台東区;豊島区;北区;荒川区;足立区;葛飾区</span></td><td colspan="1" rowspan="1"><span id="selfPr__c"></span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c"></span><br clear="none" /><span id="licenceOther__c"></span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c"></span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000021505" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000021505" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">41</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">女性</span></td><td colspan="1" rowspan="1"><span id="province__c">千葉県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c"></span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業中</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">4年制大学</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">専修大学</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">パート</span></td><td colspan="1" rowspan="1"><span id="wishJob">事務</span></td><td colspan="1" rowspan="1"><span id="wishLocation">松戸市;柏市;流山市</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">社会人17年目です。
医療事務のパートをしていました。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">医療系資格(医療事務関連資格)</span><br clear="none" /><span id="licenceOther__c">MOT Word2003、Excel2003、PowerPoint2003</span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c"></span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000077182" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000077182" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">42</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">男性</span></td><td colspan="1" rowspan="1"><span id="province__c">千葉県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c">主任</span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業中</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">4年制大学</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">日本大学　生産工学部　電気工学科</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">正社員</span></td><td colspan="1" rowspan="1"><span id="wishJob">評価・テスト・検査、事務、ドライバー;その他ドライバー・物流系、回路設計・機械設計など;生産技術・製造技術開発など;医療・化学・食品・バイオ技術研究・開発;その他技術系、軽作業(仕分け・梱包・検品等);商品管理;その他軽作業・商品管理・製造系、清掃スタッフ;警備・交通誘導;守衛・駐車場管理など;設備スタッフ(配管・空調・電気等);整備・メカニック;その他清掃・警備・設備系</span></td><td colspan="1" rowspan="1"><span id="wishLocation">鹿嶋市・神栖市・鉾田市・行方市・潮来市、その他の市町村</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">仕事自体に慣れ始めた後、より多くの仕事を手掛ける事が出来るように
する為、自分自身で目標及び必要能力を付けて、人一倍早く行動するように心掛けながら責任を持って１つ１つ仕事を成し遂げて行く事には負けないと思っております。
。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">～所有資格～
・第一種免許（普通自動車）
・第２種電気工事士
・電気保全技能士（２級）

～スキル～
半導体業界での生産技術及び製造技術（品質管理）の仕事してきました。
それに伴って報告書作成等の事務作業も致しました。</span><br clear="none" /><span id="licenceOther__c"></span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c"></span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000250959" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000250959" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">44</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">男性</span></td><td colspan="1" rowspan="1"><span id="province__c">東京都</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c">役職経験なし</span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">都立農産高等学校定時制</span></td><td colspan="1" rowspan="1"><span id="major__c">普通科</span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">契約社員;嘱託社員;準社員;アルバイト;パート;派遣社員;紹介制;期間従業員</span></td><td colspan="1" rowspan="1"><span id="wishJob">ドライバー;ドライバー助手・配送助手;その他ドライバー・物流系、軽作業(仕分け・梱包・検品等);商品管理;フォークリフトなどの資格作業;製造・加工スタッフ;その他軽作業・商品管理・製造系</span></td><td colspan="1" rowspan="1"><span id="wishLocation">八潮市;三郷市;吉川市、銚子市;市川市;船橋市;館山市;木更津市;松戸市;野田市;茂原市;成田市;佐倉市;東金市;旭市;習志野市;柏市;勝浦市;市原市;流山市;八千代市;我孫子市;鴨川市;鎌ケ谷市;君津市;富津市;浦安市;四街道市;袖ケ浦市;八街市;印西市;白井市;富里市;南房総市;匝瑳市;香取市;山武市;いすみ市、中央区;花見川区;稲毛区;若葉区;緑区;美浜区、千代田区;中央区;港区;新宿区;文京区;台東区;墨田区;江東区;品川区;目黒区;大田区;世田谷区;渋谷区;中野区;杉並区;豊島区;北区;荒川区;板橋区;練馬区;足立区;葛飾区;江戸川区</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">運送会社で従事していた時は、梱包作業と配送を中心に業務を行ってきました。
日常の業務では、丁寧な荷物の取り扱いとお客様第一を心掛けてきました。
安全運転と健康管理を心がけ
10年間 無事故無違反 無遅刻無欠勤を達成できました。
　
　商品管理の職に就いた時は、効率的にミス無く作業を進める事ができました。
業務を進める上で段取りを考えての作業効率化とスタッフとの協調関係の重要性を学びました。



《私の長所》
じっくり物事を考えてから行動に移す。



《趣味》
音楽鑑賞
読書
ウォーキング</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">運転・操縦系資格(中型自動車免許、大型自動車免許、原付免許)</span><br clear="none" /><span id="licenceOther__c">大型自動車第二種免許
フォークリフト技能講習修了</span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c">２トン車に約10年乗務
フォークリフト約10年(述べ)
商品管理　約8年</span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000014116" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000014116" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">46</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">男性</span></td><td colspan="1" rowspan="1"><span id="province__c">千葉県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c"></span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業中</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">4年制大学</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">立正大学</span></td><td colspan="1" rowspan="1"><span id="major__c">文学部哲学科</span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">正社員</span></td><td colspan="1" rowspan="1"><span id="wishJob">その他オフィスワーク、ドライバー;その他ドライバー・物流系、営業、軽作業(仕分け・梱包・検品等);商品管理;フォークリフトなどの資格作業、守衛・駐車場管理など;設備スタッフ(配管・空調・電気等);その他清掃・警備・設備系</span></td><td colspan="1" rowspan="1"><span id="wishLocation">市川市;船橋市;松戸市;鎌ケ谷市、千代田区;中央区;港区;新宿区;文京区;台東区;墨田区;江東区;品川区;目黒区;大田区;世田谷区;渋谷区;中野区;杉並区;豊島区;北区;荒川区;板橋区;練馬区;足立区;葛飾区;江戸川区</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">常に５年後には、このような姿でいたいという目標を立て そのため今何をすべきかを考えながら仕事に取り組んできました。その中で、何でもするとか与えられた仕事をするだけでは自己の成長を図ることは難しい。自ら何をすべきか考え行動してこそキャリアが身に付くし、それが自己満足でもいけない、実績を残してこそ本当の達成感が得られると思っています。また、転職に当たっては、これまでのキャリアを活かすのはもちろん、新たな知識や方法などの吸収、環境への順応などにも柔軟に対応できますし、コミュニケーション能力も発揮していけると自負しています。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c"></span><br clear="none" /><span id="licenceOther__c">甲種防火管理者  第２種電気工事士　運行管理者貨物　危険物乙1～6
ボイラー2級　自衛消防技術認定　1種大型自動車　フォークリフト</span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c"></span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000320133" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000320133" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">46</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">男性</span></td><td colspan="1" rowspan="1"><span id="province__c">神奈川県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">なし</span></td><td colspan="1" rowspan="1"><span id="position__c">主任</span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">川崎市立高津高等学校定時制</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c"></span></td><td colspan="1" rowspan="1"><span id="wishJob"></span></td><td colspan="1" rowspan="1"><span id="wishLocation">鶴見区;神奈川区;西区;中区;港北区;緑区;青葉区;都筑区、川崎区;幸区;中原区;高津区;多摩区;宮前区;麻生区;川崎市、大田区;世田谷区、多摩市;稲城市</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">ビルメンテナンスでの経験で仕事の流れや利用者への接し方等、心得ています。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">他にアーク溶接とゴンドラ運転の資格もあります。</span><br clear="none" /><span id="licenceOther__c"></span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c">大学病院・商業施設・オフィスビルでの設備管理
オフィスビル・ホテルでの日常清掃

勤務希望
血圧とアトピーの通院の為に木曜日に休みを希望する為に日曜勤務も可能です。</span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000236861" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000236861" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">46</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">男性</span></td><td colspan="1" rowspan="1"><span id="province__c">東京都</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c"></span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業中</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">群馬県立沼田高等学校</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">契約社員;準社員;アルバイト</span></td><td colspan="1" rowspan="1"><span id="wishJob">ドライバー;ドライバー助手・配送助手、守衛・駐車場管理など</span></td><td colspan="1" rowspan="1"><span id="wishLocation">所沢市;朝霞市;和光市;新座市、中原区;高津区;多摩区;宮前区;麻生区、緑区;中央区;南区;相模原市、千代田区;中央区;港区;新宿区;文京区;台東区;墨田区;江東区;品川区;目黒区;大田区;世田谷区;渋谷区;中野区;杉並区;豊島区;北区;荒川区;板橋区;練馬区;足立区;葛飾区;江戸川区;23区、八王子市;立川市;武蔵野市;三鷹市;青梅市;府中市;昭島市;調布市;町田市;小金井市;小平市;日野市;東村山市;国分寺市;国立市;福生市;狛江市;東大和市;清瀬市;東久留米市;武蔵村山市;多摩市;稲城市;羽村市;あきる野市;西東京市;その他の市町村;23区外</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">ヤマト運輸・セールスドライバー
日本通運・サービスドライバー</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">運転・操縦系資格(中型自動車免許)</span><br clear="none" /><span id="licenceOther__c"></span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c">現在の職場は、周2日休みなので　月7～８勤務で希望します。</span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000362071" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000362071" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">51</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">女性</span></td><td colspan="1" rowspan="1"><span id="province__c">東京都</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">なし</span></td><td colspan="1" rowspan="1"><span id="position__c"></span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">中延学園高等学校</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">契約社員;準社員;パート</span></td><td colspan="1" rowspan="1"><span id="wishJob">事務;その他オフィスワーク、その他フード系、受付(医療・介護施設関連);医療事務・クラーク、軽作業(仕分け・梱包・検品等)</span></td><td colspan="1" rowspan="1"><span id="wishLocation">中野区;杉並区;練馬区、小金井市;小平市</span></td><td colspan="1" rowspan="1"><span id="selfPr__c"></span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c"></span><br clear="none" /><span id="licenceOther__c"></span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c"></span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000364047" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000364047" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">50</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">女性</span></td><td colspan="1" rowspan="1"><span id="province__c">千葉県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c">役職経験なし</span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">千葉県立野田北高等学校（現：野田中央高）</span></td><td colspan="1" rowspan="1"><span id="major__c">普通科</span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">契約社員;嘱託社員;アルバイト;パート;派遣社員</span></td><td colspan="1" rowspan="1"><span id="wishJob">事務、軽作業(仕分け・梱包・検品等);商品管理、スーパー・ドラッグストア・大型量販店スタッフ;その他販売系</span></td><td colspan="1" rowspan="1"><span id="wishLocation">春日部市;越谷市;吉川市;その他の市町村、野田市;柏市;流山市</span></td><td colspan="1" rowspan="1"><span id="selfPr__c"></span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">運転・操縦系資格(普通二輪免許)</span><br clear="none" /><span id="licenceOther__c"></span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c">簿記３級　珠算２級　実用英語検定３級</span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000041922" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000041922" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">47</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">女性</span></td><td colspan="1" rowspan="1"><span id="province__c">東京都</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c"></span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">専門学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">東京都立立川高等職業訓練校</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">準社員</span></td><td colspan="1" rowspan="1"><span id="wishJob">ドライバー</span></td><td colspan="1" rowspan="1"><span id="wishLocation">八王子市;立川市;昭島市;日野市;福生市;あきる野市</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">バスの運転を10年位遣ってました。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">大型二種、路線バスなどを１０年していました。</span><br clear="none" /><span id="licenceOther__c"></span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c">バスやトラックの運転をする仕事が多かったです。</span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000019549" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000019549" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">47</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">男性</span></td><td colspan="1" rowspan="1"><span id="province__c">千葉県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c">その他管理職</span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業中</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">千葉県立松戸秋山高等学校</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">契約社員;嘱託社員;準社員;アルバイト;パート;派遣社員</span></td><td colspan="1" rowspan="1"><span id="wishJob">事務;その他オフィスワーク、ドライバー;ドライバー助手・配送助手;その他ドライバー・物流系、営業;テレフォンアポインター;その他営業系、フォークリフトなどの資格作業、クレーン・玉掛けなどの資格作業;その他建築・建設・土木工事系</span></td><td colspan="1" rowspan="1"><span id="wishLocation">草加市;越谷市;八潮市;三郷市;吉川市、市川市;船橋市;松戸市;野田市;柏市;流山市;我孫子市、足立区;葛飾区</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">資格を活かした仕事に就きたいと思います。よろしくお願いします。
人間関係が仕事ではとても大切だという事を学びました。
自分自身もスキルアップしていきたいです。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">危険物取り扱い乙4　
大型一種免許
小型船舶二級
ファイナンシャルプランナー2級技能士
普通自動車免許
宅地建物取引主任者</span><br clear="none" /><span id="licenceOther__c">フォークリフト免許</span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c">現在、マイクロバスとコミューターワゴン車で企業送迎と障碍者施設様の送迎業務をしています。</span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000363909" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000363909" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">49</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">女性</span></td><td colspan="1" rowspan="1"><span id="province__c">茨城県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c"></span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">専門学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">コンセルヴァトアール尚美</span></td><td colspan="1" rowspan="1"><span id="major__c">電子オルガン科</span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">契約社員;準社員;アルバイト;パート;派遣社員</span></td><td colspan="1" rowspan="1"><span id="wishJob">事務;受付・秘書、教育系アシスタント・試験官;その他教育系</span></td><td colspan="1" rowspan="1"><span id="wishLocation">久喜市;幸手市</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">ヤマハ音楽教室で講師として仕事中での笑顔を崩しません。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c"></span><br clear="none" /><span id="licenceOther__c">TOIC試験監督官補助業務/ピアノ、エレクトーンヤマハ講師資格取得</span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c">試験監督官、クレジットカード受付手続き業務(セディナ、ジャックス、セゾン等)、ピアノ、エｒクトーン講師、基本程度のエクセル、ワード</span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000363157" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000363157" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">48</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">女性</span></td><td colspan="1" rowspan="1"><span id="province__c">東京都</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c"></span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">富山県立富山西高等学校</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">契約社員;パート;紹介制</span></td><td colspan="1" rowspan="1"><span id="wishJob">事務;データ入力・ヘルプデスク</span></td><td colspan="1" rowspan="1"><span id="wishLocation">千代田区;中央区;港区;新宿区;品川区;目黒区;世田谷区;渋谷区、町田市;狛江市</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">・医療事務では、手書きで作成してた資料・伝票類を手書き処理からデジタル処理に移行しました。
・全国から送付されてくる申請書管理において　同一内容を２つのExcelファイルに入力していた業務を１度の入力ですむようにExcelファイルを修正し、期限が過ぎた案件には色が変わる機能を追加しました。
・得意先の電話サポートや、ホームページの更新やソフトウエアのトライアル業務等を通じてコミュニケーション能力やＰＣスキルを身につけてきました。
・新しい職場、職種、環境でも、一刻も早く戦力になれることを常に目指し、業務知識の習得に努めてきました。新しい仕事には積極的に取り組みます。
・積極的な業務改革、改善を求められてきた職場環境での経験を活かし、業務効率化等に繋げる提案を積極的に実行していきます。新しい職務、業務にも積極的にチャレンジしていきます。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">医療系資格(医療事務関連資格)、ＩＴ技術系スキル・資格(ITパスポート)、ビジネス・事務系資格(MOS(MOUS))</span><br clear="none" /><span id="licenceOther__c"></span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c">医療事務（１年８ヶ月）
事務スタッフ（6年7ヶ月）
ＤＴＰオペレータ（教育・研修トレーナー）（8年11ヶ月）
ホームページ更新（４年）（事務スタッフとの兼務）</span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000362705" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000362705" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">47</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">男性</span></td><td colspan="1" rowspan="1"><span id="province__c">埼玉県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c"></span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">千葉県立我孫子高等学校</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">契約社員;準社員;アルバイト</span></td><td colspan="1" rowspan="1"><span id="wishJob">その他ドライバー・物流系、その他軽作業・商品管理・製造系</span></td><td colspan="1" rowspan="1"><span id="wishLocation">緑区;岩槻区、川口市;草加市;越谷市</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">2013年10月～2015年12月
【会社概要】千葉県内の損害保険会社の事後処理
【経験要約】郵便事業で身につけたマネジメントを活かし部下（20名）のスキル把握及び業務管理。
事後処理業務での機械操作。

【職務経験及び業務概要】
2013年10月より現在所属する会社の装置加工担当課長として入社。主にチーム内メンバーのマネジメント（正社員8名パート12名。合計20名）、業務管理（作業スケジュール、要員配置）及び印刷物の入庫、出庫、保管管理。
部下に作業概要を説明するため自ら機械操作を習得し、作業要員として経験を積み、作業手順書の作成を行った。

2015年12月末をもって退職。

【業務実績】
勤務時間管理、作業スキルの平準化により、入社した2013年度にトラブルが１年に５件発生していたところ2014年度には１件。2015年度（12月まで）０件と品質向上を図った。さらに郵便事業で身につけた人材育成や業務管理に磨きをかけた。

【株式会社トップの退職理由】
金融機関における仕事の外製化に伴い受託する仕事が減り、事業の縮小が予定されポストがなくなるため。

1987年12月～2012年3月
【会社概要】郵政省（現：日本郵便株式会社）

【経験要約1987年12月に郵便局採用以来2012年3月までの24年3ヶ月で12局所を経験（郵政局勤務を含む。現在の支社）し、主に郵便業務を担当。役職者になってからは、人材育成や業務管理が主な仕事となり、管理者となってからは、局（支店）経営、人事管理や労務管理等のマネジメントを行いこのスキルを身に付けた。


2012年3月末をもって退職

【業務実績・成果】

・営業力を高めるために支店内に営業自主勉強会を立ち上げさせ、2009年に所属していた支店では、営業に興味はあっても挙積の挙げられなかった社員14名が参加し、ターゲットとしてゆうパック等の荷物を発送する事業所に対し営業し、立ち上げから6か月のうちに全員が挙績した。

【郵便事業での退職理由】
民営化、宅配便統合の混乱により心機一転新たな業種で自己研鑽し、スキルアップを図りたいと考えこと。また、今まで経験してきた営業、人材育成や経営などのマネジメントにさらに磨きをかけ企業の中枢で活躍したいと考えたため。

【自己ＰＲ】
過去の役職を捨て自分の所持している資格を活かし活き活きと仕事をしたいと考えています。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">運転・操縦系資格(大型自動車免許、運行管理者)、現場系資格（建築・土木・設備・製造）(玉掛技能者、ボイラー技士・ボイラー整備士・小規模ボイラー取扱者)</span><br clear="none" /><span id="licenceOther__c"></span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c"></span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000029731" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000029731" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">51</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">女性</span></td><td colspan="1" rowspan="1"><span id="province__c">東京都</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">なし</span></td><td colspan="1" rowspan="1"><span id="position__c">役職経験なし</span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業していない</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">高等学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">私立文華女子高等学校</span></td><td colspan="1" rowspan="1"><span id="major__c">教養科</span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">アルバイト;パート</span></td><td colspan="1" rowspan="1"><span id="wishJob">事務;データ入力・ヘルプデスク;テレフォンオペレーター;その他オフィスワーク</span></td><td colspan="1" rowspan="1"><span id="wishLocation">立川市;昭島市</span></td><td colspan="1" rowspan="1"><span id="selfPr__c"></span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c">ネット検定によりタイピング4級を合格いたしました。</span><br clear="none" /><span id="licenceOther__c"></span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c"></span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div><div class="prt-tableD">
<table><col width="30" span="1" /><col width="798" span="1" /><tr><td colspan="1" rowspan="5" class="checkbox"><label class="checkbox"><span id="isNotDisplayOnly-04"><span id="scoutCheck"><input type="checkbox" id="memberIdCheck" name="memberIdCheck" value="Mem000363769" class="chkmember"/></span></span></label></td><th colspan="1" rowspan="1" class="titleA">
<!--
<p class="info">
<span class="icon"><img src="../images/common/icon_OK_01.gif" alt="回答あり・OK" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_NG_01.gif" alt="回答あり・NG" width="100" height="22" /></span>
<span class="icon"><img src="../images/common/icon_notReply_01.gif" alt="未回答" width="100" height="22" /></span>
<span class="lead">スカウト送信：0000/00/00</span></p>
-->
<p class="button"><a id="goDetail" href="scoutdetail?mode=a&amp;memberId=Mem000363769" shape="rect"><img src="/sponsor/images/common/btn_detail_01.png" class="js-hoverBlink" height="22" alt="詳細をみる" width="130" /></a></p></th></tr><tr><!--1列目--><td colspan="1" rowspan="1"><table><col width="50" span="1" /><col width="60" span="1" /><col width="" span="1" /><col width="50" span="1" /><col width="150" span="1" /><col width="150" span="1" /><tr><th colspan="1" rowspan="1">年齢</th><th colspan="1" rowspan="1">性別</th><th colspan="1" rowspan="1">住所（都道府県）</th><th colspan="1" rowspan="1">普免</th><th colspan="1" rowspan="1">経験ポジション</th><th colspan="1" rowspan="1">現在の勤務状況</th></tr><tr><td colspan="1" rowspan="1"><span id="age">46</span>歳</td><td colspan="1" rowspan="1"><span id="gender__c">女性</span></td><td colspan="1" rowspan="1"><span id="province__c">神奈川県</span><span id="city2__c"></span></td><td colspan="1" rowspan="1"><span id="driverLicenseInfo">有り</span></td><td colspan="1" rowspan="1"><span id="position__c"></span></td><td colspan="1" rowspan="1"><span id="activeWork__c">就業中</span></td></tr></table></td></tr><!--2列目--><tr><td colspan="1" rowspan="1"><table><col width="120" span="1" /><col width="200" span="1" /><col width="" span="1" /><col width="300" span="1" /><tr><th colspan="2" rowspan="1">最終学歴</th><th colspan="1" rowspan="1">学校名</th><th colspan="1" rowspan="1">学部・学科</th></tr><tr><td colspan="2" rowspan="1"><span id="school__c">専門学校</span></td><td colspan="1" rowspan="1"><span id="schoolName__c">アメリカンアカウンティングスクール</span></td><td colspan="1" rowspan="1"><span id="major__c"></span></td></tr></table></td></tr><!--3列目--><tr><td colspan="1" rowspan="1"><table><col width="100" span="1" /><col width="100" span="1" /><col width="" span="1" /><col width="350" span="1" /><tr><th colspan="1" rowspan="1">希望雇用形態</th><th colspan="1" rowspan="1">希望職種</th><th colspan="1" rowspan="1">希望勤務地</th><th colspan="1" rowspan="1">自己PR</th></tr><tr><td colspan="1" rowspan="1"><span id="wishEmpTypeArbeit__c">アルバイト;パート</span></td><td colspan="1" rowspan="1"><span id="wishJob">事務</span></td><td colspan="1" rowspan="1"><span id="wishLocation">大和市、旭区;緑区;瀬谷区;青葉区;都筑区</span></td><td colspan="1" rowspan="1"><span id="selfPr__c">障害を持つ子供の介助、送迎があるため現在経理の仕事を週１で5年目在職中ですが、以前より時間が持てるようになり、経理の仕事がとても好きなので、スキルアップと家計の為にもWワークで週２～
5時間程度の経理、会計事務所の補助の仕事を探しています。</span></td></tr></table></td></tr><!--4列目--><tr><td colspan="1" rowspan="1"><table><col width="150" span="1" /><col width="150" span="1" /><col width="" span="1" /><tr><th colspan="1" rowspan="1">資格</th><th colspan="1" rowspan="1">スキル</th></tr><tr><td colspan="1" rowspan="1" class="text"><span id="licence__c"></span><br clear="none" /><span id="licenceOther__c">英検準2級、日商簿記2級</span></td><td colspan="1" rowspan="1" class="text"><span id="skillPr__c">会計ソフト入力、給与計算ソフト入力、仕訳、社会保険等手続き、入出金管理、エクセル、ワード入力</span></td></tr></table></td></tr></table>
<!-- /.prt-tableD --></div></tbody>



<div class="prt-actionBar">
<div class="inner">
<div class="actionUnit">
<ul class="buttonUnit"><span id="isNotDisplayOnly-03">
<li class="checkbox"><a shape="rect"><input type="checkbox" class="all" value="" />▲</a></li>
<!--<li><a href="#" onclick="dele(); return false;"><img src="../images/common/btn_delete_01.png" alt="一括削除" width="87" height="21" class="js-hoverSwap" /></a></li>
<li><a href="#"><img src="../images/common/btn_move_01.png" alt="検討中フォルダへ" width="120" height="21" class="js-hoverSwap" /></a></li>-->
<li><input type="image" id="doScout-2" name="selectForm:doScout-2" src="/sponsor/images/common/btn_scout_01.png" class="js-hoverSwap" height="21" onclick="return checkScout();" alt="スカウトする" width="116" /></li>
</span></ul>
<!-- /.actionUnit --></div>

				<div class="pagenation">
					<dl><dt>ページ：</dt>
						<span id="isCurrentPage-2">
						<dd class="current"><span id="page-1">1</span></dd>
						</span>



						<span id="isNotCurrentPage-2">

						<dd><a id="goListPage" href="indexbj?searchCondition=searchInfo&amp;mode=a&amp;page=2" shape="rect"><span id="page-2">2</span></a></dd>

						</span>


						<span id="isNotCurrentPage-2">

						<dd><a id="goListPage" href="indexbj?searchCondition=searchInfo&amp;mode=a&amp;page=3" shape="rect"><span id="page-2">3</span></a></dd>

						</span>


						<span id="isNotCurrentPage-2">

						<dd><a id="goListPage" href="indexbj?searchCondition=searchInfo&amp;mode=a&amp;page=4" shape="rect"><span id="page-2">4</span></a></dd>

						</span>


						<span id="isNotCurrentPage-2">

						<dd><a id="goListPage" href="indexbj?searchCondition=searchInfo&amp;mode=a&amp;page=5" shape="rect"><span id="page-2">5</span></a></dd>

						</span>
						<span id="isNotPrevPage-2">
						<dd class="prev"><img src="/sponsor/images/parts/pagenation_btn_prev_02.png" height="25" width="26" /></dd>
						</span><span id="isNextPage-2">

						<dd class="next"><a id="goNextPage" href="indexbj?searchCondition=searchInfo&amp;mode=a&amp;page=2" shape="rect"><img src="/sponsor/images/parts/pagenation_btn_next_01.png" class="js-hoverBlink" height="25" width="26" /></a></dd>

						</span></dl>
			</div><!-- /.pagenation -->
<!-- /.inner --></div>
<!-- /.prt-actionBar --></div>
<!-- /.section --></div>
</span>
<input type="hidden" name="selectForm/scoutManagement/indexbj" value="selectForm" /></form>
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
  span.innerHTML = "<input type='hidden' name='te-conditions' value='rO0ABXNyABdqYXZhLnV0aWwuTGlua2VkSGFzaE1hcDTATlwQbMD7AgABWgALYWNjZXNzT3JkZXJ4cgARamF2YS51dGlsLkhhc2hNYXAFB9rBwxZg0QMAAkYACmxvYWRGYWN0b3JJAAl0aHJlc2hvbGR4cD9AAAAAAABgdwgAAACAAAAAUXQAEF9pZDEyOmlzRW1wU2NvdXRzcgARamF2YS5sYW5nLkJvb2xlYW7NIHKA1Zz67gIAAVoABXZhbHVleHAAdAATX2lkMTI6aXNOb3RFbXBTY291dHNxAH4ABAF0ABRfaWQxMjppc0lucHV0U3BvbnNvcnEAfgAFdAAOX2lkMTI6aXNBdXRoZWRxAH4AB3QADWlzRGlzcGxheU9ubHlxAH4ABXQAEXNlbGVjdEZvcm06aXNPdmVycQB+AAV0ABBzZWxlY3RGb3JtOmlzTm9ucQB+AAV0ABlzZWxlY3RGb3JtOmlzTm9uQ29uZGl0aW9ucQB+AAV0ABZzZWxlY3RGb3JtOmlzRXhpc3REYXRhcQB+AAd0AB5zZWxlY3RGb3JtOmlzTm90RGlzcGxheU9ubHktMDJxAH4AB3QAG3NlbGVjdEZvcm06aXNEaXNwbGF5T25seS0wMnEAfgAFdAAkc2VsZWN0Rm9ybTpwYWdlSXRlbXM6MDppc0N1cnJlbnRQYWdlcQB+AAd0ACdzZWxlY3RGb3JtOnBhZ2VJdGVtczowOmlzTm90Q3VycmVudFBhZ2VxAH4ABXQAJHNlbGVjdEZvcm06cGFnZUl0ZW1zOjE6aXNDdXJyZW50UGFnZXEAfgAFdAAnc2VsZWN0Rm9ybTpwYWdlSXRlbXM6MTppc05vdEN1cnJlbnRQYWdlcQB+AAd0ACRzZWxlY3RGb3JtOnBhZ2VJdGVtczoyOmlzQ3VycmVudFBhZ2VxAH4ABXQAJ3NlbGVjdEZvcm06cGFnZUl0ZW1zOjI6aXNOb3RDdXJyZW50UGFnZXEAfgAHdAAkc2VsZWN0Rm9ybTpwYWdlSXRlbXM6Mzppc0N1cnJlbnRQYWdlcQB+AAV0ACdzZWxlY3RGb3JtOnBhZ2VJdGVtczozOmlzTm90Q3VycmVudFBhZ2VxAH4AB3QAJHNlbGVjdEZvcm06cGFnZUl0ZW1zOjQ6aXNDdXJyZW50UGFnZXEAfgAFdAAnc2VsZWN0Rm9ybTpwYWdlSXRlbXM6NDppc05vdEN1cnJlbnRQYWdlcQB+AAd0ABVzZWxlY3RGb3JtOmlzUHJldlBhZ2VxAH4ABXQAGHNlbGVjdEZvcm06aXNOb3RQcmV2UGFnZXEAfgAHdAAVc2VsZWN0Rm9ybTppc05leHRQYWdlcQB+AAd0ABhzZWxlY3RGb3JtOmlzTm90TmV4dFBhZ2VxAH4ABXQAK3NlbGVjdEZvcm06c2NvdXRJdGVtczowOmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKHNlbGVjdEZvcm06c2NvdXRJdGVtczowOmlzRGlzcGxheU9ubHktMDRxAH4ABXQAK3NlbGVjdEZvcm06c2NvdXRJdGVtczoxOmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKHNlbGVjdEZvcm06c2NvdXRJdGVtczoxOmlzRGlzcGxheU9ubHktMDRxAH4ABXQAK3NlbGVjdEZvcm06c2NvdXRJdGVtczoyOmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKHNlbGVjdEZvcm06c2NvdXRJdGVtczoyOmlzRGlzcGxheU9ubHktMDRxAH4ABXQAK3NlbGVjdEZvcm06c2NvdXRJdGVtczozOmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKHNlbGVjdEZvcm06c2NvdXRJdGVtczozOmlzRGlzcGxheU9ubHktMDRxAH4ABXQAK3NlbGVjdEZvcm06c2NvdXRJdGVtczo0OmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKHNlbGVjdEZvcm06c2NvdXRJdGVtczo0OmlzRGlzcGxheU9ubHktMDRxAH4ABXQAK3NlbGVjdEZvcm06c2NvdXRJdGVtczo1OmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKHNlbGVjdEZvcm06c2NvdXRJdGVtczo1OmlzRGlzcGxheU9ubHktMDRxAH4ABXQAK3NlbGVjdEZvcm06c2NvdXRJdGVtczo2OmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKHNlbGVjdEZvcm06c2NvdXRJdGVtczo2OmlzRGlzcGxheU9ubHktMDRxAH4ABXQAK3NlbGVjdEZvcm06c2NvdXRJdGVtczo3OmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKHNlbGVjdEZvcm06c2NvdXRJdGVtczo3OmlzRGlzcGxheU9ubHktMDRxAH4ABXQAK3NlbGVjdEZvcm06c2NvdXRJdGVtczo4OmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKHNlbGVjdEZvcm06c2NvdXRJdGVtczo4OmlzRGlzcGxheU9ubHktMDRxAH4ABXQAK3NlbGVjdEZvcm06c2NvdXRJdGVtczo5OmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKHNlbGVjdEZvcm06c2NvdXRJdGVtczo5OmlzRGlzcGxheU9ubHktMDRxAH4ABXQALHNlbGVjdEZvcm06c2NvdXRJdGVtczoxMDppc05vdERpc3BsYXlPbmx5LTA0cQB+AAd0AClzZWxlY3RGb3JtOnNjb3V0SXRlbXM6MTA6aXNEaXNwbGF5T25seS0wNHEAfgAFdAAsc2VsZWN0Rm9ybTpzY291dEl0ZW1zOjExOmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKXNlbGVjdEZvcm06c2NvdXRJdGVtczoxMTppc0Rpc3BsYXlPbmx5LTA0cQB+AAV0ACxzZWxlY3RGb3JtOnNjb3V0SXRlbXM6MTI6aXNOb3REaXNwbGF5T25seS0wNHEAfgAHdAApc2VsZWN0Rm9ybTpzY291dEl0ZW1zOjEyOmlzRGlzcGxheU9ubHktMDRxAH4ABXQALHNlbGVjdEZvcm06c2NvdXRJdGVtczoxMzppc05vdERpc3BsYXlPbmx5LTA0cQB+AAd0AClzZWxlY3RGb3JtOnNjb3V0SXRlbXM6MTM6aXNEaXNwbGF5T25seS0wNHEAfgAFdAAsc2VsZWN0Rm9ybTpzY291dEl0ZW1zOjE0OmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKXNlbGVjdEZvcm06c2NvdXRJdGVtczoxNDppc0Rpc3BsYXlPbmx5LTA0cQB+AAV0ACxzZWxlY3RGb3JtOnNjb3V0SXRlbXM6MTU6aXNOb3REaXNwbGF5T25seS0wNHEAfgAHdAApc2VsZWN0Rm9ybTpzY291dEl0ZW1zOjE1OmlzRGlzcGxheU9ubHktMDRxAH4ABXQALHNlbGVjdEZvcm06c2NvdXRJdGVtczoxNjppc05vdERpc3BsYXlPbmx5LTA0cQB+AAd0AClzZWxlY3RGb3JtOnNjb3V0SXRlbXM6MTY6aXNEaXNwbGF5T25seS0wNHEAfgAFdAAsc2VsZWN0Rm9ybTpzY291dEl0ZW1zOjE3OmlzTm90RGlzcGxheU9ubHktMDRxAH4AB3QAKXNlbGVjdEZvcm06c2NvdXRJdGVtczoxNzppc0Rpc3BsYXlPbmx5LTA0cQB+AAV0ACxzZWxlY3RGb3JtOnNjb3V0SXRlbXM6MTg6aXNOb3REaXNwbGF5T25seS0wNHEAfgAHdAApc2VsZWN0Rm9ybTpzY291dEl0ZW1zOjE4OmlzRGlzcGxheU9ubHktMDRxAH4ABXQALHNlbGVjdEZvcm06c2NvdXRJdGVtczoxOTppc05vdERpc3BsYXlPbmx5LTA0cQB+AAd0AClzZWxlY3RGb3JtOnNjb3V0SXRlbXM6MTk6aXNEaXNwbGF5T25seS0wNHEAfgAFdAAec2VsZWN0Rm9ybTppc05vdERpc3BsYXlPbmx5LTAzcQB+AAd0ABtzZWxlY3RGb3JtOmlzRGlzcGxheU9ubHktMDNxAH4ABXQAKHNlbGVjdEZvcm06cGFnZUl0ZW1zLTI6MDppc0N1cnJlbnRQYWdlLTJxAH4AB3QAK3NlbGVjdEZvcm06cGFnZUl0ZW1zLTI6MDppc05vdEN1cnJlbnRQYWdlLTJxAH4ABXQAKHNlbGVjdEZvcm06cGFnZUl0ZW1zLTI6MTppc0N1cnJlbnRQYWdlLTJxAH4ABXQAK3NlbGVjdEZvcm06cGFnZUl0ZW1zLTI6MTppc05vdEN1cnJlbnRQYWdlLTJxAH4AB3QAKHNlbGVjdEZvcm06cGFnZUl0ZW1zLTI6Mjppc0N1cnJlbnRQYWdlLTJxAH4ABXQAK3NlbGVjdEZvcm06cGFnZUl0ZW1zLTI6Mjppc05vdEN1cnJlbnRQYWdlLTJxAH4AB3QAKHNlbGVjdEZvcm06cGFnZUl0ZW1zLTI6Mzppc0N1cnJlbnRQYWdlLTJxAH4ABXQAK3NlbGVjdEZvcm06cGFnZUl0ZW1zLTI6Mzppc05vdEN1cnJlbnRQYWdlLTJxAH4AB3QAKHNlbGVjdEZvcm06cGFnZUl0ZW1zLTI6NDppc0N1cnJlbnRQYWdlLTJxAH4ABXQAK3NlbGVjdEZvcm06cGFnZUl0ZW1zLTI6NDppc05vdEN1cnJlbnRQYWdlLTJxAH4AB3QAF3NlbGVjdEZvcm06aXNQcmV2UGFnZS0ycQB+AAV0ABpzZWxlY3RGb3JtOmlzTm90UHJldlBhZ2UtMnEAfgAHdAAXc2VsZWN0Rm9ybTppc05leHRQYWdlLTJxAH4AB3QAGnNlbGVjdEZvcm06aXNOb3ROZXh0UGFnZS0ycQB+AAV4AA==' />";
}

//-->
</script></body></html>
