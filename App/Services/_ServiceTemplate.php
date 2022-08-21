<?PHP
    //Esqueleto básico do serviço. Somente para referência.
    namespace App\Services;    

    $rh = new ServiceTemplate();

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':        
            $rh->get();
        break;

        case 'POST':        
            $rh->post();
        break;

        case 'PUT':        
            $rh->update();
        break;
        
        default:
        echo "<h1>Method unknown</h1>";
    } 

    class ServiceTemplate{
       
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

