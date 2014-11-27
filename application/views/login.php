<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Simple Login</title>
   <!--link rel="stylesheet" href="<?php echo base_url().APPPATH ?>login.css" type="text/css"/-->
   <?php echo link_tag('css/login.css');?>      
 </head>
 <body>
   <h1>Simple Login</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Email:  <input type="text"  id="username" name="username"/></label>
     
     <br/>
     <label for="password">Password: <input type="password"  id="passowrd" name="password"/></label>
     
     <br/>
     <input type="submit" value="Login" id="subbutton"/>
   </form>
 </body>
</html>
