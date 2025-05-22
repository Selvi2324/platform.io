<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sekolah_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Ambil path file sebelum menghapus
    $query = "SELECT file_path FROM tugas WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($file_path);
    $stmt->fetch();
    $stmt->close();

    // Hapus data dari database
    $delete = $conn->prepare("DELETE FROM tugas WHERE id = ?");
    $delete->bind_param("i", $id);

    if ($delete->execute()) {
        if (file_exists($file_path)) {
            unlink($file_path); // Hapus file dari folder uploads
        }
        echo "<script>alert('Tugas berhasil dihapus!'); window.location='tampilanpkns.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus tugas!'); window.location='tampilanpkns.php';</script>";
    }
}

$conn->close();
?>
