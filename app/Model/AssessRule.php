<?php
/**
 * This class contains the data for assessing students marks each term
 * 
 * @author Halsey Takang 
 * 
 */

App::uses('AppModel', 'Model');
class AssessRule extends AppModel{
    public $name = 'AssessRule';
    public $primaryKey = 'id';        
    public $belongsTo = array('Form' => array('className'=> 'Form', 'foreignKey'=>'class_id'));
}
