const jfBoot = () => {
    // Safe Swiper init: skips missing elements and never double-initialises
    const initSwiper = (sel, opts) => {
        const el = document.querySelector(sel);
        return el && typeof Swiper !== 'undefined' && !el.swiper ? new Swiper(el, opts) : null;
    };
    const nav = (s) => ({ nextEl: `${s} .swiper-button-next`, prevEl: `${s} .swiper-button-prev` });
    const pag = (s) => ({ el: `${s} .swiper-pagination`, clickable: true });

    initSwiper('.hero-slider', { loop: true, speed: 800, effect: 'fade', fadeEffect: { crossFade: true },
        autoplay: { delay: 7000, disableOnInteraction: false }, navigation: nav('.hero-slider'), pagination: pag('.hero-slider') });

    initSwiper('.testimonials-slider', { loop: true, speed: 600, autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: pag('.testimonials-slider'), navigation: nav('.testimonials-slider'),
        breakpoints: { 320: { slidesPerView: 1, spaceBetween: 20 }, 992: { slidesPerView: 2, spaceBetween: 30 } } });

    initSwiper('.team-slider', { loop: true, speed: 600, autoplay: { delay: 6000, disableOnInteraction: false },
        pagination: pag('.team-slider'), navigation: nav('.team-slider'),
        breakpoints: { 320: { slidesPerView: 1, spaceBetween: 20 }, 768: { slidesPerView: 2, spaceBetween: 30 }, 1024: { slidesPerView: 3, spaceBetween: 30 } } });

    // Legacy mobile nav + header shadow (safe if elements are absent)
    const hamburger = document.querySelector('.hamburger'), navLinks = document.querySelector('.nav-links'), header = document.querySelector('header');
    if (hamburger && navLinks) hamburger.addEventListener('click', () => { navLinks.classList.toggle('nav-active'); hamburger.classList.toggle('open'); });
    if (header) { const f = () => header.classList.toggle('scrolled', window.scrollY > 80); f(); window.addEventListener('scroll', f, { passive: true }); }

    // Reveal + counters
    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target'); let count = 0;
        const tick = () => { count += target / 200; if (count < target) { counter.innerText = Math.ceil(count); requestAnimationFrame(tick); } else counter.innerText = target; };
        tick();
    };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            setTimeout(() => el.classList.add('active'), el.dataset.revealDelay || 0);
            if (el.classList.contains('stat-number') && !el.classList.contains('counted')) { animateCounter(el); el.classList.add('counted'); }
            observer.unobserve(el);
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal, .stat-number').forEach((el) => observer.observe(el));

    // Legacy dropdown (previously crashed when .dropdown-item was missing)
    const dropdownItem = document.querySelector('.dropdown-item');
    const toggle = dropdownItem && dropdownItem.querySelector('.dropdown-toggle');
    const menu = dropdownItem && dropdownItem.querySelector('.dropdown-menu');
    if (toggle && menu) {
        const set = (open) => { menu.classList.toggle('show', open); toggle.setAttribute('aria-expanded', String(open)); };
        toggle.addEventListener('click', (e) => { e.preventDefault(); set(!menu.classList.contains('show')); });
        dropdownItem.addEventListener('mouseenter', () => set(true));
        dropdownItem.addEventListener('mouseleave', () => set(false));
    }
};
if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', jfBoot); else jfBoot();