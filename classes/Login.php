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

            $this->view( 'admin/connexion', ['erreur' => $erreur] );
        }

        $this->view( 'admin/connexion' );
    }



    public function accountExists($mail, $password)  {
        $admin = DB::select( 'select id, password from users where mail = ?', $mail );

        if ( $admin && password_verify( $password, $admin[0]['password'] ) ) {
            return $admin[0];
        }
        else {
            return false;
        }
    }



}