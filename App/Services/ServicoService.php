<?PHP
    namespace App\Services; 
    
    use App\Classes\servicos;

    require '..\Classes\servicos.php'; 
    require '_httpHandler.php';
        
    $service = new httpHandler();
    $service->handleRequest(new ServicoService());

    class ServicoService{
       
        public function get(){
            $rs = $_GET['idClient'];            
            $serv = new servicos();
            echo $serv->getServiceInfoByIdCliente($rs);
        }

        public function post(){
            echo "Chegou aqui POST";
        }

        public function put(){
            echo "Chegou aqui UPDATE";
        }
    }
?>

