<?php

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
                
		echo $this->Html->css('cmp');
                echo $this->Html->css('bootstrap.min');
                echo $this->Html->css('bootstrap-theme.min');
                echo $this->Html->script('jquery-2.1.3');
                echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <div id="header" class="container-fluid">
	        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
              <span class="navbar-brand">ClassMaster</span>
            </div>
            <div>
               <ul class="nav navbar-nav">
                  <li><a href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'index' )) ?>">Home</a></li>
                  <li><a href="<?php echo $this->Html->url(array('controller' => 'students', 'action' => 'index' )) ?>">Student</a></li>
                  <li><a href="<?php echo $this->Html->url(array('controller' => 'marks', 'action' => 'index' )) ?>">Marks</a></li> 
                  <li><a href="<?php echo $this->Html->url(array('controller' => 'views', 'action' => 'index' )) ?>">View</a></li>
                  <li><a href="<?php echo $this->Html->url(array('controller' => 'transcripts', 'action' => 'index' )) ?>">Transcript</a></li>
                  <li><a href="<?php echo $this->Html->url(array('controller' => 'subjects', 'action' => 'index' )) ?>">Subjects</a></li>
                  <li><a href="<?php echo $this->Html->url(array('controller' => 'forms', 'action' => 'index' )) ?>">Classes</a></li>
                  <li><a href="<?php echo $this->Html->url(array('controller' => 'settings', 'action' => 'index' )) ?>">Settings</a></li>
                </ul>
            </div>
        </nav>
            
    </div>
        
    <div id="content" class="container">
	<div class="row">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 tsb">
                   <?php echo $this->fetch('sidebar'); ?>
                </div>
                <div class="hidden-xs col-sm-10 col-md-10 col-lg-10 tct">
                   <?php echo $this->fetch('content'); ?>
                </div>
            </div>	
    </div>
    
    <div id="footer" class="container-fluid">
       <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <ul class="nav navbar-nav">
                <li><a href="#">&COPY; 2015 Zion soft</a></li>
            </ul>
        </nav> 
    </div>
</body>
</html>
