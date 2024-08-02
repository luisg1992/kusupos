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
                                                                                echo '<div class="product-media btnAgregarCarrito"  nombre="'.$value1["nombre"].'" id="'.$value1["id"].'" precio="'.$value1["precio"].'"data-toggle="modal" data-target="#modalAgregarPromo" data-dismiss="modal"><a nombre="'.$value1["nombre"].'" id="'.$value1["id"].'" precio="'.$value1["precio"].'"><img class="img-fluid" src="'.$value1["foto"].'" title="" alt="" width="200" height="200"></a></div>';
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
                                      
                                    </tbody>
                                    <tfoot>
                                      <th colspan="2" class="text-center">Total: </th>
                                      <th id="cantidadT"><input type="number" style="width: 50px;" value=0></th>
                                      <th id="totalT">S/.0.00</th>
                                    </tfoot>
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
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <div class="card-body">

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1"><label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label><br>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled=""><label for="customCheckbox3" class="custom-control-label">Custom Checkbox disabled</label>
                    </div>
                  
                  </div>

                </div> 
                <div class="form-group">
                <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Default checkbox
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
  <label class="form-check-label" for="defaultCheck2">
    Disabled checkbox
  </label>
</div>
                </div>                 
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                <button type="submit" class="btn btn-primary">Guardar Usuario</button>
              </div>
              

            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->