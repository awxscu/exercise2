<?php
/* ================================================================
   TEKNIK ELEKTRO – FTMM UNIVERSITAS AIRLANGGA
   includes/sections.php
   Berisi semua konten section halaman sebagai fungsi PHP
================================================================ */

/* ─── DATA PRODI ─── */
$prodi = [
  'nama'        => 'Teknik Elektro',
  'fakultas'    => 'Fakultas Teknologi Maju dan Multidisiplin',
  'universitas' => 'Universitas Airlangga',
  'gelar'       => 'Sarjana Teknik (S.T.)',
  'durasi'      => '4 Tahun (8 Semester)',
  'pelaksanaan' => 'Purnawaktu · Di Dalam Kampus',
  'penerimaan'  => 'Juli – Setiap Tahun',
  'lokasi'      => 'Gedung Nano, Kampus C UNAIR, Surabaya',
  'akreditasi'  => 'BAN-PT',
  'sk_link'     => 'https://drive.google.com/uc?export=download&id=1iXBWOPg_79FW8dhxQNKmvJULHCWt_0bm',
  'daftar_link' => 'http://www.ppmb.unair.ac.id',
  'email'       => 'info@ftmm.unair.ac.id',
  'telp'        => '+62 881-0360-00830',
];

$peminatan = [
  [
    'badge' => 'Peminatan I',
    'judul' => 'Teknik Sistem Tenaga',
    'desc'  => 'Berfokus pada pembangkitan, transmisi, distribusi, dan manajemen energi listrik skala besar. Mahasiswa mendalami proteksi sistem, kualitas daya, dan integrasi energi terbarukan ke dalam jaringan listrik modern.',
  ],
  [
    'badge' => 'Peminatan II',
    'judul' => 'Teknik Sistem Pengaturan',
    'desc'  => 'Mempelajari perancangan sistem otomasi, robotika, dan kontrol cerdas berbasis teori kontrol modern. Mahasiswa mengembangkan kemampuan dalam pemodelan, simulasi, dan implementasi sistem kontrol industri.',
  ],
];

$core_topics = [
  'Rangkaian Elektrik',
  'Sistem & Sinyal',
  'Sistem Digital',
  'Elektromagnetik',
  'Elektronika Dasar',
  'Matematika Teknik',
  'Pemrograman Teknik',
];

$breadth_topics = [
  'Teknik Ketenagalistrikan',
  'Sistem Kontrol',
  'Sistem Telekomunikasi',
  'Elektronika Lanjut',
  'Sistem Komputer',
  'Energi Terbarukan',
  'IoT & Embedded Systems',
  'Pemrosesan Sinyal Digital',
];

$karir = [
  'Teknik Ketenagalistrikan',
  'Teknik Kendali & Otomasi',
  'Teknik Telekomunikasi',
  'Teknik Komputer',
  'Elektronika & Instrumentasi',
];

$penelitian = [
  [
    'tanggal' => '10 April 2026',
    'judul'   => 'Lampu Jalan Energi Tanaman: Inovasi Teknologi Hijau',
    'desc'    => 'Peningkatan kebutuhan energi di Indonesia terus meningkat. Inovasi ini menghadirkan sistem penerangan berbasis energi biologis tanaman sebagai solusi hijau berkelanjutan.',
    'link'    => 'https://ftmm.unair.ac.id/lampu-jalan-energi-tanaman-inovasi-teknologi-hijau/',
  ],
  [
    'tanggal' => '10 April 2026',
    'judul'   => 'Optimalisasi Energi Angin: Strategi Menuju Kemandirian Energi',
    'desc'    => 'Energi terbarukan dari angin memiliki potensi sangat melimpah di Indonesia. Penelitian ini memaparkan strategi optimasi untuk memaksimalkan pemanfaatannya secara nasional.',
    'link'    => 'https://ftmm.unair.ac.id/optimalisasi-energi-angin-strategi-menuju-kemandirian-energi/',
  ],
];

$sosial = [
  'IG' => 'http://instagram.com/ftmmunair',
  'YT' => 'https://www.youtube.com/@ftmmunair',
  'TW' => 'http://twitter.com/ftmmunair',
  'IN' => 'https://www.linkedin.com/in/ftmm-universitas-airlangga-8161ab207',
];


/* ================================================================
   FUNGSI RENDER TIAP SECTION
================================================================ */

/* ─── NAVBAR ─── */
function render_navbar() {
  echo '
  <nav>
    <a class="nav-logo" href="#">TE<span>·</span>UNAIR</a>
    <ul class="nav-links">
      <li><a href="#visimisi">Visi &amp; Misi</a></li>
      <li><a href="#deskripsi">Deskripsi</a></li>
      <li><a href="#bidang">Bidang Studi</a></li>
      <li><a href="#karir">Prospek</a></li>
      <li><a href="#akreditasi">Akreditasi</a></li>
    </ul>
  </nav>';
}


/* ─── HERO ─── */
function render_hero(array $prodi) {
  echo '
  <section id="hero">
    <div class="hero-glow-a"></div>
    <div class="hero-glow-b"></div>
    <div class="hero-inner">

      <div class="hero-content reveal">
        <div class="hero-eyebrow">FTMM Universitas Airlangga</div>
        <h1 class="hero-title">
          <span class="line-yellow">Teknik</span>
          <span class="line-white">Elektro</span>
          <span class="line-purple">Inovatif &amp; Unggul</span>
        </h1>
        <p class="hero-desc">
          Program Studi S-1 Teknik Elektro Universitas Airlangga — mencetak insinyur
          bereputasi internasional yang siap berkontribusi nyata bagi kemajuan bangsa.
        </p>
        <div class="hero-cta-group">
          <a href="' . htmlspecialchars($prodi['daftar_link']) . '" target="_blank" class="btn-primary">Daftar Sekarang</a>
          <a href="' . htmlspecialchars($prodi['sk_link']) . '" class="btn-outline">Unduh SK Prodi</a>
        </div>
      </div>

      <div class="hero-stats reveal">
        <div class="stat-card">
          <div class="stat-value">S.T.</div>
          <div class="stat-label">Gelar Lulusan</div>
        </div>
        <div class="stat-card">
          <div class="stat-value">8</div>
          <div class="stat-label">Semester Studi</div>
        </div>
        <div class="stat-card">
          <div class="stat-value">2</div>
          <div class="stat-label">Peminatan Utama</div>
        </div>
        <div class="stat-card">
          <div class="stat-value">BAN-PT</div>
          <div class="stat-label">Terakreditasi</div>
        </div>
      </div>

    </div>
  </section>';
}


/* ─── VISI MISI ─── */
function render_visimisi() {
  echo '
  <section id="visimisi">
    <div class="section-inner">
      <div class="reveal">
        <p class="section-eyebrow">Arah &amp; Nilai</p>
        <h2 class="section-title">Visi &amp; <em>Misi</em></h2>
      </div>
      <div class="vm-grid reveal">

        <div class="vm-card vm-card-visi">
          <div class="vm-icon">🔭</div>
          <h3>Visi</h3>
          <p>
            Menjadi program studi sarjana Teknik Elektro yang
            <strong style="color:var(--yellow)">inovatif, unggul, dan terkemuka</strong>
            tingkat nasional dan internasional serta berperan aktif dalam usaha
            mensejahterakan bangsa berdasar moral agama.
          </p>
        </div>

        <div class="vm-card vm-card-misi">
          <div class="vm-icon">🎯</div>
          <h3>Misi</h3>
          <ul>
            <li>
              Mengembangkan pendidikan dan penelitian di bidang Teknik Elektro
              sehingga menghasilkan lulusan yang
              <strong style="color:var(--purple2)">bereputasi internasional</strong>.
            </li>
            <li>
              Berkontribusi nyata untuk menerapkan teknologi yang tepat dan modern
              di masyarakat nasional dan internasional.
            </li>
          </ul>
        </div>

      </div>
    </div>
  </section>';
}


/* ─── DESKRIPSI ─── */
function render_deskripsi(array $prodi) {
  echo '
  <section id="deskripsi">
    <div class="section-inner">
      <div class="deskripsi-grid">

        <div class="reveal">
          <p class="section-eyebrow">Tentang Program</p>
          <h2 class="section-title">Deskripsi <em>Program Studi</em></h2>
          <div class="deskripsi-body">
            <p>
              Program Studi S-1 Teknik Elektro Universitas Airlangga berfokus pada
              penerapan pengetahuan keteknikan untuk mendapatkan pemahaman menyeluruh
              tentang prinsip-prinsip keteknikan.
            </p>
            <p>
              Mahasiswa mempelajari
              <em style="color:var(--yellow);font-style:normal">pengetahuan inti</em>
              — rangkaian elektrik, sistem dan sinyal, sistem digital, elektromagnetik,
              dan elektronika — sekaligus
              <em style="color:var(--purple2);font-style:normal">pengetahuan keluasan</em>
              yang mencakup teknik ketenagalistrikan, sistem kontrol, sistem
              telekomunikasi, elektronika, dan sistem komputer.
            </p>
            <div class="highlight-box">
              <p>
                Kurikulum menggabungkan
                <strong>Teacher Centered Learning</strong> dan
                <strong>Student Centered Learning</strong>
                (Presentasi, Diskusi, Video Pembelajaran, Seminar,
                Project Based Learning, dan Study Case Learning)
                didukung fasilitas laboratorium mutakhir.
              </p>
            </div>
          </div>
        </div>

        <div class="info-pills reveal">
          <div class="info-pill">
            <div class="pill-icon">🎓</div>
            <div>
              <div class="pill-label">Gelar</div>
              <div class="pill-value">' . htmlspecialchars($prodi['gelar']) . '</div>
            </div>
          </div>
          <div class="info-pill">
            <div class="pill-icon">⏱️</div>
            <div>
              <div class="pill-label">Durasi Studi</div>
              <div class="pill-value">' . htmlspecialchars($prodi['durasi']) . '</div>
            </div>
          </div>
          <div class="info-pill">
            <div class="pill-icon">🏛️</div>
            <div>
              <div class="pill-label">Pelaksanaan</div>
              <div class="pill-value">' . htmlspecialchars($prodi['pelaksanaan']) . '</div>
            </div>
          </div>
          <div class="info-pill">
            <div class="pill-icon">📅</div>
            <div>
              <div class="pill-label">Periode Penerimaan</div>
              <div class="pill-value">' . htmlspecialchars($prodi['penerimaan']) . '</div>
            </div>
          </div>
          <div class="info-pill">
            <div class="pill-icon">📍</div>
            <div>
              <div class="pill-label">Lokasi</div>
              <div class="pill-value">' . htmlspecialchars($prodi['lokasi']) . '</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>';
}


/* ─── BIDANG STUDI ─── */
function render_bidang() {
  $bidang_list = [
    '01' => 'Teknik Ketenagalistrikan',
    '02' => 'Sistem Kontrol &amp; Kendali',
    '03' => 'Sistem Telekomunikasi',
    '04' => 'Elektronika Lanjut',
    '05' => 'Sistem Komputer',
  ];

  echo '
  <section id="bidang">
    <div class="section-inner">
      <div class="reveal">
        <p class="section-eyebrow">Mata Kuliah Inti</p>
        <h2 class="section-title">Bidang <em>Keahlian</em></h2>
        <p class="section-desc">Lima bidang inti yang membentuk fondasi teknis mahasiswa Teknik Elektro UNAIR.</p>
      </div>
      <div class="bidang-grid reveal">';

  foreach ($bidang_list as $num => $nama) {
    echo '
        <div class="bidang-card">
          <div class="bidang-num">' . $num . '</div>
          <div class="bidang-name">' . $nama . '</div>
        </div>';
  }

  echo '
      </div>
    </div>
  </section>';
}


/* ─── PEMINATAN ─── */
function render_peminatan(array $peminatan) {
  echo '
  <section id="peminatan">
    <div class="section-inner">
      <div class="reveal">
        <p class="section-eyebrow">Jalur Spesialisasi</p>
        <h2 class="section-title">2 <em>Peminatan</em> Utama</h2>
        <p class="section-desc">Pilih jalur spesialisasi yang sesuai dengan minat dan tujuan karirmu.</p>
      </div>
      <div class="peminatan-duo reveal">';

  foreach ($peminatan as $item) {
    echo '
        <div class="peminatan-card">
          <div class="peminatan-badge">' . htmlspecialchars($item['badge']) . '</div>
          <h3>' . htmlspecialchars($item['judul']) . '</h3>
          <p>' . htmlspecialchars($item['desc']) . '</p>
        </div>';
  }

  echo '
      </div>
    </div>
  </section>';
}


/* ─── KURIKULUM ─── */
function render_kurikulum(array $core_topics, array $breadth_topics) {
  echo '
  <section id="kurikulum">
    <div class="section-inner">
      <div class="reveal">
        <p class="section-eyebrow">Struktur Kurikulum</p>
        <h2 class="section-title">Topik <em>Pembelajaran</em></h2>
        <p class="section-desc">
          Kurikulum dirancang berbasis ABET dan OBE (Outcome-Based Education)
          untuk memastikan kompetensi lulusan yang terukur.
        </p>
      </div>
      <div class="kurikulum-topics reveal">';

  foreach ($core_topics as $t) {
    echo '<span class="topic-tag core">' . htmlspecialchars($t) . '</span>';
  }
  foreach ($breadth_topics as $t) {
    echo '<span class="topic-tag breadth">' . htmlspecialchars($t) . '</span>';
  }

  echo '
      </div>
      <div class="kurikulum-legend reveal">
        <div class="legend-item"><span class="legend-dot core"></span> Core Knowledge</div>
        <div class="legend-item"><span class="legend-dot breadth"></span> Breadth Knowledge</div>
      </div>
    </div>
  </section>';
}


/* ─── PROSPEK KARIR ─── */
function render_karir(array $karir) {
  echo '
  <section id="karir">
    <div class="section-inner">
      <div class="reveal">
        <p class="section-eyebrow">Setelah Lulus</p>
        <h2 class="section-title">Prospek <em>Karir</em></h2>
        <p class="section-desc">
          Lulusan Teknik Elektro UNAIR memiliki peluang karir yang luas
          di berbagai sektor industri strategis nasional dan internasional.
        </p>
      </div>
      <div class="karir-list reveal">';

  foreach ($karir as $i => $k) {
    $num = str_pad($i + 1, 2, '0', STR_PAD_LEFT);
    echo '
        <div class="karir-item">
          <div class="karir-num">' . $num . '</div>
          <div class="karir-label">' . htmlspecialchars($k) . '</div>
        </div>';
  }

  echo '
      </div>
    </div>
  </section>';
}


/* ─── PENELITIAN ─── */
function render_penelitian(array $penelitian) {
  echo '
  <section id="penelitian">
    <div class="section-inner">
      <div class="reveal">
        <p class="section-eyebrow">Student Lecturer Researcher Corner</p>
        <h2 class="section-title">Karya &amp; <em>Inovasi</em> Terkini</h2>
      </div>
      <div class="penelitian-cards reveal">';

  foreach ($penelitian as $p) {
    echo '
        <div class="penelitian-card">
          <div class="penelitian-date">' . htmlspecialchars($p['tanggal']) . '</div>
          <h4>' . htmlspecialchars($p['judul']) . '</h4>
          <p>' . htmlspecialchars($p['desc']) . '</p>
          <a class="penelitian-more" href="' . htmlspecialchars($p['link']) . '" target="_blank">Baca Selengkapnya →</a>
        </div>';
  }

  echo '
      </div>
    </div>
  </section>';
}


/* ─── AKREDITASI ─── */
function render_akreditasi(array $prodi) {
  echo '
  <section id="akreditasi">
    <div class="section-inner">
      <div class="akreditasi-inner reveal">

        <div class="akreditasi-badge">
          <div class="akreditasi-logo">🏅</div>
          <h3>Terakreditasi BAN-PT</h3>
          <p>
            Sertifikat Akreditasi Program Studi S-1 Teknik Elektro<br/>
            Universitas Airlangga
          </p>
        </div>

        <div class="akreditasi-details">
          <p class="section-eyebrow">Penjaminan Mutu</p>
          <h2 class="section-title">Status <em>Akreditasi</em></h2>
          <p>
            Program Studi S-1 Teknik Elektro FTMM Universitas Airlangga telah
            mendapatkan akreditasi resmi dari Badan Akreditasi Nasional Perguruan
            Tinggi (BAN-PT), menjamin kualitas dan standar pendidikan bermutu
            tinggi bagi seluruh mahasiswa.
          </p>
          <a href="' . htmlspecialchars($prodi['sk_link']) . '" class="akreditasi-link">
            ⬇ Unduh Sertifikat Akreditasi
          </a>
        </div>

      </div>
    </div>
  </section>';
}


/* ─── FOOTER ─── */
function render_footer(array $prodi, array $sosial) {
  $tahun = date('Y');
  echo '
  <footer>
    <div class="footer-inner">

      <div class="footer-brand">
        <h3>Teknik Elektro · FTMM UNAIR</h3>
        <p>
          ' . htmlspecialchars($prodi['fakultas']) . '<br/>
          ' . htmlspecialchars($prodi['universitas']) . ' — ' . htmlspecialchars($prodi['lokasi']) . '.
        </p>
      </div>

      <div class="footer-col">
        <h4>Tautan Cepat</h4>
        <ul>
          <li><a href="https://ftmm.unair.ac.id/staf-dosen-prodi-teknik-elektro/" target="_blank">Staf Dosen</a></li>
          <li><a href="https://ftmm.unair.ac.id/fasilitas-penunjang-ftmm/" target="_blank">Fasilitas</a></li>
          <li><a href="https://ftmm.unair.ac.id/f-a-q-frequently-asked-questions/" target="_blank">FAQ</a></li>
          <li><a href="' . htmlspecialchars($prodi['daftar_link']) . '" target="_blank">Pendaftaran</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Kontak</h4>
        <ul class="footer-contact">
          <li>📞 ' . htmlspecialchars($prodi['telp']) . '</li>
          <li>✉️ ' . htmlspecialchars($prodi['email']) . '</li>
          <li>📍 ' . htmlspecialchars($prodi['lokasi']) . '</li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <p>&copy; ' . $tahun . ' FTMM Universitas Airlangga. All Rights Reserved.</p>
      <div class="social-links">';

  foreach ($sosial as $label => $url) {
    echo '<a class="social-link" href="' . htmlspecialchars($url) . '" target="_blank">' . htmlspecialchars($label) . '</a>';
  }

  echo '
      </div>
    </div>
  </footer>';
}
