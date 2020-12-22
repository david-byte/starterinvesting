<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo base_url('public/css/login.css'); ?>" rel="stylesheet" />
  <title>Document</title>
</head>

<body>
  <?php echo form_open("auth/login"); ?>
  <div class="login-box">
    <h1>Login</h1>
    <div class="textbox">
      <i class="fa fa-user" aria-hidden="true"></i>
      <?php echo form_input($identity); ?>
    </div>
    <div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
      <?php echo form_input($password); ?>
    </div> 
    <?php echo form_submit('submit', lang('login_submit_btn')); ?>
  </div>
  <?php echo form_close(); ?>
</body>

</html>