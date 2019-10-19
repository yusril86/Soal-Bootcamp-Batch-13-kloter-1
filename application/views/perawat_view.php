<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
        rel="stylesheet">
        <link href="<?php echo base_url('assets/font/css/all.css');?>"rel="stylesheet">
    <title>Document</title>
</head>
<body>
     <div class="container">
            <h1><center>Perawat</center></h1>
            <div class="row">
                <div class="col-md-5">
                <form action="<?php echo site_url('pegawai/cari') ?>" method="post">
                <div class="input-group mb-3">
                <select class="custom-select" name="keyword">
                        <<option value="S2 KEPERAWATAN">S2 KEPERAWATAN</option>
                        <option value="S1 KEPERAWATAN">S1 KEPERAWATAN</option>
                        <option value="NERS">NERS</option>
                        <option value="SPk">SPK</option>
        
                        <input class="btn btn-primary" type="submit" name="submit" value="Cari">
                </select>
                </div>
                </form>
                </div>
            </div>
            <div class="card mb-3">
					<div class="card-header">
					  
                        <div>
                            <a href="<?php echo site_url('perawat/tambah_perawat/') ?>"> 
                            <!-- meload fungsi di controller -->
                            <button type="button" class="btn btn-success btn-md">
                                <span class="fa fa-plus"></span> Tambah Perawat
                            </button></a>
                        </div>

					</div>
					<div class="card-body">
                <table class="table table-striped table-dark">
                <thead class=>
                    <tr>
                  
                        <th scope="col">No</th>
                        <th scope="col">Nama Perawat</th>
                        <th scope="col">Keterangan</th>
                        <th width="100">Action</th>
                        
                    </tr>
                </thead>
                    <?php
                    //fungsi ini untuk menampilkan database di CI 
                        $count = 0;
                        foreach ($perawat->result() as $row) : // $perawat di abmbil data array yg di controller(function index)
                                                                //dan $row variable untuk menampilkan suatu data 
                        $count++;
                    ?>
                    
                    <tr>
                        <th scope="row"><?php echo $count;?></th>
                        <td><?php echo $row->nama?></td>
                        <td><?php echo ($row->gelar);?>
                      

                        </td>
                            <td><a href="<?php echo site_url('perawat/get_edit/'.$row->id);?>"
                            class="btn btn-sm btn-info">Update</a>
                            
                            <!-- load fungsi Delete di controller -->
                            <td><a href="<?php echo site_url ('perawat/delete/'.$row->id) ;?>"
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