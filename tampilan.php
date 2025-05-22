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

// 2. Ambil data dari database
$sql = "SELECT id, mata_pelajaran, isi_komentar, file_path, waktu FROM komentar ORDER BY waktu DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tampilan Komentar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100 p-4">

    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Daftar Materi dan Tugas</h2>

        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="bg-gray-50 p-4 rounded-lg mb-4 shadow">
                    <div class="flex items-center mb-2">
                        <div>
                            <h3 class="text-gray-900 font-semibold"><?= htmlspecialchars($row['mata_pelajaran']); ?></h3>
                            <p class="text-gray-600 text-sm"><?= $row['waktu']; ?></p>
                        </div>
                        <form method="POST" action="delete.php" onsubmit="return confirm('Yakin ingin menghapus komentar ini?');">
                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                            <button type="submit" class="text-red-500 hover:text-red-700 w-10 h-10 rounded-full mr-3"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                    <p class="text-gray-800 mb-3"><?= nl2br(htmlspecialchars($row['isi_komentar'])); ?></p>
                    <?php if (!empty($row['file_path'])): ?>
                        <div class="flex items-center border rounded-lg overflow-hidden">
                            <div class="p-2">
                                <h3 class="text-gray-900 font-semibold">File Terlampir:</h3>
                                <a class="text-blue-500 hover:underline flex items-center" href="download.php?file=<?= urlencode($row['file_path']); ?>">
                                    <i class="fas fa-download mr-2"></i> Download File
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-gray-700">Belum ada komentar.</p>
        <?php endif; ?>

        <div class="mt-6">
            <a href="tampilansiswa.html" class="text-blue-500 hover:underline"><i class="fas fa-arrow-left"></i> Kembali ke Form</a>
        </div>
    </div>

</body>
</html>

<?php
$conn->close();
?>
