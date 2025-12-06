<?php
// api/index.php - final stylish single-page (modal per divisi)

$divisions = [
  'DAL OP' => [
    ['title'=>'SMILE','url'=>'http://smile.bpjsketenagakerjaan.go.id/smile/login.bpjs'],
    ['title'=>'PORTAL DUKCAPIL','url'=>'https://portal-dukcapil.bpjsketenagakerjaan.go.id/'],
    ['title'=>'HCIS','url'=>'https://hcis.bpjsketenagakerjaan.go.id/hcis/sunfish5/ehrm/default.cfm'],
    ['title'=>'SIMFONI','url'=>'http://simfoni.bpjsketenagakerjaan.go.id/'],
    ['title'=>'SMART','url'=>'https://smart.bpjsketenagakerjaan.go.id/#/Login'],
    ['title'=>'SIPATUH','url'=>'https://sipatuh.bpjsketenagakerjaan.go.id/'],
    ['title'=>'E-LEARNING','url'=>'https://elearning.bpjsketenagakerjaan.go.id/login/index.php'],
  ],
  'KEPESERTAAN' => [
    ['title'=>'HCIS','url'=>'https://hcis.bpjsketenagakerjaan.go.id/hcis/sunfish5/ehrm/default.cfm'],
    ['title'=>'SMILE','url'=>'http://smile.bpjsketenagakerjaan.go.id/smile/login.bpjs'],
    ['title'=>'PORTAL DUKCAPIL','url'=>'https://portal-dukcapil.bpjsketenagakerjaan.go.id/'],
    ['title'=>'E-LEARNING','url'=>'https://elearning.bpjsketenagakerjaan.go.id/login/index.php'],
    ['title'=>'SIPP','url'=>'https://sipp.bpjsketenagakerjaan.go.id/'],
    ['title'=>'SIMFONI','url'=>'http://simfoni.bpjsketenagakerjaan.go.id/'],
    ['title'=>'EPS','url'=>'https://eps.bpjsketenagakerjaan.go.id/'],
    ['title'=>'PENDAFTARAN GOJEK (AUTODEBET)','url'=>'https://www.bpjsketenagakerjaan.go.id/bpu/gojek'],
    ['title'=>'KANAL PEMBAYARAN','url'=>'https://www.bpjsketenagakerjaan.go.id/kanal-pembayaran.html'],
  ],
  'WASRI' => [
    ['title'=>'PORTAL DUKCAPIL','url'=>'https://portal-dukcapil.bpjsketenagakerjaan.go.id/'],
    ['title'=>'SIMFONI','url'=>'http://simfoni.bpjsketenagakerjaan.go.id/'],
    ['title'=>'IPROJECT','url'=>'https://iproject.bpjsketenagakerjaan.co.id'],
    ['title'=>'SIPATUH','url'=>'https://sipatuh.bpjsketenagakerjaan.go.id/'],
    ['title'=>'EPS','url'=>'https://eps.bpjsketenagakerjaan.co.id/'],
  ],
  'PELAYANAN' => [
    ['title'=>'SMILE','url'=>'http://smile.bpjsketenagakerjaan.go.id/smile/login.bpjs'],
    ['title'=>'PORTAL DUKCAPIL','url'=>'https://portal-dukcapil.bpjsketenagakerjaan.go.id/'],
    ['title'=>'SIMFONI','url'=>'http://simfoni.bpjsketenagakerjaan.go.id/'],
  ],
];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>BPJS Ketenagakerjaan — Portal Demo</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700;800&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="/assets/css/base.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/hero.css">
  <link rel="stylesheet" href="/assets/css/section.css">
  <link rel="stylesheet" href="/assets/css/card.css">
  <link rel="stylesheet" href="/assets/css/modal.css">
  <link rel="stylesheet" href="/assets/css/about.css">
  <link rel="stylesheet" href="/assets/css/footer.css">
  <link rel="stylesheet" href="/assets/css/responsive.css">
</head>
<body>

<header class="site-header">
  <div class="container d-flex align-items-center justify-content-between">
  <a href="#home" class="brand d-flex align-items-center">
  <img src="/assets/img/logo-bpjs.jpg" alt="BPJS" class="site-logo">
  <div class="ms-2 d-none d-md-block">
    </div>
</a>


    <nav class="nav-links">
      <a href="#home" class="nav-link">Home</a>
      <a href="#about" class="nav-link">Informasi BPJS</a>
      <a href="#divisi" class="nav-link">Divisi</a>
    </nav>
  </div>
</header>

<section id="home" class="hero">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-7">
        <h1 class="hero-title">
          Perlindungan Pekerja,
          <span class="highlight">Masa Depan Terjaga</span>
        </h1>

        <p class="hero-lead">
          Layanan digital modern untuk perlindungan jaminan sosial ketenagakerjaan —
          cepat, aman, dan terpercaya.
        </p>

        <a href="#divisi" class="btn btn-cta">Lihat Divisi & Layanan</a>
      </div>

      <div class="col-lg-5 d-none d-lg-block">
        <div class="hero-img-wrap">
          <img src="/assets/img/hero-people.jpg" alt="Hero" class="hero-img">
        </div>
      </div>

    </div>
  </div>
</section>

<section id="divisi" class="section section--light">
  <div class="container">
    <h2 class="section-title">Divisi</h2>

    <div class="row g-4 mt-3">
      <?php $i=0; foreach($divisions as $name => $links): $i++; ?>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card service-card h-100">
          <div class="card-body d-flex flex-column">
            <div class="icon-wrap mb-3">
              <?php if($name==='DAL OP'): ?>
                <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden><path d="M12 2v2M5.2 4.5l1.4 1.4M2 12h2M19.4 4.5l-1.4 1.4M22 12h-2M6.6 19.5l1.4-1.4M12 20v2M17.4 19.5l-1.4-1.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <?php elseif($name==='KEPESERTAAN'): ?>
                <svg class="icon" viewBox="0 0 24 24" fill="none"><path d="M16 11c1.657 0 3-1.343 3-3S17.657 5 16 5s-3 1.343-3 3 1.343 3 3 3zM8 11c1.657 0 3-1.343 3-3S9.657 5 8 5 5 6.343 5 8s1.343 3 3 3z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 20a6 6 0 0 1 6-6h8a6 6 0 0 1 6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <?php elseif($name==='WASRI'): ?>
                <svg class="icon" viewBox="0 0 24 24" fill="none"><path d="M12 2l7 4v6c0 5-3.314 9-7 10-3.686-1-7-5-7-10V6l7-4z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <?php else: ?>
                <svg class="icon" viewBox="0 0 24 24" fill="none"><path d="M21 15a2 2 0 0 1-2 2H9l-4 3V6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <?php endif; ?>
            </div>

            <h5 class="card-title"><?= $name ?></h5>
            <p class="card-text text-muted mb-4">Ringkasan singkat <?= strtolower($name) ?> untuk membantu pengguna tahu fungsi divisi ini.</p>

            <div class="mt-auto d-flex justify-content-between align-items-center">
              <button class="btn btn-outline-white btn-sm" data-bs-toggle="modal" data-bs-target="#modal-<?= $i ?>">Lihat Link</button>
              <a class="learn-more" href="#about">Tentang →</a>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-<?= $i ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content modal-clean">
            <div class="modal-header border-0">
              <h5 class="modal-title"><?= $name ?> — Daftar Aplikasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <div class="row g-3">
                <?php foreach($links as $l): ?>
                <div class="col-12 col-md-6">
                  <div class="link-card d-flex align-items-start p-3 rounded-3">
                    <div class="link-icon me-3">
                      <div class="mini"><?= strtoupper(substr($l['title'],0,1)) ?></div>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-bold"><?= $l['title'] ?></div>
                      <div class="small text-muted mb-2"><?= $l['url'] ?></div>
                      <a class="btn btn-sm btn-primary" target="_blank" href="<?= $l['url'] ?>">Buka</a>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="modal-footer border-0">
              <button class="btn btn-light btn-sm" data-bs-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="about" class="section section--white">
  <div class="container">

    <h2 class="section-title">Informasi BPJS Ketenagakerjaan</h2>

    <div class="about-card">
      <div class="icon-title">
        <span class="division-icon">🌿</span>
        <h3 class="about-title">Visi</h3>
      </div>

      <p class="about-text">
        <em>
        Mewujudkan Jaminan Sosial Ketenagakerjaan yang Terpercaya, Berkelanjutan dan Menyejahterakan Seluruh Pekerja Indonesia.
        </em>
      </p>
    </div>

    <div class="about-card">
      <div class="icon-title">
        <span class="division-icon">🎯</span>
        <h3 class="about-title">Misi</h3>
      </div>

      <ul class="about-list">
        <li>Melindungi, Melayani & Menyejahterakan Pekerja dan Keluarga.</li>
        <li>Memberikan rasa Aman, Mudah & Nyaman untuk Meningkatkan Produktivitas dan Daya Saing Peserta.</li>
        <li>Memberikan Kontribusi dalam Pembangunan dan Perekonomian Bangsa dengan Tata Kelola Baik.</li>
      </ul>
    </div>

    <div class="division-section">
      <h3 class="division-title">Struktur Divisi</h3>

      <div class="division-grid">

        <div class="division-card">
          <span class="division-icon">🖥️</span>
          <h4>Divisi DAL OP</h4>
          <p>
            Mengelola operasional internal, keamanan data, pemeliharaan server, monitoring aplikasi
            (SMILE, HCIS, SIMFONI), serta memastikan sistem berjalan optimal setiap hari.
          </p>
        </div>

        <div class="division-card">
          <span class="division-icon">📑</span>
          <h4>Divisi Kepesertaan</h4>
          <p>
            Bertanggung jawab atas registrasi peserta, validasi identitas, verifikasi dokumen, dan
            pengelolaan administrasi kepesertaan formal maupun informal.\n
          </p>
        </div>

        <div class="division-card">
          <span class="division-icon">🔍</span>
          <h4>Divisi Wasri</h4>
          <p>
            Melakukan audit kepatuhan, pemeriksaan lapangan, analisis temuan, serta memberikan rekomendasi
            perbaikan kepada unit layanan.
          </p>
        </div>

        <div class="division-card">
          <span class="division-icon">🤝</span>
          <h4>Divisi Pelayanan</h4>
          <p>
            Menangani klaim, pengaduan, layanan publik, edukasi peserta, monitoring SLA, serta meningkatkan
            kualitas layanan berbasis digital.
          </p>
        </div>

      </div>
    </div>

  </div>
</section>


<footer class="site-footer">
  <div class="container text-center">
    <small class="text-muted">© BPJS Ketenagakerjaan — Darmo Surabaya</small>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/script.js"></script>
<main>

    </main>

</body>
</html>
