<div class="card mt-3" style="border:1px solid gray; box-shadow: 1px 2px 5px;">

    <div class="card-header bg-success text-white">
        <strong style=" font-size:20px;">Registrar Nuevo Usuario</strong>
    </div>

    <form id="frmSaveUser">
        <div class="card-body">
            <div class="row">

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="name_user">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="name_user">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su apellido" required>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="cedula_user">Cédula</label>
                        <input type="number" class="form-control" name="cedula" id="cedula" placeholder="Ingrese su cédula" required>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="email_user">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo" required>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="password_user">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña" required>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="rpassword_user">Repetir Contraseña</label>
                        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Repita su contraseña" required>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="estate_user">Estado</label>
                        <select class="form-control" name="estado" id="estado">
                            <option>activo</option>
                            <option>inactivo</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="privilege_user">Rol</label>
                        <select class="form-control" name="rol" id="rol">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label> Ayuda</label>
                        <br>
                        <button type="button" class="btn btn-outline-primary" id="btnprivilegeabout" data-bs-toggle="modal" data-bs-target="#modalAboutPrivilege">
                            Ver privilegio
                        </button>
                    </div>
                </div>

                <!--Aqui se muestran los errores-->
                <div class="alert mt-3" role="alert" style="display: none;" id="errorSaveUser">
                </div>

            </div>

        </div>
        <!--end card-body -->

        <div class="card-footer text-muted">
            <button class="btn btn-outline-primary" id="btnUserRegister" type="submit"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Registrar</button>
            <button class="btn btn-outline-success" id="btnUserEnable"><i class="fa fa-unlock mr-2" aria-hidden="true"></i>Habilitar</button>
            <button class="btn btn-outline-success" id="btnUserDisabled"><i class="fa fa-lock mr-2" aria-hidden="true"></i>Deshabilitar</button>
            <button class="btn btn-outline-danger" id="btnUserClear"><i class="fa fa-trash mr-2" aria-hidden="true"></i>Limpiar</button>
        </div>
    </form>

</div>
<!--end card-->