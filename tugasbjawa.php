<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "sekolah_db";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses Upload File
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_siswa = htmlspecialchars($_POST['nama_siswa']);
    $mata_pelajaran = "Bahasa Jawa";
    $upload_dir = "uploads/";

    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $file_name = $_FILES["file_tugas"]["name"];
    $file_tmp = $_FILES["file_tugas"]["tmp_name"];
    $file_path = $upload_dir . basename($file_name);

    if (move_uploaded_file($file_tmp, $file_path)) {
        $sql = "INSERT INTO tugas (nama_siswa, mata_pelajaran, file_path, waktu) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nama_siswa, $mata_pelajaran, $file_path);

        if ($stmt->execute()) {
            echo "<script>alert('Tugas berhasil dikirim!'); window.location='tampilansiswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan tugas!');</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Gagal mengunggah file!');</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Upload Tugas Bahasa Jawa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Tugas Bahasa Jawa</h2>

        <form action="tugasbjawa.php" method="post" enctype="multipart/form-data">
            <label class="block text-gray-700">Nama Siswa:</label>
            <input type="text" name="nama_siswa" required class="w-full p-2 border rounded mb-4"/>

            <label class="block text-gray-700">Unggah File Tugas:</label>
            <input type="file" name="file_tugas" required class="w-full p-2 border rounded mb-4"/>

            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-700">
                Kirim Tugas
            </button>
        </form>

    </div>
</body>
</html>
