<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="author" content="Miu Vlad">
    <meta name="keywords" content="cabinet veterinar">
    <meta name="description" content="Vet app">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <form method="POST" action="<?php echo base_url();?>/login/auth">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your mail and password!</p>
                                    <?php if($this->session->flashdata('error')){
                                        echo "<p style='color:red'>".$this->session->flashdata('error')."</p>";
                                    }
                                    ?>
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="email" class="form-control form-control-lg" name="email" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg" name="password" />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                        <label class="form-check-label" for="form1Example3"> Remember password </label>
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

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