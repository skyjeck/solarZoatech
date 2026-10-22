<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoatech | Solar Energy & Electrical Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <header>
        <div class="navbar">
            <div class="logo">Zoa<span>Tech</span></div>
            <nav>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Our Work</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact" class="btn-nav">Contact us</a></li>
                </ul>
            </nav>
            <div class="menu-toggle" id="mobileMenu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Illuminating Your Future With Clean Energy</h1>
            <p>Top-tier solar installations, expert electrical wiring, and reliable maintenance services for residential and commercial properties.</p>
            <a href="#services" class="btn-primary">Explore Our Services</a>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-solar-panel"></i>
                    <h3>Solar Installation</h3>
                    <p>Professional setup of high-efficiency solar panels tailored to meet your specific power needs.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-shopping-cart"></i>
                    <h3>Solar Sales</h3>
                    <p>We supply premium grade solar panels, inverters, deep-cycle batteries, and accessories.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Electrical Wiring</h3>
                    <p>Safe, standard-compliant residential and industrial electrical installations and wiring.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-comments"></i>
                    <h3>Consultancy</h3>
                    <p>Energy audits and expert advice to help you transition smoothly and cost-effectively to solar power.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-tools"></i>
                    <h3>Maintenance</h3>
                    <p>Routine checks, cleaning, repairs, and system optimization to ensure maximum power output.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="section-title">Our Previous Works</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=600&q=80" alt="Residential Solar Installation">
                    <div class="portfolio-overlay">
                        <h3>5KW Residential System</h3>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1620024920541-2d7934ed30f9?auto=format&fit=crop&w=600&q=80" alt="Commercial Solar Installation">
                    <div class="portfolio-overlay">
                        <h3>Commercial Solar Array</h3>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=600&q=80" alt="Industrial Electrical Wiring">
                    <div class="portfolio-overlay">
                        <h3>Industrial Control Panel Wiring</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            <div class="testimonial-container">
                <div class="testimonial-slide active">
                    <div style="color: var(--primary); font-size: 1.1rem; margin-bottom: 20px;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Zoatech completely transformed our home's energy setup. The installation was seamless, and our electricity bills have dropped by 80%. Highly recommended!"</p>
                    <div class="client-info">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client David K.">
                        <h4>David K.</h4>
                        <span>Homeowner</span>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <div style="color: var(--primary); font-size: 1.1rem; margin-bottom: 20px;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Their electrical wiring and solar consultancy saved our factory thousands in unnecessary repairs. Extremely professional team!"</p>
                    <div class="client-info">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client Sarah M.">
                        <h4>Sarah M.</h4>
                        <span>Operations Manager</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-dots">
                <span class="dot active" onclick="currentSlide(0)"></span>
                <span class="dot" onclick="currentSlide(1)"></span>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>

            <div class="contact-wrapper">
                <div class="contact-info">
                    <h3>Get In Touch</h3>
                    <p>
                        Looking for reliable solar installation, electrical wiring,
                        maintenance, or consultation services? Send us a message and
                        we'll get back to you as soon as possible.
                    </p>

                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <span>+2347018899901, +2348108711285</span>
                    </div>

                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <span>ZoatechGR4solar@gmail.com</span>
                    </div>

                    <div class="info-item">
                        <i class="fas fa-location-dot"></i>
                        <span>Lagos, Nigeria</span>
                    </div>
                </div>

                <form class="contact-form">
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
                </form>
            </div>
        </div>
    </section>

    <footer id="site-footer">
        <div class="container footer-content">
            <div class="footer-about">
                <h3>Zoa<span>tech</span></h3>
                <p>Your trusted partner in renewable energy and engineering solutions.</p>
            </div>
            <div class="footer-contact">
                <h4>Contact Us</h4>
                <p><i class="fas fa-envelope"></i> info@zoatech.com</p>
                <p><i class="fas fa-phone"></i> +2347018899901, +2348108711285</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Zoatech. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>