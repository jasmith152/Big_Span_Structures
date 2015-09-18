<?php
$page_title = 'Contact Us Page';
$matatag_description = '';
include('header.php');
include('include/captcha.php'); 
?>
<div class="content">
    <table id="table_format" width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td><form action="include/formmail_recaptcha.php" method="post" accept-charset="utf-8" name="contact_form" >
<input type="hidden" name="subject" value="Online Contact form from Affordable Florida Fishing" />
     <!--<input type="hidden" name="recipient" value="" />-->
     <input type="hidden" name="recipient" value="john@naturecoastdesign.net" />
     <input type="hidden" name="required" value="first_name,last_name,email,user_answer" />
     <input type="hidden" name="redirect" value="" />
<fieldset>
<legend>Contact Us</legend>

<p><em>Required fields indicated by *</em></p>
<table align="left" width="80%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td><label for="first_name">* First Name:</label> </td>
    <td><input type="text" name="first_name" id="first_name"/> </td>
  </tr>
  <tr>
    <td><label for="last_name">* Last Name:</label></td>
    <td><input type="text" name="last_name" id="last_name"/></td>
  </tr>
  <tr>
    <td><label for="phone">&nbsp;&nbsp;Phone:</label></td>
    <td><input type="number" name="phone" id="phone" size="10" /></td>
  </tr>
  <tr>
    <td><label for="email">* Email:</label></td>
    <td><input type="text" name="email" id="email" /></td>
  </tr>
  <tr>
    <td align="left" colspan="2">Please contact me about your:</td>
  </tr>
  <tr>
    <td><input name="contact me about alpha umbrella" type="checkbox" value="Yes">Alpha Umbrella</td>
    <td><input name="contact me about beta umbrella" type="checkbox" value="Yes">Beta Umbrella</td>
  </tr>
  <tr>
    <td><input name="contact me about gamma umbrella" type="checkbox" value="Yes">Gamma Umbrella</td>
    <td><input name="contact me about other umbrella" type="checkbox" value="Yes">Other Umbrella</td>
  </tr>
  <tr>
    <td><label for="comments">&nbsp;&nbsp;Questions/Comments:</label></td>
    <td><textarea name="comments" id="text" cols="35" rows="5" align="right"></textarea></td>
  </tr>
  <tr>
    <td align="left" colspan="2"><?php captcha();?></td>
  </tr>
  <tr>
    <td align="center" colspan="2"><input type="submit" name="submit" value="submit" /></td>
  </tr>
</table>
</fieldset>
</form>
</td>
  </tr>
</table>

</div><!-- end .content -->
<?php include ('footer.php'); ?>