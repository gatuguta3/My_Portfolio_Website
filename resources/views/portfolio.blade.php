<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Portfolio - Software Engineer">
    
    <title>Joseph Gatuguta </title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    
    <style>

        
                    :root {
                        --primary-color: #6366f1;
                        --primary-dark: #4f46e5;
                        --secondary-color: #10b981;
                        --dark-bg: #0a0a0a;
                        --light-bg: #f9fafb;
                        --text-dark: #111827;
                        --text-light: #f3f4f6;
                        --text-gray: #6b7280;
                        --card-bg: #ffffff;
                        --card-bg-dark: #1f2937;
                        --shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
                        --shadow-dark: 0 10px 30px -10px rgba(0, 0, 0, 0.3);
                        --transition: all 0.3s ease;
                    }

                    /* ===== RESET & BASE ===== */
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                    }

                    html {
                        scroll-behavior: smooth;
                    }

                    body {
                        font-family: 'Instrument Sans', sans-serif;
                        line-height: 1.6;
                        overflow-x: hidden;
                    }

                    /* ===== TYPOGRAPHY ===== */
                    h1, h2, h3, h4, h6 {
                        font-weight: 600;
                        line-height: 1.3;
                    }

                    h5{
                        font-size: 1rem;
                        color: var(--secondary-color);
                        margin-bottom: 0.5rem;
                    }

                    .section-title {
                        font-size: 2.5rem;
                        margin-bottom: 1rem;
                        position: relative;
                        display: inline-block;
                    }

                    .section-title::after {
                        content: '';
                        position: absolute;
                        bottom: -10px;
                        left: 0;
                        width: 60px;
                        height: 4px;
                        background: var(--primary-color);
                        border-radius: 2px;
                    }

                    .sub_section-title {
                        font-size: 1.5rem;
                        margin-bottom: 1rem;
                        margin-top: 2rem;
                        position: relative;
                        display: inline-block;
                    }

                    .sub_section-title::after {
                        content: '';
                        position: absolute;
                        bottom: -10px;
                        left: 0;
                        width: 60px;
                        height: 4px;
                        background: var(--primary-color);
                        border-radius: 2px;
                    }

                    .section-subtitle {
                        font-size: 1.1rem;
                        color: var(--text-gray);
                        margin-bottom: 3rem;
                    }

                    .sub_section-subtitle {
                        font-size: 1.1rem;
                        color: var(--text-gray);
                        margin-bottom: 1rem;
                    }

                    /* ===== NAVIGATION ===== */
                    .navbar {
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        background: rgba(255, 255, 255, 0.95);
                        backdrop-filter: blur(10px);
                        z-index: 1000;
                        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                        transition: var(--transition);
                    }

                    .dark .navbar {
                        background: rgba(10, 10, 10, 0.95);
                        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
                    }

                    .nav-container {
                        max-width: 1200px;
                        margin: 0 auto;
                        padding: 1rem 2rem;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                    }

                    .logo {
                        font-size: 1.5rem;
                        font-weight: 700;
                        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        text-decoration: none;
                    }

                    .nav-menu {
                        display: flex;
                        list-style: none;
                        gap: 2rem;
                    }

                    .nav-link {
                        text-decoration: none;
                        color: var(--text-dark);
                        font-weight: 500;
                        transition: var(--transition);
                        position: relative;
                    }

                    .dark .nav-link {
                        color: var(--text-light);
                    }

                    .nav-link::after {
                        content: '';
                        position: absolute;
                        bottom: -5px;
                        left: 0;
                        width: 0;
                        height: 2px;
                        background: var(--primary-color);
                        transition: var(--transition);
                    }

                    .nav-link:hover::after,
                    .nav-link.active::after {
                        width: 100%;
                    }

                    .nav-toggle {
                        display: none;
                        flex-direction: column;
                        cursor: pointer;
                    }

                    .nav-toggle span {
                        width: 25px;
                        height: 3px;
                        background: var(--text-dark);
                        margin: 2px 0;
                        transition: var(--transition);
                        border-radius: 3px;
                    }

                    .dark .nav-toggle span {
                        background: var(--text-light);
                    }

                    /* ===== HERO SECTION ===== */
                    .hero {
                        min-height: 100vh;
                        display: flex;
                        align-items: center;
                        padding: 6rem 2rem 4rem;
                        position: relative;
                        overflow: hidden;
                    }

                    .hero-container {
                        max-width: 1200px;
                        margin: 0 auto;
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        gap: 4rem;
                        align-items: center;
                    }

                    .hero-content {
                        animation: fadeInUp 1s ease;
                    }

                    .hero-greeting {
                        font-size: 1.2rem;
                        color: var(--primary-color);
                        margin-bottom: 1rem;
                        display: block;
                    }

                    .hero-title {
                        font-size: 3.5rem;
                        margin-bottom: 1rem;
                        line-height: 1.2;
                    }

                    .hero-title span {
                        color: var(--primary-color);
                        position: relative;
                        display: inline-block;
                    }

                    .hero-title span::after {
                        content: '';
                        position: absolute;
                        bottom: 5px;
                        left: 0;
                        width: 100%;
                        height: 8px;
                        background: rgba(99, 102, 241, 0.2);
                        z-index: -1;
                    }

                    .hero-description {
                        font-size: 1.2rem;
                        color: var(--text-gray);
                        margin-bottom: 2rem;
                        max-width: 500px;
                    }

                    .hero-buttons {
                        display: flex;
                        gap: 1rem;
                        margin-bottom: 2rem;
                    }

                    .btn {
                        padding: 0.8rem 2rem;
                        border-radius: 50px;
                        text-decoration: none;
                        font-weight: 500;
                        transition: var(--transition);
                        display: inline-block;
                        border: none;
                        cursor: pointer;
                    }

                    .btn-primary {
                        background: var(--primary-color);
                        color: white;
                        box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
                    }

                    .btn-primary:hover {
                        background: var(--primary-dark);
                        transform: translateY(-2px);
                        box-shadow: 0 8px 20px rgba(99, 102, 241, 0.4);
                    }

                    .btn-secondary {
                        background: transparent;
                        color: var(--text-dark);
                        border: 2px solid var(--primary-color);
                    }

                    .dark .btn-secondary {
                        color: var(--text-light);
                    }

                    .btn-secondary:hover {
                        background: var(--primary-color);
                        color: white;
                        transform: translateY(-2px);
                    }

                    .social-links {
                        display: flex;
                        gap: 1rem;
                    }

                    .social-link {
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background: rgba(99, 102, 241, 0.1);
                        color: var(--primary-color);
                        text-decoration: none;
                        transition: var(--transition);
                    }

                    .social-link:hover {
                        background: var(--primary-color);
                        color: white;
                        transform: translateY(-3px);
                    }

                    .hero-image {
                        position: relative;
                        animation: float 3s ease-in-out infinite;
                    }

                    .hero-image img {
                        width: 100%;
                        max-width: 400px;
                        border-radius: 30px;
                        box-shadow: var(--shadow);
                    }

                    .dark .hero-image img {
                        box-shadow: var(--shadow-dark);
                    }

                    .hero-shape {
                        position: absolute;
                        top: -20px;
                        right: -20px;
                        width: 200px;
                        height: 200px;
                        background-image: url('{{ asset("media/images/profile_images/profile_image_3.jpeg")}}'); /* Replace with your image path */
                        background-size: cover;
                        background-position: center;
                        border-radius: 50%;
                        z-index: -1;
                        
                        animation: pulse 3s ease-in-out infinite;
                        border: 2px solid var(--primary-color); /* Optional: adds a border */
                    }

                    /* ===== ABOUT SECTION ===== */
                    .about {
                        padding: 6rem 2rem;
                        background: var(--light-bg);
                        margin-bottom: 100px;
                    }

                    .dark .about {
                        background: var(--dark-bg);
                    }

                    .about-container {
                        max-width: 1200px;
                        margin: 0 auto;
                    }

                    .about-content {
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        gap: 4rem;
                        align-items: center;
                    }

                    .about-text p {
                        margin-bottom: 1rem;
                        color: var(--text-gray);
                        font-size: 1.1rem;
                    }

                    .about-stats {
                        display: grid;
                        grid-template-columns: repeat(3, 1fr);
                        gap: 2rem;
                        margin-top: 2rem;
                    }

                    .stat-item {
                        text-align: center;
                    }

                    .stat-number {
                        font-size: 2.5rem;
                        font-weight: 700;
                        color: var(--primary-color);
                        display: block;
                    }

                    .stat-label {
                        font-size: 0.9rem;
                        color: var(--text-gray);
                        text-transform: uppercase;
                        letter-spacing: 1px;
                    }

                    .about-image {
                        position: relative;
                    }

                    .about-image img {
                        width: 100%;
                        height: 80%;
                        border-radius: 20px;
                        box-shadow: var(--shadow);
                    }

                    .experience-badge {
                        position: absolute;
                        bottom: -20px;
                        right: -20px;
                        background: var(--primary-color);
                        color: white;
                        padding: 1.5rem;
                        border-radius: 50%;
                        width: 120px;
                        height: 120px;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        text-align: center;
                        animation: pulse 2s ease-in-out infinite;
                    }

                    .experience-badge .years {
                        font-size: 2rem;
                        font-weight: 700;
                        line-height: 1;
                    }

                    .experience-badge .text {
                        font-size: 0.8rem;
                        opacity: 0.9;
                    }

                    /* ===== SKILLS SECTION ===== */
                    .skills {
                        padding: 6rem 2rem;
                    }

                    .skills-container {
                        max-width: 1200px;
                        margin: 0 auto;
                    }

                    .skills-grid {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                        gap: 2rem;
                        margin-top: 3rem;
                    }

                    .skill-category {
                        background: var(--card-bg);
                        padding: 2rem;
                        border-radius: 20px;
                        box-shadow: var(--shadow);
                        transition: var(--transition);
                    }

                    .dark .skill-category {
                        background: var(--card-bg-dark);
                        box-shadow: var(--shadow-dark);
                    }

                    .skill-category:hover {
                        transform: translateY(-5px);
                    }

                    .skill-category h3 {
                        margin-bottom: 1.5rem;
                        color: var(--primary-color);
                        font-size: 1.3rem;
                    }

                    .skill-items {
                        display: flex;
                        flex-direction: column;
                        gap: 1.2rem;
                    }

                    .skill-item {
                        width: 100%;
                    }

                    .skill-info {
                        display: flex;
                        justify-content: space-between;
                        margin-bottom: 0.5rem;
                        color: var(--text-gray);
                        font-size: 0.9rem;
                    }

                    .skill-bar {
                        width: 100%;
                        height: 8px;
                        background: rgba(99, 102, 241, 0.1);
                        border-radius: 4px;
                        overflow: hidden;
                    }

                    .skill-progress {
                        height: 100%;
                        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
                        border-radius: 4px;
                        transition: width 1s ease;
                        width: 0;
                    }

                    /* ===== PROJECTS SECTION ===== */
                    .projects {
                        padding: 6rem 2rem;
                        background: var(--light-bg);
                        margin-bottom: 100px;
                    }

                    .dark .projects {
                        background: var(--dark-bg);
                    }

                    .projects-container {
                        max-width: 1200px;
                        margin: 0 auto;
                    }

                    .projects-grid {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                        gap: 2rem;
                        margin-top: 3rem;
                    }

                    .project-card {
                        background: var(--card-bg);
                        border-radius: 20px;
                        overflow: hidden;
                        box-shadow: var(--shadow);
                        transition: var(--transition);
                    }

                    .dark .project-card {
                        background: var(--card-bg-dark);
                        box-shadow: var(--shadow-dark);
                    }

                    .project-card:hover {
                        transform: translateY(-10px);
                    }

                    .project-image {
                        position: relative;
                        overflow: hidden;
                        aspect-ratio: 16/9;
                    }

                    .project-image img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: var(--transition);
                    }

                    .project-card:hover .project-image img {
                        transform: scale(1.1);
                    }

                    .project-overlay {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: rgba(99, 102, 241, 0.9);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 1rem;
                        opacity: 0;
                        transition: var(--transition);
                    }

                    .project-card:hover .project-overlay {
                        opacity: 1;
                    }

                    .project-link {
                        width: 50px;
                        height: 50px;
                        border-radius: 50%;
                        background: white;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        color: var(--primary-color);
                        text-decoration: none;
                        transform: translateY(20px);
                        transition: var(--transition);
                    }

                    .project-card:hover .project-link {
                        transform: translateY(0);
                    }

                    .project-link:hover {
                        background: var(--primary-color);
                        color: white;
                    }

                    .project-info {
                        padding: 1.5rem;
                    }

                    .project-title {
                        font-size: 1.3rem;
                        margin-bottom: 0.5rem;
                    }

                    .project-description {
                        color: var(--text-gray);
                        font-size: 0.95rem;
                        margin-bottom: 1rem;
                    }

                    .project-tags {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 0.5rem;
                    }

                    .project-tag {
                        padding: 0.3rem 0.8rem;
                        background: rgba(99, 102, 241, 0.1);
                        color: var(--primary-color);
                        border-radius: 50px;
                        font-size: 0.8rem;
                    }

                    /* ===== CONTACT SECTION ===== */
                    .contact {
                        padding: 6rem 2rem;
                    }

                    .contact-container {
                        max-width: 1200px;
                        margin: 0 auto;
                    }

                    .contact-content {
                        display: grid;
                        grid-template-columns: 1fr 2fr;
                        gap: 4rem;
                        margin-top: 3rem;
                    }

                    .contact-info {
                        background: var(--card-bg);
                        padding: 2rem;
                        border-radius: 20px;
                        box-shadow: var(--shadow);
                    }

                    .dark .contact-info {
                        background: var(--card-bg-dark);
                        box-shadow: var(--shadow-dark);
                    }

                    .contact-item {
                        display: flex;
                        align-items: center;
                        gap: 1rem;
                        margin-bottom: 1.5rem;
                    }

                    .contact-icon {
                        width: 50px;
                        height: 50px;
                        border-radius: 50%;
                        background: rgba(99, 102, 241, 0.1);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        color: var(--primary-color);
                    }

                    .contact-text h4 {
                        font-size: 1rem;
                        margin-bottom: 0.2rem;
                    }

                    .contact-text p {
                        color: var(--text-gray);
                        font-size: 0.9rem;
                    }

                    .contact-form {
                        background: var(--card-bg);
                        padding: 2rem;
                        border-radius: 20px;
                        box-shadow: var(--shadow);
                    }

                    .dark .contact-form {
                        background: var(--card-bg-dark);
                        box-shadow: var(--shadow-dark);
                    }

                    .form-group {
                        margin-bottom: 1.5rem;
                    }

                    .form-input,
                    .form-textarea {
                        width: 100%;
                        padding: 1rem;
                        border: 2px solid transparent;
                        border-radius: 10px;
                        background: rgba(99, 102, 241, 0.05);
                        transition: var(--transition);
                        font-family: inherit;
                    }

                    .dark .form-input,
                    .dark .form-textarea {
                        background: rgba(255, 255, 255, 0.05);
                        color: var(--text-light);
                    }

                    .form-input:focus,
                    .form-textarea:focus {
                        outline: none;
                        border-color: var(--primary-color);
                        background: transparent;
                    }

                    .form-textarea {
                        min-height: 150px;
                        resize: vertical;
                    }

                    .submit-btn {
                        width: 100%;
                        padding: 1rem;
                        border: none;
                        border-radius: 10px;
                        background: var(--primary-color);
                        color: white;
                        font-weight: 600;
                        cursor: pointer;
                        transition: var(--transition);
                    }

                    .submit-btn:hover {
                        background: var(--primary-dark);
                        transform: translateY(-2px);
                    }

                    /* ===== FOOTER ===== */
                    .footer {
                        background: var(--dark-bg);
                        color: var(--text-light);
                        padding: 3rem 2rem 1rem;
                    }

                    .dark .footer {
                        background: #000;
                    }

                    .footer-container {
                        max-width: 1200px;
                        margin: 0 auto;
                    }

                    .footer-content {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                        gap: 2rem;
                        margin-bottom: 2rem;
                    }

                    .footer-logo {
                        font-size: 1.5rem;
                        font-weight: 700;
                        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        margin-bottom: 1rem;
                        display: inline-block;
                    }

                    .footer-description {
                        color: #9ca3af;
                        margin-bottom: 1rem;
                    }

                    .footer-links h4 {
                        margin-bottom: 1rem;
                        color: white;
                    }

                    .footer-links ul {
                        list-style: none;
                    }

                    .footer-links li {
                        margin-bottom: 0.5rem;
                    }

                    .footer-links a {
                        color: #9ca3af;
                        text-decoration: none;
                        transition: var(--transition);
                    }

                    .footer-links a:hover {
                        color: var(--primary-color);
                        padding-left: 5px;
                    }

                    .footer-bottom {
                        text-align: center;
                        padding-top: 2rem;
                        border-top: 1px solid rgba(255, 255, 255, 0.1);
                        color: #9ca3af;
                        font-size: 0.9rem;
                    }

                    .section-separator {
                        border: 0;
                        border-top: 1px solid #ccc;
                        margin: 20px 0;
                    }
                    .small-separator {
                        border: 0;
                        border-top: 1px solid #ddd;
                        margin: 8px auto;
                        width: 40px;
                    }

                    /* ===== ANIMATIONS ===== */
                    @keyframes fadeInUp {
                        from {
                            opacity: 0;
                            transform: translateY(30px);
                        }
                        to {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }

                    @keyframes float {
                        0%, 100% {
                            transform: translateY(0);
                        }
                        50% {
                            transform: translateY(-20px);
                        }
                    }

                    @keyframes pulse {
                        0%, 100% {
                            transform: scale(1);
                        }
                        50% {
                            transform: scale(1.05);
                        }
                    }

                    /* ===== RESPONSIVE DESIGN ===== */
                    @media (max-width: 768px) {
                        .nav-menu {
                            position: fixed;
                            top: 70px;
                            left: -100%;
                            width: 100%;
                            height: calc(100vh - 70px);
                            background: var(--card-bg);
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                            transition: var(--transition);
                            z-index: 999;
                        }

                        .dark .nav-menu {
                            background: var(--card-bg-dark);
                        }

                        .nav-menu.active {
                            left: 0;
                        }

                        .nav-toggle {
                            display: flex;
                        }

                        .nav-toggle.active span:nth-child(1) {
                            transform: rotate(45deg) translate(5px, 5px);
                        }

                        .nav-toggle.active span:nth-child(2) {
                            opacity: 0;
                        }

                        .nav-toggle.active span:nth-child(3) {
                            transform: rotate(-45deg) translate(7px, -6px);
                        }

                        .hero-container,
                        .about-content,
                        .contact-content {
                            grid-template-columns: 1fr;
                            gap: 2rem;
                        }

                        .hero-title {
                            font-size: 2.5rem;
                        }

                        .hero {
                            text-align: center;
                        }

                        .hero-buttons {
                            justify-content: center;
                        }

                        .social-links {
                            justify-content: center;
                        }

                        .hero-image {
                            grid-row: 1;
                        }

                        .section-title {
                            font-size: 2rem;
                        }

                        .sub_section-title{
                            font-size: 3rem;
                        }

                        .projects-grid {
                            grid-template-columns: 1fr;
                        }

                        .experience-badge {
                            width: 100px;
                            height: 100px;
                            padding: 1rem;
                        }

                        .experience-badge .years {
                            font-size: 1.5rem;
                        }
                    }

                    @media (max-width: 480px) {
                        .hero-title {
                            font-size: 2rem;
                        }

                        .hero-buttons {
                            flex-direction: column;
                        }

                        .btn {
                            width: 100%;
                            text-align: center;
                        }

                        .about-stats {
                            grid-template-columns: 1fr;
                            gap: 1rem;
                        }

                        .contact-content {
                            gap: 2rem;
                        }
                    }

                    .more-content {
                        max-height: 0;
                        overflow: hidden;
                        transition: max-height 0.3s ease-out;
                        background-color: #f9f9f9;
                        border-radius: 8px;
                        margin-top: 10px;
                        width: 1000px;
                    }

                    .more-content.show {
                        max-height: 600px; /* Adjust based on content height */
                        width: 100%;
                        padding: 15px;
                        border: 1px solid #e0e0e0;
                    }

                    .more-content p {
                        margin: 8px 0;
                    }

                    .info-label {
                        font-weight: bold;
                        color: var(--primary-color, #3498db);
                    }

                    .view-more-btn {
                        background-color: var(--primary-color, #3498db);
                        color: white;
                        border: none;
                        padding: 8px 16px;
                        border-radius: 5px;
                        cursor: pointer;
                        font-size: 14px;
                        margin-top: 10px;
                        transition: background-color 0.3s;
                    }

                    .view-more-btn:hover {
                        background-color: var(--secondary-color, #2980b9);
                    }

                    .view-more-btn:focus {
                        outline: none;
                        box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.3);
                    }

                    /* ===== services section ===== */

                    .services {
                        padding: 6rem 2rem;                        
                        margin-bottom: 100px;
                    }

                    .services-info-lable {
                        font-style: italic;
                        color: var(--secondary-color, #2980b9);
                    }

                    .project-employer-description {
                        color: var(--text-gray);
                        font-size: 0.95rem;
                        margin-bottom: 1rem;
                    }

                    /* ===== WHY HIRE SECTION ===== */
                    .why-hire-me {
                        padding: 6rem 2rem;
                        background: var(--light-bg);
                        margin-bottom: 100px;
                    }

    </style>


    <script>
                    // ===== DOM Elements =====
            const navbar = document.querySelector('.navbar');
            const navToggle = document.querySelector('.nav-toggle');
            const navMenu = document.querySelector('.nav-menu');
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('section');
            const skillBars = document.querySelectorAll('.skill-progress');

            // ===== Navigation Toggle =====
            if (navToggle) {
                navToggle.addEventListener('click', () => {
                    navToggle.classList.toggle('active');
                    navMenu.classList.toggle('active');
                    document.body.classList.toggle('menu-open');
                });
            }

            // ===== Close mobile menu when clicking a link =====
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    navToggle.classList.remove('active');
                    navMenu.classList.remove('active');
                    document.body.classList.remove('menu-open');
                });
            });

            // ===== Navbar scroll effect =====
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.style.padding = '0.5rem 0';
                    navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
                } else {
                    navbar.style.padding = '1rem 0';
                    navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
                }
                
                // Update active nav link
                updateActiveNavLink();
                
                // Animate skill bars when in view
                animateSkillBars();
            });

            // ===== Update active navigation link =====
            function updateActiveNavLink() {
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (window.scrollY >= sectionTop - 200) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            }

            // ===== Animate skill bars when in view =====
            function animateSkillBars() {
                skillBars.forEach(bar => {
                    const barPosition = bar.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if (barPosition < screenPosition) {
                        const width = bar.getAttribute('data-width') || bar.style.width;
                        bar.style.width = width;
                    }
                });
            }

            // ===== Smooth scrolling for anchor links =====
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // ===== Dark/Light mode toggle =====
            const themeToggle = document.querySelector('.theme-toggle');
            if (themeToggle) {
                themeToggle.addEventListener('click', () => {
                    document.body.classList.toggle('dark');
                    // Save preference to localStorage
                    if (document.body.classList.contains('dark')) {
                        localStorage.setItem('theme', 'dark');
                    } else {
                        localStorage.setItem('theme', 'light');
                    }
                });
            }

            // ===== Check for saved theme preference =====
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.body.classList.add('dark');
            }

            // ===== Form submission handling =====
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    
                    const formData = new FormData(contactForm);
                    const submitBtn = contactForm.querySelector('.submit-btn');
                    const originalText = submitBtn.textContent;
                    
                    // Show loading state
                    submitBtn.textContent = 'Sending...';
                    submitBtn.disabled = true;
                    
                    try {
                        // Here you would typically send the form data to your backend
                        // For now, we'll simulate a successful submission
                        await new Promise(resolve => setTimeout(resolve, 2000));
                        
                        // Show success message
                        alert('Message sent successfully!');
                        contactForm.reset();
                    } catch (error) {
                        alert('An error occurred. Please try again.');
                    } finally {
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                    }
                });
            }

            // ===== Intersection Observer for fade-in animations =====
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.project-card, .skill-category, .about-content > *').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.6s ease';
                observer.observe(el);
            });

            // ===== Typing animation for hero section =====
            const heroTitle = document.querySelector('.hero-title span');
            if (heroTitle) {
                const words = ['Developer', 'Designer', 'Creator'];
                let wordIndex = 0;
                let charIndex = 0;
                let isDeleting = false;
                
                function typeEffect() {
                    const currentWord = words[wordIndex];
                    
                    if (isDeleting) {
                        heroTitle.textContent = currentWord.substring(0, charIndex - 1);
                        charIndex--;
                    } else {
                        heroTitle.textContent = currentWord.substring(0, charIndex + 1);
                        charIndex++;
                    }
                    
                    if (!isDeleting && charIndex === currentWord.length) {
                        isDeleting = true;
                        setTimeout(typeEffect, 2000);
                    } else if (isDeleting && charIndex === 0) {
                        isDeleting = false;
                        wordIndex = (wordIndex + 1) % words.length;
                        setTimeout(typeEffect, 500);
                    } else {
                        setTimeout(typeEffect, isDeleting ? 100 : 200);
                    }
                }
                
                typeEffect();
            }

            // ===== Counter animation for stats =====
            const statNumbers = document.querySelectorAll('.stat-number');
            let animated = false;

            function animateStats() {
                if (animated) return;
                
                statNumbers.forEach(stat => {
                    const target = parseInt(stat.textContent);
                    let current = 0;
                    const increment = target / 50;
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            stat.textContent = target + '+';
                            clearInterval(timer);
                        } else {
                            stat.textContent = Math.floor(current) + '+';
                        }
                    }, 30);
                });
                
                animated = true;
            }

            // Trigger stats animation when about section is in view
            const aboutSection = document.querySelector('.about');
            if (aboutSection) {
                const aboutObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateStats();
                        }
                    });
                }, { threshold: 0.5 });
                
                aboutObserver.observe(aboutSection);
            }

            // ===== Initialize skill bar widths =====
            skillBars.forEach(bar => {
                const width = bar.style.width;
                bar.setAttribute('data-width', width);
                bar.style.width = '0';
            });

            // ===== Trigger initial animations =====
            window.addEventListener('load', () => {
                animateSkillBars();
                updateActiveNavLink();
            });

            // ===== Parallax effect for hero section =====
            window.addEventListener('scroll', () => {
                const hero = document.querySelector('.hero');
                const heroImage = document.querySelector('.hero-image');
                const scrollPosition = window.scrollY;
                
                if (hero && heroImage) {
                    heroImage.style.transform = `translateY(${scrollPosition * 0.1}px)`;
                }
            });


            // ===== View more effect on the view more info section =====
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.view-more-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const targetId = this.dataset.target;
                        const moreContent = document.getElementById(targetId);
                        
                        moreContent.classList.toggle('show');
                        this.textContent = moreContent.classList.contains('show') ? 'View Less' : 'View More';
                    });
                });
            });

    </script>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a]">
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="/" class="logo">Joseph Gatuguta</a>
            
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#why-hire-me" class="nav-link">Why hire me </a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            
            <div class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <span class="hero-greeting">👋 Welcome to my portfolio</span>
                <h1 class="hero-title">
                    Hi, I'm <span>Joseph Gitoru Gatuguta</span>
                </h1>
                <p class="hero-description">
                    I like to introduce myself as a Backend engineer who only focuses on systems functionality , security and everything that the user cant see but cant use the system without them functioning properly.
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">View My Work</a>
                    <a href="#contact" class="btn btn-secondary">Contact Me</a>
                </div>
                <div class="social-links">
                    <a href="https://github.com/gatuguta3" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.03-2.682-.103-.253-.447-1.27.098-2.646 0 0 .84-.269 2.75 1.025.8-.223 1.65-.334 2.5-.334.85 0 1.7.111 2.5.334 1.91-1.294 2.75-1.025 2.75-1.025.545 1.376.201 2.393.099 2.646.64.698 1.03 1.591 1.03 2.682 0 3.841-2.337 4.687-4.565 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.418 22 12c0-5.523-4.477-10-10-10z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/joseph-gatuguta-817b98259/" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.23 0H1.77C.79 0 0 .77 0 1.72v20.56C0 23.23.79 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.21 0 22.23 0zM7.08 20.1H3.55V8.97h3.53v11.13zM5.31 7.47c-1.13 0-2.05-.92-2.05-2.05 0-1.13.92-2.05 2.05-2.05 1.13 0 2.05.92 2.05 2.05 0 1.13-.92 2.05-2.05 2.05zM20.1 20.1h-3.53v-5.57c0-1.33-.02-3.04-1.85-3.04-1.85 0-2.13 1.45-2.13 2.94v5.67H9.06V8.97h3.39v1.56h.05c.47-.89 1.62-1.83 3.33-1.83 3.56 0 4.22 2.34 4.22 5.39v6.01z"/>
                        </svg>
                    </a>
                    <a href="https://x.com/GatugutaJ" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.104c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0021.577-4.826c.354-1.035.532-2.14.532-3.257 0-.247-.024-.492-.072-.734A9.986 9.986 0 0024 4.59a10.04 10.04 0 01-2.047.58z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('media/images/profile_images/WhatsApp_Image_2025-05-26_at_08.18.15-removebg-preview.png')}}" alt="Profile">
                <div class="hero-shape"></div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section id="about" class="about">
        <div class="about-container">
            <h2 class="section-title">About Me</h2>
            <p class="section-subtitle">Get to know me better</p>
            
            <div class="about-content">
                <div class="about-text">
                    <p>
                        I am a dedicated and skilled backend developer with over 2 years of experience in software development. I have successfully executed over 4 software implementations  individually, leveraging open-source technologies.
                        My expertise encompasses on backend development, primarily using PHP and Python. I have a proven track record in developing and deploying a range of software solutions,With this extensive experience, I am confident in my ability to adapt to any environment and successfully implement world-class solutions for any organization.

                    </p>
                    <p>
                        My journey in computer programming / software engineering began in high school when i made my first system using microsoft access. 
                        Since then, I've worked with various projects for companies , which have then greatly shaped on what I do and would love to do for the next couple of years
                    </p>
                    
                    <div class="about-stats">
                        <div class="stat-item">
                            <span class="stat-number">5+</span>
                            <span class="stat-label">Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">3+</span>
                            <span class="stat-label">Clients(Company)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">2+</span>
                            <span class="stat-label">Years</span>
                        </div>
                    </div>
                </div>
                
                <div class="about-image">
                    <img src="{{ asset('media/images/profile_images/profile_image_2.png')}}" alt="About me">
                    <div class="experience-badge">
                        <span class="years">2+</span>
                        <span class="text">Years Experience</span>
                    </div>
                </div>
            </div>

            <hr class="section-separator">

            <h2 class="sub_section-title">Education</h2>
            <p class="sub_section-subtitle">Bachelors degree</p>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        Mathematics and computer science  
                    </p>
                    <p>
                        2021 - 2024
                    </p>
                    <p>
                        Kenya Methodist University
                    </p>
                </div>

                <hr class="small-separator">

                
                <div class="about-text">
                    <p>
                        Kenya Certificate of Secondary Education
                    </p>
                    <p>
                        Scored a mean grade of  : B+
                    </p>
                    <p>
                        2017 - 2020
                    </p>
                    <p>
                        Othaya Boys High School
                    </p>
                    
                </div>

                <hr class="small-separator">

                
                <div class="about-text">
                    <p>
                        Kenya Certificate of Primary Education
                    </p>
                    <p>
                        Attained total marks  : 374
                    </p>
                    <p>
                        2007 - 2016
                    </p>
                    <p>
                        Nyana Hills Academy
                    </p>
                </div>

            </div>

            <hr class="section-separator">

            <h2 class="sub_section-title">Experience</h2>
            <p class="sub_section-subtitle">Intern</p>
            <div class="about-content">
                <div class="about-text" data-id="1">
                    <p>
                        Amkatek Limited
                    </p>
                    <p>
                         2024 (Nov) - 2025 (Oct)
                    </p>
                    <div class="more-content" id="content-1">
                        <p><span class="info-label">Achievements</span> </p>
                        <p><span class="info-label">Deployment & Configuration of WordPress:</span> Set up WordPress in a local environment, including theme customization and WooCommerce configuration for online store management.</p>
                        <p><span class="info-label">Deployment of Moodle-based Online Learning Platform:</span> deploying an online learning platform using Moodle Open Source, configuring course content and user settings to enhance e-learning experiences.</p>
                        <p><span class="info-label">Laravel Development:</span> Installed and configured Laravel on a local environment, gaining foundational skills in PHP frameworks and backend development.</p>
                        <p><span class="info-label">Server Management & Remote Access:</span>  Connected to remote servers via Terminal for management tasks, including virtual host setup, Apache, and MySQL configuration, improving system performance.</p>
                        <p><span class="info-label">Odoo ERP Configuration:</span>  customized Odoo modules to fit organizational requirements for enterprise resource planning.</p>
                        <p><span class="info-label">File Management & Deployment with FileZilla:</span>  Uploaded files to remote servers using FileZilla, facilitating streamlined file transfer and deployment processes.</p>
                        <p><span class="info-label">User Manual Development:</span> Prepared comprehensive user manuals for various software setups, providing accessible guides for non-technical users.</p>
                    
                    </div>
                    
                    <button class="view-more-btn" data-target="content-1">View More</button>
                </div>

                <hr class="small-separator">

                
                <div class="about-text" data-id="2">
                    <p>
                        Software developer
                    </p>
                    <p>
                        Gormahia FC (under Amkatek Limited) 
                    </p>
                    <p>
                        2025(January) - 2025 (March)
                    </p>
                    <div class="more-content" id="content-2">
                        <p><span class="info-label">Project description</span> </p>
                        <p>With a few developers at Amkatek Limited we developed a mobile application for their Chama/Groups that will aid in managing their finances</p>
                        <p>Performed a performance testing on the mobile application to determine areas of optimization within the app</p>
                        <p><span class="info-label">Technologies used :</span> </p>
                        <p>Figma- was used in the UI/UX design </p>
                        <p>Flutter- was used for frontend development</p>
                        <p>Laravel- was used for backend API development </p>
                    </div>
                    
                    <button class="view-more-btn" data-target="content-2">View More</button>
                </div>

                <hr class="small-separator">

                
                <div class="about-text" data-id="3">
                    <p>
                        Software developer 
                    </p>
                    <p>
                        Clarence Matheny Leadership Training institute   
                    </p>
                    <p>
                        2025(February) - 2025(August)
                    </p>
                    <div class="more-content" id="content-3">
                       <p><span class="info-label">Project description</span> </p>
                        <p>Deployed a fully functional learning management system for Clarence Matheny bible college in which its in use currently</p>
                        <p>Took part in training the staff members of the institute on how to use the ERP system developed by Amkatek</p>
                        <p>Contributed in setting up a Library management system for the institute</p>
                        <p><span class="info-label">Technologies used :</span> </p>
                        <p>Moodle- I used moodle open source code to setup their e-learning platform</p>
                        <p>Odoo- created API's within a  LMS custom module that registered students, registered courses and transferred student data to the Moodle e-learning platform</p>
                        
                    </div>
                    
                    <button class="view-more-btn" data-target="content-3">View More</button>
                </div>

            </div>

            <hr class="section-separator">

            <h2 class="sub_section-title">Certifications</h2>
            <p class="sub_section-subtitle">Advanced Programming in C++</p>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        C++ Institute Authorized Academy Program in partnership with  Cisco Networking Academy
                    </p>
                    <p>
                        2022
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="skills-container">
            <h2 class="section-title">My Skills</h2>
            <p class="section-subtitle">Technologies I work with</p>
            
            <div class="skills-grid">
                <div class="skill-category">
                    <h3>Programming Languages</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Python</span>
                                <span>95%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Php</span>
                                <span>60%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 60%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Dart</span>
                                <span>85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Java</span>
                                <span>80%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3>Web and Mobile Frameworks</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Laravel</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Odoo</span>
                                <span>75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Flutter</span>
                                <span>85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Springboot</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3>Database Management tools</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Mysql</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Postgres</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 70%"></div>
                            </div>
                        </div>   
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Oracle</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 70%"></div>
                            </div>
                        </div>                          
                        
                    </div>
                </div>

                <div class="skill-category">
                    <h3>Api integrations</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Safaricom Daraja Api</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Hostpinnacle sms Api</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 70%"></div>
                            </div>
                        </div>   
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>REST Api's (PHP) for web & mobile applications</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 70%"></div>
                            </div>
                        </div>   
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Biometric systems integration</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 70%"></div>
                            </div>
                        </div>                            
                        
                    </div>
                </div>

                <div class="skill-category">
                    <h3>Cloud Solutions</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Digital Ocean</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Hostpinnacle</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 70%"></div>
                            </div>
                        </div>   
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Interserver.net</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 70%"></div>
                            </div>
                        </div>      
                                             
                        
                    </div>
                </div>

                <div class="skill-category">
                    <h3>Operating systems</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Ubuntu</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Windows</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 70%"></div>
                            </div>
                        </div>   
                                                
                        
                    </div>
                </div>


            </div>
        </div>
    </section>
    
    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="projects-container">
            <h2 class="section-title">My Recent Projects</h2>
            <p class="section-subtitle">Some of my recent work</p>
            
            <div class="projects-grid">


                <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('media/images/project_images/Clarence_Matheny_ministries.png')}}" alt="Project 1">
                        <div class="project-overlay">
                            <a href="{{ route('projects.cmm') }}" class="project-link">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                    <polyline points="15 3 21 3 21 9"></polyline>
                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">E-Learning Platform</h3>
                        <p class="project-description">
                            A fully fuctional E-leaning management system built  using moodle open source tool fully integrated with ERP system built using Odoo
                        </p>
                        <p class="project-employer-description"><span class="services-info-lable"> My Employer - </span>  Amkatek Limited</p>
                        <p class="project-employer-description"><span class="services-info-lable"> Client - </span>  Clarence Matheny Leadership Training Institute . Limuru </p>
                        <div class="project-tags">
                            <span class="project-tag">Php</span>
                            <span class="project-tag">Javascript</span>
                            <span class="project-tag">MySQL</span>
                        </div>
                    </div>
                </div>


                 <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('media/images/project_images/Izone_Fitness_Kitengela.png')}}" alt="Project 2">
                        <div class="project-overlay">
                            <a href="{{ route('projects.izone') }}" class="project-link">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                    <polyline points="15 3 21 3 21 9"></polyline>
                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Gym management system</h3>
                        <p class="project-description">
                            A complete gym management system completely built to manage all gym operations 
                        </p>                        
                        <p class="project-employer-description"><span class="services-info-lable"> Client - </span>  Izone Fitness Center . Kitengela</p>
                        <div class="project-tags">
                            <span class="project-tag">Python</span>
                            <span class="project-tag">Odoo</span>
                            <span class="project-tag">Paystack</span>
                            <span class="project-tag">Hostpinnacle</span>
                        </div>
                    </div>
                </div>


                <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('media/images/project_images/gormahia_fc.jpeg')}}" alt="Project 3">
                        <div class="project-overlay">
                            <a href="{{ route('projects.gormahia-fc') }}" class="project-link">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                    <polyline points="15 3 21 3 21 9"></polyline>
                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Gormahia Fc savings Group Mobile application</h3>
                        <p class="project-description">
                            A modern Savings group mobile application fully configured to manage all Chama operations 
                        </p>
                        <p class="project-employer-description"><span class="services-info-lable"> My Employer - </span>  Amkatek Limited subcontracted by (Malipo Circles Lmited)</p>
                        <p class="project-employer-description"><span class="services-info-lable"> Client - </span>  Gormahia Fc . Nairobi </p>
                        <div class="project-tags">
                            <span class="project-tag">Flutter</span>
                            <span class="project-tag">Php</span>
                            <span class="project-tag">Firebase</span>
                        </div>
                    </div>
                </div>

                
                <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('media/images/project_images/exen_limited.png')}}" alt="Project 2">
                        <div class="project-overlay">
                            <a href="{{ route('projects.exen-limited') }}" class="project-link">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                    <polyline points="15 3 21 3 21 9"></polyline>
                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">E-Commerce platform</h3>
                        <p class="project-description">
                            A Fully functional E-commerce system for EXEN LIMITED KENYA.
                        </p>
                        <div class="project-tags">
                            <span class="project-tag">Flutter</span>
                            <span class="project-tag">Php</span>
                            <span class="project-tag">Mysql</span>
                        </div>
                    </div>
                </div>

               
                
                <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('media/images/project_images/portfolio.png')}}" alt="Project 3">
                        <div class="project-overlay">
                            <a href="#" class="project-link">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                    <polyline points="15 3 21 3 21 9"></polyline>
                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">My Portfolio Website</h3>
                        <p class="project-description">
                            A modern portfolio website with smooth animations and responsive design
                        </p>
                        <div class="project-tags">
                            <span class="project-tag">HTML/CSS</span>
                            <span class="project-tag">JavaScript</span>
                            <span class="project-tag">GSAP</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="about-container">
            <h2 class="section-title">My services</h2>
            <p class="section-subtitle">What services do i offer ?</p>

            <div class="skills-grid">

                <div class="skill-category">
                    <h3>Website & E-commerce Development:</h3>
                    <div class="skill-items">
                       <p>
                        I build and customize websites and e-commerce platforms using popular content management systems like WordPress and WooCommerce. I create visually appealing and user-friendly websites that are optimized for performance and search engines, ensuring a seamless online presence for businesses and individuals.
                        For custom web applications, I utilize frameworks like Laravel and open-source technologies  like  Odoo to develop robust and scalable solutions tailored to specific business needs. Whether it's a simple informational website or a complex e-commerce platform, I have the skills and experience to deliver high-quality results that meet client requirements and exceed expectations.
                    </p>

                    <h5>
                        Who might need this service ?
                    </h5>

                    <p><span class="services-info-lable">Clinic facilities - </span>
                         For clinic facilities that are looking to establish an online presence or enhance their existing website, I can provide comprehensive web development services.
                          This includes designing and developing a user-friendly website that showcases their services, provides essential information to patients, and allows for easy appointment scheduling.
                           Additionally, I can integrate features such as online payment options and patient portals to improve the overall patient experience and streamline clinic operations.
                    </p>
                    <p><span class="services-info-lable">Production facilities / businesses - </span>
                            For production facilities or businesses that want to expand their reach and sell products online, I can develop customized e-commerce platforms .
                            These business are like bakeries, shirt printing shops , branding and printing  companies , Welding and fabrication workshops , furniture making workshops .
                            I can create  user friendly and well detailed websites that can inform visiting customers clearly what they do ,the products they sell and can enable customers to book their services or order goods
                    </p>
                    <p><span class="services-info-lable">Service providers / businesses - </span>
                         For service providers or businesses that want to establish an online presence and attract more customers, I can develop customized websites that effectively showcase their services and provide essential information to potential clients.
                          These businesses include  salons, barbershops, spas, gyms, fitness centers , event management companies , hotels and lodges , transport and logistics companies etc.
                           I can create visually appealing and user-friendly websites that highlight their services, provide contact information, and allow for easy appointment scheduling or service booking, ultimately helping them grow their customer base and increase revenue.
                    </p>
                    <p><span class="services-info-lable">Wholesalers and Retailer businesses - </span>
                            For wholesalers and retailers that want to expand their reach and sell products online, I can develop customized e-commerce platforms.
                            These businesses include  supermarkets, wholesale shops , retail shops , pharmacies , hardware shops , agrovet shops etc.
                            I can create user-friendly and well-detailed websites that inform visiting customers clearly about the products they sell, provide an easy-to-navigate online catalog, and enable customers to place orders or make purchases directly through the website, ultimately helping them increase sales and grow their business.
                    </p>
                    <p><span class="services-info-lable">Non Governmental Organizations (NGOs) - </span>
                            For NGOs that want to establish an online presence and effectively communicate their mission and impact, I can develop customized websites that showcase their work and engage with supporters.
                            I can create visually appealing and user-friendly websites that highlight their projects, provide information about their initiatives, and allow for easy donation options or volunteer sign-ups, ultimately helping them raise awareness and garner support for their cause.
                    </p>
                    <p><span class="services-info-lable">Researchers - </span>
                        Researchers being very detail oriented individuals  who need to share their resarch findings with everyone including the knowledgeable individuals and the random users looking for infomation online , 
                        I can develop customized websites that effectively communicate their research findings and engage with a wider audience.
                        They still can highlight their research projects, provide detailed information about their methodologies and results, and allow for easy sharing of their work through social media or academic platforms, ultimately helping them increase the visibility and impact of their research.
                    </p>
                    

                    </div>
                </div>

                <div class="skill-category">
                    <h3>E-Learning management systems & Training Solutions:</h3>
                    <div class="skill-items">
                       <p>
                        I specialize in developing and implementing e-learning management systems using platforms like Moodle, which provide a comprehensive solution for online education and training. I can create customized e-learning platforms that are tailored to the specific needs of educational institutions, businesses, or organizations.
                         These platforms can include features such as course management, content delivery, assessments, and user tracking to enhance the learning experience. Additionally, I can provide training solutions to help educators and trainers effectively utilize the e-learning platform and maximize its potential for delivering engaging and interactive online courses.
                    </p>

                    <h5>
                        Who might need this service ?
                    </h5>

                    <p><span class="services-info-lable">Universities & Colleges - </span>
                         Universities and colleges since covid-19 pandemic have become very interested in providing learning to their students online .
                          A college being my first organization to work with , I have experience in deploying e-learning management systems for educational institutions and providing
                           training to staff members on how to use the systems effectively. I can help universities and colleges establish a robust online learning environment that allows 
                           them to continue delivering quality education to their students, even in remote or hybrid learning scenarios.
                    </p>

                    <p><span class="services-info-lable">Churches - </span>
                         Since forever churches have always conducted tarining sessions to their member  eg. Sunday school classes , youth trainings , leadership training sessions etc. 
                         With the current technological advancements and the need to reach a wider audience, churches can benefit from e-learning management systems to deliver their training content online.
                          I can help churches set up e-learning platforms that allow them to provide training materials, conduct virtual classes, and engage with their congregation effectively, thus expanding their reach and impact beyond physical boundaries.
                    </p>

                    <p><span class="services-info-lable">Organizations / companies - </span>
                         Companies and organizations have always conducted training sessions to their staff members or to new and seasonal employees to enhance their skills and knowledge.
                          With the increasing demand for remote work and online learning, many companies are now looking to implement e-learning management systems to deliver training content to their employees.
                          I can help organizations set up e-learning platforms that allow them to provide training materials, conduct virtual classes, and engage with their employees effectively, thus enhancing their workforce's skills and knowledge while accommodating remote work arrangements.
                    </p>

                    <p><span class="services-info-lable">Humanitarian foundations - </span>
                            Humanitarian foundations often conduct training sessions for their staff members, volunteers, and beneficiaries to enhance their skills and knowledge in various areas such as disaster response, community development, and health education.
                            With the increasing demand for remote work and online learning, many humanitarian foundations are now looking to implement e-learning management systems to deliver training content to their stakeholders.
                            I can help humanitarian foundations set up e-learning platforms that allow them to provide training materials, conduct virtual classes, and engage with their staff members, volunteers, and beneficiaries effectively, thus enhancing their skills and knowledge while accommodating remote work arrangements.
                     </p>
                    
                    </div>
                </div>


                <div class="skill-category">
                    <h3>Mobile Application Development & Maintenance:</h3>
                    <div class="skill-items">
                       <p>
                        I specialize in developing and maintaining mobile applications using frameworks like Flutter, which allows for cross-platform development for both Android and iOS. I can create customized mobile applications that are tailored to the specific needs of businesses, organizations, or individuals.
                        These applications aim to solve different problems for users or organizations, such as improving customer engagement, streamlining operations, or providing convenient access to services. 
                        Additionally, I provide ongoing maintenance and support to ensure that the mobile applications remain up-to-date, secure, and functional, thus maximizing their value and effectiveness for users.
                    </p>

                    <h5>
                        Who might need this service ?
                    </h5>

                    <p><span class="services-info-lable">Businesses - </span>
                         Businesses of all sizes can benefit from mobile applications to enhance customer engagement, streamline their internal operations, and provide convenient access to their products or services. 
                          I can help businesses develop customized mobile applications that are tailored to their specific needs and goals, thus helping them reach a wider audience and increase their revenue and also ease running of their business.
                    </p>

                     <p><span class="services-info-lable">Governmental and Non-governamental Organizations - </span>
                        Governmental and non-governamental organizations can benefit from mobile applications to improve service delivery, enhance communication with citizens, and streamline internal operations.
                        I can help these organizations develop customized mobile applications that are tailored to their specific needs and objectives, enabling them to provide more efficient and accessible services to their constituents.
                    </p>
                
                     <p><span class="services-info-lable">Educational Institutions - </span>
                        Educational institutions can benefit from mobile applications to enhance the learning experience, improve communication with students and parents, and streamline administrative tasks.
                        I can help educational institutions develop customized mobile applications that are tailored to their specific needs and goals, enabling them to provide a more engaging and efficient educational experience for their students and stakeholders.
                    </div>

                    <p><span class="services-info-lable">Students - </span>
                        For all students who are looking to develop their own mobile applications for their final year projects or for their personal use, I can provide comprehensive mobile application development services that cater to their specific needs and goals, thus helping them bring their ideas to life and gain valuable experience in mobile app development.
                    </p>
                </div>


                <div class="skill-category">
                    <h3>ERP & Business System Configuration and deployment</h3>
                    <div class="skill-items">
                       <p>
                        I specialize in configuring and deploying ERP systems, particularly using Odoo, to help businesses streamline their operations and improve efficiency. I can customize and implement ERP solutions that are tailored to the specific needs of businesses, allowing them to manage various aspects of their operations such as inventory, sales, finance, and human resources in a centralized and integrated manner.
                         With my expertise in ERP configuration and deployment, I can help businesses optimize their processes, enhance collaboration among departments, and gain valuable insights into their operations through data analytics and reporting features provided by the ERP system.
                    </p>

                     <h5>
                        Who might need this service ?
                    </h5>

                    <p><span class="services-info-lable">Small and Medium Enterprises (SMEs) - </span>
                         SMEs often face challenges in managing their operations efficiently due to limited resources and manual processes. 
                          I can help SMEs configure and deploy ERP systems that are tailored to their specific needs, allowing them to streamline their operations, improve productivity, and make informed business decisions based on real-time data insights provided by the ERP system. This can ultimately help SMEs grow and compete effectively in their respective markets.
                    </p>

                    <p><span class="services-info-lable">Educational Institutions- </span>
                         Educational institutions like colleges , universities , high schools , primary schools , virtual bootcamps etc have always needed ERP systems that can tend to their needs . Each institution has their custom needs 
                         but common procedures in running their institutions . 
                         My expertise comes in handy in automating all their operations using tools like Odoo ERP custom module development to help the institutions.
                    </p>
                    </div>
                </div>

                <div class="skill-category">
                    <h3>System Administration & Server Management:</h3>
                    <div class="skill-items">
                       <p>
                            I specialize in system administration and server management, particularly using Linux-based operating systems like Ubuntu. I can manage and maintain servers, ensuring their optimal performance, security, and reliability. 
                            This includes tasks such as server setup and configuration, software installation and updates, security hardening, performance monitoring, and troubleshooting.
                            
                        </p>

                        <h5>
                            Who might need this service ?
                        </h5>

                        <p><span class="services-info-lable">Governmental and Non-governamental Organizations - </span>
                            Governmental and non-governamental organizations often require robust and secure server infrastructure to support their operations and services. 
                            I can help these organizations with system administration and server management to ensure that their servers are properly configured, maintained, and secured, thus enabling them to provide reliable and efficient services to their constituents.
                        </p>

                        <p><span class="services-info-lable">Fintech Organizations - </span>
                            Fintech organizations often require secure and scalable server infrastructure to support their financial applications and services. 
                            I can help these organizations with system administration and server management to ensure that their servers are properly configured, maintained, and secured, thus enabling them to provide reliable and efficient services to their constituents.
                        </p>

                        <p><span class="services-info-lable">Financial Organizations - </span>
                            Financial organizations eg , banks, insurance companies, investment firms etc. require secure and scalable server infrastructure to support their financial applications and services. 
                            I can help these organizations with system administration and server management to ensure that their servers are properly configured, maintained, and secured, thus enabling them to provide reliable and efficient services to their constituents.
                        </p>




                    </div>
                </div>

                <div class="skill-category">
                    <h3>Technical support and user training</h3>
                    <div class="skill-items">
                       <p>
                        I bridge the gap between tech and non-tech users by writing easy-to-understand manuals and training staff on new software systems . In addition to this as users
                        continue interacting with the systems I provide technical support to ensure smooth operations and address any issues that may arise, 
                        thus ensuring a seamless user experience and maximizing the benefits of the implemented solutions.
                    </p>
                    <h5>
                        Who might need this service ?
                    </h5>
                    <p><span class="services-info-lable">Hospitals - </span>
                         Having interacted with Hospital management systems and developed multiple modules on the HMIS,I can comfortably conduct training sessions for staff on system usage and troubleshooting.</p>
                    <p><span class="services-info-lable">Educational Institutions - </span> 
                        After deploying an online learning platform using Moodle Open Source, configuring course content and user settings to enhance e-learning experiences.I have still conducted training sessions 
                        to lectures and provided after service support to the institution technical personells . I can comfortably conduct support services to educational institutions</p>
                    <p><span class="services-info-lable">Small and Medium Enterprises - </span> 
                       For SME's which have automated their operations and are struggling to train their staff on their systems, I can provide comprehensive training and ongoing support.</p>
                    <p><span class="services-info-lable">Any organization - </span> 
                        For any organization that needs assistance in training staff or resolving daily staff issues on new software systems or providing ongoing technical support for all malfunctioning hardware resources in the organization.</p>
                    </div>
                </div>


            </div>
            
            
        </div>
    </section>

    <!-- Why Hire me section -->
    <section id="why-hire-me" class="why-hire-me">
        <div class="about-container">
            <h2 class="section-title">Why Hire Me</h2>
            <p class="section-subtitle">Why should you consider me as your go to software developer</p>

            <h2 class="sub_section-title">For Companies & Organizations</h2>
            
            <div class="about-content">
                <div class="about-text">
                    <p>
                        I am a dedicated and skilled backend developer with over 2 years of experience in software development. I have successfully executed over 4 software implementations  individually, leveraging open-source technologies.
                        My expertise encompasses on backend development, primarily using PHP and Python. I have a proven track record in developing and deploying a range of software solutions,With this extensive experience, I am confident in my ability to adapt to any environment and successfully implement world-class solutions for any organization.

                    </p>
                    <p>
                        I have experience in conducting knowledge transfer during training sessions for internal teams post-system development. This ensures that the organization can effectively utilize and maintain the implemented solutions, thus maximizing their value and impact.
                    </p>
                    <p>
                        I have Strong communication skills.  
                    </p>
                    <p>
                        I am a great team player and a fast learner.  
                    </p>
                    <p>
                        I have a great capability of adapting to any environment be it onsite , remote or hybrid.  
                    </p>
                    <p>
                        I can work fairly well under tight deadlines.  
                    </p>


                    <h5>
                        Roles am well fit for :
                    </h5>
                    <p>
                        Junior Full stack developer  
                    </p>
                    <p>
                        Junior Backend Developer  
                    </p>
                    <p>
                        Junior ERP consultant  
                    </p>
                    <p>
                        Android developer  
                    </p>
                    <p>
                        IT support specialist  
                    </p>

                    
                    
                    
                </div>                
                
            </div>

             <hr class="section-separator">

             <h2 class="sub_section-title">For Individual Clients</h2>

            <div class="about-content">
                <div class="about-text">
                    <p>
                        I am a dedicated and skilled backend developer with over 2 years of experience in software development. I have successfully executed over 4 software implementations  individually, leveraging open-source technologies.
                        My expertise encompasses on backend development, primarily using PHP and Python. I have a proven track record in developing and deploying a range of software solutions,With this extensive experience, I am confident in my ability to adapt to any environment and successfully implement world-class solutions for any organization.

                    </p>
                    <p>
                       I have worked with individual clients to develop customized software solutions that meet their specific needs and goals.
                        I have experience in understanding client requirements, providing tailored solutions, and delivering high-quality results that exceed client expectations.
                    </p>
                    <p>
                        And remember , no matter how tight your schedule is or no matter how complex your software needs are , <h5> I will deliver ! You just have to trust me !</h5>
                    </p>

                    <h5>
                        To my esteemed individual clients , Who am i to you:
                    </h5>

                    <p>
                        Android developer  
                    </p>

                    <p>
                        Website developer  
                    </p>

                    <p>
                        ERP consultant  
                    </p>

                    <p>
                        E-learning system developer  
                    </p>

                    <p>
                        Software consultant  
                    </p>


                    
                    
                </div>                
                
            </div>

                       
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="contact-container">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Let's work together</p>
            
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p>gatuguta3joseph@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a1.999 1.999 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8 10a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.574 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <h4>Phone</h4>
                            <p>+254 703513093</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <h4>Location</h4>
                            <p>Gurunanak, Nairobi , Kenya</p>
                        </div>
                    </div>
                </div>
                
                <form id="contactForm" class="contact-form">
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-textarea" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div>
                    <a href="/" class="footer-logo">Portfolio</a>
                    <p class="footer-description">
                        Creating functional and scalable software solutions.
                    </p>
                </div>
                
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#why-hire-me">Why Hire Me</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4> My Services</h4>
                    <ul>
                        <li><a href="#services">Website & E-commerce Development</a></li>
                        <li><a href="#services">E-Learning management systems & Training Solutions</a></li>
                        <li><a href="#services">Mobile Application Development & Maintenance</a></li>
                        <li><a href="#services">ERP & Business System Configuration and deployment</a></li>
                        <li><a href="#services">System Administration & Server Management</a></li>
                        <li><a href="#services">Technical support and user training</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Joseph Gatuguta Gitoru. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
</body>
</html>