document.addEventListener('DOMContentLoaded', () => {

    // --- 1. Initialize Hero Slider (Swiper.js) ---
    const heroSlider = new Swiper('.hero-slider', {
        loop: true,
        speed: 800,
        effect: 'fade', // Smooth fade transition
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
            delay: 7000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.hero-slider .swiper-button-next',
            prevEl: '.hero-slider .swiper-button-prev',
        },
        pagination: {
            el: '.hero-slider .swiper-pagination',
            clickable: true,
        },
    });

    // --- 2. Initialize Testimonials Carousel (Swiper.js) ---
    const testimonialsSlider = new Swiper('.testimonials-slider', {
        loop: true,
        speed: 600,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.testimonials-slider .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.testimonials-slider .swiper-button-next',
            prevEl: '.testimonials-slider .swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 30
            }
        }
    });

    // --- 3. Mobile Navigation & Header on Scroll ---
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const header = document.querySelector('header');
    
    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('nav-active');
            hamburger.classList.toggle('open'); // Hamburger animation toggle
        });
    }

    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 80) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // --- 4. Animate Numbers & Reveal Elements on Scroll ---
    const animatedElements = document.querySelectorAll('.reveal, .stat-number');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;

                // Add staggered delay for reveal animations
                const delay = el.dataset.revealDelay || 0;
                setTimeout(() => {
                    el.classList.add('active');
                }, delay);

                // Animate number counters
                if (el.classList.contains('stat-number') && !el.classList.contains('counted')) {
                    animateCounter(el);
                    el.classList.add('counted');
                }
                
                observer.unobserve(el); // Only animate once
            }
        });
    }, { threshold: 0.1 });

    animatedElements.forEach(el => observer.observe(el));

    // Counter Animation Function
    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const speed = 200; // The lower, the faster
        let count = 0;
        
        const updateCount = () => {
            const increment = target / speed;
            count += increment;

            if (count < target) {
                counter.innerText = Math.ceil(count);
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    };

    // --- Initialize Team Slider (Swiper.js) ---
const teamSlider = new Swiper('.team-slider', {
    loop: true,
    speed: 600,
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: '.team-slider .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.team-slider .swiper-button-next',
        prevEl: '.team-slider .swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});

});
document.addEventListener('DOMContentLoaded', function() {
    const dropdownItem = document.querySelector('.dropdown-item');
    const dropdownToggle = dropdownItem.querySelector('.dropdown-toggle');
    const dropdownMenu = dropdownItem.querySelector('.dropdown-menu');

    if (dropdownToggle && dropdownMenu) {
        // Function to hide the dropdown
        const hideDropdown = function() {
            dropdownMenu.classList.remove('show');
            dropdownToggle.setAttribute('aria-expanded', 'false');
        };

        // Function to show the dropdown
        const showDropdown = function() {
            dropdownMenu.classList.add('show');
            dropdownToggle.setAttribute('aria-expanded', 'true');
        };

        // Click/tap event for mobile
        dropdownToggle.addEventListener('click', function(event) {
            event.preventDefault(); // Stop the link from navigating
            if (dropdownMenu.classList.contains('show')) {
                hideDropdown();
            } else {
                // Hide all other dropdowns before showing this one
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                    menu.previousElementSibling.setAttribute('aria-expanded', 'false');
                });
                showDropdown();
            }
        });

        // Hover events for desktop
        dropdownItem.addEventListener('mouseenter', showDropdown);
        dropdownItem.addEventListener('mouseleave', hideDropdown);
        
        // This is a more reliable way to handle mouse leaving the parent element.
        // It prevents the menu from disappearing if the mouse briefly moves off the menu items.
    }
});