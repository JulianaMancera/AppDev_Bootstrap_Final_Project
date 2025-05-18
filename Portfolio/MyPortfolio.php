<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Space+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <style>
        :root {
            --primary: #7c3aed;
            --secondary: #a78bfa;
            --dark: #1a1a1a;
            --accent: #ede9fe;
            --navbar-height: 70px; 
        }
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            margin: 0;
            padding: 0;
        }
        section {
            min-height: 100vh;
            padding: 5rem 2rem;
            position: relative;
            padding-top: calc(var(--navbar-height) + 2rem); /* Add navbar height plus some padding */
            margin-top: 0; /* Reset any existing margin */
        }
        .hero-section {
            background: url(pic/purplee.png) no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            margin-top: calc(-1 * var(--navbar-height)); 
            padding-top: calc(var(--navbar-height) + 5rem); 
            min-height: calc(100vh + var(--navbar-height));
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(124,58,237,0.3), rgba(167,139,250,0.3));
        }
        .hero-content {
            position: relative;
            z-index: 4;
        }
        .hero-section h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 4rem;
            margin-bottom: 1rem;
            text-shadow: 0 0 10px rgba(124, 58, 237, 0.8);
        }
        .typed-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            font-size: 1.5rem;
            color: var(--accent);
            text-shadow: 0 0 10px rgba(124, 58, 237, 0.8);
        }
        .navbar {
            background: linear-gradient(to right, var(--dark), rgba(0,0,0,0.7));
            transition: all 0.3s ease;
            height: var(--navbar-height); 
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar-nav .nav-link {
            color: white;
            font-weight: 500;
            position: relative;
        }
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background: var(--primary);
            transition: width 0.3s ease;
        }
        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }
        .portfolio-img {
            width: 100%;
            max-width: 300px;
            border-radius: 15px;
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }
        .portfolio-img:hover {
            transform: scale(1.1) rotate(2deg);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        .project-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .project-card img {
            width: 100%;
            max-height: 250px;
            object-fit: contain;
            border-radius: 15px 15px 0 0;
        }
        .work-section {
            background: url(pic/purplee.png) fixed center center;
            background-size: cover;
            position: relative;
        }
        .work-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.7);
        }
        .form-control {
            border: none;
            border-bottom: 2px solid var(--dark);
            border-radius: 0;
            background: transparent;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: var(--primary);
            background: rgba(255,255,255,0.1);
        }
        .form-label {
            color: var(--dark);
            transition: all 0.3s ease;
        }
        .form-control:focus + .form-label,
        .form-control:not(:placeholder-shown) + .form-label {
            transform: translateY(-1.5rem);
            font-size: 0.9rem;
            color: var(--primary);
        }
        .btn-primary {
            background: var(--primary);
            border: none;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: var(--secondary);
            transform: scale(1.1);
        }
        .btn-github {
            background: var(--dark);
            color: white;
            border-radius: 25px;
            padding: 0.5rem 1.5rem;
        }
        .btn-github:hover {
            background: var(--primary);
        }

        /* About Me Styles */
        .about-me-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            padding: 3rem;
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
            background: linear-gradient(white, white) padding-box, 
                        linear-gradient(45deg, var(--primary), var(--secondary)) border-box;
        }
        .about-me-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top left, rgba(124,58,237,0.1), transparent);
            z-index: 0;
        }
        .about-me-content {
            position: relative;
            z-index: 1;
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 0.8s ease forwards;
        }
        .profile-img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--primary);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .profile-img:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(124,58,237,0.5);
        }
        .social-icons a {
            color: var(--dark);
            font-size: 1.8rem;
            margin: 0 0.5rem;
            transition: transform 0.3s ease, color 0.3s ease;
        }
        .social-icons a:hover {
            color: var(--primary);
            transform: scale(1.2);
        }
        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Skills Styles */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .skill-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 1.5rem;
            text-align: center;
            border: 2px solid var(--primary);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
        }
        .skill-card:nth-child(1) { animation: fadeIn 0.5s ease forwards 0.1s; }
        .skill-card:nth-child(2) { animation: fadeIn 0.5s ease forwards 0.2s; }
        .skill-card:nth-child(3) { animation: fadeIn 0.5s ease forwards 0.3s; }
        .skill-card:nth-child(4) { animation: fadeIn 0.5s ease forwards 0.4s; }
        .skill-card:nth-child(5) { animation: fadeIn 0.5s ease forwards 0.5s; }
        .skill-card:nth-child(6) { animation: fadeIn 0.5s ease forwards 0.6s; }
        .skill-card:nth-child(7) { animation: fadeIn 0.5s ease forwards 0.7s; }
        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(124,58,237,0.3);
        }
        .skill-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        .skill-card h4 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        .skill-card p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1rem;
        }
        .progress {
            height: 10px;
            background: #e9ecef;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
            margin-bottom: 0.5rem;
        }
        .progress-bar {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            transition: width 2s ease-in-out;
            position: relative;
        }
        .progress-label {
            font-size: 0.8rem;
            color: var(--dark);
            text-align: right;
            margin-top: 0.2rem;
        }
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            .typed-text {
                font-size: 1.2rem;
            }
            .about-me-container {
                padding: 2rem;
            }
            .profile-img {
                width: 150px;
                height: 150px;
            }
            .social-icons a {
                font-size: 1.5rem;
            }
            .skills-grid {
                grid-template-columns: 1fr;
            }
            .skill-card {
                padding: 1rem;
            }
        }
        #works, #projects, #skills, #about, #contact {
            scroll-margin-top: var(--navbar-height);
        }

    </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">Juliana Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-section">
        <div class="hero-content">
            <h1>Welcome to My World</h1>
            <p class="lead"><span class="typed-text"></span></p>
            <a href="#contact" class="btn btn-primary mt-3">Let's Connect</a>
        </div>
    </section>

    <section id="gallery" class="work-section">
        <div class="container position-relative">
            <h2 class="text-center mb-5 text-white">Gallery</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
                <div class="col">
                    <img src="pic/profile.jpg" class="portfolio-img img-thumbnail" alt="PHP Activity 1">
                </div>
                <div class="col">
                    <img src="pic/blue2.jpg" class="portfolio-img img-thumbnail" alt="PHP Activity 2">
                </div>
                <div class="col">
                    <img src="pic/profile3.jpg" class="portfolio-img img-thumbnail" alt="Bootstrap Activity 1">
                </div>
                <div class="col">
                    <img src="pic/blue3.jpg" class="portfolio-img img-thumbnail" alt="Bootstrap Activity 2">
                </div>
                <div class="col">
                    <img src="pic/profile4.jpg" class="portfolio-img img-thumbnail" alt="PHP Activity 3">
                </div>
                <div class="col">
                    <img src="pic/blue4.jpg" class="portfolio-img img-thumbnail" alt="Bootstrap Activity 3">
                </div>
                 <div class="col">
                    <img src="pic/proofile.jpg" class="portfolio-img img-thumbnail" alt="Bootstrap Activity 3">
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-5">
        <div class="container position-relative">
            <h2 class="text-center mb-5">My Projects</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="project-card">
                        <img src="pic/neu-ojt-link.png" alt="Project 1">
                        <div class="card-body p-4">
                            <h5 class="card-title">NEU OJT-Link</h5>
                            <p class="card-text">NEU-OJT-Link is a digital platform designed for students undergoing On-the-Job Training (OJT) at New Era University.</p>
                            <a href="https://github.com/JulianaMancera/NEU-OJT-Link" class="btn btn-github btn-sm">View on GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-card">
                        <img src="pic/pacman.png" alt="Project 2">
                        <div class="card-body p-4">
                            <h5 class="card-title">Pac-Man</h5>
                            <p class="card-text">This is a simple Pac-Man game built using Java and the Swing framework.</p>
                            <a href="https://github.com/JulianaMancera/PacMan" class="btn btn-github btn-sm">View on GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-card">
                        <img src="pic/bootstrap.png" alt="Project 3">
                        <div class="card-body p-4">
                            <h5 class="card-title">AppDev Bootstrap Compilation</h5>
                            <p class="card-text">Showcases responsive activitites with Bootstrap</p>
                            <a href="https://github.com/JulianaMancera/AppDev_Bootstrap_Activities" class="btn btn-github btn-sm">View on GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-card">
                        <img src="pic/php.png" alt="Project 4">
                        <div class="card-body p-4">
                            <h5 class="card-title">AppDev PHP Compilation</h5>
                            <p class="card-text">PHP Laboratory Activities in one page</p>
                            <a href="https://github.com/JulianaMancera/AppDev_Lab_Activities" class="btn btn-github btn-sm">View on GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-card">
                        <img src="pic/hotel.png" alt="Project 5">
                        <div class="card-body p-4">
                            <h5 class="card-title">Hotel Booking System</h5>
                            <p class="card-text">A GUI-based hotel management system built with Python (Tkinter). This system allows users to book rooms, manage reservations, and includes VIP rooms with exclusive perks.</p>
                            <a href="https://github.com/JulianaMancera/Hotel_Booking_System" class="btn btn-github btn-sm">View on GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-card">
                        <img src="pic/battle.png" alt="Project 6">
                        <div class="card-body p-4">
                            <h5 class="card-title">Adventure Game</h5>
                            <p class="card-text">Mini battle game.</p>
                            <a href="https://github.com/JulianaMancera/adventure_game" class="btn btn-github btn-sm">View on GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section id="skills" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Programming Languages</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <i class="fab fa-php skill-icon"></i>
                <h4>PHP</h4>
            </div>
            <div class="skill-card">
                <i class="fab fa-bootstrap skill-icon"></i>
                <h4>Bootstrap</h4>
            </div>
            <div class="skill-card">
                <i class="fab fa-java skill-icon"></i>
                <h4>Java</h4>
            </div>
            <div class="skill-card">
                <i class="fab fa-python skill-icon"></i>
                <h4>Python</h4>
            </div>
            <div class="skill-card">
                <i class="fas fa-code skill-icon"></i>
                <h4>C++</h4>
            </div>
            <div class="skill-card">
                <i class="fab fa-js skill-icon"></i>
                <h4>TypeScript</h4>
            </div>
            <div class="skill-card">
                <i class="fab fa-js-square skill-icon"></i>
                <h4>JavaScript</h4>
            </div>
        </div>
    </div>
</section>

  <section id="about" class="py-5">
    <div class="container-fluid">
        <div class="about-me-container">
            <div class="about-me-content">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center">
                        <img src="https://github.com/JulianaMancera.png" alt="Profile Picture" class="profile-img mb-3">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-4">About Me</h2>
                        <p class="lead">
                            I am a dedicated Computer Science student with a strong passion for software development, database management, and designing innovative solutions to complex challenges. My expertise lies in writing efficient code, optimizing data systems, and tackling intricate problems with creativity and precision. 
                            I am committed to continuous learning and leveraging technology to drive impactful outcomes.
                        </p>
                        <p>
                            When I’m not coding, you’ll find me exploring new tech trends, contributing to open-source projects, or sipping coffee while brainstorming my next big idea. Let’s connect and build something amazing together!
                        </p>
                        <div class="social-icons mt-4">
                            <a href="https://github.com/JulianaMancera" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/juliana-mancera-84947b309/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-4" style="background: linear-gradient(to bottom, #ffffff, #f1f1f1);">
        <div class="container">
             <h2 class="text-center mb-5">Get in Touch</h2>
            <form class="col-md-6 mx-auto contact-form">
                <div class="mb-4 position-relative">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-4 position-relative">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-4 position-relative">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" required>
                </div>
                <div class="mb-4 position-relative">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-4">Send Message</button>
            </form>
        </div>
    </section>

    <script>
        // Typed.js for hero section (just extra design)
        var typed = new Typed('.typed-text', {
            strings: [
                "A Programmer's Odyssey",
                "Innovating Through Code",
                "Building Digital Worlds"
            ],
            typeSpeed: 50,
            backSpeed: 30,
            backDelay: 2000,
            loop: true
        });

    </script>

      <footer class="bg-dark text-white text-center">
        <div class="container py-4">
            <p class="mb-0">© 2025 Juliana Mancera.</p>
            <div class="mt-2">
                <a href="#home" class="text-white text-decoration-none mx-2">Home</a>
                <a href="#contact" class="text-white text-decoration-none mx-2">Contact</a>
            </div>
        </div>
    </footer>

</body>
</html>
