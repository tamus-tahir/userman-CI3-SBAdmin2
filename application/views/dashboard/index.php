<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-4 mb-3">
            <a href="<?= base_url('menu'); ?>" class="text-decoration-none">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-primary text-uppercase mb-1">Menu</div>
                                <div class="h5 mb-0 font-weight-bold text-black">Total Data : <?= $menu; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list fa-2x text-black"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="<?= base_url('profil'); ?>" class="text-decoration-none">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-primary text-uppercase mb-1">Profil</div>
                                <div class="h5 mb-0 font-weight-bold text-black">Total Data : <?= $profil; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-black"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="<?= base_url('user'); ?>" class="text-decoration-none">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-primary text-uppercase mb-1">User</div>
                                <div class="h5 mb-0 font-weight-bold text-black">Total Data : <?= $user; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-black"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>
