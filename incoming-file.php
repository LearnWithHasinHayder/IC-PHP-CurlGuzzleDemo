<?php
if (isset($_FILES['file'])) {
    $filename = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $destination = 'uploads/' . $filename;

    // Check if the file was uploaded successfully
    if (move_uploaded_file($tmp_name, $destination)) {
        echo "File uploaded successfully to $destination";
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "No file was uploaded.";
}