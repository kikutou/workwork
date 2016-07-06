<?php

App::uses('Controller', 'Controller');

class UserAuthController extends AppController {

    //public $helpers = array('Js' => array('Jquery'));

    public $name = "UserAuth";

    //認証コンポーネントを利用する
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
    }
}