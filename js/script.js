document.addEventListener('DOMContentLoaded', function() {
    const languageSwitcherButtons = document.querySelectorAll('.language-switcher button');
    let currentLanguage = localStorage.getItem('language') || 'en'; // Default to English

    function applyTranslations(language) {
        // Update body class for language-specific styling (e.g., fonts)
        document.body.classList.remove('lang-en', 'lang-hi');
        document.body.classList.add(`lang-${language}`);

        document.querySelectorAll('[data-translate]').forEach(element => {
            const key = element.getAttribute('data-translate');
            if (translations[language] && translations[language][key]) {
                // For elements that might contain HTML (like strong tags in "whyChoose" items)
                if (key.startsWith('whyChoose')) {
                     element.innerHTML = translations[language][key];
                } else {
                    element.innerText = translations[language][key];
                }
            } else if (translations['en'][key]) { // Fallback to English if translation missing
                if (key.startsWith('whyChoose')) {
                     element.innerHTML = translations['en'][key];
                } else {
                    element.innerText = translations['en'][key];
                }
            }
        });

        // Update active language button
        languageSwitcherButtons.forEach(btn => {
            btn.classList.remove('active-lang');
            if (btn.getAttribute('data-lang') === language) {
                btn.classList.add('active-lang');
            }
        });

        // Update navigation links (already done by data-translate but good for reinforcement or if nav items are complex)
        const navLinks = document.querySelectorAll('header nav ul li a');
        const navKeys = ['navHome', 'navDestinations', 'navPackages', 'navAbout', 'navContact'];
        navLinks.forEach((link, index) => {
            if (translations[language] && translations[language][navKeys[index]]) {
                link.innerText = translations[language][navKeys[index]];
            } else if (translations['en'][navKeys[index]]) { // Fallback
                 link.innerText = translations['en'][navKeys[index]];
            }
        });

        // Update footer text
        const footerElement = document.querySelector('footer p');
        if (footerElement) {
            if (translations[language] && translations[language].footerText) {
                footerElement.innerHTML = translations[language].footerText;
            } else if (translations['en'].footerText) { // Fallback
                footerElement.innerHTML = translations['en'].footerText;
            }
        }
    }

    languageSwitcherButtons.forEach(button => {
        button.addEventListener('click', function() {
            const selectedLang = this.getAttribute('data-lang');
            if (selectedLang !== currentLanguage) {
                currentLanguage = selectedLang;
                localStorage.setItem('language', currentLanguage);
                applyTranslations(currentLanguage);
            }
        });
    });

    // Apply initial translation on page load
    applyTranslations(currentLanguage);

    // Smooth scroll for on-page navigation links (if any)
    // This part might be less relevant now if all nav links go to different pages.
    // Kept for potential future use with on-page section links.
    document.querySelectorAll('header nav ul li a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const hrefAttribute = this.getAttribute('href');
            // Ensure it's a valid selector and not just "#"
            if (hrefAttribute.length > 1 && document.querySelector(hrefAttribute)) {
                e.preventDefault();
                document.querySelector(hrefAttribute).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start' // Adjust if you have a sticky header
                });
            }
        });
    });

    // Example interactions (can be kept or removed based on need)
    // const offers = document.querySelectorAll('.offer');
    // offers.forEach(offer => {
    //     offer.addEventListener('click', function() {
    //         const offerTitle = this.querySelector('h3').innerText;
    //         alert(`You clicked on the offer: "${offerTitle}". Contact us for more details!`);
    //     });
    // });

    // const destinations = document.querySelectorAll('.destination, .destination-item');
    // destinations.forEach(destination => {
    //     destination.addEventListener('click', function(event) {
    //         // Prevent alert if the click is on the "View Details" button itself
    //         if (event.target.classList.contains('btn-details')) {
    //             return;
    //         }
    //         const destinationName = this.querySelector('h3').innerText;
    //         console.log(`User is interested in: ${destinationName}`);
    //         // Potentially navigate or show more info here if not clicking button
    //     });
    // });

    // Slideshow Logic
    const slideshowContainer = document.querySelector('.slideshow-container');
    if (slideshowContainer) {
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.slideshow-container .slide');
        const dots = document.querySelectorAll('.dots-container .dot');
        const prevButton = document.querySelector('.slideshow-container .prev');
        const nextButton = document.querySelector('.slideshow-container .next');
        let slideInterval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active-slide');
                // Simple fade: For more complex like slide-in, would need more classes/logic
                // slide.style.opacity = '0';
                // if (i === index) {
                //     slide.style.opacity = '1';
                // }
            });
            dots.forEach(dot => dot.classList.remove('active'));

            if (slides[index]) {
                slides[index].classList.add('active-slide');
            }
            if (dots[index]) {
                dots[index].classList.add('active');
            }
            currentSlideIndex = index;
        }

        function nextSlide() {
            let newIndex = currentSlideIndex + 1;
            if (newIndex >= slides.length) {
                newIndex = 0; // Loop back to first
            }
            showSlide(newIndex);
        }

        function prevSlide() {
            let newIndex = currentSlideIndex - 1;
            if (newIndex < 0) {
                newIndex = slides.length - 1; // Loop back to last
            }
            showSlide(newIndex);
        }

        if (prevButton && nextButton) {
            prevButton.addEventListener('click', function() {
                prevSlide();
                resetSlideInterval();
            });
            nextButton.addEventListener('click', function() {
                nextSlide();
                resetSlideInterval();
            });
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                showSlide(index);
                resetSlideInterval();
            });
        });

        function startSlideInterval() {
            slideInterval = setInterval(nextSlide, 7000); // Change slide every 7 seconds
        }

        function resetSlideInterval() {
            clearInterval(slideInterval);
            startSlideInterval();
        }

        // Initial setup
        if (slides.length > 0) {
            showSlide(0); // Show the first slide initially
            startSlideInterval(); // Start autoplay

            slideshowContainer.addEventListener('mouseenter', () => clearInterval(slideInterval));
            slideshowContainer.addEventListener('mouseleave', startSlideInterval);
        }
    }

    console.log("Modernized JavaScript file loaded. Site is interactive with language support and slideshow.");
});
