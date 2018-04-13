<?php
/**
 * Created by PhpStorm.
 * User: MARCALBANMILLET
 * Date: 11/04/2018
 * Time: 09:53
 */

<?php
/**
 * Created by PhpStorm.
 * User: MARCALBANMILLET
 * Date: 11/04/2018
 * Time: 09:53
 */

class DB
{

    // DSN : Data Source Name
<<<<<<< Updated upstream
    private $dsn = "mysql:dbname=NWTdb;host=localhost;charset=utf8";
=======
    private $dsn = "mysql:dbname=nwtdb;host=localhost;charset=utf8";
>>>>>>> Stashed changes
    private $user = "root";
    private $password = "";
    private $db;
    function __construct()
    {
        try {
            $this -> db = new PDO($this -> dsn, $this -> user, $this -> password);
            $this -> db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        }
        catch (PDOException $e) {
           Log::logWrite($e -> getMessage());

        }
    }

    /**
     * @param $sql
     * @return mixed
     */
    function select($sql) {
        //var_dump($this->db->getAttribute(PDO::ATTR_DEFAULT_FETCH_MODE));
        try {
            $return = $this -> db -> query($sql)->fetch();
        }
        catch (PDOException $e) {
            die($e);
        }
        return $return;
    }



}
