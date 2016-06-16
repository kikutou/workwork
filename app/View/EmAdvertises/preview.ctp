<?php

if($errorMsg){
    echo $this->Html->para('errorMsg', $errorMsg);
}


//職業
echo $this->Html->para('EmAdvertise.occupation', 'occupation');
echo $this->Html->para('', $data['EmAdvertise']['occupation']);

//収入システム
echo $this->Html->para('EmAdvertise.salary_system', 'salary system');
echo $this->Html->para('', $data['EmAdvertise']['salary_system']);

//収入
echo $this->Html->para('EmAdvertise.salary_min', 'salary min');
echo $this->Html->para('', $data['EmAdvertise']['salary_min']);
echo $this->Html->para('EmAdvertise.salary_min', 'salary max');
echo $this->Html->para('', $data['EmAdvertise']['salary_max']);

//位置
echo $this->Html->para('EmAdvertise.location', 'location');
echo $this->Html->para('', $data['EmAdvertise']['location']);

//記述
echo $this->Html->para('EmAdvertise.description', 'job description');
echo $this->Html->para('', $data['EmAdvertise']['description']);

//資格
echo $this->Html->para('EmAdvertise.qualification', 'qualification');
echo $this->Html->para('', $data['EmAdvertise']['qualification']);

//待遇・福利
echo $this->Html->para('EmAdvertise.welfare', 'welfare');
echo $this->Html->para('', $data['EmAdvertise']['welfare']);

//休暇
echo $this->Html->para('EmAdvertise.vacation', 'vacation');
echo $this->Html->para('', $data['EmAdvertise']['vacation']);

?>


