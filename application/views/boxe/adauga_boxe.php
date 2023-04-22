<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Adauga boxa</h1>
    </div>

    <div class="row">
        <!-- DataTales Example -->
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Adauga boxa</h6>
                </div>
                <div class="card-body">

                    <!-- ==== toastr === -->
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



                    <form method="POST" action="<?php echo base_url() ?>boxe/add_post_boxe">
                        <div class="row">
                            <div class="form-group col-8">
                                <label>Nume boxa</label>
                                <input type="text" class="form-control" required name="boxa_nume" minlength="3">
                            </div>
                            <div class="form-group col-8">
                                <label>Locatie boxa</label>
                                <input type="text" class="form-control" required name="boxa_locatie" >
                            </div>
                            <div class="form-group col-8">
                                <label>Capacitate maxima boxa</label>
                                <input type="text" class="form-control" name="capacitate" >
                            </div>
                        </div>

                        <button class="btn btn-success" type="submit">Adauga boxa</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>