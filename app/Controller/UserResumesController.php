<?php

class UserResumesController extends AppController {

    public $name = 'UserResumes';
    public $uses = array('User', 'UserResume');
    //public $autoLayout = true;
    public $layout = "users";
    public $autoRender = true;

    public function index() {

    }

    public function add() {
        $errorMsg = null;
        $resume = null;
        $id= null;

        if($this->request->isPost()) {

            $user_id=$this->request->data['UserResume']['user_id'];
            $result = $this->UserResume->save($this->request->data);
            
            if($result) {
                $this->redirect('example?id='.$user_id);
            }else {
                $errorMsg = 'データベースに保存できませんでした。';
            }

            $resume = $this->data;
            $this->set('id',$user_id);

        }else {
            $id = $this->request->query['id'];
            
            if(!$id) {
                $this->Session->setFlash('idが存在しません。');
                $this->redirect('index');
            }
            $this->set('id',$id);
        }

        $this->set('resume',$resume);
        $this->set('errorMsg',$errorMsg);
    }


    public function edit() {
        
        $user = null;
        $errorMsg = null;
        $resumes = null;

        if($this->request->isPost()){

            $user_id=$this->request->data['UserResume']['user_id'];
            $result = $this->UserResume->save($this->request->data);

            if($result) {
                $this->redirect('example?id='.$user_id);
            }else {
                $errorMsg = 'データベースに保存できませんでした。';
            }

            $resumes = $this->data;


        } else {

            $id = $this->request->query['resume_id'];

            if(!$id) {
                $this->Session->setFlash('idが存在しません。');
                $this->redirect('index');
            }

            //$user = $this->User->find('first', array('conditions' => array('User.id' => $id, 'User.delete_flag' => '0')));

            //if(!$user) {
                //$this->redirect('index');
            //}

            //$resumes = $this->UserResume->find('all', array('conditions' => array('UserResume.user_id' => $id, 'delete_flag' => 0)));
            $resumes = $this->UserResume->find('first', array('conditions' => array('UserResume.id' => $id, 'delete_flag' => 0)));

            if(!$resumes)
            {
                $this->Session->setFlash('ユーザーが存在しません。');
                $this->redirect('index');
            }

            /*
            print '<pre>';
            print_r($resumes);
            print '</pre>';
            exit();*/

            $start_date = $resumes['UserResume']['start_date'];
            $resumes['UserResume']['start_date1']['year'] = substr($start_date, 0, 4);
            $resumes['UserResume']['start_date2']['month'] = substr($start_date,5,2);

            $end_date = $resumes['UserResume']['end_date'];
            $resumes['UserResume']['end_date1']['year'] = substr($end_date, 0, 4);
            $resumes['UserResume']['end_date2']['month'] = substr($end_date,5,2);

        }
        
        //viewに送り出す
        //$this->set('user',$user);
        $this->set('resumes',$resumes);
        $this->set('errorMsg',$errorMsg);

    }

    public function example() {

        $user = null;
        $errorMsg = null;
        $resumes = null;

        $id = $this->request->query['id'];

        if(!$id) {

            $this->redirect('index');
        }

        $user = $this->User->find('first', array('conditions' => array('User.id' => $id, 'User.delete_flag' => '0')));

        if(!$user) {

            $this->redirect('index');
        }

        $resumes = $this->UserResume->find('all', array('conditions' => array('UserResume.user_id' => $id, 'UserResume.delete_flag' => 0)));
        
        $resume_num = count($resumes);
        
        //viewに送り出す
        $this->set('user',$user);
        $this->set('resume_num', $resume_num);
        $this->set('resumes',$resumes);
        $this->set('errorMsg',$errorMsg);

    }

    public function delete(){

        $errorMsg = null;
        $resumes = null;

        if($this->request->isPost()){

            $this->UserResume->id=$this->request->data['UserResume']['id'];
            $user_id=$this->request->data['UserResume']['user_id'];

            $result = $this->UserResume->saveField('delete_flag','1');

            if($result) {
                $this->redirect('example?id='.$user_id);
            }else {
                $errorMsg = 'データベースに保存できませんでした。';
            }

            $resumes = $this->data;


        } else {

            $id = $this->request->query['resume_id'];

            if(!$id) {
                $this->Session->setFlash('idが存在しません。');
                $this->redirect('index');
            }

            $resumes = $this->UserResume->find('first', array('conditions' => array('UserResume.id' => $id, 'delete_flag' => 0)));

            if(!$resumes)
            {
                $this->Session->setFlash('ユーザーが存在しません。');
                $this->redirect('index');
            }
            
        }
        $this->set('resumes',$resumes);
        $this->set('errorMsg',$errorMsg);

    }
}
