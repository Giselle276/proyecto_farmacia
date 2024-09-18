<?php
session_start();
if($_SESSION['us_tipo']==1)
{
    include_once 'layaout/header.php';
?>
  <title>Adm | Editar Datos</title>
<?php
    include_once 'layaout/nav.php';
?>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Datos Personales</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../vista/adm_catalogo.php">Home</a></li>
              <li class="breadcrumb-item active">Datos Personales</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-success card-outline">
                            <div class="card-body box profile">
                                <div class="text-center">
                                    <img src="../imagenes/usuario1.png" class="profile-user-img img.fluid img-circle">
                                </div>
                                <h3 class="profile-username text-center text-success"> Nombre</h3>
                                    <p class="text-muted text-center" >Apellidos</p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Edad</b><a href="" class="float-right">12</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">DNI</b><a href="" class="float-right">12</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Tipo Usuario</b>
                                            <span class="float-right badge badge-primary ">Administrador</span>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Sobre mí</h3>
                            </div>
                            <div class="card-body">
                                <strong>
                                    <i class="fas fa-phone mr-1"style="color:#0B7300"></i>Teléfono
                                </strong>
                                <p class="text-muted">12345678</p>
                                <strong>
                                    <i class="fas fa-map-marker-alt mr-1"style="color:#0B7300"></i>Residencia
                                </strong>
                                <p class="text-muted">12345678</p>
                                <strong>
                                    <i class="fas fa-at mr-1"style="color:#0B7300"></i>Correo
                                </strong>
                                <p class="text-muted">12345678</p>
                                <strong>
                                    <i class="fas fa-smile mr-1"style="color:#0B7300"></i>Sexo
                                </strong>
                                <p class="text-muted">12345678</p>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>

        </div>
    </section>
  </div>
<?php
include_once 'layaout/footer.php';
}
else
{
    header('Location: ../index.php');
}
?>