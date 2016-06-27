<?php
    if($errorMsg){
        echo $this->Html->para('', $errorMsg);
    }

    echo $this->Form->create(false, array('type' => 'post', 'id' => 'editForm'));

        echo $this->Form->input('UserResume.delete_flag', array('type' => 'hidden', 'value' => '0'));

        echo $this->Form->label('UserResume.company', '企業名');
        echo $this->Form->text('UserResume.company');
        echo $this->Form->error('UserResume.company');

        echo $this->Form->label('UserResume.employment_type', '雇用形態');
        echo $this->Form->select(
            'UserResume.employment_type',
            array(
                '0' => 'アルバイト',
                '1' => '派遣社員',
                '2' => '契約社員',
                '3' => '正社員'
            ),
            array('empty' => '選んでください')
        );
        echo $this->Form->error('UserResume.employment_type');

        echo $this->Form->label('UserResume.position', '役職');
        echo $this->Form->text('UserResume.position');
        echo $this->Form->error('UserResume.position');


        echo $this->Form->label('UserResume.employee_amount', '従業員数');
        echo $this->Form->select(
            'UserResume.employee_amount',
            array(
                '0' => '10人未満',
                '1' => '10人～50人未満',
                '2' => '50人～100人未満',
                '3' => '100人～500人未満',
                '4' => '500人～1000人未満',
                '5' => '1000以上'
            ),
            array('empty' => '選んでください')
        );
        echo $this->Form->error('UserResume.employee_amount');

        echo $this->Form->label('UserResume.start_date', '在籍期間');
        echo $this->Form->year('UserResume.start_date', '1960', '2016', array(), array());
        echo $this->Html->para('', '年');
        echo $this->Form->month('UserResume.start_date');
        echo $this->Html->para('', '月');
        echo $this->Form->day('UserResume.start_date', array('style' => 'display:none', 'value' => '01'));
        //echo $this->Html->para('', '日');
        echo $this->Form->error('UserResume.start_date');

        echo $this->Html->tag('span', '-----');

        echo $this->Form->label('UserResume.end_date', '');
        echo $this->Form->year('UserResume.end_date', '1960', '2016', array(), array());
        echo $this->Html->para('', '年');
        echo $this->Form->month('UserResume.end_date');
        echo $this->Html->para('', '月');
        echo $this->Form->day('UserResume.end_date', array('style' => 'display:none', 'value' => '01'));
        //echo $this->Html->para('', '日');
        echo $this->Form->error('UserResume.end_date');



        echo $this->Form->label('UserResume.salary', '年収');
        echo $this->Form->select(
            'UserResume.salary',
            array(
                '0' => '300万未満',
                '1' => '300万-500万',
                '2' => '500万-700万',
                '3' => '700万-1000万',
                '4' => '1000万以上'
            ),
            array('empty' => '選んでください')
        );
        echo $this->Form->error('UserResume.salary');

        echo $this->Form->label('UserResume.industry', '業種');
        echo $this->Form->select(
            'UserResume.industry',
            array(
                '0' => '製造業',
                '1' => '農林水産業',
                '2' => '建設土木業',
                '3' => '情報通信業',
                '4' => '電気・ガス・水道業',
                '5' => '公務',
                '6' => '教育・学習支援',
                '7' => '専門技術サービス業',
                '8' => '一般サービス業',
                '9' => '商業・小売業など',
                '10' => '運輸運送業'
            ),
            array('empty' => '選んでください')
        );
        echo $this->Form->error('UserResume.industry');

        echo $this->Form->label('UserResume.occupation', '職種');
        echo $this->Form->textarea('UserResume.occupation');
        echo $this->Form->error('UserResume.occupation');

        echo $this->Form->label('UserResume.job_description', '職務内容');
        echo $this->Form->textarea('UserResume.job_description');
        echo $this->Form->error('UserResume.job_description');

        echo $this->Form->label('UserResume.appeal_point', 'アピールポイント');
        echo $this->Form->textarea('UserResume.appeal_point');
        echo $this->Form->error('UserResume.appeal_point');

        echo '<br/><br/>';
        echo $this->Form->submit('edit');

    echo $this->Form->end();

?>



