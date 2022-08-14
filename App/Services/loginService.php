<?PHP
    namespace App\Services;

    use App\Classes\operador;

    require '..\Classes\operador.php'; 

    $rh = new loginService();   

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':        
            $rh->get();
        break;
        
        default:
        echo "<h1>Method unknown</h1>";
    } 

    class loginService{
       
        public function get(){

            $user =  $_GET['user'];
            $pass = $_GET['password'];

            $op = new operador();
            $res = $op->autenticacao($user, $pass);            

            echo $res;
        }
    }
?>

