<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Administrator
 */
class Login extends CI_Controller {
    //put your code here
   
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   $this->load->helper(array('form', 'html'));
   $this->load->view('login');
 }
     
}

?>
