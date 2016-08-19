/*!
 *
 * 確認ダイアログ
 */
  function dele(){
	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
	if(window.confirm('削除してよろしいですか？')){
		//location.href = "#"; // ページを更新
		return true;
	}
	// 「OK」時の処理終了
	// 「キャンセル」時の処理開始
	else{
	//	window.alert('キャンセルされました'); // 警告ダイアログを表示
		return false;
	}
	// 「キャンセル」時の処理終了
}

  function down(uriStr){
	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
	if(window.confirm('ダウンロードを実行します')){
		window.open(uriStr); // ページを更新
	}
	// 「OK」時の処理終了
	// 「キャンセル」時の処理開始
	else{
	//	window.alert('キャンセルされました'); // 警告ダイアログを表示
	}
	// 「キャンセル」時の処理終了
}

  function reset(){
	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
	if(window.confirm('スカウト状況をリセットしてよろしいですか？')){
		location.href = "#"; // ページを更新
	}
	// 「OK」時の処理終了
	// 「キャンセル」時の処理開始
	else{
	//	window.alert('キャンセルされました'); // 警告ダイアログを表示
	}
	// 「キャンセル」時の処理終了
}

  function logout(uriStr){
	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
	if(window.confirm('ログアウトしてよろしいですか？')){
		//location.href = "/sponsor/login/login.html"; // ログインページへ移動
		location.href = uriStr; // ログインページへ移動
	}
	// 「OK」時の処理終了
	// 「キャンセル」時の処理開始
	else{
	//	window.alert('キャンセルされました'); // 警告ダイアログを表示
	}
	// 「キャンセル」時の処理終了
}

  //【不正承認防止対応】
  function approval(name){
	  var hidden = name.substring(0,name.lastIndexOf(':'));
	  var f = document.publicListForm;
	if(window.confirm('原稿の内容を確認のうえ、公開を承認します。')){
		// 「OK」時
		f.selectIndex.value = f[hidden + ':recruitAdvertiseId'].value;
		return true;
	}else{
		// 「キャンセル」時の処理開始
		f.selectIndex.value = "";
		return false;
	}
}