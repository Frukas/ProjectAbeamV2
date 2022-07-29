<?PHP

    namespace App\Classes;

    use App\Db\DataBase;
    use \PDO;

    require '../Db/DataBase.php';

    class cliente{
        public $idCliente;
        public $nomeCliente;
        public $idExternoLocal;
        public $statusCLi;
        public $wave;        
        
        // public function __construct($idCliente,$nomeCliente,$idExternoLocal,$statusCLi,$wave ){
        //     $this->idCliente = $idCliente;
        //     $this->nomeCliente = $nomeCliente;
        //     $this->idExternoLocal = $idExternoLocal;
        //     $this->statusCLi = $statusCLi;
        //     $this->wave = $wave;
        // }

        public function getClientsInfo(){
            //$con = new DataBase('ams_cliente');
            $con = new DataBase('ams_cliente');
            $objResul = $con->select(["statusCli=" => 0])->fetchAll(PDO::FETCH_CLASS, self::class); 

            $res = json_encode($objResul);            
             
            return $res;
        }
    }
?>