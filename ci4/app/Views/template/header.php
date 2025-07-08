<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
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

        /* Header Styles */
        header {
            /* Gradasi warna yang LEBIH BAGUS: Menambahkan color stop dan sedikit penyesuaian */
            background: linear-gradient(160deg, /* Sudut sedikit diubah untuk dinamika */
                        #11186B 0%, /* Lebih gelap di awal untuk kedalaman */
                        var(--primary-navy) 25%, /* Transisi ke navy */
                        var(--primary-blue) 65%, /* Dominasi warna biru utama */
                        var(--primary-light-blue) 100% /* Terakhir lebih cerah */
            );
            color: white;
            padding: 3.5rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.4); /* Shadow sedikit lebih dalam */
        }
        
        header::after {
            content: '';
            position: absolute;
            bottom: -40%;
            right: -40%;
            width: 140%;
            height: 140%;
            background: radial-gradient(circle at bottom right, rgba(0, 0, 0, 0.22) 0%, rgba(0, 0, 0, 0) 70%); /* Opasitas hitam sedikit lebih tinggi */
            transform: rotate(-30deg); /* Rotasi lebih kuat */
            z-index: 1;
            filter: blur(20px);
            opacity: 0.95;
        }

        /* MODIFIED: Tiga lapisan pola garis diagonal yang LEBIH KREATIF DAN ESTETIK, selaras gradasi */
        header .header-content-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Tiga lapisan pola garis diagonal yang sangat halus dan harmonis */
            background:
                /* Lapisan 1: Garis tebal, gelap, menyatu dengan primary-navy */
                repeating-linear-gradient(45deg,
                    rgba(26, 35, 126, 0.08) 0px, /* primary-navy dengan opasitas rendah */
                    rgba(26, 35, 126, 0.08) 2px, /* Ketebalan garis */
                    transparent 2px,
                    transparent 25px /* Jarak antar garis */
                ),
                /* Lapisan 2: Garis sedang, lebih terang, sudut berbeda, menyatu dengan primary-blue */
                repeating-linear-gradient(-60deg,
                    rgba(40, 53, 147, 0.07) 0px, /* primary-blue dengan opasitas rendah */
                    rgba(40, 53, 147, 0.07) 1.5px,
                    transparent 1.5px,
                    transparent 15px
                ),
                /* Lapisan 3: Garis sangat tipis, paling terang, sudut sangat berbeda, menyatu dengan primary-light-blue */
                repeating-linear-gradient(90deg, /* Garis vertikal */
                    rgba(57, 73, 171, 0.05) 0px, /* primary-light-blue dengan opasitas sangat rendah */
                    rgba(57, 73, 171, 0.05) 1px,
                    transparent 1px,
                    transparent 10px
                );
            background-size: 100% 100%;
            opacity: 1;
            mix-blend-mode: soft-light; /* Tetap soft-light untuk integrasi yang paling halus */
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
            z-index: 2; /* Memastikan teks di atas */
            color: white;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
        }

        header p {
            font-family: 'Source Sans 3', sans-serif;
            font-size: 1.25rem;
            margin-top: 1rem;
            opacity: 0.98;
            position: relative;
            z-index: 2; /* Memastikan teks di atas */
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);
        }

        /* Creative Divider Below Header (tidak diubah) */
        .header-divider {
            height: 10px; /* Thickness of the divider */
            background: linear-gradient(90deg, transparent 0%, var(--divider-color) 25%, var(--divider-color) 75%, transparent 100%);
            position: relative;
            z-index: 999;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        /* Subtle wavy/patterned effect on the divider (tidak diubah) */
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

        /* Default active state for general navigation links */
        nav a.active {
            color: white; 
            background-color: var(--primary-navy); 
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        nav a.active::after {
            display: none;
        }

        /* Styles for the Dashboard button to precisely match the image's purple and elegance */
        nav a.dashboard-button {
            background-color: #CCCCFF; /* Light lavender purple from your image (approx. RGB: 204, 204, 255) */
            color: #4C4C70; /* Darker text color from your image (approx. RGB: 76, 76, 112) */
            padding: 12px 25px; /* Consistent padding */
            border-radius: 30px; /* Highly rounded corners */
            display: inline-flex; /* Align icon and text */
            align-items: center; /* Vertically align icon and text */
            gap: 10px; /* Space between icon and text */
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Softer, more elegant shadow */
            transition: all 0.3s ease;
            border: none; /* No border */
        }

        nav a.dashboard-button:hover {
            background-color: #D6D6FF; /* Slightly lighter on hover for a subtle effect */
            color: #4C4C70; /* Keep the dark text color on hover */
            transform: translateY(-1px); /* Slight, elegant lift */
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15); /* Slightly more prominent shadow on hover */
        }

        nav a.dashboard-button i {
            font-size: 1.2em; /* Adjust icon size if needed */
            color: #8C8CFF; /* A slightly darker shade of the button's background for the icon */
        }

        /* Ensure active state maintains the elegant look for the dashboard button specifically */
        nav a.dashboard-button.active {
            background-color: #CCCCFF; /* Keep the same elegant purple for active state */
            color: #4C4C70; /* Keep the dark text color for active state */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08); /* More subtle active shadow */
        }


        /* Main Content Styles (tidak diubah) */
        #wrapper {
            max-width: 1200px;
            margin: 2.5rem auto;
            padding: 0 25px;
        }

        /* Footer Styles (tidak diubah) */
        footer {
            background-color: var(--dark);
            color: var(--light);
            padding: 2.5rem 0;
            text-align: center;
            margin-top: 3rem;
            font-size: 0.95rem;
            border-top: 5px solid var(--primary-navy);
        }

        /* Responsive Styles (tidak diubah) */
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
        }
    </style>
</head>

<body>
    <div id="container">
        <header>
            <div class="header-content-wrapper">
                <h1><i class="fas fa-newspaper"></i> Portal Berita</h1>
                <p>Sumber informasi terkini dan terpercaya</p>
            </div>
        </header>

        <div class="header-divider"></div>

        <nav>
            <div class="nav-container">
                <a href="<?= base_url('/'); ?>">
                    <i class="fas fa-home"></i> Home
                </a>
                <a href="<?= base_url('/artikel'); ?>">
                    <i class="fas fa-newspaper"></i> Artikel
                </a>
                <a href="<?= base_url('/about'); ?>">
                    <i class="fas fa-info-circle"></i> About
                </a>
                <a href="<?= base_url('/contact'); ?>">
                    <i class="fas fa-envelope"></i> Kontak
                </a>
                <a href="<?= base_url('admin/artikel'); ?>" class="active dashboard-button">
                    <i class="fas fa-tachometer-alt"></i> Dashboard Admin
                </a>
            </div>
        </nav>

        <section id="wrapper">
            <section id="main">
                <?php if (isset($this->renderSection)) echo $this->renderSection('content') ?>
            </section>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>