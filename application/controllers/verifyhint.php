<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of verifyhint
 *
 * @author Administrator
 */
class verifyhint extends CI_Controller{
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
 
   $this->form_validation->set_rules('username', 'Email', 'trim|required|xss_clean');
   $this->form_validation->set_rules('hint', 'Hint', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('hint');
   }
   else
   {
     //Go to private area
     redirect('Home', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   $hint = $this->input->post('hint');
   //query the database
   $result = $this->user->hint($username, $hint);
 
   if($result)
   {
   /*  $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
           'username' => ($row->firstname)." ".($row->lastname)
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }*/
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid email or hint');
     return false;
   }
 }
}

?>
