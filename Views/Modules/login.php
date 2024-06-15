<div id="back"></div>

<div class="login-box">
  <div class="login-logo">
    <img src="Assets/img/default/KUSU_LOGO_BLANCO.png" height="300px">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Logueate para iniciar sesión</p>

      <form action="#" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>

        <?php 

        $login = new ControllerUsuarios();
        $login -> ctrIngresoUsuario();

        ?>

      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>