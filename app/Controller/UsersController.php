<?php

class UsersController extends AppController {

    public $name = "Users";
    //public $uses = null;
    //public $autoLayout = true;
    public $layout = "users";
    public $autoRender = true;
    public $helpers = array('Js' => array('Jquery'));

  /*  //認証コンポーネントを利用する
    public $components = array(
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'User',
                    'fields' => array(
                        'username' => 'login_id',
                        'password' => 'password',
                    ),
                    'scope' => array('User.delete_flag' => 0),
                )
            ),
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'login',
            ),
        )
    );

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow(array('signup','logout'));
    }*/

    public function index() {
        $this->layout = false;
        $errorMsg = null;

        if($this->request->isPost()){
            $result = $this->User->index($this->request->data);

            if($result){
                $this->redirect('index');
            }else {
                $errorMsg = 'ログインが失敗しました。';
            }
        }

        $this->set('errorMsg', $errorMsg);
    }

    /*public function login() {
        $this->layout = false;

        if($this->request->isPost()){
            if($this->Auth->login()){
                $this->redirect($this->Auth->redirect());
            }else{
                $this->Session->setFlash('ユーザー名かパスワードが違います。','default',array(),'auth');
            }
        }

    }

    public function logout(){
        $this->Auth->logout();
    }*/

    public function signup() {
        $this->layout = false;
        $errorMsg = null;

        if($this->request->ispost()) {
            $result = $this->User->save($this->data);

            if($result) {

                $this->redirect('index');
            }else {

                $errorMsg = 'データベースに保存できませんでした。';
            }
        }
        $this->set('errorMsg',$errorMsg);
    }

    public function checkid() {

        $this->layout = false;
        $this->autoRender = false;
        $this->uses = null;
        //Configure::write('debug',0);

        $id = $this->request->data('id');

        $user = $this->User->find('first', array('conditions' => array('login_id' => $id, 'delete_flag' => 0)));

        if($user) {
            echo "このログインIDは既に使われています、変更してください。";
        }else {
            echo "このログインIDは登録可能です。";
        }
    }

    public function profile(){
        //$this->layout = false;


        $user = null;

        $id = $this->request->query['id'];

        if(!$id) {

            $this->Session->setFlash('idが存在しません。');
            $this->redirect('index');
        }

        $user = $this->User->find('first', array('conditions' => array('User.id' => $id, 'User.delete_flag' => '0')));

        if(!$user) {

            $this->Session->setFlash('ユーザーが存在しません。');
            $this->redirect('index');
        }

        //viewに送り出す
        $this->set('user',$user);

    }

    public function profile_edit(){
        
        $errorMsg = null;
        $user = null;

        //当前のリクエストを検索
        if($this->request->isPost()) {

            $result = $this->User->profileEditSave($this->request->data);

            /*print '<pre>';
            print_r($result);
            print '</pre>';
            exit();*/

            if($result) {
                $this->Session->setFlash('編集しました。');
                $this->redirect('index');
            }else {
                $errorMsg = '編集失敗しました.もう一度入力してください。';
            }

            $user = $this->data;
        }else {
            //URLからIDを取り出し
            //requestからgetで送られたデータを取り出す
            $id = $this->request->query['id'];

            //idを取らないなら
            if(!$id) {
                //編集のペ−じにかえします
                $this->Session->setFlash('idが存在しません。');
                $this -> redirect('index');
            }

            //IDに基づいて、MODELから該当レコードを取り出す
            $user = $this->User->find('first', array('conditions' => array('User.id' => $id, 'User.delete_flag' => 0 )));
            if(!$user)
            {
                $this->Session->setFlash('ユーザーが存在しません。');
                $this->redirect('index');
            }

            $postcode = $user['User']['postcode'];
            $user['User']['postcode1'] = substr($postcode, 0, 3);
            $user['User']['postcode2'] = substr($postcode,3);
        }

        //viewに送り出す
        $this->set('user',$user);
        $this->set('errorMsg',$errorMsg);
    }

    public function passchange() {

        $errorMsg = null;
        $user = null;

        if($this->request->isPost()) {

            $result = $this->User->save($this->request->data);

            if($result) {
                $this->redirect('index');
            }else {
                $errorMsg = 'データベースに保存できませんでした。';
            }

            $user = $this->data;


        }else {
            $id = $this->request->query['id'];

            if(!$id) {
                $this->Session->setFlash('idが存在しません。');
                $this->redirect('index');
            }

            $user = $this->User->find('first', array('conditions' => array('User.id' => $id, 'User.delete_flag' =>'0')));

            /*
            print '<pre>';
            print_r($user);
            print '</pre>';
            exit();
            */

            if(!$user) {
                $this->Session->setFlash('ユーザーが存在しません。');
                $this->redirect('index');
            }
        }

        $this->set('user',$user);

        //$this->set('data',$this->data);
        $this->set('errorMsg',$errorMsg);
    }
    
}
