<script>
    $(
        function(){
            $("#").validationEngine();
        };
    )
</script>

<?php
if($errorMsg)
{
    echo $this->Html->para('errorMsg',$errorMsg);
}

echo $this->Form->create(false, array('type' => 'post'));

    //職業
    echo $this->Form->label('EmAdvertise.occupation', 'occupation');
    $occupationValue = array();
    if($data){
        $occupationValue['value'] = $data['EmAdvertise']['occupation'];
    }
    echo $this->Form->textarea('EmAdvertise.occupation', $occupationValue);
    echo $this->Form->error('EmAdvertise.occupation');

    //収入システム
    echo $this->Form->label('EmAdvertise.salary_system', 'salary system');
    $salary_systemValue = array();
    if($data){
        $salary_systemValue['value'] = $data['EmAdvertise']['salary_system'];
    }
    echo $this->Form->select('EmAdvertise.salary_system',
                        array('1' => '1',
                            '2' => '2',
                            '3' => '3',
                            '4' => '4',
                            '5' => '5',
                            '6' => '6',
                            '7' => '7',
                            '8' => '8'),
                        array('empty' => '※項目を選択'));
    echo $this->Form->error('EmAdvertise.salary_system');

    //収入
    echo $this->Form->label('EmAdvertise.salary_min', 'salary min');
    $salary_minValue = array();
    if($data){
        $salary_minValue['value'] = $data['EmAdvertise']['salary_min'];
    }
    echo $this->Form->text('EmAdvertise.salary_min');
    echo $this->Form->label('EmAdvertise.salary_max', 'salary max');
    $salary_maxValue = array();
    if($data){
        $salary_maxValue['value'] = $data['EmAdvertise']['salary_max'];
    }
    echo $this->Form->text('EmAdvertise.salary_max');
    echo $this->Form->error('EmAdvertise.salary_min');
    echo $this->Form->error('EmAdvertise.salary_max');
    //位置
    echo $this->Form->label('EmAdvertise.location', 'location');
    $locationValue = array();
    if($data){
        $locationValue['value'] = $data['EmAdvertise']['location'];
    }
    echo $this->Form->textarea('EmAdvertise.location');
    echo $this->Form->error('EmAdvertise.location');
    //記述
    echo $this->Form->label('EmAdvertise.description', 'job description');
    $descriptionValue = array();
    if($data){
        $descriptionValue['value'] = $data['EmAdvertise']['description'];
    }
    echo $this->Form->textarea('EmAdvertise.description');
    echo $this->Form->error('EmAdvertise.description');
    //資格
    echo $this->Form->label('EmAdvertise.qualification', 'qualification');
    $qualificationValue = array();
    if($data){
        $qualificationValue['value'] = $data['EmAdvertise']['qualification'];
    }
    echo $this->Form->textarea('EmAdvertise.qualification');
    echo $this->Form->error('EmAdvertise.qualification');
    //待遇・福利
    echo $this->Form->label('EmAdvertise.welfare', 'welfare');
    $welfareValue = array();
    if($data){
        $welfareValue['value'] = $data['EmAdvertise']['welfare'];
    }
    echo $this->Form->textarea('EmAdvertise.welfare');
    echo $this->Form->error('EmAdvertise.welfare');
    //休暇
    echo $this->Form->label('EmAdvertise.vacation', 'vacation');
$vacationValue = array();
if($data){
    $vacationValue['value'] = $data['EmAdvertise']['vacation'];
}
    echo $this->Form->textarea('EmAdvertise.vacation');
    echo $this->Form->error('EmAdvertise.vacation');

    echo $this->Form->submit('submit');

echo $this->Form->end();

?>