<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of forgetpass
 *
 * @author Administrator
 */
class forgetpass extends CI_Controller{
    //put your code here
    function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }
 
 function index()
 {
     
      $this->load->helper(array('form', 'html'));
      $this->load->view('hint');
     
   //This method will have the credentials validation
     /*
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }
 */
 }
}

?>
