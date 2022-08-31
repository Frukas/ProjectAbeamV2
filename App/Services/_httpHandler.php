<?PHP

    namespace App\Services;     

    class httpHandler{

        function handleRequest($rh){             
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
        }
    }
?>