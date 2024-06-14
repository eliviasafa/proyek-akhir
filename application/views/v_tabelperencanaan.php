<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SIJAPA</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url() ?>template/back-end/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url() ?>template/back-end/css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="<?= base_url() ?>template/back-end/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?= base_url() ?>template/back-end/css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url() ?>template/back-end/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url() ?>template/back-end/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <style>
            .panel-primary {
                margin-top: 150px;
                
            }
            .panel-heading {
                padding:8px;
            }
            .form-group{
                font-family: Arial, 
                sans-serif; 
                font-size: 14px;
            }
            .form-control {
                font-family: Arial, 
                sans-serif; 
                font-size: 12px;
            }
        
        </style>

</head>
<body>
    <div class="col-lg-12">
        <div class="panel panel-primary">
        <div class="panel-heading" >
            <a href="<?= base_url('user_tabel_perencanaan/tambah');?>" class="btn btn-primary btn-sm"><i class= "fa fa-plus"></i>Add</a>
        </div>
        <div class="panel-body">

                <?php 
                    if ($this->session->flashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                        echo $this->session->flashdata('pesan');
                        echo '</div>';
                    }
                ?>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Jenis Jaringan Prasarana</th>
                        <th class="text-center">Tujuan Perencanaan</th>
                        <th class="text-center">Marker</th>
                        <th class="text-center">Detail Lokasi</th>
                        <th class="text-center">Latitude</th>
                        <th class="text-center">Longitude</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Status Laporan</th>
                    
                    </tr>

                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($perencanaan as $key => $value) {?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$value->jenis_jaringan ?></td>
                                <td><?=$value->tujuan ?></td>
                                <td><?=$value->marker?></td>
                                <td><?=$value->detail_lokasi ?></td>
                                <td><?=$value->latitude?></td>
                                <td><?=$value->longitude ?></td>
                                <td><img src="<?= base_url('assets/foto_perencanaan/'.$value->foto)?>" width="100px"></td>
                                <td></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        
        </div>
    </div>
</body>



