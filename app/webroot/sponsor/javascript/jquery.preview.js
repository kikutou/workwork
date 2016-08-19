/* -----------------------------------------
 プレビュー関連JS
 auther:m_kishi@create-group.co.jp
 since:【201504リニューアル対応】新規作成
 memo:リニューアル前後のレイアウト切替に対応する。
   --事前準備--
   ①#ReleaseDateで切替日（リリース日）を設定すること
   ②div.prevModeCtrl ul li [.before|.after] span構成で切替コントロールを設置
   ③#oldStyleのvalue値・・・旧レイアウトCSSパスを設定
   ④#newStyleのvalue値・・・新レイアウトCSSパスを設定
   ⑤、③・④の設定を#detailStyleのhrefへ設定する。
------------------------------------------*/
(function(jQuery) {
	/* 読み込み時設定 */
	$(document).ready(function(){
		//新・旧レイアウトCSSパス取得
		var oldStyle = $('#oldStyle').val();
		var newStyle = $('#newStyle').val();
		//初期設定呼び出し
		_setVCDefaultSetting(oldStyle,newStyle);
		//切替コントロールクリックイベント
		$('div.prevModeCtrl ul li').click(function(){ _toggleVC($(this),oldStyle,newStyle); });
		//募集情報ページリンク生成
		_makeDetailLink();
		//会員機能経由設定
		_chkMemerReq();
	});
	//初期設定
	function _setVCDefaultSetting(oldStyle,newStyle){
		//現在日（日付型）取得
		var toDay = new Date();
		//切替日(文字列)設定
		var strReDate = $('#ReleaseDate').val();
		//切替日（日付型）取得
		var reDate = new Date(strReDate);
		//切替日表示用：フォーマット設定
		var strReDateYYYYMMDD = String(reDate.getFullYear()) + "年" + String(reDate.getMonth()+1) + "月" + String(reDate.getDate()) + "日";
		//フォーマット済：切替日出力
		$('.prevModeCtrl ul li.after span').text(strReDateYYYYMMDD);
		//表示用切替前日（日付型）設定
		var reDateBefore = new Date(strReDate);
		reDateBefore.setDate( reDateBefore.getDate() - 1 );
		//表示用切替前日表示用：フォーマット設定
		var strReDateBeforeYYYYMMDD = String(reDateBefore.getFullYear()) + "年" + String(reDateBefore.getMonth()+1) + "月" + String(reDateBefore.getDate()) + "日";
		//フォーマット済：切替前日出力
		$('.prevModeCtrl ul li.before span').text(strReDateBeforeYYYYMMDD);
		//切替日以前(デフォルト：旧レイアウト)
		if(toDay < reDate){
			//旧CSS設定
			$('#detailStyle').attr("href",oldStyle);
			//切替コントロール表示設定
			$('.prevModeCtrl').removeClass('dn');
			//新旧レイアウトモード切替
			$('.prevModeCtrl .before').addClass('sel');
			$('.prevModeCtrl .after').removeClass('sel');
			//「時間帯アイコン」「ホームページリンク」切替
			$('.layout1504before').removeClass('dn');
			$('.layout1504after').addClass('dn');
		//切替日以降(デフォルト：新レイアウト)
		}else{
			//旧CSS設定
			$('#detailStyle').attr("href",newStyle);
			//切替コントロール表示設定
			$('.prevModeCtrl').addClass('dn');
			//新旧レイアウトモード切替
			$('.prevModeCtrl .before').removeClass('sel');
			$('.prevModeCtrl .after').addClass('sel');
			//「時間帯アイコン」「ホームページリンク」切替
			$('.layout1504before').addClass('dn');
			$('.layout1504after').removeClass('dn');
		}
	}
	//表示切替処理
	function _toggleVC(sel,oldStyle,newStyle){
		if(!sel.hasClass('sel')){ //選択済はスルーする
			//CSS設定
			var stylePath = (sel.hasClass('after')) ? newStyle : oldStyle;
			$('#detailStyle').attr("href",stylePath);
			$('.prevModeCtrl .before').toggleClass('sel');
			$('.prevModeCtrl .after').toggleClass('sel');
			$('.layout1504before').toggleClass('dn');
			$('.layout1504after').toggleClass('dn');
			_changeParentFrameSize(); //親フレームリサイズ設定
		}
	}
	//親フレームリサイズ処理
	function _changeParentFrameSize(){
		//親フレーム存在チェック&親フレームサイズ変更
		if(window!=parent)parent.$('iframe#preview').css("height",$(document).height());
	}
	function _makeDetailLink(){
		//募集ページリンク存在チェック
		if(document.getElementsByClassName("detailLink") != null){
			//親フレームあり
			if(window!=parent){
				var goRecruit = parent.location.href;
				goRecruit = goRecruit.replace("index","recruitPrev","gi");
				$('a.detailLink').attr("href",goRecruit);
				$('a.detailLink').attr("target","_parent");
			}else{
				var goRecruit = location.href;
				goRecruit = goRecruit.replace("List2013a","2013a","gi");
				$('a.detailLink').attr("href",goRecruit);
				$('a.detailLink').attr("target","_self");
			}
		}
	}
	function _chkMemerReq(){
		//フレーム別URL取得
		var locate = (window!=parent) ? parent.location.href : location.href;
		//切替コントロール表示設定(会員機能経由時：切替コントロール非表示）
		if(locate.indexOf('memcall=1') != -1)$('.prevModeCtrl').addClass('dn');
	}

})(jQuery);