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

   public function dateCheck($data){

       $date = $this->data['UserResume']['end_date'];

       if(!$date){

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
       }


   }
    
    
}
?>