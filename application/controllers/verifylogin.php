<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   
   
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
   $this->form_validation->set_rules('captcha', "Captcha", 'required');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
    /*   
       $vals = array(
    'word' => 'Random word',
    'img_path' => './captcha/',
    'img_url' => base_url().'captcha/',
    'font_path' => './path/to/fonts/texb.ttf',
    'img_width' => '150',
    'img_height' => 30,
    'expiration' => 7200
    );
      
      
      $this->session->set_userdata('captchaWord', $captcha['word']);
      $data = array(
      'image'=> $cap['image'],
    
    ); */
       
     $this->load->view('login');
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
   $password = $this->input->post('password');
   
   $word = $this->session->userdata('captchaWord');
   $captcha = $this->input->post('captcha');
    
   if(strcmp(strtoupper($captcha),strtoupper($word)) != 0){
       
        $this->form_validation->set_message('check_database', 'Invalid captcha input!');
       
        return false;
   }
   
   //query the database
   $result = $this->user->login($username, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
           'username' => ($row->firstname)." ".($row->lastname)
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid email or password');
     return false;
   }
 }
}
?>