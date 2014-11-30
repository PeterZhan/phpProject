<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Administrator
 */
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('emailaddress, password');
   $this -> db -> from('accounts');
   $this -> db -> where('emailaddress', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 public function add_user()
 {
      
  $data=array(
       'emailaddress'=>$this->input->post('username'),
    'firstname'=>$this->input->post('firstname'),
    'lastname'=>$this->input->post('lastname'),
      
    'password'=>md5($this->input->post('password')),
            'Hint'=>$this->input->post('hint')
  );
  $this->db->insert('accounts',$data);
 }
 
 
 function hint($username, $hint)
 {
   $this -> db -> select('*');
   $this -> db -> from('accounts');
   $this -> db -> where('emailaddress', $username);
   $this -> db -> where('hint', $hint);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 
 function check($username)
 {
   $this -> db -> select('*');
   $this -> db -> from('accounts');
   $this -> db -> where('emailaddress', $username);
    $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
}

?>
