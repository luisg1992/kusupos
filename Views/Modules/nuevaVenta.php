<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Nueva Venta</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                <li class="breadcrumb-item active">Administrar Ventas</li>
                </ol>
            </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-body">
                <h1>Venta # 1</h1>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nuevoCliente">Cliente</label>
                            <input type="text" class="form-control" id="nuevoCliente" placeholder="Ingrese nombre cliente">
                        </div>
                    </div>    
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nuevoCliente">Cliente</label>
                            <input type="text" class="form-control" id="nuevoCliente" placeholder="Ingrese nombre cliente">
                        </div>
                    </div> 
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nuevoCliente">Fecha</label>
                            <input type="text" class="form-control" id="nuevaFecha" value="<?php echo date("d-m-Y H:i:s"); ?>" disabled>
                        </div>
                    </div>    
                </div>

                <div class="row">
                    <div class="col-lg-2">
                        <button class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#modalAgregarArticulo">Agregar Articulo</button>
                    </div>
                </div>
                <div class="card-body">
          <table id="datatable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 10px;">#</th>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

            </div>
        </div>
    </section>
</div>


<div class="modal fade" id="modalAgregarArticulo">
        <div class="modal-dialog">
          <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">  
              <div class="modal-header" style="background:#3c8dbc; color: white;">
                <h4 class="modal-title">Agregar Articulo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <div class="card-body">

                <div class="form-group">
                    <label for="nuevoNombre">Articulo</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                      </div>
                      <input type="text" name="nuevoNombre" id="nuevoNombre" class="form-control" placeholder="Ingresar Nombre..." required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nuevoUsuario">Cantidad</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                      </div>
                      <input type="text" name="nuevoUsuario" id="nuevoUsuario" class="form-control" placeholder="Ingresar Usuario..." required>
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <label for="nuevaPassword">Descripcion</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                      <input type="password" name="nuevaPassword" class="form-control" id="nuevaPassword" placeholder="Ingrese Contraseña..." required>
                    </div>  
                  </div>

                  <div class="form-group">
                    <label for="perfil">Precio</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                      </div>
                      <select class="form-control" name="nuevoPerfil" id="nuevoPerfil">
                        <option value="">--SELECCIONAR PERFIL--</option>
                        <option value="1">Administrador</option>
                        <option value="2">Especial</option>
                        <option value="3">Vendedor</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nuevaFoto">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="nuevaFoto" name="nuevaFoto" class="nuevaFoto">
                      </div>
                    </div>
                    <img src="Views/img/default/avatar.png" class="img-thumbnail previsualizar" width="100px;">
                    <p class="help-block">Peso máximo de la foto 2 MB</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                <button type="submit" class="btn btn-primary">Guardar Usuario</button>
              </div>
              
              <?php

                /*   $crearUsuario = new ControllerUsuarios();
                  $crearUsuario -> ctrCrearUsuario(); */

              
              ?>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
¿