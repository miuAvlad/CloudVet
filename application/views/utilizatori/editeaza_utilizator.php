<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editeaza utilizator: <b><?= $user->user_nume ?></b></h1>
    </div>

    <div class="row">
        <!-- DataTales Example -->
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Editeaza utilizator</h6>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <?= $this->session->flashdata('success'); ?>
                        </div>
                    <?php elseif($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <?= $this->session->flashdata('error');?>
                        </div>
                    <?php endif;?>

                    <form method="POST" action="<?php echo base_url() ?>utilizatori/update_utilizator/<?= $user->id_user ?>">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Nume</label>
                                <input type="text" class="form-control form-control-user" name="user_nume" value="<?= $user->user_nume ?>" required minlength="4">
                            </div>
                            <div class="col-sm-6">
                                <label>Email</label>
                                <input type="email" class="form-control form-control-user" name="user_email" value="<?= $user->user_email ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Parola (completeaza parola noua pentru resetare)</label>
                                <input type="text" class="form-control form-control-user" name="user_parola">
                            </div>
                        </div>

                        <button class="btn btn-success" type="submit">Actualizeaza informatii</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>