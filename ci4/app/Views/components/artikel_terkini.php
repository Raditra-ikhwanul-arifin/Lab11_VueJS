<?= $this->include('template/header'); ?>
<style>
    /* Variabel CSS untuk konsistensi tema */
    :root {
        --primary-navy: #1A237E; /* Deep, professional navy blue */
        --primary-blue: #283593; /* Slightly lighter, vibrant blue */
        --primary-light-blue: #3949AB; /* A softer, medium blue */
        --secondary-gray: #90A4AE; /* Muted cool gray for secondary elements */
        --off-white: #F4F6F9; /* Slightly off-white background for softness, matching body */
        --dark-text: #263238; /* Darker, sophisticated text color, matching body */
        --border-light: #CFD8DC; /* Light gray-blue border, matching body */
        --accent-orange: #FFAB40; /* Warm, inviting orange/amber for accent */
        --divider-red: #EF5350; /* A dynamic, clear red for the divider */

        --transition-speed: 0.35s ease-in-out; /* Global transition speed for smoothness */
        --box-shadow-light: 0 4px 15px rgba(0, 0, 0, 0.05); /* Lighter, more diffused shadow */
        --box-shadow-medium: 0 8px 25px rgba(0, 0, 0, 0.1); /* Medium shadow */
        --box-shadow-strong: 0 15px 40px rgba(0, 0, 0, 0.15); /* Stronger shadow for hover effects */
        --border-radius-base: 10px; /* Base border-radius for aesthetic consistency */
        
        /* RGB values for rgba() usage */
        --primary-blue-rgb: 40, 53, 147;
    }

    /* Base styles for the latest articles container */
    .latest-articles-container {
        background-color: var(--off-white); /* Assuming --card-bg should be off-white for the container */
        padding: 2.5rem; /* Increased padding */
        border-radius: var(--border-radius-base);
        box-shadow: var(--box-shadow-light); /* Soft shadow for the container */
        margin-bottom: 2rem; /* Space below the container */
        border: 1px solid var(--border-light); /* Subtle border */
    }

    /* Styling for the latest articles title */
    .latest-articles-title {
        font-family: 'Lora', serif; /* Lora font for titles */
        font-size: 2rem; /* Larger title font size */
        font-weight: 700;
        color: var(--primary-navy); /* Title color */
        margin-bottom: 1.8rem; /* Increased bottom margin */
        position: relative;
        padding-bottom: 1rem; /* Increased bottom padding */
        text-align: left; /* Left-aligned title */
        letter-spacing: 0.5px; /* Slight letter spacing */
        text-shadow: 1px 1px 3px rgba(0,0,0,0.05); /* Subtle text shadow */
    }

    /* Underline effect for the title */
    .latest-articles-title::after {
        content: '';
        display: block;
        width: 70px; /* Longer underline width */
        height: 5px; /* Thicker underline */
        background-color: var(--primary-blue); /* Underline color */
        border-radius: 3px;
        position: absolute;
        left: 0;
        bottom: 0;
    }

    /* Styling for the list of latest articles */
    .latest-article-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid; /* Grid layout for multi-column display */
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* 3 columns on desktop, responsive */
        gap: 1.5rem; /* Increased gap between article items */
    }

    /* Styling for individual latest article items (cards) */
    .latest-article-item {
        background-color: white; /* Article card background color, assuming it should be white */
        padding: 1.5rem; /* Padding for the article card */
        border-radius: var(--border-radius-base);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); /* Soft shadow for the card */
        transition: transform var(--transition-speed), box-shadow var(--transition-speed);
        border: 1px solid var(--border-light); /* Subtle border */
        display: flex; /* Flexbox for internal layout */
        flex-direction: column;
        justify-content: space-between; /* To push category to the bottom */
    }

    /* Hover effect for article cards */
    .latest-article-item:hover {
        transform: translateY(-8px); /* More dramatic lift effect on hover */
        box-shadow: var(--box-shadow-medium); /* Stronger shadow on hover */
    }

    /* Styling for article links */
    .latest-article-item a {
        text-decoration: none;
        color: inherit; /* Inherit text color from parent */
        display: block; /* Make the entire card area clickable */
    }

    /* Styling for article titles within cards */
    .latest-article-item h4 {
        font-family: 'Source Sans 3', sans-serif; /* Source Sans 3 font for article titles */
        font-size: 1.25rem; /* Article title font size */
        font-weight: 600;
        color: var(--dark-text); /* Article title color */
        margin-top: 0;
        margin-bottom: 0.8rem; /* Increased bottom margin */
        line-height: 1.4;
        transition: color var(--transition-speed); /* Color transition on hover */
    }

    /* Hover effect for article titles */
    .latest-article-item h4:hover {
        color: var(--primary-blue); /* Hover color for article titles */
    }

    /* Container for meta and category to align them */
    .latest-article-footer {
        display: flex;
        flex-direction: column; /* Selalu tumpuk vertikal */
        gap: 0.5rem; /* Jarak antar elemen di footer */
        margin-top: 1rem; /* Space from content above */
        align-items: flex-start; /* Rata kiri */
    }

    /* Styling for article meta information (date) */
    .latest-article-meta {
        font-size: 0.9rem; /* Meta font size */
        color: var(--secondary-gray); /* Meta text color */
        margin-bottom: 0; /* Pastikan tidak ada margin-bottom tambahan */
    }

    .latest-article-meta span {
        margin-right: 0.5rem; /* Increased right margin */
    }

    /* Styling for article category tags */
    .latest-article-category {
        display: inline-block; /* Allows padding and border-radius */
        background-color: rgba(var(--primary-blue-rgb), 0.1); /* Transparent category background */
        color: var(--primary-blue); /* Category text color */
        padding: 0.3rem 0.8rem; /* Increased padding */
        border-radius: 20px; /* More rounded corners */
        font-size: 0.85rem; /* Slightly larger font size */
        font-weight: 500;
        border: 1px solid rgba(var(--primary-blue-rgb), 0.2);
        transition: background-color var(--transition-speed), color var(--transition-speed);
        margin-top: 0; /* Pastikan tidak ada margin-top tambahan */
    }

    /* Hover effect for category tags */
    .latest-article-category:hover {
        background-color: var(--primary-blue);
        color: white;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .latest-article-list {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); /* 2-3 columns on tablet */
            gap: 1.2rem;
        }

        .latest-articles-container {
            padding: 2rem;
        }

        .latest-articles-title {
            font-size: 1.7rem;
            margin-bottom: 1.4rem;
            padding-bottom: 0.8rem;
        }

        .latest-articles-title::after {
            width: 55px;
            height: 4px;
        }

        .latest-article-item {
            padding: 1.2rem;
        }

        .latest-article-item h4 {
            font-size: 1.1rem;
            margin-bottom: 0.6rem;
        }

        .latest-article-meta {
            font-size: 0.9rem;
        }

        .latest-article-category {
            font-size: 0.85rem;
            padding: 0.35rem 0.9rem;
        }
    }

    @media (max-width: 768px) {
        .latest-article-list {
            grid-template-columns: 1fr; /* 1 column on mobile */
            gap: 1rem;
        }

        .latest-articles-container {
            padding: 1.5rem;
        }

        .latest-articles-title {
            font-size: 1.5rem;
            margin-bottom: 1.2rem;
            padding-bottom: 0.7rem;
        }

        .latest-articles-title::after {
            width: 45px;
            height: 3px;
        }

        .latest-article-item {
            padding: 1rem;
        }

        .latest-article-item h4 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .latest-article-meta {
            font-size: 0.8rem;
        }

        .latest-article-category {
            font-size: 0.75rem;
            padding: 0.2rem 0.6rem;
        }
    }

    /* Menghapus media query untuk sejajar horizontal di desktop */
    /* @media (min-width: 769px) {
        .latest-article-footer {
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
        }
        .latest-article-meta {
            margin-bottom: 0;
        }
        .latest-article-category {
            margin-top: 0;
        }
    } */
</style>

<div class="latest-articles-container">
    <h3 class="latest-articles-title">Artikel Terkini</h3>
    <ul class="latest-article-list">
        <?php if (!empty($artikel)) : ?>
            <?php foreach ($artikel as $row) : ?>
                <li class="latest-article-item">
                    <a href="<?= base_url('/artikel/' . esc($row['slug'])); ?>">
                        <h4><?= esc($row['judul']); ?></h4>
                    </a>
                    <div class="latest-article-footer">
                        <p class="latest-article-meta">
                            Diposting pada: <?= date('d M Y H:i', strtotime($row['created_at'])); ?>
                        </p>
                        <span class="latest-article-category">Kategori: <?= esc($row['nama_kategori'] ?? 'Tidak diketahui'); ?></span>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php else : ?>
            <li class="no-articles-found">Tidak ada artikel terkini yang ditemukan.</li>
        <?php endif; ?>
    </ul>
</div>