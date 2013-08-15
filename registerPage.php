
<?php
 
       $name = trim($_POST['name']);
       $surname = trim($_POST['surname']);
       $email = trim($_POST['email']);
	   $username = trim($_POST['username']);
       $password = trim($_POST['password']);
	   $con_password = trim($_POST['con_password']);
	   
		//function register($name, $surname, $email,  $password, $username, $con_password)
		//{
		
		if(isset ($_POST['register']))
   		{
			if(empty($surname))
			{
				 $error_string .= '<br />Surname required';
			}
			 if(!preg_match('/^[A-Za-z \'-]+$/', $surname))
			{
				$error_string .= '<br />Surname can only contain letters.';
			}
      		 if(empty($name))
			{
				 $error_string .= '<br />Name required';
			}
			 if(!preg_match('/^[A-Za-z \'-]+$/', $name))
			{
				$error_string .= '<br />name can only contain letters.';
			}
			if(empty($username))
			{
				 $error_string .= '<br />Username required';
			}
		   
			if(empty($email)) 
			{
				 $error_string .= '<br />Email required';
			}
			
			if(!ereg('^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $email)) 
      		{
               $error_string .=  '<br />The email you have entered is not valid';
      		}
			
			/*if(!$contactNumber)
			{
				echo '<br />Contacts required';
			}
			if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $contactNumber))
			{
			   echo '<br />Invalid Contact Number!';
			}*/ 
			
			
			if(empty($password))
			{
				  $error_string .= '<br />Password required';
			}
			
		
			
			if(empty($con_password))
			{
				  $error_string .= '<br />Confirmation password required';
			}
			if(strlen($password) >16 || strlen($password) < 6)
			{
				 $error_string .= '<br />Your password must be between 6 -16 characters';
			}
			if($password != $con_password)
			{
				 $error_string .= '<br />The password you entered do not match please check';
			}
		}
		else
		{
			header('Refresh: 0.1; URL= endPage-1.php');
			exit();
		}	      
 ?>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.style4 {
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
}
.style6 {font-size: 18px; font-family: "Times New Roman", Times, serif; }
.style10 {
	font-size: xx-large;
	font-weight: bold;
}
-->
</style>
<table width="1315" border="0" cellpadding="0" cellspacing="0" bgcolor="#550000">
  <!--DWLayoutTable-->
  <tr>
    <td width="85" height="19">&nbsp;</td>
    <td width="469">&nbsp;</td>
    <td width="353">&nbsp;</td>
    <td width="333">&nbsp;</td>
    <td width="75">&nbsp;</td>
  </tr>
  <tr>
    <td height="60">&nbsp;</td>
    <td colspan="3" valign="top" bgcolor="#787878"><h1 align="center" class="style10">*****Registration Form*****</h1></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="505">&nbsp;</td>
    <td colspan="3" valign="top" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="registerPage.php">
      <p><?php
            if($error_string)
                echo '<font color="red">'.$error_string.'</font>';
        ?></p>
	  <p>
        <label><span class="style6">&nbsp;&nbsp;&nbsp;<br />
          <br />
          &nbsp;&nbsp;&nbsp; What is your surname?</span></label>
        <span class="style6"><br/>
          &nbsp;&nbsp;&nbsp;
          <input name="surname" type="text" size="40" />
        </span></p>
        <p class="style6">
          <label>&nbsp;&nbsp;&nbsp;What is your name?</label>
          <br/>
          &nbsp;&nbsp;&nbsp;
          <input name="name" type="text" size="40" />
        </p>
        <p class="style6">
          <label>&nbsp;&nbsp;&nbsp;Please enter your email address</label>
          <br/>
          &nbsp;&nbsp;&nbsp;
          <input name="email" type="text" size="40" />
        </p>
        <p class="style6">
          <label>&nbsp;&nbsp;&nbsp;Please enter your username </label>
          <br/>
          &nbsp;&nbsp;&nbsp;
          <input name="username" type="text" size="40" />
        </p>
        <p class="style6">
          <label>&nbsp;&nbsp;&nbsp;Please enter your password</label>
          <br/>
          &nbsp;&nbsp;&nbsp;
          <input name="password" type="password" size="40" />
        </p>
        <p> <span class="style6">
          <label>&nbsp;&nbsp;&nbsp;Please confirm your password</label>
          </span><span class="style4">
          <label> </label>
          </span><br/>
          &nbsp;&nbsp;&nbsp;
          <input name="con_password" type="password" size="40" />
        </p>
             
        <input name="register" type="submit" id="Submit" value="Register" />
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="reset" name="Submit2" value="Reset" />
     
    
                </form></td>
   
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><strong>&copy 2013 PN MSIZA&nbsp;210127844</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="55">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

