<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Test CodeIgniter</title>
</head>
<body>
<div class="container">

  <form class="modal-content" method="post" action="<?php echo site_url('form/post_edit/').$query->MEMBER_ID; ?>">
    <div class="container">
      <h2>Edit Register</h2>
      <hr>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required value="<?php echo $query->MEMBER_EMAIL; ?>">

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required value="<?php echo $query->MEMBER_NAME; ?>">

      <label for="password1"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password1" value="<?php echo $query->MEMBER_PASSWORD; ?>" readonly>

      <label for="password2"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="password2" value="<?php echo $query->MEMBER_PASSWORD; ?>" readonly>
      
      <div class="clearfix">
        <button type="button" class="cancelbtn" name="cancel">Cancel</button>
        <button type="submit" class="signupbtn" name="save">Save</button>
      </div>

    </div>
  </form>

</div>
</body>
</html>