<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembar Disposisi</title>
    <link rel="stylesheet" href="{{ asset('css/disposisi.css') }}">
</head>
<body>
<div class="disposisi-container">
    <div class="header">
        <img src="{{asset('AdminLTE/docs/assets/img/logo.png')}}" alt="Logo"> 
        <div class="header-text">
            <h2>Dinas Pengendalian Penduduk, Keluarga Berencana, <br>& Pemberdayaan Masyarakat</h2>
            <p>Jalan Brigjend. H. Hasan Basry - Kayu Tangi II RT. 16 Telp. (0511) 3301346 Fax. (0511) 3305071</p>
            <p>Banjarmasin 70124</p>
        </div>
    </div>

 
    <div class="title">Lembar Disposisi</div> <!-- Judul dipusatkan -->


    <div class="content-section">
        <label>Surat dari :</label> <input style="width: 80%;" value="{{$suratmasuk->alamat}}" readonly ></input>
        <label>Nomor Surat :</label> <input style="width: 80%;" value="{{$suratmasuk->nomor_surat}}" readonly ></input>
        <label>Tanggal Surat:</label> <input style="width: 80%;" value="{{ \Carbon\Carbon::parse($suratmasuk->tanggal_surat)->translatedFormat('d-m-Y') }}" readonly ></input>
        <label>Nomor Agenda:</label> <input style="width: 80%;" value="{{$suratmasuk->id}}" readonly></input><br>
        <label>Sifat:</label> 
        <div class="checkbox-group">
            <input type="checkbox"> Sangat Segera 
            <input type="checkbox"> Segera 
            <input type="checkbox"> Rahasia
        </div><br>
        <label style="vertical-align: top;">Perihal:<br></label> <textarea readonly>{{$suratmasuk->perihal}}</textarea>
    </div>

    <div class="content-section">
        <div class="inline">
            <label>Diteruskan kepada Sdr:</label><br><br>
            <input type="checkbox"> Sekretaris<br>
            <input type="checkbox"> Kabid Keluarga Berencana<br>
            <input type="checkbox"> Kabid Keluarga Sejahtera<br>
            <input type="checkbox"> Kabid Pengendalian Penduduk dan Informasi Data<br>
            <input type="checkbox"> Kabid Pemberdayaan Masyarakat<br>
        </div>
        <div class="inline" style="margin-left: 20px;">
            <label>Dengan hormat harap:</label><br><br>
            <input type="checkbox"> Tanggapan dan Saran<br>
            <input type="checkbox"> Proses lebih lanjut<br>
            <input type="checkbox"> Koordinasi/Konfirmasi<br>
            <input type="checkbox"> ...................................<br>
        </div>
    </div>

    <div class="content-section">
        <label>Catatan:</label> <textarea style="width: 99%; height: 150px; resize:none;" ></textarea>
    </div>

    <div class="signature-section">
        <p>Kepala Dinas PP, KB & PM<br>Kota Banjarmasin</p>
        <br><br><br>
        <p>Drs. M. HELFIANNOOR, M.Si
            <br>Pembina Utama Muda
        <br>NIP. 19730719 199302 1 002</p>
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
