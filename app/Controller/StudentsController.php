<?php

/* 
 *  This class contains the data for adding new students
 * 
 * @author Halsey Takang 
 */
App::uses('Controller', 'Controller');
class StudentsController extends AppController{
    public $helpers = array('Js', 'Form', 'Html');
    public $uses = array();
    public $components = array('RequestHandler');
    
    function beforeFilter() {
        parent::beforeFilter();
    }
    
    function index(){
        
    }
    
    function addNewStudent(){
        
    }
}

