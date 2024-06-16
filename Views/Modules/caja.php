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
                                                                echo '<div class="col-6 col-lg-3">
                                                                        <div class="product-card-10">
                                                                            <div class="product-card-image">
                                                                                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                                                                                <div class="product-media"><a href="#"><img class="img-fluid" src="'.$value1["foto"].'" title="" alt="" width="300" height="300"></a></div>
                                                                            </div>
                                                                            <div class="product-card-info">
                                                                                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                                                                                <h6 class="product-title"><a href="#">'.$value1["nombre"].'</a></h6>
                                                                                <div class="product-price"><span class="text-primary">S/.'.$value1["precio"].'.<small>00</small></span></div>
                                                                                <div class="product-action"><a href="#" class="btn"><i class="fa fa-shopping-cart"></i></a></div>
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
                        <div class="card-body">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

</div>


             
