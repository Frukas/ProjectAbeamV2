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

        public function getServiceInfoById($idService){
            $con = new DataBase('ams_servicos');
            $objResul = $con->select(["idServico=" => $idService])->fetchAll(PDO::FETCH_CLASS, self::class); 

            $res = json_encode($objResul);            
             
            return $res;            
        }
     }
?>