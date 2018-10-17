
<!-- ================================================================================================= -->
<!DOCTYPE html>
<html>

  <head>
    <?php require_once('template/header.php');?>
  </head>

  <body>

  <div class="page login-page">

      <div class="container align-items-center">
        <div class="form-outer text-center d-flex justify-content-center align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>SIGEM | </span><strong class="text-primary"> LOGIN</strong></div>
            <p style="color:red"> <?php echo isset($msn) ? $msn : ""; ?> </p>
            <form method="POST" action="/login" class="text-left form-validate " id="form-login">
              <div class="form-group-material">
                <input id="login-username" type="text" name="loginUsername" required data-msg="Entre com seu nome de usuário" class="input-material">
                <label for="login-username" class="label-material">Usuário</label>
              </div>
              <div class="form-group-material">
                <input id="login-password" type="password" name="loginPassword" required data-msg="Insira sua senha" class="input-material">
                <label for="login-password" class="label-material">Senha</label>
              </div>
              <div class="form-group text-center"><input id="login" name="logar-button" type="submit" class="btn btn-primary" value="Login"/>
                <!-- <a id="login" href="index.html" class="btn btn-primary">Login</a> -->
                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
              </div>
            </form><a href="#" class="forgot-pass">Esqueceu sua senha?</a>
          </div>

          <div class="copyrights text-center">
              <<p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's
              development at https://bootstrapious.com/donate. It is part of the license conditions
              and it helps me to run Bootstrapious. Thank you for understanding :)-->
          </div>
      </div>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/popper.js/umd/popper.min.js"> </script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
  <script src="/assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="/assets/vendor/chart.js/Chart.min.js"></script>
  <script src="/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- Main File-->
  <script src="/assets/js/front.js"></script>
  </body>
</html>
