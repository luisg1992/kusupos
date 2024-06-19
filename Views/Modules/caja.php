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
                    <li class="breadcrumb-item active">Nueva Venta</li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <nav>
                                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <?php
                                                
                                                $item = null;
                                                $valor = null;

                                                $categorias = ControllerCategorias::ctrMostrarCategorias($item, $valor);
                                                $count = 0;
                                                foreach($categorias as $key=>$value){
                                                    if($count == 0) {
                                                        $active = "active";
                                                        $ariaselected = true;
                                                    }else{
                                                        $active="";
                                                        $ariaselected = false;
                                                    } 
                                                    echo '<a class="nav-item nav-link '.$active.'" id="nav-'.$value["nombre"].'-tab" data-toggle="tab" href="#nav-'.$value["nombre"].'" role="tab" aria-controls="nav-'.$value["nombre"].'" aria-selected="'.$ariaselected.'">'.$value["nombre"].'</a>';
                                                    $count++;
                                                }
                                            ?>
                                        </div>
                                    </nav>
                                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                        <?php
                                                
                                            $item = null;
                                            $valor = null;
                                            $conteo = 0;

                                            $categorias = ControllerCategorias::ctrMostrarCategorias($item, $valor);
                                            foreach($categorias as $key=>$value){
                                                if($conteo == 0)
                                                {
                                                    $active = " show active";
                                                }else{
                                                    $active = "";
                                                }
                                                $conteo++;
                                                echo '<div class="tab-pane fade'.$active.'" id="nav-'.$value["nombre"].'" role="tabpanel" aria-labelledby="nav-'.$value["nombre"].'-tab">';
                                                    
                                                    $productosxCategoria = ControllerProductos::ctrMostrarProductosPorCategoria("idCategoria", $value["id"]);
                                                    if(count($productosxCategoria)){
                                                        echo '<div class="row g-3 g-lg-4">';
                                                            foreach($productosxCategoria as $key1=>$value1){
                                                                echo '<div class="col-6 col-lg-2">
                                                                        <div class="product-card-10">
                                                                            <div class="product-card-image">';
                                                                            if($value1["idCategoria"]==2){
                                                                                echo '<div class="product-media"  data-toggle="modal" data-target="#modalAgregarPromo" data-dismiss="modal"><a nombre="'.$value1["nombre"].'" id="'.$value1["id"].'" precio="'.$value1["precio"].'"><img class="img-fluid" src="'.$value1["foto"].'" title="" alt="" width="200" height="200"></a></div>';
                                                                            }else{
                                                                                echo '<div class="product-media"><a class="btnAgregarCarrito" nombre="'.$value1["nombre"].'" id="'.$value1["id"].'" precio="'.$value1["precio"].'"><img class="img-fluid" src="'.$value1["foto"].'" title="" alt="" width="200" height="200"></a></div>';
                                                                            }
                                                                            echo '</div>
                                                                            <div class="product-card-info">
                                                                                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                                                                                <h6 class="product-title"><a href="#">'.$value1["nombre"].'</a></h6>
                                                                                <div class="product-price"><span class="text-primary">S/.'.$value1["precio"].'.<small>00</small></span></div>
                                                                            </div>
                                                                        </div>
                                                                      </div>
                                                                ';
                                                            }
                                                        echo '</div>';
                                                    }

                                                echo '</div>';

                                            }
                                            
                                                
                                        ?>                    
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card card-warning card-outline">
                        <div class="card-header">
                            Orden #1
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Precio</th>
                                        </tr>
                                    </thead>
                                    <tbody id="carrito">
                                            <th colspan="2" class="text-center">Total: </th>
                                            <th id="cantidadT"></th>
                                            <th id="totalT"></th>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

</div>
 <!-- /.content-wrapper -->
 <div class="modal fade" id="modalAgregarPromo">
        <div class="modal-dialog">
          <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">  
              <div class="modal-header" style="background:#3c8dbc; color: white;">
                <h4 class="modal-title">Agregar Cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <div class="card-body">

                <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                      </div>
                      <input type="text" name="nuevoNombre" id="nuevoNombre" class="form-control" placeholder="Ingresar Nombre...">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                      </div>
                      <input type="text" name="nuevoDocumento" id="nuevoDocumento" class="form-control" placeholder="Ingresar Documento...">
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                    </div>
                      <input type="email" name="nuevoCorreo" class="form-control" id="nuevoCorreo" placeholder="Ingrese Correo...">
                    </div>  
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                      </div>
                      <input type="email" name="nuevoTelefono" class="form-control" id="nuevoTelefono" placeholder="Ingrese Teléfono...">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-location-dot"></i></span>
                      </div>
                      <input type="email" name="nuevaDireccion" class="form-control" id="nuevaDireccion" placeholder="Ingrese Dirección...">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group date" id="reservationdate">
                      <div class="input-group-prepend" data-target="#reservationdate" data-toggle="datetimepicker">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                      <input type="text" class="form-control input-lg datetimepicker-input"  name="nuevaFechaNacimiento" id="nuevaFechaNacimiento" placeholder="Ingrese Fecha de Nacimiento..." data-inputmask:"'alias': 'yyy/mm/dd'" data-mask required>
                      
                    </div>
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

                  $crearUsuario = new ControllerUsuarios();
                  $crearUsuario->ctrCrearUsuario();
              
              ?>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->