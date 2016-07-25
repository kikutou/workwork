<?php
class EmFixedmessage extends AppModel
{
    public $name = 'em_fixedmessage';

    public $validate = array(

       'id' => array(
           'rule' => array('between', 1, 11),
            'required' => true,
            'message' => '11字以内をご入力ください'
        ),
       'employer_id' => array(
           'rule' => array('between', 1, 11),
           'required' => true,
           'message' => '11字以内をご入力ください'
       ),
        'name' => array(
            'rule' => array('between', 1, 50),
            'required' => true,
            'message' => '50字以内をご入力ください'
        ),
        'title' => array(
            'rule' => array('between', 1, 50),
            'required' => true,
            'message' => '50字以内をご入力ください'
        ),
        'content' => array(
            'rule' => array('between', 1, 1500),
            'required' => true,
            'message' =>'1500字以内をご入力ください'
        ),
        'representitive' => array(
            'rule' => array('between', 1, 50),
            'required' => true,
            'message' => '255字以内をご入力ください'
        ),
        'email' => array(
            'rule' => 'email',
            'required' => true,
            'message' => 'メールの格式は間違っています'
        ),
        'mobile' => array(
            'rule' => array(
                'numeric',
                array('between', 1, 11),
            ),
            'required' => true,
            'message' => '正しい電話番号をご入力ください'
        ),
        /*
        'delete' => array(
            'rule' => 'notBlank',
            'required' => true
        )*/
    );
}
?>