<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembar Disposisi</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/disposisi.css')); ?>">
</head>
<body>
<div class="disposisi-container">
    <div class="header">
        <img src="<?php echo e(asset('storage/foto/logo.png')); ?>" alt="Logo"> 
        <div class="header-text">
            <h2>Dinas Pengendalian Penduduk, Keluarga Berencana, <br>Pemberdayaan Masyarakat</h2>
            <p>Jalan Brigjend. H. Hasan Basry - Kayu Tangi II RT. 16 Telp. (0511) 3301346 Fax. (0511) 3305071</p>
            <p>Banjarmasin 70124</p>
        </div>
    </div>

    <div class="title">Lembar Disposisi</div> <!-- Judul dipusatkan -->

    <div class="content-section">
        <label>Surat dari :</label> <input style="width: 70%;" value="<?php echo e($suratmasuk->alamat); ?>" readonly ></input>
        <label>Nomor Surat :</label> <input style="width: 70%;" value="<?php echo e($suratmasuk->nomor_surat); ?>" readonly ></input>
        <label>Tanggal Surat:</label> <input style="width: 70%;" value="<?php echo e($suratmasuk->tanggal_surat); ?>" readonly ></input>
        <label>Nomor Agenda:</label> <input type="text" style="width: 70%;"><br><br>
        <label>Sifat:</label> 
        <div class="checkbox-group">
            <input type="checkbox"> Sangat Segera 
            <input type="checkbox"> Segera 
            <input type="checkbox"> Rahasia
        </div><br><br>
        <label>Perihal:</label> <input style="width: 70%;" value="<?php echo e($suratmasuk->perihal); ?>" readonly ></input>
    </div>

    <div class="content-section">
        <div class="inline">
            <label>Diteruskan kepada Sdr:</label><br>
            <input type="checkbox"> Sekretaris<br>
            <input type="checkbox"> Kabid Keluarga Berencana<br>
            <input type="checkbox"> Kabid Keluarga Sejahtera<br>
            <input type="checkbox"> Kabid Pengendalian Penduduk dan Informasi Data<br>
            <input type="checkbox"> Kabid Pemberdayaan Masyarakat<br>
        </div>
        <div class="inline">
            <label>Dengan hormat harap:</label><br>
            <input type="checkbox"> Tanggapan dan Saran<br>
            <input type="checkbox"> Proses lebih lanjut<br>
            <input type="checkbox"> Koordinasi/Konfirmasi<br>
        </div>
    </div>

    <div class="content-section">
        <label>Catatan:</label> <textarea style="width: 99%; height: 150px; resize:none;" ></textarea>
    </div>

    <div class="signature-section">
        <p>Kepala Dinas PP, KB & PM</p>
        <p>Kota Banjarmasin</p><br><br><br><br><br>
        <p>Drs. MADYAN, M.Si</p>
        <p>Pembina Utama Muda</p>
        <p>NIP: 19640306 198503 1 014</p>
    </div>
</div>

<script>
        function printPage() {
        window.print();
    }
    window.onload = function() {
        printPage();
    };
</script>

</body>
</html>
<?php /**PATH D:\Kuliah\Magang\Web\Web Test\SISMAKE\resources\views\suratmasuk\disposisi.blade.php ENDPATH**/ ?>