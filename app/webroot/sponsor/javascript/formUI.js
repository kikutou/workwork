$(function(){
	//IE用最適化処理 注意！コメントアウトのままでIEのみ動く
	/*@cc_on _d=document;eval('var document=_d')@*/

	/*********************************************************************************************
	*
	*  環境設定
	*
	*********************************************************************************************/
	//navの位置を設定
 	var nav = $('.tophead');
 	if(nav.offset()!=null){
 		var navTop = nav.offset().top;
 	}

 	// [ デバック ]
	var dLog='',dDate,dMode=false;

	// [ デバック ] 処理時間計測
	function ___dStart(){if(dMode)dDate=new Date;}
	function ___dEnd(act){if(dMode)dLog+=act+' [ '+(new Date-dDate)+'ms ]\n';}
	function ___dRestart(act){___dEnd(act);___dStart();}
	function ___dDump(){if(dMode)alert(dLog);};

	//Support configs
	var SupInputKana=true,	//自動カナ変換
		SupKana=new Array("。","「","」","、","・","ヲ","ァ","ィ","ゥ","ェ","ォ","ャ","ュ","ョ","ッ","ー","ア","イ","ウ","エ","オ","カ","キ","ク","ケ","コ","サ","シ","ス","セ","ソ","タ","チ","ツ","テ","ト","ナ","ニ","ヌ","ネ","ノ","ハ","ヒ","フ","ヘ","ホ","マ","ミ","ム","メ","モ","ヤ","ユ","ヨ","ラ","リ","ル","レ","ロ","ワ","ン","゛","゜"),
		SupPass='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
		SupPassAdd='.-_@+*';

	//String configs
	var StrOneByteCharCnt=1,
		StrDblByteCharCnt=1,
		StrLineFeedCodeCnt=2;

	//Check configs
	var CheAttribute='fu',
		CheCntView='Count',
		CheErrView='Error',
		CheAttrCode=/a|d|M|m|n|k|r|s|t/,
		CheMailFormat=/^([a-z0-9_]|\-|\.|\+)+@(([a-z0-9_]|\-)+\.)+[a-z]{2,6}$/i,
		CheChangeCSS='Error';

	//Error Message configs
	var ErrMost='必ず入力してください',
		ErrMostSelect='必ず選択してください',
		ErrInvalid='無効な文字が入力されています',
		ErrSpace='スペースまたは改行のみで入力されています',
		ErrKana='カタカナのみで入力してください',
		ErrHanKana='半角カナは使用できません',
		ErrNumber='数字のみで入力してください',
		ErrAlphabet='英字のみで入力してください',
		ErrAlphabetNumber='英数字のみで入力してください',
		ErrTel='電話番号が正しくありません',
		ErrMail='メールアドレスが正しくありません',
		ErrUrl='URLが正しくありません',
		ErrReenter='入力された内容に誤りがあります',
		ErrOverCount='文字以内で入力してください',
		ErrUnderCount='文字以上で入力してください';

	var beId='',			//グループフォーカス
	readyFlg=true,			//画面ロード時に入力チェックエラーの出力制御
	masterObj,				//マルチセレクトオブジェクト
	fixedObj=new Object;

	//マルチセレクトオブジェクトをメモリ上にキャッシュ
	if(typeof(multiSelect)!='undefined'&&_isObject(multiSelect))masterObj=_copyObject(multiSelect);

	var debugLog='';

	//Tab、Shift、Ctrlキーが押されたさいは入力チェックを制御する
	MSIE = navigator.userAgent.indexOf("MSIE")!=-1;
	if(document.layers)document.captureEvents(Event.KEYUP);

	//改行、スペース一括削除処理
	String.prototype._invalid=function(){return this.replace(/\n|\r| |　|/g,'');};
	//全角カナ自動変換処理
	String.prototype._kanaConvert=function(){var i,j=0,c,n,a=new Array,len=this.length,code;if(this==null)return '';for(i=0;i<len;i++){c=this.charCodeAt(i);if(c>=0xff61 && c<=0xff9f){code=SupKana[c-65377];if(i<len-1){n=this.charCodeAt(i+1);if(n==65438 && c==65395){code='ヴ';i++;}else if(n==65438 && ((c>=65398 && c<=65412)||(c>=65418 && c<=65422))){code=String.fromCharCode(code.charCodeAt(0)+1);i++;}else if(n==65439 &&(c>=65418 && c<=65422)){code=String.fromCharCode(code.charCodeAt(0)+2);i++;};};a[j]=code.charCodeAt(0);j++;}else{a[j]=(0x3041<=c && c<=0x3096)?c+0x0060:c;j++;};};return String.fromCharCode.apply(null,a);};

	/*********************************************************************************************
	*
	*  イベント定義
	*
	*********************************************************************************************/

	_ready();					//ページ読込時処理
	$('input').focus(_focus);		//input要素にフォーカスがあたった場合
	$('input').blur(_blur);			//input要素からフォーカスが外れた場合
	$('input').keyup(_input);		//input要素で入力があたった場合			*Type別にするか検討中
	$('textarea').keyup(_input);	//textarea要素で入力があたった場合
	$('button.rand').click(_rand);	//Classにrandがあるbutton要素がクリックされた場合
	$('select').focus(_focus);		//select要素にフォーカスがあたった場合
	$('select').blur(_blur);		//select要素からフォーカスが外れた場合
	$('select').change(_input);		//select要素に変更が発生した場合

	//マルチセレクト系
	$('select.multiSelect').dblclick(_setMultiSelect);		//マルチセレクトをダブルクリック
	$('input:image.multiSelect').click(_setMultiSelect);	//マルチセレクトコントロールボタンをクリック
	$('select.selectEntity').change(_searchMultiSelect);	//マルチセレクト SelectEntity
	$('input.multiSelect').keyup(_searchMultiSelect);		//マルチセレクトコントロールボタンをクリック

	//定型文挿入処理
	$('li.fixed').click(_fixed);		//定型文の挿入
	$('input.caret').click(_caret);		//定型文挿入用に文字の入力位置を取得
	$('input.caret').keyup(_caret);		//定型文挿入用に文字の入力位置を取得
	$('textarea.caret').click(_caret);		//定型文挿入用に文字の入力位置を取得
	$('textarea.caret').keyup(_caret);		//定型文挿入用に文字の入力位置を取得

	//日付算出
	$('input:button.dateCalculate').click(_dateCalculate);
	$('input:image.dateCalculate').click(_dateCalculate);

	$('input.viewControl').click(_viewControl);		//定型文挿入用に文字の入力位置を取得

	$('input:image.zipConversion').click(_zip);

	//iFrame
	$('iFrame').load(_autoHeight);

	//submit
	$('input.submit').click(_submit);		//定型文挿入用に文字の入力位置を取得

	//google map 緯度経度取得処理
	$('img.latLong').click(_latLng);

 	if(nav.offset()!=null){
		//スクロールするたびに実行
		$(window).scroll(function () {
			var winTop = $(this).scrollTop();
			//スクロール位置がnavの位置より下だったらクラスfixedを追加
			if (winTop >= navTop+1) {
				nav.addClass('barfixed')
			} else if (winTop <= navTop) {
				nav.removeClass('barfixed')
			}
		});
 	}

 	//送信処理
	function _submit(){
			if(typeof(multiSelect)!='undefined'&&_isObject(multiSelect))_submitMultiSelect(masterObj);
	}


	function _zip(){
		var el=$('input.zip'),v1,v2,v3,v4,v5;
		if(!el[0].value)return false;
		v1=el[0].name?el[0].name:'';
		v2=el[1].name?el[1].name:'';
		el=$('select.zipConversion');
		v3=el[0]?el[0].name:'';
		el=$('input:text.zipConversion');
		if(v3==''){
			v3=el[0]?el[0].name:'';
			v4=el[1]?el[1].name:v3;
			v5=el[2]?el[2].name:'';
		}else{
			v4=el[0]?el[0].name:'';
			v5=el[1]?el[1].name:'';
		}
		AjaxZip3.zip2addr(v1,v2,v3,v4,v5);
		return false;
	}

	/*********************************************************************************************
	*
	*  緯度経度
	*
	*  緯度経度取得処理
	*  _latLong()
	*
	*********************************************************************************************/

	function _latLng(){
		var id=$(this).attr('id'),mId,addr;
		mId=id.replace('LatLong','');
		addr=document.getElementById(mId).value;

		var geo = new google.maps.Geocoder();
		geo.geocode({'address':addr},function(result, status){
			if(status == google.maps.GeocoderStatus.OK){
				document.getElementById('mapLat').value=result[0].geometry.location.lat();
				document.getElementById('mapLong').value=result[0].geometry.location.lng();
			}else{
				alert('住所から緯度経度に変換できません');
			}
		});
	}





	/*********************************************************************************************
	*
	*  ロードイベント
	*
	*  ロード処理
	*  _ready()
	*
	*********************************************************************************************/

	//ロード処理
	function _ready(){
___dStart();
		var l,i,obj;
		//全てのtext要素にカウント処理
		obj=$(':text');
		for(i=0,l=obj.length;i<l;i++)_input($(obj[i]));
___dRestart('全てのtext要素にカウント処理');
		//全てのpassword要素にカウント処理
		obj=$(':password');
		for(i=0,l=obj.length;i<l;i++)_input($(obj[i]));
___dRestart('全てのpassword要素にカウント処理');
		//全てのtextarea要素にカウント処理
		obj=$('textarea');
		for(i=0,l=obj.length;i<l;i++)_input($(obj[i]));
___dRestart('全てのtextarea要素にカウント処理');
		//マルチセレクト要素作成処理
		if(typeof(multiSelect)!='undefined'&&_isObject(multiSelect))_readyMultiSelect(masterObj);
		readyFlg=false;
___dRestart('マルチセレクト要素作成処理');
		//画像読み込みチェック
		obj=$('img');
		for(i=0,l=obj.length;i<l;i++)_altImg($(obj[i]));
___dEnd('画像読み込みチェック');
___dDump();

	};

	/*********************************************************************************************
	*
	*  マルチセレクト
	*
	*  マルチセレクト要素作成処理
	*  _readyMultiSelect(obj)
	*
	*  マルチセレクト 選択枠要素構築
	*  _searchMultiSelect()
	*
	*  マルチセレクト 選択枠要素構築
	*  _setMultiSelectParent(mId)
	*
	*  マルチセレクト 要素変更処理
	*  _setMultiSelect()
	*
	*  マルチセレクト 送信処理
	*  _submitMultiSelect()
	*
	*********************************************************************************************/

	//マルチセレクト要素作成処理
	function _readyMultiSelect(obj){
		var res,i,j,k,len,fObj,sObj,mObj,pCnt,cnt,tEle;

		for(i in obj){
			fObj=obj[i];
			cnt=0;
			pCnt=0;
			sCnt=0;

			//Select Entity
			if(tEle=document.getElementById(i+'SelectEntity')){
				tEle.options[sCnt]=new Option('---','---');
				sCnt++;
			}
			//entityの取得
			for(j in fObj.entity){
				if(sObj=fObj.registry[j]){
					if(tEle=document.getElementById(i)){
						for(k in sObj){
							tEle.options[cnt]=new Option(sObj[k],k);
							cnt++;
						}
					}
				}
				if(mObj=fObj.master[j]){
					if(tEle=document.getElementById(i+'Parent')){
						if(sObj){
							for(k in mObj){
								if(!sObj[k]){
									tEle.options[pCnt]=new Option(mObj[k],k);
									pCnt++;
								}
							}
						}else{
							for(k in mObj){
								tEle.options[pCnt]=new Option(mObj[k],k);
								pCnt++;
							}
						}
					}
				}
				//Select Entity
				if(tEle=document.getElementById(i+'SelectEntity')){
					tEle.options[sCnt]=new Option(fObj.entity[j],j);
					sCnt++;
				}
			}
		}
	}

	//マルチセレクト 選択枠要素構築
	function _searchMultiSelect(){
		var mId=$(this).attr('id').indexOf('SelectEntity')?$(this).attr('id').replace('SelectEntity',''):$(this).attr('id').replace('SearchEntity',''),
			fEle,tEle,fwEle,seEle,
			iTemp=new Array,
			len,opt,iCnt=0,i,j,selected,seFlg=0,fwFlg=0;

		//セレクト情報取得
		if($(this).attr('id').indexOf('SelectEntity')!=-1){
			mId=$(this).attr('id').replace('SelectEntity','');
			seEle=$('#'+$(this).attr('id'))[0];
			selected=seEle.options[seEle.selectedIndex].value;
			if(selected!='---')seFlg=1;
			if(document.getElementById(mId+'SearchEntity')){
				fwEle=$('#'+mId+'SearchEntity')[0];
				if(fwEle.value!='')fwFlg=1;
			}
		//フリーワード取得
		}else if($(this).attr('id').indexOf('SearchEntity')!=-1){
			mId=$(this).attr('id').replace('SearchEntity','');
			fwEle=$('#'+$(this).attr('id'))[0];
			if(fwEle.value!='')fwFlg=1;
			if(document.getElementById(mId+'SelectEntity')){
				seEle=$('#'+mId+'SelectEntity')[0];
				selected=seEle.options[seEle.selectedIndex].value;
				if(selected!='---')seFlg=1;
			}
		}
		fEle=$('#'+mId+'Parent')[0];
		tEle=$('#'+mId)[0];

		//反映先の要素を抽出
		for(i=0,len=tEle.options.length;i<len;i++){
			opt=tEle.options[i];
			iTemp[opt.value]=opt.text;
		}
		//option初期化
		fEle.length=0;

		//全件
		if(seFlg==0&&fwFlg==0){
			//キャッシュしてあるマスタを元にOptionを再構築
			for(i in masterObj[mId]['entity']){
				opt=masterObj[mId]['master'][i];
				for(j in opt){
					if(!iTemp[j]){
						fEle.options[iCnt]=new Option(opt[j],j);
						iCnt++;
					}
				}
			}
		}else{
			if(seFlg==1){
				//キャッシュしてあるマスタを元にOptionを再構築
				opt=masterObj[mId]['master'][selected];
				//セレクト&フリーワード
				if(fwFlg==1){
					for(i in opt){
						if(!iTemp[i]){
							if(opt[i].indexOf(fwEle.value)!=-1){
								fEle.options[iCnt]=new Option(opt[i],i);
								iCnt++;
							}
						}
					}
				//セレクトのみ
				}else{
					for(i in opt){
						if(!iTemp[i]){
							fEle.options[iCnt]=new Option(opt[i],i);
							iCnt++;
						}
					}
				}
			//フリーワードのみ
			}else if(fwFlg==1){
				//キャッシュしてあるマスタを元にOptionを再構築
				for(i in masterObj[mId]['entity']){
					opt=masterObj[mId]['master'][i];
					for(j in opt){
						if(!iTemp[j]){
							if(opt[j].indexOf(fwEle.value)!=-1){
								fEle.options[iCnt]=new Option(opt[j],j);
								iCnt++;
							}
						}
					}
				}
			}
		}
	}

	//マルチセレクト 選択枠要素構築
	function _setMultiSelectParent(mId){
		var pEle,rEle,fwEle,seEle,
			tmp=new Array,
			len,opt,c=0,i,j,selected,seFlg=0,fwFlg=0;

		//セレクト情報取得
		if(document.getElementById(mId+'SelectEntity')){
			seEle=$('#'+mId+'SelectEntity')[0];
			selected=seEle.options[seEle.selectedIndex].value;
			if(selected!='---')seFlg=1;
		}
		//フリーワード取得
		if(document.getElementById(mId+'SearchEntity')){
			fwEle=$('#'+mId+'SearchEntity')[0];
			if(fwEle.value!='')fwFlg=1;
		}
		pEle=$('#'+mId+'Parent')[0];
		rEle=$('#'+mId)[0];

		//反映先の要素を抽出
		for(i=0,len=rEle.options.length;i<len;i++){
			opt=rEle.options[i];
			tmp[opt.value]=opt.text;
		}
		//option初期化
		pEle.length=0;

		//全件
		if(seFlg==0&&fwFlg==0){
			//キャッシュしてあるマスタを元にOptionを再構築
			for(i in masterObj[mId]['entity']){
				opt=masterObj[mId]['master'][i];
				for(j in opt){
					if(!tmp[j]){
						pEle.options[c]=new Option(opt[j],j);
						c++;
					}
				}
			}
		}else{
			if(seFlg==1){
				//キャッシュしてあるマスタを元にOptionを再構築
				opt=masterObj[mId]['master'][selected];
				//セレクト&フリーワード
				if(fwFlg==1){
					for(i in opt){
						if(!tmp[i]){
							if(opt[i].indexOf(fwEle.value)!=-1){
								pEle.options[c]=new Option(opt[i],i);
								c++;
							}
						}
					}
				//セレクトのみ
				}else{
					for(i in opt){
						if(!tmp[i]){
							pEle.options[c]=new Option(opt[i],i);
							c++;
						}
					}
				}
			//フリーワードのみ
			}else if(fwFlg==1){
				//キャッシュしてあるマスタを元にOptionを再構築
				for(i in masterObj[mId]['entity']){
					opt=masterObj[mId]['master'][i];
					for(j in opt){
						if(!tmp[j]){
							if(opt[j].indexOf(fwEle.value)!=-1){
								pEle.options[c]=new Option(opt[j],j);
								c++;
							}
						}
					}
				}
			}
		}
	}

	//マルチセレクト 要素変更処理
	function _setMultiSelect(){
		var id=$(this).attr('id'),
			mId,pEle,rEle,
			iTemp=new Array,dTemp=new Array,
			len,opt,dCnt=0,iCnt=0,i,j,
			pMax=0,sMax=0,sCnt=0;

		mId=id.indexOf('Parent')!=-1?id.substring(0,id.indexOf('Parent')):id.indexOf('CCB')!=-1?id.substring(0,id.indexOf('CCB')):id;
		pEle=$('#'+mId+'Parent')[0];
		rEle=$('#'+mId)[0];

		//選択枠から登録枠へ
		if(id.indexOf('Parent')!=-1){

			pMax=id.indexOf('_MAX');

			// 選択
			if(id.indexOf('CCBAll')==-1){
				if(pMax!=-1){
					for(i=0,len=pEle.options.length;i<len;i++){
						opt=pEle.options[i];
						if(opt.selected)sCnt++;
					}
					sMax=id.substring(pMax+4);
					if(rEle.options.length + sCnt > sMax){
						alert("最大登録数は"+sMax+"件です");
						return false;
					}
				}

				//選択された要素を抽出
				for(i=0,len=pEle.options.length;i<len;i++){
					opt=pEle.options[i];
					if(opt.selected)iTemp[opt.value]=opt.text;
				}
			// 全て
			}else{
				if(pMax!=-1){
					sCnt=pEle.options.length;
					sMax=id.substring(pMax+4);
					if(rEle.options.length + sCnt > sMax){
						alert("最大登録数は"+sMax+"件です");
						return false;
					}
				}

				//選択された要素を抽出
				for(i=0,len=pEle.options.length;i<len;i++){
					opt=pEle.options[i];
					iTemp[opt.value]=opt.text;
				}
			}
			//登録枠の要素を抽出
			for(i=0,len=rEle.options.length;i<len;i++){
				opt=rEle.options[i];
				iTemp[opt.value]=opt.text;
			}
			//option初期化
			rEle.length=0;
			//キャッシュしてあるマスタを元にOptionを再構築
			for(i in masterObj[mId]['entity']){
				for(j in masterObj[mId]['master'][i]){
					if(iTemp[j]){
						rEle.options[iCnt]=new Option(iTemp[j],j);
						iCnt++;
					}
				}
			}
		//登録枠から解除
		}else{
			if(id.indexOf('CCBAll')==-1){
				//選択された要素を抽出
				for(i=rEle.options.length-1;i>=0;i--){
					opt=rEle.options[i];
					if(opt.selected)rEle.options[i]=null;
				}
			}else{
				//option初期化
				rEle.length=0;
			}
		}
		//選択枠の更新
		_setMultiSelectParent(mId);

		//inputによるページ遷移を制御
		return false;
	}

	//submit時マルチセレクトデータ
	function _submitMultiSelect(obj){
		var res,i,j,k,len,fObj,sObj,mObj,pCnt,cnt,tEle;
		var el = $('div.multiSelect'),selects = new Array();

		for(i in obj){
			fObj=obj[i];
			cnt=0;
			pCnt=0;
			sCnt=0;

			if(document.getElementById(i)){
				tEle=document.getElementById(i);

				//entityの取得
				for(j in fObj.entity){
					mObj=fObj.master[j];
					selects.push('<select id="'+j+'" name="'+j+'" style="display:none;" multiple="multiple" >');
					for(k=0,len=tEle.options.length;k<len;k++){
						v=tEle.options[k].value;
						if(mObj[v]){
							selects.push('<option value="'+v+'" selected="selected" >'+tEle.options[k].text+'</option>');
						}
					}
					selects.push('</select>');
				}
			}
		}
		el.append(selects.join(''));
	}

	/*********************************************************************************************
	*
	*  入力チェック
	*
	*  Tab、Shift,Ctrlキーでの入力チェック制御
	*  _keyControl(e)
	*
	*  フォーカス
	*  _focus()
	*
	* 入力時カウント処理、エラーチェック処理一時受付
	*  _input(e)
	*
	* フォーカスアウト時カウント処理、エラーチェック処理一時受付
	* _blur(e)
	*
	* カウント処理
	* _count(e)
	*
	* チェック要素取得
	* _attribute(a)
	*
	* 入力中チェック
	* _checkKeyup(e,p)
	*
	* フォーカスアウト時のチェック
	* _checkBlur(e,p)
	*
	*********************************************************************************************/

	//Tab、Shift,Ctrlキーでの入力チェック制御
	function _keyControl(e){
		var res='';
		if(document.all){
			res=event.keyCode;
		}else if(document.getElementById){
			res=(e.keyCode!=0)?e.keyCode:e.charCode;
		}else if(document.layers){
			res=e.which;
		}
		return (res==9||res==16||res==17)?false:true;
	};

	//フォーカス
	function _focus(){
		var focusId=$(this).prop('id').replace(/[_][0-9]$/,'');
		if(beId==focusId)$('#'+focusId+CheErrView).html('');
		beId=focusId;
	};

	//入力時カウント処理、エラーチェック処理一時受付
	function _input(e){
		if(readyFlg||(!readyFlg&&_keyControl(e))){
			e=($(this).attr('id'))?$(this):e;
			var id='#'+e.attr('id'),cId,eId,chk,cLen=0,i=0,j=0,errMessage='',v;

			if(id.match(/[_][0-9]$/))id=id.replace(/[_][0-9]$/,'');	//IDが連番(グループ)の場合、連番を取り除く
			e.rId=id;			//エラーチェックで使う
			cId=id+CheCntView;	//カウント表示先ID
			eId=id+CheErrView;	//エラーメッセージ表示先ID

			//カウント表示、エラー表示のどちらかと、チェック要素がある場合
			if(($(cId)[0]||$(eId)[0])&&e.attr(CheAttribute)){
				if((e.attr('type')=='text'||e.attr('type')=='password')||e[0].tagName=='TEXTAREA')e.cStr=_count(e);

				//文字数カウント カウント出力が無くてもエラーチェックで使う
				if($(cId)[0])$(cId).html(e.cStr);	//カウント値出力

				//ロード時以外でエラーメッセージ表示先がある場合
				if(!readyFlg&&$(eId)[0]){
					//チェック要素を1文字づつに分解
					chk=e.attr(CheAttribute).split('');
					cLen=chk.length;
					$(eId).html('');
					for(i=0;i<cLen;i++){
						v=chk[i];
						//数字の場合
						if(!isNaN(v)){
							//次のチェック要素が数字又はハイフンの場合、まとめる
							j=i;
							for(;;){
								j++;
								if(isNaN(chk[j])&&chk[j]!='-')break;
								v=v+chk[j];
								i++;
							};
						};
						if(v=='k'&&SupInputKana)e.val(e.val()._kanaConvert());
						//チェック要素を元にエラーチェック
						if(errMessage=_checkKeyup(e,v)){
							//エラーがあった時点でメッセージを出力し、チェック終了
							$(eId).html(errMessage);
							break;
						}
					}
				}
			}
		}
	};

	//フォーカスアウト時カウント処理、エラーチェック処理一時受付
	function _blur(e){
		e=($(this).attr('id'))?$(this):e;

		if($(this).attr('id') == undefined){
			return;
		}

		var id='#'+e.attr('id'),eId,chk,cLen=0,i=0,j=0,errMessage='',v;
		if(id.match(/[_][0-9]$/))id=id.replace(/[_][0-9]$/,'');	//IDが連番(グループ)の場合、連番を取り除く

		e.rId=id;		//エラーチェックで使う
		eId=id+CheErrView;	//エラーメッセージ表示先ID

		//エラー表示とチェック要素がある場合
		if($(eId)[0]&&e.attr(CheAttribute)){
			if((e.attr('type')=='text'||e.attr('type')=='password')||e[0].tagName=='TEXTAREA')e.cStr=_count(e);

			//チェック要素を1文字づつに分解
			chk=e.attr(CheAttribute).split('');
			$(eId).html('');
			for(i=0,cLen=chk.length;i<cLen;i++){
				v=chk[i];
				//数字の場合
				if(!isNaN(v)){
					//次のチェック要素が数字又はハイフンの場合、まとめる
					j=i;
					for(;;){
						j++;
						if(isNaN(chk[j])&&chk[j]!='-')break;
						v=v+chk[j];
						i++;
					};
				};
				if(v=='k'&&SupInputKana)e.val(e.val()._kanaConvert());
				//チェック要素を元にエラーチェック
				if(errMessage=_checkBlur(e,v)){
					//エラーがあった時点でメッセージを出力し、チェック終了
					$(eId).html(errMessage);
					break;
				};
			};
		};
	};

	//カウント処理
	function _count(e){
		var r=0,c,i,rep=e.val().replace(/\n|\r/g,''),rl;
		rl=rep.length;
		//改行数×定数StrLineFeedCodeCnt
		r=(e.val().length-rl)*StrLineFeedCodeCnt;

		//半角、全角文字どちらも同じ文字数でカウントする場合
		if(StrOneByteCharCnt==StrDblByteCharCnt){
			r+=rl*StrOneByteCharCnt;
			//半角、全角文字でカウントする文字数が違う場合
		}else{
			//1文字づつカウント
			for(i=0;i<rl;i++){
				c=rep.charCodeAt(i);
				r+=((c>=0x0 && c<0x81)||(c==0xf8f0)||(c>=0xff61 && c<0xffa0)||(c>=0xf8f1 && c<0xf8f4))?StrOneByteCharCnt:StrDblByteCharCnt;
			};
		};
		return Math.ceil(r);
	};

	//チェック要素取得
	function _attribute(a){
		a=a.split('');
		var len=a.length,i;
		for(i=0;i<len;i++){
			//数字の場合
			if(!isNaN(a[i])){
				//次のチェック要素が数字又はハイフンの場合、まとめる
				for(;;){
					j=i;
					j++;
					if(isNaN(chk[j])&&chk[j]!='-')break;
					chk[j]=chk[i]+chk[j];
					i++;
				};
			};
			//チェック要素を元にエラーチェック
			if(errMessage=_checkBlur(e,chk[i])){
				//エラーがあった時点でメッセージを出力し、チェック終了
				$(eId).html(errMessage);
				break;
			};
		};
	};

	//入力中チェック
	function _checkKeyup(e,p){
		var ret='';
		switch(p){
			case'M':
				if((e.attr('type')=='text'||e.attr('type')=='password')||e[0].tagName=='TEXTAREA'){
					if(e.val()._invalid()==0)ret=ErrMost;
				}else if(e.attr('type')=='checkbox'){
				}else if(e.attr('type')=='radio'){
				}else if(e[0].tagName=='SELECT'){
					if(e.val()<=0)ret=ErrMostSelect;
				};
				break;

			case'k':
				var i,u,len=e.val().length;
				for(i=0;i<len;i++){
					u=e.val().charCodeAt(i);
					if(u<0x30a0 || u>0x30ff){ret=ErrKana;break;};
				};
				break;

			case'n':
				if(e.val().match(/[^0-9]+/g))ret=ErrNumber;
				break;

			case'a':
				ret='';
				break;

			case's':
				ret='';
				break;
			case't':
				var flg=e.attr('id').charAt(e.attr('id').length-1);
				if(flg.match(/[^0-9]+/g)){
					if(e.val().match(/[^0-9\-]+/g))ret=ErrTel;
				}else{
					if(e.val().match(/[^0-9]+/g)){
						ret=ErrNumber;
					}else{
						var len=e.val().length,e2=document.getElementById(e.rId+'_2'),e3=document.getElementById(e.rId+'_3');

						switch(e.attr('id').charAt(e.attr('id').length-1)){
						case 1:
							if(len<2&&len>4){
								ret=ErrTel;
							}else if(len+e2+e3<10){
							}
							break;
						case 2:
							if(len<2&&len>4)ret=ErrTel;
							break;
						case 3:
							if(len<3&&len>4)ret=ErrTel;
							break;
						}
					}
				}
				break;
			case'm':
				if(!e.val().match(/^[a-zA-Z0-9_\@¥.\+¥-]+$/)&&e.cStr>0)ret=ErrMail;
				break;
			case'r':
				ret='';
				break;

			case'd':
				//年月日全て選択された場合
				if($(e.rId+'_1').val()>1945&&$(e.rId+'_2').val()>=1&&$(e.rId+'_3').val()>=1){
					var d=new Date($(e.rId+'_1').val(),$(e.rId+'_2').val()-1,$(e.rId+'_3').val());
					if(d.getFullYear()!=$(e.rId+'_1').val() || d.getMonth()!=$(e.rId+'_2').val()-1 || d.getDate()!=$(e.rId+'_3').val())ret=ErrReenter;
				};
				break;
			case'u':
				ret='';
				break;
			default:
				if(!isNaN(p.charAt(0))){
					if(p.indexOf('-')==-1){
						if(e.cStr>p)ret=p+ErrOverCount;
					}else{
						p=p.split('-');
						if(e.cStr>p[1])ret=p[1]+ErrOverCount;
					};
				};

		};
		return ret;
	};

	//フォーカスアウト時のチェック
	function _checkBlur(e,p){
		/*
		* M：必須
		* k：カナのみ
		* h：半カナ禁止
		* n：数字のみ
		* a：英字のみ
		* s：記号
		* t：電話番号形式チェック
		* m：メールアドレス
		* r：再入力
		* default:文字数
		*/
		var ret='';
		switch(p){
			case'M':
				if((e.attr('type')=='text'||e.attr('type')=='password')||e[0].tagName=='TEXTAREA'){
					if(e.val()._invalid()==0)ret=ErrMost;
				}else if(e.attr('type')=='checkbox'){
				}else if(e.attr('type')=='radio'){
				}else if(e[0].tagName=='SELECT'){
					if(e.val()<=0)ret=ErrMostSelect;
				};
				break;

			case'k':
				var i,u,len=e.val().length;
				for(i=0;i<len;i++){
					u=e.value.charCodeAt(i);
					if(u<0x30a0 || u>0x30ff){ret=ErrKana;break;};
				};
				break;

			case'n':
				if(e.val().match(/[^0-9]+/g))ret=ErrNumber;
				break;

			case'a':
				ret='';
				break;

			case's':
				ret='';
				break;
			case't':
				var flg=e.attr('id').charAt(e.attr('id').length-1);
				if(flg.match(/[^0-9]+/g)){
					if(e.val().match(/[^0-9\-]+/g))ret=ErrTel;
				}else{
					if(e.val().match(/[^0-9]+/g)){
						ret=ErrNumber;
					}else{
						var len=e.value.length,e2=document.getElementById(e.rId+'_2'),e3=document.getElementById(e.rId+'_3');

						switch(e.id.charAt(e.id.length-1)){
						case 1:
							if(len<2&&len>4){
								ret=ErrTel;
							}else if(len+e2+e3<10){
							}
							break;
						case 2:
							if(len<2&&len>4)ret=ErrTel;
							break;
						case 3:
							if(len<3&&len>4)ret=ErrTel;
							break;
						}
					}
				}
				break;
			case'm':
				if(e.rId.indexOf('__cRe')!=-1){
					if(!e.val().match(CheMailFormat)){
						ret=ErrMail;
					}else{
						if(e.val()!=$(e.rId.replace('__cRe','__c')).val())ret=ErrReenter;
					}
				}else if(!e.val().match(CheMailFormat)&&e.cStr>0){
					ret=ErrMail;
				}
				break;
			case'r':
				ret='';
				break;
			case'd':
				//年月日全て選択された場合
				if($(e.rId+'_1').val()>1945&&$(e.rId+'_2').val()>=1&&$(e.rId+'_3').val()>=1){
					var d=new Date($(e.rId+'_1').val(),$(e.rId+'_2').val()-1,$(e.rId+'_3').val());
					if(d.getFullYear()!=$(e.rId+'_1').val() || d.getMonth()!=$(e.rId+'_2').val()-1 || d.getDate()!=$(e.rId+'_3').val())ret=ErrReenter;
				};
				if($(e.rId+'_1').val()>1945||$(e.rId+'_2').val()>=1||$(e.rId+'_3').val()>=1){
					if($(e.rId+'_1').val()<1||$(e.rId+'_2').val()<1||$(e.rId+'_3').val()<1)ret=ErrReenter;
				};
				break;
			case'u':
				if(!e.val().match(/(http|ftp):\/\/.+/)&&e.cStr>0)ret=ErrUrl;
				break;
			default:
				if(!isNaN(p.charAt(0))){
					if(p.indexOf('-')==-1){
						if(e.cStr>p)ret=p+ErrOverCount;
					}else{
						p=p.split('-');
						if(e.cStr<p[0])ret=p[0]+ErrUnderCount;
						if(e.cStr>p[1])ret=p[1]+ErrOverCount;
					};
				};
				break;

		};
		return ret;
	};

	/*********************************************************************************************
	*
	*  ランダム文字生成
	*
	*  アルファベット(大/小文字)+数字+任意の文字から指定文字数のランダム文字列を作成する
	*  _copyObject()
	*
	*  オブジェクトか判定
	*  _rand()
	*
	*********************************************************************************************/
	function _rand(){
		var chk,cLen,i,j,aCnt=0,oCnt=12,pStr=SupPass,len=0,res='';
		//チェック要素を1文字づつに分解
		chk=$(this).attr(CheAttribute).split('');
		cLen=chk.length;
		for(i=0;i<cLen;i++){
			//数字の場合
			if(!isNaN(chk[i])){
				//次のチェック要素が数字又はハイフンの場合、まとめる
				for(;;){
					j=i;
					j++;
					if(!isNaN(chk[j])){
						chk[j]=chk[i]+chk[j];
					}else if(chk[j]=='-'){
						aCnt=chk[i];
						i++;
					}else{
						oCnt=chk[i];
						break;
					}
					i++;
				};
			}else if(chk[i]=='a'){
				pStr+=SupPassAdd;
			};
		};
		//最低入力値が設定されている場合、最低から最大までのランダム値を生成
		if(aCnt>0)oCnt=oCnt-Math.floor(Math.random()*(oCnt-aCnt+1));
		pStr=pStr.split('');
		len=pStr.length;
		for(i=0;i<oCnt;i++)res+=pStr[Math.floor(Math.random()*len)];
		$('#'+this.id.replace('Rand','')).val(res);
		_input($('#'+this.id.replace('Rand','')));
	};

	/*********************************************************************************************
	*
	*  定型文挿入処理
	*
	*  文字の入力位置を保存する
	*  _caret()
	*
	*  定型文を入力位置に挿入する
	*  _fixed()
	*
	*********************************************************************************************/

	//文字の入力位置を保存する
	function _caret(){
		var id=$(this).attr('id'),el,range;
		el=document.getElementById(id);

		if(document.selection){	//IE
			el.focus();

			//ボックスの先頭からキャレットまでのrangeを作って，長さを調査
			range=document.selection.createRange();
			range.moveStart('character',-el.value.length);
			fixedObj[id]=range.text.length;

		}else if(el.selectionStart||el.selectionStart=='0'){ // Firefox, Chrome
			fixedObj[id]=el.selectionStart;
		}
	}

	//定型文を入力位置に挿入する
	function _fixed(){
		var el=$(this),id,aVal,mId,iEle,iVal,caret=0,sprit,cnt;

		aVal=el.html();
		id=el.attr('id');

		mId=id.substring(0,id.indexOf('Fixed'));
		iEle=$('#'+mId)[0];

		var fStr;
		iVal=iEle.value;
		//キャレット取得
		if(!fixedObj[mId]&&fixedObj[mId]!=0)fixedObj[mId]=iVal.length;
		split=iVal.substr(0,fixedObj[mId]);
		iEle.focus();
		iEle.value=iVal.replace(split,split+aVal)+"　";

		cnt=fixedObj[mId]+aVal.length+2;
		fixedObj[mId]=cnt;

		if(iEle.createTextRange){
			var range = iEle.createTextRange();
			range.move('character',cnt);
			range.select();
		}else if(iEle.setSelectionRange){
			iEle.setSelectionRange(cnt,cnt);
		}

		_input($('#'+mId));
	}

	/*********************************************************************************************
	*
	*  日付算出
	* _dateAdd
	*
	*********************************************************************************************/

	function _dateCalculate(){
		var res,yy,mm,dd,dVal=document.getElementById('startDate__c').value.split('/'),sVal=document.getElementById('publicSpan__c').value;
		if(!isNaN(dVal[0])&&!isNaN(dVal[1])&&!isNaN(dVal[2])&&!isNaN(sVal)&&sVal!=''){
			res=new Date(dVal[0],dVal[1]-1,(Number(dVal[2])+7*sVal)-1);
			yy=res.getYear();
			mm=res.getMonth()+1;
			dd=res.getDate();
			if(yy<2000)yy+=1900;
			if(mm<10)mm='0'+mm;
			if(dd<10)dd='0'+dd;
			document.getElementById('endDate__c').value=yy+'/'+mm+'/'+dd;
		}
		return false;
	}

	/*********************************************************************************************
	*
	*  共通処理
	*
	*  オブジェクト又は配列の完全なるコピーを作成
	*  _copyObject()
	*
	*  オブジェクトか判定
	*  _isObject()
	*
	*  画像の存在チェック
	*  _altImg()
	*
	*  iFrameの高さ自動調整
	*  _autoHeight()
	*
	*********************************************************************************************/

	//オブジェクト又は配列の完全なるコピーを作成
	function _copyObject(obj){
		var res,i,len;
		if(typeof obj=='object'){
			if(obj instanceof Array){
				res=new Array();
				for(i=0,len=obj.length;i<len;i++)res[i]=_copyObject(obj[i]);
			}else{
				res=new Object();
				for(i in obj)res[i]=_copyObject(obj[i]);
			}
		}else{
			res=obj;
		}
		return res;
	}

	//オブジェクトか判定
	function _isObject(obj){
		return (typeof obj!='object'||obj instanceof Array)?false:true;
	}

	//画像の存在チェック
	function _altImg(el){
		//画像が読み込めない場合、Display:noneにする
		el.attr('src',el.attr('src')).error(function(e){el.hide();return true;});
	}

	//チェックボックスに連動して要素を表示非表示
	function _viewControl(){
		var el=$(this),mId,tEle;
		mId=el.attr('id');

		tEle=$('#'+$('.'+mId+'ViewControl').attr('id'));
		el.is(':checked')?tEle.hide():tEle.show();

//		var el=$(this),mId,tEle;
//		tEle=$('#'+mId)[0];
//
//		el.checked?tEle.hide():tEle.show();
	};

	//iFrameの高さ自動調整
	function _autoHeight(){
		var id=$(this).attr('id'),name=$(this).attr('name'),el,iEle;
		el=document.getElementById(id);
		iEle=parent.frames[name].document;
		el.style.height=(document.height)?30+iEle.height+'px':30+iEle.body.scrollHeight+'px';
	}

	/*********************************************************************************************
	*
	*  デバック/テスト
	*
	*  オブジェクト又は配列の完全なるコピーを作成
	*  _copyObject()
	*
	*  オブジェクトか判定
	*  _isObject()
	*
	*  画像の存在チェック
	*  _altImg()
	*
	*********************************************************************************************/

	//デバッグ
	function _debugLog(){
		//ブラウザ情報取得
		if(debugLog==''){
			var date = new Date(),now;
			now=date.getFullYear()+'/'+(date.getMonth()+1)+'/'+date.getDate();+'/'+date.getHours();+'/'+date.getMinutes();
			debugLog=now+'\n'+navigator.userAgent+'\n';
		}
	}

	//構造解析
	var analysis=new Object;
	function _analysis(){

	}

	//処理時間計測
	//	var date = new Date;
	//	alert(new Date - date);

/*
	$(function(){
		$('a,input:image,input:submit').click(_notLink);
		function _notLink(){return false;}
	});
*/
});

//項目へ値を設定する
function _setValueItem(V,Item){
	document.getElementById(Item).value=V;
}


