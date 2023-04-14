<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Boxa: <?= $boxe->boxa_nume . "  " ?><?= $boxe->boxa_locatie ?></h1>
    </div>

    <div class="row">
        <!-- DataTales Example -->
        <div class="col-lg-5 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-header bg-light position-sticky top-0">

                    <div class="h5 mb-0 font-weight-bold text-gray-600 text-center">Istoric</div>

                </div>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <?php $arr = explode("\n", $boxe->boxa_istoric);
                            $count=0;

                            foreach ($arr as $item) : ?>
                            <?php if($item):?>
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <div class="text-m font-weight-bold text-primary text-uppercase"><?= $item ?></div>
                                    <a href="<?php echo base_url() ?>boxe/delete_caine_from_istoric/<?= $count?>/<?=$boxe->boxa_nume?>" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    </div>
                                    <?php endif;?>
                                <?php $count++;?>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-5">
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
                    <?php $firstserialize = serialize($boxe);?>
                    <form method="POST" action="<?php echo base_url() ?>boxe/update_boxe/<?=$url=urlencode($firstserialize)?>">

                        <div class="row">

                            <div class="form-group col-8">
                                <label>Nume boxa</label>
                                <input type="text" class="form-control" required name="boxa_nume" value="<?= $boxe->boxa_nume ?>" minlength="3">
                            </div>
                            <div class="form-group col-8">
                                <label>Locatie boxa</label>
                                <input type="text" class="form-control" required name="boxa_locatie" value="<?= $boxe->boxa_locatie ?>">
                            </div>
                            <div class="form-group col-8">
                                <label>Adauga caine(nr cip)</label>
                                <input type="text" class="form-control"  name="NrCip">
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
                    <h6 class="m-0 font-weight-bold text-danger">Remindere</h6>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>