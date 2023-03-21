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
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Numar boxa</label>
                                <input type="text" class="form-control form-control-user" name="NrBoxa" value="<?= $dogs->NrBoxa ?>">
                            </div>
                            <div class="col-sm-6">
                                <label>Nume apartinator </label>
                                <input type="text" class="form-control form-control-user" name="NumeApartinator" value="<?= $dogs->NumeApartinator ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Vaccin antirabic</label>
                                <input type="date" class="form-control form-control-user" name="VaccinareAntiRabica" value="<?= $dogs->VaccinareAntiRabica ?>">
                            </div>
                            <div class="col-sm-6">
                                <label>Vaccin polivalent </label>
                                <input type="date" class="form-control form-control-user" name="VaccinPolivalent" value="<?= $dogs->VaccinarePolivalenta ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Deparazitare interna</label>
                                <input type="date" class="form-control form-control-user" name="DeparazitareInterna" value="<?= $dogs->DeparazitareInterna ?>">
                            </div>
                            <div class="col-sm-6">
                                <label>Deparazitare externa</label>
                                <input type="date" class="form-control form-control-user" name="DeparazitareExterna" value="<?= $dogs->DeparazitareExterna ?>">
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
</div>