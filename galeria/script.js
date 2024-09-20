document.getElementById('file-upload').onchange = function() {
    var form = document.getElementById('uploadForm');
    var preview = document.getElementById('image-preview');

    var reader = new FileReader();
    reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
    };
    reader.readAsDataURL(this.files[0]);

    // Enviar el formulario automáticamente después de seleccionar la imagen
    form.submit();
};

// Modal funcionalidad
var modal = document.getElementById("myModal");
var modalImg = document.getElementById("img01");

document.querySelectorAll('.image-container img').forEach(function(image) {
    image.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
    };
});

document.querySelector(".close").onclick = function() {
    modal.style.display = "none";
};
