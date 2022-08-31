<?PHP
    namespace App\Services;    

    $rh = new ServiceTemplate();

    require '_httpHandler.php';
        
    $service = new httpHandler();
    $service->handleRequest(new operadorService());

    class operadorService{
       
        public function get(){
            echo "Chegou aqui GET";
        }

        public function post(){
            echo "Chegou aqui POST";
        }

        public function update(){
            echo "Chegou aqui UPDATE";
        }
    }
?>

