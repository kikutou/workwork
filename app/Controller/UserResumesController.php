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

    }

    public function edit() {
        
        $user = null;
        $errorMsg = null;
        $resumes = null;

        $id = $this->request->query['resume_id'];

        if(!$id) {
            //TODO add error message
            $this->redirect('index');
        }

        //$user = $this->User->find('first', array('conditions' => array('User.id' => $id, 'User.delete_flag' => '0')));

        //if(!$user) {
            //TODO add error message
            //$this->redirect('index');
        //}

        $resumes = $this->UserResume->find('all', array('conditions' => array('UserResume.user_id' => $id, 'delete_flag' => 0)));

        //viewに送り出す
        $this->set('user',$user);
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

        $resumes = $this->UserResume->find('all', array('conditions' => array('UserResume.user_id' => $id, 'delete_flag' => 0)));
        
        //viewに送り出す
        $this->set('user',$user);
        $this->set('resumes',$resumes);
        $this->set('errorMsg',$errorMsg);

    }

}
