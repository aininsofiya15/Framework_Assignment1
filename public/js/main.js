// Scroll-reveal animation: fade elements in as they enter the viewport
(function () {
    var items = document.querySelectorAll('.reveal');
    if (!('IntersectionObserver' in window)) {
        items.forEach(function (el) { el.classList.add('in-view'); });
    } else {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        items.forEach(function (el, i) {
            el.style.transitionDelay = ((i % 4) * 90) + 'ms';
            io.observe(el);
        });
    }

    // Animated number counters (elements with data-count)
    var counters = document.querySelectorAll('[data-count]');
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    function runCounter(el) {
        var target = parseFloat(el.dataset.count);
        var decimals = parseInt(el.dataset.decimals || '0', 10);
        if (reduce) { el.textContent = target.toFixed(decimals); return; }
        var start = performance.now(), duration = 1400;
        (function tick(now) {
            var p = Math.min((now - start) / duration, 1);
            var eased = 1 - Math.pow(1 - p, 3);
            el.textContent = (target * eased).toFixed(decimals);
            if (p < 1) requestAnimationFrame(tick);
        })(start);
    }
    if ('IntersectionObserver' in window) {
        var co = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) { runCounter(entry.target); co.unobserve(entry.target); }
            });
        }, { threshold: 0.6 });
        counters.forEach(function (el) { co.observe(el); });
    }

    // Navbar shrink on scroll + back-to-top button
    var nav = document.querySelector('.navbar-profile');
    var topBtn = document.getElementById('backToTop');
    function onScroll() {
        var y = window.scrollY;
        if (nav) nav.classList.toggle('scrolled', y > 30);
        if (topBtn) topBtn.classList.toggle('show', y > 400);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
    if (topBtn) topBtn.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: 'smooth' }); });
})();
