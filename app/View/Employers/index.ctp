<?php
 echo $this->Html->para('Employer index');
 echo $this->Form->create(false, array(
     'type' => 'post',
     'role' => 'form',
     'class' => "",
     'id' => 'employerIndexForm'
 ));
    echo $this->Form->input('Employer.login_id', array('type' => 'hidden', 'value' => ''));
    echo $this->Form->input('Employer.delete_flag', array('type' => 'hidden', 'value' => '0'));

 echo $this->Form->end();

?>