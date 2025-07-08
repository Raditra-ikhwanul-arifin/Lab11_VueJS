<?= $this->include('template/header'); ?>

<div class="content-wrapper">
  <!-- Mobile Category Toggle -->
  <button class="mobile-category-toggle" id="mobileCategoryToggle">
    <i class="fas fa-filter"></i> Filter Categories
  </button>

  <!-- Categories Section -->
  <aside class="categories-sidebar" id="categoriesSidebar">
    <h3 class="sidebar-title">Explore Categories</h3>
    <ul class="category-list">
      <?php if ($kategori): foreach ($kategori as $cat): ?>
      <li
        class="category-item <?= (isset($current_category) && $current_category == $cat['id_kategori']) ? 'active' : '' ?>">
        <a href="<?= base_url('/kategori/' . $cat['id_kategori']); ?>" class="category-link">
          <?= $cat['nama_kategori']; ?>
          <?php if (isset($current_category) && $current_category == $cat['id_kategori']): ?>
          <span class="item-count">(<?= count($artikel) ?>)</span>
          <?php endif; ?>
        </a>
      </li>
      <?php endforeach; else: ?>
      <li class="category-item">No categories found</li>
      <?php endif; ?>
    </ul>
  </aside>

  <!-- Main Articles Grid -->
  <main class="articles-grid">
    <?php if ($artikel): foreach ($artikel as $row): ?>
    <article class="article-card">
      <div class="article-meta">
        <span
          class="article-category <?= (isset($current_category) && $current_category == $row['id_kategori']) ? 'active-category' : '' ?>">
          <?= $row['nama_kategori'] ?>
        </span>
        <time class="article-date"><?= date('M d, Y', strtotime($row['created_at'])); ?></time>
      </div>
      <div class="article-image-container">
        <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
          <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>" class="article-image"
            loading="lazy">
        </a>
      </div>
      <div class="article-content">
        <h2 class="article-title">
          <a href="<?= base_url('/artikel/' . $row['slug']); ?>"><?= $row['judul']; ?></a>
        </h2>
        <p class="article-excerpt"><?= substr(strip_tags($row['isi']), 0, 150); ?>...</p>
        <div class="article-footer">
          <a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="read-more-button">
            Read More <span class="arrow">→</span>
          </a>
          <div class="article-actions">
            <button class="action-button" aria-label="Save article">
              <i class="far fa-bookmark"></i>
            </button>
            <button class="action-button" aria-label="Share article">
              <i class="fas fa-share-alt"></i>
            </button>
          </div>
        </div>
      </div>
    </article>
    <?php endforeach; else: ?>
    <div class="no-articles">
      <img src="<?= base_url('/assets/no-articles.svg'); ?>" alt="No articles" class="no-articles-image">
      <h3>No articles found</h3>
      <p>Check back later for new content</p>
      <a href="<?= base_url('/'); ?>" class="browse-button">Browse all articles</a>
    </div>
    <?php endif; ?>
  </main>
</div>

<?= $this->include('template/footer'); ?>

<style>
/* Base Styles */
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

    /* Mapping existing variables to new theme */
    --primary-color: var(--primary-blue); /* Menggunakan primary-blue untuk aksi utama */
    --primary-hover: var(--primary-navy); /* Hover lebih gelap */
    --text-color: var(--dark);
    --light-text: var(--secondary);
    --background: var(--light);
    --card-bg: #ffffff; /* Tetap putih untuk kartu */
    --border-radius: 10px; /* Sedikit lebih membulat dari 12px */
    --box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); /* Shadow yang lebih lembut */
    --transition: all 0.3s ease;
    --active-color: var(--primary-navy); /* Warna aktif yang kuat */
    --active-bg: var(--light); /* Background aktif lebih terang */
    --mobile-breakpoint: 768px;
    --tablet-breakpoint: 992px;
}

body {
    font-family: 'Source Sans 3', sans-serif; /* Menggunakan font dari template atas */
    color: var(--text-color);
    background-color: var(--background);
    line-height: 1.7; /* Sedikit lebih renggang dari 1.6 */
    margin: 0; /* Pastikan tidak ada margin di body */
    padding: 0; /* Pastikan tidak ada padding di body */
}

.content-wrapper {
    max-width: 1200px;
    margin: 2.5rem auto; /* Menyesuaikan margin atas/bawah */
    padding: 0 25px; /* Menyesuaikan padding samping */
    display: grid;
    grid-template-columns: 250px 1fr;
    gap: 2.5rem; /* Menyesuaikan gap */
    position: relative;
}

/* Mobile Category Toggle */
.mobile-category-toggle {
    display: none;
    background-color: var(--primary-blue); /* Warna primer */
    color: white;
    border: none;
    padding: 0.8rem 1.5rem; /* Padding lebih besar */
    border-radius: var(--border-radius);
    font-weight: 600; /* Lebih tebal */
    margin-bottom: 1.5rem; /* Margin bawah lebih besar */
    cursor: pointer;
    align-items: center;
    gap: 0.75rem; /* Gap lebih besar */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Shadow lebih menonjol */
    transition: var(--transition);
}

.mobile-category-toggle:hover {
    background-color: var(--primary-navy); /* Hover lebih gelap */
    transform: translateY(-2px); /* Efek hover minor */
}

.mobile-category-toggle i {
    font-size: 1.1rem; /* Ukuran ikon sedikit lebih besar */
}

/* Categories Sidebar */
.categories-sidebar {
    position: sticky;
    top: 6.5rem; /* Menyesuaikan posisi sticky agar tidak bertabrakan dengan navbar */
    align-self: start;
    height: fit-content;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Tambah transisi box-shadow */
    background-color: var(--card-bg); /* Beri background putih */
    border-radius: var(--border-radius); /* Radius sudut */
    padding: 1.5rem; /* Padding internal */
    box-shadow: var(--box-shadow); /* Tambahkan shadow ke sidebar */
}

.sidebar-title {
    font-size: 1.2rem; /* Ukuran font lebih besar */
    font-weight: 700; /* Lebih tebal */
    margin-bottom: 1.5rem;
    color: var(--primary-navy); /* Warna judul yang kuat */
    padding-bottom: 0.75rem;
    border-bottom: 2px solid var(--border); /* Border lebih tebal */
    text-align: center; /* Pusatkan judul */
}

.category-list {
    display: flex;
    flex-direction: column;
    gap: 0.75rem; /* Gap lebih besar */
    list-style: none;
    padding: 0;
    margin: 0;
}

.category-item {
    transition: var(--transition);
}

.category-item.active {
    position: relative;
}

.category-item.active::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    height: 80%; /* Tinggi penanda aktif */
    width: 4px; /* Lebar penanda aktif */
    background: var(--accent); /* Menggunakan warna accent untuk penanda aktif */
    border-radius: 4px; /* Bulatkan ujungnya */
    box-shadow: 0 0 10px rgba(255, 171, 64, 0.5); /* Shadow pada penanda aktif */
}

.category-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.8rem 1.2rem; /* Padding lebih besar */
    background-color: var(--card-bg);
    border-radius: var(--border-radius);
    color: var(--dark); /* Warna teks dari --dark */
    text-decoration: none;
    font-size: 1rem; /* Ukuran font lebih besar */
    font-weight: 500;
    transition: var(--transition);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05); /* Shadow lebih lembut */
    border: 1px solid var(--border); /* Tambahkan border */
}

.item-count {
    font-size: 0.85rem; /* Ukuran font sedikit lebih besar */
    color: var(--secondary); /* Warna teks dari --secondary */
    margin-left: 0.75rem;
    background-color: var(--light); /* Background untuk count */
    padding: 0.2rem 0.6rem;
    border-radius: 20px;
}

.category-item.active .category-link {
    background-color: var(--primary-light-blue); /* Background aktif warna tema */
    color: white; /* Teks putih saat aktif */
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15); /* Shadow lebih kuat saat aktif */
    transform: translateX(5px); /* Sedikit bergeser saat aktif */
}

.category-item.active .category-link .item-count {
    background-color: rgba(255, 255, 255, 0.2); /* Background count saat aktif */
    color: white;
}

.category-link:hover {
    background-color: var(--light); /* Background hover lebih terang */
    color: var(--primary-blue); /* Warna teks hover */
    transform: translateY(-3px); /* Efek angkat saat hover */
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
}

/* Articles Grid */
.articles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); /* Ukuran kartu sedikit lebih besar */
    gap: 2.5rem; /* Gap lebih besar */
}

.article-card {
    background-color: var(--card-bg);
    border-radius: var(--border-radius);
    overflow: hidden;
    box-shadow: var(--box-shadow);
    transition: var(--transition);
    display: flex;
    flex-direction: column;
    border: 1px solid var(--border); /* Tambahkan border tipis */
}

.article-card:hover {
    transform: translateY(-7px); /* Efek angkat lebih jelas */
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18); /* Shadow lebih kuat saat hover */
}

.article-image-container {
    height: 220px; /* Tinggi gambar sedikit lebih besar */
    overflow: hidden;
    position: relative;
    border-bottom: 1px solid var(--border); /* Border di bawah gambar */
}

.article-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.article-card:hover .article-image {
    transform: scale(1.05); /* Skala gambar lebih besar */
}

.article-content {
    padding: 1.8rem; /* Padding lebih besar */
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.article-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 0.8rem; /* Margin sedikit lebih besar */
    font-size: 0.9rem; /* Ukuran font sedikit lebih besar */
    color: var(--light-text);
}

.article-category {
    background-color: var(--active-bg); /* Menggunakan active-bg */
    color: var(--primary-blue); /* Warna teks yang kontras */
    padding: 0.3rem 0.9rem; /* Padding lebih besar */
    border-radius: 50px;
    font-weight: 600; /* Lebih tebal */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 130px; /* Lebar max sedikit lebih besar */
    border: 1px solid var(--primary-light-blue); /* Border kategori */
}

.article-category.active-category {
    background-color: var(--primary-navy); /* Background kategori aktif lebih gelap */
    color: white;
    font-weight: 700;
    border-color: var(--primary-blue); /* Border kategori aktif */
}

.article-date {
    color: var(--secondary); /* Warna tanggal dari --secondary */
}

.article-title {
    font-size: 1.4rem; /* Ukuran judul lebih besar */
    margin: 0.6rem 0 1.2rem; /* Margin lebih besar */
    font-weight: 700; /* Lebih tebal */
    line-height: 1.3; /* Line height lebih rapat */
    flex-grow: 1;
}

.article-title a {
    color: var(--dark); /* Warna teks judul */
    text-decoration: none;
    transition: var(--transition);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.article-title a:hover {
    color: var(--primary-blue); /* Warna hover judul */
}

.article-excerpt {
    color: var(--light-text);
    margin-bottom: 1.8rem; /* Margin lebih besar */
    font-size: 1rem; /* Ukuran font lebih besar */
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.article-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: auto;
    padding-top: 1rem; /* Padding atas untuk memisahkan dari excerpt */
    border-top: 1px solid var(--border); /* Border di atas footer */
}

.read-more-button {
    display: inline-flex;
    align-items: center;
    color: var(--primary-blue); /* Warna tombol read more */
    font-weight: 600; /* Lebih tebal */
    text-decoration: none;
    transition: var(--transition);
}

.read-more-button:hover {
    color: var(--primary-navy); /* Warna hover tombol read more */
    transform: translateX(2px); /* Efek geser lebih ringan */
}

.read-more-button .arrow {
    margin-left: 0.4rem; /* Margin lebih besar */
    transition: var(--transition);
    font-size: 1.1rem; /* Ukuran panah lebih besar */
}

.read-more-button:hover .arrow {
    transform: translateX(5px); /* Efek geser panah lebih jauh */
}

.article-actions {
    display: flex;
    gap: 0.75rem; /* Gap lebih besar */
}

.action-button {
    background: none;
    border: none;
    color: var(--secondary); /* Warna ikon action */
    cursor: pointer;
    padding: 0.4rem; /* Padding lebih besar */
    font-size: 1.1rem; /* Ukuran ikon lebih besar */
    transition: var(--transition);
    border-radius: 50%; /* Bulatkan tombol */
}

.action-button:hover {
    color: var(--primary-blue); /* Warna hover ikon action */
    background-color: var(--light); /* Background hover ikon */
}

/* No Articles State */
.no-articles {
    grid-column: 1 / -1;
    text-align: center;
    padding: 4rem; /* Padding lebih besar */
    color: var(--light-text);
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: var(--card-bg); /* Background putih */
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
}

.no-articles-image {
    width: 180px; /* Ukuran gambar lebih besar */
    height: 180px;
    margin-bottom: 2rem; /* Margin bawah lebih besar */
    opacity: 0.8; /* Opacity sedikit lebih tinggi */
}

.no-articles h3 {
    font-size: 1.8rem; /* Ukuran judul lebih besar */
    margin-bottom: 0.75rem;
    color: var(--primary-navy); /* Warna judul yang kuat */
}

.no-articles p {
    margin-bottom: 2rem; /* Margin bawah lebih besar */
    max-width: 450px;
    font-size: 1.1rem; /* Ukuran font lebih besar */
}

.browse-button {
    background-color: var(--primary-blue); /* Warna tombol browse */
    color: white;
    padding: 0.8rem 1.8rem; /* Padding lebih besar */
    border-radius: var(--border-radius);
    text-decoration: none;
    font-weight: 600; /* Lebih tebal */
    transition: var(--transition);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.browse-button:hover {
    background-color: var(--primary-navy); /* Warna hover tombol browse */
    transform: translateY(-2px);
}

/* Responsive Design */
@media (max-width: 992px) {
    .content-wrapper {
        grid-template-columns: 200px 1fr; /* Lebar sidebar sedikit dikurangi */
        gap: 2rem; /* Gap menyesuaikan */
        padding: 0 20px;
    }

    .articles-grid {
        grid-template-columns: repeat(auto-fill, minmax(290px, 1fr)); /* Ukuran kartu sedikit disesuaikan */
        gap: 2rem;
    }

    .article-image-container {
        height: 200px;
    }

    .article-title {
        font-size: 1.3rem;
    }
}

@media (max-width: 768px) {
    .content-wrapper {
        grid-template-columns: 1fr;
        padding: 0 1rem;
        margin: 1.5rem auto; /* Mengurangi margin vertikal */
    }

    .mobile-category-toggle {
        display: flex;
        width: fit-content; /* Lebar sesuai konten */
        margin-left: auto;
        margin-right: auto; /* Pusatkan tombol toggle */
    }

    .categories-sidebar {
        /* Mobile sidebar, fungsionalitasnya tetap sama */
        top: 0; /* Pastikan dari paling atas */
        height: 100vh;
        width: 250px; /* Lebar sidebar di mobile */
        padding: 1rem; /* Padding internal dikurangi */
        box-shadow: 4px 0 15px rgba(0, 0, 0, 0.2);
    }

    .sidebar-title {
        font-size: 1.1rem;
        margin-top: 1.5rem; /* Memberi ruang di atas */
        text-align: left; /* Biarkan judul ke kiri di sidebar mobile */
    }

    .category-link {
        padding: 0.6rem 0.8rem;
        font-size: 0.9rem;
    }

    .articles-grid {
        grid-template-columns: 1fr; /* Satu kolom untuk mobile */
        gap: 1.5rem; /* Gap antar artikel */
    }

    .article-image-container {
        height: 160px; /* Tinggi gambar di mobile */
    }

    .article-content {
        padding: 1.2rem; /* Padding konten dikurangi */
    }

    .article-title {
        font-size: 1.15rem;
        margin: 0.4rem 0 0.8rem;
    }

    .article-excerpt {
        font-size: 0.9rem;
        margin-bottom: 1.2rem;
    }

    .article-footer {
        padding-top: 0.8rem;
    }

    .read-more-button {
        font-size: 0.95rem;
    }

    .action-button {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .article-footer {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }

    .article-actions {
        width: 100%;
        justify-content: flex-end;
    }

    .no-articles h3 {
        font-size: 1.3rem;
    }

    .no-articles p {
        font-size: 0.95rem;
    }

    .browse-button {
        padding: 0.6rem 1.2rem;
        font-size: 0.9rem;
    }
}
</style>

<script>
// Mobile category sidebar toggle
const mobileCategoryToggle = document.getElementById('mobileCategoryToggle');
const categoriesSidebar = document.getElementById('categoriesSidebar');
const overlay = document.createElement('div');
overlay.className = 'sidebar-overlay';

// Create overlay element
overlay.style.position = 'fixed';
overlay.style.top = '0';
overlay.style.left = '0';
overlay.style.width = '100%';
overlay.style.height = '100%';
overlay.style.backgroundColor = 'rgba(0,0,0,0.5)';
overlay.style.zIndex = '999';
overlay.style.opacity = '0';
overlay.style.pointerEvents = 'none';
overlay.style.transition = 'opacity 0.3s ease';
document.body.appendChild(overlay);

mobileCategoryToggle.addEventListener('click', () => {
  categoriesSidebar.classList.toggle('active');
  if (categoriesSidebar.classList.contains('active')) {
    overlay.style.opacity = '1';
    overlay.style.pointerEvents = 'auto';
    document.body.style.overflow = 'hidden';
  } else {
    overlay.style.opacity = '0';
    overlay.style.pointerEvents = 'none';
    document.body.style.overflow = '';
  }
});

overlay.addEventListener('click', () => {
  categoriesSidebar.classList.remove('active');
  overlay.style.opacity = '0';
  overlay.style.pointerEvents = 'none';
  document.body.style.overflow = '';
});

// Close sidebar when clicking on a category link in mobile view
const categoryLinks = document.querySelectorAll('.category-link');
categoryLinks.forEach(link => {
  link.addEventListener('click', () => {
    if (window.innerWidth <= 768) {
      categoriesSidebar.classList.remove('active');
      overlay.style.opacity = '0';
      overlay.style.pointerEvents = 'none';
      document.body.style.overflow = '';
    }
  });
});

// Handle window resize
window.addEventListener('resize', () => {
  if (window.innerWidth > 768) {
    categoriesSidebar.classList.remove('active');
    overlay.style.opacity = '0';
    overlay.style.pointerEvents = 'none';
    document.body.style.overflow = '';
  }
});
</script>