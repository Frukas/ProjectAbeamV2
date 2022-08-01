<?PHP
     namespace App\Classes;

     use App\Db\DataBase;
     use \PDO;
 
     require '../Db/DataBase.php';
     
     class servicos{
        public $idServico;
        public $idCliente;
        public $statusServ;
        public $descricao;
        public $ranking;
        public $idGroup;
        public $ams_servicoscol;

        public function getServiceInfoByIdCliente($idCliente){
            $con = new DataBase('ams_servicos');
            $objResul = $con->select(["idCliente=" => $idCliente])->fetchAll(PDO::FETCH_CLASS, self::class); 

            $res = json_encode($objResul);            
             
            return $res;            
        }
     }
?>