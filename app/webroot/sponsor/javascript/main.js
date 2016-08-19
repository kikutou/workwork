/*!
 * main.js
 * 各種スクリプト実行用ファイル
 */

(function($){//start jquery


/**
 * 高さ揃え設定
 *
 * @require: jquery.js, jquery.mk_hover.js
 * @create: 2011-09-27 [hosono@skillpartners.co.jp]
 * @modify: not yet
 */

$(function(){
	//feature reason.html columnUnit-A　
	var $part = $('div#globalNav');
	if ($part.size()) {
		$part.flatHeightsAction('li a', 6);
	};
});



/**
 * 画像のマウスオーバー設定
 *
 * @require: jquery.js, jquery.mk_hover.js
 * @create: 2011-08-20 [oosugi@skillpartners.co.jp]
 * @modify: 2011-09-27 [hosono@skillpartners.co.jp]
 */

$(function(){
	// set $.fn.mk_hoverSwap - オーバーで「_on」付きの画像と差し替える
	$('img.js-hoverSwap, input[type="image"].js-hoverSwap').mk_hoverSwap();

	// set $.fn.mk_hoverLight - オーバーで明るくする
	$('img.js-hoverLight, input[type="image"].js-hoverLight').mk_hoverLight();

	// set $.fn.mk_hoverBlink - オーバーで一瞬光る
	$('img.js-hoverBlink, input[type="image"].js-hoverBlink').mk_hoverBlink();
});



/**
 * スムーススクロール設定
 *
 * @require: jquery.js, jquery.regex.js, jquery.mk_smoothScroll
 * @create: 2011-08-20 [oosugi@skillpartners.co.jp]
 * @modify: not yet
 */

$(function(){
	// set $.fn.mk_smoothScroll
	// ページ内アンカーリンクをすべてスムーススクロールにする。
	$('a:regex(href,.*?#):not(a[href=#]):not(a[target])').mk_smoothScroll();
});




/**
 * テーブル偶数奇数色違い設定
 *
 * @require: jquery.js
 * @create: 2011-09-27 [hosono@skillpartners.co.jp]
 * @modify: 2011-09-29 [hosono@skillpartners.co.jp]
 */

$(function(){
	$('div.prt-tableC, div.prt-articleUnitA').each(function(){
		$(this).find('table tr:even').addClass('even');// 偶数行にクラス名evenを付与
		$(this).find('table tr:odd').addClass('odd');// 奇数行にクラス名oddを付与
	});
});



/**
 * 定型文
 *
 * @create: 2011-09-29 [oosugi@skillpartners.co.jp]
 * @modify: not yet
 */
$(function(){
	var $elms = $('.js-selectInputPattern');

	$elms.each(function(){
		var $elm = $(this),
			$select = $elm.find('.js-selectInputPattern-select'),
			$datas = $elm.find('.js-selectInputPattern-data input'),
			$area = $elm.find('.js-selectInputPattern-area').find('input, textarea').not('.notInputPattern');

		$select.change(function(){
			var name = $(this).val(),
				$data = $datas.filter('[name^=' + name + ']');

			$data.each(function(i){
				$($area[i]).val($(this).val());
			});
		});
	});
});


//$(function(){
//	var $elms = $('.js-selectInputPattern');
//
//	$elms.each(function(){
//		var $elm = $(this),
//			$select = $elm.find('.js-selectInputPattern-select'),
//			$datas = $elm.find('.js-selectInputPattern-data input'),
//			$area = $elm.find('.js-selectInputPattern-area').find('input, textarea');
//
//		$select.change(function(){
//			var name = $(this).val(),
//				$data = $datas.filter('[name^=' + name + ']');
//
//			$data.each(function(i){
//				$($area[i]).val($(this).val());
//			});
//		});
//	});
//});



/**
 * スクロール追従設定
 *
 * ウィンドウをスクロールしたときに、対象のボックスがウィンドウの一番上に来たら、
 * その場所に固定させる。
 *
 * @create: 2011-10-06 [oosugi@skillpartners.co.jp]
 * @modify: 2011-10-07 [oosugi@skillpartners.co.jp]
 */

$(function(){
	//.js-followScrollに対して実行
	var $elms = $('.js-followScroll');

	$elms.each(function(){
		var $elm = $(this),
			$window = $(window),

			//エレメントの初期位置
			posX = function(){
				var scrollLeft = $('body').scrollLeft() || $('html').scrollLeft();
				if (scrollLeft && $.support.fixedPosition) {
					return $elm.offset().left - scrollLeft;
				} else {
					return $elm.offset().left;
				}
			},
			posY = $elm.offset().top,

			//エレメントの初期スタイル（操作後戻す用）
			oldPos = $elm.css('position'),
			oldTop = $elm.css('top'),
			oldLeft = $elm.css('left'),

			// 付与するクラス
			className = 'js-followScroll-fixed',

			$clone = $elm.clone();

		//ウィンドウ縦スクロール時にイベント発生
		$window.scroll(function(){
			var scrollTop = $window.scrollTop();

			//スクロール量によって処理を分岐
			if (scrollTop >= posY){
				// スクロール量がエレメントの位置まで行ったら
				// ウィンドウの一番上に固定

				// 元の位置を再取得するのに
				// 元のエレメントはそのままにして、
				// cloneを表示する
				$elm.after($clone);

				// fixedに対応してるかしてないかで処理を分岐
				if ($.support.fixedPosition){
					//対応している場合
					$clone
						.css({
							position: 'fixed',
							top: '0',
							left: posX()
						})
						.addClass(className);
				} else {
					//対応していない場合
					$clone
						.css({
							position: 'absolute',
							top: scrollTop,
							left: posX()
						})
						.addClass(className);
				}

				// ウインドウサイズ可変時の処理をbind
				$window.bind('resize.followScroll', function(){
					$clone
						.css({
							left: posX()
						});
				});
			} else {
				// スクロール量がエレメントの位置より上の場合
				// もとに戻す
				$clone
					.css({
						position: oldPos,
						top: oldTop,
						left: oldLeft
					})
					.removeClass(className)
					.remove();

				// ウインドウサイズ可変時の処理をunbind
				$window.unbind('resize.followScroll');
			};
		});
	});
});


})(jQuery);//end jquery


/*
 * Release Notes:
 *
 * 2011-09-29 [oosugi@skillpartners.co.jp]
 *   @create: 定型文
 *
 * 2011-08-19 [oosugi@skillpartners.co.jp]
 *   # スムーススクロール設定作成
 *   # 画像のマウスオーバー設定作成

 * 2011-09-27 [hosono@skillpartners.co.jp]
 *   # 高さ揃え設定
 *   # テーブル偶数奇数色違い設定作成

  * 2011-10-06 [oosugi@skillpartners.co.jp]
 *   # スクロール追従設定作成
 * 2011-10-07 [hosono@skillpartners.co.jp]
 *   # スクロール追従設定調整
 *
 * main.js
 * 各種スクリプト実行用ファイル
 */

