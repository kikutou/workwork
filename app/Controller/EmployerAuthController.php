<?php

class EmployersController extends AppController {

    //public $helpers = array('Js' => array('Jquery'));

    public $name = "Employers";
    public $layout = "employers";
    public $autoRender = true;

    //認証コンポーネントを利用する
    public $components = array(
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'Employer',
                    'fields' => array(
                        'username' => 'login_id',
                        'password' => 'password',
                    ),
                    'scope' => array('Employer.delete_flag' => 0),
                )
            ),
            'loginAction' => array(
                'controller' => 'employers',
                'action' => 'login',
            ),
        )
    );

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow(array('signup','logout'));
    }






}