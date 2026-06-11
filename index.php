<?php
/* ================================================================
   TEKNIK ELEKTRO – FTMM UNIVERSITAS AIRLANGGA
   index.php  ←  Entry point utama
   
   Struktur folder:
   ├── index.php
   ├── style.css
   ├── script.js
   └── includes/
       └── sections.php
================================================================ */

require_once __DIR__ . '/includes/sections.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Profil Program Studi S-1 Teknik Elektro FTMM Universitas Airlangga — inovatif, unggul, dan terkemuka di tingkat nasional dan internasional." />
  <title>Teknik Elektro – FTMM Universitas Airlangga</title>

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Syne:wght@700;800&display=swap"
    rel="stylesheet"
  />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php render_navbar(); ?>

<?php render_hero($prodi); ?>

<div class="divider"></div>

<?php render_visimisi(); ?>

<div class="divider"></div>

<?php render_deskripsi($prodi); ?>

<div class="divider"></div>

<?php render_bidang(); ?>

<div class="divider"></div>

<?php render_peminatan($peminatan); ?>

<div class="divider"></div>

<?php render_kurikulum($core_topics, $breadth_topics); ?>

<div class="divider"></div>

<?php render_karir($karir); ?>

<div class="divider"></div>

<?php render_penelitian($penelitian); ?>

<div class="divider"></div>

<?php render_akreditasi($prodi); ?>

<?php render_footer($prodi, $sosial); ?>

<!-- JavaScript -->
<script src="script.js"></script>

</body>
</html>
