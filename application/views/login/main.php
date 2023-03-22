<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CloudVet</title>
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/all.css">
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/toast/toast.min.css">
    <script src="<?php echo site_url(); ?>assets/toast/jqm.js"></script>
    <script src="<?php echo site_url(); ?>assets/toast/toast.js"></script>
    <!--Bootstrap 5 Login Page-->


</head>

<body style="background :   #A8D8FF;">
    <section class="vh-100" style="background: linear-gradient( #BFF098, #6FD6FF);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 2rem;">
                        <div class="card-body p-5 text-center">
                            <img src="<?php echo base_url();?>assets/logo.png" width="300px">
                            <div class="mb-md-5">

                                <form method="POST" action="<?php echo base_url(); ?>/login/auth">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your mail and password!</p>
                                    <?php if ($this->session->flashdata('error')) {
                                        echo "<p style='color:red'>" . $this->session->flashdata('error') . "</p>";
                                    }
                                    ?>
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="email" class="form-control form-control-lg" autocomplete="off" name="email" required/>
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg" name="password" required/>
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>



                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                </form>
                            </div>

                            <div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>