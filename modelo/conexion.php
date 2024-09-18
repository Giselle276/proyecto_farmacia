<?php
class conexion{
    private $servidor ="localhost";
    private $db = "farmacia";
    private $puerto = 3306;
    private $charset = "UTF8";
    private $usuario = "root";
    private $contrasena = "";
    public $pdo = null;
    //fuerza los nombres de la columna al momento de retornar los convierte en minusculas
    //Reporte de errores para poder lanzar excepciones mediante try catch
    //que las cadenas vacias retornadas son convertidas a null
    //Modo de busqueda que nos retorna objetos
    private $atributos=[PDO::ATTR_CASE =>PDO::CASE_LOWER,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING,PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_OBJ];
    function __construct(){
        $this->pdo = new PDO("mysql:dbname={$this->db};host={$this ->servidor};port={$this->puerto};charset={$this->charset}",$this->usuario,$this->contrasena,$this->atributos);
    }
}
?>