<?php

if (isset($_POST['submit'])) {

    $src = $_FILES['myfile']['tmp_name'];
    $des = "upload/" . $_FILES['myfile']['name'];

    // Create 'upload' folder if it doesn't exist
    if (!is_dir('upload')) {
        mkdir('upload', 0777, true);
    }

    if (move_uploaded_file($src, $des)) {
        echo "Success";
    } else {
        echo "Error";
    }

}
?>
