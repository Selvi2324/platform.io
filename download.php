<?php
if (isset($_GET['file'])) {
    $file_path = $_GET['file'];

    // Pastikan file benar-benar ada
    if (file_exists($file_path)) {
        // Atur header untuk mendownload file
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));

        // Bersihkan output buffer dan baca file
        ob_clean();
        flush();
        readfile($file_path);
        exit;
    } else {
        echo "File tidak ditemukan.";
    }
} else {
    echo "Akses tidak valid.";
}
?>
