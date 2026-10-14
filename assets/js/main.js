/**
 * Main JavaScript for Anglo Urdu Girls' High School
 */

document.addEventListener('DOMContentLoaded', function () {
    // Mobile navigation menu toggle
    const navToggle = document.querySelector('.mobile-nav-toggle');
    const navMenu = document.querySelector('.nav-menu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function () {
            navMenu.classList.toggle('open');
            const icon = navToggle.querySelector('i');
            if (icon) {
                if (navMenu.classList.contains('open')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            }
        });
    }

    // Mobile submenu toggle on touch / small screens
    const dropdownItems = document.querySelectorAll('.nav-item-has-children');
    dropdownItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        if (link && window.innerWidth <= 768) {
            link.addEventListener('click', function (e) {
                // If it has children and clicked on mobile, toggle submenu
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    item.classList.toggle('dropdown-open');
                }
            });
        }
    });

    // Back to top button
    const backToTopBtn = document.querySelector('.back-to-top');
    if (backToTopBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });

        backToTopBtn.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Gallery Filters
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-card');

    if (filterBtns.length > 0 && galleryItems.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');
                galleryItems.forEach(item => {
                    const category = item.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

    // Lightbox modal for gallery & media photos
    const lightboxModal = document.getElementById('lightboxModal');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxCaption = document.getElementById('lightboxCaption');
    const lightboxClose = document.querySelector('.lightbox-close');

    if (lightboxModal && lightboxImg) {
        document.querySelectorAll('[data-lightbox]').forEach(el => {
            el.addEventListener('click', function (e) {
                e.preventDefault();
                const imgSrc = this.getAttribute('data-lightbox-src') || this.getAttribute('href') || this.querySelector('img')?.src;
                const caption = this.getAttribute('data-title') || this.querySelector('img')?.alt || '';
                
                if (imgSrc) {
                    lightboxImg.src = imgSrc;
                    if (lightboxCaption) {
                        lightboxCaption.textContent = caption;
                    }
                    lightboxModal.classList.add('active');
                }
            });
        });

        if (lightboxClose) {
            lightboxClose.addEventListener('click', function () {
                lightboxModal.classList.remove('active');
            });
        }

        lightboxModal.addEventListener('click', function (e) {
            if (e.target === lightboxModal) {
                lightboxModal.classList.remove('active');
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && lightboxModal.classList.contains('active')) {
                lightboxModal.classList.remove('active');
            }
        });
    }
});
