<div class="d-flex justify-content-center">
    <div class="col-12 col-lg-8 ">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <p class="text-center mt-5 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ducimus cumque saepe numquam! Recusandae commodi totam id maxime necessitatibus repellat laudantium placeat quaerat vero aliquam? Ea repellendus ipsum nesciunt corrupti, assumenda, veniam voluptate maxime a nihil ex ratione, perferendis id saepe expedita praesentium debitis mollitia aspernatur illum minus porro voluptatem!
                </p>
                <div class="mt-5">
                    <label for=""><span style="color: red;">*</span>Unique code</label><br>
                    <input type="text" class="input-support w-100" placeholder="Enter unique code">
                </div>
                <div class="mt-5">
                    <span style="color: red;">*</span
                    >Select your case
                </div>
                <div class="row my-4 d-flex justify-content-start">
                    <div class="col-12 col-md-6  col-xl-4">
                        <label class="label-dhl">
                            <input type="radio" name="dhl" class="card-input-support d-none" value="fast" required>
                            <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="c-support"></div>
                                    <span class="m-support fw-bold">
                                        Top up
                                    </span>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 ms-0 ms-md- mt-4 mt-md-0">
                        <label class="label-dhl">
                            <input type="radio" name="dhl" class="card-input-support d-none" value="reg" required>
                            <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="c-support"></div>
                                    <span class="m-support fw-bold">
                                        Wallet to bank
                                    </span>
                                </div>
                            </div>
                        </label>
                    </div> 
                </div>
                <div class="d-flex justify-content-center mt-5 pt-5">
                    <button type="submit" class="btn btn-support f-poppins">
                        <a href="<?= base_url()?>support/topup">
                            Next
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>