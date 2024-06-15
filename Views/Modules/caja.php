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
                                <div class="col-xs-12 ">
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

                                            $categorias = ControllerCategorias::ctrMostrarCategorias($item, $valor);

                                            echo '<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">';
                                            
                                        ?>
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                        </div>
                                            <div class="row g-3 g-lg-4">
                                                <!-- Product Box -->
                                                <div class="col-6 col-lg-3">
                                                    <div class="product-card-10">
                                                        <div class="product-card-image">
                                                            <!--<div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>-->
                                                            <div class="product-media"><a href="#"><img class="img-fluid" src="https://tofuu.getjusto.com/orioneat-prod/Ak7M6WzhAeQQgaLBH-2.jpg" title="" alt=""></a></div>
                                                        </div>
                                                        <div class="product-card-info">
                                                            <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                                                            <h6 class="product-title"><a href="#">Full Rim Aviator Eyeglasses</a></h6>
                                                            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
                                                            <div class="product-action"><a href="#" class="btn"><i class="fa fa-heart"></i> </a><a href="#" class="btn"><i class="fa fa-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn"><i class="fa fa-eye"></i> </a>
                                                                <a
                                                                    href="#" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Product Box -->
                                                <!-- Product Box -->
                                                <div class="col-6 col-lg-3">
                                                    <div class="product-card-10">
                                                        <div class="product-card-image">
                                                            <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                                                            <div class="product-media"><a href="#"><img class="img-fluid" src="https://www.bootdey.com/image/380x380/00FFFF/000000" title="" alt=""></a></div>
                                                        </div>
                                                        <div class="product-card-info">
                                                            <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                                                            <h6 class="product-title"><a href="#">Full Rim Aviator Eyeglasses</a></h6>
                                                            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
                                                            <div class="product-action"><a href="#" class="btn"><i class="fa fa-heart"></i> </a><a href="#" class="btn"><i class="fa fa-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn"><i class="fa fa-eye"></i> </a>
                                                                <a
                                                                    href="#" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Product Box -->
                                                <!-- Product Box -->
                                                <div class="col-6 col-lg-3">
                                                    <div class="product-card-10">
                                                        <div class="product-card-image">
                                                            <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                                                            <div class="product-media"><a href="#"><img class="img-fluid" src="https://www.bootdey.com/image/380x380/000000/ffffff" title="" alt=""></a></div>
                                                        </div>
                                                        <div class="product-card-info">
                                                            <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                                                            <h6 class="product-title"><a href="#">Full Rim Aviator Eyeglasses</a></h6>
                                                            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
                                                            <div class="product-action"><a href="#" class="btn"><i class="fa fa-heart"></i> </a><a href="#" class="btn"><i class="fa fa-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn"><i class="fa fa-eye"></i> </a>
                                                                <a
                                                                    href="#" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Product Box -->
                                                <!-- Product Box -->
                                                <div class="col-6 col-lg-3">
                                                    <div class="product-card-10">
                                                        <div class="product-card-image">
                                                            <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                                                            <div class="product-media"><a href="#"><img class="img-fluid" src="https://www.bootdey.com/image/380x380/8A2BE2/000000" title="" alt=""></a></div>
                                                        </div>
                                                        <div class="product-card-info">
                                                            <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                                                            <h6 class="product-title"><a href="#">Full Rim Aviator Eyeglasses</a></h6>
                                                            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
                                                            <div class="product-action"><a href="#" class="btn"><i class="fa fa-heart"></i> </a><a href="#" class="btn"><i class="fa fa-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn"><i class="fa fa-eye"></i> </a>
                                                                <a
                                                                    href="#" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Product Box -->
                                                <!-- Product Box -->
                                                <div class="col-6 col-lg-3">
                                                    <div class="product-card-10">
                                                        <div class="product-card-image">
                                                            <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                                                            <div class="product-media"><a href="#"><img class="img-fluid" src="https://www.bootdey.com/image/380x380/FF7F50/000000" title="" alt=""></a></div>
                                                        </div>
                                                        <div class="product-card-info">
                                                            <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                                                            <h6 class="product-title"><a href="#">Full Rim Aviator Eyeglasses</a></h6>
                                                            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
                                                            <div class="product-action"><a href="#" class="btn"><i class="fa fa-heart"></i> </a><a href="#" class="btn"><i class="fa fa-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn"><i class="fa fa-eye"></i> </a>
                                                                <a
                                                                    href="#" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Product Box -->
                                                <!-- Product Box -->
                                                <div class="col-6 col-lg-3">
                                                    <div class="product-card-10">
                                                        <div class="product-card-image">
                                                            <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                                                            <div class="product-media"><a href="#"><img class="img-fluid" src="https://www.bootdey.com/image/380x380/008B8B/000000" title="" alt=""></a></div>
                                                        </div>
                                                        <div class="product-card-info">
                                                            <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                                                            <h6 class="product-title"><a href="#">Full Rim Aviator Eyeglasses</a></h6>
                                                            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
                                                            <div class="product-action"><a href="#" class="btn"><i class="fi-heart"></i> </a><a href="#" class="btn"><i class="fa fa-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn"><i class="fa fa-eye"></i> </a>
                                                                <a
                                                                    href="#" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Product Box -->
                                                <!-- Product Box -->
                                                <div class="col-6 col-lg-3">
                                                    <div class="product-card-10">
                                                        <div class="product-card-image">
                                                            <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                                                            <div class="product-media"><a href="#"><img class="img-fluid" src="https://www.bootdey.com/image/380x380/2F4F4F/000000" title="" alt=""></a></div>
                                                        </div>
                                                        <div class="product-card-info">
                                                            <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                                                            <h6 class="product-title"><a href="#">Full Rim Aviator Eyeglasses</a></h6>
                                                            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
                                                            <div class="product-action"><a href="#" class="btn"><i class="fa fa-heart"></i> </a><a href="#" class="btn"><i class="fa fa-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn"><i class="fa fa-eye"></i> </a>
                                                                <a
                                                                    href="#" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Product Box -->
                                                <!-- Product Box -->
                                                <div class="col-6 col-lg-3">
                                                    <div class="product-card-10">
                                                        <div class="product-card-image">
                                                            <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                                                            <div class="product-media"><a href="#"><img class="img-fluid" src="https://www.bootdey.com/image/380x380/7CFC00/000000" title="" alt=""></a></div>
                                                        </div>
                                                        <div class="product-card-info">
                                                            <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                                                            <h6 class="product-title"><a href="#">Full Rim Aviator Eyeglasses</a></h6>
                                                            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
                                                            <div class="product-action"><a href="#" class="btn"><i class="fa fa-heart"></i> </a><a href="#" class="btn"><i class="fa fa-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn"><i class="fa fa-eye"></i> </a>
                                                                <a
                                                                    href="#" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Product Box -->
                                            </div>
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                        </div>
                                        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card card-warning card-outline">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

</div>


             
