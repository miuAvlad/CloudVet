<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lista utilizatori</h1>
    </div>

    <div class="row">
        <!-- DataTales Example -->
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lista utilizatori</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="utilizatoriTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nume</th>
                                    <th>Email</th>
                                    <th>Actiuni</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nume</th>
                                    <th>Email</th>
                                    <th>Actiuni</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($utilizatori as $utilizator) : ?>
                                    <tr>
                                        <td><?= $utilizator->id_user; ?></td>
                                        <td><?= $utilizator->user_nume; ?></td>
                                        <td><?= $utilizator->user_email; ?></td>
                                        <td>

                                            <a href="<?= base_url() ?>utilizatori/adauga_utilizator/" class="btn btn-success btn-circle">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                            <a href="<?= base_url() ?>utilizatori/editeaza_utilizator/<?= $utilizator->id_user; ?>" class="btn btn-primary btn-circle">
                                                <i class="fas fa-arrow-right"></i>
                                            </a>

                                            <a href="<?= base_url() ?>utilizatori/sterge_utilizator/<?= $utilizator->id_user; ?>" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>