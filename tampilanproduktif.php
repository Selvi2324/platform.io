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

// Ambil data tugas dari database
$sql = "SELECT id, nama_siswa, file_path, waktu FROM tugas WHERE mata_pelajaran = 'Produktif' ORDER BY waktu DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Daftar Tugas Produktif</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Daftar Tugas Produktif</h2>

        <?php if ($result->num_rows > 0): ?>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 p-2">Nama Siswa</th>
                        <th class="border border-gray-300 p-2">File</th>
                        <th class="border border-gray-300 p-2">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr class="text-center">
                            <td class="border border-gray-300 p-2"><?= htmlspecialchars($row['nama_siswa']); ?></td>
                            <td class="border border-gray-300 p-2 space-x-4">
                                <a href="<?= htmlspecialchars($row['file_path']); ?>" class="text-blue-500 hover:underline">
                                    <i class="fas fa-download"></i> Download
                                </a>
                                <a href="hapus_tugas.php?id=<?= $row['id']; ?>" class="text-red-500 space-x-5 hover:text-red-700" title="Hapus"
           onclick="return confirm('Yakin ingin menghapus tugas ini?');">
            <i class="fas fa-trash-alt"></i>
        </a>
                            </td>
                            <td class="border border-gray-300 p-2"><?= $row['waktu']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-gray-700">Belum ada tugas yang dikumpulkan.</p>
        <?php endif; ?>

        <div class="mt-4">
            <a href="proses.php" class="text-blue-500 hover:underline"><i class="fas fa-arrow-left"></i> Kembali ke Form</a>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
