<?= $this->include('template/admin_header'); ?>

<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9fafb; /* Lighter background to complement dark blue */
    margin: 0;
    padding: 0;
}

.form-search {
    display: flex;
    gap: 12px;
    margin-bottom: 25px;
    align-items: center;
    background: #ffffff; /* White background for form */
    padding: 12px 18px; /* Slightly more padding */
    border-radius: 8px; /* Slightly rounded corners */
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05); /* Softer shadow */
    max-width: 900px; /* Increased max-width */
    margin-left: auto;
    margin-right: auto;
}

.form-search input[type="text"] {
    flex: 1;
    padding: 10px 15px;
    border: 1px solid #e5e7eb; /* Add a subtle border */
    border-radius: 6px;
    font-size: 14px;
    background: #fdfdfd; /* Very light background */
    min-width: 200px;
    color: #374151; /* Darker text color */
}

.form-search input[type="text"]:focus {
    outline: none;
    border-color: #4f46e5; /* Highlight on focus with theme color */
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
}

.form-search select {
    padding: 10px 15px;
    border: 1px solid #e5e7eb; /* Add a subtle border */
    border-radius: 6px;
    font-size: 14px;
    background: #fdfdfd; /* Very light background */
    appearance: none;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 14px;
    padding-right: 30px;
    border-left: 1px solid #e5e7eb; /* Consistent border */
    color: #374151; /* Darker text color */
}

.form-search .btn {
    padding: 10px 20px;
    background: #1a237e; /* Darker blue from the header */
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.2s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.form-search .btn:hover {
    background: #0d1259; /* Slightly darker on hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
}

@media (max-width: 640px) {
    .form-search {
        flex-wrap: wrap;
        padding: 10px;
    }

    .form-search select {
        border-left: 1px solid #e5e7eb; /* Keep border consistent */
        border-top: 1px solid #e5e7eb; /* Keep border consistent */
        width: 100%;
        margin-top: 8px;
    }

    .form-search input[type="text"] {
        width: 100%;
    }

    .form-search .btn {
        width: 100%;
        margin-top: 8px;
    }
}

/* --- START: KUNCI PERUBAHAN UNTUK TOMBOL --- */
.btn {
    padding: 10px 18px;
    border-radius: 8px;
    font-size: 14px;
    text-decoration: none;
    font-weight: 600;
    cursor: pointer;
    border: none;
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    /* Penting: Pastikan ini inline-block */
    display: inline-block;
    /* Penting: Pastikan tidak ada margin-bottom default yang mengganggu */
    margin-bottom: 0;
    /* Membantu perataan vertikal jika tinggi tombol berbeda */
    vertical-align: middle;
}

.btn-primary {
    background-color: #1a237e;
    color: white;
}

.btn-primary:hover {
    background-color: #0d1259;
    transform: translateY(-2px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn-danger {
    background-color: #dc3545;
    color: white;
}

.btn-danger:hover {
    background-color: #b02a37;
    transform: translateY(-2px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

/* Target tombol di dalam sel tabel (td) */
.table td {
    /* Mencegah tombol wrap ke baris baru jika ruang sempit */
    white-space: nowrap;
}

.table td .btn {
    /* Beri sedikit jarak antar tombol */
    margin-right: 8px;
    /* Sangat penting: Pastikan tidak ada margin-bottom */
    margin-bottom: 0;
}

/* Hilangkan margin-right pada tombol terakhir di dalam sel */
.table td .btn:last-child {
    margin-right: 0;
}
/* --- END: KUNCI PERUBAHAN UNTUK TOMBOL --- */


.table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.08); /* Slightly more prominent shadow */
    border-radius: 8px;
    overflow: hidden;
    margin-top: 20px;
    max-width: 900px; /* Align with form width */
    margin-left: auto;
    margin-right: auto;
}

.table th,
.table td {
    padding: 15px 20px;
    text-align: left;
    border-bottom: 1px solid #ebf0f5; /* Lighter border for clean look */
    color: #374151; /* Darker text for readability */
}

.table th {
    background-color: #eef2f6; /* Light gray for table header */
    font-weight: 600;
    color: #1a237e; /* Dark blue for header text */
}

.table tbody tr:hover {
    background-color: #f6f8fa; /* Subtle hover effect */
}

.table tfoot th {
    background-color: #eef2f6; /* Consistent with table header */
    font-weight: 600;
    color: #1a237e;
}

/* Updated Pagination Styles */
.pagination {
    display: flex;
    justify-content: center;
    margin: 2.5rem 0; /* Increased margin */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.pagination ul {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    gap: 0.5rem; /* Slightly smaller gap */
}

.pagination li {
    margin: 0;
}

.pagination a,
.pagination span {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 2.5rem; /* Slightly smaller circles */
    height: 2.5rem;
    padding: 0 0.75rem; /* Adjusted padding */
    border-radius: 5px; /* Softened corners */
    text-decoration: none;
    font-weight: 500;
    transition: background-color 0.2s ease, color 0.2s ease, box-shadow 0.2s ease;
    border: 1px solid #d1d5db; /* Softer border color */
    color: #4b5563; /* Default text color */
    background-color: #ffffff; /* White background */
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05); /* Soft shadow */
}

/* Remove specific background colors for each number by default */
.pagination li:nth-child(2) a,
.pagination li:nth-child(2) span,
.pagination li:nth-child(3) a,
.pagination li:nth-child(3) span,
.pagination li:nth-child(4) a,
.pagination li:nth-child(4) span,
.pagination li:nth-child(5) a,
.pagination li:nth-child(5) span {
    background-color: #ffffff; /* Reset to white */
    color: #4b5563; /* Reset to default text color */
    border-color: #d1d5db; /* Reset to default border color */
}

/* Hover effect for unselected numbers */
.pagination li:not(.active) a:hover,
.pagination li:not(.active) span:hover {
    background-color: #e5e7eb; /* Light grey on hover */
    color: #374151; /* Darker text on hover */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Active Page Style */
.pagination .active span {
    font-weight: bold;
    background-color: #1a237e; /* Theme's primary dark blue */
    color: white;
    border-color: #1a237e;
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.2); /* More prominent active shadow */
}

/* Disabled Page Style */
.pagination .disabled span {
    color: #9ca3af;
    cursor: not-allowed;
    background-color: #f3f4f6 !important;
    border-color: #e5e7eb;
    box-shadow: none; /* No shadow for disabled */
}

/* Arrow Buttons */
.pagination .page-item:first-child a,
.pagination .page-item:last-child a {
    background-color: #f3f4f6;
    font-weight: 600;
    color: #4b5563;
    border-radius: 5px; /* Rectangular for arrows */
}

.pagination .page-item:first-child a:hover,
.pagination .page-item:last-child a:hover {
    background-color: #e5e7eb;
    color: #1a237e;
}


/* Mobile Responsiveness */
@media (max-width: 640px) {
    .pagination ul {
        gap: 0.25rem;
    }

    .pagination a,
    .pagination span {
        min-width: 2.25rem;
        height: 2.25rem;
        padding: 0 0.5rem;
        font-size: 0.875rem;
    }
}

/* --- NEW LOADING INDICATOR STYLES --- */
.loading-wrapper {
    position: fixed;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white overlay */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.dots-bouncing {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px; /* Adjust as needed */
}

.dots-bouncing .dot {
    width: 20px;
    height: 20px;
    margin: 0 8px;
    background-color: #1a237e; /* Theme's dark blue */
    border-radius: 50%;
    animation: bounce 1.2s infinite ease-in-out both;
}

.dots-bouncing .dot:nth-child(1) {
    animation-delay: -0.32s;
}

.dots-bouncing .dot:nth-child(2) {
    animation-delay: -0.16s;
}

.dots-bouncing .dot:nth-child(3) {
    animation-delay: 0s;
}

@keyframes bounce {
    0%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-20px);
    }
}
/* --- END NEW LOADING INDICATOR STYLES --- */
</style>


<form id="filterForm" method="get" class="form-search">
  <input type="text" name="q" id="q" placeholder="Cari artikel...">

  <select name="kategori" id="kategori">
    <option value="">Semua Kategori</option>
    <?php foreach ($kategori as $cat): ?>
    <option value="<?= $cat['id_kategori']; ?>">
      <?= esc($cat['nama_kategori']); ?>
    </option>
    <?php endforeach; ?>
  </select>

  <select name="sort" id="sort">
    <option value="">Urutkan</option>
    <option value="judul_asc">Judul A-Z</option>
    <option value="judul_desc">Judul Z-A</option>
  </select>

  <button type="submit" class="btn">Cari</button>
</form>

<div id="loading" class="loading-wrapper">
  <div class="dots-bouncing">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
</div>


<div id="artikelTableContainer"></div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
function loadArtikel(page = 1) {
  $('#loading').show();
  const q = $('#q').val();
  const kategori = $('#kategori').val();
  const sort = $('#sort').val();

  const startTime = new Date().getTime(); // waktu mulai

  $.ajax({
    url: `<?= base_url('admin/artikel') ?>?page=${page}`,
    type: 'GET',
    dataType: 'json',
    data: {
      q,
      kategori,
      sort
    },
    success: function(response) {
      const endTime = new Date().getTime();
      const elapsed = endTime - startTime;
      const delay = Math.max(1000 - elapsed, 0); // sisa waktu agar total tetap 1 detik (minimum)

      setTimeout(() => {
        $('#loading').hide();

        if (response.success) {
          let html = `<table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>`;

          if (response.artikel.length > 0) {
            response.artikel.forEach(row => {
              html += `<tr>
                  <td>${row.id}</td>
                  <td><b>${row.judul}</b><p><small>${row.isi.substring(0, 50)}...</small></p></td>
                  <td>${row.nama_kategori ?? 'Tidak ada'}</td>
                   <td>${row.status == 1 ? 'Publish' : 'Draft'}</td>
                  <td>
                    <a class="btn btn-primary" href="/admin/artikel/edit/${row.id}">Ubah</a>
                    <a class="btn btn-danger" href="/admin/artikel/delete/${row.id}" onclick="return confirm('Yakin menghapus data?');">Hapus</a>
                  </td>
                </tr>`;
            });
          } else {
            html += `<tr><td colspan="5">Belum ada data.</td></tr>`;
          }

          html += `</tbody></table><div class="pagination">${response.pagination}</div>`;
          $('#artikelTableContainer').html(html);
        }
      }, delay);
    },
    error: function(xhr, status, error) {
      const endTime = new Date().getTime();
      const elapsed = endTime - startTime;
      const delay = Math.max(1000 - elapsed, 0);

      setTimeout(() => {
        $('#loading').hide();
        $('#artikelTableContainer').html('<p>Terjadi kesalahan saat memuat data.</p>');
      }, delay);
    }
  });
}


// Trigger pertama kali
$(document).ready(function() {
  loadArtikel();

  $('#filterForm').on('submit', function(e) {
    e.preventDefault();
    loadArtikel();
  });

  // Untuk pagination dinamis
  $(document).on('click', '.pagination a', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');
    const urlParams = new URLSearchParams(href.split('?')[1]);
    const page = urlParams.get('page') ?? 1;

    loadArtikel(page);
  });

});
</script>

<?= $this->include('template/admin_footer'); ?>