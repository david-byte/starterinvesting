<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/login/images/icons/favicon.ico'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?> ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/animate/animate.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/css-hamburgers/hamburgers.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/animsition/css/animsition.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/select2/select2.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/daterangepicker/daterangepicker.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/util.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/main.css'); ?>">
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100">
                <!-- Mensagens de error -->
                <?php if ($message = $this->session->flashdata('error')) : ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;<?php echo $message; ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- Mensagens de Sucesso -->
                <?php if ($message = $this->session->flashdata('sucesso')) : ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><i class="far fa-smile-wink"></i>&nbsp;<?php echo $message; ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- Mensagens de Info -->
                <?php if ($message = $this->session->flashdata('info')) : ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><i class="far fa-smile-wink"></i>&nbsp;<?php echo $message; ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php
                $attributes = array('class' => 'login100-form validate-form', 'id' => 'myform', 'role' => 'form');
                echo form_open('auth/login', $attributes);
                ?>

                <span class="login100-form-logo">
                    <i class="zmdi zmdi-landscape"></i>
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    Log in
                </span>

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="identity" value="<?php echo set_value('identity'); ?>" placeholder="Identidade">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">Login&nbsp;<i class="fas fa-cloud-upload-alt"></i> </button>
                </div>

                <?php echo form_close(); ?>
                <div class="card-footer mt-2">
                    <p class="text-center text-white">Sistema de acompanhamento de investimento com a Equipe StarterInvesting</p>
                </div>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login/vendor/animsition/js/animsition.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login/vendor/bootstrap/js/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/login/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login/vendor/select2/select2.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login/vendor/daterangepicker/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/login/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login/vendor/countdowntime/countdowntime.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login/vendor/countdowntime/countdowntime.js'); ?>"></script>

</body>

</html>