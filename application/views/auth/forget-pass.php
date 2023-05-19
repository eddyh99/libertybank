<div class="login bg-login">
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
                    <div class="col-12 mb-4 text-start">
                        <span class="my-3 title f-roboto">Forget password ?</span>
                    </div>
                    <div class="col-12 mb-auto mt-4">
                        <label for="email" class="form-label f-roboto fw-semibold">Your email</label>
                        <div class="input-group">
                            <input type="text" class="form-control f-publicsans" name="email" id="email"
                                 required>
                            <div class="input-group-text">
                                <span>
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-grid gap-2">
                        <button type="submit" class="btn btn-login f-roboto">CONTINUE</button>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-4">
                        <a href="<?= base_url(); ?>auth/login" class="f-roboto text-blue-freedy">Back to log in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>