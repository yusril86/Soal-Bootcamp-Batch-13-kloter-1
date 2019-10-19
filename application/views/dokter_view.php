<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
        <title>Product List</title>
        <!-- load bootstrap css file -->

        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
        rel="stylesheet">
        <link href="<?php echo base_url('assets/font/css/all.css');?>"rel="stylesheet">
    </head>
    <body>

        <div class="container">
            <h1><center>Dokter</center></h1>
            <div class="row">
                <div class="col-md-5">
                <form action="<?php echo site_url('pegawai/cari') ?>" method="post">
                <div class="input-group mb-3">
                <select class="custom-select" name="keyword">
                        <option selected>Choose...</option>
                        <option value="Dokter Spesialis Mata">Dokter Spesialis Mata</option>
                        <option value="Dokter Spesialis Sarap">Dokter Spesialis Sarap</option>
                        <option value="Dokter Spesialis Obgyn">Dokter Spesialis Obgyn</option>
                        <option value="Dokter Spesialis Radiologi">Dokter Spesialis Radiologi</option>
                        <option value="Dokter Spesialis Anastesi">Dokter Spesialis Anastesi</option>
                        <option value="Dokter Spesialis THT">Dokter Spesialis THT</option>
                        <option value="Dokter Spesialis Paru">Dokter Spesialis Paru</option>
                        <option value="Dokter Spesialis Ortopedi">Dokter Spesialis Ortopedi</option>
                        <option value="Dokter Spesialis Penyakit Dalam">Penyakit Dalam</option>
                        <option value="Dokter Umum">Dokter Umum</option>
                        <option value="Dokter Gigi">Dokter Gigi</option>
                        <input class="btn btn-primary" type="submit" name="submit" value="Cari">
                </select>
                </div>
                </form>
                </div>
            </div>
            <div class="card mb-3">
					<div class="card-header">
					  
                        <div>
                            <a href="<?php echo site_url('pegawai/add_new/') ?>">
                            <button type="button" class="btn btn-success btn-md">
                                <span class="fa fa-plus"></span> Tambah Dokter
                            </button></a>
                        </div>

					</div>
					<div class="card-body">
                <table class="table table-striped table-dark">
                <thead class=>
                    <tr>
                  
                        <th scope="col">No</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col" width="200">NIP</th>
                        <th scope="col" width="200">TMT</th>
                        <th scope="col">Masa Kerja</th>
                        <th scope="col">Keterangan</th>
                        <th width="100">Action</th>
                        
                    </tr>
                </thead>
                    <?php
                        $count = 0;
                        foreach ($kepegawaian->result() as $row) :
                        $count++;
                    ?>
                    
                    <tr>
                        <th scope="row"><?php echo $count;?></th>
                        <td><?php echo $row->nama?></td>
                        <td><?php echo ($row->nip);?>
                        <td><?php echo ($row->tmt);?>
                        <td><?php echo ($row->masa_kerja);?>
                        <td><?php echo ($row->keterangan);?>

                        </td>
                            <td><a href="<?php echo site_url('pegawai/get_edit/'.$row->id);?>"
                            class="btn btn-sm btn-info">Update</a>
                            
                            <td><a href="<?php echo site_url ('pegawai/delete/'.$row->id) ;?>"
                            class="btn btn-sm btn-danger tombol-hapus">Delete</a>

                        </td>
                        

                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>

        <!-- load jquery js file -->
        <script src="<?php echo
        base_url('assets/js/jquery.min.js');?>"></script>
        <!-- load bootstrap js file -->
        <script src="<?php echo
        base_url('assets/js/bootstrap.min.js');?>"></script>
        <!-- load SweetAlert js file -->
         <script src="<?= base_url('assets/js/sweetalert2.all.min.js');?>"></script>

         <script src="<?php echo
        base_url('assets/js/hapus.js');?>"></script>
    </body>
</html>