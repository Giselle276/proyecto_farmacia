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
                                    <input id="id_usuario" value=<?php echo $_SESSION['id_usuario']?> type="hidden" >
                                    <img src="../imagenes/usuario1.png" class="profile-user-img img.fluid img-circle">
                                </div>
                                <h3 id = "nombre_us" class="profile-username text-center text-success"> Nombre</h3>
                                    <p id = "apellidos_us" class="text-muted text-center" >Apellidos</p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Edad</b><a id="edad"class="float-right">12</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">DNI</b><a id="dni_us"class="float-right">12</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Tipo Usuario</b>
                                            <span id = "us_tipo" class="float-right badge badge-primary">Administrador</span>
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
                                <p id="telefono_us" class="text-muted">12345678</p>
                                <strong>
                                    <i class="fas fa-map-marker-alt mr-1"style="color:#0B7300"></i>Residencia
                                </strong>
                                <p id="residencia_us" class="text-muted">12345678</p>
                                <strong>
                                    <i class="fas fa-at mr-1"style="color:#0B7300"></i>Correo
                                </strong>
                                <p id="correo_us" class="text-muted">12345678</p>
                                <strong>
                                    <i class="fas fa-smile-wink mr-1"style="color:#0B7300"></i>Sexo
                                </strong>
                                <p id="sexo_us" class="text-muted">12345678</p>
                                <strong>
                                    <i class="fas fa-pencil-alt mr-1"style="color:#0B7300"></i>Información Adicional
                                </strong>
                                <p id="adicional_us" class="text-muted">12345678</p>
                              <button class="edit btn btn-block bg-gradient-danger">Editar</button> 
                            </div>
                            <div class="card-footer">
                                <p class="text-muted">Haga clic en el botón si desea editar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card card-success">
                           <div class="card-header">
                           <h3 class="card-title">Editar Datos Personales</h3>
                           </div>
                           <div class="card-body">
                            <div class="alert alert-success text-center" id="editado" style='display:none;'>
                                <span><i class="fas fa-check m-1"></i>Editado</span>
                            </div>
                            <div class="alert alert-danger text-center" id="noeditado" style='display:none;'>
                                <span><i class="fas fa-times m-1"></i>Edición Deshabilitada</span>
                            </div>
                            <form id="form-usuario" class="form-horizontal">
                                <div class="form-group row">
                                    <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                    <div class="col-sm-10">
                                    <input type="number" id="telefono" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col form-label">Residencia</label>
                                    <div class="col-sm-10">
                                    <input type="text" id="residencia" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col form-label">Correo</label>
                                    <div class="col-sm-10">
                                    <input type="text" id="correo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col form-label">Sexo</label>
                                    <div class="col-sm-10">
                                    <input type="text" id="sexo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col form-label">Información adicional</label>
                                    <div class="col-sm-10">
                                    <textarea id="adicional" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col-sm-10 offset-sm-2 float-rigth">
                                            <button class="btn btn-block btn-outline-success">Guardar</button>
                                        </div>
                                </div>
                            </form>
                           </div>
                           <div class="card-footer">
                            <p class="text-muted">Cuidado con ingresar datos incorrectos</p>
                           </div>
                                </div>
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
<script src="../js/usuario.js">

</script>