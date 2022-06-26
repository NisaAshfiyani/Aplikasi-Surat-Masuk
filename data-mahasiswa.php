<div class="container" style="margin-top: 100px; ">
            <div class="row">
                <div class="card mt-5">
                    <div class="card-body">
                        <h1 class="text-center">Aplikasi Surat Masuk</h1>
<button id="addButton" class="btn btn-primary">Tambah Data</button>
<br>
<br>
<table class="table table-bordered table-info">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pengirim</th>
            <th>Tanggal</th>
            <th>Nomor Surat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
   include "koneksi.php";
   $no=1;
   $query=pg_query($koneksi, "SELECT * FROM surat ORDER BY Id DESC") or die(pg_error($koneksi));
   while ($result=pg_fetch_array($query)) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['Nama']; ?>
                </td>
                <td>
                    <?php echo $result['Tanggal']; ?>
                </td>
                <td>
                    <?php echo $result['Nomor']; ?>
                </td>
                <td>
                    <button class="btn btn-primary" onclick="" id="EditButton" value="<?php echo $result['Id']; ?>">Edit</button>
                    <button class="btn btn-danger" onclick="history.back()" id="DeleteButton" value="<?php echo $result['Id']; ?>">Delete</button>
                </td>
            </tr>
            <?php
   }
  ?>
    </tbody>
</table>
</div>
                </div>
            </div>
            </div>
