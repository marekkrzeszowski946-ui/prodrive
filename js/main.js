(function () {
    var nav = document.querySelector('.navbar');
    if (nav) {
        window.addEventListener('scroll', function () {
            nav.classList.toggle('scrolled', window.scrollY > 50);
        });
    }

    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var id = this.getAttribute('href');
            if (!id || id === '#') return;
            var target = document.querySelector(id);
            if (!target || !nav) return;
            e.preventDefault();
            window.scrollTo({
                top: target.offsetTop - nav.offsetHeight,
                behavior: 'smooth'
            });
        });
    });
})();
