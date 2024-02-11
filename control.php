<?php

$errors = [];
$data = [];

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    if ( empty( $_POST[ 'name' ] ) ) {
        $errors[ 'name' ] = 'Name is required.';
    }

    if ( empty( $_POST[ 'email' ] ) ) {
        $errors[ 'email' ] = 'Email is required.';
    }

    if ( !empty( $errors ) ) {
        $data[ 'success' ] = false;
        $data[ 'errors' ] = $errors;
    } else {

        if ( ( $_POST[ 'name' ] == "testuser" ) && ( ( $_POST[ 'email' ] ) == "testemail@email.hu" ) ) {
            $data[ 'success' ] = true;
            $data[ 'message' ] = 'Success!';
        } else {

            if ( ($_POST[ 'name' ] != "testuser") || ($_POST[ 'email' ] != "testemail@email.hu") ) {
                $errors[ 'name' ] = 'Wrong name or email';
                $data[ 'success' ] = false;
                $data[ 'errors' ] = $errors;
            }
        }
    }


    echo json_encode( $data );
}
?>