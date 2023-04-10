<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <?php foreach (array_slice($boxe, 0, 4) as $boxa) : ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-header bg-light position-sticky top-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="h5 mb-0 font-weight-bold text-gray-600"><?= $boxa->boxa_nume ?><br> <?= $boxa->boxa_locatie ?></br></div>
                                <a hreaf="<?= base_url() ?>boxe/modifica_boxe" class="btn">
                                    <i class="fas fa-calendar fixed-top-card fa-2x text-gray-400"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">


                                    <?php $arr = explode("\n", $boxa->boxa_istoric);
                                    foreach ($arr as $item) : ?>
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $item ?></div>
                                    <?php endforeach; ?>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php foreach (array_chunk(array_slice($boxe, 4), 4) as $chunk) : ?>
        <div class="col-lg-12">
            <div class="row">
                <?php foreach ($chunk as $boxa) : ?>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-header bg-light position-sticky top-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="h5 mb-0 font-weight-bold text-gray-600"><?= $boxa->boxa_nume ?> <?= $boxa->boxa_locatie ?> </div>
                                    <i class="fas fa-calendar fixed-top-card fa-2x text-gray-400"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <?php $arr = explode("\n", $boxa->boxa_istoric);
                                        foreach ($arr as $item) : ?>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $item ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>


