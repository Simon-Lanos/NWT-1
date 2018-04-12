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
        }
    }

    public function createAccount() {
        $sql = "SELECT userMail FROM users WHERE userMail = '" . $mail . "'" ;
        $req = DB::select($sql);
        $mailDb = $req->userMail;
        if ($mailDb === $mail) {
        echo "Ce mail est déjà utilisé";
    } else {
            $db = 'INSERT INTO users(userFirstName, userLastName, userPassword, userMail, userGender, userBirthdate, userAdress, zipCode
                          , userCity, userSpeciality, promotionId, groupId, roleId VALUES $FIRSTNAME, $LASTNAME, $PASSWORD, $MAIL 
                          , $GENDER, $BIRTHDATE, $ADRESS, $ZIPCODE, $CITY, $SPECIALITY, $PROMOTION, $GROUP, $ROLE)';
        }
    }
}