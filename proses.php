<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tampilan Guru</title>
    <link rel="stylesheet" href="tampilanguru.css" />

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
            <h3 class="subtitle">Dukung Perjalanan Mengajarmu Dengan Solusi Digital Untuk Menciptakan Penerus Yang Terbaik </h3>
          </div>
          
          <div class="hero-image-wrapper">
            <img src="img/teacher-ilus.png" alt="hero" class="hero-image" />
          </div>
        </div>
      </section>
    </main>
  <!-- Hero section end -->

  <!-- about/materi section start -->
  <section class="import-pkns">
    <div class="pkns-container">
        <div class="container">
            <section id="materi" class="materi">  
                <h2>MATERI & <span>TUGAS</span></h2>
                <form action="proses.php" method="POST" enctype="multipart/form-data">
            <label for="mata_pelajaran">Pilih Mata Pelajaran:</label>
          <select id="mata_pelajaran" name="mata_pelajaran" required>
              <option value="PKNS">PKNS</option>
              <option value="Bimbingan Konseling">Bimbingan Konseling</option>
              <option value="Produktif">Produktif</option>
              <option value="Mading">Mading</option>
              <option value="Bahasa Inggris">Bahasa Inggris</option>
              <option value="Bahasa Indonesia">Bahasa Indonesia</option>
              <option value="Bahasa Jawa">Bahasa Jawa</option>
              <option value="PKK">PKK</option>
              <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
              <option value="Matematika">Matematika</option>
          </select>
          <br><br>
          <div class="textarea-container">
            <label for="komentar">Umumkan Sesuatu Kepada Kelas Anda:</label><br>
            <textarea id="komentar" name="komentar" rows="5" cols="30" placeholder="Masukkan Pengumuman di sini..." required></textarea><br>
            
            <label for="file">Unggah File:</label>
            <input type="file" id="file" name="file"><br><br>
          </div>
  
          <button type="submit">Kirim</button>
      </form>
        </div>
    </section>
  </div>
  <!-- about/materi section end -->
  
  <!-- tugas section start -->
  <section id="tugas" class="tugas-section">
    <div class="tugas-content">
      <h3 class="tugas-title">Tugas Siswa</h3>
    </div>
    
    <section class="button-mix">
      <div class="tugas1-button">
        <div class="btn-1">
          <a href="tampilanpkns.php" class="button1">PKNS</a>
          <a href="tampilanbk.php" class="button1">Bimbingan Konseling</a>
          <a href="tampilanproduktif.php" class="button1">Produktif</a>
          <a href="tampilanmadin.php" class="button1">Madin</a>
          <a href="tampilanbing.php" class="button1">Bahasa Inggris</a>
        </div>
      </div>
      
      <div class="tugas2-button">
        <div class="btn-2">
          <a href="tampilanbin.php" class="button2">Bahasa Indonesia</a>
            <a href="tampilanbjawa.php" class="button2">Bahasa Jawa</a>
            <a href="tampilanpkk.php" class="button2">PKK</a>
            <a href="tampilanpai.php" class="button2">Pendidikan Agama Islam</a>
            <a href="tampilanmtk.php" class="button2">Matematika</a>
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

  <!-- php pengiriman -->
  <?php
// 1. Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "sekolah_db";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// 2. Tangkap data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $komentar = $_POST['komentar'];
    $file_path = NULL;

    // 3. Proses unggah file jika ada
    if (!empty($_FILES['file']['name'])) {
        $target_dir = "uploads/"; // Folder penyimpanan file
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true); // Buat folder jika belum ada
        }

        $file_name = basename($_FILES["file"]["name"]);
        $target_file = $target_dir . time() . "_" . $file_name; // Rename dengan timestamp
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validasi tipe file (hanya gambar & dokumen)
        $allowed_types = array("jpg", "jpeg", "png", "pdf", "doc", "docx");
        if (in_array($file_type, $allowed_types)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $file_path = $target_file;
            } else {
                echo "Gagal mengunggah file.";
                exit();
            }
        } else {
            echo "Format file tidak diizinkan.";
            exit();
        }
    }

    // 4. Simpan ke database
    $stmt = $conn->prepare("INSERT INTO komentar (mata_pelajaran, isi_komentar, file_path) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $mata_pelajaran, $komentar, $file_path);

    if ($stmt->execute()) {
        echo "Komentar berhasil disimpan! <a href='proses.php'>Kembali</a>";
    } else {
        echo "Gagal menyimpan komentar: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

