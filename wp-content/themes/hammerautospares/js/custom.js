document.addEventListener('DOMContentLoaded', function () {
    var currentPage = window.location.pathname.split('/').pop();

    var navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    navLinks.forEach(function (link) {
        var href = link.getAttribute('href');

        if (href === currentPage) {
            link.classList.add('active');
        }
    });
});
