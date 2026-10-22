// --- Mobile Menu Toggle ---
const mobileMenu = document.getElementById('mobileMenu');
const navLinks = document.getElementById('navLinks');

if (mobileMenu && navLinks) {
    mobileMenu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        // Toggle menu icon between bars and X
        const icon = mobileMenu.querySelector('i');
        if (icon) {
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        }
    });

    // Close menu when a link is clicked (Mobile optimization)
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            const icon = mobileMenu.querySelector('i');
            if (icon) {
                icon.classList.add('fa-bars');
                icon.classList.remove('fa-times');
            }
        });
    });
}


// --- Testimonial Carousel ---
let slideIndex = 0;
const slides = document.querySelectorAll('.testimonial-slide');
const dots = document.querySelectorAll('.dot');

function showSlides(index) {
    if (slides.length === 0) return;
    
    if (index >= slides.length) slideIndex = 0;
    if (index < 0) slideIndex = slides.length - 1;
    
    slides.forEach(slide => {
        slide.style.opacity = 0;
        slide.classList.remove('active');
    });
    dots.forEach(dot => dot.classList.remove('active'));
    
    slides[slideIndex].classList.add('active');
    // Force reflow for CSS transitions/animations to kick in smoothly
    void slides[slideIndex].offsetWidth;
    slides[slideIndex].style.opacity = 1;
    
    if (dots[slideIndex]) {
        dots[slideIndex].classList.add('active');
    }
}

function currentSlide(index) {
    slideIndex = index;
    showSlides(slideIndex);
}

// Initialize testimonials slide
if (slides.length > 0) {
    showSlides(slideIndex);
    // Auto advancement for testimonials every 6 seconds
    setInterval(() => {
        slideIndex++;
        showSlides(slideIndex);
    }, 6000);
}


// --- Interactive Contact Form Handling ---
const contactForm = document.querySelector('.contact-form');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        // Disable inputs and button while submitting
        const formInputs = contactForm.querySelectorAll('input, textarea');
        formInputs.forEach(input => input.disabled = true);
        
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending message...';
        submitBtn.style.opacity = 0.8;
        
        // Simulate AJAX request
        setTimeout(() => {
            // Replace form content with a beautiful success message card
            contactForm.innerHTML = `
                <div style="text-align: center; padding: 40px 20px; animation: fadeIn 0.6s ease;">
                    <div style="font-size: 4rem; color: var(--primary); margin-bottom: 20px;">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 style="font-size: 1.8rem; color: var(--secondary); margin-bottom: 12px; font-family: 'Outfit', sans-serif;">Thank You!</h3>
                    <p style="color: var(--text-muted); font-size: 1rem; margin-bottom: 25px; line-height: 1.6;">
                        Your message has been sent successfully. We will get back to you within 24 hours.
                    </p>
                    <button type="button" class="btn-primary" onclick="resetContactForm()" style="width: auto; padding: 12px 30px; cursor: pointer;">
                        Send Another Message
                    </button>
                </div>
            `;
        }, 1500);
    });
}

// Reset form to original state
function resetContactForm() {
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.innerHTML = `
            <div class="form-group">
                <input type="text" placeholder="Full Name" required>
            </div>

            <div class="form-group">
                <input type="email" placeholder="Email Address" required>
            </div>

            <div class="form-group">
                <input type="tel" placeholder="Phone Number">
            </div>

            <div class="form-group">
                <input type="text" placeholder="Subject">
            </div>

            <div class="form-group">
                <textarea rows="6" placeholder="Your Message" required></textarea>
            </div>

            <button type="submit" class="btn-primary">
                Send Message
            </button>
        `;
        // Re-attach submit event listener to the reset form elements
        // This is done by triggering a page reload or dynamically attaching the event inside the listener
        window.location.reload();
    }
}