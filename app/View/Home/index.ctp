<?php 
$this->assign('title', 'Home')
?>

    <?php $this->start('sidebar'); ?>
    <a href="<?php echo $this->Html->url(array('controller'=>'', 'action'=>'')) ?>">Manual</a>
    <?php $this->end(); ?>

