/* jQuery.chageLetterSize.js
****************************************************************************
	Version: 2007-08-01
	$.changeLetterSize.addHandler(func)
	文字の大きさが変化した時に実行する処理を追加
	
	Copyright (c) 2007, KITAMURA Akatsuki
	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
**************************************************************************** */

jQuery.changeLetterSize = {
	handlers : [],
	interval : 500,//定期処理を行う時間間隔。一応0.5秒で設定して有ります。1秒 = 1000
	currentSize: 0
};

(function($) {

	var self = $.changeLetterSize;

	/* 文字の大きさを確認するためのins要素 */
	var ins = $('<ins>M</ins>').css({
		display: 'block',
		visibility: 'hidden',
		position: 'absolute',
		padding: '0',
		top: '0'
	});

	/* 文字の大きさが変わったか */
	var isChanged = function() {
		
		ins.appendTo('body');
		var size = ins[0].offsetHeight;
		ins.remove();
		
		if (self.currentSize == size) return false;
		self.currentSize = size;
		
		return true;
	};

	/* 文書を読み込んだ時点で
	   文字の大きさを確認しておく */
	$(isChanged);

	/* 文字の大きさが変わっていたら、
	   handlers中の関数を順に実行 */
	var observer = function() {
		if (!isChanged()) return;
		
		$.each(self.handlers, function(i, handler) {
			handler();
		});
	};

	/* ハンドラを登録し、
	   最初の登録であれば、定期処理を開始 */
	self.addHandler = function(func) {
		self.handlers.push(func);
		if (self.handlers.length == 1) {
			setInterval(observer, self.interval);
		}
	};

})(jQuery);


/* jQuery.flatHeights.js
****************************************************************************
	$(expr).flatHeights()
	$(expr)で選択した複数の要素について、それぞれ高さを
	一番高いものに揃える
	jQuery.chageLetterSize.js と一緒に使う
	
	Copyright (c) 2007, KITAMURA Akatsuki
	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	
	対象にpaddingが指定されているとpaddingが倍になる問題を解消 [oosugi]
**************************************************************************** */
(function($) {

	/* 対象となる要素群の集合 */
	var sets = [];

	/* 高さ揃えの処理本体 */
	var flatHeights = function(set) {
		var maxHeight = 0;
		set.each(function(){
			var height = $(this).height();
			var pt     = Number($(this).css('padding-top').replace(/px|em/, ''));
			var pb     = Number($(this).css('padding-bottom').replace(/px|em/, ''));
			if (height > maxHeight) maxHeight = (height);
		});
		set.css('height', maxHeight + 'px');
	};

	/* 要素群の高さを揃え、setsに追加 */
	jQuery.fn.flatHeights = function() {
		if (this.length > 1) {
			flatHeights(this);
			sets.push(this);
		}
		return this;
	};

	/* 文字の大きさが変わった時に、
	   setsに含まれる各要素群に対して高さ揃えを実行 */
	$.changeLetterSize.addHandler(function() {
		$.each(sets, function() {
			this.height('auto');
			flatHeights(this);
		});
	});

})(jQuery);


/* jQuery.flatHights.js 用 function 
****************************************************************************
	
	-----------------------------------------------------------------------
	varsion     : 1.2
	author      : http://www.makinokobo.com - oosugi
	last update : 2010.10.15 - oosugi
	Copyright   : Copyright (c) 2010 Skill Partners Inc. All Rights Reserved.
	-----------------------------------------------------------------------
	
	$('SELECTOR').flatHeightsAction_auto();
	======================================================================
	個数自動取得ver
	対象ごとに各対象の子要素に対して flatHeights() を実行。
	対象の幅に応じて各行ごとに高さを揃える。
	
	$('SELECTOR').flatHeightsAction(target, num);
	======================================================================
	対象子要素と個数を指定ver
	対象ごとに各対象の指定要素に対して flatHeights() を実行。
	指定個数ごとに高さを揃える。
	
	target → どの子要素を揃えるか
	num    → 何個ずつ揃えるか
	
**************************************************************************** */
(function($){

$.fn.extend({
	flatHeightsAction_auto: function(){
		return this.each(function(){
			var $children = $(this).children();
			var children_ml = Number($children.css('margin-left').replace(/px|em/, ''));
			var children_mr = Number($children.css('margin-right').replace(/px|em/, ''));
			var n = Math.floor($(this).width() / ($children.width() + children_ml + children_mr));
			
			// 要素をnつずつの組に分ける
			var sets = [], temp = [];
			$(this).children().each(function(i) {
				temp.push(this);
				if (i % n == (n-1)) {
					sets.push(temp);
					temp = [];
				}
			});
			if (temp.length) sets.push(temp);
			
			// 各組ごとに高さ揃え
			$.each(sets, function(){
				$(this).flatHeights();
			});
		});
	},
	
	flatHeightsAction: function(target, num){
		return this.each(function(){
			// 要素をnつずつの組に分ける
			var sets = [], temp = [];
			$(this).find(target).each(function(i) {
				temp.push(this);
				if (i % num == (num-1)) {
					sets.push(temp);
					temp = [];
				}
			});
			if (temp.length) sets.push(temp);
			
			// 各組ごとに高さ揃え
			$.each(sets, function(){
				$(this).flatHeights();
			});
		});
	}
});

})(jQuery);


