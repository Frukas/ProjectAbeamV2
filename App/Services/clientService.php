<?PHP
    namespace App\Services;

    use App\Classes\cliente;

    require '..\Classes\cliente.php';
    require '_httpHandler.php';
        
    $service = new httpHandler();
    $service->handleRequest(new clientService());

    class clientService{        
       
        public function get(){
            $cli = new cliente();                        
            echo $cli->getClientsInfo();            
        }

        //TODO: para postar na tabela serviço
        public function post(){
            echo "Chegou aqui POST";
        }

        public function put(){
            echo "Chegou aqui UPDATE";
        }
    }
?>

