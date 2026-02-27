

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Portfolio - Web Developer & Designer">
    
    <title>Izone Fitness Center</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <style>
        /* Project Detail Page Specific Styles */
        .project-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 6rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .project-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.1"><circle cx="50" cy="50" r="40" stroke="white" fill="none" stroke-width="2"/><path d="M20 20 L80 20 L80 80 L20 80 Z" stroke="white" fill="none" stroke-width="2"/></svg>');
            background-size: 100px 100px;
            opacity: 0.1;
        }

        .project-hero-container {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .project-category {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }

        .project-title {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .project-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }

        .project-links {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .project-links .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .project-overview,
        .project-features,
        .tech-stack,
        .project-gallery,
        .project-challenges,
        .project-results,
        .related-projects {
            padding: 5rem 0;
            background: rgba(255, 255, 255, 0.74);
        }

        .project-overview {
            background: var(--light-bg);
        }

        .dark .project-overview {
            background: var(--dark-bg);
        }

        .overview-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .overview-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .overview-content p {
            font-size: 1.1rem;
            color: var(--text-gray);
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .quick-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .info-item {
            display: flex;
            flex-direction: column;
        }

        .info-label {
            font-size: 0.9rem;
            color: var(--text-gray);
            margin-bottom: 0.3rem;
        }

        .info-value {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .overview-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: var(--shadow);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .dark .feature-card {
            background: var(--card-bg-dark);
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: var(--text-gray);
            line-height: 1.6;
        }

        .tech-stack {
            background: var(--light-bg);
        }

        .dark .tech-stack {
            background: var(--dark-bg);
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .tech-category {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
        }

        .dark .tech-category {
            background: var(--card-bg-dark);
        }

        .tech-category h3 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }

        .tech-list {
            list-style: none;
        }

        .tech-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .dark .tech-list li {
            border-bottom-color: rgba(255, 255, 255, 0.1);
        }

        .tech-list li:last-child {
            border-bottom: none;
        }

        .tech-name {
            font-weight: 500;
        }

        .tech-level {
            font-size: 0.85rem;
            padding: 0.3rem 0.8rem;
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary-color);
            border-radius: 50px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .gallery-item {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            aspect-ratio: 4/3;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            padding: 1rem;
            transform: translateY(100%);
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .challenges-list {
            max-width: 800px;
            margin: 3rem auto 0;
        }

        .challenge-item {
            display: flex;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .challenge-number {
            font-size: 3rem;
            font-weight: 700;
            color: rgba(99, 102, 241, 0.2);
            line-height: 1;
        }

        .challenge-content h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .challenge-content p {
            color: var(--text-gray);
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .results-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
            background: var(--card-bg);
            border-radius: 20px;
            box-shadow: var(--shadow);
        }

        .dark .stat-card {
            background: var(--card-bg-dark);
        }

        .stat-value {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-gray);
            font-size: 1rem;
        }

        .testimonial {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 3rem;
            border-radius: 20px;
            text-align: center;
            margin-top: 3rem;
        }

        .testimonial p {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            flex-direction: column;
        }

        .testimonial-author strong {
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
        }

        .testimonial-author span {
            opacity: 0.8;
            font-size: 0.9rem;
        }

        .related-projects {
            background: var(--light-bg);
        }

        .dark .related-projects {
            background: var(--dark-bg);
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .related-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-decoration: none;
            color: inherit;
        }

        .dark .related-card {
            background: var(--card-bg-dark);
        }

        .related-card:hover {
            transform: translateY(-5px);
        }

        .related-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .related-card h3 {
            padding: 1.5rem 1.5rem 0.5rem;
            font-size: 1.2rem;
        }

        .related-link {
            display: block;
            padding: 0 1.5rem 1.5rem;
            color: var(--primary-color);
            font-weight: 500;
        }

        .back-to-projects {
            text-align: center;
            padding: 2rem;
            background: var(--light-bg);
        }

        .dark .back-to-projects {
            background: var(--dark-bg);
        }

        .back-to-projects .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        @media (max-width: 768px) {
            .project-title {
                font-size: 2.5rem;
            }
            
            .overview-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .quick-info {
                grid-template-columns: 1fr;
            }
            
            .challenge-item {
                flex-direction: column;
                gap: 1rem;
            }
            
            .challenge-number {
                font-size: 2rem;
            }
            
            .project-links {
                flex-direction: column;
            }
            
            .results-stats {
                grid-template-columns: 1fr;
            }
        }
</style>
    
   
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a]">

    <!-- Project Hero Section -->
<section class="project-hero">
    <div class="project-hero-container">
        <span class="project-category">Featured Project</span>
        <h1 class="project-title">Gym and Fitness management system</h1>
        <p class="project-subtitle">A gym and fitness center system built with Odoo and fully configured to manage memberships, classes, and payments.</p>
        
        <div class="project-links">
            <a href="https://learn.cmlti.co.ke/" class="btn btn-primary" target="_blank">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                </svg>
                Live Demo
            </a>
            <a href="https://github.com/Amkatek-Limited/moodle_elearning_platform" class="btn btn-secondary" target="_blank">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                </svg>
                View Code
            </a>
        </div>
    </div>
</section>

<!-- Project Overview -->
<section class="project-overview">
    <div class="container">
        <div class="overview-grid">
            <div class="overview-content">
                <h2>Project Overview</h2>
                <p>
                    Izone Fitness Center management system is a comprehensive gym management system designed to streamline operations and enhance management experience.
                     Built with Odoo, it offers features like membership management, class scheduling, payment tracking, and access control. The system provides real-time updates and analytics to help Izone fitness owners make informed decisions and improve customer satisfaction.
                </p>
                
                <div class="quick-info">
                    <div class="info-item">
                        <span class="info-label">Client</span>
                        <span class="info-value">Izone Fitness </span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Timeline</span>
                        <span class="info-value">6 Months</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Team Size</span>
                        <span class="info-value">1 Developer</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Role</span>
                        <span class="info-value">Sole Developer</span>
                    </div>
                </div>
            </div>
            
            <div class="overview-image">
                <img src="{{ asset('images/projects/cmm-dashboard.jpg') }}" alt="CMM App Dashboard" onerror="this.src='https://via.placeholder.com/600x400?text=CMM+Dashboard'">
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="project-features">
    <div class="container">
        <h2 class="section-title">Key Features</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                </div>
                <h3>Member Management</h3>
                <p>The system fully allows creation of new members , stores their details fully secure. This includes personal information, membership type, and subscription status.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h3>Customer Relationship Management</h3>
                <p>Using Members information eg  phone number , I built a custom CRM which allows management to communicate with their customers using SMS and Email.They send reminder emails and sms of payments, membership renewal , and attendance .</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <h3>Payment Tracking</h3>
                <p>The system efficiently Tracks payments made by members and generate reports to analyze revenue and payment trends. Thus this does the heavylifting in tracking unpaid subscriptions</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                        <polyline points="3.29 7 12 12 20.71 7"></polyline>
                        <line x1="12" y1="22" x2="12" y2="12"></line>
                    </svg>
                </div>
                <h3>Subscription Management</h3>
                <p>The system allows management to easily create, update, and cancel subscriptions for members. It also provides automated renewal reminders and handles subscription expiration gracefully and by sending reminder sms to members.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                </div>
                <h3>Classes and Activities scheduling</h3>
                <p>The system allows management to schedule and manage classes and activities for members. It provides a visual calendar view to easily see upcoming events and manage member attendance and trainer scheduling.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                        <path d="M8 14h.01"></path>
                        <path d="M12 14h.01"></path>
                        <path d="M16 14h.01"></path>
                        <path d="M8 18h.01"></path>
                        <path d="M12 18h.01"></path>
                        <path d="M16 18h.01"></path>
                    </svg>
                </div>
                <h3>Access control</h3>
                <p>The system is integrated to a Biometric system thus enabling a secure control structure whereby only members who have renewed their subscriptions are granted access to the facility. This ensures that only active members can use the gym's services.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack -->
<section class="tech-stack">
    <div class="container">
        <h2 class="section-title">Technology Stack</h2>
        <div class="tech-grid">

            <div class="tech-category">
                <h3>Frontend</h3>
                <ul class="tech-list">
                    <li>
                        <span class="tech-name">Javascript</span>
                        <span class="tech-level">Advanced</span>
                    </li>
                    <li>
                        <span class="tech-name">CSS</span>
                        <span class="tech-level">Advanced</span>
                    </li>
                    <li>
                        <span class="tech-name">Xml</span>
                        <span class="tech-level">Intermediate</span>
                    </li>
                    <li>
                        <span class="tech-name">Odoo Qweb</span>
                        <span class="tech-level">Advanced</span>
                    </li>
                    
                </ul>
            </div>
            
            <div class="tech-category">
                <h3>Backend</h3>
                <ul class="tech-list">
                    <li>
                        <span class="tech-name">Odoo Framework</span>
                        <span class="tech-level">Advanced</span>
                    </li>
                    <li>
                        <span class="tech-name">Python</span>
                        <span class="tech-level">Advanced</span>
                    </li>
                    <li>
                        <span class="tech-name">Postgres</span>
                        <span class="tech-level">Advanced</span>
                    </li>
                    <li>
                        <span class="tech-name">RESTful API</span>
                        <span class="tech-level">Advanced</span>
                    </li>
                    
                </ul>
            </div>
            
            <div class="tech-category">
                <h3>DevOps & Tools</h3>
                <ul class="tech-list">
                    <li>
                        <span class="tech-name">Git/GitHub</span>
                        <span class="tech-level">Advanced</span>
                    </li>
                    <li>
                        <span class="tech-name">Docker</span>
                        <span class="tech-level">Intermediate</span>
                    </li>
                    
                    <li>
                        <span class="tech-name">Postman</span>
                        <span class="tech-level">Advanced</span>
                    </li>
                </ul>
            </div>

            <div class="tech-category">
                <h3>3rd Part API integrations</h3>
                <ul class="tech-list">
                    <li>
                        <span class="tech-name">Paystack API</span>
                        <span class="tech-level">Payment tracking</span>
                    </li>
                    <li>
                        <span class="tech-name">Hostpinnacle sms Api</span>
                        <span class="tech-level">SMS notifications</span>
                    </li>
                    
                    
                </ul>
            </div>


        </div>
    </div>
</section>

<!-- Screenshots/Gallery -->
<section class="project-gallery">
    <div class="container">
        <h2 class="section-title">Project Gallery</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="{{ asset('media/images/project_images/izone_fitness_images/dashboard.png')}}" alt="Dashboard View">
                <div class="gallery-overlay">
                    <span>Dashboard</span>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('media/images/project_images/izone_fitness_images/membership_management.png')}}" alt="Member dashboard">
                <div class="gallery-overlay">
                    <span>Membership Management</span>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('media/images/project_images/izone_fitness_images/member_detail_page.png')}}" alt="Analytics">
                <div class="gallery-overlay">
                    <span>Member Profile Page</span>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('media/images/project_images/izone_fitness_images/activity_class_page.png')}}" alt="Activity Class Page">
                <div class="gallery-overlay">
                    <span>Activity and Classes Management</span>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('media/images/project_images/izone_fitness_images/daily_attendance.png')}}" alt="Daily Attendance">
                <div class="gallery-overlay">
                    <span>Daily Attendance</span>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('media/images/project_images/izone_fitness_images/payment_dashboard.png')}}" alt="Payment Dashboard">
                <div class="gallery-overlay">
                    <span>Payments Management Dashboard</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Challenges & Solutions -->
<section class="project-challenges">
    <div class="container">
        <h2 class="section-title">Challenges & Solutions</h2>
        <div class="challenges-list">
            <div class="challenge-item">
                <div class="challenge-number">01</div>
                <div class="challenge-content">
                    <h3>Real-time Updates</h3>
                    <p><strong>Challenge:</strong> Implementing real-time updates without overwhelming the server or causing performance issues.</p>
                    <p><strong>Solution:</strong> Used Laravel Echo with WebSockets for efficient real-time communication. Implemented throttling and debouncing to optimize server load.</p>
                </div>
            </div>
            
            <div class="challenge-item">
                <div class="challenge-number">02</div>
                <div class="challenge-content">
                    <h3>Complex Task Relationships</h3>
                    <p><strong>Challenge:</strong> Managing complex relationships between tasks, subtasks, dependencies, and assignments.</p>
                    <p><strong>Solution:</strong> Designed a robust database schema with polymorphic relationships. Implemented eager loading to optimize queries.</p>
                </div>
            </div>
            
            <div class="challenge-item">
                <div class="challenge-number">03</div>
                <div class="challenge-content">
                    <h3>Drag-and-Drop Interface</h3>
                    <p><strong>Challenge:</strong> Creating a smooth drag-and-drop experience that updates in real-time.</p>
                    <p><strong>Solution:</strong> Used React DnD library with optimistic updates. Implemented debounced API calls to prevent excessive requests.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Results & Impact -->
<section class="project-results">
    <div class="container">
        <h2 class="section-title">Results & Impact</h2>
        <div class="results-stats">
            <div class="stat-card">
                <div class="stat-value">40%</div>
                <div class="stat-label">Increase in management efficiency</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">200+</div>
                <div class="stat-label">Memberships managed Monthly</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">100%</div>
                <div class="stat-label">Client Satisfaction</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">24/7</div>
                <div class="stat-label">System Availability</div>
            </div>
        </div>
        
        <div class="testimonial">
            <p>"The management system has greately improved how we manage our subscription, how we pass information to our customers .We can now easily track how all our members attend the gym"</p>
            <div class="testimonial-author">
                <strong>Larry (The Predator)</strong>
                <span> Manager, Izone Fitness Center</span>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
<section class="related-projects">
    <div class="container">
        <h2 class="section-title">Related Projects</h2>
        <div class="related-grid">
            <a href="{{ route('projects.cmm') }}" class="related-card">
                <img src="{{ asset('media/images/project_images/Clarence_Matheny_ministries.png')}}" alt="E-Learning Management System">
                <h3>E-learning Management System</h3>
                <span class="related-link">View Project →</span>
            </a>
            <a href="{{ route('projects.exen-limited') }}" class="related-card">
                <img src="{{ asset('media/images/project_images/exen_limited.png')}}" alt="Portfolio Website">
                <h3>Exen Limited E-commerce Management Platform</h3>
                <span class="related-link">View Project →</span>
            </a>
            <a href="{{ route('projects.gormahia-fc') }}" class="related-card">
                <img src="{{ asset('media/images/project_images/gormahia_fc.jpeg')}}" alt="Gormahia Fc mobile Application">
                <h3>Gormahia Fc mobile Application</h3>
                <span class="related-link">View Project →</span>
            </a>
            <a href="{{ route('homepage') }}" class="related-card">
                <img src="{{ asset('media/images/project_images/portfolio.png')}}" alt="Portfolio Website">
                <h3>Portfolio Website</h3>
                <span class="related-link">View Project →</span>
            </a>
            
        </div>
    </div>
</section>

<!-- Back to Projects Button -->
<div class="back-to-projects">
    <a href="/" class="btn btn-secondary">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
        Back to All Projects
    </a>
</div>

</body>
</html>