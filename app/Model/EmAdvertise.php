<?php
class EmAdvertise extends AppModel{

    public $validate = array(
        //職業の文字数をチェック
        'occupation' => array(
            array(
                'rule' => array('between', 1, 500),
                'message' => '職業を500字以内で入力してください。'),
            array(
                'rule' => 'alphaNumeric',
                'message' => '文字たまは数字を入力してください。')
        ),
        
        'salary_system' => array(
            'rule' => array('between', 1, 8),
            'message' => '8字以内で入力してください。'
        ),

        'salary_min' => array(
            array(
                'rule' => array('between', 1, 10),
                'message' => '10字以内で入力してください。'),
            array(
                'rule' => 'numeric',
                'message' => '数字を入力してください。')
        ),

        'salary_max' => array(
            'rule' => array('between', 1, 10),
            'message' => '10字以内で入力してください。'
        ),

        'location' => array(
            array(
                'rule' => array('between', 1, 500),
                'message' => '500字以内で入力してください。'),
            array(
                'rule' => 'alphaNumeric',
                'message' => '文字たまは数字を入力してください。')

        ),

        'description' => array(
            'rule' => array('between', 1, 500),
            'message' => '500字以内で入力してください。'
        ),

        'qualification' => array(
            array(
                'rule' => array('between', 1, 500),
                'message' => '500字以内で入力してください。'),
            array(
                'rule' => 'alphaNumeric',
                'message' => '文字たまは数字を入力してください。')

        ),

        'welfare' => array(
            'rule' => array('between', 1, 200),
            'message' => '200字以内で入力してください。'
        ),

        'vacation' => array(
            'rule' => array('between', 1, 200),
            'message' => '200字以内で入力してください。'
        )
    );

    public function editProfile($id)
    {

        
        $user = $this->EmAdvertise->editProfile($id);

        $user = $this->find('first', array('conditions' => array('EmAdvertise.id' => $id, 'EmAdvertise.delete_flag' => '0')));

        return $user;
    }
}