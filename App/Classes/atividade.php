<?PHP

    namespace App\Classes;    

    use App\Db\DataBase;

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


        // public function __construct($idAtividade = null, $idServico,$idOperador,$dataInicio, $dataFim, $descricao = null, $tempo , $solicitacao,$atividade, $shadowing)
        // {
        //     $this->idAtividade = $idAtividade;
        //     $this->idServico = $idServico;
        //     $this->idOperador = $idOperador;
        //     $this->dataInicio = $dataInicio;
        //     $this->dataFim = $dataFim;
        //     $this->descricao = $descricao;
        //     $this->tempo = $tempo;
        //     $this->solicitacao = $solicitacao;
        //     $this->atividade = $atividade;
        //     $this->shadowing = $shadowing;
            
        //     $this->horasExtras;
        //     $this->Tipo = $Tipo;            
        //     $this->EstaAtivo = $EstaAtivo;            
        // }

        public function insert(){
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
    }
?>