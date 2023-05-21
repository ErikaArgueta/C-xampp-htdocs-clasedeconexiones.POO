<?php
class ConexionPDO{
    private $host;
    private $db;
    private $user;
    private $password;
    private $conexion;

    public function __construct($host,$db,$user,$passwword){
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->password = $passwword;
    }

    public function conectar(){
        try{
            $opcion =array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            $this->conexion=new PDO('mysql:host='.$this->host.';
            dbname='.$this->db,
            $this->user,
            $this->password,
            $opcion
            );
            if($this->conexion){
                echo "conexion exitosa";
            }else{
                echo "no se pudo conectar";
            }
        }
        catch(PDOException $e){
            echo "ERROR DE CONEXION".$e->getMessage();
            die();
        }
    }

    public function desconectar(){
        $this->conexion=null;
        echo "Base de datos desconectada";

    }
}
$host="localhost";
$db="dbclasepoo";
$user="root";
$password="";
?>