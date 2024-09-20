<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>

<div class="container">
    <div class="upload-form">
        <h2>GALERIA DINAMICA</h2>
        <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
            <label for="file-upload" class="custom-file-upload">
                Seleccionar Imagen
            </label>
            <input id="file-upload" type="file" name="image" accept="image/*" required>
        </form>
    </div>

   

    <div class="gallery">
        <?php
        $directory = 'images/';
        $images = glob($directory . "*.{jpg,png,gif,jpeg}", GLOB_BRACE);

        foreach ($images as $image) {
            $image_name = basename($image);
            echo "<div class='image-container'>";
            echo "<img src='$image' alt='Imagen'>";
            echo "<form action='delete.php' method='post' class='delete-form'>";
            echo "<input type='hidden' name='image' value='$image_name'>";
            echo "<button type='submit' class='delete-btn'>Eliminar</button>";
            echo "</form>";
            echo "</div>";
        }
        ?>
    </div>
</div>

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
</div>

<script src="script.js"></script>
</body>
</html>
