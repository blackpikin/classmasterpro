
<div>
    <!-- place for each statement here -->
    <div class="form">
        <?php echo $this->Form->create('Student') ?>
        <?php 
        // first name
          echo $this->Html->div('formDiv', 
                  $this->Form->input('Student.firstname', array(
                      'div'=>false,
                      'type'=>'text',
                      'class'=> 'form-control',
                      'placeHolder'=>"The student's first name",
                      'label'=>'First name',
                      'required' => true,
                      'width'=> 100,    
                      'autocomplete'=>false,
                      'autocorrect'=>false,
                      'error' => false
                  )).$this->Html->tag('span', null, array('id'=>'firstname')));
echo $this->Form->error('Student.firstname', 'There is an error with the first name', array()); 

       // middle name
          echo $this->Html->div('formDiv', 
                  $this->Form->input('Student.middlename', array(
                      'div'=>false,
                      'type'=>'text',
                      'class'=> 'form-control',
                      'placeHolder'=>"The student's middle name",
                      'label'=>'Middle name',
                      'required' => true,
                      'width'=> 100,    
                      'autocomplete'=>false,
                      'autocorrect'=>false,
                      'error' => false
                  )).$this->Html->tag('span', null, array('id'=>'mdname')));
echo $this->Form->error('Student.middlename', 'There is an error with the middle name', array()); 

// last name
          echo $this->Html->div('formDiv', 
                  $this->Form->input('Student.lastname', array(
                      'div'=>false,
                      'type'=>'text',
                      'class'=> 'form-control',
                      'placeHolder'=>"The student's last name",
                      'label'=>'Last name',
                      'required' => true,
                      'width'=> 100,    
                      'autocomplete'=>false,
                      'autocorrect'=>false,
                      'error' => false
                  )).$this->Html->tag('span', null, array('id'=>'lstname')));
echo $this->Form->error('Student.lastname', 'There is an error with the last name', array());

//----gender-----
echo $this->Html->div('formDiv',
     $this->Form->input('Student.sex', 
        array(
        'div'=>false,
        'class' => 'form-control',    
        'type' =>'select',    
        'options'=> array('M'=> 'Male', 'F'=>'Female'),
        'empty' => "(Select the student's sex)",    
        'label'=>'Sex',
        'required' => true,
        'error' => false
    )).$this->Html->tag('span', null, array('id'=>'sex'))
    );
  echo $this->Form->error('Student.sex', 'There is an error with the sex', array());
        ?>
        <div class="formDiv">
            <?php echo $this->Form->end('Save') ?>
        </div>
        
    </div>
</div>