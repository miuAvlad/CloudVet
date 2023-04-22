<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Adauga caine </h1>
    </div>

    <div class="row">
        <!-- DataTales Example -->
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Adauga caine</h6>
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

                    <form method="POST" action="<?php echo base_url() ?>caini/add_caine/">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>Numar cip (obligatoriu)</label>
                                <input type="text" class="form-control form-control-user" name="NrCip" required>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>ID boxa</label>
                                <input type="text" class="form-control form-control-user" name="NrBoxa">
                            </div>

                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Data nastere (obligatoriu)</label>
                                <input type="date" class="form-control form-control-user" name="DataNastere" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>Data intrare adapost </label>
                                <input type="date" class="form-control form-control-user" name="DataIntrareAdapost">
                            </div>


                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Data iesire adapost</label>
                                <input type="date" class="form-control form-control-user" name="IesireAdapost">
                            </div>

                        </div>


                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Talie</label>
                                <input type="text" class="form-control form-control-user" name="Talie">
                            </div>
                            <div class="col-sm-6">
                                <label>Caracter</label>
                                <input type="text" class="form-control form-control-user" name="Caracter">
                            </div>
                        </div>

                      

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Telefon apartinator (obligatoriu)</label>
                                <input type="text" class="form-control form-control-user" name="TelefonApartinator" required>
                            </div>
                            <div class="col-sm-6">
                                <label>Nume apartinator (obligatoriu)</label>
                                <input type="text" class="form-control form-control-user" name="NumeApartinator" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>Deces </label>
                                <input type="date" class="form-control form-control-user" name="Deces">
                            </div>
                        </div>


                        <button class="btn btn-success" type="submit">Actualizeaza informatii</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>