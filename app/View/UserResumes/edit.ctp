<?php
    if($errorMsg){
        echo $this->Html->para('', $errorMsg);
    }

    echo $this->Form->create(false, array('type' => 'post', 'id' => 'editForm'));

        echo $this->Form->input('UserResume.delete_flag', array('type' => 'hidden', 'value' => '0'));

        echo $this->Form->label('UserResume.company', 'Company');
        echo $this->Form->text('UserResume.company');
        echo $this->Form->error('UserResume.company');

        echo $this->Form->label('UserResume.employment_type', 'Employment Type');
        echo $this->Form->select(
            'UserResume.employment_type',
            array(
                '0' => 'Full-time',
                '1' => 'Part-time',
                '2' => 'Casual',
                '3' => 'Shiftworkers',
            ),
            array('empty' => '選んでください')
        );
        echo $this->Form->error('UserResume.employment_type');

        echo $this->Form->label('UserResume.position', 'Position');
        echo $this->Form->text('UserResume.position');
        echo $this->Form->error('UserResume.position');


        echo $this->Form->label('UserResume.employee_amount', 'Employee Amount');
        echo $this->Form->select(
            'UserResume.employee_amount',
            array(
                '0' => '10-100',
                '1' => '101-300',
                '2' => '301-500',
                '3' => '501-1000',
                '4' => '1001-1500',
                '5' => '1501以上'
            ),
            array('empty' => '選んでください')
        );
        echo $this->Form->error('UserResume.employee_amount');

        echo $this->Form->label('UserResume.start_date', 'Start Date');
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







        echo $this->Form->label('UserResume.salary', 'Salary');
        echo $this->Form->select(
            'UserResume.salary',
            array(
                '0' => '1000-3000',
                '1' => '3001-5000',
                '2' => '5001-10000',
                '3' => '10001-20000',
                '4' => '20001-35000',
                '5' => '35000以上'
            ),
            array('empty' => '選んでください')
        );
        echo $this->Form->error('UserResume.salary');

        echo $this->Form->label('UserResume.industry', 'Industry');
        echo $this->Form->select(
            'UserResume.industry',
            array(
                '0' => 'student',
                '1' => 'worker',
                '2' => 'farmer',
                '3' => 'saler',
            ),
            array('empty' => '選んでください')
        );
        echo $this->Form->error('UserResume.industry');

        echo $this->Form->label('UserResume.occupation', 'Occupation');
        echo $this->Form->textarea('UserResume.occupation');
        echo $this->Form->error('UserResume.occupation');

        echo $this->Form->label('UserResume.job_description', 'Job Description');
        echo $this->Form->textarea('UserResume.job_description');
        echo $this->Form->error('UserResume.job_description');

        echo $this->Form->label('UserResume.appeal_point', 'Appeal Point');
        echo $this->Form->textarea('UserResume.appeal_point');
        echo $this->Form->error('UserResume.appeal_point');

        echo '<br/><br/>';
        echo $this->Form->submit('edit');

    echo $this->Form->end();

?>



