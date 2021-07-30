<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Test CodeIgniter</title>
</head>
<body>
<div class="container">

  <form class="modal-content" method="post" action="<?php echo site_url('form/post_form'); ?>">
    <div class="container">
      <h2>ลงทะเบียน</h2>
      <hr>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password1"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password1" required>

      <label for="password2"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="password2" required>
      
      <div class="clearfix">
        <button type="button" class="cancelbtn" name="cancel">Cancel</button>
        <button type="submit" class="signupbtn" name="save">Save</button>
      </div>

    </div>
  </form>

</div>
</body>
</html>