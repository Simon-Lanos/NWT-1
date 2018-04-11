<?php
/**
 * Created by PhpStorm.
 * User: MARCALBANMILLET
 * Date: 11/04/2018
 * Time: 09:53
 */

class PDO
{
    private $user = "root";
    private $pass = "";

    public function __construct()
    {

        try {
        $bdd = new PDO( 'mysql:host=localhost;dbname=tuto', $this->user,$this->pass );
        }
        catch ( PDOException $e ) {
        print( 'Erreur : ' . $e->getMessage() );
        }

    }

}