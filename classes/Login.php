<?php

class Login extends DB {

    public function connexion() {
        if ( isset( $_SESSION['id'] ) ) {
            header( 'Location: ./index.php' );
        }

        if ( !empty( $_POST ) ) {
            extract( $_POST );

            $admin = $this->accountExists();

            if ( $admin ) {
                $_SESSION['id'] = $admin['id'];

                header( 'Location: ./index.php' );
            }
            else {
                $erreur = 'Identifiants erronés';
            }
        }

    }

    public function accountExists($mail,$password)  {

        $sql = "SELECT id, password FROM users WHERE mail = '" . $mail . "'" ;
        $req = DB::select($sql);
        // On récupère le password en base
        $passwordDb = $req->password;
        // On hash le password du formulaire
        $passwordPost = md5($password);
        // On vérifie que les deux password sont identique
        if ($passwordDb === $passwordPost) {
            return true;

        } else {
           return false;

        }

    }

}
