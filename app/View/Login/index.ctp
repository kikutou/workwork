<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" xmlns:te="http://www.seasar.org/teeda/extension"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta http-equiv="content-style-type" content="text/css; charset=utf-8" /><meta http-equiv="content-script-type" content="text/javascript" /><title>ログイン｜【企業用管理画面】クリエイトネットで仕事発見</title><link rel="stylesheet" href="/sponsor/css/import.css" media="all" type="text/css" baseViewId="/login/login.html" /><link rel="stylesheet" href="/sponsor/css/notice.css" media="all" type="text/css" baseViewId="/login/login.html" /><link rel="stylesheet" href="/sponsor/css/form.css" media="all" type="text/css" baseViewId="/login/login.html" /><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/loader.js" charset="utf-8" baseViewId="/login/login.html" xml:space="preserve"></script><!-- jqueryCDN --><script type="text/javascript" language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" baseViewId="/login/login.html" xml:space="preserve"></script><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/jquery.ah-placeholder.js" baseViewId="/login/login.html" xml:space="preserve"></script><!-- ▼【ログインページ改善対応】 --><script type="text/javascript" language="JavaScript" src="/sponsor/javascript/jquery.visiblePassWord.js" charset="utf-8" baseViewId="/login/login.html" xml:space="preserve"></script><!-- ▲【ログインページ改善対応】 --><script type="text/javascript" language="JavaScript" baseViewId="/login/login.html" xml:space="preserve">
<!--
function chkCookie( key, tmp1, tmp2, xx1, xx2, xx3 )
{
	tmp = "cookiecheck="+escape('true')+"; ";
	document.cookie = tmp;
	cookiecheck = getCookie("cookiecheck");

	if ( cookiecheck != 'true' )
	{
		tmp = "cookiecheck="+escape('')+"; ";
		document.cookie = tmp;
		location.href = "../error/error003.html";
		return false;

	}else{
		tmp = "cookiecheck="+escape('')+"; ";
		document.cookie = tmp;
		return true;
	}

}

function getCookie( key, tmp1, tmp2, xx1, xx2, xx3 )
{
    tmp1 = " " + document.cookie + ";";
    xx1 = xx2 = 0;
    len = tmp1.length;
    while (xx1 < len)
    {
        xx2 = tmp1.indexOf(";", xx1);
        tmp2 = tmp1.substring(xx1 + 1, xx2);
        xx3 = tmp2.indexOf("=");
        if (tmp2.substring(0, xx3) == key)
        {
            return(unescape(tmp2.substring(xx3 + 1, xx2 - xx1 - 1)));
        }
        xx1 = xx2 + 1;
    }
    return("");
}
-->
</script><script type="text/javascript" language="JavaScript" baseViewId="/login/login.html" xml:space="preserve">
<!--
	$(function(){
		function getPos(obj){
			// IE以外とIE9以上
			if(obj.selectionStart != undefined) {
				return obj.selectionStart;
			}
			// IE8以下
			var range = document.selection.createRange(),
				textRange = obj.createTextRange();
			textRange.setEndPoint('EndToStart', range);
			return textRange.text.length;
		}

		function setPos(obj, p){
			// IE以外とIE9以上
			if(obj.setSelectionRange != undefined){
				obj.setSelectionRange(p, p);
				return;
			}
			// IE8以下
			var range = obj.createTextRange();
			range.collapse(true);
			range.moveEnd('character', p);
			range.moveStart('character', p);
			range.select();
		}

		function setLoginForm($txtForm, reg){
			var trimStrS = function(){
				var value = $txtForm.val(),
					repval = value.replace(reg, ''),
					p = getPos($txtForm.get(0)); //カーソル位置取得

				if (value != repval) {
					p = p - 1;
				}
				$txtForm.val(repval);
				setPos($txtForm.get(0), p); //カーソル位置セット
			};

			$txtForm
				.bind('paste', function(){
					setTimeout(trimStrS, 10);
				})
				.bind('keyup', function(e){
					trimStrS();
				});
		}

		var $id = $('#sponsorID__c');
		setLoginForm($id, /^S+|[^a-zA-Z0-9]/gi);
		setLoginForm($('#password__c'), /[^[¥x20-¥x7F]+$]/g);
		$id.ahPlaceholder({
			placeholderColor : 'silver',
			placeholderAttr : 'placeholder',
			likeApple : true
		});
	});
$(document).ready(function(){
	/*【ログインページ改善対応】*/
	$('.js-visiblePassFlag').visiblePassWord();
});
//-->
</script><style type="text/css" xml:space="preserve">
<!--
	#sponsorID__c, #password__c {
		ime-mode:disabled;
	}
	#sponsorID__c:focus, #password__c:focus {
		background-color:#faffbd;
	}
-->
</style></head>
<body id="home">
	<div id="document">
		<div id="header">
			<div id="headerInner">
				<h1 id="siteTitle"><img src="/sponsor/images/base/logo_siteTitle.png?date160127" height="28" alt="クリエイト管理システム" width="129" /></h1>
			<!-- /#header --></div>
		<!-- /#headerInner --></div>
		<div id="login">
			<div id="loginInner">
				<p id="loginName">こちらはクリエイトが運営する求人サービスの「お客様管理画面」です</p>
			<!-- /#loginInner --></div>
		<!-- /#login --></div>
		<div id="main">
			<div id="contents">
				<form id="loginForm" name="loginForm" method="post" enctype="application/x-www-form-urlencoded" action="/top/index">
					<div class="section">
<!--
						<div id="isSessionOut" te:omittag="true">
							<p class="sessionOutMessage">
							<b>※ログインの有効期限が切れています。お手数ですが、再度ログインからやり直して下さい。</b><br />
							セキュリティー上、画面を開いた状態で一定時間(<span id="sessionTimeoutTime"></span>分以上）動作がない場合、再ログインが必要となります。<br />
							その際、入力中の情報が消えることがございますので<br />
							応募返信やスカウトのご入力にお時間がかかる場合は、事前に本文登録が可能な定型文機能等でこまめに保存していただくようお願いします。
							</p>
						</div>
 -->
						<h2>ログイン</h2>
						<div class="login-form">
							<div>
								
								<dl><dt>企業ID<span>※「S」に続く10桁の数字のみを入力して下さい。</span></dt><dd>
										<div class="input-box">
											<span>S</span><input type="text" id="sponsorID__c" name="loginForm:sponsorID__c" value="" class="textbox" placeholder="（例）1234567890" />
										</div>
										<p class="error-message"></p>
									</dd><dt>パスワード</dt><dd>
										<div class="input-box">
											<input type="password" id="password__c" name="loginForm:password__c" value="" class="password" />
										</div>
										<p class="error-message"></p>
										<!-- 【ログインページ改善対応】 --><p><label><input type="checkbox" id="visiblePassFlag" name="loginForm:visiblePassFlag" value="true" class="js-visiblePassFlag" type="checkbox" />パスワードの文字を表示する</label></p>
									</dd></dl>
								<div class="btn-area">
									<div id="innerLogin" class="btn-wrap"></div>
									<div class="btn-wrap">
										<script type="text/javascript" language="JavaScript" baseViewId="/login/login.html" xml:space="preserve">
											document.getElementById("innerLogin").innerHTML = '<input type="submit" id="doLogin" name="loginForm:doLogin" value="ログインする" class="hoverSwap" onclick="return chkCookie();" />';
										</script>
										<noscript>
											<a shape="rect" href="../error/error004.html"><span class="hoverSwap">ログインする</span></a>
										</noscript>
									</div>
									<p><a shape="rect" href="./reminder.html">パスワードをお忘れの方はこちら</a></p>
								</div>
							</div>
						</div>
						<div class="prt-unitA">
							<div class="inner">
								<div class="inner">
									<div class="section">
										<h3 class="prt-headingD">企業IDをお忘れの方へ</h3>
										<div class="prt-tableB">
											<p>
											企業IDをお忘れの方は大変お手数ですが、サポートデスクへご連絡下さい。<br clear="none" /><br clear="none" />
											株式会社クリエイト「クリエイト　求人情報サイト」サポートデスク<br clear="none" /><br clear="none" />TEL：03-6758-5578　FAX：03-6758-5579<br clear="none" />
											Eメール：<a shape="rect" href="mailto:ddj@create-group.co.jp">ddj@create-group.co.jp</a><br clear="none" /><br clear="none" />
											サポート受付時間<br clear="none" />月〜金・10:00〜12:00/13:00〜17:30<br clear="none" />
											（年末年始・祝日などを除く）
											</p>
										<!-- /.prt-tableB --></div>
									<!-- /.section --></div>
								<!-- /.prt-unitA --></div>
							</div>
						</div>
					<!-- /.section --></div>
				<input type="hidden" name="loginForm/login/login.html" value="loginForm" /></form>
			<!-- /.contents --></div>
		<!-- /.main --></div>
		


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
</body></html>
