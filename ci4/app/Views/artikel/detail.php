<?= $this->include('template/header'); ?>

<!-- Google Fonts & Styling -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
:root {
  --primary: #4361ee;
  --primary-light: #e6f0ff;
  --text-dark: #2c3e50;
  --text-medium: #4a5568;
  --text-light: #718096;
  --border-radius: 12px;
}

body {
  font-family: 'Poppins', sans-serif;
  background-color: #f8fafc;
  margin: 0;
  padding: 0;
  color: var(--text-medium);
  line-height: 1.7;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.article {
  background: #fff;
  margin: 40px 0;
  padding: 40px 0;
}

.article-header {
  text-align: center;
  margin-bottom: 40px;
}

.article-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: var(--text-dark);
  margin-bottom: 15px;
  line-height: 1.3;
}

.article-meta {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px;
  margin-bottom: 10px;
}

.category-badge {
  background: var(--primary-light);
  color: var(--primary);
  padding: 6px 16px;
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.article-content {
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  gap: 40px;
}

.article-image-container {
  flex: 0 0 400px;
  max-width: 100%;
}

.article-image {
  width: 100%;
  height: auto;
  border-radius: var(--border-radius);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  float: left;
  margin-right: 40px;
  margin-bottom: 20px;
  shape-outside: margin-box;
}

.article-text {
  flex: 1;
  min-width: 300px;
  font-size: 1.05rem;
  color: var(--text-medium);
}

.article-text p {
  margin-bottom: 1.5em;
  text-align: justify;
}

@media (max-width: 992px) {
  .article-content {
    flex-direction: column;
    gap: 30px;
  }

  .article-image-container {
    flex: 0 0 auto;
    width: 100%;
    text-align: center;
  }

  .article-image {
    float: none;
    margin-right: 0;
    max-width: 500px;
  }
}

@media (max-width: 768px) {
  .article {
    padding: 30px 0;
    margin: 20px 0;
  }

  .article-title {
    font-size: 1.8rem;
  }

  .article-text {
    font-size: 1rem;
  }

  .article-meta {
    flex-direction: column;
    gap: 10px;
  }
}
</style>

<div class="container">
  <article class="article">
    <div class="article-header">
      <h1 class="article-title"><?= esc($artikel['judul']); ?></h1>
      <div class="article-meta">
        <span class="category-badge">Kategori: <?= esc($artikel['nama_kategori']); ?></span>
      </div>
    </div>

    <div class="article-content">
      <div class="article-image-container">
        <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" alt="<?= esc($artikel['judul']); ?>"
          class="article-image">
      </div>

      <div class="article-text">
        <?= $artikel['isi']; ?>
      </div>
    </div>
  </article>
</div>

<?= $this->include('template/footer'); ?>