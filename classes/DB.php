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
    private $dsn = "mysql:dbname=NWT;host=localhost;charset=utf8";
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

     public function select ( string $query, array $params = [] ) : array {

        if ( $params ) {
            $req = $this->db->prepare( $query );
            $req->execute( $params );
        }
        else {
            $req = $this->db->query( $query );
        }

        $data = $req->fetchAll();

        return $data;
    }

     public function update ( string $query, array $params = [] ) : int {


        if ( $params ) {
            $req = $this->db->prepare( $query );
            $req->execute( $params );
        }
        else {
            $req = $this->db->query( $query );
        }

        $updated = $req->rowCount();

        return $updated;
    }

     public function insert ( string $query, array $params = [] ) : int {


        if ( $params ) {
            $req = $this->db->prepare( $query );
            $req->execute( $params );
        }
        else {
            $req = $this->db->query( $query );
        }

        $inserted = $req->rowCount();

        return $inserted;
    }

     public function delete ( string $query, array $params = [] ) : int {


        if ( $params ) {
            $req = $this->db->prepare( $query );
            $req->execute( $params );
        }
        else {
            $req = $this->db->query( $query );
        }

        $deleted = $req->rowCount();

        return $deleted;
    }
}