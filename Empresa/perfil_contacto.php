<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/ProyectoFeria/AppFeria/Controlador/user.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/ProyectoFeria/AppFeria/Modelo/Daos/ContactoEmpresaDAO.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/ProyectoFeria/AppFeria/Modelo/Daos/EmpresaDAO.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/ProyectoFeria/AppFeria/Modelo/Entidades/ContactoEmpresa.php');
session_start();
if (!isset($_SESSION['user'])) {

    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 3) {
    header("location: ../index.php");
}

$user = new Usuario();
$contactoEmpresa_dao = new ContactoEmpresaDAO();
$user->setUser($_SESSION['user']);
$codigo = $user->darCodigo();
$contactoEmpresa = $contactoEmpresa_dao->devolverContactoEmpresa($codigo);
$nombreContacto = $contactoEmpresa_dao->devolverNombreContacto($codigo);

$empresa_dao = new EmpresaDAO();
$empresa = $empresa_dao->devolverEmpresa($codigo);


include('menuEmpresa.php');
include('Header.php');

?>
<link href="../assets/plugins/toastr/toastr.min.css" rel="stylesheet" />

<body>
    <div class="content-wrapper">
        <div class="content">
            <div class="bg-white border rounded">

                <div class="row no-gutters">
                    <div class="col-lg-4 col-xl-3">
                        <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                            <div class="card text-center widget-profile px-0 border-0">
                                <div class="card text-center widget-profile px-0 border-0">
                                <?php   
                                echo '<img style="max-width:100%;width:auto;height:auto;" src="data:image/jpeg;base64,'.base64_encode( $empresa->getLogoEmpresa() ).'" lt="user image"/>';
                                ?>
                                </div>

                                
                                    <h4 class="py-2 text-dark"><?php echo($empresa->getRazonSocial()) ?></h4>

                            </div>

                            <hr class="w-100">

                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="profile-content-right py-5">
                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">

                            </ul>
                            <div class="tab-content px-3 px-xl-5" id="myTabContent">
                                <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">

                                </div>

                                <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                    <div class="mt-5">
                                        <form action="javascript:editarContacto()" method="POST" id="editarContacto" name="editarContacto">

                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="firstName">Nombres</label>
                                                        <input type="text" class="form-control" name="nomContacto" id="nomContacto" value="<?php echo ($contactoEmpresa->getNomContacto()) ?>">
                                                        <input type="hidden" id="codContacto" name="codContacto" value='<?php echo ($contactoEmpresa->getCodContacto()) ?>'>

                                                        <input type="hidden" id="codUsuario" name="codUsuario" value='<?php echo ($codigo) ?>'>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lastName">Apellidos
                                                        </label>
                                                        <input type="text" class="form-control" name="apellidoContacto" id="apellidoContacto" value="<?php echo ($contactoEmpresa->getApellidoContacto()) ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="userName">Correo Empresarial</label>
                                                <input type="text" class="form-control" id="userName" value="<?php echo (($_SESSION['user']))  ?>" readonly></input>

                                                <span class="d-block mt-1"></span>
                                            </div>


                                            <div class="form-group mb-4">
                                                <label for="telefono">Teléfono</label>
                                                <input type="text" class="form-control" name="telefonoContacto" id="telefonoContacto" value="<?php echo ($contactoEmpresa->getTelefonoContacto())?>"
                                                maxlength="15" pattern="(^[+]?[0-9]{7,15})" title="El Formato de telefono puede comenzar con + o solo números (max 15)">
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="cargo">Cargo</label>
                                                <input type="text" class="form-control" name="cargoContacto" id="cargoContacto" value="<?php echo ($contactoEmpresa->getCargoContacto()) ?>">
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="email">Correo Contacto</label>
                                                <input type="email" class="form-control" name="correoContacto" id="correoContacto" value="<?php echo ($contactoEmpresa->getCorreoContacto()) ?>">
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="conPassword1">Contraseña Actual</label>
                                                <input type="password" class="form-control" id="conPassword1" name="conPassword1" value="">
                                            </div>


                                            <div class="form-group mb-4">
                                                <label for="newPassword">Contraseña Nueva</label>
                                                <input type="password" class="form-control" id="newPassword" name="newPassword" value=""
                                                pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="El formato de la contraseña debe ser contener al menos 1 mayúscula, 1 minúscula y 1 número min 6 caracteres ">
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="conPassword">Confirmar Contraseña</label>
                                                <input type="password" class="form-control" id="conPassword" name="conPassword" value="">
                                            </div>

                                            <div class="d-flex justify-content-end mt-5">
                                                <button type="submit" class="btn btn-primary mb-2 btn-pill">Aceptar</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../assets/plugins/toastr/toastr.min.js"></script>
        <script>
            function editarContacto() {

                datos = $('#editarContacto').serialize();



                $.ajax({
                    type: "POST",
                    data: datos,
                    url: "editar_contacto.php",
                    success: function(r) {

                        console.log(r);
                        if (r == 1) {
                            toastr["success"]('Actualizando perfil...', "NOTIFICACIÓN");
                            window.location.href = "index.php";
                        }else if (r == 3) {
                            toastr["success"](r, "ERROR");
                        } else {

                            toastr["success"](r, "ERROR");

                        }
                    }
                });

            }
        </script>
        <?php

        include('Footer.php')

        ?>