<?php
include "koneksi.php";

switch ($_GET['action'])
{

    case 'save':

        $Nama = $_POST['Nama'];
        $Tanggal = $_POST['Tanggal'];
        $Nomor = $_POST['Nomor'];
        

        $query = mysqli_query($koneksi, "INSERT INTO surat (Nama, Tanggal, Nomor) VALUES('$Nama', '$Tanggal', '$Nomor')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':

        $Id = $_POST['Id'];
        $Nama = $_POST['Nama'];
        $Tanggal = $_POST['Tanggal'];
        $Nomor = $_POST['Nomor'];
        

        $query = mysqli_query($koneksi, "UPDATE surat SET Nama='$Nama', Tanggal='$Tanggal', Nomor='$Nomor' WHERE Id='$Id'");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $Id = $_POST['Id'];
        $query = mysqli_query($koneksi, "DELETE FROM surat WHERE Id='$Id'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
?>