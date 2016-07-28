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
        
       'end_date1' => array(
            'rule' => array('dateCheck'),
            'allowEmpty' => true,
            'message' =>  '終了時刻が開始時刻より早い場合、入力できない。'
        ),

        'end_date2' => array(
            'rule' => array('monthCheck'),
            'allowEmpty' => true,
            'message' =>  '月を入力してください。'
        )


    );

    /**
     * @param $data
     * @return bool
     *
     * ①開始年月日は入力された？
     * YESの場合：
     *  終了年月日が入呂っくされたか？
     *  YESの場合：
     *
     *      ②開始年は終了年より小さいか？
     *          YESの場合：
     *             trueをリターンする。
     *          NOの場合：
     *              ③開始年と終了年が相等？
     *                  YESの場合：
     *                      ④開始月を終了月より小さい？
     *                          YESの場合：
     *                              trueをリターンする。
     *                          NO：
     *                              falseをリターンする。
     *                  NOの場合：
     *                      falseをリターンする。
     *  NOの場合：
     *      trueをリターンする。
     * NOの場合：
     *  falseをリターンする。
     */
   public function dateCheck($data){
       //exit(var_dump($data['UserResume']['start_date1']));

       $this->data['UserResume']['start_date'] = $this->data['UserResume']['start_date1']['year'].'-'.$this->data['UserResume']['start_date2']['month'].'-01';

       $this->data['UserResume']['end_date'] = $this->data['UserResume']['end_date1']['year'].'-'.$this->data['UserResume']['end_date2']['month'].'-01';

       if($this->data['UserResume']['start_date']){
           if($this->data['UserResume']['end_date']){
               if($this->data['UserResume']['start_date1']<$this->data['UserResume']['end_date1']){
                   return true;
               }else {
                   if($this->data['UserResume']['start_date1']==$this->data['UserResume']['end_date1']){
                       if($this->data['UserResume']['start_date2']<$this->data['UserResume']['end_date2']){
                           return true;
                       }else {
                           return false;
                       }
                   }else {
                       return false;
                   }
               }
           }else {
              return true;
           }
       }else{
           return false;
       }
   }

    public function monthCheck($data){
        if($this->date['UserResume']['end_date1']!==null&&$data['UserResume']['end_date2']==null){
            return false;
        }else{
            return true;
        }
    }
    
    
}
?>