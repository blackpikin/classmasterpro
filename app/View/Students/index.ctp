<?php $this->start('sidebar');?>
<a href="<?php echo $this->Html->url(array('controller'=>'students', 'action'=>'addNewStudent'))?>" >Add new student</a>
<?php $this->end() ?>

<div>
    <!-- place for each statement here -->
    <div class="person">
        This is a student
    </div>
</div>