<?PHP
    namespace App\Services;

    use App\Classes\atividade;
    
    require '..\Classes\atividade.php';  

    $rh = new AtividadeService();

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

    class AtividadeService{
       
        public function get(){
            echo "Chegou aqui GET";
        }

        public function post(){
            $json = file_get_contents('php://input'); 
            $res = json_decode($json);
            $atv = new atividade( $res->idAtividade, 
                                    $res->idServico,
                                    $res->idOperador,
                                    $res->dataInicio,
                                    $res->dataFim,
                                    $res->descricao,
                                    $res->tempo,
                                    $res->solicitacao,
                                    $res->atividade,
                                    $res->shadowing
                            ); 
           $atv->insert();
        }

        public function update(){
            echo "Chegou aqui UPDATE";
        }
    }
?>

