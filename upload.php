<?php
    echo "wow";
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

//db osa hetkel ei kasuta
	$host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";
	$conn = new mysqli($host, $user, $pass, $db);

	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

    //UPLOADI PHP osa
    $target_dir = "uploads/";//serverikaust
    $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
    $uploadOk = 1;
    //failisuuruse check
    //https://www.w3schools.com/php/php_file_upload.asp
    //if ($_FILES["fileToUpload"]["size"] > 16000) {
    //    echo "Fail on liiga suur.";
    //    $uploadOk = 0;
    //}
    //troubleshooti jaoks pathidega
    //$target_filee = "uploads/test.txt";
    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)){
        echo "ehk sai tehtud";
    } else {
        echo "kindlalt feilis";
    }

?>