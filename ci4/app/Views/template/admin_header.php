<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Existing colors for main content - kept as is */
            --primary: #6C63FF;
            --primary-dark: #524BCC;
            --secondary: #A0A0B0;
            --light: #F0F2F5;
            --dark: #333F4F;
            --white: #FFFFFF;
            --border: #E0E2E6;
            --danger: #FF6B6B;
            --danger-dark: #E65A5A;
            --gradient-start: #EAEAEA;
            --gradient-end: #F7F7F7;

            /* Header Specific Colors - REFINED TO MATCH NEW IMAGE */
            --header-text-light:rgb(255, 255, 255);
            --header-accent-red: #DC3545; /* This is the red you are using for danger/logout accents */
            --header-hover-blue: #243763;

            /* New Gradient Colors for Header (based on the image) */
            --header-main-blue-start: #2B408B;
            --header-main-blue-end: #1B2B60;
            --header-stripe-color-subtle: rgba(255, 255, 255, 0.05);
            --header-stripe-size: 25px;

            /* Colors for the thin strip below header - REFINED TO MATCH NEW IMAGE */
            --strip-red-base: #E74C3C;
            --strip-fade-white: #FFFFFF;
            --strip-fade-color-middle: rgba(255, 255, 255, 0.5);

            /* NEW COLORS FOR DASHBOARD BUTTON (BASED ON IMAGE) */
            --dashboard-button-bg: #E8E8FF; /* Light purple from image */
            --dashboard-button-text: #5A50B3; /* Darker purple for text/icon from image */
            --dashboard-button-hover-bg: #D4D4FF; /* Slightly darker purple on hover */
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.7;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: linear-gradient(to bottom right, var(--gradient-start), var(--gradient-end));
        }

        /* Header Styles - REFINED FOR DIAGONAL CROSSING LINES AND GRADIENT */
        header {
            background-color: transparent;
            background-image:
                /* Subtle diagonal lines (left to right) */
                linear-gradient(135deg,
                    transparent calc(50% - 0.5px),
                    var(--header-stripe-color-subtle) 50%,
                    transparent calc(50% + 0.5px)
                ),
                /* Subtle diagonal lines (right to left) */
                linear-gradient(45deg,
                    transparent calc(50% - 0.5px),
                    var(--header-stripe-color-subtle) 50%,
                    transparent calc(50% + 0.5px)
                ),
                /* Main blue gradient */
                linear-gradient(to bottom, var(--header-main-blue-start), var(--header-main-blue-end));

            background-size: var(--header-stripe-size) var(--header-stripe-size), var(--header-stripe-size) var(--header-stripe-size), cover;
            background-repeat: repeat, repeat, no-repeat;
            background-position: 0 0, 0 0, center center;
            background-blend-mode: overlay, overlay, normal;

            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: none;
        }

        .header-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--header-text-light);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.3s ease;
        }

        .logo:hover {
            color: var(--header-accent-red);
        }

        .logo i {
            font-size: 1.8rem;
            color: var(--header-text-light);
        }

        /* Navigation Styles */
        nav {
            display: flex;
            gap: 2rem;
        }

        nav a {
            color: var(--header-text-light);
            text-decoration: none;
            font-weight: 500;
            padding: 0.6rem 0;
            position: relative;
            transition: color 0.3s ease, transform 0.2s ease;
        }

        nav a:hover {
            color: var(--header-accent-red);
            transform: translateY(-2px);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background-color: var(--header-accent-red);
            border-radius: 2px;
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        nav a.text-danger {
            color: var(--header-accent-red); /* Default text color for danger */
            transition: all 0.3s ease; /* Transisi untuk semua properti yang akan berubah pada hover/active */
        }

        /* Updated for Desktop Logout Button: Text turns white when hovered or active, with elegance */
        nav a.text-danger:hover,
        nav a.text-danger:active { /* Added :active for when the button is being pressed */
            color: var(--white); /* Text color becomes white */
            background-color: var(--header-accent-red); /* Background becomes red */
            border-radius: 6px; /* Sedikit lebih membulat */
            padding: 0.6rem 1.2rem; /* Sedikit lebih lebar padding */
            transform: scale(1.05); /* Membesar sedikit */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Bayangan lebih menonjol */
            z-index: 10; /* Untuk memastikan shadow tampil di atas elemen lain jika ada tumpang tindih */
        }

        nav a.text-danger::after {
            display: none; /* Hide the underline effect for the logout button */
        }

        /* Styles for the Dashboard button */
        nav a.header-button {
            background-color: var(--dashboard-button-bg); /* Use the new light purple */
            color: var(--dashboard-button-text); /* Use the new dark purple for text */
            padding: 0.7rem 1.4rem; /* Adjusted padding for better button look */
            border-radius: 50px; /* More rounded corners for pill shape */
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1); /* Softer shadow */
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
        }

        nav a.header-button i { /* Apply the text color to the icon within the button */
            color: var(--dashboard-button-text);
            font-size: 1.1rem; /* Adjust icon size if needed */
        }

        nav a.header-button:hover {
            background-color: var(--dashboard-button-hover-bg); /* Darker purple on hover */
            color: var(--dashboard-button-text); /* Keep text dark purple on hover */
            transform: translateY(-1px); /* Subtle lift */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Slightly stronger shadow on hover */
        }

        nav a.header-button::after {
            /* Hide the underline effect for this button */
            display: none;
        }

        /* Thin Strip below Header */
        .header-strip {
            width: 100%;
            height: 7px;
            position: relative;
            z-index: 999;
            background-image:
                /* White side fades - more aggressive fade */
                linear-gradient(to right,
                    var(--strip-fade-white) 0%,
                    var(--strip-fade-color-middle) 10%,
                    transparent 30%,
                    transparent 70%,
                    var(--strip-fade-color-middle) 90%,
                    var(--strip-fade-white) 100%
                ),
                /* Main red base layer */
                linear-gradient(to right,
                    var(--strip-red-base),
                    var(--strip-red-base)
                );
            background-size: 100% 100%;
            background-position: 0 0;
            background-blend-mode: normal, normal;
        }

        /* Main Content Styles */
        #wrapper {
            flex-grow: 1;
            max-width: 1280px;
            margin: 2.5rem auto;
            padding: 0 25px;
        }

        .card {
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.06);
            border: none;
            margin-bottom: 2.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: var(--white);
            border-bottom: 1px solid var(--border);
            padding: 1.5rem 2rem;
            font-weight: 600;
            font-size: 1.2rem;
            color: var(--dark);
            border-radius: 12px 12px 0 0 !important;
        }

        .card-body {
            padding: 2rem;
        }

        /* Hamburger Menu Styles */
        .hamburger {
            display: none;
            cursor: pointer;
            padding: 8px 12px;
            background: transparent;
            border: 1px solid var(--header-text-light);
            border-radius: 8px;
            font-size: 1.6rem;
            color: var(--header-text-light);
            transition: background 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }

        .hamburger:hover {
            background: var(--header-accent-red);
            color: var(--white);
            border-color: var(--header-accent-red);
        }

        /* Mobile Navigation Styles */
        .mobile-nav {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(135deg, transparent calc(50% - 0.5px), var(--header-stripe-color-subtle) 50%, transparent calc(50% + 0.5px)),
                linear-gradient(45deg, transparent calc(50% - 0.5px), var(--header-stripe-color-subtle) 50%, transparent calc(50% + 0.5px)),
                linear-gradient(to bottom, var(--header-main-blue-start), var(--header-main-blue-end));
            background-size: var(--header-stripe-size) var(--header-stripe-size), var(--header-stripe-size) var(--header-stripe-size), cover;
            background-repeat: repeat, repeat, no-repeat;
            background-position: 0 0, 0 0, center center;
            background-blend-mode: overlay, overlay, normal;

            z-index: 1001;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2.5rem;
            transform: translateX(100%);
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            box-shadow: -5px 0 20px rgba(0, 0, 0, 0.3);
        }

        .mobile-nav.active {
            transform: translateX(0);
        }

        .mobile-nav a {
            font-size: 1.4rem;
            color: var(--header-text-light);
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease; /* Transisi untuk mobile nav links */
            width: 80%;
            text-align: center;
        }

        /* Ensure mobile logout also gets white text on hover/active with elegance */
        .mobile-nav a.text-danger {
            color: var(--header-accent-red); /* Default text color for danger in mobile nav */
            transition: all 0.3s ease; /* Transisi untuk semua properti */
        }
        .mobile-nav a.text-danger:hover,
        .mobile-nav a.text-danger:active {
            background-color: var(--header-accent-red);
            color: var(--white); /* Teks menjadi putih saat merah */
            transform: scale(1.05); /* Membesar sedikit pada mobile juga */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Bayangan lebih menonjol */
        }

        /* Mobile Dashboard Button Styling */
        .mobile-nav a[href="<?= base_url('admin/artikel'); ?>"] { /* Target Dashboard link in mobile nav */
            background-color: var(--dashboard-button-bg);
            color: var(--dashboard-button-text);
            font-weight: 600;
            padding: 0.8rem 1.5rem;
            border-radius: 50px; /* Pill shape for mobile button too */
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        }

        .mobile-nav a[href="<?= base_url('admin/artikel'); ?>"]:hover {
            background-color: var(--dashboard-button-hover-bg);
            color: var(--dashboard-button-text);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .close-btn {
            position: absolute;
            top: 30px;
            right: 30px;
            font-size: 1.8rem;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--header-text-light);
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .close-btn:hover {
            color: var(--header-accent-red);
            transform: rotate(90deg);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            nav {
                display: none;
            }

            .hamburger {
                display: block;
            }

            .mobile-nav {
                display: flex;
            }

            .header-container, #wrapper {
                padding: 0 15px;
            }

            .card-header {
                font-size: 1.1rem;
                padding: 1.2rem 1.5rem;
            }

            .card-body {
                padding: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .logo {
                font-size: 1.4rem;
            }
            .logo i {
                font-size: 1.6rem;
            }
            .hamburger {
                font-size: 1.4rem;
                padding: 6px 10px;
            }
            .mobile-nav a {
                font-size: 1.2rem;
                padding: 0.6rem 1rem;
            }
            .close-btn {
                font-size: 1.5rem;
                top: 20px;
                right: 20px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="header-container">
            <a href="<?= base_url('admin/artikel'); ?>" class="logo">
                <i class="fas fa-newspaper"></i> Admin Portal
            </a>
            <nav>
                <a href="<?= base_url('admin/artikel'); ?>" class="header-button">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a href="<?= base_url('/artikel'); ?>">
                    <i class="fas fa-list"></i> Artikel
                </a>
                <a href="<?= base_url('admin/artikel/add'); ?>">
                    <i class="fas fa-plus"></i> Tambah Artikel
                </a>
                <a href="<?= base_url('user/logout'); ?>" class="text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </nav>
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <div class="header-strip">
    </div>

    <div class="mobile-nav" id="mobileNav">
        <button class="close-btn" id="closeBtn">
            <i class="fas fa-times"></i>
        </button>
        <a href="<?= base_url('admin/artikel'); ?>">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="<?= base_url('/artikel'); ?>">
            <i class="fas fa-list"></i> Artikel
        </a>
        <a href="<?= base_url('admin/artikel/add'); ?>">
            <i class="fas fa-plus"></i> Tambah Artikel
        </a>
        <a href="<?= base_url('user/logout'); ?>" class="text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>

    <div id="wrapper">
        <section id="main">
            <?= $this->renderSection('content') ?>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Hamburger menu functionality
        const hamburger = document.getElementById('hamburger');
        const mobileNav = document.getElementById('mobileNav');
        const closeBtn = document.getElementById('closeBtn');

        hamburger.addEventListener('click', () => {
            mobileNav.classList.add('active');
        });

        closeBtn.addEventListener('click', () => {
            mobileNav.classList.remove('active');
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = mobileNav.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileNav.classList.remove('active');
            });
        });
    </script>
</body>

</html>