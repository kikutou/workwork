<?php

class EmAdvertisesController extends AppController {

    public $name = 'EmAdvertises';
    public $uses = array('EmAdvertise','Employer');
    //public $autoLayout = true;
    public $layout = "employers";
    public $autoRender = true;

    public function index()
    {

    }

    public function create()
    {

        $errorMsg = null;
        $data = null;
        $employer = null;

        if ($this->request->isPost()){

 /*           print'<pre>';
            print($data);
            print'</pre>';
            exit();*/

            $result = $this->EmAdvertise->save($this->data);
            
            if($result){
                $this->redirect('done');
            }else{
                $errorMsg = 'データベースに保存できませんでした。';
            }

            $data = $this->data;

        }else{

            $id = $this->request->query['employer_id'];

            $employer = $this->Employer->find('first', array('conditions' => array('id'=> $id, 'delete_flag' => 0)));

            if(!$employer){
                $this->Session->setFlash('idが存在しません');
                $this->redirect('index');
            }
        }

        $this->set('employer', $employer);
        $this->set('data',$data);
        $this->set('errorMsg', $errorMsg);

    }

    public function edit()
    {

        $errorMsg = null;
        $data = null;

        if ($this->request->isPost()){

            $result = $this->EmAdvertise->save($this->data);

            if($result) {
                $this->Session->setFlash('更新が成功しました。');
                $this->redirect('index');
            }else{
                $errorMsg = 'データベースに保存できませんでした。';
            }

            $data = $this->data;

        }else{

            //ViewからIDを受け取り
            $id = $this->request->query['id'];
            if(!$id){
                $this->Session->setFlash('IDがありません。');
                $this->redirect('index');
            }

            //ModelにIDを転送
            $data = $this->EmAdvertise->find('first',array('conditions' => array('id' => $id, 'delete_flag' => 0)));
            if(!$data){
                $this->Session->setFlash('DBに該当するIDが見つかりません。');
                $this->redirect('index');
            }

        }

        $this->set('data', $data);
        $this->set('errorMsg', $errorMsg);

    }


    public function done()
    {

    }

    public function example()
    {

    }

    public function preview()
    {
        $errorMsg = null;
        $data = null;

        $id = $this->request->query['id'];
        if(!$id) {
            $this->redirect('index');
        }

        $data = $this->EmAdvertise->find('first',array('conditions' => array('id' => $id, 'delete_flag' => 0)));
        if(!$data){
            $this->Session->setFlash('DBに該当するIDが見つかりません。');
            $this->redirect('index');
        }

        $this->set('data',$data);
        $this->set('errorMsg', $errorMsg);
    }

}