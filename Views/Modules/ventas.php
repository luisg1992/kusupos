
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ventas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar Ventas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid --> 

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-2">
                
                <a href="nuevaVenta">
                    <button class="btn btn-block bg-gradient-primary">
                        Agregar Venta
                    </button>
                </a>
            </div>
          </div>
        </div>


        <div class="card-body">
          <table id="datatable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 10px;">#</th>
                <th>idCliente</th>
                <th>Total</th>
                <th>Forma Pago</th>
                <th>N° Transacción</th>
                <th>Fecha y Hora</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php 

              $ventas = ControllerVentas::ctrListarVentas();
              foreach($ventas as $venta){
             
              echo '<tr>
                    <td>'.$venta["id"].'</td>
                    <td>'.$venta["idCliente"].'</td>
                    <td>'.$venta["total"].'</td>
                    <td>'.$venta["formaPago"].'</td>
                    <td>'.$venta["nTransaccion"].'</td>
                    <td>'.$venta["FechaHora"].'</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-warning"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-success"><i class="fa fa-print"></i></button>
                            <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                        </div>
                    </td>
                </tr>';
              }
                ?>
            </tbody>
          </table>

        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
