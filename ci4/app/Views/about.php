<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Portal Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Source+Sans+3:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Warna yang disesuaikan agar lebih menyambung dengan tema berita modern */
            --primary-navy: #1A237E; /* Deep, professional navy blue (26, 35, 126) */
            --primary-blue: #283593; /* Slightly lighter, vibrant blue (40, 53, 147) */
            --primary-light-blue: #3949AB; /* A softer, medium blue (57, 73, 171) */
            --secondary: #90A4AE; /* Muted cool gray for secondary elements */
            --light: #F4F6F9; /* Slightly off-white background for softness */
            --dark: #263238; /* Darker, sophisticated text color */
            --border: #CFD8DC; /* Light gray-blue border */
            --accent: #FFAB40; /* Warm, inviting orange/amber for accent */
            --divider-color: #EF5350; /* A dynamic, clear red for the divider */
        }

        body {
            font-family: 'Source Sans 3', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.7;
            margin: 0;
            padding: 0;
        }

        /* Header Styles - Tetap sama dengan yang sudah ada */
        header {
            background: linear-gradient(160deg,
                        #11186B 0%,
                        var(--primary-navy) 25%,
                        var(--primary-blue) 65%,
                        var(--primary-light-blue) 100%
            );
            color: white;
            padding: 3.5rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.4);
        }

        header::before {
            content: '';
            position: absolute;
            top: -40%;
            left: -40%;
            width: 140%;
            height: 140%;
            background: radial-gradient(circle at top left, rgba(255, 255, 255, 0.28) 0%, rgba(255, 255, 255, 0) 70%);
            transform: rotate(30deg);
            z-index: 1;
            filter: blur(20px);
            opacity: 0.95;
        }

        header::after {
            content: '';
            position: absolute;
            bottom: -40%;
            right: -40%;
            width: 140%;
            height: 140%;
            background: radial-gradient(circle at bottom right, rgba(0, 0, 0, 0.22) 0%, rgba(0, 0, 0, 0) 70%);
            transform: rotate(-30deg);
            z-index: 1;
            filter: blur(20px);
            opacity: 0.95;
        }

        header .header-content-wrapper {
            position: relative;
            z-index: 2;
        }

        /* Motif garis yang simpel dan full untuk header */
        header .header-content-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                repeating-linear-gradient(45deg,
                    rgba(255, 255, 255, 0.03) 0px,
                    rgba(255, 255, 255, 0.03) 1px,
                    transparent 1px,
                    transparent 20px
                ),
                repeating-linear-gradient(-45deg,
                    rgba(255, 255, 255, 0.03) 0px,
                    rgba(255, 255, 255, 0.03) 1px,
                    transparent 1px,
                    transparent 20px
                );
            background-size: 100% 100%;
            opacity: 1;
            mix-blend-mode: soft-light;
            z-index: 1;
            pointer-events: none;
        }

        header h1 {
            margin: 0;
            font-family: 'Lora', serif;
            font-size: 3.8rem;
            font-weight: 700;
            letter-spacing: 3px;
            position: relative;
            z-index: 2;
            color: white;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
        }

        header p {
            font-family: 'Source Sans 3', sans-serif;
            font-size: 1.25rem;
            margin-top: 1rem;
            opacity: 0.98;
            position: relative;
            z-index: 2;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);
        }

        /* Creative Divider Below Header */
        .header-divider {
            height: 10px;
            background: linear-gradient(90deg, transparent 0%, var(--divider-color) 25%, var(--divider-color) 75%, transparent 100%);
            position: relative;
            z-index: 999;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .header-divider::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: repeating-linear-gradient(45deg,
                rgba(255, 255, 255, 0.15) 0px,
                rgba(255, 255, 255, 0.15) 2px,
                transparent 2px,
                transparent 5px
            );
            opacity: 0.4;
        }

        /* Navigation Styles */
        nav {
            background-color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            padding: 0.8rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 3px solid var(--accent);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 25px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.8rem;
        }

        nav a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            padding: 0.6rem 1.2rem;
            position: relative;
            transition: all 0.3s ease;
            border-radius: 5px;
        }

        nav a:hover {
            color: var(--primary-blue);
            background-color: var(--light);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background-color: var(--primary-blue);
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 80%;
        }

        nav a.active {
            color: white;
            background-color: var(--primary-navy);
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        nav a.active::after {
            display: none;
        }

        /* Main Content Styles */
        #wrapper {
            max-width: 1200px;
            margin: 2.5rem auto;
            padding: 0 25px;
        }

        /* ----- About Page Specific Styles - Simplified ----- */
        .about-section {
            background-color: white;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 2.5rem;
            text-align: center; /* Pusat teks untuk kesan simpel */
        }

        .about-section h2 {
            font-family: 'Lora', serif;
            color: var(--primary-navy);
            font-size: 2.5rem;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 10px;
        }

        .about-section h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--accent);
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .about-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--dark);
            margin-bottom: 1.5rem;
            text-align: center; /* Pusat teks paragraf */
            max-width: 800px; /* Batasi lebar paragraf agar tidak terlalu panjang */
            margin-left: auto;
            margin-right: auto;
        }

        .about-categories {
            margin-top: 2.5rem;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .about-categories .category-item {
            background-color: var(--primary-blue);
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .about-categories .category-item:hover {
            background-color: var(--primary-navy);
            transform: translateY(-3px);
        }

        .about-categories .category-item i {
            font-size: 1.3rem;
        }


        /* Footer Styles - Tetap sama dengan yang sudah ada */
        footer {
            background-color: var(--dark);
            color: var(--light);
            padding: 2.5rem 0;
            text-align: center;
            margin-top: 3rem;
            font-size: 0.95rem;
            border-top: 5px solid var(--primary-navy);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .nav-container {
                gap: 1rem;
                justify-content: space-around;
                padding: 0 15px;
            }

            nav a {
                padding: 0.5rem 0.8rem;
                margin: 0;
            }

            header h1 {
                font-size: 2.5rem;
                letter-spacing: 2px;
            }

            header p {
                font-size: 1.1rem;
            }

            #wrapper {
                margin: 1.5rem auto;
                padding: 0 15px;
            }

            .about-section {
                padding: 2rem;
            }

            .about-section h2 {
                font-size: 2rem;
            }

            .about-section p {
                font-size: 1rem;
            }

            .about-categories .category-item {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }

        @media (max-width: 480px) {
            .nav-container {
                flex-direction: column;
                align-items: center;
            }

            nav a {
                width: 100%;
                text-align: center;
            }

            header h1 {
                font-size: 2rem;
                letter-spacing: 1.5px;
            }

            header p {
                font-size: 1rem;
            }

            .about-categories {
                flex-direction: column;
                align-items: center;
            }

            .about-categories .category-item {
                width: 80%; /* Membuat item kategori lebih lebar di mobile */
            }
        }
    </style>
</head>

<body>
    <?= $this->include('template/header'); ?>

    <div id="container">
        <section id="wrapper">
            <section id="main">
                <div class="about-section">
                    <h2>Tentang Portal Berita Kami</h2>
                    <p>Selamat datang di Portal Berita, platform modern dengan teknologi terkini untuk pengalaman membaca yang lebih baik. Kami berkomitmen untuk menyajikan berita akurat dan relevan, membantu Anda tetap terinformasi tentang dunia di sekitar Anda.</p>
                    <p>Fokus utama kami adalah pada kategori:</p>
                    <div class="about-categories">
                        <div class="category-item">
                            <i class="fas fa-microchip"></i> Teknologi
                        </div>
                        <div class="category-item">
                            <i class="fas fa-futbol"></i> Olahraga
                        </div>
                        <div class="category-item">
                            <i class="fas fa-globe"></i> Umum
                        </div>
                    </div>
                    <p style="margin-top: 2.5rem;">Kami terus berusaha menyajikan informasi yang terdepan dan terpercaya untuk memenuhi kebutuhan informasi Anda.</p>
                </div>
            </section>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?= $this->include('template/footer'); ?>

</body>

</html>