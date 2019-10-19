<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tambah Data Dokter</title>
        <!-- load bootstrap css file -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
        rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <h1><center>Tambah Dokter</center></h1>
            <div class="col-md-6 offset-md-3">
                <form action="<?php echo site_url('pegawai/save');?>"
                method="post">
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input type="text" class="form-control" name="nama"
                    placeholder="Nama">
                </div>

                <div class="form-group">
                    <label>Nip</label>
                    <input type="text" class="form-control" name="nip"
                    placeholder="Nip">
                </div>

                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input type="text" class="form-control" name="tmt"
                    placeholder="Tanggal Masuk">
                </div>

                <div class="form-group">
                    <label>Masa Kerja</label>
                    <input type="text" class="form-control" name="masa_kerja"
                    placeholder="Masa Kerja">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <!-- <input type="text" class="form-control" name="keterangan"
                    placeholder="Dokter Spesialis"> -->
                    <select class="custom-select" name="keterangan">
                        <option selected>Choose...</option>
                        <option value="Dokter Spesialis Mata">Dokter Spesialis Mata</option>
                        <option value="Dokter Spesialis Sarap">Dokter Spesialis Sarap</option>
                        <option value="Dokter Spesialis Obgyn">Dokter Spesialis Obgyn</option>
                        <option value="Dokter Spesialis Obgyn">Dokter Gigi</option>
                        <option value="Dokter Spesialis Radiologi">Dokter Spesialis Radiologi</option>
                        <option value="Dokter Spesialis Anastesi">Dokter Spesialis Anastesi</option>
                        <option value="Dokter Spesialis THT">Dokter Spesialis THT</option>
                        <option value="Dokter Spesialis Paru">Dokter Spesialis Paru</option>
                        <option value="Dokter Spesialis Ortopedi">Dokter Spesialis Ortopedi</option>
                        <option value="Dokter Spesialis Penyakit Dalam">Penyakit Dalam</option>
                        <option value="Dokter Spesialis Onkologi"> Spesialis Onkologi</option>
                        <option value="Dokter Spesialis Anak"> Spesialis Anak</option>
                        <option value="Dokter Spesialis Bedah">Spesialis Bedah</option>
                        <option value="Dokter Spesialis Patologi Klinik">Spesialis Patologi Klinik</option>
                        <option value="Dokter Spesialis Kulit & Kelamin"> Spesialis Kulit & Kelamin</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>


        <script src="<?php echo base_url('assets/js/jquery.min.js');?>">
        </script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>">
        </script>
    </body>
</html>