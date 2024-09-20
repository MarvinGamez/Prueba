<?php
if (isset($_FILES['image'])) {
    $errors = [];
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $extensions = ["jpeg", "jpg", "png", "gif"];

    if (!in_array($file_ext, $extensions)) {
        $errors[] = "Extensión no permitida. Por favor, elige un archivo JPEG, PNG o GIF.";
    }

    if ($file_size > 2097152) { // 2MB
        $errors[] = "El archivo debe ser menor de 2 MB.";
    }

    if (empty($errors)) {
        move_uploaded_file($file_tmp, "images/" . $file_name);
        header("Location: index.php");
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
