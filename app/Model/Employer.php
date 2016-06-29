<?php
class Employer extends AppModel {

    public $validate = array(
        //従業員の苗字の文字数をチェック
        'staff_family_name' => array(
            'rule' => array('between', 1, 30),
            'message' => '苗字を30字以内で入力してください。'
        ),
        //従業員の名前の文字数をチェック
        'staff_first_name' => array(
            'rule' => array('between', 1, 30),
            'message' => '名前を30字以内で入力してください。'
        ),
        //従業員のふりがなの文字数をチェック
        'staff_furigana' => array(
            'rule' => array('between', 1, 60),
            'message' => 'ふりがなを60字以内で入力してください。'
        ),
        //部署名の文字数をチェック
        'staff_department' => array(
            'rule' => array('between', 1, 50),
            'message' => '部署名を50字以内で入力してください。'
        ),
        //ポストの文字数をチェック
        'staff_position' => array(
            'rule' => array('between', 1, 50),
            'message' => 'ポストを30字以内で入力してください。'
        ),
        //従業員の電話番号の桁数をチェック
        'staff_mobile' => array(
            'rule' => array('between', 10, 11),
            'message' => '電話番号の桁が正しくありません。'
        ),
        //従業員のメールの形式をチェック
        'staff_email' => array(
            array(
                'rule' => array('email'),
                'message' => 'メールの形式が正確ではありません。'
            ),
            array(
                'rule' => array('between', 1, 255),
                'message' => 'メールを255字以内で入力してください。'
            ),
            array(
                'rule' => array('checkMail'),
                'message' => 'このメールはすでに登録されています。'
            )
        ),
        //会社名の文字数をチェック
        'name' => array(
            'rule' => array('between', 1, 50),
            'message' => '会社名を50字以内で入力してください。'
        ),
        //会社のURLをチェック
        'url' => array(
            array(
                'rule' => array('between', 1, 255),
                'message' => 'URLを255字以内で入力してください。'
            ),
            array(
                'rule' => 'url',
                'message' => 'URLの形式が正しくありません。'
            )
        ),
        //ユーザーネームをチェック
        'login_id' => array(
            array(
                'rule' => array('between', 1, 50),
                'message' => 'ユーザー名を50字以内で入力してください。'
            ),
            array(
                'rule' => 'checkLoginId',
                'message' => 'このユーザー名が既に登録されています、変更してください。'
            )
        ),
        //パスワードをチェック

        'password' => array(
            array(
                'rule' => array('between', 8, 16),
                'message' => 'パスワードを8~16字以内で入力してください。'
            ),
            array(
                'rule' => array('checkPassword'),
                'message' => '半角英数字と_のみ記入できます。英数字それぞれ1種類以上含んでください。',
            ),
            array(
                'rule' => array('sameCheck'),
                'message' => '入力されたパスワードが一致していません。'
            )
        ),

        'password_confirm' => array(
            'rule' => 'notBlank',
            'message' => 'パスワードを8~16字以内で入力してください。'
        ),

        'foundation_date' => array(
            'rule' => 'notBlank',
            'required' => true,
            'message' => '必ず選択してください'
        ),
        'employee_amount' => array(
            'rule' => 'notBlank',
            'required' => true,
            'message' => '必ず選択してください'
        ),
        'capital' => array(
            'rule' => 'notBlank',
            'required' => true,
            'message' => '必ず選択してください'
        ),
        'indusrty' => array(
            'rule' => 'notBlank',
            'required' => true,
            'message' => '必ず選択してください'
        ),
        'category' => array(
            'rule' => 'notBlank',
            'required' => true,
            'message' => '必ず選択してください'
        ),
        'postcode' => array(
            'rule' => 'notBlank',
            'required' => true,
            'message' => '必ず選択してください'
        ),
        'province' => array(
            'rule' => 'notBlank',
            'required' => true,
            'message' => '必ず選択してください'
        ),
        'address1' => array(
            'rule' => array('between', 1, 255),
            'required' => true,
            'message' => 'error もう一度確認してください'
        ),
        'address2' => array(
            'rule' => array('between', 1, 255),
            'required' => true,
            'message' => 'error もう一度確認してください'
        ),
        'fax' => array(
            'rule' => array('between', 10, 11),
            'required' => true,
            'message' => 'error もう一度確認してください'
        ),
        'tel' => array(
            'rule' => array(
                //数字を検索
                'numeric',
                array('between', 10, 11)
            ),
            'required' => true,
            'message' => '数字だけ入力してください'
        ),
        'email' => array(
            array(
                'rule' => array('between', 1, 255),
                'required' => true,
                'message' => 'error もう一度確認してください'
            ),
            array(
                'rule' => 'email',
                'message' => 'メールの形式が正確ではありません。'
            ),
        )
        /*'old_password' => array(
          array(
            'rule' => array('between',8,16),

            'message' => 'パスワードを8~16字以内で入力してください。'
          ),
          array(
            'rule' => 'oldPasswordCheck',

            'message' => '古いパスワードが正しくありません。'
          )
        )*/
    );


    public function checkMail($data)
    {
        $employer = $this->find('first', array('conditions' => array('staff_email' => $data)));
        if($employer){
            return false;
        }else{
            return true;
        }
    }

    public function checkLoginId($data)
    {
        $employer = $this->find('first', array('conditions' => array('login_id' => $data)));
        if($employer){
            return false;
        }else{
            return true;
        }
    }

    //パスワードの同一性チェックをする。
    public function sameCheck($data)
    {

        $confirm = $this->data['Employer']['password_confirm'];
        $password = $this->data['Employer']['password'];


        if ($confirm == $password){
            $this->data['Employer']['password'] = md5($this->data['Employer']['password']);
            return true;
        }else{
            return false;
        }
    }

    public function checkPassword($data)
    {

        #exit(var_dump($data));

        $password = $data['password'];

        $strlen = strlen($password);
        $standard = '0123456789abcdefghijklmnopqrstuvwxyz_';
        $numbers = '0123456789';
        $characters = 'abcdefghijklmnopqrstuvwxyz';

        $numberNum = 0;
        $characterNum = 0;

        for( $i = 0; $i < $strlen; $i++ ) {
            $char = substr( $password, $i, 1 );
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



    /*public function oldPasswordCheck($data)
    {

      $confirm = $this->data['Employer']['password'];
      $password = $this->data['Employer']['old_password'];
      $this->data['Employer']['old_password'] = md5($this->data['Employer']['old_password']);


      if ($confirm == $password){
        return true;
      }else{
        return false;
      }
    }*/

    public function login($data){

        $loginId = $data['Employer']['login_id'];
        $password = md5($data['Employer']['password']);
        
        $employer = $this->find('first',array('conditions'=> array('Employer.login_id' => $loginId, 'Employer.password' => $password, 'Employer.delete_flag' => 0)));
        
        return $employer? true: false;
        
    }

}
?>
