<?PHP
    namespace App\Services;

    use App\Classes\cliente;

    require '..\Classes\cliente.php';  

    $rh = new clientService();    

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':        
            $rh->get();
        break;

        case 'POST':        
            $rh->post();
        break;

        case 'UPDATE':        
            $rh->update();
        break;
        
        default:
        echo "<h1>Method unknown</h1>";
    } 

    class clientService{        
       
        public function get(){
            $cli = new cliente();                        
            echo $cli->getClientsInfo();            
        }

        public function post(){
            echo "Chegou aqui POST";
        }

        public function update(){
            echo "Chegou aqui UPDATE";
        }
    }
?>

