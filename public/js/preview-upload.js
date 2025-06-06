function previewImage(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('imagePreview');

    // Validasi ekstensi
    const allowedTypes = ['image/jpeg', 'image/png'];
    if (!allowedTypes.includes(file.type)) {
        alert("File harus berupa JPG atau PNG");
        event.target.value = ""; // reset input
        preview.style.display = "none";
        return;
    }

    // Tampilkan preview
    const reader = new FileReader();
    reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = "block";
    };
    reader.readAsDataURL(file);
}

