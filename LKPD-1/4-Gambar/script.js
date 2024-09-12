const gambarSelect = document.getElementById('gambar');
const bentukSelect = document.getElementById('bentuk');
const borderColorInput = document.querySelector('input[type="color"]');
const gambarPreview = document.getElementById('gambar-preview');

gambarSelect.addEventListener('change', function () {
    const selectedImage = this.options[this.selectedIndex].getAttribute('data-icon');
    gambarPreview.src = selectedImage;
});

bentukSelect.addEventListener('change', function () {
    const selectedBorderShape = this.options[this.selectedIndex].value;
    gambarPreview.className = selectedBorderShape;
});


borderColorInput.addEventListener('input', function () {
    const selectedBorderColor = this.value;
    gambarPreview.style.borderColor = selectedBorderColor;
});