<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of register
 *
 * @author Administrator
 */
class register extends CI_Controller{
    //put your code here
  function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   $this->load->helper(array('form', 'html'));
   $this->load->view('register');
 }
    
    
}

?>
