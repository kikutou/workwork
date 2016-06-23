<?php
class User extends AppModel
{
  public $validate = array(

      'family_name' => array(
        'rule' => array('between',1,30),
        'message' => '１−３０文字以内で入力してください。'
      ),

      'first_name' => array(
        'rule' => array('between',1,30),
        'message' => '１−３０文字以内で入力してください。'
      ),

      'furigana' => array(
        'rule' => array('between',1,60),
        'message' => '１−60文字以内で入力してください。'
      ),

      'birthday' => array(
        'rule' => 'notBlank',
        'message' => '日付を選択してください。'
      ),

      'gender' => array(
        'rule' => 'notBlank',
        'message' => '性別を選択してください。'
      ),

      'email' => array(
        array(
          'rule' => 'email',
          'message' => 'メールアドレスを入力してください。'
        ),

        array(
          'rule' => array('checkMail'),
          'on' => 'create',
          'message' => 'このメールはすでに登録されています。'
        ),

        array(
            'rule' => array('updateCheck', 'email'),
            'on' => 'update',
            'message' => 'このメールはすでに他のユーザが登録されました。'
        ),

        array(
          'rule' => array('between',1,255),
          'message' => '１−255文字以内で入力してください。'
        )
      ),

      'login_id' => array(
        array(
          'rule' => array('between',1,255),
          'message' => '１−255文字以内で入力してください。'
        ),

        array(
          'rule' => array('checkId'),
            'on' => 'create',
          'message' => 'このIDはすでに登録されています。'
        ),

          array(
              'rule' => array('updateCheck','login_id'),
              'on' => 'update',
              'message' => 'このIDはすでに他のユーザが登録されました。'
          )
      ),

      'old_password' => array(
          array(
              'rule' => array('between',8,16),
              'message' => '8−16文字以内で入力してください。'
          ),
          array(
              'rule' => array('checkPassword'),
              'message' => '半角英数字と_のみ記入できます。英数字それぞれ1種類以上含んでください。',
          ),
          array(
              'rule' =>array('oldPasswordCheck'),
              'message' => '旧パスワードが間違いました。'
          )

      ),

      'password' => array(
          array(
              'rule' => array('between',8,16),
              'message' => '8−16文字以内で入力してください。'
            ),
          array(
              'rule' => array('checkPassword'),
              'message' => '半角英数字と_のみ記入できます。英数字それぞれ1種類以上含んでください。',
            ),
          array(
              'rule' => array('sameCheck'),
              'message' =>  'パスワードとパスワード確認の入力が一致していません。'
            ),
          array(
              'rule' => array('passchange'),
              'message' => 'パスワードが間違いました。'
          )
      ),

      'password_confirm' => array(
        'rule' => 'notBlank',
        'message' =>'8−16文字以内で入力してください。'
      ),

      'mobile1' => array(
          array(
              'rule' => array('between', 10, 11),
              'message' => '電話番号の桁が正しくありません。'
          ),
          array(
              'rule' => 'numeric',
              'message' => '数字を入力ください。'
          )

      ),

      'mobile2' => array(
          array(
              'rule' => array('between', 10, 11),
              'message' => '電話番号の桁が正しくありません。'
          ),
          array(
              'rule' => 'numeric',
              'message' => '数字を入力ください。'
          )
      ),

      'postcode1' => array(
          array(
              'rule' => array('between', 3, 3),
              'message' => '3文字で入力してください。'
          ),
          array(
              'rule' => 'numeric',
              'message' => '数字を入力ください。'
          )
      ),

      'postcode2' => array(
          array(
              'rule' => array('between', 4, 4),
              'message' => '4文字で入力してください。'
          ),
          array(
              'rule' => 'numeric',
              'message' => '数字を入力ください。'
          )
      ),
      
      'address1' => array(
          'rule' => array('between',1,255),
          'message' => '１−255文字以内で入力してください。'
      ),
      
      'address2' => array(
          'rule' => array('between',1,255),
          'message' => '１−255文字以内で入力してください。'
      ),
      
      'college' => array(
          'rule' => array('between',1,50),
          'message' => '１−50文字以内で入力してください。'
      ),

      'primary_major' => array(
          'rule' => array('between',1,50),
          'message' => '１−50文字以内で入力してください。'
      ),

      'secondary_major' => array(
          'rule' => array('between',1,50),
          'message' => '１−50文字以内で入力してください。'
      ),

      'certification' => array(
          'rule' => array('between',1,255),
          'message' => '１−50文字以内で入力してください。'
      ),

      'skill' => array(
          'rule' => array('between',1,255),
          'message' => '１−50文字以内で入力してください。'
      )
  );

  public function checkMail($data)
  {
    $user = $this->find('first', array('conditions' => array('email' => $data)));
    if($user){
      return false;
    }else{
      return true;
    }
  }

  public function checkId($data)
  {
    $user = $this->find('first', array('conditions' => array('login_id' => $data)));
    if($user){
      return false;
    }else{
      return true;
    }
  }

  //パスワードの同一性チェックをする。
  public function sameCheck($data)
  {

    $password1 = $this->data['User']['password_confirm'];
    $password2 = $this->data['User']['password'];

    if ($password1 == $password2){
    //  $this->data['User']['password'] = md5($this->data['User']['password']);
      return true;
    }else{
      return false;
    }
  }

  public function checkPassword($data)
  {

    #exit(var_dump($data));

    $data = $data['password'];

    $strlen = strlen($data);
    $standard = '0123456789abcdefghijklmnopqrstuvwxyz_';
    $numbers = '0123456789';
    $characters = 'abcdefghijklmnopqrstuvwxyz';

    $numberNum = 0;
    $characterNum = 0;

    for($i = 0; $i < $strlen; $i++) {
      $char = substr( $data, $i, 1 );
      $result = strpos($standard, $char);
      if($result === false){
        return false;
      }

      $resultNumber = strpos($numbers, $char);
      if($resultNumber !== false){
        $numberNum++;
      }

      $resultCharacter = strpos($characters, $char);
      if($resultCharacter !== false){
        $characterNum++;
      }

    }

    if( $numberNum == 0 || $characterNum == 0 ){
      return false;
    }

    return true;
  }

  public function updateCheck($data,$field_name){

      $user = $this->find('first',array('conditions' => array("id" => $this->data['User']['id'])));
      if (!$user){
          throw new Exception('このユーザーが見つかりませんでした。');
      }

      $old_email = $user['User'][$field_name];
      $new_email = $this->data['User'][$field_name];



      if($new_email == $old_email){
          return true;
      }else{

          $other_user = $this->find('first', array('conditions' => array($field_name => $this->data['User'][$field_name])));
          if($other_user){
              return false;
          }else{
              return true;
          }
      }

  }

    public function oldPasswordCheck($data)
    {

        //$password1 = $this->data['User']['password'];
        //まず,DBから加密されたパスワードを取得
        $user = $this->find('first', array('conditions' => array('User.id' => $this->data['User']['id'], 'delete_flag' => 0)));
        if(!$user){
            return false;
        }
        $passwordInDb = $user['User']['password'];

        //入力された旧パスワードを加密する
        $oldPassword = $this->data['User']['old_password'];
        //$this->data['User']['old_password'] = md5($this->data['User']['old_password']);

        //２つのパスワードを比較する
        if ($passwordInDb == $oldPassword){
            return true;
        }else{
            return false;
        }
    }
    
    public function profileEditSave($data){
        
        $sapreday = '';
        
        for($i = 0; $i < 8; $i++){
            
            if(isset($data['User']['spareday'.$i])){
                $sapreday = $sapreday.'1';
            }else {
                $sapreday = $sapreday.'0';
            }
        }

        $data['User']['spareday'] = $sapreday;


        $data['User']['postcode'] = $data['User']['postcode1'].$data['User']['postcode2'];

        $result = $this->save($data);
        
        return $result;

    }







}
?>



  　
