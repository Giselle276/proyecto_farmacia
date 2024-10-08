<?php
include_once '../modelo/conexion.php';
class usuario{
    var $objetos;
    public function __construct(){
        $db = new conexion();
        $this ->acceso = $db->pdo;
    }

    function loguearse($dni,$pass)
    {
        $sql="SELECT * FROM usuario inner join tipo_us on us_tipo=id_tipo_us where dni_us=:dni and contrasena_us=:pass";
        $query = $this -> acceso ->prepare($sql);

        $query->execute(array(':dni'=>$dni,':pass'=>$pass));
        $this->objetos=$query->fetchall();
        return $this ->objetos;
    }
    function obtener_datos($id)
    {
        $sql="SELECT * FROM usuario join tipo_us on us_tipo=id_tipo_us and id_usuario=:id";
        $query = $this -> acceso ->prepare($sql);

        $query->execute(array(':id'=>$id));
        $this->objetos=$query->fetchall();
        return $this ->objetos;
    }
    function editar($id_usuario,$telefono,$residencia,$correo,$sexo,$adicional){
        $sql="UPDATE usuario SET telefono_us=:telefono,residencia_us=:residencia,correo_us=:correo,sexo_us=:sexo,adicional_us=:adicional where id_usuario=:id";
        $query = $this -> acceso ->prepare($sql);
        $query->execute(array(':id'=>$id_usuario,':telefono'=>$telefono,':residencia'=>$residencia ,':correo'=>$correo,':sexo'=>$sexo,':adicional'=>$adicional));

    }

    function cambiar_contra($id_usuario,$oldpass,$newpass){
        $sql="SELECT * from usuario where id_usuario=:id and contrasena_us=:oldpass";
        $query = $this -> acceso ->prepare($sql);
        $query->execute(array(':id'=>$id_usuario,':oldpass'=>$oldpass));
        $this->objetos=$query->fetchall();
        if(!empty($this ->objetos)){
            $sql="UPDATE usuario SET contrasena_us=:newpass where id_usuario=:id";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':id'=>$id_usuario,':newpass'=>$newpass));
            echo 'update';
        }
        else{
            echo 'noupdate';
        }
    }
    }

?>