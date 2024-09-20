<?php
if (isset($_POST['image'])) {
    $image = $_POST['image'];
    $file_path = 'images/' . $image;

    if (file_exists($file_path)) {
        unlink($file_path);
        header("Location: index.php");
    } else {
        echo "Error: El archivo no existe.";
    }
}
?>
