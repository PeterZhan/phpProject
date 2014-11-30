<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of verifyregister
 *
 * @author Administrator
 */
class verifyregister extends CI_Controller {
    //put your code here
 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('firstname', 'First Name', 'trim|min_length[1]|xss_clean');
   $this->form_validation->set_rules('lastname', 'Last Name', 'trim|min_length[1]|xss_clean');
  $this->form_validation->set_rules('username', 'Your Email', 'trim|required|min_length[8]|valid_email|callback_check_database');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
   $this->form_validation->set_rules('hint', 'Hint', 'trim|required|min_length[4]|xss_clean');
  // $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
 //  $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
       
       
     $this->load->view('register');
   }
   else
   {
       
    $this->user->add_user();   
       
     //Go to private area
     redirect('home', 'refresh');
   }
 
 }
    
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
  
   //query the database
   $result = $this->user->check($username);
 
   if($result)
   {
       /*
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
           'username' => ($row->firstname)." ".($row->lastname)
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }*/
     $this->form_validation->set_message('check_database', 'Email address already exits!');  
     return false;
   }
   else
   {
     
     return true;
   }
 }   
    
}

?>
