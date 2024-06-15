<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nuevo Empleado</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Nuevo Empleado</li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="">Nombre</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-tie"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="nuevoNombre" name = "nuevoNombre" placeholder="Ingrese nombre...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="">Apellido Paterno</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-tie"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="nuevoApellidoPaterno" name = "nuevoApellidoPaterno" placeholder="Ingrese apellido paterno...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="">Apelido Materno</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-tie"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="nuevoApellidoMaterno" name = "nuevoApellidoMaterno" placeholder="Ingrese el apellido materno">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Tipo Documento</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-tie"></i></span>
                                                </div>
                                                <select style="font-size: 0.8em;" name="tipoDocumento" id="tipoDocumento" class="form-control">
                                                    <option value="">SELECCIONAR</option>
                                                    <option value="1">DNI</option>
                                                    <option value="2">CARNET EXTRANJERIA</option>
                                                    <option value="3">CELULA</option>
                                                    <option value="4">PASAPORTE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Documento</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-tie"></i></span>
                                                </div>
                                                <input type="number" class="form-control" id="nuevoDocumento" name="nuevoDocumento" onkeypress="busquedaDocumento(event)" placeholder="Ingresar DNI">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Tipo Empleado</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-tie"></i></span>
                                                </div>
                                                <select style="font-size: 0.8em;" name="tipoEmpleado" id="tipoEmpleado" class="form-control">
                                                    <option value="">SELECCIONAR</option>
                                                    <option value="1">ADMINISTRADOR</option>
                                                    <option value="2">ALMACENERO</option>
                                                    <option value="3">ADMINISTRATIVO</option>
                                                    <option value="4">GERENTE</option>
                                                    <option value="5">VENDEDOR</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Tipo Sexo</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-tie"></i></span>
                                                </div>
                                                <select style="font-size: 0.8em;" name="tipoSexo" id="tipoSexo" class="form-control">
                                                    <option value="">SELECCIONAR</option>
                                                    <option value="1">MASCULINO</option>
                                                    <option value="2">FEMENINO</option>
                                                    <option value="3">OTROS</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>