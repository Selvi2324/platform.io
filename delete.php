<?php
// 1. Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "sekolah_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// 2. Cek apakah ada ID yang dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // 3. Ambil nama file sebelum dihapus
    $sql = "SELECT file_path FROM komentar WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($file_path);
    $stmt->fetch();
    $stmt->close();

    // 4. Hapus file jika ada
    if (!empty($file_path) && file_exists($file_path)) {
        unlink($file_path);
    }

    // 5. Hapus data dari database
    $sql = "DELETE FROM komentar WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Komentar berhasil dihapus!'); window.location.href = 'tampilan.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus komentar!'); window.location.href = 'tampilan.php';</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('Data tidak valid!'); window.location.href = 'tampilan.php';</script>";
}

$conn->close();
?>
