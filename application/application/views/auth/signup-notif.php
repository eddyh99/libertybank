<div class="login bg-signin">
    <div class="container">
        <div class="row d-flex d-lg-inline-grid justify-content-center">
            <div class="col-10 col-sm-9 col-md-8 col-lg-7 col-xl-5 box-form">
                <form class="form-login-freedy d-flex align-items-start flex-column" style="height: 100%;" method="POST"
                    action="<?= base_url(); ?>auth/resetpass">
                    <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                        value="<?php echo $this->security->get_csrf_hash(); ?>">

                    <?php if (@isset($_SESSION["failed"])) { ?>
                    <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>
                    <?php if (@isset($_SESSION["success"])) { ?>
                    <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                        <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>
                    <div class="col-12 mb-4 d-flex justify-content-center">
                        <img src="<?= base_url('assets/img/logo.png')?>" alt="logo">
                    </div>
                    <div class="col-12 mb-auto mt-4">
                        <h5 class="text-center text-blue-freedy fw-semibold">
                            To activate your LibertyBank account
                            click the link received in your registration email
                            <br>
                            ATTENTION : 
                            <br>
                            You will receive the email within 15 minutes
                            If you don’t see it check into the SPAM folder
                        </h5>
                    </div>
                    <div class="col-12 d-grid gap-2">
                        <a href="<?= base_url(); ?>" class="btn btn-login f-roboto text-white">BACK</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>