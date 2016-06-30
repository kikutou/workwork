<?php

class EmployersController extends AppController {

    //public $helpers = array('Js' => array('Jquery'));

    public $name = "Employers";
    public $users = null;
    //public $autoLayout = true;
    public $layout = "employers";
    public $autoRender = true;

    public function index() {
        $this->layout = false;
        $errorMsg = null;
        
        if($this->request->isPost()){
            $result = $this->Employer->index($this->request->data);

            if($result){
                $this->redirect('index');
            }else {
                $errorMsg = 'ログインが失敗しました。';
            }
        }

        $this->set('errorMsg', $errorMsg);
        
    }

    public function login() {
        $this->layout = false;

        $errorMsg = null;

        if($this->request->isPost()){
            $result = $this->Employer->login($this->request->data);

            if($result){
                $this->redirect('index');
            }else{
                $errorMsg = 'ログインが失敗しました。';
            }
        }

        $this->set('errorMsg', $errorMsg);


    }

    public function signup()
    {
        $this->layout = false;

        $errorMsg = null;

        if ($this->request->isPost()){

            $result = $this->Employer->save($this->data);

            if($result){
                $this->redirect('signupDone');


            }else{
                $errorMsg = '下の入力エラーをご確認ください';
            }

        }
        $this->set('errorMsg', $errorMsg);
    }

    public function signupDone() {

    }

    public function passloss() {
        $this->layout = false;
    }

    public function passchange() {
        $errorMsg = null;

        if($this->request->isPost())
        {


            $user = $this->Employer->find('first', array('conditions' => array('Employer.id' => $this->request->data['Employer']['id'])));
            $password1 = $user['Employer']['password'];
            $password2 = $this->request->data('Employer.old_password');
            $password2 = md5($this->request->data('Employer.old_password'));

            if($password1 == $password2){



                $new_Password1 = $this->request->data('Employer.password');
                $new_Password2 = $this->request->data('Employer.password_confirm');

                if($new_Password1 == $new_Password2)
                {
                    $result = $this->Employer->save($this->data);

                    if($result){
                        $this->redirect('passchangeDone');
                    }else{
                        $errorMsg = '新パスワードと確認パスワードの入力が一致していません。';
                    }
                }else{
                    $errorMsg = 'データベースに保存できませんでした。';
                }
            }else{
                $errorMsg = '旧パスワードは間違っています';
            }

            $this->set('user', $user);
        }else{
            $id = $this->request->query['id'];

            if(!$id){

                $this->redirect('passchangeDone');
            }

            $user = $this->Employer->find('first', array('conditions' => array('Employer.id' => $id, 'Employer.delete_flag' =>'0')));

            if(!$user){
                $this->Session->setFlash('DBに該当するIDが見つかりません。');
                $this->redirect('index');
            }
            //$this->set('user', $user);
        }

        $this->set('user', $user);
        $this->set('data', $this->data);
        $this->set('errorMsg', $errorMsg);

    }
    
    public function passchangeDone() {

    }

    public function checkid() {

        $this->layout = false;
        $this->autoRender = false;
        $this->uses = null;

        $id = $this->request->data('id');

        $employer = $this->Employer->find('first', array('conditions' => array('login_id' => $id, 'delete_flag' => 0)));

        if($employer) {
            echo "このログインIDは既に使われています、変更してください。";
        }else {
            echo "このログインIDは登録可能です。";
        }
    }

    public function profile() {

        $employer = null;
        $errorMsg = null;

        if($this->request->isPost()) {

        } else {
            $id = $this->request->query['id'];
            $employer = $this->Employer->find('first',array('conditions' => array(array('Employer.id' => $id, 'Employer.delete_flag' => 0))));

            if(!$employer){
                $this->Session->setFlash('DBに該当するIDが見つかりません。');
                $this->redirect('index');
            }
        }

        //viewにセット
        $this->set('employer',$employer);
        $this->set('errorMsg',$errorMsg);

    }

    public function profileEdit() {

        $errorMsg = null;
        $user = null;

        //当前のリクエストを検索
        if($this->request->isPost())
        {

            $this->request->data['Employer']['postcode'] = $this->data['Employer']['postcode1'] + $this->data['Employer']['postcode2'];

            $result = $this->Employer->save($this->request->data);

            if($result)
            {
                $this->redirect('index');
            }
            else
            {
                $errorMsg = '下の入力エラーをご確認ください';
                $user = $this->request->data;
            }

        }
        else{
            //URLからIDを取り出し
            //requestからgetで送られたデータを取り出す
            $id = $this->request->query['id'];

            //idを取らないなら
            if(!$id)
            {
                //編集のペ−じにかえします
                $this -> redirect('index');
            }

            //IDに基づいて、MODELから該当レコードを取り出す
            $user = $this->Employer->find('first', array('conditions' => array('Employer.id' => $id, 'Employer.delete_flag' => 0 )));

            if(!$user)
            {
                $this->redirect('index');
            }

        }

        //viewにセット
        $this->set('user',$user);
        $this->set('errorMsg',$errorMsg);

    }

    public function profileDone() {

    }

    public function management() {

    }

    public function report() {

    }

    public function scout() {

    }

    public function help() {

    }


}