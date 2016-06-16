<?php

class UsersController extends AppController {

    /*kiku*/

    public $name = "Users";
    public $users = null;
    //public $autoLayout = true;
    public $layout = "users";
    public $autoRender = true;


    public function index() {
            print 'this is the work';
    }

    public function login() {
        $this->layout = false;

    }

    public function signup() {
        $this->layout = false;
    }

}