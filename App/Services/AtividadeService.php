<?PHP
    namespace App\Services;

    use App\Classes\atividade;
    
    require '..\Classes\atividade.php';
    require '_httpHandler.php';
        
    $service = new httpHandler();
    $service->handleRequest(new AtividadeService());

    class AtividadeService{
       
        public function get(){            
            $rs = $_GET['data'];
            $usId = $_GET['id'];
            $atv = new atividade();
            
            //Que tipo de pesquisa vai retornar
            switch($_GET['type']){
                case 'detailList':  //Dados para o apontamento diário                   
                    echo $atv->getTabelaAtividades($rs, $usId); 
                break; 
                case 'monthly':  //Dados para os dias apontados no mês                                     
                    echo $atv->getApontamentosDoMes($rs, $usId);
                break;
                case 'totalDay': //Dados para o apontamento total do dia dos operadores
                    echo $atv->getTempoTotaldoDia($rs);
                break;
            }             
        }

        public function post(){
            $json = file_get_contents('php://input'); 
            $res = json_decode($json);
            $atv = new atividade();
            $atv->insertData (  
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
           $atv->postToDB();
        }

        public function update(){
            echo "Chegou aqui UPDATE";
        }
    }
?>

