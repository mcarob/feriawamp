<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


    <title>Inicia sesi&oacute;n</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />



    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="assets/plugins/nprogress/nprogress.js"></script>
  </head>

</head>

<body class="" id="body">
  <style>
    body {
      background-color: #CCCCCC;
      background-image: url(assets/img/UEB.jpg);
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }
  </style>
  <br><br><br><br><br><br><br><br><br>

  <div class="container d-flex flex-column justify-content-between vh-100">
    <div class="row justify-content-center mt-5">
      <div class="col-xl-5 col-lg-6 col-md-10">
        <div class="card">
          <div class="card-header bg-primary">
            <div class="app-brand">
              <a href="/index.html">

                <g fill="none" fill-rule="evenodd">
                  <img src="assets/img/logo.png" alt="" style="background-color: white;">
                </g>

                <h3 class="brand-name">FERIA DE OPORTUNIDADES</h3>

              </a>
            </div>
          </div>
          <div class="card-body p-5">

            <h4 class="text-dark mb-5">Iniciar Sesi&oacute;n</h4>
            <form action="" method="POST">
              <div class="row">
                <div class="form-group col-md-12 mb-4">
                  <input type="text" class="form-control input-lg" id="username" name="username" placeholder="Usuario">
                </div>
                <div class="form-group col-md-12 ">
                  <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Contrase&ntilde;a">
                </div>
                <div class="col-md-12">
                  <div class="d-flex my-2 justify-content-between">
                    <div class="d-inline-block mr-3">
                      <label class="control control-checkbox">Recordarme
                        <input type="checkbox" />
                        <div class="control-indicator"></div>
                      </label>

                    </div>
                    <p><a class="text-blue" href="#">Olvidaste tu contrase&ntilde;a?</a></p>
                  </div>
                  <?php

                  if (isset($errorEntrada)) {
                    echo  $errorEntrada;
                  }
                  ?>
                  <button type="submit" class="btn btn-lg btn-primary btn-block mb-4" name="submit">Ingresar</button>
                  <p>No tienes una cuenta?
                    <a class="text-blue" href="registro.php">Registrate</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright pl-0">
      <p class="text-center">&copy; 2018 Copyright Sleek Dashboard Bootstrap Template by
        <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
      </p>
    </div>
  </div>

</body>

</html>