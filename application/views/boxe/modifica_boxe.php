<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Boxa: <b><?= $boxa->boxa_nume . "</b> - " ?><?= $boxa->boxa_locatie ?></h1>
    </div>

    <div class="row">
        <!-- DataTales Example -->
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-header bg-light position-sticky top-0">

                    <div class="h5 mb-0 font-weight-bold text-gray-600 text-center">Caini in boxa</div>

                </div>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <?php
                            foreach ($cainiBoxa as $caine) : ?>

                                <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                                    <a href="<?php echo base_url() ?>/caini/editeaza_caine/<?= $caine->NrCrt ?>/0/NULL">CIP:<?= $caine->NrCip ?> // Varsta: <?php $diff = date_diff(date_create($caine->DataNastere), date_create(date("Y-m")));
                                                                                                                                                        echo $diff->format('%y') . " ani " . $diff->format('%m') . " luni " ?> // Talie(<?= $caine->Talie ?>) // Caracter(<?= $caine->Caracter ?>)</a>
                                    <a style="color:red;" href="<?php echo base_url() ?>boxe/delete_caine_from_boxa/<?= $boxa->id_boxa ?>/<?= $caine->NrCrt ?>">
                                        <i class="fas fa-trash" style="font-size: 18px;"></i>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Editeaza boxa</h6>
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

                    <form method="POST" action="<?php echo base_url() ?>boxe/update_boxe/<?= $boxa->id_boxa ?>">

                        <div class="row">
                            <div class="form-group col-8">
                                <label>Nume boxa</label>
                                <input type="text" class="form-control" required name="boxa_nume" value="<?= $boxa->boxa_nume ?>" minlength="3">
                            </div>
                            <div class="form-group col-8">
                                <label>Locatie boxa</label>
                                <input type="text" class="form-control" required name="boxa_locatie" value="<?= $boxa->boxa_locatie ?>">
                            </div>
                            <div class="form-group col-8">
                                <label>Capacitate maxima boxa</label>
                                <input type="text" class="form-control" name="capacitate" value="<?= $boxa->capacitate ?>">
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Actualizeaza informatii</button>
                        
                        <a href="<?= base_url() ?>boxe/sterge_boxa/<?=$boxa->id_boxa?>" class="btn btn-danger">
                            Sterge boxa
                        </a>
                       
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="row">

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