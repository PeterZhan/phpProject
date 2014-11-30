<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Login</title>
   <!--link rel="stylesheet" href="<?php echo base_url().APPPATH ?>login.css" type="text/css"/-->
   <?php echo link_tag('css/login.css');?>      
 </head>
 <body>
   <h1>Register</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifyregister'); ?>
     <label for="username">Email:  <input type="text"  id="username" name="username" value="<?php echo set_value('username'); ?>"/></label>
     
     <br/>
     <label for="password">Password: <input type="password"  id="passowrd" name="password" value="<?php echo set_value('password'); ?>"/></label>
     
     <br/>
     <label for="con_password">reinput password: <input type="password"  id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>"/></label>
     
     <br/>
     
     <label for="firstname">First Name:  <input type="text"  id="firstname" name="firstname" value="<?php echo set_value('firstname'); ?>"/></label>
     
     <br/>
     
     <label for="lastname">Last Name:  <input type="text"  id="lastname" name="lastname" value="<?php echo set_value('lastname'); ?>"/></label>
     
     <br/>
      <label for="hint">Hint:  <input type="text"  id="hint" name="hint" value="<?php echo set_value('hint'); ?>"/></label>
     
     <br/>
     <input type="submit" value="register" id="subbutton"/>
   </form>
 </body>
</html>