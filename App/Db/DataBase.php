<?PHP
    namespace App\Db;

    use \PDO;
    use \PDOException;

    include "_config.php";

    class DataBase{

        private $table;
        private $connection;

        public function __construct($table = null){
            $this->table = $table;
            $this->setConnection();
        }

        private function setConnection(){
            try{
                // $this->connection = new PDO('mysql:host='.self::Host.';dbname='.self::Name, self::User, self::Pass);
                $this->connection = new PDO('mysql:host='.Host.';dbname='.Name, User,Pass);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                //TODO: mudar mensagem de erro
                die('ERROR:'.$e->getMessage());
            }
        }

        private function execute($query, $params = []){
            try{
                $statement = $this->connection->prepare($query);
                $statement->execute($params);
                return $statement;
            }catch(PDOException $e){
                //TODO: mudar mensagem de erro
                die('ERROR:'.$e->getMessage());
            }
        }

        /*
        Recebe um map com o campo e o valor.
        Exemplo da função insert: insert(["nome" => "Maria", "idade" => 58, "estado" => "Sergipe" ])
        */        
        public function insert($values){
            $fields = array_keys($values);
            $binds = array_pad([],count($fields),"?");

            $query = 'INSERT INTO '.$this->table.'('.implode(',',$fields).') VALUES ('.implode(",",$binds).')'; 

            echo $query;
            
            $this->execute($query, array_values($values));

            return $this->connection->lastInsertId();
        }        

        /*
        Exemplo de select : select([ "id=" => 1]), retorna os valores que o id é igual a 1;
        Exemplo 2: select([ "data>" => "2022-08-01", "data<=" => "2022-08-10"]) 
        retorna datas que são maiores que 2022-08-01 e menores e iguals a 2022-08-10
        */        
        public function select($params = null){

            $res = '';
            $where = '';
            $count = 0;            

            if(!is_null($params)) {
                $arraySize = count($params);

                foreach($params as $key => $value){
                    if($arraySize > 0 && $count < $arraySize - 1){
                        $res = $res.$key.$value.' and ';
                    }else{
                        $res = $res.$key.$value;
                    }   
                    $count++;                 
                }
                $where = ' WHERE '.$res;
            }

            $query = 'SELECT * FROM '.$this->table.$where;
            //var_dump($query);

            return $this->connection->query($query);
        }

        //Caso seja necessário uma query mais complexa pode utilizar essa função colocando a query diretamente        
        public function selectByQuery($query){
            return $this->connection->query($query);
        }
    } 
?>