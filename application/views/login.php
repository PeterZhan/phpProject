<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Login</title>
   <!--link rel="stylesheet" href="<?php echo base_url().APPPATH ?>login.css" type="text/css"/-->
   <?php 
     $this->load->helper(array('form', 'url', 'captcha'));
      $vals = array(
    'word' => random_string('numeric', 6),
    'img_path' => './captcha/',
    'img_url' => base_url().'captcha/',
  
    'img_width' => '150',
    'img_height' => 30,
    'expiration' => 7200
    );
    
      $cap = create_captcha($vals);
      
 
      $this->session->set_userdata('captchaWord', $cap['word']);
    
  
   
   
   
   
   
   ?>
   
   
   <?php echo link_tag('css/login.css');?>      
 </head>
 <body>
   <h1>Login</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Email:  <input type="text"  id="username" name="username" value="<?php echo set_value('username'); ?>"/></label>
     
     <br/>
     <label for="password">Password: <input type="password"  id="passowrd" name="password" value="<?php echo set_value('password'); ?>"/></label>
     
     <br/>
    
  
  <p>
      
    <label for="captcha">Captcha:<?php echo $cap['image']; ?> Please input the digits in the picture:
      <input id="captcha" name="captcha" type="text" />
    </label>
  </p>
     <input type="submit" value="Login" id="subbutton"/> <?php echo anchor('forgetpass', 'Forgot Passord?');?> <?php echo anchor('register', 'New Registration');?>
   </form>
 </body>
</html>
