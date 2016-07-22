<?php
class UserResume extends AppModel
{
    public $validate = array(

        'company' => array(
            'rule' => array('between',0,50),
            'message' => '50文字以内で入力してください。'
        ),

        'occupation' => array(
            'rule' => array('between',0,500),
            'message' => '１−500文字以内で入力してください。'
        ),

        'job_description' => array(
            'rule' => array('between',0,1000),
            'message' => '１−50文字以内で入力してください。'
        ),

        'appeal_point' => array(
            'rule' => array('between',0,1000),
            'message' => '１−50文字以内で入力してください。'
        ),
        
       'end_date' => array(
            'rule' => array('dateCheck'),
            'message' =>  'パスワードとパスワード確認の入力が一致していません。'
        )
    );

   public function dateCheck($data){
       
       
   }
    
    
}
?>