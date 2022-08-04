<?PHP

use App\Db\DataBase;

    require './App/Db/DataBase.php';

    $con = new DataBase('ams_atividade');
    //$query = $con->select(['dataInicio=' => '2022-07-30']);
    $query = $con->select(['dataInicio>=' => '"2022-08-02 00:00:00"', 'dataInicio<=' => '"2022-08-02 23:59:59"']);   
    
    $res = $query->fetchAll(PDO::FETCH_BOTH);
    var_dump($res);
    
?>