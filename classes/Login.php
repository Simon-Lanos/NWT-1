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

        $sql = "SELECT userPassword FROM users WHERE userMail = '" . $mail . "'" ;
        $req = DB::select($sql);
        // On récupère le password en base
        $passwordDb = $req->userPassword;
        // On hash le password du formulaire
        $loged = password_verify($password, $passwordDb);
        // On vérifie que les deux password sont identique
        if ($loged) {
            return true;

        } else {
            return false;

        }

    }


}
