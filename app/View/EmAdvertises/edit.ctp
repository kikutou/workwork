<script>
    $(
        function(){
        $("#edit_id").validationEngine();
    };
    )
</script>
<?php

if($errorMsg){
    echo $this->Html->para('errorMsg', $errorMsg);
}

echo  $this->Form->create(false, array('type' => 'post', 'id' => 'edit_id'));

    echo $this->Html->para('', "person in charge information");
    echo "<br/><br/>";

    echo $this->Form->input('EmAdvertise.id', array('type' => 'hidden', 'value' => $data['EmAdvertise']['id']));

    //職業
    echo $this->Form->label('EmAdvertise.occupation', 'occupation');
    echo $this->Form->textarea('EmAdvertise.occupation', array('value' => $data['EmAdvertise']['occupation']));
    echo $this->Form->error('EmAdvertise.occupation');
    //収入システム
    echo $this->Form->label('EmAdvertise.salary_system', 'salary system');
    //echo $this->Form->select('EmAdvertise.salary_system',
        $salary = array(
            '0' => '1',
            '1' => '2',
            '2' => '3',
            '3' => '4',
            '4' => '5',
            '5' => '6',
            '6' => '7',
            '7' => '8');
        //array('empty' => '※項目を選択'),
        //array('value' => $data['EmAdvertise']['salary_system']));
    ?>
    //javascript
    <select name = "data[EmAdvertise][salary_system]" id = "EmAdvertiseSalarySystem">
        <option value = "">項目を選んでください</option>
        <?php
        foreach ($salary as $key => $value){
            if ($data['EmAdvertise']['salary_system'] == $key && $data['EmAdvertise']['salary_system'] !== null){
                echo "<option value =".$key." selected>".$value."</potion>";
            }else{
                echo "<option value=".$key.">".$value."</option>";
            }
        }
        ?>
    </select>

    <?php
    echo $this->Form->error('EmAdvertise.salary_system');
    //収入
    echo $this->Form->label('EmAdvertise.salary_min', 'salary min');
    echo $this->Form->text('EmAdvertise.salary_min', array('value' => $data['EmAdvertise']['salary_min']));
    echo $this->Form->label('EmAdvertise.salary_max', 'salary max');
    echo $this->Form->text('EmAdvertise.salary_max', array('value' => $data['EmAdvertise']['salary_max']));
    echo $this->Form->error('EmAdvertise.salary_min');
    echo $this->Form->error('EmAdvertise.salary_max');
    //位置
    echo $this->Form->label('EmAdvertise.location', 'location');
    echo $this->Form->textarea('EmAdvertise.location', array('value' => $data['EmAdvertise']['location']));
    echo $this->Form->error('EmAdvertise.location');
    //記述
    echo $this->Form->label('EmAdvertise.description', 'job description');
    echo $this->Form->textarea('EmAdvertise.description', array('value' => $data['EmAdvertise']['description']));
    echo $this->Form->error('EmAdvertise.description');
    //資格
    echo $this->Form->label('EmAdvertise.qualification', 'qualification');
    echo $this->Form->textarea('EmAdvertise.qualification', array('value' => $data['EmAdvertise']['qualification']));
    echo $this->Form->error('EmAdvertise.qualification');
    //待遇・福利
    echo $this->Form->label('EmAdvertise.welfare', 'welfare');
    echo $this->Form->textarea('EmAdvertise.welfare', array('value' => $data['EmAdvertise']['welfare']));
    echo $this->Form->error('EmAdvertise.welfare');
    //休暇
    echo $this->Form->label('EmAdvertise.vacation', 'vacation');
    echo $this->Form->textarea('EmAdvertise.vacation', array('value' => $data['EmAdvertise']['vacation']));
    echo $this->Form->error('EmAdvertise.vacation');
    //サブミット
    echo $this->Form->submit("authentication");

echo $this->Form->end();
?>


