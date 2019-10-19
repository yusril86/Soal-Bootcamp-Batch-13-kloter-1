<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Edit Perawat</title>
        <!-- load bootstrap css file -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
        rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1><center>Edit Pegawai</center></h1>
            <div class="col-md-6 offset-md-3">
                <form action="<?php echo site_url('perawat/update');?>"
                method="post">
                    <div class="form-group">
                        <label> Name</label>
                        <input type="text" class="form-control" name="nama"
                        value="<?php echo $nama;?>" placeholder="Name">
                    </div>
                    

                    <div class="form-group">
                        <label>keterangan</label>
                        <input type="text" class="form-control" name="gelar"
                        value="<?php echo $gelar;?>" placeholder="keterangan"> 
                    </div>

                        <input type="hidden" name="id" value="<?php echo
                        $id?>">

                        <button type="submit" class="btn btn-primary">Update</button>
                        </form>
            </div>
        </div>

        <!-- load jquery js file -->
        <script src="<?php echo
        base_url('assets/js/jquery.min.js');?>"></script>
        <!-- load bootstrap js file -->
        <script src="<?php echo
        base_url('assets/js/bootstrap.min.js');?>"></script>
    </body>
</html>