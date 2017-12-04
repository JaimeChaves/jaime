<?
class Conexao{

	public static $HOST = "localhost";
	public static $USER = "root";
	public static $PASSWORD = "";
	public static $DATABASE = "prontuario";
	public static $connection;

	public static function conectar(){
	Conexao::$connection = @mysqli_connect(Conexao::$HOST,Conexao::$USER,Conexao::$PASSWORD,Conexao::$DATABASE);
	if (!Conexao::$connection)    
		echo("<script>alert('Falha ao conectar ao banco de dados');</script>");
	}	

	public static function desconectar(){
		mysqli_close(Conexao::$connection);
	}	

	public function __destruct(){ 
		$this->desconectar();
	}



	public function getConnection() {
        return $this->connection;
    }

     public function setConnection($connection) {
        $this->connection = $connection;
    }

}


