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
            'message' =>  '終了時刻が開始時刻より早い場合、入力できない。'
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

       $this->data['UserResume']['start_date'] = $data['UserResume']['start_date1'].'-'.$data['UserResume']['start_date2'];
       $this->data['UserResume']['end_date'] = $this->data['UserResume']['end_date1'].'-'.$this->data['UserResume']['end_date2'];

       if($this->data['UserResume']['start_date']){
           if($this->data['UserResume']['end_date']){
               if($this->data['UserResume']['start_date1']<$this->data['UserResume']['end_date1']&&$this->data['UserResume']['end_date2']!==null){
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


/*       if(!$date){

           $start_date = $this->data['UserResume']['start_date'];
           $start_date1= substr($start_date, 0, 4);
           $start_date2 = substr($start_date,5,2);

           $end_date = $this->data['UserResume']['end_date'];
           $end_date1 = substr($end_date, 0, 4);
           $end_date2 = substr($end_date,5,2);

           if ($start_date1 < $end_date1){

               return true;
           }else{
               if($start_date1 = $end_date1&&$start_date2 < $end_date2){
                   return true;
               }else {
                   return false;
               }
           }
       }else{
           return true;
       }*/


   }
    
    
}
?>