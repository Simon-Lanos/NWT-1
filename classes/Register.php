<?php

class Register extends DB {

    public function register() {
        if ( isset( $_SESSION['id'] ) ) {
            header( 'Location: /admin' );
            echo "Vous ne pouvez pas créer un compte en etant connecté";
        }

        if ( !empty( $_POST ) ) {
            extract( $_POST );

            $admin = $this->createAccount();

            if ( $admin ) {
                $_SESSION['id'] = $admin['id'];

                header( 'Location: /admin' );
            }
            else {
                $erreur = 'Identifiants erronés';
            }
        }
    }


    public function createAccount() {
        $db = 'INSERT INTO users(userFirstName, userLastName, userPassword, userMail, userGender, userBirthdate, userAdress, zipCode
                          , userCity, userSpeciality, promotionId, groupId, roleId VALUES $FIRSTNAME, $LASTNAME, $PASSWORD, $MAIL 
                          , $GENDER, $BIRTHDATE, $ADRESS, $ZIPCODE, $CITY, $SPECIALITY, $PROMOTION, $GROUP, $ROLE)';
        $sql = "SELECT mail FROM users WHERE mail = '" . $mail . "'" ;
        $req = DB::select($sql);
    }
}