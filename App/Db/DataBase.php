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

        public function execute($query, $params = []){
            try{
                $statement = $this->connection->prepare($query);
                $statement->execute($params);
                return $statement;
            }catch(PDOException $e){
                //TODO: mudar mensagem de erro
                die('ERROR:'.$e->getMessage());
            }
        }

        public function insert($values){
            $fields = array_keys($values);
            $binds = array_pad([],count($fields),"?");

            $query = 'INSERT INTO '.$this->table.'('.implode(',',$fields).') VALUES ('.implode(",",$binds).')'; 

            echo $query;
            
            $this->execute($query, array_values($values));

            return $this->connection->lastInsertId();
        }
        
        public function select($params = null){

            $res = '';
            $where = '';

            if(!is_null($params)) {

                $fields = array_keys($params);

                foreach($fields as $field){
                    $res = $res.$field.$params[$field].' ';
                }
                $where = ' WHERE '.$res;
            }

            $query = 'SELECT * FROM '.$this->table.$where;
            //var_dump($query);

            return $this->connection->query($query);
        }
    } 
?>