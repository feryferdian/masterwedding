<?php
/**
 * Created by PhpStorm.
 * User: Fery
 * Date: 18/09/2018
 * Time: 15:11
 */
include APPPATH . 'views/fragment/header.php';
//include APPPATH . 'views/fragment/menu.php';
//?>

    <!------ Include the above in your HEAD tag ---------->

<div class="container">
    <?= isset($message) ? $message : "" ?>
    <div class="row"  >
        <div class="col-sm-6 col-md-4 col-md-offset-4" >
            <h1 class="text-center login-title bg-info">Login</h1>
            <div class="account-wall" >
                <img class="profile-img" src="" alt="">
                <form class="form-signin" action="<?= base_url("welcome/login") ?>" name="formlogin" method="post" id="formlogin">
                    <input type="text" class="form-control" placeholder="Email" required autofocus name="username" id="username">
                    <input type="password" class="form-control" placeholder="Password" required name="password" id="password">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>
                    <!--                    <label class="checkbox pull-left">
                                            <input type="checkbox" value="remember-me">
                                            Remember me
                                        </label>
                    --><!--                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>-->
                </form>
            </div>
            <!--            <a href="#" class="text-center new-account">Create an account </a>-->
        </div>
    </div>

</div>
<!--<main>
    <h2>Login</h2>
    <div class="container ">
        <?/*= isset($message) ? $message : "" */?>
        <table class="table table-bordered">
            <form action="<?/*= base_url("welcome/login") */?>" name="formlogin" method="post" id="formlogin">
                <tr class="form-group">
                    <th for="username">Username</th>
                    <td><input class="form-group form-text " type="text" name="username" id="username" size="30" required="required"></td>
                </tr>
                <tr class="form-group">
                    <th for="password">Password</th>
                    <td><input class="form-group form-text" type="password" name="password" id="password" size="30" required="required"></td>
                </tr>
                <tr class="form-group">
                    <td colspan="2" align="center"><input type="submit" value="Login" id="submit" name="submit"></td>
                <tr/>
            </form>
        </table>
    </div>
</main>
-->
<?php include APPPATH . 'views/fragment/footer.php'; ?>
