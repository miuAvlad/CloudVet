<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lista caini</h1>
    </div>

    <div class="row">
        <!-- DataTales Example -->
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lista caini</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="cainiTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>#</th>
                                    <th>Varsta</th>
                                    <th>Data intrare adapost </th>
                                    <th>Iesire adapost </th>
                                    <th>Deces</th>
                                    <th>Nr cip </th>
                                    <th>ID boxa</th>
                                    <th>Nume apartinator</th>
                                    <th>Telefon apartinator </th>
                                    <th>Actiuni</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Varsta</th>
                                    <th>Data intrare adapost </th>
                                    <th>Iesire adapost </th>
                                    <th>Deces</th>
                                    <th>Nr cip </th>
                                    <th>ID boxa</th>
                                    <th>Nume apartinator</th>
                                    <th>Telefon apartinator </th>
                                    <th>Actiuni</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <!-- valori din baza de date -->
                                <?php foreach ($caini as $caine) : ?>
                                    <tr>
                                        <td><?= $caine->NrCrt; ?></td>
                                        <td><?php
                                         $difference_y = date_diff(date_create($caine->DataNastere),date_create(date("Y-m-d")))->format('%y'); 
                                         $difference_m = date_diff(date_create($caine->DataNastere),date_create(date("Y-m-d")))->format('%m');
                                         if($difference_y < 1){
                                            echo $difference_m." luni";
                                         }else{
                                            echo $difference_y." ani si ".$difference_m." luni";
                                         }
                                         ?></td>
                                        <td><?= ($caine->DataIntrareAdapost) ? date("d.m.Y", strtotime($caine->DataIntrareAdapost)) : "-"; ?></td>
                                        <td><?= ($caine->IesireAdapost) ? date("d.m.Y", strtotime($caine->IesireAdapost)) : "-"; ?></td>
                                        <td><?= ($caine->Deces) ? date("d.m.Y", strtotime($caine->Deces)) : "-"; ?></td>
                                    
                                        <td><?= $caine->NrCip; ?></td>
                                        <td><?= $caine->NrBoxa; ?></td>
                                        <td><?= $caine->NumeApartinator; ?></td>
                                        <td><?= $caine->TelefonApartinator; ?></td>

                                        <td>
                                            <!-- ================== De modificat =================== -->
                                            <a href="<?= base_url() ?>caini/adauga_caine/" class="btn btn-success btn-circle">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                            <a href="<?= base_url() ?>caini/editeaza_caine/<?= $caine->NrCrt; ?>/0/NULL" class="btn btn-primary btn-circle">
                                                <i class="fas fa-arrow-right"></i>
                                            </a>

                                            <a href="<?= base_url() ?>caini/sterge_caine/<?= $caine->NrCrt; ?>" class="btn btn-danger btn-circle">
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

<script>
    $(document).ready(function() {
        //datatable initialization
        $("#cainiTable").dataTable({
            dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });
    });
</script>