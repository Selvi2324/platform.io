<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tampilan Siswa</title>
    <link rel="stylesheet" href="tampilansiswa.css" />

    <!-- father icon -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>

  <body>
    <!-- Header / Navbar -->
    <header>
      <nav class="navbar">
        <a href="#" class="nav-logo">
          <img src="img/logo smknurudh.png" alt="logo" class="logo" />
          <h2 class="text-SMK">SMK NURUDH DHOLAM</h2>
        </a>

        <ul class="nav-menu">
          <a href="#" id="x-menu"><i data-feather="x"></i></a>
          <li class="nav-item">
            <a href="#home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#materi" class="nav-link">Materi</a>
          </li>
          <li class="nav-item">
            <a href="#tugas" class="nav-link">Tugas</a>
          </li>
          <li class="nav-item">
            <a href="#profile" class="nav-link">Profile</a>
          </li>
        </ul>

        <div class="navbar-extra">
          <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

      </nav>
    </header>

    <main>
      <!-- Hero section start -->
      <section class="hero-section">
        <div class="hero-content">
          <div class="hero-details">
            <h2 class="title">"Menginspirasi, Mendidik, dan Berkembang Bersama"</h2>
            <h3 class="subtitle">Dukung Perjalanan Belajarmu Dengan Solusi Digital Untuk Menciptakan Penerus Yang Terbaik </h3>
          </div>
          
          <div class="hero-image-wrapper">
            <img src="img/study.png" alt="hero" class="hero-image" />
          </div>
        </div>
      </section>
    </main>
  <!-- Hero section end -->

  <!-- about/materi section start -->
    <section id="materi" class="materi">  
      <div class="box-materi">
        <h2>MATERI & <span>TUGAS</span></h2>
      </div>
      <div class="buttons">
        <a href="http://localhost/login/tampilan.php" class="button">Open</a>
      </div>
    </section>
  <!-- about/materi section end -->
  
  <!-- tugas section start -->
  <section id="tugas" class="tugas-section">
    <div class="tugas-content">
      <h3 class="tugas-title">Tugas Siswa</h3>
    </div>
    
    <section class="button-mix">
      <div class="tugas1-button">
        <div class="btn-1">
          <a href="tugaspkns.php" class="button1">PKNS</a>
          <a href="tugasbk.php" class="button1">Bimbingan Konseling</a>
          <a href="tugasproduktif.php" class="button1">Produktif</a>
          <a href="tugasmadin.php" class="button1">Madin</a>
          <a href="tugasbing.php" class="button1">Bahasa Inggris</a>
        </div>
      </div>
      
      <div class="tugas2-button">
        <div class="btn-2">
          <a href="tugasbin.php" class="button2">Bahasa Indonesia</a>
            <a href="tugasbjawa.php" class="button2">Bahasa Jawa</a>
            <a href="tugaspkk.php" class="button2">PKK</a>
            <a href="tugaspai.php" class="button2">Pendidikan Agama Islam</a>
            <a href="tugasmtk.php" class="button2">Matematika</a>
        </div>
      </div>
    </section>
  </section>
    <!-- tugas section end -->
    
    <!-- profile section start -->
    <section class="profile-section">
      <div class="profile-details">
        <section id="profile" class="profile">
          <h4>Profile <span>Sekolah</span></h4>
        </section>
      </div>

      <div class="profile-content">
        <div class="gedung-image">
          <img src="img/gedung-smk.JPG" alt="profile" class="profile-image">
        </div>
        
        <!-- text profile -->
        <section class="school-profile">
          <h2>Data Sekolah</h2>
          <table>
            <tr>
              <th>NPSN</th><td>20511018</td>
            </tr>
            <tr>
              <th>Status</th><td>Swasta</td>
            </tr>
            <tr>
              <th>Bentuk Pendidikan</th><td>SMK</td>
            </tr>
            <tr>
              <th>Status Kepemilikan</th><td>Yayasan</td>
            </tr>
            <tr>
              <th>SK Pendirian Sekolah</th><td>420/2740/408.37.04/2007</td>
            </tr>
            <tr>
              <th>Tanggal SK Pendirian</th><td>2007-07-24</td>
            </tr>
            <tr>
              <th>SK Izin Operasional</th><td>538/18.05/02/X/2022</td>
            </tr>
            <tr>
              <th>Tanggal SK Izin Operasional</th><td>2022-10-19</td>
            </tr>
          </table>

          <h2>Data Pelengkap</h2>
            <table>
              <tr>
                <th>Kebutuhan Khusus Dilayani</th><td>Tidak ada</td>
              </tr>
              <tr>
                <th>Nama Bank</th><td>BPD JAWA TIMUR</td>
              </tr>
              <tr>
                <th>Cabang KCP/Unit</th><td>BPD JAWA TIMUR CABANG PACITAN</td>
              </tr>
              <tr>
                <th>Rekening Atas Nama</th><td>SMKNURUDHDHOLAM</td>
              </tr>
            </table>
      </div>
    </section>
          <!-- profile section and -->
          
          <!-- foother -->
          <section class="footer-bg">
            <div class="footer-container">
              <h1>SMK NURUDH DHOLAM</h1>
              <p>Klepu, Sidomulyo, Kec. Kebonagung, Kabupaten Pacitan, Jawa Timur 63561</p>
              <p>No. Telp: 081938766716 | Email: smknurudhdholam@yahoo.co.id</p>
              <div class="social-icons">
                <a class="iconcontainer containerone" href="https://www.facebook.com/smk.nd"><i data-feather="facebook" class="icon-social"></i></a>
                <a class="iconcontainer containertwo" href="https://www.instagram.com/smks_nurudhdholam?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i data-feather="instagram" class="icon-social"></i></a>
              </div>
              <div class="footer">
                <p> © 2025 - SMK NURUDH DHOLAM</p>
                <p>Dibuat dengan <span class="heart">❤️</span> Oleh Mahasiswa STKIP PGRI Pacitan</p>
              </div>
            </div>
          </section>
          
        <script>
          feather.replace();
        </script>
    <script src="script.js"></script>
  </body>
</html>

