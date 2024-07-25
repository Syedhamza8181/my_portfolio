document.addEventListener('DOMContentLoaded', function() {
    var popup = document.getElementById('popup');
    var popupBox = document.querySelector('.popup-box');
    var popupClose = document.querySelector('.popup-close');

    // Show popup when the button with class .popup-btn is clicked
    document.querySelectorAll('.popup-btn').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            popup.style.display = 'block';
            setTimeout(function() {
                popupBox.classList.remove('transform-out');
                popupBox.classList.add('transform-in');
            }, 50); // Small delay to ensure CSS transition is applied
        });
    });

    // Close popup when close button is clicked
    if (popupClose) {
        popupClose.addEventListener('click', function(event) {
            event.preventDefault();
            popupBox.classList.remove('transform-in');
            popupBox.classList.add('transform-out');
            setTimeout(function() {
                popup.style.display = 'none';
            }, 500); // Time matching CSS transition duration
        });
    }
});
