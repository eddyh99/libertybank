<div class="d-flex justify-content-center">
    <div class="col-12 col-lg-8 ">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <?php if (@isset($_SESSION["failed"])) { ?>
                    <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="notif-login f-poppins"><?= @$_SESSION["failed"] ?></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                <?php } ?>
                <?php if (@isset($_SESSION["success"])) { ?>
                    <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                        <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                <?php } ?>
                <p class="text-center mt-5 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ducimus cumque saepe numquam! Recusandae commodi totam id maxime necessitatibus repellat laudantium placeat quaerat vero aliquam? Ea repellendus ipsum nesciunt corrupti, assumenda, veniam voluptate maxime a nihil ex ratione, perferendis id saepe expedita praesentium debitis mollitia aspernatur illum minus porro voluptatem!
                </p>
                <form action="<?=base_url()?>support/topup_proses" method="POST" enctype='multipart/form-data'>
                    <input  type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="mt-5 input-outlined w-100">
                        <input name="receiverucode" type="text" class="w-100" maxlength="8" placeholder="" required>
                        <label><span style="color: red;">*</span> Unique code receiver</label>
                    </div>
                    <div class="mt-5 input-outlined w-100">
                        <input type="text" name="date" class="w-100" value="" />
                        <label> <span style="color: red;">*</span> Date</label>
                    </div>
                    <div class="mt-5 select-support w-100">
                        <select name="currency" id="kat2" class="select-support-text w-100" required>
                            <option value="" selected disabled>
                                <span style="color: red;">*</span>Currency
                            </option>
                            <?php foreach ($currency as $dt){ ?>
                            <option value="<?=$dt->currency?>"><?=$dt->currency?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mt-5 input-outlined w-100">
                        <input name="amount" type="text" class="w-100 money-input" placeholder="" required>
                        <label> <span style="color: red;">*</span> Total amount</label>
                    </div>
                    <div class="mt-5 input-outlined w-100">
                        <input name="description" type="text" class="w-100" placeholder="" required>
                        <label> <span style="color: red;">*</span> Description</label>
                    </div>
                    <!-- Start logo -->
                    <div class="col-md-12 my-5 pt-5">        
                        <p class=" fw-bolder text-black text-start mb-3 text-findme"><span style="color: red;">*</span>Import PDF bank transfer</p>
                        <div class="d-flex flex-column">
                          <div class="row ">
                            <div class="col-12 col-sm-8 col-lg-6 input-logo-business">
                              <input name="logo" type="file" id="images-logo" accept="image/png" required>
                            </div>
                          </div>
                        </div>

                      </div>
                      <!-- End logo -->




                    <div class="d-flex justify-content-center mt-5 pt-5">
                        <button type="submit" class="btn btn-support f-poppins">
                            Next
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>