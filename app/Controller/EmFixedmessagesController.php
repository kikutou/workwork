<?php

class EmFixedmessagesController extends AppController {

    public $name = 'EmFixedmessages';
    public $users = null;
    //public $autoLayout = true;
    public $layout = "employers";
    public $autoRender = true;

    public function index() {
        $user = null;
        $errorMsg = null;

        $id = $this->request->query['employer_id'];
        if(!$id){
            $this->redirect('index');
        }

        $user = $this->EmFixedmessage->find('all',array('conditions' => array('EmFixedmessage.employer_id' => $id, 'EmFixedmessage.delete_flag' => 0)));
        if(!$user){
            $this->redirect('index');
        }

        //viewに送り出す
        $this->set('user',$user);
        $this->set('errorMsg',$errorMsg);
    }

    public function create() {
        $errorMsg = null;

        if($this->request->isPost()) {

            $result = $this->EmFixedmessage->save($this->request->data);
            if($result) {
                $this->redirect('Done');
            } else {
                $errorMsg = '下の入力エラーをご確認ください';
            }
        }
        $this->set('errorMsg', $errorMsg);
    }

    public function edit() {
        $errorMsg = null;
        $user = null;

        if($this->request->isPost()) {

            $result = $this->EmFixedmessage->save($this->request->data);

            if ($result) {
                $this->redirect('Done');
            } else {
                $errorMsg = '下の入力エラーをご確認ください';
            }
        } else {
            //URLからIDを取り出し
            //requestからgetで送られたデータを取り出す
            $id = $this->request->query['id'];
            //idを取らないなら
            if(!$id) {
                //編集のペ−じにかえします
                $this -> redirect('index');
            }

            //IDに基づいて、MODELから該当レコードを取り出す
            $user = $this->EmFixedmessage->find('first', array('conditions' => array('EmFixedmessage.id' => $id, 'EmFixedmessage.delete_flag' => 0 )));
            if(!$user) {
                $this->redirect('index');
            }
        }

        $this->set('user',$user);
        $this->set('errorMsg',$errorMsg);
    }

    public function preview() {
        $user = null;
        $errorMsg = null;

        $id = $this->request->query['id'];
        if(!$id){
            $this->redirect('index');
        }

        $user = $this->EmFixedmessage->find('first',array('conditions' => array('EmFixedmessage.id' => $id, 'EmFixedmessage.delete_flag' => 0)));
        if(!$user){
            $this->redirect('index');
        }

        //viewに送り出す
        $this->set('user',$user);
        $this->set('errorMsg',$errorMsg);
    }

    public function example() {

    }

    public function help() {

    }

    public function done() {

    }

}