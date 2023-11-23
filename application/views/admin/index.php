<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pustaka Booking | <?= $judul; ?></title>

    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?= base_url('assets/'); ?>datatable/jquery.dataTables.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>datatable/datatables.js'; ?>"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,30 0i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Flow UX -->
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2 bg-primary">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md-font-weight-bold text-white-uppercase mb-1">Jumlah Anggota</div>
                                    <div class="h1 mb-0 font-weight-bold text-white"><?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?></div>
                                    <div class="col-auto">
                                        <a href="<?= base_url('user/anggota'); ?>"> <i class="fas fa-users fa-3x text-warning"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2 bg-warning">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md font-weight-bold text-white text-uppercase mb-1">Stok Buku Terdaftar</div>
                                <div class="h1 mb-0 font-weight-bold text-white">
                                    <?php
                                    $where = ['stok != 0'];
                                    $totalstok = $this->ModelBuku->total('stok', $where);
                                    echo $totalstok; 
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="<?= base_url('buku'); ?>"><i class="fas fa-book fa-3x text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 bg-danger">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md font-weight-bold text-white text-uppercase mb-1">
                                    <?php
                                    $where = ['dipinjam != 0'];
                                    $totaldipinjam = $this->ModelBuku->total('dipinjam', $where);
                                    echo $totaldipinjam;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="<?= base_url('user'); ?>"><i class="fas fa-user-tag fa-3x text-success"></i> Modul Web Programming 2 halaman 83 (pdfnya halaman 87)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>