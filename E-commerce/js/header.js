document.addEventListener("DOMContentLoaded", function() {
    var dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('click', function(event) {
            var subMenu = this.querySelector('.sub-menu');
            if (subMenu.style.display === 'flex') {
                subMenu.style.display = 'none';
            } else {
                subMenu.style.display = 'flex';
            }
            event.stopPropagation(); // Prevent the click event from propagating to the document
        });
    });

    // Close dropdowns when clicking outside
});
