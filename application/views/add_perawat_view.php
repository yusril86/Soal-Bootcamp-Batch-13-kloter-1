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
            <!-- load Controller PERAWAT -->
                <form action="<?php echo site_url('perawat/save');?>" 
                method="post">

                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input type="text" class="form-control" name="nama"
                    placeholder="Nama">
                </div>

               
                <div class="form-group">
                    <label>Gelar</label>
                    <!-- <input type="text" class="form-control" name="keterangan"
                    placeholder="Dokter Spesialis"> -->
                    <select class="custom-select" name="gelar">
                    <option selected>Choose...</option>
                        <option value="S2 KEPERAWATAN">S2 KEPERAWATAN</option>
                        <option value="S1 KEPERAWATAN">S1 KEPERAWATAN</option>
                        <option value="NERS">NERS</option>
                        <option value="SPk">SPK</option>
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