<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'ohene_jesica_portfolio';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    $errors = array();
    
    $fname = isset($_POST['fname']) ? mysqli_real_escape_string($connection, $_POST['fname']) : '';
$lname = isset($_POST['lname']) ? mysqli_real_escape_string($connection, $_POST['lname']) : '';
$email = isset($_POST['email']) ? mysqli_real_escape_string($connection, $_POST['email']) : '';
$message = isset($_POST['message']) ? mysqli_real_escape_string($connection, $_POST['message']) : '';


    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    if ($lname == NULL) {
        $errors[] = "Last name field is empty.";
    }

    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    if ($fname == NULL) {
        $errors[] = "First name field is empty.";
    }

 
    $email = $_POST['email'];
    if ($email == NULL) {
        $errors[] = "Email field is empty.";
    }
    $message = mysqli_real_escape_string($connection, $_POST['message']);
    if ($message == NULL) {
        $errors[] = "message field is empty.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "\"" . $email . "\" is not a valid email address.";
    }

    $errcount = count($errors);
    if ($errcount > 0) {
        $errmsg = array();
        for ($i = 0; $i < $errcount; $i++) {
            $errmsg[] = $errors[$i];
        }
        echo json_encode(array("errors" => $errmsg));
    } else {
        $querystring = "INSERT INTO contact_form(messenger_id,fname,lname,message,email) VALUES(NULL,'" . $lname . "','" . $fname . "','" . $email . "','" . $message . "')";
        $qpartner = mysqli_query($connection, $querystring);
        echo json_encode(array("message" => "Message recieved! I'll be sure to get back to you within the next business day!"));
    }
?>