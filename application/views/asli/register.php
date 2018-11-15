<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI Registration</title>
    <link href="<?= BASE_ASSETS ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class='container' style='margin-top: 40px;'>
    <div class='row'>
        <div class='col-md-4'>
        </div>
        <div class='col-md-4'>
            <div class='panel panel-default'>
                <div class='panel-body'>
                    <!-- validation message for a successful registration -->
                    <?php if ($this->session->flashdata('success')) {?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php  } ?>
                    <h1 class="header-w3ls" align="center">

                        Register</h1>

                    <!-- validation messages for taking inputs -->
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                    ?>

                    <form action="<?= base_url("register/registration") ?>" method="post" name="formregister" id="formregister">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
<!--                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" id="password" placeholder="Password">
                    </div>
-->                    <button class="btn btn-primary" name='reg'>REGISTER</button>
                    <a href="<?= base_url("login") ?>" class="btn btn-link">Sign In</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="<?= BASE_ASSETS ?>assets/jquery-3.2.1.min.js"></script>
<script src="<?= BASE_ASSETS ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>