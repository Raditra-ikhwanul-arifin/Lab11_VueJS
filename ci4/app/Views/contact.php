<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Portal Berita</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0047AB; /* Deep Blue from image */
            --dark-blue: #0A1128; /* Darker blue from image */
            --light-blue-accent: #ADD8E6; /* Light blue accent */
            --white: #ffffff;
            --off-white: #f8fafc;
            --light-gray: #e5e7eb;
            --medium-gray: #64748b;
            --dark-gray: #334155;
            --text-dark: #1e293b;
            --success-bg: #dcfce7;
            --success-text: #166534;
            --success-border: #22c55e;
            --shadow-light: rgba(0,0,0,0.08);
            --shadow-medium: rgba(0,0,0,0.15);
            --shadow-strong: rgba(0,0,0,0.25);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif; /* Changed font */
            background: var(--off-white);
            color: var(--dark-gray);
            line-height: 1.6;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        .contact-hero {
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
            padding: 100px 0; /* Increased padding */
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 20px var(--shadow-medium);
        }

        .contact-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300"><path d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,133.3C672,139,768,181,864,186.7C960,192,1056,160,1152,133.3C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" fill="rgba(255,255,255,0.05)"/></svg>') repeat-x; /* Less opaque pattern */
            opacity: 0.5; /* Slightly more visible */
            z-index: 0;
        }

        .contact-hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        .contact-hero h1 {
            font-family: 'Montserrat', sans-serif; /* Changed font */
            font-size: 3.8rem; /* Slightly larger */
            font-weight: 700;
            color: var(--white);
            margin-bottom: 25px; /* More space */
            text-shadow: 0 4px 8px var(--shadow-strong); /* Stronger shadow */
            letter-spacing: -1px;
        }

        .contact-hero p {
            font-size: 1.3rem; /* Slightly larger */
            color: rgba(255,255,255,0.95); /* More opaque */
            margin-bottom: 40px; /* More space */
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-main {
            margin: -80px auto 100px; /* Pull up more into hero */
            position: relative;
            z-index: 2;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px; /* Increased gap */
            margin-bottom: 80px; /* Increased margin */
        }

        .contact-card,
        .contact-form-card {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 15px 50px var(--shadow-light); /* More pronounced shadow */
            padding: 40px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            border: 1px solid var(--light-gray); /* Subtle border */
        }

        .contact-card:hover {
            transform: translateY(-8px); /* More pronounced lift */
            box-shadow: 0 25px 70px var(--shadow-medium); /* Stronger shadow on hover */
            border-color: var(--primary-blue); /* Highlight border on hover */
        }
        
        .contact-form-card {
            border-left: 5px solid var(--primary-blue); /* Emphasize form card */
        }


        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 40px; /* Consistent spacing */
            padding-bottom: 15px; /* Add padding for a subtle line */
            border-bottom: 1px solid var(--light-gray); /* Subtle separator */
        }

        .card-icon {
            width: 65px; /* Slightly larger icon */
            height: 65px;
            background: linear-gradient(45deg, var(--primary-blue), #002D62); /* Deeper blue gradient */
            border-radius: 50%; /* Make it circular */
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px; /* More space */
            box-shadow: 0 8px 25px rgba(0, 71, 171, 0.4); /* Shadow matching primary blue */
            flex-shrink: 0;
        }

        .card-icon i {
            color: var(--white);
            font-size: 1.8rem; /* Larger icon */
        }

        .card-header h3 {
            font-family: 'Montserrat', sans-serif; /* Changed font */
            font-size: 2rem; /* Larger heading */
            font-weight: 700;
            color: var(--text-dark);
            text-transform: capitalize;
            letter-spacing: -0.5px;
        }

        .form-group {
            margin-bottom: 28px; /* More space */
        }

        .form-group label {
            display: block;
            margin-bottom: 10px; /* More space */
            font-weight: 600; /* Bolder label */
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 16px 20px; /* Slightly more padding */
            border: 2px solid var(--light-gray);
            border-radius: 10px; /* Slightly less rounded */
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--off-white);
            color: var(--dark-gray);
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary-blue);
            background: var(--white);
            box-shadow: 0 0 0 4px rgba(0, 71, 171, 0.15); /* Shadow matching new primary blue */
        }

        .form-group textarea {
            resize: vertical;
            min-height: 140px; /* Taller textarea */
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .submit-btn {
            width: 100%;
            background: linear-gradient(45deg, var(--primary-blue), #002D62); /* Deeper blue gradient */
            color: var(--white);
            padding: 18px 30px;
            border: none;
            border-radius: 12px;
            font-size: 1.15rem; /* Slightly larger text */
            font-weight: 700; /* Bolder text */
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 71, 171, 0.3); /* Stronger shadow */
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .submit-btn:hover {
            transform: translateY(-3px); /* More pronounced lift */
            box-shadow: 0 12px 35px rgba(0, 71, 171, 0.5); /* Even stronger shadow */
            background: linear-gradient(45deg, #002D62, var(--primary-blue)); /* Reverse gradient on hover */
        }

        .submit-btn:active {
            transform: translateY(0);
            box-shadow: 0 4px 15px rgba(0, 71, 171, 0.3);
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px; /* Consistent spacing */
            padding: 20px;
            background: var(--off-white);
            border-radius: 12px;
            border-left: 5px solid var(--primary-blue); /* Stronger border for emphasis */
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .contact-info-item .icon {
            width: 50px; /* Slightly larger icon */
            height: 50px;
            background: linear-gradient(45deg, var(--primary-blue), #002D62); /* Deeper blue gradient */
            border-radius: 12px; /* Slightly more rounded */
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(0, 71, 171, 0.2);
        }

        .contact-info-item .icon i {
            color: var(--white);
            font-size: 1.2rem; /* Larger icon */
        }

        .contact-info-item .details h4 {
            font-family: 'Montserrat', sans-serif; /* Changed font */
            font-size: 1.2rem; /* Slightly larger */
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px; /* More space */
        }

        .contact-info-item .details p {
            color: var(--medium-gray);
            margin: 0;
            line-height: 1.5;
            font-size: 0.95rem;
        }

        .contact-info-item .details a {
            color: var(--primary-blue);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .contact-info-item .details a:hover {
            text-decoration: underline;
            color: #002D62; /* Darker blue on hover */
        }

        .full-width-section {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 15px 50px var(--shadow-light);
            padding: 50px;
            margin-bottom: 80px; /* More space */
            border: 1px solid var(--light-gray);
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px; /* More space */
        }

        .section-header h2 {
            font-family: 'Montserrat', sans-serif; /* Changed font */
            font-size: 3rem; /* Larger heading */
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 20px; /* More space */
            letter-spacing: -1px;
        }

        .section-header p {
            font-size: 1.15rem; /* Slightly larger */
            color: var(--medium-gray);
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .social-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); /* Wider columns */
            gap: 30px; /* More gap */
            margin-bottom: 40px;
        }

        .social-item {
            display: flex;
            align-items: center;
            padding: 28px; /* More padding */
            background: var(--off-white);
            border-radius: 15px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid var(--light-gray); /* Subtle border */
        }

        .social-item:hover {
            background: linear-gradient(45deg, var(--primary-blue), #002D62); /* Gradient on hover */
            color: var(--white);
            transform: translateY(-5px); /* More pronounced lift */
            box-shadow: 0 15px 35px rgba(0, 71, 171, 0.4); /* Stronger shadow */
            border-color: var(--primary-blue);
        }

        .social-item .social-icon {
            width: 55px; /* Slightly larger icon */
            height: 55px;
            background: var(--primary-blue); /* Solid blue for icon background */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(0, 71, 171, 0.3);
            transition: all 0.3s ease;
        }

        .social-item:hover .social-icon {
            background: var(--white); /* White icon background on hover */
            box-shadow: none; /* Remove shadow on hover */
        }

        .social-item .social-icon i {
            color: var(--white);
            font-size: 1.5rem; /* Larger icon */
            transition: color 0.3s ease;
        }

        .social-item:hover .social-icon i {
            color: var(--primary-blue); /* Blue icon on hover */
        }

        .social-item .social-details h4 {
            font-family: 'Montserrat', sans-serif; /* Changed font */
            font-size: 1.15rem; /* Slightly larger */
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 5px;
            transition: color 0.3s ease;
        }

        .social-item:hover .social-details h4 {
            color: var(--white);
        }

        .social-item .social-details p {
            color: var(--medium-gray);
            margin: 0;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }

        .social-item:hover .social-details p {
            color: rgba(255,255,255,0.9);
        }

        .office-hours {
            background: linear-gradient(135deg, #e0f2f7, #d4edf6); /* Lighter blue gradient */
            border-radius: 18px; /* Slightly more rounded */
            padding: 35px; /* More padding */
            margin-top: 30px; /* Space from contact info items */
            box-shadow: inset 0 0 15px rgba(0, 71, 171, 0.05); /* Inner shadow */
        }

        .office-hours h3 {
            font-family: 'Montserrat', sans-serif; /* Changed font */
            font-size: 1.6rem; /* Slightly larger */
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 25px; /* More space */
            text-align: center;
            position: relative;
        }

        .office-hours h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--primary-blue);
            border-radius: 2px;
        }

        .hours-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px; /* More gap */
        }

        .hours-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px; /* More padding */
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid var(--light-blue-accent); /* Border matching theme */
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .hours-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .hours-item .day {
            font-weight: 600;
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .hours-item .time {
            color: var(--primary-blue);
            font-weight: 700;
            font-size: 1rem;
        }

        .map-section {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 15px 50px var(--shadow-light);
            padding: 50px;
            margin-bottom: 80px;
            border: 1px solid var(--light-gray);
        }

        .map-placeholder {
            background: var(--off-white);
            border-radius: 15px;
            height: 450px; /* Taller map */
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--medium-gray);
            font-size: 1.2rem;
            border: 2px dashed var(--light-blue-accent); /* Dashed border for map */
            overflow: hidden; /* Ensure content doesn't overflow */
        }

        .map-placeholder iframe {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 15px;
        }

        .quick-contact {
            background: linear-gradient(135deg, var(--primary-blue), #002D62); /* Deeper blue gradient */
            color: var(--white);
            border-radius: 20px;
            padding: 50px; /* More padding */
            text-align: center;
            margin-bottom: 80px; /* More space */
            box-shadow: 0 15px 50px rgba(0, 71, 171, 0.3); /* Stronger shadow */
            position: relative;
            overflow: hidden;
        }

        .quick-contact::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 100px;
            height: 100px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
            filter: blur(20px);
        }

        .quick-contact::after {
            content: '';
            position: absolute;
            bottom: -20px;
            right: -20px;
            width: 150px;
            height: 150px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            filter: blur(30px);
        }


        .quick-contact h3 {
            font-family: 'Montserrat', sans-serif; /* Changed font */
            font-size: 2.5rem; /* Larger heading */
            font-weight: 700;
            margin-bottom: 20px; /* More space */
            text-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .quick-contact p {
            font-size: 1.2rem; /* Slightly larger */
            margin-bottom: 40px; /* More space */
            opacity: 0.95;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .quick-contact-buttons {
            display: flex;
            justify-content: center;
            gap: 25px; /* More gap */
            flex-wrap: wrap;
        }

        .quick-btn {
            background: rgba(255,255,255,0.15); /* More subtle translucent background */
            color: var(--white);
            padding: 18px 30px; /* More padding */
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.05rem;
        }

        .quick-btn:hover {
            background: var(--white);
            color: var(--primary-blue);
            transform: translateY(-3px); /* More pronounced lift */
            box-shadow: 0 8px 30px rgba(0,0,0,0.3);
            border-color: var(--white);
        }

        .quick-btn:active {
            transform: translateY(0);
        }

        @media (max-width: 992px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .contact-main {
                margin: -60px auto 60px;
            }
            .contact-hero h1 {
                font-size: 3rem;
            }
            .section-header h2 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            .contact-hero h1 {
                font-size: 2.5rem;
            }
            .contact-hero p {
                font-size: 1.1rem;
            }
            .contact-card,
            .contact-form-card,
            .full-width-section,
            .quick-contact {
                padding: 30px; /* Adjust padding for smaller screens */
            }
            
            .form-row {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .hours-grid {
                grid-template-columns: 1fr;
            }
            
            .quick-contact-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .quick-btn {
                width: 100%;
                max-width: 300px;
            }

            .card-header h3 {
                font-size: 1.5rem;
            }
            .card-icon {
                width: 55px;
                height: 55px;
                margin-right: 15px;
            }
            .card-icon i {
                font-size: 1.3rem;
            }

            .section-header h2 {
                font-size: 2rem;
            }
            .section-header p {
                font-size: 1rem;
            }
            .social-grid {
                grid-template-columns: 1fr;
            }
            .office-hours h3 {
                font-size: 1.3rem;
            }
            .quick-contact h3 {
                font-size: 2rem;
            }
            .quick-contact p {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .contact-hero {
                padding: 60px 0;
            }
            .contact-hero h1 {
                font-size: 2rem;
            }
            .contact-hero p {
                font-size: 0.95rem;
            }
            .contact-main {
                margin: -40px auto 40px;
            }
            .contact-card,
            .contact-form-card,
            .full-width-section,
            .quick-contact {
                padding: 20px;
            }
            .card-header {
                margin-bottom: 30px;
            }
            .card-icon {
                width: 50px;
                height: 50px;
            }
            .card-icon i {
                font-size: 1.1rem;
            }
            .card-header h3 {
                font-size: 1.3rem;
            }
            .form-group label {
                font-size: 0.9rem;
            }
            .form-group input,
            .form-group textarea,
            .form-group select {
                padding: 12px 15px;
                font-size: 0.9rem;
            }
            .submit-btn {
                padding: 15px 20px;
                font-size: 1rem;
            }
            .contact-info-item {
                padding: 15px;
            }
            .contact-info-item .icon {
                width: 40px;
                height: 40px;
                margin-right: 10px;
            }
            .contact-info-item .icon i {
                font-size: 1rem;
            }
            .contact-info-item .details h4 {
                font-size: 1rem;
            }
            .contact-info-item .details p {
                font-size: 0.85rem;
            }
            .section-header h2 {
                font-size: 1.8rem;
            }
            .section-header p {
                font-size: 0.9rem;
            }
            .social-item {
                padding: 20px;
            }
            .social-item .social-icon {
                width: 45px;
                height: 45px;
                margin-right: 10px;
            }
            .social-item .social-icon i {
                font-size: 1.2rem;
            }
            .social-item .social-details h4 {
                font-size: 1rem;
            }
            .social-item .social-details p {
                font-size: 0.8rem;
            }
            .office-hours {
                padding: 25px;
            }
            .office-hours h3 {
                font-size: 1.2rem;
            }
            .hours-item {
                padding: 12px;
            }
            .hours-item .day, .hours-item .time {
                font-size: 0.9rem;
            }
            .map-section {
                padding: 30px;
            }
            .map-placeholder {
                height: 300px;
            }
            .quick-contact h3 {
                font-size: 1.8rem;
            }
            .quick-contact p {
                font-size: 0.95rem;
            }
            .quick-btn {
                padding: 12px 20px;
                font-size: 0.95rem;
            }
        }

        .success-message {
            background: var(--success-bg);
            color: var(--success-text);
            padding: 15px 20px;
            border-radius: 12px;
            border-left: 4px solid var(--success-border);
            margin-bottom: 20px;
            display: none;
            font-weight: 500;
        }

        .loading {
            opacity: 0.6; /* Slightly more opaque loading state */
            pointer-events: none;
        }
    </style>
</head>
<body>
    <?= $this->include('template/header'); ?>

    <div class="contact-hero">
        <div class="contact-hero-content">
            <h1>Hubungi Kami</h1>
            <p>Tim profesional kami siap membantu Anda dengan segala pertanyaan, saran, dan kebutuhan informasi. Kami berkomitmen memberikan respons yang cepat dan solusi terbaik.</p>
        </div>
    </div>

    <div class="container">
        <div class="contact-main">
            <div class="contact-grid">
                <div class="contact-form-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Kirim Pesan</h3>
                    </div>

                    <div class="success-message" id="successMessage">
                        <i class="fas fa-check-circle"></i> Pesan Anda telah berhasil dikirim! Tim kami akan merespons dalam 1-2 jam.
                    </div>

                    <form id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">Nama Depan</label>
                                <input type="text" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Nama Belakang</label>
                                <input type="text" id="lastName" name="lastName" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="category">Kategori</label>
                                <select id="category" name="category" required>
                                    <option value="">Pilih kategori...</option>
                                    <option value="news-tip">Tips Berita</option>
                                    <option value="correction">Koreksi Berita</option>
                                    <option value="partnership">Kerjasama</option>
                                    <option value="advertising">Iklan</option>
                                    <option value="technical">Masalah Teknis</option>
                                    <option value="feedback">Kritik & Saran</option>
                                    <option value="other">Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="priority">Prioritas</label>
                                <select id="priority" name="priority" required>
                                    <option value="">Pilih prioritas...</option>
                                    <option value="low">Rendah</option>
                                    <option value="normal">Normal</option>
                                    <option value="high">Tinggi</option>
                                    <option value="urgent">Mendesak</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" placeholder="Deskripsikan pertanyaan atau masalah Anda secara detail..." required></textarea>
                        </div>

                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </form>
                </div>

                <div class="contact-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Informasi Kontak</h3>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="details">
                            <h4>Alamat Kantor</h4>
                            <p>Jl. Sudirman No. 123, Lt. 15<br>Jakarta Pusat, DKI Jakarta 10220<br>Indonesia</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="details">
                            <h4>Telepon</h4>
                            <p>
                                <a href="tel:+622112345678">+62 21 1234 5678</a><br>
                                <a href="tel:+622112345679">+62 21 1234 5679</a> (Redaksi)
                            </p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="details">
                            <h4>Email</h4>
                            <p>
                                <a href="mailto:info@portalberita.com">info@portalberita.com</a><br>
                                <a href="mailto:redaksi@portalberita.com">redaksi@portalberita.com</a><br>
                                <a href="mailto:iklan@portalberita.com">iklan@portalberita.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-fax"></i>
                        </div>
                        <div class="details">
                            <h4>Fax</h4>
                            <p>+62 21 1234 5680</p>
                        </div>
                    </div>

                    <div class="office-hours">
                        <h3>Jam Operasional</h3>
                        <div class="hours-grid">
                            <div class="hours-item">
                                <span class="day">Senin - Jumat</span>
                                <span class="time">08:00 - 17:00</span>
                            </div>
                            <div class="hours-item">
                                <span class="day">Sabtu</span>
                                <span class="time">08:00 - 12:00</span>
                            </div>
                            <div class="hours-item">
                                <span class="day">Minggu</span>
                                <span class="time">Tutup</span>
                            </div>
                            <div class="hours-item">
                                <span class="day">Hari Libur</span>
                                <span class="time">Tutup</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="quick-contact">
                <h3>Butuh Bantuan Segera?</h3>
                <p>Tim customer service kami siap membantu Anda melalui berbagai saluran komunikasi</p>
                <div class="quick-contact-buttons">
                    <a href="https://wa.me/697776663338" class="quick-btn">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                    <a href="tel:+697776663338" class="quick-btn">
                        <i class="fas fa-phone"></i> Telepon
                    </a>
                    <a href="mailto:Radit@portalberita.com" class="quick-btn">
                        <i class="fas fa-envelope"></i> Email
                    </a>
                </div>
            </div>

            <div class="full-width-section">
                <div class="section-header">
                    <h2>Ikuti Kami</h2>
                    <p>Dapatkan update terbaru dan berinteraksi dengan kami melalui media sosial</p>
                </div>

                <div class="social-grid">
                    <a href="#" class="social-item">
                        <div class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="social-details">
                            <h4>Facebook</h4>
                            <p>@portalberita - 150K followers</p>
                        </div>
                    </a>

                    <a href="#" class="social-item">
                        <div class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="social-details">
                            <h4>Twitter</h4>
                            <p>@portalberita - 85K followers</p>
                        </div>
                    </a>

                    <a href="#" class="social-item">
                        <div class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="social-details">
                            <h4>Instagram</h4>
                            <p>@portalberita - 120K followers</p>
                        </div>
                    </a>

                    <a href="#" class="social-item">
                        <div class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <div class="social-details">
                            <h4>YouTube</h4>
                            <p>Portal Berita TV - 95K subscribers</p>
                        </div>
                    </a>

                    <a href="#" class="social-item">
                        <div class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                        <div class="social-details">
                            <h4>LinkedIn</h4>
                            <p>Portal Berita Official - 45K followers</p>
                        </div>
                    </a>

                    <a href="#" class="social-item">
                        <div class="social-icon">
                            <i class="fab fa-telegram-plane"></i>
                        </div>
                        <div class="social-details">
                            <h4>Telegram</h4>
                            <p>Portal Berita News - 75K members</p>
                        </div>
                    </a>
                </div>
            </div>
            
            </div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = this;
            const submitBtn = form.querySelector('.submit-btn');
            const successMessage = document.getElementById('successMessage');
            const originalBtnText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
            submitBtn.disabled = true;
            form.classList.add('loading');
            
            // Simulate form submission
            setTimeout(() => {
                // Show success message
                successMessage.style.display = 'block';
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                // Reset form
                form.reset();
                
                // Reset button
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
                form.classList.remove('loading');
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 5000);
                
            }, 2000);
        });

        // Add smooth scrolling for anchor links (if you add internal links later)
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
    </script>
</body>
</html>