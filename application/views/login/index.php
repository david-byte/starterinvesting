<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo base_url('public/css/login.css'); ?>" rel="stylesheet" />
  <title>Login</title>
</head>

<body>
  <?php echo form_open("login/auth"); ?>
  <div class="login-box">
    <h1>Login</h1>
    <?php if ($menssage = $this->session->flashdata('error')) : ?>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-exclamation-triangle">&nbsp;&nbsp;</i><?php echo $menssage; ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php if ($menssage = $this->session->flashdata('info')) : ?>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-exclamation-triangle">&nbsp;&nbsp;</i><?php echo $menssage; ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div class="textbox">
      <i class="fa fa-user" aria-hidden="true"></i>
      <input type="email" name="email" placeholder="Seu E-mail">
    </div>
    <div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="password" name="password" placeholder="Sua senha">
    </div>
    <button type="submit" class="btnlogin">Logar</button>
  </div>
  <?php echo form_close(); ?>
</body>
</html>