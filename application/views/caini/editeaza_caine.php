<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editeaza caine <?= $dogs->NrCrt ?></h1>
    </div>

    <div class="row">
        <!-- DataTales Example -->
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Editeaza caine</h6>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <?= $this->session->flashdata('success'); ?>
                        </div>
                    <?php elseif ($this->session->flashdata('error')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <?= $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo base_url() ?>caini/update_caine/<?= $dogs->NrCrt ?>">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Data nastere</label>
                                <input type="date" class="form-control form-control-user" name="DataNastere" value="<?= $dogs->DataNastere ?>">
                            </div>
                            <div class="col-sm-6">
                                <label>Data intrare adapost </label>
                                <input type="date" class="form-control form-control-user" name="DataIntrareAdapost" value="<?= $dogs->DataIntrareAdapost ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Iesire adapost</label>
                                <input type="date" class="form-control form-control-user" name="IesireAdapost" value="<?= $dogs->IesireAdapost ?>">
                            </div>
                            <div class="col-sm-6">
                                <label>Numar cip </label>
                                <input type="text" class="form-control form-control-user" name="NrCip" value="<?= $dogs->NrCip ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <label>Numar boxa</label>
                                <input type="text" class="form-control form-control-user" name="NrBoxa" value="<?= $dogs->NrBoxa ?>">
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <label>Vezi boxa</label><br>
                                <a href="<?= base_url()."/boxe/modifica_boxe/".$dogs->NrBoxa ?>">Boxa <?= $dogs->NrBoxa?></a>
                            </div>
                            <div class="col-sm-6">
                                <label>Nume apartinator </label>
                                <input type="text" class="form-control form-control-user" name="NumeApartinator" value="<?= $dogs->NumeApartinator ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Talie</label>
                                <input type="text" class="form-control form-control-user" name="Talie" value="<?= $dogs->Talie ?>">
                            </div>
                            <div class="col-sm-6">
                                <label>Caracter</label>
                                <input type="text" class="form-control form-control-user" name="Caracter" value="<?= $dogs->Caracter ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Telefon apartinator</label>
                                <input type="text" class="form-control form-control-user" name="TelefonApartinator" value="<?= $dogs->TelefonApartinator ?>">
                            </div>
                            <div class="col-sm-6">
                                <label>Deces </label>
                                <input type="date" class="form-control form-control-user" name="Deces" value="<?= $dogs->Deces ?>">
                            </div>
                        </div>


                        <button class="btn btn-success" type="submit">Actualizeaza informatii</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Vaccinuri caine</h6>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="<?= base_url() ?>/caini/adauga_vaccin/<?= $dogs->NrCrt; ?>">
                        <div class="row">
                            <div class="form-group col-6">
                                <label>Tip vaccin</label>
                                <input type="text" class="form-control" required name="tip_vaccin" minlength="3">
                            </div>
                            <div class="form-group col-6">
                                <label>Data vaccin</label>
                                <input type="date" class="form-control" required name="data_vaccin">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Adauga vaccin</button>
                    </form>
                    <br>
                    <div class="table table-responsive table-striped">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr style="font-weight:600;">
                                    <td>Tip vaccin</td>
                                    <td>Data vaccin</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($vaccinuri as $vaccin) : ?>
                                    <tr>
                                        <td><?= $vaccin->tip_vaccin ?></td>
                                        <td><?= date("d.m.Y", strtotime($vaccin->data_vaccin)) ?></td>
                                        <td><a href="<?= base_url() ?>caini/sterge_vaccin/<?= $vaccin->id_vaccin; ?>" class="btn btn-danger btn-circle">
                                                <i class="fas fa-sm fa-trash"></i>
                                            </a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-danger">Remindere</h6>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>