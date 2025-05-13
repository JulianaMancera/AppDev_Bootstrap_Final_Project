<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Portfolio</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            scroll-behavior: smooth;
        }
        
        .hero-section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('pic/sunset.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }
        
        section {
            padding: 80px 0;
        }
        
        .portfolio-item {
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .portfolio-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .portfolio-item:hover img {
            transform: scale(1.05);
        }
        
        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 123, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        
        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
        
        .skill-progress {
            height: 10px;
            margin-bottom: 20px;
        }
        
        .navbar {
            transition: background-color 0.3s ease;
        }
        
        .navbar.scrolled {
            background-color: #212529 !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .contact-form .form-control {
            border-radius: 0;
            border: none;
            border-bottom: 2px solid #ced4da;
            padding: 15px 0;
            background: transparent;
        }
        
        .contact-form .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f8f9fa;
            text-align: center;
            line-height: 40px;
            margin: 0 8px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background: #007bff;
            color: white;
        }
        
        footer {
            background: #212529;
            color: white;
            padding: 30px 0;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#home">DevPortfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Welcome to My Portfolio</h1>
            <p class="lead mb-5">Full-Stack Developer & UI/UX Designer</p>
            <a href="#contact" class="btn btn-primary btn-lg px-5 py-3 rounded-pill">Get In Touch</a>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="work" class="bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-3">My Portfolio</h2>
                    <p class="lead text-muted">Check out some of my recent projects and work</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="pic/profile.jpg" alt="Project 1" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h5>E-Commerce Website</h5>
                                <p>Web Development</p>
                                <a href="#" class="btn btn-light btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="pic/profile2.jpg" alt="Project 2" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h5>Mobile App UI</h5>
                                <p>UI/UX Design</p>
                                <a href="#" class="btn btn-light btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="pic/profile3.jpg" alt="Project 3" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h5>Company Branding</h5>
                                <p>Brand Design</p>
                                <a href="#" class="btn btn-light btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="pic/profile4.jpg" alt="Project 4" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h5>Portfolio Website</h5>
                                <p>Front-end Development</p>
                                <a href="#" class="btn btn-light btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="pic/profile.jpg" alt="Project 5" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h5>Online Learning Platform</h5>
                                <p>Full-Stack Development</p>
                                <a href="#" class="btn btn-light btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="pic/profile2.jpg" alt="Project 6" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h5>Restaurant Booking App</h5>
                                <p>Mobile Development</p>
                                <a href="#" class="btn btn-light btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-3">My Skills</h2>
                    <p class="lead text-muted">Specialized in multiple technical areas and growing every day</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5>HTML/CSS <span class="float-end">90%</span></h5>
                    <div class="progress skill-progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                    <h5>JavaScript <span class="float-end">85%</span></h5>
                    <div class="progress skill-progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                    <h5>PHP <span class="float-end">80%</span></h5>
                    <div class="progress skill-progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <h5>UI/UX Design <span class="float-end">75%</span></h5>
                    <div class="progress skill-progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                    <h5>Bootstrap <span class="float-end">95%</span></h5>
                    <div class="progress skill-progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                    <h5>MySQL <span class="float-end">70%</span></h5>
                    <div class="progress skill-progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-3">My Services</h2>
                    <p class="lead text-muted">What I can do for you</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card service-card h-100 border-0 shadow-sm">
                        <div class="card-body p-5 text-center">
                            <div class="mb-4">
                                <i class="fas fa-code fa-3x text-primary"></i>
                            </div>
                            <h4 class="card-title mb-3">Web Development</h4>
                            <p class="card-text text-muted">I build responsive websites and web applications using modern technologies like PHP, JavaScript, and Bootstrap.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card service-card h-100 border-0 shadow-sm">
                        <div class="card-body p-5 text-center">
                            <div class="mb-4">
                                <i class="fas fa-paint-brush fa-3x text-primary"></i>
                            </div>
                            <h4 class="card-title mb-3">UI/UX Design</h4>
                            <p class="card-text text-muted">I create intuitive and visually appealing user interfaces and experiences for web and mobile applications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-dark text-white">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-3">Get In Touch</h2>
                    <p class="lead">Have a project in mind? Let's work together!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="bg-light p-5 rounded-3 text-dark h-100">
                        <h4 class="mb-4">Contact Information</h4>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0">123 Developer Street, Coding City</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0">developer@example.com</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-phone text-primary"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0">+1 (123) 456-7890</p>
                            </div>
                        </div>
                        <div class="social-icons mt-5">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-form bg-light p-5 rounded-3 text-dark">
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2025 My Portfolio. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Change navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Initialize Bootstrap scrollspy
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#navbar'
        });
        
        // Handle navbar collapse on mobile
        const navLinks = document.querySelectorAll('.nav-link');
        const menuToggle = document.getElementById('navbarNav');
        const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle: false});
        
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                if (menuToggle.classList.contains('show')) {
                    bsCollapse.toggle();
                }
            });
        });
    </script>
</body>
</html>