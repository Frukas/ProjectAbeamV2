<?PHP

    namespace App\Classes;    

    use App\Db\DataBase;
    use \PDO;

    require '../Db/DataBase.php';

    class atividade{
        
        public $idAtividade;
        public $idServico;
        public $idOperador;
        public $dataInicio;
        public $dataFim;
        public $descricao;
        public $tempo;
        public $solicitacao;
        public $atividade;
        public $shadowing;
        // public $horasExtras;
        // public $Tipo;
        // public $EstaAtivo;


        public function insertData($idServico,$idOperador,$dataInicio, $dataFim, $descricao = null, $tempo , $solicitacao,$atividade, $shadowing)
        {
            $this->idServico = $idServico;
            $this->idOperador = $idOperador;
            $this->dataInicio = $dataInicio;
            $this->dataFim = $dataFim;
            $this->descricao = $descricao;
            $this->tempo = $tempo;
            $this->solicitacao = $solicitacao;
            $this->atividade = $atividade;
            $this->shadowing = $shadowing;
            
            // $this->horasExtras;
            // $this->Tipo = $Tipo;            
            // $this->EstaAtivo = $EstaAtivo;            
        }

        // public function __construct($idServico,$idOperador,$dataInicio, $dataFim, $descricao = null, $tempo , $solicitacao,$atividade, $shadowing)
        // {
        //     $this->idServico = $idServico;
        //     $this->idOperador = $idOperador;
        //     $this->dataInicio = $dataInicio;
        //     $this->dataFim = $dataFim;
        //     $this->descricao = $descricao;
        //     $this->tempo = $tempo;
        //     $this->solicitacao = $solicitacao;
        //     $this->atividade = $atividade;
        //     $this->shadowing = $shadowing;
            
        //     // $this->horasExtras;
        //     // $this->Tipo = $Tipo;            
        //     // $this->EstaAtivo = $EstaAtivo;            
        // }

        public function postToDB(){
            $obDataBase = new DataBase('ams_atividade');
            $this->idAtividade = $obDataBase->insert([
                'idServico' => $this->idServico,
                'idOperador' => $this->idOperador,
                'dataInicio' => $this->dataInicio,
                'dataFim' => $this->dataFim,
                'descricao' => $this->descricao,
                'tempo' => $this->tempo,
                'solicitacao' => $this->solicitacao,
                'atividade' => $this->atividade,
                'shadowing' => $this->shadowing
            ]);
            return true;
        }

        public function getAtividades($data){
            $con = new DataBase('ams_atividade');
            $dataInicio = '"'.$data.' 00:00:00"'; //adicionando aspas para o sql reconhecer a data como string 
            $dataFim =  '"'.$data.' 23:59:59"';         
            $objResul = $con->select(['dataInicio>=' => $dataInicio, 'dataFim<=' => $dataFim])->fetchAll(PDO::FETCH_CLASS, self::class); 
            echo json_encode($objResul);                    
        }

        public function getTabelaAtividades($data, $idOperador){
            $con = new DataBase('ams_atividade');
            $dataInicio = $data.' 00:00:00'; //adicionando aspas para o sql reconhecer a data como string 
            $dataFim =  $data.' 23:59:59';  

            $query = "SELECT ams_atividade.idAtividade, ams_cliente.nomeCliente , ams_servicos.descricao,ams_atividade.dataInicio, ams_atividade.dataFim, format((ams_atividade.tempo/60), 2) as minutos, ams_atividade.atividade,ams_atividade.solicitacao
            FROM ams_atividade
            INNER JOIN ams_servicos ON ams_atividade.idServico = ams_servicos.idServico
            INNER JOIN ams_cliente ON ams_servicos.idCliente = ams_cliente.idCliente where ams_atividade.idOperador = '{$idOperador}' and ams_atividade.dataInicio >= '{$dataInicio}' and ams_atividade.dataFim <= '{$dataFim}' and !isnull(ams_atividade.dataFim)";

            $objResul = $con->selectByQuery($query)->fetchAll(PDO::FETCH_CLASS, self::class);
            echo json_encode($objResul);
        } 
    }

?>