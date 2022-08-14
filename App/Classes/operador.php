<?PHP
    namespace App\Classes; 

    use App\Db\DataBase;
    use \PDO;

    require '../Db/DataBase.php';
    
    class operador{
        public $idOperador;
        public $nomeOp;
        public $statusOpe;
        public $idExternoResp;
        public $usr_rede;
        public $Password;

        function getOperador($idOperador = null ){
            $con = new DataBase('ams_operador');

            if($idOperador == null){                
                $objResul = $con->select(["statusOpe=" => 0])->fetchAll(PDO::FETCH_CLASS, self::class);   

            }else{
                $objResul = $con->select(["statusOpe=" => 0, "idOperador=" => $idOperador])->fetchAll(PDO::FETCH_CLASS, self::class); 

            }
            $res = json_encode($objResul);            
                 
            return $res;
        }

        function autenticacao($usuario, $Password){
            $con = new DataBase("ams_operador");
            $usuario = strtoupper($usuario);
            $objResul = $con->select(["usr_rede=" => '"'.$usuario.'"', "Password=" => '"'.$Password.'"'])->fetchAll(PDO::FETCH_CLASS, self::class); 
            
            $res = json_encode($objResul);            
                 
            return $res;
        }
    }
?>