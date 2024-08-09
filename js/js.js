// JS productdetail
document.addEventListener('DOMContentLoaded', function() {
    // Điều chỉnh ảnh lớn khi click vào ảnh thu nhỏ
    var thumbnails = document.querySelectorAll('#gallery_01 a');
    var mainImage = document.querySelector('.preview-small img');
    
    thumbnails.forEach(function(thumbnail) {
        thumbnail.addEventListener('click', function(e) {
            e.preventDefault();
            var largeImageSrc = this.getAttribute('data-image');
            var zoomImageSrc = this.getAttribute('data-zoom-image');
            mainImage.setAttribute('src', largeImageSrc);
            mainImage.setAttribute('data-zoom-image', zoomImageSrc);
        });
    });

    var quantityInput = document.getElementById('quantity'); // Hiển thị số lượng sản phẩm
    var increaseBtn = document.getElementById('increaseQty'); // Tăng số lượng sản phẩm
    var decreaseBtn = document.getElementById('decreaseQty'); // Giảm số lượng sản phẩm
    var maxQuantity = 10; // Giới hạn số lượng tối đa thành 10

    increaseBtn.addEventListener('click', function() {
        var currentQuantity = parseInt(quantityInput.value);
        var maxQuantityFromInput = parseInt(quantityInput.getAttribute('max')); // Lấy giá trị max từ thuộc tính input
        if (currentQuantity < Math.min(maxQuantity, maxQuantityFromInput)) {
            quantityInput.value = currentQuantity + 1;
        }
    });

    decreaseBtn.addEventListener('click', function() {
        var currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    });
});
// END JS productdetail

// JS slide
document.querySelector('.dropdown-toggle').addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = this.href;
 });
 // END JS slide
 