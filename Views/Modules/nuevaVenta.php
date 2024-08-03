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
                

            </div>
        </div>
    </section>
</div>