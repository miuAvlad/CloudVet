<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <?php foreach ($boxe as $boxa) : ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-header bg-light position-sticky top-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="p mb-0 font-weight-bold text-gray-600">ID:<?=$boxa->id_boxa ?> <br>Nume: <?= $boxa->boxa_nume ?><br> Locatie: <?= $boxa->boxa_locatie ?><br> Capacitate: <?= $boxa->nr_caini ?>/<?= $boxa->capacitate ?></br></br></div>
                                <a href="<?= base_url() ?>boxe/modifica_boxe/<?= $boxa->id_boxa ?>" class="btn">
                                    <i class="fas fa-box fixed-top-card fa-2x text-gray-400" style="position: absolute; top: 10px; right: 10px;"></i>

                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">

                                    <?php foreach ($boxa->caini as $caine) : ?>
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="<?php echo base_url() ?>/caini/editeaza_caine/<?= $caine->NrCrt ?>">
                                               Intrare adapost:<?= $caine->DataIntrareAdapost ?> // CIP:<?= $caine->NrCip ?> // Varsta: <?php  $diff=date_diff(date_create($caine->DataNastere), date_create(date("Y-m"))); echo $diff->format('%y')." ani ".$diff->format('%m')." luni "?>
                                            </a>
                                            <a href="<?php echo base_url() ?>boxe/delete_caine_from_boxa/<?= $boxa->id_boxa ?>/<?= $caine->NrCrt ?>">
                                                <i class="fas fa-trash" style="font-size: 12px;"></i>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>