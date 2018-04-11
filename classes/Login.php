<?php

class Login extends DB {

    public function connexion() {
        if ( isset( $_SESSION['id'] ) ) {
            header( 'Location: /admin' );
        }

        if ( !empty( $_POST ) ) {
            extract( $_POST );

            $admin = $this->accountExists();

            if ( $admin ) {
                $_SESSION['id'] = $admin['id'];

                header( 'Location: /admin' );
            }
            else {
                $erreur = 'Identifiants erronés';
            }

            $this->view( 'admin/connexion', ['erreur' => $erreur] );
        }

        $this->view( 'admin/connexion' );
    }


    private function accountExists() : array {
        $admin = DB::select( 'select id, password from admin where login = ?', [$_POST['mail']] );

        if ( $admin && password_verify( $_POST['password'], $admin[0]['password'] ) ) {
            return $admin[0];
        }
        else {
            return [];
        }
    }



}