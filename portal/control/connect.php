<?php
// começar ou retomar uma sessão


class Conexao
 {
    // private $usuario = "aprincip_admin";
    // private $senha = "BBMM@bbmm@123";
    // private $caminho = "localhost";
    // private $banco = "aprincip_aprincipal";
    // private $mysqli;
    private $usuario = "root";
    private $senha = "";
    private $caminho = "localhost";
    private $banco = "port5718_aprincipal";
    private $mysqli;

   function __construct()
   {
     $this->mysqli = new mysqli("$this->caminho", "$this->usuario", "$this->senha", "$this->banco");
     mysqli_set_charset($this->mysqli, 'utf8');
   }

   public function getConexao(){
     return $this->mysqli;
   }
 }


  class ConexaoPDO
  {
    public static function getConexao(){
    define('HOST', '162.241.2.87');
define('USUARIO', 'port5718_admin');
define('SENHA','40028922');
define('DB', 'port5718_Aprincipal');

      $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
      $conexao = new PDO("mysql:host=".HOST."; dbname=".DB, USUARIO, SENHA, $opcoes);
      return $conexao;
    }
  }

?>
