<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>
    <!-- import file "style.css" -->
    <link rel="stylesheet" href="<?= base_url("ext/style.css"); ?>">
</head>
<body>
    <!-- bagian menu / tombol -->
    <nav>

    </nav>
    <!-- bagian tabel -->
    <table>
        <!-- judul tabel -->
        <thead>
            <tr>
                <th style="width: 5%;">No.</th>
                <th style="width: 10%;">NPM</th>
                <th style="width: 30%;">Nama</th>
                <th style="width: 15%;">Telepon</th>
                <th style="width: 15%;">Jurusan</th>
                <th style="width: 15%;">Foto</th>
                <th style="width: 10%;">Status</th>
            </tr>
        </thead>
        <!-- isi tabel -->
        <tbody>
            <!-- awal looping -->
            <?php 
            // nilai awal "No"
                    $no = 1;
                    foreach($hasil as $record)
                {   if($record->status == "1")
                    {// jika status = 1
                        $status = "Aktif";
                    }else //jikas status = 0
                    {
                        $status = "Pasif";
                    }
            ?>
            <tr <?php if($record->status == "1"){?> class="bg_putih"<?php } else {?> class="bg_merah_muda" <?php } ?>>
                <td style="text-align: center;"><?= $no; ?></td>
                <td style="text-align: center;"><?= $record->npm; ?></td>
                <td style="text-align: center;"><?= $record->nama; ?></td>
                <td style="text-align: center;"><?= $record->telepon; ?></td>
                <td style="text-align: center;"><?= $record->jurusan; ?></td>
                <td style="text-align: center;"><?= $record->foto ?></td>
                <td style="text-align: center;"><?= $status ?></td>
            </tr>
            <!-- akhir looping -->
            <?php
                    $no++;
                }
            ?>
        </tbody>
    </table>

</body>
</html>