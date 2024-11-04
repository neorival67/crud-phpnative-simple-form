<?php
include('koneksi.php');

if (isset($_POST['upload'])) {
    date_default_timezone_set("Asia/Jakarta");
    $tgl = date("Ymd");

   // Ensure the file input name matches the form
    
        $tmp_file = $_FILES['file_upload']['tmp_name'];
        $nama_file = $_FILES['file_upload']['name'];
        $ukuran_file = $_FILES['file_upload']['size'];
        $desc = $_POST['deskripsi'];
        $size_limit = 10000000; // Limit 10 MB
    
        if ($ukuran_file > $size_limit) {
            echo "<strong>Gagal upload! <br>Ukuran Maksimal 10MB, saat ini ukuran file $ukuran_file</strong>";
            echo "<a href='form_upload.php'>Upload ulang</a>";
            exit();
        } else {
            if ($nama_file) {
                $dir = 'file/'.$nama_file;

                if (move_uploaded_file($tmp_file, $dir)) {
                    $sql = "INSERT INTO upload(nama_file, deskripsi, tgl_upload) VALUES ('$nama_file', '$desc', '$tgl')";
                    $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                    
                    echo "<strong>$nama_file</strong> berhasil di upload!<br>";
                    echo "<a href='home.php'>Lihat Data</a>";
                } else {
                    echo "Gagal memindahkan file!<br>";
                    echo "<a href='upload.php'>Upload ulang</a>";
                }
            }
        }
    
}
?>