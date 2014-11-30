<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Hint</title>
   <!--link rel="stylesheet" href="<?php echo base_url().APPPATH ?>login.css" type="text/css"/-->
   <?php echo link_tag('css/login.css');?>      
 </head>
 <body>
   <h1>Hint</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifyhint'); ?>
     <label for="username">Email:  <input type="text"  id="username" name="username" value="<?php echo set_value('username'); ?>"/></label>
     
     <br/>
     <label for="hint">Hint: <input type="text"  id="hint" name="hint" value="<?php echo set_value('hint'); ?>"/></label>
     
     <br/>
     <input type="submit" value="submit" id="subbutton"/> 
   </form>
 </body>
</html>